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

/* djfit:hero-blog */
class __TwigTemplate_73e187e572eafe15766c01e4bb41433d extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--hero-blog"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:hero-blog"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:hero-blog"));
        $context["classes"] = Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::merge(((array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])), ["hero-blog", "py-8", "md:py-12"]), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty(($context["v"] ?? null)); });
        // line 2
        yield "
";
        // line 3
        $context["date_formatted"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date"] ?? null), "m.d.Y");
        // line 4
        yield "
<section class=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield " cq-full\">
  <div class=\"hero-blog--content container mx-auto flex flex-col gap-8 px-6 md:w-full md:gap-12 lg:w-10/12 xl:w-8/12\">
    <p>
      <time datetime=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_formatted"] ?? null), "html", null, true);
        yield "\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_formatted", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_formatted");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_formatted");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_formatted"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_formatted", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_formatted");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_formatted");
            }
        }
        yield "</time>
    </p>

    ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:heading", ["heading_text" => ((        // line 15
array_key_exists("heading_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_text"] ?? null), "")) : ("")), "level" => ((        // line 16
array_key_exists("level", $context)) ? (Twig\Extension\CoreExtension::default(($context["level"] ?? null), 1)) : (1)), "url" => "No URL", "text_color" => "default", "text_size" => "heading-responsive-6xl", "align" => "left"], false));
        // line 24
        yield "

    ";
        // line 26
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["author"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "      <p>
        By ";
            // line 28
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "author");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "author");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "author");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "author");
                }
            }
            yield "
      </p>
    ";
        }
        // line 31
        yield "  </div>

  <div class=\"w:full relative [&_.cq-full]:mx-0 [&_.cq-full]:w-full\">
    <div class=\"relative mx-auto mt-8 px-6 md:mt-12 lg:w-full xl:w-10/12\">
      ";
        // line 35
        try {
            $_v0 = $this->load("canvas:image", 35);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::toArray(["src" => CoreExtension::getAttribute($this->env, $this->source,             // line 36
($context["media"] ?? null), "src", [], "any", false, false, true, 36), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 37
($context["media"] ?? null), "alt", [], "any", false, false, true, 37), "width" => CoreExtension::getAttribute($this->env, $this->source,             // line 38
($context["media"] ?? null), "width", [], "any", false, false, true, 38), "height" => CoreExtension::getAttribute($this->env, $this->source,             // line 39
($context["media"] ?? null), "height", [], "any", false, false, true, 39), "loading" => "eager"]));
        }
        // line 42
        yield "    </div>
    <div class=\"absolute -bottom-8 z-[-1] h-[calc(33.3%+32px)] w-full bg-accent md:-bottom-12 md:h-[calc(33.3%+48px)]\"></div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["v", "date", "heading_text", "level", "author", "media"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:hero-blog";
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
        return array (  138 => 42,  135 => 39,  134 => 38,  133 => 37,  132 => 36,  124 => 35,  118 => 31,  98 => 28,  95 => 27,  93 => 26,  89 => 24,  87 => 16,  86 => 15,  85 => 11,  63 => 8,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:hero-blog", "themes/djfit/components/hero-blog/hero-blog.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 26, "include" => 35];
        static $filters = ["filter" => 1, "merge" => 1, "default" => 1, "date" => 3, "escape" => 5, "join" => 5];
        static $functions = ["include" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['filter', 'merge', 'default', 'date', 'escape', 'join'],
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
