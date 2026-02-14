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

/* djfit:card-video */
class __TwigTemplate_6067d19e38481652e4e3a455724eb65f extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--card-video"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:card-video"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:card-video"));
        // line 10
        yield "
";
        // line 11
        $context["card_background"] = ((array_key_exists("background", $context)) ? (Twig\Extension\CoreExtension::default(($context["background"] ?? null), "noColor")) : ("noColor"));
        // line 12
        yield "
";
        // line 14
        $context["embed_url"] = "";
        // line 15
        yield "
";
        // line 16
        if (CoreExtension::inFilter("youtube.com/watch", ($context["video_url"] ?? null))) {
            // line 17
            yield "  ";
            $context["video_id"] = (($_v0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v1 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "v=")) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "v="), 1, [], "array", false, false, true, 17)), "&")) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v2 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "v=")) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "v="), 1, [], "array", false, false, true, 17)), "&"), 0, [], "array", false, false, true, 17));
            // line 18
            yield "  ";
            $context["embed_url"] = ("https://www.youtube-nocookie.com/embed/" . ($context["video_id"] ?? null));
        } elseif (CoreExtension::inFilter("youtu.be/",         // line 19
($context["video_url"] ?? null))) {
            // line 20
            yield "  ";
            $context["video_id"] = (($_v3 = Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v4 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "youtu.be/")) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "youtu.be/"), 1, [], "array", false, false, true, 20)), "?")) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v5 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "youtu.be/")) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "youtu.be/"), 1, [], "array", false, false, true, 20)), "?"), 0, [], "array", false, false, true, 20));
            // line 21
            yield "  ";
            $context["embed_url"] = ("https://www.youtube-nocookie.com/embed/" . ($context["video_id"] ?? null));
        } elseif (CoreExtension::inFilter("youtube.com/embed/",         // line 22
($context["video_url"] ?? null))) {
            // line 23
            yield "  ";
            $context["embed_url"] = Twig\Extension\CoreExtension::replace(($context["video_url"] ?? null), ["youtube.com" => "youtube-nocookie.com"]);
        } elseif (CoreExtension::inFilter("player.vimeo.com/video/",         // line 24
($context["video_url"] ?? null))) {
            // line 25
            yield "  ";
            $context["embed_url"] = ($context["video_url"] ?? null);
        } elseif (CoreExtension::inFilter("vimeo.com/",         // line 26
($context["video_url"] ?? null))) {
            // line 27
            yield "  ";
            $context["video_id"] = (($_v6 = Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v7 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "vimeo.com/")) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "vimeo.com/"), 1, [], "array", false, false, true, 27)), "?")) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v8 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "vimeo.com/")) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["video_url"] ?? null), "vimeo.com/"), 1, [], "array", false, false, true, 27)), "?"), 0, [], "array", false, false, true, 27));
            // line 28
            yield "  ";
            $context["embed_url"] = ("https://player.vimeo.com/video/" . ($context["video_id"] ?? null));
        }
        // line 30
        yield "
";
        // line 31
        $context["card_variants"] = Twig\Extra\Html\HtmlExtension::htmlCva(["group relative flex flex-col overflow-hidden rounded-xl shadow-2xl transition duration-300"], ["backgroundColor" => ["default" => "bg-card text-card-foreground", "accent" => "bg-accent text-accent-foreground", "primary" => "bg-primary text-primary-foreground", "inverted" => "bg-foreground text-background", "noColor" => "border border-secondary shadow-none"]]);
        // line 45
        yield "
<div class=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["card_variants"] ?? null), "apply", [["backgroundColor" => ($context["card_background"] ?? null)]], "method", false, false, true, 46), "html", null, true);
        yield "\">
  ";
        // line 47
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["embed_url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "    <div class=\"aspect-video w-full\">
      <iframe
        src=\"";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["embed_url"] ?? null), "html", null, true);
            yield "\"
        class=\"h-full w-full\"
        frameborder=\"0\"
        allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
        allowfullscreen
        loading=\"lazy\"
        title=\"";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "\"
      ></iframe>
    </div>
  ";
        }
        // line 60
        yield "
  <div class=\"flex flex-col gap-2 p-4 lg:p-6\">
    <h3 class=\"text-xl font-semibold md:text-2xl\">";
        // line 62
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
        yield "</h3>
    ";
        // line 63
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "      <p class=\"mb-0 text-md md:text-lg\">";
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
            yield "</p>
    ";
        }
        // line 66
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["background", "video_url", "title", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:card-video";
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
        return array (  174 => 66,  154 => 64,  152 => 63,  134 => 62,  130 => 60,  123 => 56,  114 => 50,  110 => 48,  108 => 47,  104 => 46,  101 => 45,  99 => 31,  96 => 30,  92 => 28,  89 => 27,  87 => 26,  84 => 25,  82 => 24,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  69 => 19,  66 => 18,  63 => 17,  61 => 16,  58 => 15,  56 => 14,  53 => 12,  51 => 11,  48 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:card-video", "themes/djfit/components/card-video/card-video.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "if" => 16];
        static $filters = ["default" => 11, "split" => 17, "replace" => 23, "escape" => 46];
        static $functions = ["html_cva" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'split', 'replace', 'escape'],
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
