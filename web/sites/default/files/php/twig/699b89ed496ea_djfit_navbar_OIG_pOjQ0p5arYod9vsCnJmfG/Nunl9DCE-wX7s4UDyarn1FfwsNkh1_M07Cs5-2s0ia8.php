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

/* djfit:navbar */
class __TwigTemplate_2f36cb5d014498e6e09eb4168dbca412 extends Template
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
            'logo' => [$this, 'block_logo'],
            'navigation' => [$this, 'block_navigation'],
            'links' => [$this, 'block_links'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.djfit--navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "djfit:navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "djfit:navbar"));
        $context["dropdown_menu"] = Twig\Extra\Html\HtmlExtension::htmlCva(["navbar--dropdown-menu", "flex flex-col items-stretch justify-start gap-2 md:flex-row", "max-h-full", "overflow-auto md:overflow-visible"], ["menuAlign" => ["left" => "md:justify-start", "center" => "md:justify-center", "right" => "md:justify-end"]]);
        // line 13
        yield "
";
        // line 14
        $context["dropdown_menu_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["dropdown_menu"] ?? null), "apply", [["menuAlign" => ((        // line 16
array_key_exists("menu_align", $context)) ? (Twig\Extension\CoreExtension::default(($context["menu_align"] ?? null), "center")) : ("center"))]], "method", false, false, true, 15);
        // line 19
        yield "
<div class=\"navbar relative z-[500] container mx-auto flex justify-between p-2 px-4 md:py-4\">
  <div class=\"navbar--logo flex shrink-0 items-center self-center\">
    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
        // line 25
        yield "  </div>

  <div
    class=\"navbar--menu fixed inset-0 top-[calc(var(--drupal-displace-offset-top,0px)+var(--gin-toolbar-height,0px)-var(--navbar-scroll-top,0px))] grid shrink-1 grow-1 grid-cols-[1fr] grid-rows-[auto_1fr_auto] flex-col items-stretch justify-start bg-background pb-8 md:static md:flex md:h-auto md:flex-row md:items-center md:bg-transparent md:pb-0\"
  >
    <div
      class=\"navbar--modal-top relative z-[500] col-span-1 col-start-1 row-span-1 row-start-1 container mx-auto flex w-full justify-between p-2 md:hidden\"
    >
      <div class=\"navbar--modal-logo flex min-h-[44px] flex-1 shrink-0 items-center md:hidden\">
        ";
        // line 34
        yield from         $this->unwrap()->yieldBlock("logo", $context, $blocks);
        yield "
      </div>

      <button
        class=\"navbar--hide-menu flex h-[44px] w-[44px] flex-0 cursor-pointer items-center justify-center p-2 md:hidden\"
        aria-label=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide menu"));
        yield "\"
      >
        ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/components/icon/icon.twig", ["icon" => "x", "icon_size" => "medium"]));
        // line 49
        yield "
      </button>
    </div>

    <div
      class=\"navbar--dropdown-menu-wrapper relative col-span-1 col-start-1 row-span-1 row-start-2 container mx-auto min-h-0 w-full flex-1 p-2 px-4 after:pointer-events-none after:absolute after:bottom-0 after:z-3 after:h-24 after:w-full after:bg-linear-to-b after:from-transparent after:to-background after:content-[''] md:p-0 md:after:content-none\"
    >
      <div class=\"";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_menu_classes"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 57
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 60
        yield "      </div>
    </div>

    <div
      class=\"navbar--links col-span-1 col-start-1 row-span-1 row-start-3 ml-auto flex w-full flex-initial shrink-0 grow-0 flex-col items-center justify-end gap-2 md:w-auto md:flex-row\"
    >
      <a
        href=\"";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("cart_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["cart_url"] ?? null), "/cart")) : ("/cart")), "html", null, true);
        yield "\"
        class=\"navbar--cart-link relative flex h-[44px] w-[44px] items-center justify-center text-[var(--hg-color-header-accent)]\"
        aria-label=\"";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Shopping cart"));
        yield "\"
        data-cart-trigger
      >
        ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/components/icon/icon.twig", ["icon" => "shopping-cart", "icon_size" => "extra-small"], false));
        // line 81
        yield "
      </a>

      ";
        // line 84
        yield from $this->unwrap()->yieldBlock('links', $context, $blocks);
        // line 112
        yield "    </div>
  </div>

  <div class=\"navbar--hamburger-container flex min-h-[44px] min-w-[44px] shrink-0 grow-0 items-center justify-center md:hidden\">
    <button class=\"navbar--hamburger flex items-center justify-center\" aria-label=\"";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show menu"));
        yield "\">
      ";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/components/icon/icon.twig", ["icon" => "list", "icon_size" => "medium"]));
        // line 125
        yield "
    </button>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu_align", "cart_url"]);        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@djfit/templates/block/block--system-branding-block.html.twig"));
        yield "
    ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "
        ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "        <span data-signin-trigger>
          ";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:button", ["variant" => "secondary-inverted", "label" => t("Sign In"), "icon" => "user", "icon_first" => true, "size" => "medium"]));
        // line 97
        yield "
        </span>

        ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "djfit:button", ["variant" => "primary", "label" => t("Get Started"), "href" => "/membership", "size" => "medium"]));
        // line 110
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "djfit:navbar";
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
        return array (  205 => 110,  203 => 100,  198 => 97,  196 => 86,  193 => 85,  186 => 84,  180 => 58,  173 => 57,  165 => 23,  158 => 22,  148 => 125,  146 => 117,  142 => 116,  136 => 112,  134 => 84,  129 => 81,  127 => 72,  121 => 69,  116 => 67,  107 => 60,  105 => 57,  101 => 56,  92 => 49,  90 => 41,  85 => 39,  77 => 34,  66 => 25,  64 => 22,  59 => 19,  57 => 16,  56 => 15,  55 => 14,  52 => 13,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "djfit:navbar", "themes/djfit/components/navbar/navbar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 22];
        static $filters = ["default" => 16, "t" => 39, "escape" => 56];
        static $functions = ["html_cva" => 2, "include" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['default', 't', 'escape'],
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
