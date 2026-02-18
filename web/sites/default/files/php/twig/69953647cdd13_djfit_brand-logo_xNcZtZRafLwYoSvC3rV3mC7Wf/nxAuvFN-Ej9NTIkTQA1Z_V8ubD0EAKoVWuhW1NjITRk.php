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

/* djfit:brand-logo */
class __TwigTemplate_df9e262f8377019e37294f96e1c59dea extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--brand-logo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:brand-logo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:brand-logo"));
        // line 9
        $context["href"] = ((array_key_exists("url", $context)) ? (Twig\Extension\CoreExtension::default(($context["url"] ?? null), "/")) : ("/"));
        // line 10
        $context["show_jps"] = ((array_key_exists("show_jps", $context)) ? (Twig\Extension\CoreExtension::default(($context["show_jps"] ?? null), true)) : (true));
        // line 11
        $context["show_djfit"] = ((array_key_exists("show_djfit", $context)) ? (Twig\Extension\CoreExtension::default(($context["show_djfit"] ?? null), true)) : (true));
        // line 12
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "header")) : ("header"));
        // line 13
        yield "
<a href=\"";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
        yield "\" class=\"brand-logo inline-flex items-center gap-3\" rel=\"home\" aria-label=\"DJ Fit\">
  ";
        // line 15
        if ((($tmp = ($context["show_jps"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:logo-jps-enterprise", ["url" => ($context["href"] ?? null), "size" => ($context["size"] ?? null), "standalone" => false], false));
            yield "
  ";
        }
        // line 18
        yield "  ";
        if ((($tmp = ($context["show_djfit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:logo-djfit", ["url" => ($context["href"] ?? null), "size" => ($context["size"] ?? null), "glow" => true, "standalone" => false], false));
            yield "
  ";
        }
        // line 21
        yield "</a>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:brand-logo";
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
        return array (  80 => 21,  74 => 19,  71 => 18,  65 => 16,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  52 => 11,  50 => 10,  48 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:brand-logo", "themes/djfit/components/brand-logo/brand-logo.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "if" => 15];
        static $filters = ["default" => 9, "escape" => 14];
        static $functions = ["include" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
