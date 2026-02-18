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

/* djfit:home-features */
class __TwigTemplate_8bde50fce6d2fc1dec95e19f7f498424 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--home-features"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:home-features"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:home-features"));
        // line 15
        $context["cards"] = [["icon" => ((        // line 17
array_key_exists("feature1_icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature1_icon"] ?? null), "training")) : ("training")), "heading" => ((        // line 18
array_key_exists("feature1_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature1_heading"] ?? null), "Evidence-Based Training")) : ("Evidence-Based Training")), "body" => ((        // line 19
array_key_exists("feature1_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature1_body"] ?? null), "Programs built on the latest exercise science, optimized for men over 40 to build strength safely and effectively.")) : ("Programs built on the latest exercise science, optimized for men over 40 to build strength safely and effectively."))], ["icon" => ((        // line 22
array_key_exists("feature2_icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature2_icon"] ?? null), "longevity")) : ("longevity")), "heading" => ((        // line 23
array_key_exists("feature2_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature2_heading"] ?? null), "Longevity Focused")) : ("Longevity Focused")), "body" => ((        // line 24
array_key_exists("feature2_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature2_body"] ?? null), "Strategies designed not just for today, but for sustained health, vitality, and performance for decades to come.")) : ("Strategies designed not just for today, but for sustained health, vitality, and performance for decades to come."))], ["icon" => ((        // line 27
array_key_exists("feature3_icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature3_icon"] ?? null), "results")) : ("results")), "heading" => ((        // line 28
array_key_exists("feature3_heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature3_heading"] ?? null), "Proven Results")) : ("Proven Results")), "body" => ((        // line 29
array_key_exists("feature3_body", $context)) ? (Twig\Extension\CoreExtension::default(($context["feature3_body"] ?? null), "Join thousands of men who've transformed their health, strength, and confidence with our comprehensive approach.")) : ("Join thousands of men who've transformed their health, strength, and confidence with our comprehensive approach."))]];
        // line 32
        yield "
<section class=\"home-features\">
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 35
            yield "    <article class=\"home-features__card\">
      <div class=\"home-features__icon home-features__icon--";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "icon", [], "any", false, false, true, 36), "html", null, true);
            yield "\">
        ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "icon", [], "any", false, false, true, 37) == "training")) {
                // line 38
                yield "          ";
                // line 39
                yield "          <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <path d=\"M14.4 14.4L9.6 9.6\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <path d=\"M18.657 21.485C18.282 21.8601 17.7733 22.071 17.2429 22.0711C16.7124 22.0711 16.2036 21.8605 15.8285 21.4855C15.4534 21.1105 15.2425 20.6018 15.2424 20.0714C15.2424 19.5409 15.453 19.0321 15.828 18.657L14.061 20.425C13.6859 20.8001 13.177 21.0109 12.6465 21.0109C12.116 21.0109 11.6071 20.8001 11.232 20.425C10.8569 20.0499 10.6461 19.541 10.6461 19.0105C10.6461 18.48 10.8569 17.9711 11.232 17.596L17.596 11.232C17.9711 10.8569 18.48 10.6461 19.0105 10.6461C19.541 10.6461 20.0499 10.8569 20.425 11.232C20.8001 11.6071 21.0109 12.116 21.0109 12.6465C21.0109 13.177 20.8001 13.6859 20.425 14.061L18.657 15.828C19.0321 15.453 19.5409 15.2424 20.0714 15.2424C20.6018 15.2425 21.1105 15.4534 21.4855 15.8285C21.8605 16.2036 22.0711 16.7124 22.0711 17.2429C22.071 17.7733 21.8601 18.282 21.485 18.657L18.657 21.485Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <path d=\"M21.5 21.5L20.1 20.1\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <path d=\"M3.9 3.9L2.5 2.5\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <path d=\"M6.404 12.768C6.02885 13.1431 5.52004 13.3539 4.9895 13.3539C4.45896 13.3539 3.95015 13.1431 3.575 12.768C3.19985 12.3929 2.98909 11.884 2.98909 11.3535C2.98909 10.823 3.19985 10.3141 3.575 9.939L5.343 8.172C5.15725 8.35769 4.93674 8.50497 4.69406 8.60544C4.45138 8.70591 4.1913 8.7576 3.92865 8.75755C3.3982 8.75746 2.88952 8.54665 2.5145 8.1715C2.32881 7.98575 2.18153 7.76524 2.08106 7.52256C1.98059 7.27989 1.9289 7.0198 1.92895 6.75715C1.92904 6.2267 2.13985 5.71802 2.515 5.343L5.343 2.515C5.71802 2.13985 6.2267 1.92904 6.75715 1.92895C7.0198 1.9289 7.27989 1.98059 7.52256 2.08106C7.76524 2.18153 7.98575 2.32881 8.1715 2.5145C8.35726 2.70019 8.50462 2.92065 8.60517 3.16329C8.70573 3.40593 8.7575 3.666 8.75755 3.92865C8.7576 4.1913 8.70591 4.45138 8.60544 4.69406C8.50497 4.93674 8.35769 5.15725 8.172 5.343L9.939 3.575C10.3141 3.19985 10.823 2.98909 11.3535 2.98909C11.884 2.98909 12.3929 3.19985 12.768 3.575C13.1431 3.95015 13.3539 4.45896 13.3539 4.9895C13.3539 5.52004 13.1431 6.02885 12.768 6.404L6.404 12.768Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["card"], "icon", [], "any", false, false, true, 46) == "longevity")) {
                // line 47
                yield "          ";
                // line 48
                yield "          <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <path d=\"M19 14C20.49 12.54 22 10.79 22 8.5C22 7.04131 21.4205 5.64236 20.3891 4.61091C19.3576 3.57946 17.9587 3 16.5 3C14.74 3 13.5 3.5 12 5C10.5 3.5 9.26 3 7.5 3C6.04131 3 4.64236 3.57946 3.61091 4.61091C2.57946 5.64236 2 7.04131 2 8.5C2 10.8 3.5 12.55 5 14L12 21L19 14Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["card"], "icon", [], "any", false, false, true, 51) == "results")) {
                // line 52
                yield "          ";
                // line 53
                yield "          <svg viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <path d=\"M22 7L13.5 15.5L8.5 10.5L2 17\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            <path d=\"M16 7H22V13\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        ";
            }
            // line 58
            yield "      </div>

      <h4 class=\"home-features__heading\">";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "heading", [], "any", false, false, true, 60), "html", null, true);
            yield "</h4>
      <p class=\"home-features__body\">";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "body", [], "any", false, false, true, 61), "html", null, true);
            yield "</p>
    </article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["feature1_icon", "feature1_heading", "feature1_body", "feature2_icon", "feature2_heading", "feature2_body", "feature3_icon", "feature3_heading", "feature3_body"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:home-features";
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
        return array (  124 => 64,  115 => 61,  111 => 60,  107 => 58,  100 => 53,  98 => 52,  96 => 51,  91 => 48,  89 => 47,  87 => 46,  78 => 39,  76 => 38,  74 => 37,  70 => 36,  67 => 35,  63 => 34,  59 => 32,  57 => 29,  56 => 28,  55 => 27,  54 => 24,  53 => 23,  52 => 22,  51 => 19,  50 => 18,  49 => 17,  48 => 15,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:home-features", "themes/djfit/components/home-features/home-features.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "for" => 34, "if" => 37];
        static $filters = ["default" => 17, "escape" => 36];
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
