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

/* modules/custom/djfit_videos/templates/djfit-video-library.html.twig */
class __TwigTemplate_ce2ae6ec80fdfa107ec52b0b00236603 extends Template
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
        // line 15
        yield "
";
        // line 17
        yield "<div class=\"videos-filters\">
  <div class=\"videos-filters__container\">
    <a href=\"/videos\" class=\"videos-filters__tab videos-filters__tab--active\">All</a>
    <a href=\"/videos?access=free\" class=\"videos-filters__tab\">Free</a>
    <a href=\"/videos?access=members_only\" class=\"videos-filters__tab\">Members only</a>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 23
            yield "      <a href=\"/videos?category=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "tid", [], "any", false, false, true, 23), "html", null, true);
            yield "\"
         class=\"videos-filters__tab\">
        ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 25), "html", null, true);
            yield "
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "  </div>
</div>

";
        // line 32
        if ((($tmp = ($context["featured_video"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "<section class=\"videos-demo\">
  <div class=\"videos-demo__container\">
    <h2 class=\"videos-demo__heading\">Try Our Video Player</h2>
    <p class=\"videos-demo__subtitle\">Experience our interactive video player with this free workout demo</p>

    <div class=\"videos-demo__player\">
      <div class=\"videos-demo__player-media\">
        ";
            // line 40
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["featured_video"] ?? null), "thumbnail_url", [], "any", false, false, true, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "          <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["featured_video"] ?? null), "thumbnail_url", [], "any", false, false, true, 41), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["featured_video"] ?? null), "title", [], "any", false, false, true, 41), "html", null, true);
                yield "\" class=\"videos-demo__player-thumb\" loading=\"lazy\" />
        ";
            }
            // line 43
            yield "        <div class=\"videos-demo__player-overlay\">
          <a href=\"";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["featured_video"] ?? null), "url", [], "any", false, false, true, 44), "html", null, true);
            yield "\" class=\"videos-demo__play-btn\" aria-label=\"Play demo video\">
            <svg width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
              <path d=\"M5 3L19 12L5 21V3Z\" fill=\"currentColor\"/>
            </svg>
          </a>
        </div>
        <span class=\"videos-demo__badge videos-demo__badge--demo\">DEMO</span>
      </div>
      <div class=\"videos-demo__player-info\">
        <h3 class=\"videos-demo__player-title\">";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["featured_video"] ?? null), "title", [], "any", false, false, true, 53), "html", null, true);
            yield "</h3>
        <p class=\"videos-demo__player-desc\">";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["featured_video"] ?? null), "description", [], "any", false, false, true, 54), "html", null, true);
            yield "</p>
      </div>
    </div>
  </div>
</section>

<hr class=\"videos-divider\" />
";
        }
        // line 62
        yield "
";
        // line 64
        yield "<section class=\"videos-grid\">
  <h2 class=\"videos-grid__heading\">All Videos</h2>

  <div class=\"videos-grid__container\">
    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vid"]) {
            // line 69
            yield "      <article class=\"video-card\">
        <div class=\"video-card__media\">
          ";
            // line 71
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "thumbnail_url", [], "any", false, false, true, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "            <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "thumbnail_url", [], "any", false, false, true, 72), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "title", [], "any", false, false, true, 72), "html", null, true);
                yield "\" class=\"video-card__thumb\" loading=\"lazy\" />
          ";
            } else {
                // line 74
                yield "            <svg class=\"video-card__placeholder-icon\" viewBox=\"0 0 88 88\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
              <rect width=\"88\" height=\"88\" rx=\"4\" fill=\"#e5e7eb\"/>
              <path d=\"M36 52L42 44L48 50L54 42L60 52H36Z\" fill=\"#9ca3af\"/>
              <circle cx=\"40\" cy=\"38\" r=\"4\" fill=\"#9ca3af\"/>
              <rect x=\"28\" y=\"28\" width=\"32\" height=\"32\" rx=\"2\" stroke=\"#9ca3af\" stroke-width=\"2\" fill=\"none\"/>
            </svg>
          ";
            }
            // line 81
            yield "
          <div class=\"video-card__overlay\">
            ";
            // line 83
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "access", [], "any", false, false, true, 83) == "free")) {
                // line 84
                yield "              <div class=\"video-card__play-circle\">
                <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                  <path d=\"M5 3L19 12L5 21V3Z\" fill=\"var(--hg-color-hero-gradient-start)\"/>
                </svg>
              </div>
            ";
            } else {
                // line 90
                yield "              <div class=\"video-card__lock-circle\">
                <svg width=\"32\" height=\"32\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                  <rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\"/>
                  <path d=\"M7 11V7a5 5 0 0 1 10 0v4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" fill=\"none\"/>
                </svg>
              </div>
            ";
            }
            // line 97
            yield "          </div>

          ";
            // line 99
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "duration", [], "any", false, false, true, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "            <span class=\"video-card__duration\">
              <svg width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <circle cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\"/>
                <path d=\"M12 6V12L16 14\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" fill=\"none\"/>
              </svg>
              ";
                // line 105
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "duration", [], "any", false, false, true, 105), "html", null, true);
                yield "
            </span>
          ";
            }
            // line 108
            yield "
          <span class=\"video-card__access video-card__access--";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "access", [], "any", false, false, true, 109), "html", null, true);
            yield "\">
            ";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "access", [], "any", false, false, true, 110) == "free")) ? ("FREE") : ("MEMBERS")));
            yield "
          </span>
        </div>

        <div class=\"video-card__body\">
          <div class=\"video-card__tags\">
            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "categories", [], "any", false, false, true, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 117
                yield "              <span class=\"video-card__tag\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 117), "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "          </div>
          <h4 class=\"video-card__title\">";
            // line 120
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "title", [], "any", false, false, true, 120), "html", null, true);
            yield "</h4>
          <p class=\"video-card__desc\">";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "description", [], "any", false, false, true, 121), "html", null, true);
            yield "</p>
        </div>

        <div class=\"video-card__footer\">
          ";
            // line 125
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "access", [], "any", false, false, true, 125) == "free")) {
                // line 126
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vid"], "url", [], "any", false, false, true, 126), "html", null, true);
                yield "\" class=\"video-card__btn video-card__btn--watch\">
              <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <path d=\"M5 3L19 12L5 21V3Z\" fill=\"currentColor\"/>
              </svg>
              Watch Now
            </a>
          ";
            } else {
                // line 133
                yield "            <span class=\"video-card__btn video-card__btn--locked\">
              <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                <rect x=\"3\" y=\"11\" width=\"18\" height=\"11\" rx=\"2\" ry=\"2\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\"/>
                <path d=\"M7 11V7a5 5 0 0 1 10 0v4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" fill=\"none\"/>
              </svg>
              Members Only
            </span>
            <a href=\"/membership\" class=\"video-card__upgrade\">Upgrade to access</a>
          ";
            }
            // line 142
            yield "        </div>
      </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vid'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["categories", "featured_video", "videos"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/djfit_videos/templates/djfit-video-library.html.twig";
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
        return array (  282 => 145,  274 => 142,  263 => 133,  252 => 126,  250 => 125,  243 => 121,  239 => 120,  236 => 119,  227 => 117,  223 => 116,  214 => 110,  210 => 109,  207 => 108,  201 => 105,  194 => 100,  192 => 99,  188 => 97,  179 => 90,  171 => 84,  169 => 83,  165 => 81,  156 => 74,  148 => 72,  146 => 71,  142 => 69,  138 => 68,  132 => 64,  129 => 62,  118 => 54,  114 => 53,  102 => 44,  99 => 43,  91 => 41,  89 => 40,  80 => 33,  78 => 32,  73 => 28,  64 => 25,  58 => 23,  54 => 22,  47 => 17,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/djfit_videos/templates/djfit-video-library.html.twig", "/var/www/html/web/modules/custom/djfit_videos/templates/djfit-video-library.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 22, "if" => 32];
        static $filters = ["escape" => 23];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
