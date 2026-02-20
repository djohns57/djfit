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

/* djfit:home-testimonials */
class __TwigTemplate_296e5176b56aed8112b7bea5f03f073c extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--home-testimonials"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:home-testimonials"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:home-testimonials"));
        // line 9
        yield "
";
        // line 10
        $context["_heading"] = ((array_key_exists("section_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_heading"] ?? null), "Real Results from Real Men")) : ("Real Results from Real Men"));
        // line 11
        $context["_subtitle"] = ((array_key_exists("section_subtitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_subtitle"] ?? null), "Join thousands who've transformed their lives")) : ("Join thousands who've transformed their lives"));
        // line 12
        yield "
";
        // line 13
        $context["testimonials"] = [["name" => ((        // line 15
array_key_exists("testimonial1_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial1_name"] ?? null), "Michael T.")) : ("Michael T.")), "age" => ((        // line 16
array_key_exists("testimonial1_age", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial1_age"] ?? null), "Age 45")) : ("Age 45")), "quote" => ((        // line 17
array_key_exists("testimonial1_quote", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial1_quote"] ?? null), "\"Lost 30 pounds and feel stronger than I did in my 30s. The structured approach made all the difference.\"")) : ("\"Lost 30 pounds and feel stronger than I did in my 30s. The structured approach made all the difference.\"")), "image" => ((        // line 18
array_key_exists("testimonial1_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial1_image_url"] ?? null), "")) : (""))], ["name" => ((        // line 21
array_key_exists("testimonial2_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial2_name"] ?? null), "James R.")) : ("James R.")), "age" => ((        // line 22
array_key_exists("testimonial2_age", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial2_age"] ?? null), "Age 52")) : ("Age 52")), "quote" => ((        // line 23
array_key_exists("testimonial2_quote", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial2_quote"] ?? null), "\"Finally found a program that addresses the specific challenges of training after 40. Game changer.\"")) : ("\"Finally found a program that addresses the specific challenges of training after 40. Game changer.\"")), "image" => ((        // line 24
array_key_exists("testimonial2_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial2_image_url"] ?? null), "")) : (""))], ["name" => ((        // line 27
array_key_exists("testimonial3_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial3_name"] ?? null), "David K.")) : ("David K.")), "age" => ((        // line 28
array_key_exists("testimonial3_age", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial3_age"] ?? null), "Age 48")) : ("Age 48")), "quote" => ((        // line 29
array_key_exists("testimonial3_quote", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial3_quote"] ?? null), "\"The combination of fitness, nutrition, and recovery guidance transformed my health completely.\"")) : ("\"The combination of fitness, nutrition, and recovery guidance transformed my health completely.\"")), "image" => ((        // line 30
array_key_exists("testimonial3_image_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["testimonial3_image_url"] ?? null), "")) : (""))]];
        // line 33
        yield "
<section class=\"home-testimonials\">
  <div class=\"home-testimonials__container\">
    ";
        // line 37
        yield "    <div class=\"home-testimonials__header\">
      <h2 class=\"home-testimonials__heading\">";
        // line 38
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_heading");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_heading"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_heading");
            }
        }
        yield "</h2>
      <p class=\"home-testimonials__subtitle\">
        ";
        // line 40
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_subtitle");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_subtitle"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_subtitle");
            }
        }
        yield "
      </p>
    </div>

    ";
        // line 45
        yield "    <div class=\"home-testimonials__grid\">
      ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            yield "        <article class=\"home-testimonials__card\">
          <div class=\"home-testimonials__card-top\">
            <div class=\"home-testimonials__avatar\">
              ";
            // line 50
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "                <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 51), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 51), "html", null, true);
                yield "\" class=\"home-testimonials__avatar-img\" loading=\"lazy\" />
              ";
            } else {
                // line 53
                yield "                ";
                // line 54
                yield "                <svg
                  class=\"home-testimonials__avatar-placeholder\"
                  viewBox=\"0 0 64 64\"
                  fill=\"none\"
                  xmlns=\"http://www.w3.org/2000/svg\"
                  aria-hidden=\"true\"
                >
                  <rect width=\"64\" height=\"64\" rx=\"32\" fill=\"#f3f4f6\" />
                  <path
                    d=\"M26.5 25.5C26.5 22.4624 28.9624 20 32 20C35.0376 20 37.5 22.4624 37.5 25.5C37.5 28.5376 35.0376 31 32 31C28.9624 31 26.5 28.5376 26.5 25.5Z\"
                    fill=\"#d1d5db\"
                  />
                  <path d=\"M22 42C22 37.0294 26.4771 33 32 33C37.5228 33 42 37.0294 42 42V44H22V42Z\" fill=\"#d1d5db\" />
                </svg>
              ";
            }
            // line 69
            yield "            </div>
            <div class=\"home-testimonials__info\">
              <span class=\"home-testimonials__name\">";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 71), "html", null, true);
            yield "</span>
              <span class=\"home-testimonials__age\">";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "age", [], "any", false, false, true, 72), "html", null, true);
            yield "</span>
            </div>
          </div>
          <p class=\"home-testimonials__quote\">
            ";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quote", [], "any", false, false, true, 76), "html", null, true);
            yield "
          </p>
        </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["section_heading", "section_subtitle", "testimonial1_name", "testimonial1_age", "testimonial1_quote", "testimonial1_image_url", "testimonial2_name", "testimonial2_age", "testimonial2_quote", "testimonial2_image_url", "testimonial3_name", "testimonial3_age", "testimonial3_quote", "testimonial3_image_url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:home-testimonials";
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
        return array (  186 => 80,  176 => 76,  169 => 72,  165 => 71,  161 => 69,  144 => 54,  142 => 53,  134 => 51,  132 => 50,  127 => 47,  123 => 46,  120 => 45,  99 => 40,  80 => 38,  77 => 37,  72 => 33,  70 => 30,  69 => 29,  68 => 28,  67 => 27,  66 => 24,  65 => 23,  64 => 22,  63 => 21,  62 => 18,  61 => 17,  60 => 16,  59 => 15,  58 => 13,  55 => 12,  53 => 11,  51 => 10,  48 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:home-testimonials", "themes/djfit/components/home-testimonials/home-testimonials.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "for" => 46, "if" => 50];
        static $filters = ["default" => 10, "escape" => 38];
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
