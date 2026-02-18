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

/* modules/custom/djfit_resources/templates/djfit-resource-listing.html.twig */
class __TwigTemplate_7e1b467fd40dfc27173250a07f48bbac extends Template
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
        // line 7
        yield "
";
        // line 9
        yield "<div class=\"resources-filters\">
  <div class=\"resources-filters__container\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 12
            yield "      <a href=\"/resources";
            if (($context["key"] != "all")) {
                yield "?type=";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
            }
            yield "\"
         class=\"resources-filters__tab";
            // line 13
            if (($context["key"] == ($context["active_filter"] ?? null))) {
                yield " resources-filters__tab--active";
            }
            yield "\">
        ";
            // line 14
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
        // line 17
        yield "  </div>
</div>

";
        // line 21
        yield "<section class=\"resources-grid\">
  <div class=\"resources-grid__container\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["resources"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            yield "      <article class=\"resource-card\">
        <div class=\"resource-card__header\">
          <svg class=\"resource-card__icon\" viewBox=\"0 0 80 80\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <rect x=\"16\" y=\"8\" width=\"48\" height=\"64\" rx=\"4\" stroke=\"white\" stroke-width=\"2.5\" fill=\"none\" opacity=\"0.6\"/>
            <path d=\"M28 28h24M28 36h24M28 44h16\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" opacity=\"0.5\"/>
            <path d=\"M44 8v16h16\" stroke=\"white\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\" opacity=\"0.6\"/>
          </svg>
          <span class=\"resource-card__badge resource-card__badge--";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "access", [], "any", false, false, true, 31), "html", null, true);
            yield "\">
            ";
            // line 32
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "access", [], "any", false, false, true, 32) == "free")) {
                yield "FREE";
            } else {
                yield "MEMBERS";
            }
            // line 33
            yield "          </span>
          <div class=\"resource-card__meta-bar\">
            <span class=\"resource-card__format\">";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "format", [], "any", false, false, true, 35), "html", null, true);
            yield "</span>
            ";
            // line 36
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pages", [], "any", false, false, true, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "              <span class=\"resource-card__pages\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pages", [], "any", false, false, true, 37), "html", null, true);
                yield "</span>
            ";
            }
            // line 39
            yield "          </div>
        </div>
        <div class=\"resource-card__body\">
          <span class=\"resource-card__tag\">";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category_label", [], "any", false, false, true, 42), "html", null, true);
            yield "</span>
          <h4 class=\"resource-card__title\">";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), "html", null, true);
            yield "</h4>
          <p class=\"resource-card__desc\">";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 44), "html", null, true);
            yield "</p>
          ";
            // line 45
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, true, 45)) > 0)) {
                // line 46
                yield "            <div class=\"resource-card__tags\">
              ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, true, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 48
                    yield "                <span class=\"resource-card__tag-pill\">";
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("tag", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "tag");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "tag");
                        }
                    }
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["tag"], "html", null, true);
                    if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                        if (array_key_exists("canvas_slot_ids", $context) && in_array("tag", $context["canvas_slot_ids"], TRUE)) {
                            yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "tag");
                        } else {
                            yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "tag");
                        }
                    }
                    yield "</span>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "            </div>
          ";
            }
            // line 52
            yield "        </div>
        <div class=\"resource-card__footer\">
          ";
            // line 54
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "access", [], "any", false, false, true, 54) == "free") && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "file_url", [], "any", false, false, true, 54))) {
                // line 55
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "file_url", [], "any", false, false, true, 55), "html", null, true);
                yield "\" class=\"resource-card__btn resource-card__btn--download\" download>
              <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <path d=\"M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <polyline points=\"4.67,6.67 8,10 11.33,6.67\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"10\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\"/>
              </svg>
              Download Now
            </a>
          ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["item"], "access", [], "any", false, false, true, 63) == "free")) {
                // line 64
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 64), "html", null, true);
                yield "\" class=\"resource-card__btn resource-card__btn--download\">
              <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <path d=\"M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <polyline points=\"4.67,6.67 8,10 11.33,6.67\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"10\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\"/>
              </svg>
              Download Now
            </a>
          ";
            } else {
                // line 73
                yield "            <button class=\"resource-card__btn resource-card__btn--locked\" disabled>
              <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <rect x=\"3\" y=\"7.33\" width=\"10\" height=\"7.33\" rx=\"1.33\" stroke=\"currentColor\" stroke-width=\"1.33\"/>
                <path d=\"M5.33 7.33V5.33C5.33 3.86 6.53 2.67 8 2.67C9.47 2.67 10.67 3.86 10.67 5.33V7.33\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\"/>
              </svg>
              Members Only
            </button>
            <a href=\"/membership\" class=\"resource-card__upgrade\">Upgrade to access</a>
          ";
            }
            // line 82
            yield "        </div>
      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["categories", "active_filter", "resources"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/djfit_resources/templates/djfit-resource-listing.html.twig";
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
        return array (  245 => 85,  237 => 82,  226 => 73,  213 => 64,  211 => 63,  199 => 55,  197 => 54,  193 => 52,  189 => 50,  166 => 48,  162 => 47,  159 => 46,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  140 => 39,  134 => 37,  132 => 36,  128 => 35,  124 => 33,  118 => 32,  114 => 31,  105 => 24,  101 => 23,  97 => 21,  92 => 17,  69 => 14,  63 => 13,  55 => 12,  51 => 11,  47 => 9,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/djfit_resources/templates/djfit-resource-listing.html.twig", "/var/www/html/web/modules/custom/djfit_resources/templates/djfit-resource-listing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 11, "if" => 12];
        static $filters = ["escape" => 12, "length" => 45];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'length'],
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
