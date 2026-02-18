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

/* djfit:logo-djfit */
class __TwigTemplate_f574704126583ffb1d378e5c0c06f61a extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--logo-djfit"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:logo-djfit"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:logo-djfit"));
        // line 9
        $context["size_classes"] = ["small" => "text-xl", "medium" => "text-2xl", "large" => "text-3xl", "header" => "text-[1.75rem]"];
        // line 15
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "header")) : ("header"));
        // line 16
        $context["href"] = ((array_key_exists("url", $context)) ? (Twig\Extension\CoreExtension::default(($context["url"] ?? null), "/")) : ("/"));
        // line 17
        $context["has_glow"] = ((array_key_exists("glow", $context)) ? (Twig\Extension\CoreExtension::default(($context["glow"] ?? null), true)) : (true));
        // line 18
        $context["standalone"] = ((array_key_exists("standalone", $context)) ? (Twig\Extension\CoreExtension::default(($context["standalone"] ?? null), true)) : (true));
        // line 19
        yield "
";
        // line 20
        $context["logo_content"] = new Markup("  <span class=\"logo-djfit__text\">DJ Fit</span>
", $this->env->getCharset());
        // line 23
        yield "
";
        // line 24
        if ((($tmp = ($context["standalone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
            yield "\" class=\"logo-djfit inline-flex items-center font-bold ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["size_classes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["size_classes"] ?? null), ($context["size"] ?? null), [], "array", false, false, true, 25)), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["has_glow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("logo-djfit--glow") : ("")));
            yield "\" rel=\"home\" aria-label=\"DJ Fit\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["logo_content"] ?? null));
            yield "</a>
";
        } else {
            // line 27
            yield "  <span class=\"logo-djfit inline-flex items-center font-bold ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["size_classes"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["size_classes"] ?? null), ($context["size"] ?? null), [], "array", false, false, true, 27)), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["has_glow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("logo-djfit--glow") : ("")));
            yield "\" aria-hidden=\"true\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["logo_content"] ?? null));
            yield "</span>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "glow"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:logo-djfit";
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
        return array (  81 => 27,  69 => 25,  67 => 24,  64 => 23,  61 => 20,  58 => 19,  56 => 18,  54 => 17,  52 => 16,  50 => 15,  48 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:logo-djfit", "themes/djfit/components/logo-djfit/logo-djfit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "if" => 24];
        static $filters = ["default" => 15, "escape" => 25, "raw" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape', 'raw'],
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
