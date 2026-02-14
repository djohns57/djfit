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
class __TwigTemplate_db28478b3d4677396f7c435705ff2e78 extends Template
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
        $context["card_background"] = ((array_key_exists("background", $context)) ? (Twig\Extension\CoreExtension::default(($context["background"] ?? null), "noColor")) : ("noColor"));
        // line 2
        yield "
";
        // line 3
        $context["card"] = Twig\Extra\Html\HtmlExtension::htmlCva(["relative flex flex-col gap-4 rounded-xl p-4 shadow-2xl transition duration-300 lg:gap-6 lg:p-6"], ["backgroundColor" => ["default" => "bg-card text-card-foreground", "accent" => "bg-accent text-accent-foreground", "primary" => "bg-primary text-primary-foreground", "inverted" => "bg-foreground text-background", "noColor" => "border border-secondary bg-transparent text-foreground shadow-none"]]);
        // line 17
        yield "
";
        // line 18
        $context["provided_video_url"] = ((array_key_exists("video_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["video_url"] ?? null), "")) : (""));
        // line 19
        $context["embed_url"] = "";
        // line 20
        yield "
";
        // line 21
        if (CoreExtension::inFilter("youtube.com/watch?v=", ($context["provided_video_url"] ?? null))) {
            // line 22
            yield "  ";
            $context["youtube_id"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["provided_video_url"] ?? null), "v=")), "&"));
            // line 23
            yield "  ";
            $context["embed_url"] = ("https://www.youtube.com/embed/" . ($context["youtube_id"] ?? null));
        } elseif (CoreExtension::inFilter("youtu.be/",         // line 24
($context["provided_video_url"] ?? null))) {
            // line 25
            yield "  ";
            $context["youtube_id"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["provided_video_url"] ?? null), "youtu.be/")), "?"));
            // line 26
            yield "  ";
            $context["embed_url"] = ("https://www.youtube.com/embed/" . ($context["youtube_id"] ?? null));
        } elseif (CoreExtension::inFilter("vimeo.com/",         // line 27
($context["provided_video_url"] ?? null))) {
            // line 28
            yield "  ";
            $context["vimeo_id"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["provided_video_url"] ?? null), "vimeo.com/")), "?"));
            // line 29
            yield "  ";
            $context["embed_url"] = ("https://player.vimeo.com/video/" . ($context["vimeo_id"] ?? null));
        }
        // line 31
        yield "
<article
  class=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["card"] ?? null), "apply", [["backgroundColor" =>         // line 35
($context["card_background"] ?? null)]], "method", false, false, true, 34), "html", null, true);
        // line 37
        yield "\"
>
  <div class=\"aspect-video overflow-hidden rounded-lg\">
    ";
        // line 40
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["embed_url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "      <iframe
        class=\"h-full w-full\"
        src=\"";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["embed_url"] ?? null), "html", null, true);
            yield "\"
        title=\"";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default(($context["title"] ?? null), "Video")) : ("Video")), "html", null, true);
            yield "\"
        loading=\"lazy\"
        referrerpolicy=\"strict-origin-when-cross-origin\"
        allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
        allowfullscreen
      ></iframe>
    ";
        }
        // line 51
        yield "  </div>

  <div class=\"flex flex-col gap-2\">
    ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:heading", ["heading_text" => ((        // line 58
array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default(($context["title"] ?? null), "")) : ("")), "level" => 3, "text_color" => "default", "text_size" => "heading-responsive-3xl", "url" => "No URL", "align" => "left"], false));
        // line 67
        yield "
    ";
        // line 68
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("description", $context)) ? (Twig\Extension\CoreExtension::default(($context["description"] ?? null), "")) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "      <div class=\"rich-text mb-0 text-base text-inherit md:text-lg\">
        ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:text", ["text" =>             // line 74
($context["description"] ?? null), "text_color" => "default", "text_size" => "normal"], false));
            // line 80
            yield "
      </div>
    ";
        }
        // line 83
        yield "  </div>
</article>
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
        return array (  146 => 83,  141 => 80,  139 => 74,  138 => 70,  135 => 69,  133 => 68,  130 => 67,  128 => 58,  127 => 54,  122 => 51,  112 => 44,  108 => 43,  104 => 41,  102 => 40,  97 => 37,  95 => 35,  94 => 34,  93 => 33,  89 => 31,  85 => 29,  82 => 28,  80 => 27,  77 => 26,  74 => 25,  72 => 24,  69 => 23,  66 => 22,  64 => 21,  61 => 20,  59 => 19,  57 => 18,  54 => 17,  52 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:card-video", "themes/djfit/components/card-video/card-video.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 21];
        static $filters = ["default" => 1, "first" => 22, "split" => 22, "last" => 22, "escape" => 34];
        static $functions = ["html_cva" => 4, "include" => 55];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'first', 'split', 'last', 'escape'],
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
