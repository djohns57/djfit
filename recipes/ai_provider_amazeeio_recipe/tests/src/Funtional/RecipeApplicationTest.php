<?php

declare(strict_types=1);

namespace Drupal\Tests\ai_provider_amazeeio_recipe\Functional;

use Drupal\ai_provider_amazeeio\Form\AmazeeioAiConfigForm;
use Drupal\ai_prov_amazeeio_recipe_test_trial_access_prov\TestTrialAccountProvisioner;
use Drupal\ai_provider_amazeeio\TrialAccess\NullProgressReporter;
use Drupal\ai_provider_amazeeio\TrialAccess\TrialAccountProvisionerFactoryInterface;
use Drupal\FunctionalTests\Core\Recipe\RecipeTestTrait;
use Drupal\key\Entity\Key;
use Drupal\Tests\BrowserTestBase;

/**
 * Ensures the recipe is applicable and idempotent.
 *
 * @internal This class is not part of the module's public programming API.
 */
final class RecipeApplicationTest extends BrowserTestBase {

  use RecipeTestTrait;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    // MUST BE always enabled to ensure trial API keys are not provision
    // in tests.
    'ai_prov_amazeeio_recipe_test_trial_access_prov',
  ];

  /**
   * Returns the absolute path to the recipe directory.
   */
  private function getRecipeDir(): string {
    return realpath(dirname(__DIR__, 3));
  }

  /**
   * Returns the recipe machine name (directory name).
   */
  private function getRecipeName(string $dir): string {
    return basename($dir);
  }

  /**
   * Test the recipe applies cleanly and idempotent.
   */
  public function testApplicabilityAndIdempotency(): void {
    $dir = $this->getRecipeDir();

    // The recipe should apply cleanly.
    $this->applyRecipe($dir);
    // Apply it again to prove that it is idempotent.
    $this->applyRecipe($dir);
  }

  /**
   * Test user provided credentials saved correctly.
   */
  public function testUserProvidedCredentialsSavedCorrectly(): void {
    $dir = $this->getRecipeDir();
    $recipe_name = $this->getRecipeName($dir);

    $this->applyRecipe($dir, options: [
      sprintf("--input=%s.llm_host=llm1.example.com", $recipe_name),
      sprintf("--input=%s.llm_api_key=llm-secret", $recipe_name),
      sprintf("--input=%s.postgres_db_host=vectordb1.example.com", $recipe_name),
      sprintf("--input=%s.postgres_db_port=1234", $recipe_name),
      sprintf("--input=%s.postgres_db_username=user_12345", $recipe_name),
      sprintf("--input=%s.postgres_db_password=db-secret", $recipe_name),
      sprintf("--input=%s.postgres_db_default_database=db_1234", $recipe_name),
    ]);

    $config = $this->config('ai_provider_amazeeio.settings');

    self::assertSame(
      AmazeeioAiConfigForm::API_KEY_NAME,
      (string) $config->get('api_key'),
      'Recipe application must not override the configured LiteLLM credentials Key entity ID.'
    );
    self::assertSame(
      AmazeeioAiConfigForm::VDB_PASSWORD_NAME,
      (string) $config->get('postgres_password'),
      'Recipe application must not override the configured VDB password credentials Key entity ID.'
    );

    $api_key_entity = Key::load(AmazeeioAiConfigForm::API_KEY_NAME);
    self::assertNotNull(
      $api_key_entity,
      'The LiteLLM credentials Key entity must exist after applying the recipe.'
    );
    self::assertSame(
      'llm-secret',
      (string) $api_key_entity->getKeyValue(TRUE),
      'The provided LiteLLM password must be stored in the LiteLLM credentials Key entity.'
    );

    $vdb_key_entity = Key::load(AmazeeioAiConfigForm::VDB_PASSWORD_NAME);
    self::assertNotNull(
      $vdb_key_entity,
      'The VDB password credentials Key entity must exist after applying the recipe.'
    );
    self::assertSame(
      'db-secret',
      (string) $vdb_key_entity->getKeyValue(TRUE),
      'The provided VDB password must be stored in the VDB password credentials Key entity.'
    );

    self::assertSame(
      'vectordb1.example.com',
      (string) $config->get('postgres_host'),
      'Applying the recipe must write the expected postgres_host to ai_provider_amazeeio.settings.'
    );
    self::assertSame(
      'db_1234',
      (string) $config->get('postgres_default_database'),
      'Applying the recipe must write the expected postgres_default_database to ai_provider_amazeeio.settings.'
    );
    self::assertSame(
      1234,
      (int) $config->get('postgres_port'),
      'Applying the recipe must overwrite the default postgres_port in ai_provider_amazeeio.settings.'
    );
    self::assertSame(
      'user_12345',
      (string) $config->get('postgres_username'),
      'Applying the recipe must write the expected postgres_username to ai_provider_amazeeio.settings.'
    );
  }

  /**
   * Tests trial access is auto-provisioned when no user input is provided.
   */
  public function testTrialAccessAutoProvisionedWhenNoCredentialsProvided(): void {
    $dir = realpath(dirname(__DIR__, 3));

    $this->applyRecipe($dir);

    $provisioner = \Drupal::service(TrialAccountProvisionerFactoryInterface::class)->create(new NullProgressReporter());
    assert($provisioner instanceof TestTrialAccountProvisioner);
    self::assertTrue($provisioner->wasTriggered(), 'Trial Amazee AI access provisioning triggered due to the lack of credentials provided by the user.');
  }

}
