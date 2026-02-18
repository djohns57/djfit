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

/* themes/djfit/templates/navigation/menu--main.html.twig */
class __TwigTemplate_b5e796f2aa3f104499f05b3ef7045448 extends Template
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
        // line 21
        yield "
";
        // line 22
        $context["classes"] = "flex justify-start relative";
        // line 23
        $context["attributes"] = (((($tmp = ($context["attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 23)) : (((" class=\"" . ($context["classes"] ?? null)) . "\"")));
        // line 24
        yield "
<nav ";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield " aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_label"] ?? null), "html", null, true);
        yield "\">
  <ul class=\"flex flex-col gap-1 p-0 list-none md:w-auto md:flex-row md:items-center md:gap-6\" data-level=\"1\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            yield "      ";
            $context["title"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 28)));
            // line 29
            yield "      ";
            // line 31
            yield "      ";
            $context["url"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                // line 32
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 32), "html", null, true);
                yield from [];
            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            yield "
      ";
            // line 35
            $context["item_classes"] = Twig\Extension\CoreExtension::filter($this->env, ["flex flex-wrap justify-between md:flex-nowrap", "md:w-auto md:relative md:max-w-[375px]", "text-base font-medium"],             // line 40
function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !Twig\Extension\CoreExtension::testEmpty(($context["c"] ?? null)); });
            // line 42
            yield "
      ";
            // line 43
            $context["link_classes"] = Twig\Extension\CoreExtension::filter($this->env, ["flex min-h-[44px] shrink-1 grow-1 basis-0 items-center gap-1 p-2 duration-300 md:min-h-auto xl:px-3", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["item"], "in_active_trail", [], "any", false, false, true, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rounded-[var(--hg-radius-md)] bg-[var(--hg-color-header-accent)] text-[var(--hg-color-header-accent-contrast)]") : ("rounded-[var(--hg-radius-md)] text-[var(--hg-color-header-text)] hover:bg-[var(--hg-color-header-accent)] hover:text-[var(--hg-color-header-accent-contrast)] focus:bg-[var(--hg-color-header-accent)] focus:text-[var(--hg-color-header-accent-contrast)]"))],             // line 49
function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return  !Twig\Extension\CoreExtension::testEmpty(($context["c"] ?? null)); });
            // line 51
            yield "
      ";
            // line 52
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "        ";
                CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 53), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 53);
                // line 54
                yield "        ";
                CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), "setAttribute", ["data-level", 1], "method", false, false, true, 54);
                // line 55
                yield "      ";
            } else {
                // line 56
                yield "        ";
                $context["item_attributes_string"] = (("class=\"" . Twig\Extension\CoreExtension::join(($context["item_classes"] ?? null), " ")) . "\" data-level=\"1\"");
                // line 57
                yield "      ";
            }
            // line 58
            yield "
      <li ";
            // line 59
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 59)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 59), "html", null, true)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_attributes_string"] ?? null), "html", null, true)));
            yield ">
        ";
            // line 60
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "          <a
            href=\"";
                // line 62
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\"
            class=\"";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["link_classes"] ?? null), " "), "html", null, true);
                yield "\"
            data-level=\"1\"
          >
            ";
                // line 66
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
                    }
                }
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                    if (array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
                    }
                }
                yield "
          </a>
        ";
            }
            // line 69
            yield "      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "  </ul>
</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu_label", "items", "c"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/djfit/templates/navigation/menu--main.html.twig";
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
        return array (  159 => 71,  152 => 69,  132 => 66,  126 => 63,  122 => 62,  119 => 61,  117 => 60,  113 => 59,  110 => 58,  107 => 57,  104 => 56,  101 => 55,  98 => 54,  95 => 53,  93 => 52,  90 => 51,  88 => 49,  87 => 46,  86 => 43,  83 => 42,  81 => 40,  80 => 35,  77 => 34,  73 => 32,  70 => 31,  68 => 29,  65 => 28,  61 => 27,  54 => 25,  51 => 24,  49 => 23,  47 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/djfit/templates/navigation/menu--main.html.twig", "/var/www/html/web/themes/djfit/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "for" => 27, "if" => 52, "do" => 53];
        static $filters = ["escape" => 25, "filter" => 40, "join" => 56];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'do'],
                ['escape', 'filter', 'join'],
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
