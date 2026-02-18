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

/* themes/djfit/templates/layout/page--front.html.twig */
class __TwigTemplate_a9334701402233bdbe5fb729979e9efa extends Template
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
        // line 10
        yield "<div class=\"layout-container\">
  <header role=\"banner\">
    ";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 12), "html", null, true);
        yield "
  </header>

  ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 15), "html", null, true);
        yield "
  ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 16), "html", null, true);
        yield "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    ";
        // line 22
        yield "    ";
        yield from $this->load("djfit:home-hero", 22)->unwrap()->yield(CoreExtension::merge($context, ["heading" => "Health, Strength & Longevity for Men Over 40", "body" => "Science-backed fitness, nutrition, and recovery strategies designed specifically for your stage of life.", "primary_button_label" => "Membership Plans", "primary_button_url" => "/membership", "secondary_button_label" => "Learn More", "secondary_button_url" => "/blog", "hero_image_url" => "/sites/default/files/hero-runner.png", "hero_image_alt" => "Fit man running outdoors with palm trees"]));
        // line 32
        yield "
    ";
        // line 34
        yield "    ";
        yield from $this->load("djfit:home-features", 34)->unwrap()->yield($context);
        // line 35
        yield "
    ";
        // line 37
        yield "    ";
        yield from $this->load("djfit:home-articles", 37)->unwrap()->yield($context);
        // line 38
        yield "
    ";
        // line 40
        yield "    ";
        yield from $this->load("djfit:home-videos", 40)->unwrap()->yield($context);
        // line 41
        yield "
    ";
        // line 43
        yield "    ";
        yield from $this->load("djfit:home-testimonials", 43)->unwrap()->yield($context);
        // line 44
        yield "
    ";
        // line 46
        yield "    ";
        yield from $this->load("djfit:home-cta", 46)->unwrap()->yield($context);
        // line 47
        yield "
    ";
        // line 49
        yield "  </main>

  ";
        // line 52
        yield "  ";
        yield from $this->load("djfit:home-footer", 52)->unwrap()->yield($context);
        // line 53
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/djfit/templates/layout/page--front.html.twig";
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
        return array (  109 => 53,  106 => 52,  102 => 49,  99 => 47,  96 => 46,  93 => 44,  90 => 43,  87 => 41,  84 => 40,  81 => 38,  78 => 37,  75 => 35,  72 => 34,  69 => 32,  66 => 22,  58 => 16,  54 => 15,  48 => 12,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/djfit/templates/layout/page--front.html.twig", "/var/www/html/web/themes/djfit/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 22];
        static $filters = ["escape" => 12];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
