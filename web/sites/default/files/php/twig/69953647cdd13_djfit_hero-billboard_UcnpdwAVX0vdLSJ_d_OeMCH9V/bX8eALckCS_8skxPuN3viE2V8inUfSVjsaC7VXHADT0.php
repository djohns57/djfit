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

/* djfit:hero-billboard */
class __TwigTemplate_4cb8a183493e2571079fd1f13478da46 extends Template
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
            'hero_media' => [$this, 'block_hero_media'],
            'hero_content' => [$this, 'block_hero_content'],
            'hero_slot' => [$this, 'block_hero_slot'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--hero-billboard"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:hero-billboard"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:hero-billboard"));
        $context["hero_height"] = ((array_key_exists("height", $context)) ? (Twig\Extension\CoreExtension::default(($context["height"] ?? null), "full")) : ("full"));
        // line 2
        $context["hero_flex_position"] = ((array_key_exists("flex_position", $context)) ? (Twig\Extension\CoreExtension::default(($context["flex_position"] ?? null), "center-left")) : ("center-left"));
        // line 3
        $context["hero_overlay_opacity"] = ((array_key_exists("overlay_opacity", $context)) ? (Twig\Extension\CoreExtension::default(($context["overlay_opacity"] ?? null), "40%")) : ("40%"));
        // line 4
        $context["hero_object_position"] = ((array_key_exists("object_position", $context)) ? (Twig\Extension\CoreExtension::default(($context["object_position"] ?? null), "center")) : ("center"));
        // line 5
        $context["hero_overlap_navbar"] = (((($tmp = ((array_key_exists("overlap_navbar", $context)) ? (Twig\Extension\CoreExtension::default(($context["overlap_navbar"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
        // line 6
        yield "
";
        // line 8
        $context["additional_classes"] = ((array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), "")) : (""));
        // line 9
        if (is_iterable(($context["additional_classes"] ?? null))) {
            // line 10
            yield "  ";
            $context["additional_classes"] = Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ");
        }
        // line 12
        yield "
";
        // line 13
        $context["hero_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["cq-full relative flex flex-col"], ["height" => ["full" => "h-dvh", "large" => ["h-3/4 min-h-[500px] md:max-h-[600px] xl:max-h-[800px]"], "ribbon" => ["h-1/2 md:max-h-[450px] md:min-h-[400px] xl:max-h-[600px]"]], "flexPosition" => ["top-left" => "justify-start", "center-left" => "justify-center-safe", "bottom-left" => "justify-end", "hero-center" => "justify-center"], "overlapNavbar" => ["yes" => "mt-[calc(var(--navbar-height)*-1)]", "no" => ""]]);
        // line 35
        yield "
";
        // line 36
        $context["overlay_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["absolute inset-0"], ["opacity" => ["0%" => "bg-black/0", "20%" => "bg-black/20", "40%" => "bg-black/40", "60%" => "bg-black/60", "75%" => "bg-black/75"]]);
        // line 50
        yield "
";
        // line 51
        $context["image_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["h-full w-full object-cover"], ["position" => ["top" => "object-top", "center" => "object-center", "bottom" => "object-bottom"]]);
        // line 63
        yield "
";
        // line 64
        $context["content_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative z-1 flex flex-col gap-6 py-6 md:py-10 xl:py-20"], ["flexPosition" => ["top-left" => "lg:max-w-2/3", "center-left" => "lg:max-w-2/3", "bottom-left" => "lg:max-w-2/3", "hero-center" => ["items-center text-center lg:mx-auto lg:max-w-2/3"]], "overlapNavbar" => ["yes" => "pt-[calc(var(--navbar-height)+1.5rem)] md:pt-[calc(var(--navbar-height)+2.5rem)] xl:pt-[calc(var(--navbar-height)+5rem)]", "no" => ""]]);
        // line 81
        yield "
<section
  class=\"";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 84
($context["hero_variants"] ?? null), "apply", [["height" =>         // line 86
($context["hero_height"] ?? null), "flexPosition" =>         // line 87
($context["hero_flex_position"] ?? null), "overlapNavbar" =>         // line 88
($context["hero_overlap_navbar"] ?? null)],         // line 90
($context["additional_classes"] ?? null)], "method", false, false, true, 84), "html", null, true);
        // line 92
        yield "\"
>
  ";
        // line 94
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "    <div class=\"absolute z-[-1] h-full w-full\">
      ";
            // line 96
            yield from $this->unwrap()->yieldBlock('hero_media', $context, $blocks);
            // line 117
            yield "    </div>
  ";
        }
        // line 119
        yield "  <div class=\"container mx-auto px-4\">
    <div
      class=\"";
        // line 121
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 122
($context["content_variants"] ?? null), "apply", [["flexPosition" =>         // line 123
($context["hero_flex_position"] ?? null), "overlapNavbar" =>         // line 124
($context["hero_overlap_navbar"] ?? null)]], "method", false, false, true, 122), "html", null, true);
        // line 126
        yield "\"
    >
      ";
        // line 128
        yield from $this->unwrap()->yieldBlock('hero_content', $context, $blocks);
        // line 133
        yield "    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["height", "flex_position", "overlay_opacity", "object_position", "overlap_navbar", "classes", "media"]);        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 97))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "          <div
            class=\"";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 100
($context["overlay_variants"] ?? null), "apply", [["opacity" =>             // line 101
($context["hero_overlay_opacity"] ?? null)]], "method", false, false, true, 100), "html", null, true);
            // line 103
            yield "\"
          ></div>
        ";
        }
        // line 106
        yield "        ";
        try {
            $_v0 = $this->load("canvas:image", 106);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["media"] ?? null), "src", [], "any", false, false, true, 107), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["media"] ?? null), "alt", [], "any", false, false, true, 108), "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 109
($context["media"] ?? null), "width", [], "any", false, false, true, 109), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["media"] ?? null), "height", [], "any", false, false, true, 110), "loading" => "eager", "class" => CoreExtension::getAttribute($this->env, $this->source,             // line 112
($context["image_variants"] ?? null), "apply", [["position" =>             // line 113
($context["hero_object_position"] ?? null)]], "method", false, false, true, 112)]));
        }
        // line 116
        yield "      ";
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        yield "        ";
        yield from $this->unwrap()->yieldBlock('hero_slot', $context, $blocks);
        // line 132
        yield "      ";
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:hero-billboard";
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
        return array (  207 => 130,  200 => 129,  195 => 132,  192 => 129,  185 => 128,  180 => 116,  177 => 113,  176 => 112,  175 => 110,  174 => 109,  173 => 108,  172 => 107,  163 => 106,  158 => 103,  156 => 101,  155 => 100,  154 => 99,  151 => 98,  148 => 97,  141 => 96,  132 => 133,  130 => 128,  126 => 126,  124 => 124,  123 => 123,  122 => 122,  121 => 121,  117 => 119,  113 => 117,  111 => 96,  108 => 95,  106 => 94,  102 => 92,  100 => 90,  99 => 88,  98 => 87,  97 => 86,  96 => 84,  95 => 83,  91 => 81,  89 => 64,  86 => 63,  84 => 51,  81 => 50,  79 => 36,  76 => 35,  74 => 13,  71 => 12,  67 => 10,  65 => 9,  63 => 8,  60 => 6,  58 => 5,  56 => 4,  54 => 3,  52 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:hero-billboard", "themes/djfit/components/hero-billboard/hero-billboard.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 9, "block" => 96, "include" => 106];
        static $filters = ["default" => 1, "join" => 10, "escape" => 84];
        static $functions = ["html_cva" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['default', 'join', 'escape'],
                ['html_cva'],
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
