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

/* modules/custom/djfit_videos/templates/djfit-home-videos.html.twig */
class __TwigTemplate_c3dbcc4a101ea1cc042af01728c0453f extends Template
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
        yield "<div class=\"home-videos__grid\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 4
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, true, 4), "html", null, true);
            yield "\" class=\"home-videos__card\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "heading", [], "any", false, false, true, 4), "html", null, true);
            yield "\">
      <div class=\"home-videos__media\">
        ";
            // line 6
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["video"], "image_url", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "          <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "image_url", [], "any", false, false, true, 7), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "heading", [], "any", false, false, true, 7), "html", null, true);
                yield "\" class=\"home-videos__thumb\" loading=\"lazy\" />
        ";
            } else {
                // line 9
                yield "          <div class=\"home-videos__placeholder\">
            <svg class=\"home-videos__placeholder-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
              <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
              <circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
              <path d=\"M3 16L8 11L13 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              <path d=\"M14 15L17 12L21 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            </svg>
          </div>
        ";
            }
            // line 18
            yield "
        <div class=\"home-videos__overlay\">
          <div class=\"home-videos__play-btn\">
            ";
            // line 21
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["video"], "locked", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "              <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" class=\"home-videos__icon\">
                <rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
                <path d=\"M7 11V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V11\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
              </svg>
            ";
            } else {
                // line 27
                yield "              <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" class=\"home-videos__icon\">
                <polygon points=\"5,3 19,12 5,21\" fill=\"currentColor\"/>
              </svg>
            ";
            }
            // line 31
            yield "          </div>
        </div>

        <span class=\"home-videos__badge home-videos__badge--";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["video"], "badge", [], "any", false, false, true, 34)), "html", null, true);
            yield "\">
          ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "badge", [], "any", false, false, true, 35), "html", null, true);
            yield "
        </span>
      </div>

      <div class=\"home-videos__content\">
        <h4 class=\"home-videos__card-heading\">";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "heading", [], "any", false, false, true, 40), "html", null, true);
            yield "</h4>
        <p class=\"home-videos__card-body\">";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["video"], "body", [], "any", false, false, true, 41)), "html", null, true);
            yield "</p>
      </div>
    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['video'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["videos"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/djfit_videos/templates/djfit-home-videos.html.twig";
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
        return array (  131 => 45,  121 => 41,  117 => 40,  109 => 35,  105 => 34,  100 => 31,  94 => 27,  87 => 22,  85 => 21,  80 => 18,  69 => 9,  61 => 7,  59 => 6,  51 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/djfit_videos/templates/djfit-home-videos.html.twig", "/var/www/html/web/modules/custom/djfit_videos/templates/djfit-home-videos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 3, "if" => 6];
        static $filters = ["escape" => 4, "lower" => 34, "striptags" => 41];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'lower', 'striptags'],
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
