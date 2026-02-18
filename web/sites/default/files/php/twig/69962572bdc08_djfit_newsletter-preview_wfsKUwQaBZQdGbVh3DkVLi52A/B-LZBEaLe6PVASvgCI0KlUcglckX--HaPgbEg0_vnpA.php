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

/* djfit:newsletter-preview */
class __TwigTemplate_f54cbad2672cb93656ec6326c5bbacb8 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--newsletter-preview"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:newsletter-preview"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:newsletter-preview"));
        // line 7
        yield "<section class=\"nl-preview\">
  <h2 class=\"nl-preview__heading\">";
        // line 8
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "heading");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("heading", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "heading");
            }
        }
        yield "</h2>

  <div class=\"nl-preview__email\">
    ";
        // line 12
        yield "    <div class=\"nl-preview__email-header\">
      <div class=\"nl-preview__email-meta\">
        <div class=\"nl-preview__email-date-wrap\">
          <svg class=\"nl-preview__email-cal-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\"/><line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/><line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/><line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/></svg>
          <span class=\"nl-preview__email-date\">";
        // line 16
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_date", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_date");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_date");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["issue_date"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_date", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_date");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_date");
            }
        }
        yield "</span>
        </div>
        <span class=\"nl-preview__email-badge\">";
        // line 18
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_number", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_number");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_number");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["issue_number"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_number", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_number");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_number");
            }
        }
        yield "</span>
      </div>
      <h3 class=\"nl-preview__email-title\">";
        // line 20
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_title");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["issue_title"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_title");
            }
        }
        yield "</h3>
      <p class=\"nl-preview__email-tagline\">";
        // line 21
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_tagline", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_tagline");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "issue_tagline");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["issue_tagline"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("issue_tagline", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_tagline");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "issue_tagline");
            }
        }
        yield "</p>
    </div>

    ";
        // line 25
        yield "    <div class=\"nl-preview__email-body\">
      <p class=\"nl-preview__body-text\">Hey there,</p>
      <p class=\"nl-preview__body-text\">Welcome back to another edition of the DJ Fit Weekly newsletter. This week, we're diving deep into the often-overlooked foundation of all progress: <strong>recovery</strong>.</p>

      <div class=\"nl-preview__featured\">
        <h4 class=\"nl-preview__featured-label\">&#x1F525; This Week's Featured Topic</h4>
        <h5 class=\"nl-preview__featured-title\">The Recovery Pyramid: Building From The Ground Up</h5>
        <p class=\"nl-preview__body-text\">Most guys over 40 focus solely on training harder, but the real gains happen during recovery. Here's what you need to prioritize:</p>
        <ol class=\"nl-preview__numbered-list\">
          <li><strong>Sleep (7-9 hours):</strong> Non-negotiable. This is where muscle repair and hormone optimization happen.</li>
          <li><strong>Nutrition timing:</strong> Post-workout protein within 2 hours accelerates recovery by up to 25%.</li>
          <li><strong>Active recovery:</strong> Light movement on rest days improves blood flow and reduces soreness.</li>
          <li><strong>Stress management:</strong> Chronic stress kills gains. Practice daily stress-reduction techniques.</li>
        </ol>
      </div>

      <div class=\"nl-preview__quick-wins\">
        <h4 class=\"nl-preview__section-title\">&#x1F4A1; Quick Wins This Week</h4>
        <div class=\"nl-preview__tip-card\">
          <h5 class=\"nl-preview__tip-title\">Workout Tip: Deload Week</h5>
          <p class=\"nl-preview__tip-text\">If you've been training hard for 4+ weeks, take a deload week. Reduce volume by 40-50% while maintaining intensity. Your body (and joints) will thank you.</p>
        </div>
        <div class=\"nl-preview__tip-card\">
          <h5 class=\"nl-preview__tip-title\">Nutrition Hack: Cherry Juice</h5>
          <p class=\"nl-preview__tip-text\">Tart cherry juice has been shown to reduce muscle soreness and improve sleep quality. Try 8oz before bed for better recovery.</p>
        </div>
        <div class=\"nl-preview__tip-card\">
          <h5 class=\"nl-preview__tip-title\">Recovery Tool: Foam Rolling</h5>
          <p class=\"nl-preview__tip-text\">Just 10 minutes of foam rolling can increase range of motion by 10% and reduce delayed onset muscle soreness. Focus on quads, IT band, and lats.</p>
        </div>
      </div>

      <div class=\"nl-preview__divider\"></div>

      <div class=\"nl-preview__story\">
        <h4 class=\"nl-preview__section-title\">&#x2B50; Member Success Story</h4>
        <div class=\"nl-preview__story-card\">
          <p class=\"nl-preview__story-quote\">\"I used to think more training = more results. After implementing proper recovery protocols from DJ Fit, I've gained more muscle in 3 months than I did in the previous year. Sleep and nutrition matter just as much as the workouts.\"</p>
          <p class=\"nl-preview__story-author\">— Robert M., Age 47, Pro Member</p>
        </div>
      </div>

      <div class=\"nl-preview__divider\"></div>

      <div class=\"nl-preview__resources\">
        <h4 class=\"nl-preview__section-title\">&#x1F4DA; This Week's Resources</h4>
        <ul class=\"nl-preview__resource-list\">
          <li><strong>New Video:</strong> 15-Minute Evening Mobility Routine (Members)</li>
          <li><strong>Blog Post:</strong> The Science of Sleep for Muscle Growth (Free)</li>
          <li><strong>Template:</strong> Recovery Tracking Worksheet (Members)</li>
        </ul>
      </div>

      <div class=\"nl-preview__divider\"></div>

      <div class=\"nl-preview__sign-off\">
        <p class=\"nl-preview__body-text\">Remember: Your body doesn't get stronger in the gym. It gets stronger during recovery. Prioritize it accordingly.</p>
        <p class=\"nl-preview__body-text\">Train smart,</p>
        <p class=\"nl-preview__body-text nl-preview__body-text--strong\">The DJ Fit Team</p>
      </div>

      <div class=\"nl-preview__divider\"></div>

      <div class=\"nl-preview__footer\">
        <p class=\"nl-preview__footer-text\">You're receiving this because you subscribed to the DJ Fit newsletter.</p>
        <p class=\"nl-preview__footer-links\"><a href=\"#\">Update preferences</a> | <a href=\"#\">Unsubscribe</a></p>
      </div>
    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading", "issue_date", "issue_number", "issue_title", "issue_tagline"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:newsletter-preview";
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
        return array (  153 => 25,  133 => 21,  115 => 20,  96 => 18,  77 => 16,  71 => 12,  51 => 8,  48 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:newsletter-preview", "themes/djfit/components/newsletter-preview/newsletter-preview.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
