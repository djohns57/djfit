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

/* djfit:sign-in-modal */
class __TwigTemplate_92ab9c47235aa1617764fd6ce3f7eaaf extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--sign-in-modal"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:sign-in-modal"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:sign-in-modal"));
        // line 11
        $context["heading"] = ((array_key_exists("heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading"] ?? null), "Sign In")) : ("Sign In"));
        // line 12
        $context["subtitle"] = ((array_key_exists("subtitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["subtitle"] ?? null), "Enter your credentials to access your account.")) : ("Enter your credentials to access your account."));
        // line 13
        $context["email_label"] = ((array_key_exists("email_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["email_label"] ?? null), "Email")) : ("Email"));
        // line 14
        $context["email_placeholder"] = ((array_key_exists("email_placeholder", $context)) ? (Twig\Extension\CoreExtension::default(($context["email_placeholder"] ?? null), "your@email.com")) : ("your@email.com"));
        // line 15
        $context["password_label"] = ((array_key_exists("password_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["password_label"] ?? null), "Password")) : ("Password"));
        // line 16
        $context["button_text"] = ((array_key_exists("button_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_text"] ?? null), "Sign In")) : ("Sign In"));
        // line 17
        $context["signup_text"] = ((array_key_exists("signup_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["signup_text"] ?? null), "Don't have an account?")) : ("Don't have an account?"));
        // line 18
        $context["signup_link_text"] = ((array_key_exists("signup_link_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["signup_link_text"] ?? null), "Get started")) : ("Get started"));
        // line 19
        $context["signup_url"] = ((array_key_exists("signup_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["signup_url"] ?? null), "/membership")) : ("/membership"));
        // line 20
        $context["form_action"] = ((array_key_exists("form_action", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_action"] ?? null), "/user/login")) : ("/user/login"));
        // line 21
        yield "
<div
  class=\"signin-modal\"
  role=\"dialog\"
  aria-modal=\"true\"
  aria-label=\"";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true);
        yield "\"
  aria-hidden=\"true\"
>
  ";
        // line 30
        yield "  <div class=\"signin-modal__backdrop\"></div>

  ";
        // line 33
        yield "  <div class=\"signin-modal__card\">
    ";
        // line 35
        yield "    <div class=\"signin-modal__header\">
      <h2 class=\"signin-modal__title\">";
        // line 36
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
      <p class=\"signin-modal__subtitle\">";
        // line 37
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "subtitle");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("subtitle", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "subtitle");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "subtitle");
            }
        }
        yield "</p>
    </div>

    ";
        // line 41
        yield "    <button
      type=\"button\"
      class=\"signin-modal__close\"
      aria-label=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
        yield "\"
    >
      <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
        <path d=\"M12 4L4 12\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        <path d=\"M4 4L12 12\" stroke=\"currentColor\" stroke-width=\"1.33\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
      </svg>
    </button>

    ";
        // line 53
        yield "    <form class=\"signin-modal__form\" action=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["form_action"] ?? null), "html", null, true);
        yield "\" method=\"post\">
      <div class=\"signin-modal__field\">
        <label class=\"signin-modal__label\" for=\"signin-email\">";
        // line 55
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("email_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "email_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "email_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["email_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("email_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "email_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "email_label");
            }
        }
        yield "</label>
        <input
          class=\"signin-modal__input\"
          type=\"email\"
          id=\"signin-email\"
          name=\"name\"
          placeholder=\"";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["email_placeholder"] ?? null), "html", null, true);
        yield "\"
          autocomplete=\"email\"
          required
        />
      </div>

      <div class=\"signin-modal__field\">
        <label class=\"signin-modal__label\" for=\"signin-password\">";
        // line 68
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("password_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "password_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "password_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["password_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("password_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "password_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "password_label");
            }
        }
        yield "</label>
        <input
          class=\"signin-modal__input\"
          type=\"password\"
          id=\"signin-password\"
          name=\"pass\"
          autocomplete=\"current-password\"
          required
        />
      </div>

      <input type=\"hidden\" name=\"form_id\" value=\"user_login_form\" />

      <button type=\"submit\" class=\"signin-modal__submit\">
        ";
        // line 82
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("button_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "button_text");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_text"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("button_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "button_text");
            }
        }
        yield "
      </button>

      <p class=\"signin-modal__signup\">
        ";
        // line 86
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("signup_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "signup_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "signup_text");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["signup_text"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("signup_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "signup_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "signup_text");
            }
        }
        yield "
        <a href=\"";
        // line 87
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["signup_url"] ?? null), "html", null, true);
        yield "\" class=\"signin-modal__signup-link\">";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("signup_link_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "signup_link_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "signup_link_text");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["signup_link_text"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("signup_link_text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "signup_link_text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "signup_link_text");
            }
        }
        yield "</a>
      </p>
    </form>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:sign-in-modal";
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
        return array (  254 => 87,  236 => 86,  215 => 82,  184 => 68,  174 => 61,  151 => 55,  145 => 53,  134 => 44,  129 => 41,  109 => 37,  91 => 36,  88 => 35,  85 => 33,  81 => 30,  75 => 26,  68 => 21,  66 => 20,  64 => 19,  62 => 18,  60 => 17,  58 => 16,  56 => 15,  54 => 14,  52 => 13,  50 => 12,  48 => 11,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:sign-in-modal", "themes/djfit/components/sign-in-modal/sign-in-modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11];
        static $filters = ["default" => 11, "escape" => 26, "t" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['default', 'escape', 't'],
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
