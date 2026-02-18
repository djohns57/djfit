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

/* djfit:home-articles */
class __TwigTemplate_e53bf618f4261cdf8b5cdeac241f5061 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--home-articles"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:home-articles"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:home-articles"));
        // line 14
        $context["section_heading"] = ((array_key_exists("section_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_heading"] ?? null), "Latest Articles")) : ("Latest Articles"));
        // line 15
        $context["section_subtitle"] = ((array_key_exists("section_subtitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_subtitle"] ?? null), "Expert insights and actionable advice")) : ("Expert insights and actionable advice"));
        // line 16
        $context["view_all_url"] = ((array_key_exists("view_all_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["view_all_url"] ?? null), "/blog")) : ("/blog"));
        // line 17
        yield "
";
        // line 18
        $context["articles"] = [["tag" => ((        // line 20
array_key_exists("article1_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["article1_tag"] ?? null), "Fitness")) : ("Fitness")), "date" => ((        // line 21
array_key_exists("article1_date", $context)) ? (Twig\Extension\CoreExtension::default(($context["article1_date"] ?? null), "Feb 10, 2026")) : ("Feb 10, 2026")), "heading" => ((        // line 22
array_key_exists("article1_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["article1_heading"] ?? null), "Building Muscle After 40: What Really Works")) : ("Building Muscle After 40: What Really Works")), "body" => ((        // line 23
array_key_exists("article1_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["article1_body"] ?? null), "Science-backed strategies for maintaining and building muscle mass as you age.")) : ("Science-backed strategies for maintaining and building muscle mass as you age.")), "url" => ((        // line 24
array_key_exists("article1_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article1_url"] ?? null), "/blog/building-muscle-after-40")) : ("/blog/building-muscle-after-40")), "image_url" => ((        // line 25
array_key_exists("article1_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article1_image_url"] ?? null), "")) : (""))], ["tag" => ((        // line 28
array_key_exists("article2_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["article2_tag"] ?? null), "Recovery")) : ("Recovery")), "date" => ((        // line 29
array_key_exists("article2_date", $context)) ? (Twig\Extension\CoreExtension::default(($context["article2_date"] ?? null), "Feb 8, 2026")) : ("Feb 8, 2026")), "heading" => ((        // line 30
array_key_exists("article2_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["article2_heading"] ?? null), "Optimizing Recovery: Sleep and Stress Management")) : ("Optimizing Recovery: Sleep and Stress Management")), "body" => ((        // line 31
array_key_exists("article2_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["article2_body"] ?? null), "How proper recovery can accelerate your fitness results and improve overall health.")) : ("How proper recovery can accelerate your fitness results and improve overall health.")), "url" => ((        // line 32
array_key_exists("article2_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article2_url"] ?? null), "/blog/optimizing-recovery")) : ("/blog/optimizing-recovery")), "image_url" => ((        // line 33
array_key_exists("article2_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article2_image_url"] ?? null), "")) : (""))], ["tag" => ((        // line 36
array_key_exists("article3_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["article3_tag"] ?? null), "Nutrition")) : ("Nutrition")), "date" => ((        // line 37
array_key_exists("article3_date", $context)) ? (Twig\Extension\CoreExtension::default(($context["article3_date"] ?? null), "Feb 5, 2026")) : ("Feb 5, 2026")), "heading" => ((        // line 38
array_key_exists("article3_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["article3_heading"] ?? null), "Nutrition Fundamentals for Men Over 40")) : ("Nutrition Fundamentals for Men Over 40")), "body" => ((        // line 39
array_key_exists("article3_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["article3_body"] ?? null), "Essential dietary principles to support longevity, energy, and performance.")) : ("Essential dietary principles to support longevity, energy, and performance.")), "url" => ((        // line 40
array_key_exists("article3_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article3_url"] ?? null), "/blog/nutrition-fundamentals")) : ("/blog/nutrition-fundamentals")), "image_url" => ((        // line 41
array_key_exists("article3_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article3_image_url"] ?? null), "")) : (""))]];
        // line 44
        yield "
<section class=\"home-articles\">
  ";
        // line 47
        yield "  <div class=\"home-articles__header\">
    <div class=\"home-articles__header-text\">
      <h2 class=\"home-articles__title\">";
        // line 49
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
      <p class=\"home-articles__subtitle\">";
        // line 50
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
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["view_all_url"] ?? null), "html", null, true);
        yield "\" class=\"home-articles__view-all\">View All</a>
  </div>

  ";
        // line 56
        yield "  <div class=\"home-articles__grid\">
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 58
            yield "      <article class=\"home-articles__card\">
        ";
            // line 60
            yield "        <div class=\"home-articles__media\">
          ";
            // line 61
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_url", [], "any", false, false, true, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "            <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_url", [], "any", false, false, true, 62), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, true, 62), "html", null, true);
                yield "\" class=\"home-articles__image\" loading=\"lazy\" />
          ";
            } else {
                // line 64
                yield "            <div class=\"home-articles__placeholder\">
              <svg class=\"home-articles__placeholder-icon\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
                <circle cx=\"8.5\" cy=\"8.5\" r=\"1.5\" stroke=\"currentColor\" stroke-width=\"1.5\"/>
                <path d=\"M3 16L8 11L13 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <path d=\"M14 15L17 12L21 16\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              </svg>
            </div>
          ";
            }
            // line 73
            yield "        </div>

        ";
            // line 76
            yield "        <div class=\"home-articles__meta\">
          <span class=\"home-articles__tag\">";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "tag", [], "any", false, false, true, 77), "html", null, true);
            yield "</span>
          <span class=\"home-articles__date\">";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, true, 78), "html", null, true);
            yield "</span>
        </div>

        ";
            // line 82
            yield "        <h4 class=\"home-articles__card-heading\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "heading", [], "any", false, false, true, 82), "html", null, true);
            yield "</h4>

        ";
            // line 85
            yield "        <div class=\"home-articles__card-body\">
          <p class=\"home-articles__excerpt\">";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "body", [], "any", false, false, true, 86), "html", null, true);
            yield "</p>
          <a href=\"";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, true, 87), "html", null, true);
            yield "\" class=\"home-articles__read-more\">
            Read More
            <svg class=\"home-articles__arrow\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
              <path d=\"M3.33333 8H12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
              <path d=\"M8 3.33333L12.6667 8L8 12.6667\" stroke=\"currentColor\" stroke-width=\"1.33333\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            </svg>
          </a>
        </div>
      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["article1_tag", "article1_date", "article1_heading", "article1_body", "article1_url", "article1_image_url", "article2_tag", "article2_date", "article2_heading", "article2_body", "article2_url", "article2_image_url", "article3_tag", "article3_date", "article3_heading", "article3_body", "article3_url", "article3_image_url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:home-articles";
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
        return array (  208 => 97,  192 => 87,  188 => 86,  185 => 85,  179 => 82,  173 => 78,  169 => 77,  166 => 76,  162 => 73,  151 => 64,  143 => 62,  141 => 61,  138 => 60,  135 => 58,  131 => 57,  128 => 56,  122 => 52,  103 => 50,  85 => 49,  81 => 47,  77 => 44,  75 => 41,  74 => 40,  73 => 39,  72 => 38,  71 => 37,  70 => 36,  69 => 33,  68 => 32,  67 => 31,  66 => 30,  65 => 29,  64 => 28,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  59 => 21,  58 => 20,  57 => 18,  54 => 17,  52 => 16,  50 => 15,  48 => 14,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:home-articles", "themes/djfit/components/home-articles/home-articles.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "for" => 57, "if" => 61];
        static $filters = ["default" => 14, "escape" => 49];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 'escape'],
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
