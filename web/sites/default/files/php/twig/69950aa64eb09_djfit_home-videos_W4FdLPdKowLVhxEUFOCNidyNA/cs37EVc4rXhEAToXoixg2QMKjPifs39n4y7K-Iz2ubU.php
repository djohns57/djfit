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

/* djfit:home-videos */
class __TwigTemplate_0db1e8c48e877640da0f4851a8865758 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--home-videos"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:home-videos"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:home-videos"));
        // line 14
        $context["section_heading"] = ((array_key_exists("section_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_heading"] ?? null), "Featured Videos")) : ("Featured Videos"));
        // line 15
        $context["section_subtitle"] = ((array_key_exists("section_subtitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_subtitle"] ?? null), "Watch and learn from our expert trainers")) : ("Watch and learn from our expert trainers"));
        // line 16
        $context["library_url"] = ((array_key_exists("library_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["library_url"] ?? null), "/videos")) : ("/videos"));
        // line 17
        yield "
";
        // line 18
        $context["videos"] = [["heading" => ((        // line 20
array_key_exists("video1_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["video1_heading"] ?? null), "Complete Full Body Workout - 30 Minutes")) : ("Complete Full Body Workout - 30 Minutes")), "body" => ((        // line 21
array_key_exists("video1_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["video1_body"] ?? null), "Efficient strength training for busy professionals")) : ("Efficient strength training for busy professionals")), "url" => ((        // line 22
array_key_exists("video1_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["video1_url"] ?? null), "/videos/full-body-workout")) : ("/videos/full-body-workout")), "image_url" => ((        // line 23
array_key_exists("video1_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["video1_image_url"] ?? null), "")) : ("")), "badge" => ((        // line 24
array_key_exists("video1_badge", $context)) ? (Twig\Extension\CoreExtension::default(($context["video1_badge"] ?? null), "FREE")) : ("FREE")), "locked" => (((        // line 25
array_key_exists("video1_locked", $context)) ? (Twig\Extension\CoreExtension::default(($context["video1_locked"] ?? null), "no")) : ("no")) == "yes")], ["heading" => ((        // line 28
array_key_exists("video2_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["video2_heading"] ?? null), "Advanced Mobility and Recovery Protocol")) : ("Advanced Mobility and Recovery Protocol")), "body" => ((        // line 29
array_key_exists("video2_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["video2_body"] ?? null), "Premium content for enhanced flexibility and injury prevention")) : ("Premium content for enhanced flexibility and injury prevention")), "url" => ((        // line 30
array_key_exists("video2_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["video2_url"] ?? null), "/videos/mobility-recovery")) : ("/videos/mobility-recovery")), "image_url" => ((        // line 31
array_key_exists("video2_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["video2_image_url"] ?? null), "")) : ("")), "badge" => ((        // line 32
array_key_exists("video2_badge", $context)) ? (Twig\Extension\CoreExtension::default(($context["video2_badge"] ?? null), "MEMBERS")) : ("MEMBERS")), "locked" => (((        // line 33
array_key_exists("video2_locked", $context)) ? (Twig\Extension\CoreExtension::default(($context["video2_locked"] ?? null), "yes")) : ("yes")) == "yes")]];
        // line 36
        yield "
<section class=\"home-videos\">
  ";
        // line 39
        yield "  <div class=\"home-videos__header\">
    <div class=\"home-videos__header-text\">
      <h2 class=\"home-videos__title\">";
        // line 41
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("section_heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "section_heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "section_heading");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_heading"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("section_heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "section_heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "section_heading");
            }
        }
        yield "</h2>
      <p class=\"home-videos__subtitle\">";
        // line 42
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("section_subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "section_subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "section_subtitle");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_subtitle"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("section_subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "section_subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "section_subtitle");
            }
        }
        yield "</p>
    </div>
    <a href=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["library_url"] ?? null), "html", null, true);
        yield "\" class=\"home-videos__library-btn\">Video Library</a>
  </div>

  ";
        // line 48
        yield "  <div class=\"home-videos__grid\">
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 50
            yield "      <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, true, 50), "html", null, true);
            yield "\" class=\"home-videos__card\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "heading", [], "any", false, false, true, 50), "html", null, true);
            yield "\">
        ";
            // line 52
            yield "        <div class=\"home-videos__media\">
          ";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["video"], "image_url", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "            <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "image_url", [], "any", false, false, true, 54), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "heading", [], "any", false, false, true, 54), "html", null, true);
                yield "\" class=\"home-videos__thumb\" loading=\"lazy\" />
          ";
            } else {
                // line 56
                yield "            <div class=\"home-videos__placeholder\">
              <svg class=\"home-videos__placeholder-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
                <circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
                <path d=\"M3 16L8 11L13 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <path d=\"M14 15L17 12L21 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              </svg>
            </div>
          ";
            }
            // line 65
            yield "
          ";
            // line 67
            yield "          <div class=\"home-videos__overlay\">
            <div class=\"home-videos__play-btn\">
              ";
            // line 69
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["video"], "locked", [], "any", false, false, true, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "                ";
                // line 71
                yield "                <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" class=\"home-videos__icon\">
                  <rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
                  <path d=\"M7 11V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V11\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                </svg>
              ";
            } else {
                // line 76
                yield "                ";
                // line 77
                yield "                <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" class=\"home-videos__icon\">
                  <polygon points=\"5,3 19,12 5,21\" fill=\"currentColor\"/>
                </svg>
              ";
            }
            // line 81
            yield "            </div>
          </div>

          ";
            // line 85
            yield "          <span class=\"home-videos__badge home-videos__badge--";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["video"], "badge", [], "any", false, false, true, 85)), "html", null, true);
            yield "\">
            ";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "badge", [], "any", false, false, true, 86), "html", null, true);
            yield "
          </span>
        </div>

        ";
            // line 91
            yield "        <div class=\"home-videos__content\">
          <h4 class=\"home-videos__card-heading\">";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "heading", [], "any", false, false, true, 92), "html", null, true);
            yield "</h4>
          <p class=\"home-videos__card-body\">";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video"], "body", [], "any", false, false, true, 93), "html", null, true);
            yield "</p>
        </div>
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['video'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["video1_heading", "video1_body", "video1_url", "video1_image_url", "video1_badge", "video1_locked", "video2_heading", "video2_body", "video2_url", "video2_image_url", "video2_badge", "video2_locked"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:home-videos";
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
        return array (  220 => 97,  210 => 93,  206 => 92,  203 => 91,  196 => 86,  191 => 85,  186 => 81,  180 => 77,  178 => 76,  171 => 71,  169 => 70,  167 => 69,  163 => 67,  160 => 65,  149 => 56,  141 => 54,  139 => 53,  136 => 52,  129 => 50,  125 => 49,  122 => 48,  116 => 44,  97 => 42,  79 => 41,  75 => 39,  71 => 36,  69 => 33,  68 => 32,  67 => 31,  66 => 30,  65 => 29,  64 => 28,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  59 => 21,  58 => 20,  57 => 18,  54 => 17,  52 => 16,  50 => 15,  48 => 14,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:home-videos", "themes/djfit/components/home-videos/home-videos.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "for" => 49, "if" => 53];
        static $filters = ["default" => 14, "escape" => 41, "lower" => 85];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 'escape', 'lower'],
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
