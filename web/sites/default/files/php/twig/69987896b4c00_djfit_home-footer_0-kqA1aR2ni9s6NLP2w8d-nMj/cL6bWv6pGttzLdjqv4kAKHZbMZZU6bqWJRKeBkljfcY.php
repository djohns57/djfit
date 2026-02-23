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

/* djfit:home-footer */
class __TwigTemplate_5db786661f4e4698634e7846a09460e8 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--home-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:home-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:home-footer"));
        // line 9
        yield "
";
        // line 10
        $context["_brand"] = ((array_key_exists("brand_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["brand_name"] ?? null), "DJ Fit")) : ("DJ Fit"));
        // line 11
        $context["_desc"] = ((        // line 12
array_key_exists("brand_description", $context)) ? (Twig\Extension\CoreExtension::default(($context["brand_description"] ?? null), "Health, strength, and longevity for men over 40. Science-backed fitness, nutrition, and recovery strategies.")) : ("Health, strength, and longevity for men over 40. Science-backed fitness, nutrition, and recovery strategies."));
        // line 14
        $context["_fb"] = ((array_key_exists("facebook_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["facebook_url"] ?? null), "#")) : ("#"));
        // line 15
        $context["_tw"] = ((array_key_exists("twitter_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["twitter_url"] ?? null), "#")) : ("#"));
        // line 16
        $context["_ig"] = ((array_key_exists("instagram_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["instagram_url"] ?? null), "#")) : ("#"));
        // line 17
        $context["_copy"] = ((array_key_exists("copyright_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["copyright_text"] ?? null), "© 2026 DJ Fit. All rights reserved.")) : ("© 2026 DJ Fit. All rights reserved."));
        // line 18
        $context["_blog_url"] = ((array_key_exists("blog_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["blog_url"] ?? null), "/blog")) : ("/blog"));
        // line 19
        $context["_blog_label"] = ((array_key_exists("blog_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["blog_label"] ?? null), "Blog")) : ("Blog"));
        // line 20
        $context["_videos_url"] = ((array_key_exists("videos_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["videos_url"] ?? null), "/videos")) : ("/videos"));
        // line 21
        $context["_videos_label"] = ((array_key_exists("videos_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["videos_label"] ?? null), "Video Library")) : ("Video Library"));
        // line 22
        $context["_resources_url"] = ((array_key_exists("resources_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["resources_url"] ?? null), "/resources")) : ("/resources"));
        // line 23
        $context["_resources_label"] = ((array_key_exists("resources_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["resources_label"] ?? null), "Resources")) : ("Resources"));
        // line 24
        $context["_membership_url"] = ((array_key_exists("membership_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["membership_url"] ?? null), "/membership")) : ("/membership"));
        // line 25
        $context["_membership_label"] = ((array_key_exists("membership_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["membership_label"] ?? null), "Membership")) : ("Membership"));
        // line 26
        $context["_privacy_url"] = ((array_key_exists("privacy_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["privacy_url"] ?? null), "/privacy")) : ("/privacy"));
        // line 27
        $context["_privacy_label"] = ((array_key_exists("privacy_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["privacy_label"] ?? null), "Privacy Policy")) : ("Privacy Policy"));
        // line 28
        $context["_terms_url"] = ((array_key_exists("terms_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["terms_url"] ?? null), "/terms")) : ("/terms"));
        // line 29
        $context["_terms_label"] = ((array_key_exists("terms_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["terms_label"] ?? null), "Terms of Service")) : ("Terms of Service"));
        // line 30
        $context["_cookies_url"] = ((array_key_exists("cookies_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["cookies_url"] ?? null), "/cookies")) : ("/cookies"));
        // line 31
        $context["_cookies_label"] = ((array_key_exists("cookies_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["cookies_label"] ?? null), "Cookie Policy")) : ("Cookie Policy"));
        // line 32
        $context["_contact_url"] = ((array_key_exists("contact_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["contact_url"] ?? null), "/contact")) : ("/contact"));
        // line 33
        $context["_contact_label"] = ((array_key_exists("contact_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["contact_label"] ?? null), "Contact Us")) : ("Contact Us"));
        // line 34
        yield "
<footer class=\"home-footer\" role=\"contentinfo\">
  <div class=\"home-footer__top\">
    ";
        // line 38
        yield "    <div class=\"home-footer__brand\">
      <div class=\"home-footer__brand-row\">
        ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:logo-jps-enterprise", ["size" => "large", "standalone" => false], false));
        // line 49
        yield "
        <span class=\"home-footer__brand-name\">";
        // line 50
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_brand", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_brand");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_brand");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_brand"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_brand", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_brand");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_brand");
            }
        }
        yield "</span>
      </div>
      <p class=\"home-footer__brand-desc\">
        ";
        // line 53
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_desc", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_desc");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_desc");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_desc"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_desc", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_desc");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_desc");
            }
        }
        yield "
      </p>
      <div class=\"home-footer__social\">
        <a href=\"";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_fb"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__social-link\" aria-label=\"Facebook\">
          <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <path
              d=\"M24 12C24 5.373 18.627 0 12 0C5.373 0 0 5.373 0 12C0 17.99 4.388 22.954 10.125 23.854V15.469H7.078V12H10.125V9.357C10.125 6.35 11.917 4.688 14.658 4.688C15.97 4.688 17.344 4.923 17.344 4.923V7.876H15.83C14.339 7.876 13.874 8.801 13.874 9.75V12H17.202L16.67 15.47H13.874V23.855C19.612 22.954 24 17.989 24 12Z\"
              fill=\"currentColor\"
            />
          </svg>
        </a>
        <a href=\"";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_tw"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__social-link\" aria-label=\"Twitter\">
          <svg width=\"24\" height=\"20\" viewBox=\"0 0 24 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <path
              d=\"M23.953 2.324C23.055 2.719 22.103 2.98 21.128 3.099C22.154 2.482 22.922 1.515 23.291 0.376C22.34 0.931 21.286 1.335 20.164 1.56C19.424 0.768 18.443 0.243 17.374 0.066C16.304 -0.111 15.207 0.07 14.251 0.581C13.295 1.092 12.535 1.904 12.088 2.892C11.641 3.879 11.533 4.986 11.78 6.042C7.69 5.849 4.067 3.884 1.64 0.916C1.199 1.665 0.969 2.521 0.974 3.391C0.974 5.101 1.844 6.604 3.162 7.487C2.381 7.462 1.617 7.25 0.934 6.871V6.931C0.934 8.067 1.326 9.168 2.046 10.048C2.765 10.928 3.766 11.532 4.88 11.758C4.158 11.951 3.402 11.98 2.668 11.843C2.984 12.821 3.598 13.675 4.423 14.288C5.248 14.901 6.244 15.24 7.272 15.26C5.532 16.626 3.382 17.367 1.17 17.365C0.78 17.365 0.391 17.342 0 17.298C2.256 18.742 4.879 19.509 7.557 19.507C16.61 19.507 21.555 12.011 21.555 5.522C21.555 5.312 21.555 5.102 21.54 4.892C22.506 4.196 23.339 3.333 24 2.344L23.953 2.324Z\"
              fill=\"currentColor\"
            />
          </svg>
        </a>
        <a href=\"";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_ig"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__social-link\" aria-label=\"Instagram\">
          <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
            <path
              d=\"M12 0C8.74 0 8.333 0.015 7.053 0.072C5.775 0.132 4.905 0.333 4.14 0.63C3.351 0.936 2.681 1.347 2.014 2.014C1.347 2.681 0.935 3.35 0.63 4.14C0.333 4.905 0.131 5.775 0.072 7.053C0.012 8.333 0 8.74 0 12C0 15.26 0.015 15.667 0.072 16.947C0.132 18.224 0.333 19.095 0.63 19.86C0.936 20.648 1.347 21.319 2.014 21.986C2.681 22.652 3.35 23.065 4.14 23.37C4.906 23.666 5.776 23.869 7.053 23.928C8.333 23.988 8.74 24 12 24C15.26 24 15.667 23.985 16.947 23.928C18.224 23.868 19.095 23.666 19.86 23.37C20.648 23.064 21.319 22.652 21.986 21.986C22.652 21.319 23.065 20.651 23.37 19.86C23.666 19.095 23.869 18.224 23.928 16.947C23.988 15.667 24 15.26 24 12C24 8.74 23.985 8.333 23.928 7.053C23.868 5.776 23.666 4.904 23.37 4.14C23.064 3.351 22.652 2.681 21.986 2.014C21.319 1.347 20.651 0.935 19.86 0.63C19.095 0.333 18.224 0.131 16.947 0.072C15.667 0.012 15.26 0 12 0ZM12 2.16C15.203 2.16 15.585 2.176 16.85 2.231C18.02 2.286 18.655 2.48 19.077 2.646C19.639 2.863 20.037 3.123 20.459 3.542C20.878 3.962 21.138 4.361 21.355 4.923C21.519 5.345 21.715 5.98 21.768 7.15C21.825 8.416 21.838 8.796 21.838 12C21.838 15.204 21.823 15.585 21.764 16.85C21.703 18.02 21.508 18.655 21.343 19.077C21.119 19.639 20.864 20.037 20.444 20.459C20.025 20.878 19.62 21.138 19.064 21.355C18.644 21.519 17.999 21.715 16.829 21.768C15.555 21.825 15.18 21.838 11.97 21.838C8.759 21.838 8.384 21.823 7.111 21.764C5.94 21.703 5.295 21.508 4.875 21.343C4.306 21.119 3.915 20.864 3.496 20.444C3.075 20.025 2.806 19.62 2.596 19.064C2.431 18.644 2.237 17.999 2.176 16.829C2.131 15.569 2.115 15.18 2.115 11.985C2.115 8.789 2.131 8.399 2.176 7.124C2.237 5.954 2.431 5.31 2.596 4.89C2.806 4.32 3.075 3.93 3.496 3.509C3.915 3.09 4.306 2.82 4.875 2.611C5.295 2.445 5.926 2.25 7.096 2.19C8.371 2.145 8.746 2.13 11.955 2.13L12 2.16ZM12 5.838C8.595 5.838 5.838 8.598 5.838 12C5.838 15.405 8.598 18.162 12 18.162C15.405 18.162 18.162 15.402 18.162 12C18.162 8.595 15.402 5.838 12 5.838ZM12 16C9.79 16 8 14.21 8 12C8 9.79 9.79 8 12 8C14.21 8 16 9.79 16 12C16 14.21 14.21 16 12 16ZM19.846 5.595C19.846 6.39 19.2 7.035 18.406 7.035C17.611 7.035 16.966 6.389 16.966 5.595C16.966 4.801 17.612 4.156 18.406 4.156C19.199 4.155 19.846 4.801 19.846 5.595Z\"
              fill=\"currentColor\"
            />
          </svg>
        </a>
      </div>
    </div>

    ";
        // line 84
        yield "    <nav class=\"home-footer__nav\" aria-label=\"Quick Links\">
      <h4 class=\"home-footer__nav-heading\">Quick Links</h4>
      <ul class=\"home-footer__nav-list\">
        <li><a href=\"";
        // line 87
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_blog_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_blog_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_blog_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_blog_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_blog_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_blog_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_blog_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_blog_label");
            }
        }
        yield "</a></li>
        <li><a href=\"";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_videos_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_videos_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_videos_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_videos_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_videos_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_videos_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_videos_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_videos_label");
            }
        }
        yield "</a></li>
        <li><a href=\"";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_resources_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_resources_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_resources_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_resources_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_resources_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_resources_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_resources_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_resources_label");
            }
        }
        yield "</a></li>
        <li><a href=\"";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_membership_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_membership_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_membership_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_membership_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_membership_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_membership_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_membership_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_membership_label");
            }
        }
        yield "</a></li>
      </ul>
    </nav>

    ";
        // line 95
        yield "    <nav class=\"home-footer__nav\" aria-label=\"Legal\">
      <h4 class=\"home-footer__nav-heading\">Legal</h4>
      <ul class=\"home-footer__nav-list\">
        <li><a href=\"";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_privacy_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_privacy_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_privacy_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_privacy_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_privacy_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_privacy_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_privacy_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_privacy_label");
            }
        }
        yield "</a></li>
        <li><a href=\"";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_terms_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_terms_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_terms_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_terms_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_terms_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_terms_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_terms_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_terms_label");
            }
        }
        yield "</a></li>
        <li><a href=\"";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_cookies_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_cookies_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_cookies_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_cookies_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_cookies_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_cookies_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_cookies_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_cookies_label");
            }
        }
        yield "</a></li>
        <li><a href=\"";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_contact_url"] ?? null), "html", null, true);
        yield "\" class=\"home-footer__nav-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_contact_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_contact_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_contact_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_contact_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_contact_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_contact_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_contact_label");
            }
        }
        yield "</a></li>
      </ul>
    </nav>
  </div>

  ";
        // line 107
        yield "  <div class=\"home-footer__bottom\">
    <p class=\"home-footer__copyright\">
      ";
        // line 109
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_copy", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "_copy");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "_copy");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["_copy"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("_copy", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "_copy");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "_copy");
            }
        }
        yield "
    </p>
  </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["brand_name", "brand_description", "facebook_url", "twitter_url", "instagram_url", "copyright_text", "blog_url", "blog_label", "videos_url", "videos_label", "resources_url", "resources_label", "membership_url", "membership_label", "privacy_url", "privacy_label", "terms_url", "terms_label", "cookies_url", "cookies_label", "contact_url", "contact_label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:home-footer";
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
        return array (  367 => 109,  363 => 107,  339 => 101,  319 => 100,  299 => 99,  279 => 98,  274 => 95,  251 => 90,  231 => 89,  211 => 88,  191 => 87,  186 => 84,  172 => 72,  161 => 64,  150 => 56,  130 => 53,  110 => 50,  107 => 49,  105 => 40,  101 => 38,  96 => 34,  94 => 33,  92 => 32,  90 => 31,  88 => 30,  86 => 29,  84 => 28,  82 => 27,  80 => 26,  78 => 25,  76 => 24,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 12,  53 => 11,  51 => 10,  48 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:home-footer", "themes/djfit/components/home-footer/home-footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10];
        static $filters = ["default" => 10, "escape" => 50];
        static $functions = ["include" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['default', 'escape'],
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
