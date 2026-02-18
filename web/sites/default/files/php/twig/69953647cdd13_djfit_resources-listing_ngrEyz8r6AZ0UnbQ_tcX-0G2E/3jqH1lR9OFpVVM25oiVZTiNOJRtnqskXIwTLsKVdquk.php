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

/* djfit:resources-listing */
class __TwigTemplate_0175edd4c3718b078917b1d102c01a51 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--resources-listing"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:resources-listing"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:resources-listing"));
        // line 8
        yield "
";
        // line 9
        $context["categories"] = ["all" => "All", "workout_plans" => "Workout Plans", "nutrition_guides" => "Nutrition Guides", "recovery" => "Recovery", "tracking_tools" => "Tracking Tools"];
        // line 16
        yield "
";
        // line 17
        $context["resources"] = [["title" => "12-Week Strength Building Program", "category" => "workout_plans", "category_label" => "Workout Plans", "description" => "Complete progressive overload program with detailed exercise breakdowns", "access" => "members", "format" => "PDF", "pages" => "24 pages"], ["title" => "Beginner Workout Template", "category" => "workout_plans", "category_label" => "Workout Plans", "description" => "Simple 3-day per week routine to build the foundation", "access" => "free", "format" => "PDF", "pages" => "8 pages"], ["title" => "Complete Meal Planning Guide", "category" => "nutrition_guides", "category_label" => "Nutrition Guides", "description" => "Step-by-step guide to planning and preparing balanced meals", "access" => "members", "format" => "PDF", "pages" => "32 pages"], ["title" => "Protein-Rich Recipe Collection", "category" => "nutrition_guides", "category_label" => "Nutrition Guides", "description" => "50 high-protein recipes for muscle building and recovery", "access" => "free", "format" => "PDF", "pages" => "45 pages"], ["title" => "Recovery and Mobility Routine", "category" => "recovery", "category_label" => "Recovery", "description" => "Daily mobility exercises and recovery protocols", "access" => "members", "format" => "PDF", "pages" => "16 pages"], ["title" => "Sleep Optimization Checklist", "category" => "recovery", "category_label" => "Recovery", "description" => "Evidence-based strategies for better sleep quality", "access" => "free", "format" => "PDF", "pages" => "6 pages"], ["title" => "Progress Tracking Workbook", "category" => "tracking_tools", "category_label" => "Tracking Tools", "description" => "Track workouts, nutrition, and body measurements", "access" => "members", "format" => "PDF", "pages" => "52 pages"], ["title" => "Weekly Meal Prep Planner", "category" => "tracking_tools", "category_label" => "Tracking Tools", "description" => "Printable weekly meal planning template", "access" => "free", "format" => "PDF", "pages" => "4 pages"], ["title" => "Exercise Form Reference Guide", "category" => "workout_plans", "category_label" => "Workout Plans", "description" => "Detailed form cues for 50+ exercises", "access" => "members", "format" => "PDF", "pages" => "36 pages"]];
        // line 28
        yield "
";
        // line 30
        yield "<div class=\"resources-filters\">
  <div class=\"resources-filters__container\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 33
            yield "      <a href=\"/resources";
            if (($context["key"] != "all")) {
                yield "?type=";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
            }
            yield "\"
         class=\"resources-filters__tab";
            // line 34
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " resources-filters__tab--active";
            }
            yield "\">
        ";
            // line 35
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
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "  </div>
</div>

";
        // line 42
        yield "<section class=\"resources-grid\">
  <div class=\"resources-grid__container\">
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["resources"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            yield "      <article class=\"resource-card\">
        <div class=\"resource-card__header\">
          <svg class=\"resource-card__icon\" viewBox=\"0 0 80 80\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <rect x=\"16\" y=\"8\" width=\"48\" height=\"64\" rx=\"4\" stroke=\"white\" stroke-width=\"2.5\" fill=\"none\" opacity=\"0.6\"/>
            <path d=\"M28 28h24M28 36h24M28 44h16\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" opacity=\"0.5\"/>
            <path d=\"M44 8v16h16\" stroke=\"white\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\" opacity=\"0.6\"/>
          </svg>
          <span class=\"resource-card__badge resource-card__badge--";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "access", [], "any", false, false, true, 52), "html", null, true);
            yield "\">
            ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "access", [], "any", false, false, true, 53) == "free")) {
                yield "FREE";
            } else {
                yield "MEMBERS";
            }
            // line 54
            yield "          </span>
          <div class=\"resource-card__meta-bar\">
            <span class=\"resource-card__format\">";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "format", [], "any", false, false, true, 56), "html", null, true);
            yield "</span>
            <span class=\"resource-card__pages\">";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pages", [], "any", false, false, true, 57), "html", null, true);
            yield "</span>
          </div>
        </div>
        <div class=\"resource-card__body\">
          <span class=\"resource-card__tag\">";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category_label", [], "any", false, false, true, 61), "html", null, true);
            yield "</span>
          <h4 class=\"resource-card__title\">";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 62), "html", null, true);
            yield "</h4>
          <p class=\"resource-card__desc\">";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 63), "html", null, true);
            yield "</p>
        </div>
        <div class=\"resource-card__footer\">
          ";
            // line 66
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "access", [], "any", false, false, true, 66) == "free")) {
                // line 67
                yield "            <a href=\"#\" class=\"resource-card__btn resource-card__btn--download\">
              <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <path d=\"M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <polyline points=\"4.67,6.67 8,10 11.33,6.67\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"10\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\"/>
              </svg>
              Download Now
            </a>
          ";
            } else {
                // line 76
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
            // line 85
            yield "        </div>
      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:resources-listing";
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
        return array (  220 => 88,  212 => 85,  201 => 76,  190 => 67,  188 => 66,  182 => 63,  178 => 62,  174 => 61,  167 => 57,  163 => 56,  159 => 54,  153 => 53,  149 => 52,  140 => 45,  136 => 44,  132 => 42,  127 => 38,  96 => 35,  90 => 34,  82 => 33,  65 => 32,  61 => 30,  58 => 28,  56 => 17,  53 => 16,  51 => 9,  48 => 8,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:resources-listing", "themes/djfit/components/resources-listing/resources-listing.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "for" => 32, "if" => 33];
        static $filters = ["escape" => 33];
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
