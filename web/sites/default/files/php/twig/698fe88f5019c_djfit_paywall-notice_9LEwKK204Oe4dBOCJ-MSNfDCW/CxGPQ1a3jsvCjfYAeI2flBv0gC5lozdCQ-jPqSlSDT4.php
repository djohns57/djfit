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

/* djfit:paywall-notice */
class __TwigTemplate_41518b4a054b6749ee21e7049545ddf2 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--paywall-notice"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:paywall-notice"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:paywall-notice"));
        yield "<aside class=\"paywall-notice rounded-sm border border-border bg-card p-6 text-card-foreground shadow-sm\">
  <div class=\"flex flex-col gap-4 md:flex-row md:items-center md:justify-between md:gap-6\">
    <div class=\"max-w-2xl\">
      ";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:heading", ["heading_text" => ((        // line 8
array_key_exists("heading_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_text"] ?? null), "This content is for members")) : ("This content is for members")), "level" => 3, "text_color" => "default", "text_size" => "heading-responsive-3xl", "url" => "No URL", "align" => "left"], false));
        // line 17
        yield "
      <p class=\"mt-2 text-sm text-muted-foreground md:text-base\">
        ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("body_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["body_text"] ?? null), "Join now to access workouts, nutrition plans, and community support.")) : ("Join now to access workouts, nutrition plans, and community support.")), "html", null, true);
        yield "
      </p>
    </div>

    <div class=\"shrink-0\">
      ";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:button", ["href" => ((        // line 28
array_key_exists("button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_url"] ?? null), "/membership")) : ("/membership")), "label" => ((        // line 29
array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "View membership plans")) : ("View membership plans")), "variant" => "primary", "size" => "medium"], false));
        // line 35
        yield "
    </div>
  </div>
</aside>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading_text", "body_text", "button_url", "button_label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:paywall-notice";
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
        return array (  71 => 35,  69 => 29,  68 => 28,  67 => 24,  59 => 19,  55 => 17,  53 => 8,  52 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:paywall-notice", "themes/djfit/components/paywall-notice/paywall-notice.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["default" => 8, "escape" => 19];
        static $functions = ["include" => 5];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['default', 'escape'],
                ['include'],
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
