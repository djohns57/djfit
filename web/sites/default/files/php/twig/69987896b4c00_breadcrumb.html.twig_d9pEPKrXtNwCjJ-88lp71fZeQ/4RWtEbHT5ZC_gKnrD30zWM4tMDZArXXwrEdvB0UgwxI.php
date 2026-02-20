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

/* themes/djfit/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_71d3486f14f7834cd520cdfc784a4fcf extends Template
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
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("djfit/breadcrumb"), "html", null, true);
        yield "
";
        // line 11
        if ((($tmp = ($context["breadcrumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  ";
            $context["deduped"] = [];
            // line 13
            yield "  ";
            $context["prev_text"] = "";
            // line 14
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                yield "    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 15) != ($context["prev_text"] ?? null))) {
                    // line 16
                    yield "      ";
                    $context["deduped"] = Twig\Extension\CoreExtension::merge(($context["deduped"] ?? null), [$context["item"]]);
                    // line 17
                    yield "    ";
                }
                // line 18
                yield "    ";
                $context["prev_text"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 18);
                // line 19
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "  ";
            $context["breadcrumb"] = ($context["deduped"] ?? null);
            // line 21
            yield "  ";
            $context["needs_truncation"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["breadcrumb"] ?? null)) > 3);
            // line 22
            yield "
  ";
            // line 23
            $context["item_classes"] = "flex items-center text-sm md:text-md";
            // line 24
            yield "
  <nav aria-label=\"breadcrumb\" class=\"container mx-auto my-2 w-full md:my-3 2xl:my-4\">
    <h2 id=\"system-breadcrumb\" class=\"sr-only\">";
            // line 26
            yield "Breadcrumb";
            yield "</h2>
    <ol class=\"m-0 flex list-none flex-row items-center gap-1 p-0 leading-none text-foreground md:gap-2\">
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                yield "        ";
                $context["is_first"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 29);
                // line 30
                yield "        ";
                $context["is_last_two"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex", [], "any", false, false, true, 30) <= 2);
                // line 31
                yield "        ";
                $context["should_show"] = (( !($context["needs_truncation"] ?? null) || ($context["is_first"] ?? null)) || ($context["is_last_two"] ?? null));
                // line 32
                yield "
        ";
                // line 33
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 34
                    yield "          <li class=\"gap-1 md:gap-2 2xl:text-base\" aria-labelledby=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 34), "html", null, true);
                    yield "\">
            <a href=\"";
                    // line 35
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35), "html", null, true);
                    yield "\" class=\"flex items-center no-underline hover:opacity-80\">
              ";
                    // line 36
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/components/icon/icon.twig", ["weight" => "bold", "icon" => "house", "icon_size" => "extra-small"]));
                    // line 45
                    yield "
            </a>
          </li>
        ";
                }
                // line 49
                yield "
        ";
                // line 51
                yield "        ";
                if ((($context["needs_truncation"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 51) == 2))) {
                    // line 52
                    yield "          <li aria-hidden=\"true\">
            ";
                    // line 53
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/components/icon/icon.twig", ["weight" => "bold", "icon" => "dots-three", "icon_size" => "extra-small"]));
                    // line 62
                    yield "
          </li>
          <li aria-hidden=\"true\">
            ";
                    // line 65
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "extra-small"]));
                    // line 74
                    yield "
          </li>
        ";
                }
                // line 77
                yield "
        ";
                // line 79
                yield "        ";
                if ((($tmp = ($context["should_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 81
                        yield "            <li class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_classes"] ?? null), "html", null, true);
                        yield " active\" aria-current=\"page\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 81), "html", null, true);
                        yield "</li>
          ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 82
$context["item"], "url", [], "any", false, false, true, 82) &&  !($context["is_first"] ?? null))) {
                        // line 83
                        yield "            <li class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_classes"] ?? null), "html", null, true);
                        yield "\">
              <a href=\"";
                        // line 84
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 84), "html", null, true);
                        yield "\" class=\"no-underline hover:underline hover:underline-offset-2 focus:underline\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 84), "html", null, true);
                        yield "</a>
            </li>
          ";
                    }
                    // line 87
                    yield "
          ";
                    // line 89
                    yield "          ";
                    if (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 89) && (( !($context["needs_truncation"] ?? null) || ($context["is_last_two"] ?? null)) || ($context["is_first"] ?? null)))) {
                        // line 90
                        yield "            <li aria-hidden=\"true\">
              ";
                        // line 91
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "extra-small"]));
                        // line 100
                        yield "
            </li>
          ";
                    }
                    // line 103
                    yield "        ";
                }
                // line 104
                yield "      ";
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "    </ol>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/djfit/templates/navigation/breadcrumb.html.twig";
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
        return array (  234 => 105,  220 => 104,  217 => 103,  212 => 100,  210 => 91,  207 => 90,  204 => 89,  201 => 87,  193 => 84,  188 => 83,  186 => 82,  179 => 81,  176 => 80,  173 => 79,  170 => 77,  165 => 74,  163 => 65,  158 => 62,  156 => 53,  153 => 52,  150 => 51,  147 => 49,  141 => 45,  139 => 36,  135 => 35,  130 => 34,  128 => 33,  125 => 32,  122 => 31,  119 => 30,  116 => 29,  99 => 28,  94 => 26,  90 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  56 => 14,  53 => 13,  50 => 12,  48 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/djfit/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/themes/djfit/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 11, "set" => 12, "for" => 14];
        static $filters = ["escape" => 10, "merge" => 16, "length" => 21];
        static $functions = ["attach_library" => 10, "include" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'merge', 'length'],
                ['attach_library', 'include'],
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
