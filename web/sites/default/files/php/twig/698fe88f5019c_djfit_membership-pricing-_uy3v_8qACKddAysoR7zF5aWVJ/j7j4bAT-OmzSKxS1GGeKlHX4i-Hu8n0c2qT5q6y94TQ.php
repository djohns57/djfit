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

/* djfit:membership-pricing-table */
class __TwigTemplate_2eb29d55de9756eee08aa66c5d7c57a0 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--membership-pricing-table"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:membership-pricing-table"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:membership-pricing-table"));
        yield "<section class=\"membership-pricing-table flex flex-col gap-6 md:gap-8\">
  <header class=\"mx-auto max-w-3xl text-center\">
    ";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:heading", ["heading_text" => ((        // line 7
array_key_exists("heading_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_text"] ?? null), "Choose your membership")) : ("Choose your membership")), "level" => 2, "text_color" => "default", "text_size" => "heading-responsive-4xl", "url" => "No URL", "align" => "center"], false));
        // line 16
        yield "

    ";
        // line 18
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("description", $context)) ? (Twig\Extension\CoreExtension::default(($context["description"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "      <p class=\"mt-3 text-base text-muted-foreground md:text-lg\">
        ";
            // line 20
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "description");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("description", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "description");
                }
            }
            yield "
      </p>
    ";
        }
        // line 23
        yield "  </header>

  <div class=\"membership-pricing-table__cards grid gap-4 md:grid-cols-2 xl:grid-cols-3\">
    ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:card-pricing", ["heading_text" => ((        // line 30
array_key_exists("basic_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["basic_title"] ?? null), "Basic")) : ("Basic")), "description" => "Best for getting started", "price" => ((        // line 32
array_key_exists("basic_price", $context)) ? (Twig\Extension\CoreExtension::default(($context["basic_price"] ?? null), "29")) : ("29")), "currency_code" => "USD", "currency_symbol" => "\$", "symbol_position" => "before", "text" => ((        // line 36
array_key_exists("basic_features", $context)) ? (Twig\Extension\CoreExtension::default(($context["basic_features"] ?? null), "<ul><li>Community access</li><li>Monthly Q&A</li></ul>")) : ("<ul><li>Community access</li><li>Monthly Q&A</li></ul>")), "button_url" => ((        // line 37
array_key_exists("basic_button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["basic_button_url"] ?? null), "/membership/basic")) : ("/membership/basic")), "button_label" => ((        // line 38
array_key_exists("basic_button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["basic_button_label"] ?? null), "Choose Basic")) : ("Choose Basic")), "promote" => false], false));
        // line 43
        yield "

    ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:card-pricing", ["heading_text" => ((        // line 49
array_key_exists("pro_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["pro_title"] ?? null), "Pro")) : ("Pro")), "description" => "Most popular plan", "price" => ((        // line 51
array_key_exists("pro_price", $context)) ? (Twig\Extension\CoreExtension::default(($context["pro_price"] ?? null), "79")) : ("79")), "currency_code" => "USD", "currency_symbol" => "\$", "symbol_position" => "before", "text" => ((        // line 55
array_key_exists("pro_features", $context)) ? (Twig\Extension\CoreExtension::default(($context["pro_features"] ?? null), "<ul><li>Everything in Basic</li><li>Weekly programming</li><li>Member events</li></ul>")) : ("<ul><li>Everything in Basic</li><li>Weekly programming</li><li>Member events</li></ul>")), "button_url" => ((        // line 56
array_key_exists("pro_button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["pro_button_url"] ?? null), "/membership/pro")) : ("/membership/pro")), "button_label" => ((        // line 57
array_key_exists("pro_button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["pro_button_label"] ?? null), "Choose Pro")) : ("Choose Pro")), "promote" => true], false));
        // line 62
        yield "

    ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:card-pricing", ["heading_text" => ((        // line 68
array_key_exists("premium_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["premium_title"] ?? null), "Premium")) : ("Premium")), "description" => "For accountability and coaching", "price" => ((        // line 70
array_key_exists("premium_price", $context)) ? (Twig\Extension\CoreExtension::default(($context["premium_price"] ?? null), "149")) : ("149")), "currency_code" => "USD", "currency_symbol" => "\$", "symbol_position" => "before", "text" => ((        // line 74
array_key_exists("premium_features", $context)) ? (Twig\Extension\CoreExtension::default(($context["premium_features"] ?? null), "<ul><li>Everything in Pro</li><li>Priority coaching</li><li>Quarterly strategy call</li></ul>")) : ("<ul><li>Everything in Pro</li><li>Priority coaching</li><li>Quarterly strategy call</li></ul>")), "button_url" => ((        // line 75
array_key_exists("premium_button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["premium_button_url"] ?? null), "/membership/premium")) : ("/membership/premium")), "button_label" => ((        // line 76
array_key_exists("premium_button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["premium_button_label"] ?? null), "Choose Premium")) : ("Choose Premium")), "promote" => false], false));
        // line 81
        yield "
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading_text", "description", "basic_title", "basic_price", "basic_features", "basic_button_url", "basic_button_label", "pro_title", "pro_price", "pro_features", "pro_button_url", "pro_button_label", "premium_title", "premium_price", "premium_features", "premium_button_url", "premium_button_label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:membership-pricing-table";
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
        return array (  117 => 81,  115 => 76,  114 => 75,  113 => 74,  112 => 70,  111 => 68,  110 => 64,  106 => 62,  104 => 57,  103 => 56,  102 => 55,  101 => 51,  100 => 49,  99 => 45,  95 => 43,  93 => 38,  92 => 37,  91 => 36,  90 => 32,  89 => 30,  88 => 26,  83 => 23,  63 => 20,  60 => 19,  58 => 18,  54 => 16,  52 => 7,  51 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:membership-pricing-table", "themes/djfit/components/membership-pricing-table/membership-pricing-table.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18];
        static $filters = ["default" => 7, "escape" => 20];
        static $functions = ["include" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
