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

/* djfit:account-membership-status */
class __TwigTemplate_7c0573cf3c26d416af5790ea0c21aa34 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--account-membership-status"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:account-membership-status"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:account-membership-status"));
        $context["is_active"] = ((CoreExtension::inFilter(((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default(($context["status"] ?? null), "active")) : ("active")), ["active", "trialing"])) ? ("yes") : ("no"));
        // line 2
        yield "
";
        // line 3
        $context["status_box"] = Twig\Extra\Html\HtmlExtension::htmlCva(["account-membership-status rounded-sm border p-5 md:p-6"], ["active" => ["yes" => ["border-primary/30 bg-primary/5 text-foreground"], "no" => ["border-border bg-muted/30 text-foreground"]]]);
        // line 14
        yield "
";
        // line 15
        $context["status_badge"] = Twig\Extra\Html\HtmlExtension::htmlCva(["inline-flex rounded-full px-3 py-1 text-xs font-semibold tracking-wide uppercase"], ["active" => ["yes" => ["bg-primary text-primary-foreground"], "no" => ["bg-muted text-muted-foreground"]]]);
        // line 26
        yield "
<section
  class=\"";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["status_box"] ?? null), "apply", [["active" =>         // line 30
($context["is_active"] ?? null)]], "method", false, false, true, 29), "html", null, true);
        // line 32
        yield "\"
>
  <div class=\"flex flex-col gap-4 md:flex-row md:items-center md:justify-between\">
    <div class=\"flex flex-col gap-3\">
      <span
        class=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["status_badge"] ?? null), "apply", [["active" =>         // line 39
($context["is_active"] ?? null)]], "method", false, false, true, 38), "html", null, true);
        // line 41
        yield "\"
      >
        ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((        // line 44
array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default(($context["status"] ?? null), "active")) : ("active")), ["_" => " "]), "html", null, true);
        // line 49
        yield "
      </span>

      ";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:heading", ["heading_text" => ((        // line 56
array_key_exists("plan_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["plan_name"] ?? null), "Pro Monthly")) : ("Pro Monthly")), "level" => 3, "text_color" => "default", "text_size" => "heading-responsive-3xl", "url" => "No URL", "align" => "left"], false));
        // line 65
        yield "

      <p class=\"text-sm text-muted-foreground md:text-base\">
        ";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("renewal_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["renewal_text"] ?? null), "Renews on the 15th of each month.")) : ("Renews on the 15th of each month.")), "html", null, true);
        yield "
      </p>
    </div>

    <div class=\"shrink-0\">
      ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:button", ["href" => ((        // line 77
array_key_exists("button_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_url"] ?? null), "/user")) : ("/user")), "label" => ((        // line 78
array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Manage billing")) : ("Manage billing")), "variant" => "secondary", "size" => "medium"], false));
        // line 84
        yield "
    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["status", "plan_name", "renewal_text", "button_url", "button_label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:account-membership-status";
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
        return array (  110 => 84,  108 => 78,  107 => 77,  106 => 73,  98 => 68,  93 => 65,  91 => 56,  90 => 52,  85 => 49,  83 => 44,  82 => 43,  78 => 41,  76 => 39,  75 => 38,  74 => 37,  67 => 32,  65 => 30,  64 => 29,  63 => 28,  59 => 26,  57 => 15,  54 => 14,  52 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:account-membership-status", "themes/djfit/components/account-membership-status/account-membership-status.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1];
        static $filters = ["default" => 1, "escape" => 29, "replace" => 46];
        static $functions = ["html_cva" => 4, "include" => 53];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['default', 'escape', 'replace'],
                ['html_cva', 'include'],
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
