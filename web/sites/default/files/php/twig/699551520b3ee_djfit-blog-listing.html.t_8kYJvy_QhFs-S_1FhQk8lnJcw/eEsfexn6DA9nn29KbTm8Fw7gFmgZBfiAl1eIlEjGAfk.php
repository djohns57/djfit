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

/* modules/custom/djfit_blog/templates/djfit-blog-listing.html.twig */
class __TwigTemplate_dfa6a41001caeceedcf2efd85f37d593 extends Template
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
        yield "<div class=\"blog-filters\">
  <div class=\"blog-filters__container\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 5
            yield "      <a href=\"/blog";
            if (($context["key"] != "all")) {
                yield "?category=";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
            }
            yield "\"
         class=\"blog-filters__tab";
            // line 6
            if ((($context["active_filter"] ?? null) == $context["key"])) {
                yield " blog-filters__tab--active";
            }
            yield "\">
        ";
            // line 7
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["label"], "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
                }
            }
            yield "
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "  </div>
</div>

";
        // line 14
        yield "<section class=\"blog-grid\">
  <div class=\"blog-grid__container\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            yield "      <article class=\"blog-card\">
        <div class=\"blog-card__media\">
          ";
            // line 19
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_url", [], "any", false, false, true, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "            <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_url", [], "any", false, false, true, 20), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 20), "html", null, true);
                yield "\" class=\"blog-card__img\" loading=\"lazy\" />
          ";
            } else {
                // line 22
                yield "            <svg class=\"blog-card__placeholder-icon\" viewBox=\"0 0 88 88\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
              <rect width=\"88\" height=\"88\" rx=\"4\" fill=\"#e5e7eb\"/>
              <path d=\"M36 52L42 44L48 50L54 42L60 52H36Z\" fill=\"#9ca3af\"/>
              <circle cx=\"40\" cy=\"38\" r=\"4\" fill=\"#9ca3af\"/>
              <rect x=\"28\" y=\"28\" width=\"32\" height=\"32\" rx=\"2\" stroke=\"#9ca3af\" stroke-width=\"2\" fill=\"none\"/>
            </svg>
          ";
            }
            // line 29
            yield "        </div>
        <div class=\"blog-card__body\">
          <div class=\"blog-card__meta\">
            <span class=\"blog-card__tag blog-card__tag--";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 32), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category_label", [], "any", false, false, true, 32), "html", null, true);
            yield "</span>
            <span class=\"blog-card__date\">
              <svg width=\"12\" height=\"12\" viewBox=\"0 0 12 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <path d=\"M9.5 2H2.5C1.94772 2 1.5 2.44772 1.5 3V10C1.5 10.5523 1.94772 11 2.5 11H9.5C10.0523 11 10.5 10.5523 10.5 10V3C10.5 2.44772 10.0523 2 9.5 2Z\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <path d=\"M8 1V3\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <path d=\"M4 1V3\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <path d=\"M1.5 5H10.5\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              </svg>
              ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 40), "html", null, true);
            yield "
            </span>
          </div>
          <h4 class=\"blog-card__title\">";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), "html", null, true);
            yield "</h4>
          <p class=\"blog-card__excerpt\">";
            // line 44
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "body", [], "any", false, false, true, 44))) > 120)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "body", [], "any", false, false, true, 44)), 0, 120) . "..."), "html", null, true)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "body", [], "any", false, false, true, 44)), "html", null, true)));
            yield "</p>
        </div>
        <div class=\"blog-card__footer\">
          <div class=\"blog-card__author-row\">
            <span class=\"blog-card__author\">";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "author", [], "any", false, false, true, 48), "html", null, true);
            yield "</span>
            <span class=\"blog-card__read-time\">";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "read_time", [], "any", false, false, true, 49), "html", null, true);
            yield "</span>
          </div>
          <a href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), "html", null, true);
            yield "\" class=\"blog-card__link\">
            Read Full Article
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
              <path d=\"M3.33333 8H12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              <path d=\"M8 3.33333L12.6667 8L8 12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            </svg>
          </a>
        </div>
      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["categories", "active_filter", "articles"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/djfit_blog/templates/djfit-blog-listing.html.twig";
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
        return array (  185 => 61,  169 => 51,  164 => 49,  160 => 48,  153 => 44,  149 => 43,  143 => 40,  130 => 32,  125 => 29,  116 => 22,  108 => 20,  106 => 19,  102 => 17,  98 => 16,  94 => 14,  89 => 10,  66 => 7,  60 => 6,  52 => 5,  48 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/djfit_blog/templates/djfit-blog-listing.html.twig", "/var/www/html/web/modules/custom/djfit_blog/templates/djfit-blog-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 4, "if" => 5];
        static $filters = ["escape" => 5, "length" => 44, "striptags" => 44, "slice" => 44];
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
