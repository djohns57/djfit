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

/* djfit:resources-benefits */
class __TwigTemplate_70b572434a9c42474970d3e2b1f41b28 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--resources-benefits"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:resources-benefits"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:resources-benefits"));
        // line 8
        $context["heading"] = ((array_key_exists("heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading"] ?? null), "Get Access to All Resources")) : ("Get Access to All Resources"));
        // line 9
        $context["subtitle"] = ((array_key_exists("subtitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["subtitle"] ?? null), "Pro members get unlimited downloads of all guides, templates, and resources")) : ("Pro members get unlimited downloads of all guides, templates, and resources"));
        // line 10
        $context["card1_title"] = ((array_key_exists("card1_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["card1_title"] ?? null), "50+ Resources")) : ("50+ Resources"));
        // line 11
        $context["card1_description"] = ((array_key_exists("card1_description", $context)) ? (Twig\Extension\CoreExtension::default(($context["card1_description"] ?? null), "Comprehensive library of workout plans, nutrition guides, and tracking tools")) : ("Comprehensive library of workout plans, nutrition guides, and tracking tools"));
        // line 12
        $context["card2_title"] = ((array_key_exists("card2_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["card2_title"] ?? null), "Unlimited Downloads")) : ("Unlimited Downloads"));
        // line 13
        $context["card2_description"] = ((array_key_exists("card2_description", $context)) ? (Twig\Extension\CoreExtension::default(($context["card2_description"] ?? null), "Download and print as many copies as you need for personal use")) : ("Download and print as many copies as you need for personal use"));
        // line 14
        $context["card3_title"] = ((array_key_exists("card3_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["card3_title"] ?? null), "Regular Updates")) : ("Regular Updates"));
        // line 15
        $context["card3_description"] = ((array_key_exists("card3_description", $context)) ? (Twig\Extension\CoreExtension::default(($context["card3_description"] ?? null), "New resources added monthly based on member feedback and requests")) : ("New resources added monthly based on member feedback and requests"));
        // line 16
        $context["cta_url"] = ((array_key_exists("cta_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["cta_url"] ?? null), "/membership")) : ("/membership"));
        // line 17
        $context["cta_text"] = ((array_key_exists("cta_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["cta_text"] ?? null), "Upgrade to Pro")) : ("Upgrade to Pro"));
        // line 18
        yield "
<section class=\"resources-benefits\">
  <div class=\"resources-benefits__header\">
    <h2 class=\"resources-benefits__heading\">";
        // line 21
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
    <p class=\"resources-benefits__subtitle\">
      ";
        // line 23
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
  </div>

  <div class=\"resources-benefits__grid\">
    <div class=\"resources-benefits__card\">
      <div class=\"resources-benefits__icon resources-benefits__icon--teal\">
        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
          <path d=\"M4 19.5A2.5 2.5 0 016.5 17H20\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          <path
            d=\"M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5V4.5A2.5 2.5 0 016.5 2z\"
            stroke=\"currentColor\"
            stroke-width=\"2\"
            stroke-linecap=\"round\"
            stroke-linejoin=\"round\"
          />
        </svg>
      </div>
      <h4 class=\"resources-benefits__card-title\">";
        // line 41
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card1_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "card1_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "card1_title");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card1_title"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card1_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "card1_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "card1_title");
            }
        }
        yield "</h4>
      <p class=\"resources-benefits__card-desc\">
        ";
        // line 43
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card1_description", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "card1_description");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "card1_description");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card1_description"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card1_description", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "card1_description");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "card1_description");
            }
        }
        yield "
      </p>
    </div>

    <div class=\"resources-benefits__card\">
      <div class=\"resources-benefits__icon resources-benefits__icon--green\">
        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
          <path d=\"M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          <polyline points=\"7,10 12,15 17,10\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          <line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" />
        </svg>
      </div>
      <h4 class=\"resources-benefits__card-title\">";
        // line 55
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card2_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "card2_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "card2_title");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card2_title"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card2_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "card2_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "card2_title");
            }
        }
        yield "</h4>
      <p class=\"resources-benefits__card-desc\">
        ";
        // line 57
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card2_description", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "card2_description");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "card2_description");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card2_description"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card2_description", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "card2_description");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "card2_description");
            }
        }
        yield "
      </p>
    </div>

    <div class=\"resources-benefits__card\">
      <div class=\"resources-benefits__icon resources-benefits__icon--slate\">
        <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
          <polyline points=\"23,6 13.5,15.5 8.5,10.5 1,18\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
          <polyline points=\"17,6 23,6 23,12\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
        </svg>
      </div>
      <h4 class=\"resources-benefits__card-title\">";
        // line 68
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card3_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "card3_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "card3_title");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card3_title"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card3_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "card3_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "card3_title");
            }
        }
        yield "</h4>
      <p class=\"resources-benefits__card-desc\">
        ";
        // line 70
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card3_description", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "card3_description");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "card3_description");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["card3_description"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("card3_description", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "card3_description");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "card3_description");
            }
        }
        yield "
      </p>
    </div>
  </div>

  <div class=\"resources-benefits__cta\">
    <a href=\"";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cta_url"] ?? null), "html", null, true);
        yield "\" class=\"resources-benefits__cta-btn\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("cta_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "cta_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "cta_text");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cta_text"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("cta_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "cta_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "cta_text");
            }
        }
        yield "</a>
  </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:resources-benefits";
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
        return array (  264 => 76,  241 => 70,  222 => 68,  194 => 57,  175 => 55,  146 => 43,  127 => 41,  92 => 23,  73 => 21,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,  52 => 10,  50 => 9,  48 => 8,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:resources-benefits", "themes/djfit/components/resources-benefits/resources-benefits.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8];
        static $filters = ["default" => 8, "escape" => 21];
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
