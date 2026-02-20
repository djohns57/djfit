<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* djfit:membership-compare */
class __TwigTemplate_386cd2baab1c27f2d2918d8469e537be extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--membership-compare"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:membership-compare"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:membership-compare"));
        // line 7
        $context["features"] = [["name" => "Basic Workout Videos", "basic" => true, "pro" => true], ["name" => "Community Forum", "basic" => true, "pro" => true], ["name" => "Weekly Newsletter", "basic" => true, "pro" => true], ["name" => "Full Video Library (200+)", "basic" => false, "pro" => true], ["name" => "Advanced Programs", "basic" => false, "pro" => true], ["name" => "Personalized Meal Plans", "basic" => false, "pro" => true], ["name" => "Weekly Coaching Calls", "basic" => false, "pro" => true], ["name" => "Private Coaching Community", "basic" => false, "pro" => true], ["name" => "Downloadable Resources", "basic" => false, "pro" => true], ["name" => "Priority Support", "basic" => false, "pro" => true], ["name" => "Early Access to Content", "basic" => false, "pro" => true]];
        // line 64
        yield "
<section class=\"membership-compare\">
  <div class=\"membership-compare__container\">
    <h2 class=\"membership-compare__heading\">";
        // line 67
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading");
            }
        }
        yield "</h2>
    <p class=\"membership-compare__subtitle\">
      ";
        // line 69
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "subtitle");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "subtitle");
            }
        }
        yield "
    </p>

    <table class=\"membership-compare__table\">
      <thead>
        <tr>
          <th class=\"membership-compare__th membership-compare__th--feature\">Feature</th>
          <th class=\"membership-compare__th membership-compare__th--basic\">Basic</th>
          <th class=\"membership-compare__th membership-compare__th--pro\">Pro</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 82
            yield "          <tr class=\"membership-compare__row\">
            <td class=\"membership-compare__td membership-compare__td--feature\">";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "name", [], "any", false, false, true, 83), "html", null, true);
            yield "</td>
            <td class=\"membership-compare__td membership-compare__td--basic\">
              ";
            // line 85
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "basic", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "                <svg
                  class=\"membership-compare__check\"
                  width=\"20\"
                  height=\"20\"
                  viewBox=\"0 0 20 20\"
                  fill=\"none\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                  aria-label=\"Yes\"
                >
                  <path d=\"M16.667 5L7.5 14.167 3.333 10\" stroke=\"#005a7d\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                </svg>
              ";
            } else {
                // line 98
                yield "                <span class=\"membership-compare__dash\">—</span>
              ";
            }
            // line 100
            yield "            </td>
            <td class=\"membership-compare__td membership-compare__td--pro\">
              ";
            // line 102
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "pro", [], "any", false, false, true, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "                <svg
                  class=\"membership-compare__check\"
                  width=\"20\"
                  height=\"20\"
                  viewBox=\"0 0 20 20\"
                  fill=\"none\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                  aria-label=\"Yes\"
                >
                  <path d=\"M16.667 5L7.5 14.167 3.333 10\" stroke=\"#005a7d\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                </svg>
              ";
            } else {
                // line 115
                yield "                <span class=\"membership-compare__dash\">—</span>
              ";
            }
            // line 117
            yield "            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "      </tbody>
    </table>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading", "subtitle"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:membership-compare";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  167 => 120,  159 => 117,  155 => 115,  141 => 103,  139 => 102,  135 => 100,  131 => 98,  117 => 86,  115 => 85,  110 => 83,  107 => 82,  103 => 81,  74 => 69,  55 => 67,  50 => 64,  48 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:membership-compare", "themes/djfit/components/membership-compare/membership-compare.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "for" => 81, "if" => 85];
        static $filters = ["escape" => 67];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
