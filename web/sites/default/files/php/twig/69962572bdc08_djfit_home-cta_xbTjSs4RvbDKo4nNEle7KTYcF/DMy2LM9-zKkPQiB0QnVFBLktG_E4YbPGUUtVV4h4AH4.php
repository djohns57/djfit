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

/* djfit:home-cta */
class __TwigTemplate_244e2bee9687d5a2237dc14b8af36979 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--home-cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:home-cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:home-cta"));
        // line 9
        yield "
";
        // line 10
        $context["_heading"] = ((array_key_exists("heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading"] ?? null), "Ready to Transform Your Health?")) : ("Ready to Transform Your Health?"));
        // line 11
        $context["_subtitle"] = ((array_key_exists("subtitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["subtitle"] ?? null), "Get instant access to our complete library of workouts, nutrition guides, and expert coaching.")) : ("Get instant access to our complete library of workouts, nutrition guides, and expert coaching."));
        // line 12
        $context["_primary_label"] = ((array_key_exists("primary_button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["primary_button_label"] ?? null), "View Membership Plans")) : ("View Membership Plans"));
        // line 13
        $context["_primary_url"] = ((array_key_exists("primary_button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["primary_button_url"] ?? null), "/membership")) : ("/membership"));
        // line 14
        $context["_secondary_label"] = ((array_key_exists("secondary_button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondary_button_label"] ?? null), "Explore Free Content")) : ("Explore Free Content"));
        // line 15
        $context["_secondary_url"] = ((array_key_exists("secondary_button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondary_button_url"] ?? null), "/blog")) : ("/blog"));
        // line 16
        $context["_badge1"] = ((array_key_exists("badge1_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["badge1_text"] ?? null), "Cancel anytime")) : ("Cancel anytime"));
        // line 17
        $context["_badge2"] = ((array_key_exists("badge2_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["badge2_text"] ?? null), "30-day guarantee")) : ("30-day guarantee"));
        // line 18
        yield "
<section class=\"home-cta\">
  <div class=\"home-cta__container\">
    <h2 class=\"home-cta__heading\">";
        // line 21
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_heading");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_heading"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_heading");
            }
        }
        yield "</h2>
    <p class=\"home-cta__subtitle\">";
        // line 22
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_subtitle");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_subtitle"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_subtitle");
            }
        }
        yield "</p>

    <div class=\"home-cta__actions\">
      <a href=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_primary_url"] ?? null), "html", null, true);
        yield "\" class=\"home-cta__btn home-cta__btn--primary\">
        <span>";
        // line 26
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_primary_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_primary_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_primary_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_primary_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_primary_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_primary_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_primary_label");
            }
        }
        yield "</span>
        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
          <path d=\"M3.33333 8H12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          <path d=\"M8 3.33333L12.6667 8L8 12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
      </a>
      <a href=\"";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_secondary_url"] ?? null), "html", null, true);
        yield "\" class=\"home-cta__btn home-cta__btn--secondary\">
        ";
        // line 33
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_secondary_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_secondary_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_secondary_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_secondary_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_secondary_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_secondary_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_secondary_label");
            }
        }
        yield "
      </a>
    </div>

    <div class=\"home-cta__badges\">
      <div class=\"home-cta__badge\">
        <svg class=\"home-cta__badge-icon\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
          <path d=\"M18.1675 8.33333C18.5481 10.2011 18.2768 12.1429 17.399 13.8348C16.5212 15.5268 15.0899 16.8667 13.3438 17.6311C11.5976 18.3955 9.64219 18.5382 7.80358 18.0353C5.96498 17.5325 4.35433 16.4145 3.24023 14.8679C2.12613 13.3212 1.57594 11.4394 1.68139 9.53616C1.78684 7.63295 2.54157 5.82341 3.81971 4.40931C5.09785 2.99521 6.82215 2.06203 8.70505 1.76538C10.588 1.46873 12.5157 1.82655 14.1667 2.77917\" stroke=\"currentColor\" stroke-width=\"1.66667\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          <path d=\"M7.5 9.16667L10 11.6667L18.3333 3.33333\" stroke=\"currentColor\" stroke-width=\"1.66667\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
        <span class=\"home-cta__badge-text\">";
        // line 43
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_badge1", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_badge1");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_badge1");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_badge1"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_badge1", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_badge1");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_badge1");
            }
        }
        yield "</span>
      </div>
      <div class=\"home-cta__badge\">
        <svg class=\"home-cta__badge-icon\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
          <path d=\"M18.1675 8.33333C18.5481 10.2011 18.2768 12.1429 17.399 13.8348C16.5212 15.5268 15.0899 16.8667 13.3438 17.6311C11.5976 18.3955 9.64219 18.5382 7.80358 18.0353C5.96498 17.5325 4.35433 16.4145 3.24023 14.8679C2.12613 13.3212 1.57594 11.4394 1.68139 9.53616C1.78684 7.63295 2.54157 5.82341 3.81971 4.40931C5.09785 2.99521 6.82215 2.06203 8.70505 1.76538C10.588 1.46873 12.5157 1.82655 14.1667 2.77917\" stroke=\"currentColor\" stroke-width=\"1.66667\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          <path d=\"M7.5 9.16667L10 11.6667L18.3333 3.33333\" stroke=\"currentColor\" stroke-width=\"1.66667\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
        <span class=\"home-cta__badge-text\">";
        // line 50
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_badge2", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_badge2");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_badge2");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_badge2"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_badge2", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_badge2");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_badge2");
            }
        }
        yield "</span>
      </div>
    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading", "subtitle", "primary_button_label", "primary_button_url", "secondary_button_label", "secondary_button_url", "badge1_text", "badge2_text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:home-cta";
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
        return array (  192 => 50,  168 => 43,  141 => 33,  137 => 32,  114 => 26,  110 => 25,  90 => 22,  72 => 21,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  53 => 11,  51 => 10,  48 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:home-cta", "themes/djfit/components/home-cta/home-cta.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10];
        static $filters = ["default" => 10, "escape" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['default', 'escape'],
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
