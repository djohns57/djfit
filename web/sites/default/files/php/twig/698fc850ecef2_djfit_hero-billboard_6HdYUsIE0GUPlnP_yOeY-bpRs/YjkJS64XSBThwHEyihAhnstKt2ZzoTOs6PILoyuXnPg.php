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
class __TwigTemplate_1413f3a8791b54909cbdc5ea974612f8 extends Template
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
        $context["hero_flex_position"] = ((array_key_exists("flex_position", $context)) ? (Twig\Extension\CoreExtension::default(($context["flex_position"] ?? null), "bottom-center")) : ("bottom-center"));
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
        $context["hero_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["cq-full relative flex flex-col"], ["height" => ["full" => "h-dvh", "large" => ["h-3/4 min-h-[500px] md:max-h-[600px] xl:max-h-[800px]"], "ribbon" => ["h-1/2 md:max-h-[450px] md:min-h-[400px] xl:max-h-[600px]"]], "flexPosition" => ["top-left" => "justify-start", "center-left" => "justify-center-safe", "bottom-left" => "justify-end", "bottom-center" => "justify-end", "hero-center" => "justify-center"], "overlapNavbar" => ["yes" => "mt-[calc(var(--navbar-height)*-1)]", "no" => ""]]);
        // line 36
        yield "
";
        // line 37
        $context["overlay_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["absolute inset-0"], ["opacity" => ["0%" => "bg-black/0", "20%" => "bg-black/20", "40%" => "bg-black/40", "60%" => "bg-black/60", "75%" => "bg-black/75"]]);
        // line 51
        yield "
";
        // line 52
        $context["image_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["h-full w-full object-cover"], ["position" => ["top" => "object-top", "center" => "object-center", "bottom" => "object-bottom"]]);
        // line 64
        yield "
";
        // line 65
        $context["content_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative z-1 flex flex-col gap-6 py-6 md:py-10 xl:py-20"], ["flexPosition" => ["top-left" => "lg:max-w-2/3", "center-left" => "lg:max-w-2/3", "bottom-left" => "lg:max-w-2/3", "bottom-center" => ["items-center text-center lg:mx-auto lg:max-w-2/3 text-gray-500"], "hero-center" => ["items-center text-center lg:mx-auto lg:max-w-2/3"]], "overlapNavbar" => ["yes" => "pt-[calc(var(--navbar-height)+1.5rem)] md:pt-[calc(var(--navbar-height)+2.5rem)] xl:pt-[calc(var(--navbar-height)+5rem)]", "no" => ""]]);
        // line 83
        yield "
<section
  class=\"";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 86
($context["hero_variants"] ?? null), "apply", [["height" =>         // line 88
($context["hero_height"] ?? null), "flexPosition" =>         // line 89
($context["hero_flex_position"] ?? null), "overlapNavbar" =>         // line 90
($context["hero_overlap_navbar"] ?? null)],         // line 92
($context["additional_classes"] ?? null)], "method", false, false, true, 86), "html", null, true);
        // line 94
        yield "\"
>
  ";
        // line 96
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 96))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "    <div class=\"absolute z-[-1] h-full w-full\">
      ";
            // line 98
            yield from $this->unwrap()->yieldBlock('hero_media', $context, $blocks);
            // line 119
            yield "    </div>
  ";
        }
        // line 121
        yield "  <div class=\"container mx-auto px-4\">
    <div
      class=\"";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 124
($context["content_variants"] ?? null), "apply", [["flexPosition" =>         // line 125
($context["hero_flex_position"] ?? null), "overlapNavbar" =>         // line 126
($context["hero_overlap_navbar"] ?? null)]], "method", false, false, true, 124), "html", null, true);
        // line 128
        yield "\"
    >
      ";
        // line 130
        yield from $this->unwrap()->yieldBlock('hero_content', $context, $blocks);
        // line 157
        yield "    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["height", "flex_position", "overlay_opacity", "object_position", "overlap_navbar", "classes", "media", "heading_text", "subheading_text", "body_text"]);        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "src", [], "any", false, false, true, 99))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "          <div
            class=\"";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["overlay_variants"] ?? null), "apply", [["opacity" =>             // line 103
($context["hero_overlay_opacity"] ?? null)]], "method", false, false, true, 102), "html", null, true);
            // line 105
            yield "\"
          ></div>
        ";
        }
        // line 108
        yield "        ";
        try {
            $_v0 = $this->load("canvas:image", 108);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 109
($context["media"] ?? null), "src", [], "any", false, false, true, 109), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["media"] ?? null), "alt", [], "any", false, false, true, 110), "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 111
($context["media"] ?? null), "width", [], "any", false, false, true, 111), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 112
($context["media"] ?? null), "height", [], "any", false, false, true, 112), "loading" => "eager", "class" => CoreExtension::getAttribute($this->env, $this->source,             // line 114
($context["image_variants"] ?? null), "apply", [["position" =>             // line 115
($context["hero_object_position"] ?? null)]], "method", false, false, true, 114)]));
        }
        // line 118
        yield "      ";
        yield from [];
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 131
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["heading_text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:heading", ["heading_text" =>             // line 136
($context["heading_text"] ?? null), "level" => 1, "url" => "No URL", "text_color" => "default", "text_size" => "heading-responsive-7xl", "align" => ((CoreExtension::inFilter(            // line 141
($context["hero_flex_position"] ?? null), ["bottom-center", "hero-center"])) ? ("center") : ("left"))], false));
            // line 145
            yield "
        ";
        }
        // line 147
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["subheading_text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "          <p class=\"text-lg md:text-xl xl:text-2xl\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("subheading_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "subheading_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "subheading_text");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subheading_text"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("subheading_text", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "subheading_text");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "subheading_text");
                }
            }
            yield "</p>
        ";
        }
        // line 150
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["body_text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "          <div class=\"text-base md:text-lg\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["body_text"] ?? null));
            yield "</div>
        ";
        }
        // line 153
        yield "        ";
        yield from $this->unwrap()->yieldBlock('hero_slot', $context, $blocks);
        // line 156
        yield "      ";
        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_slot(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 154
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
        return array (  251 => 154,  244 => 153,  239 => 156,  236 => 153,  230 => 151,  227 => 150,  207 => 148,  204 => 147,  200 => 145,  198 => 141,  197 => 136,  195 => 132,  192 => 131,  185 => 130,  180 => 118,  177 => 115,  176 => 114,  175 => 112,  174 => 111,  173 => 110,  172 => 109,  163 => 108,  158 => 105,  156 => 103,  155 => 102,  154 => 101,  151 => 100,  148 => 99,  141 => 98,  132 => 157,  130 => 130,  126 => 128,  124 => 126,  123 => 125,  122 => 124,  121 => 123,  117 => 121,  113 => 119,  111 => 98,  108 => 97,  106 => 96,  102 => 94,  100 => 92,  99 => 90,  98 => 89,  97 => 88,  96 => 86,  95 => 85,  91 => 83,  89 => 65,  86 => 64,  84 => 52,  81 => 51,  79 => 37,  76 => 36,  74 => 13,  71 => 12,  67 => 10,  65 => 9,  63 => 8,  60 => 6,  58 => 5,  56 => 4,  54 => 3,  52 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:hero-billboard", "themes/djfit/components/hero-billboard/hero-billboard.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 9, "block" => 98, "include" => 108];
        static $filters = ["default" => 1, "join" => 10, "escape" => 86, "raw" => 151];
        static $functions = ["html_cva" => 14, "include" => 133];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['default', 'join', 'escape', 'raw'],
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
