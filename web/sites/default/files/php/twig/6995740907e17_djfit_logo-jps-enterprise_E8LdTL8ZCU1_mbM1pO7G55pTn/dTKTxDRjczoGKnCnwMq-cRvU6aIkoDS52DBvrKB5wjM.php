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

/* djfit:logo-jps-enterprise */
class __TwigTemplate_70d3edb7a67330c285cd030c20367c63 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--logo-jps-enterprise"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:logo-jps-enterprise"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:logo-jps-enterprise"));
        // line 10
        $context["size_classes"] = ["small" => "h-6", "medium" => "h-8", "large" => "h-10", "header" => "h-[60px]"];
        // line 16
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), "header")) : ("header"));
        // line 17
        $context["href"] = ((array_key_exists("url", $context)) ? (Twig\Extension\CoreExtension::default(($context["url"] ?? null), "/")) : ("/"));
        // line 18
        $context["standalone"] = ((array_key_exists("standalone", $context)) ? (($context["standalone"] ?? null)) : (true));
        // line 19
        $context["logo_src"] = ((array_key_exists("src", $context)) ? (Twig\Extension\CoreExtension::default(($context["src"] ?? null), "")) : (""));
        // line 20
        $context["size_px"] = ["small" => 24, "medium" => 32, "large" => 40, "header" => 60];
        // line 21
        $context["px"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["size_px"] ?? null), ($context["size"] ?? null), [], "array", true, true, true, 21)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["size_px"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["size_px"] ?? null), ($context["size"] ?? null), [], "array", false, false, true, 21)), 60)) : (60));
        // line 22
        yield "
";
        // line 23
        if ((($tmp = ($context["logo_src"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "  ";
            $context["logo_content"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                // line 25
                yield "    <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["logo_src"] ?? null), "html", null, true);
                yield "\" alt=\"\" class=\"h-full w-auto object-contain\" width=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["px"] ?? null), "html", null, true);
                yield "\" height=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["px"] ?? null), "html", null, true);
                yield "\" loading=\"eager\" />
  ";
                yield from [];
            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        } else {
            // line 28
            yield "  ";
            $context["logo_content"] = new Markup("    <svg class=\"logo-jps-enterprise__svg h-full w-auto\" viewBox=\"0 0 71 42\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" width=\"101\" height=\"60\">
      <text class=\"logo-jps-enterprise__j\" x=\"0\" y=\"26\" font-family=\"Inter, Outfit, system-ui, sans-serif\" font-size=\"24\" font-weight=\"700\" fill=\"var(--hg-color-header-accent)\">J</text>
      <text class=\"logo-jps-enterprise__p\" x=\"14\" y=\"26\" font-family=\"Inter, Outfit, system-ui, sans-serif\" font-size=\"24\" font-weight=\"700\" fill=\"var(--hg-color-header-text)\">P</text>
      <path class=\"logo-jps-enterprise__arrow\" d=\"M22 9 L27 5.5 M25.5 4 L27 5.5 L26 7.5\" stroke=\"#7ebf72\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\"/>
      <text class=\"logo-jps-enterprise__s\" x=\"28\" y=\"26\" font-family=\"Inter, Outfit, system-ui, sans-serif\" font-size=\"24\" font-weight=\"700\" fill=\"#0f5f86\">S</text>
      <text class=\"logo-jps-enterprise__ent\" x=\"4\" y=\"40\" font-family=\"Inter, Outfit, system-ui, sans-serif\" font-size=\"9\" font-weight=\"500\" letter-spacing=\"0.08em\" fill=\"var(--hg-color-text-muted)\">ENTERPRISE</text>
    </svg>
  ", $this->env->getCharset());
        }
        // line 38
        yield "
";
        // line 39
        if ((($tmp = ($context["standalone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
            yield "\" class=\"logo-jps-enterprise inline-flex items-center ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["size_classes"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["size_classes"] ?? null), ($context["size"] ?? null), [], "array", false, false, true, 40)), "html", null, true);
            yield "\" rel=\"home\" aria-label=\"JPS Enterprise\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["logo_content"] ?? null));
            yield "</a>
";
        } else {
            // line 42
            yield "  <span class=\"logo-jps-enterprise inline-flex items-center ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = ($context["size_classes"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[($context["size"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["size_classes"] ?? null), ($context["size"] ?? null), [], "array", false, false, true, 42)), "html", null, true);
            yield "\" aria-hidden=\"true\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["logo_content"] ?? null));
            yield "</span>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "src"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:logo-jps-enterprise";
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
        return array (  108 => 42,  98 => 40,  96 => 39,  93 => 38,  82 => 28,  70 => 25,  67 => 24,  65 => 23,  62 => 22,  60 => 21,  58 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:logo-jps-enterprise", "themes/djfit/components/logo-jps-enterprise/logo-jps-enterprise.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "if" => 23];
        static $filters = ["default" => 16, "escape" => 25, "raw" => 40];
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
