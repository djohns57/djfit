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

/* modules/custom/djfit_blog/templates/djfit-home-articles.html.twig */
class __TwigTemplate_d81b0e11d85b851e74b4ba920afa1d16 extends Template
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
        // line 2
        yield "<div class=\"home-articles__grid\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            yield "    <article class=\"home-articles__card\">
      <div class=\"home-articles__media\">
        ";
            // line 6
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_url", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "          <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_url", [], "any", false, false, true, 7), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, true, 7), "html", null, true);
                yield "\" class=\"home-articles__image\" loading=\"lazy\" />
        ";
            } else {
                // line 9
                yield "          <div class=\"home-articles__placeholder\">
            <svg class=\"home-articles__placeholder-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
              <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
              <circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
              <path d=\"M3 16L8 11L13 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              <path d=\"M14 15L17 12L21 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            </svg>
          </div>
        ";
            }
            // line 18
            yield "      </div>

      <div class=\"home-articles__meta\">
        <span class=\"home-articles__tag\">";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "tag", [], "any", false, false, true, 21), "html", null, true);
            yield "</span>
        <span class=\"home-articles__date\">";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, true, 22), "html", null, true);
            yield "</span>
      </div>

      <h4 class=\"home-articles__card-heading\">";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, true, 25), "html", null, true);
            yield "</h4>

      <div class=\"home-articles__card-body\">
        <p class=\"home-articles__excerpt\">";
            // line 28
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "body", [], "any", false, false, true, 28))) > 100)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "body", [], "any", false, false, true, 28)), 0, 100) . "..."), "html", null, true)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "body", [], "any", false, false, true, 28)), "html", null, true)));
            yield "</p>
        <a href=\"";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, true, 29), "html", null, true);
            yield "\" class=\"home-articles__read-more\">
          Read More
          <svg class=\"home-articles__arrow\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <path d=\"M3.33333 8H12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <path d=\"M8 3.33333L12.6667 8L8 12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </a>
      </div>
    </article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["articles"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/djfit_blog/templates/djfit-home-articles.html.twig";
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
        return array (  117 => 39,  101 => 29,  97 => 28,  91 => 25,  85 => 22,  81 => 21,  76 => 18,  65 => 9,  57 => 7,  55 => 6,  51 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/djfit_blog/templates/djfit-home-articles.html.twig", "/var/www/html/web/modules/custom/djfit_blog/templates/djfit-home-articles.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 3, "if" => 6];
        static $filters = ["escape" => 7, "length" => 28, "striptags" => 28, "slice" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'length', 'striptags', 'slice'],
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
