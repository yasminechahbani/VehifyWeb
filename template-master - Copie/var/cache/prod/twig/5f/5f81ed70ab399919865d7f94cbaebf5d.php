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

/* charts/charts.html.twig */
class __TwigTemplate_637a18526becdca694733dd4fdc26144 extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'sidebar' => [$this, 'block_sidebar'],
            'sidebar_items' => [$this, 'block_sidebar_items'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'custom_template' => [$this, 'block_custom_template'],
            'js' => [$this, 'block_js'],
            'javascripts' => [$this, 'block_javascripts'],
            'chart_js' => [$this, 'block_chart_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\" />
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/kaiadmin/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\"/>

    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 38
        yield "</head>
<body>
    <div class=\"wrapper\">
      ";
        // line 41
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 81
        yield "
      <div class=\"main-panel\">
        ";
        // line 83
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 88
        yield "
        ";
        // line 89
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 111
        yield "
        ";
        // line 112
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 141
        yield "      </div>

      ";
        // line 143
        yield from $this->unwrap()->yieldBlock('custom_template', $context, $blocks);
        // line 152
        yield "    </div>

    ";
        // line 154
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 168
        yield "
    ";
        // line 169
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 179
        yield "</body>
</html>



";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Charts - Kaiadmin Bootstrap 5 Admin Dashboard";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <!-- Fonts and icons -->
    <script src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/webfont/webfont.min.js"), "html", null, true);
        yield "\"></script>
    <script>
      WebFont.load({
        google: { families: [\"Public Sans:300,400,500,600,700\"] },
        custom: {
          families: [
            \"Font Awesome 5 Solid\",
            \"Font Awesome 5 Regular\",
            \"Font Awesome 5 Brands\",
            \"simple-line-icons\",
          ],
          urls: [\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fonts.min.css"), "html", null, true);
        yield "\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/kaiadmin.min.css"), "html", null, true);
        yield "\" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\" />
    ";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "      <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
          <!-- Logo Header -->
          <div class=\"logo-header\" data-background-color=\"dark\">
            <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo\">
              <img
                src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
                alt=\"navbar brand\"
                class=\"navbar-brand\"
                height=\"20\"
              />
            </a>
            <div class=\"nav-toggle\">
              <button class=\"btn btn-toggle toggle-sidebar\">
                <i class=\"gg-menu-right\"></i>
              </button>
              <button class=\"btn btn-toggle sidenav-toggler\">
                <i class=\"gg-menu-left\"></i>
              </button>
            </div>
            <button class=\"topbar-toggler more\">
              <i class=\"gg-more-vertical-alt\"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
          <div class=\"sidebar-content\">
            <ul class=\"nav nav-secondary\">
              ";
        // line 72
        yield from $this->unwrap()->yieldBlock('sidebar_items', $context, $blocks);
        // line 75
        yield "            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
      ";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "              <!-- Contenu du menu sidebar -->
              ";
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 84
        yield "        <div class=\"main-header\">
          <!-- Contenu de l'en-tête -->
        </div>
        ";
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "        <div class=\"container\">
          <div class=\"page-inner\">
            ";
        // line 92
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        // line 102
        yield "
            <div class=\"row\">
              ";
        // line 104
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 107
        yield "            </div>
          </div>
        </div>
        ";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "            <h3 class=\"fw-bold mb-3\">Chart.js</h3>
            <div class=\"page-category\">
              Simple yet flexible JavaScript charting for designers &
              developers. Please checkout their
              <a href=\"http://www.chartjs.org/\" target=\"_blank\"
                >full documentation</a
              >.
            </div>
            ";
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "              <!-- Contenu principal de la page -->
              ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "        <footer class=\"footer\">
          <div class=\"container-fluid d-flex justify-content-between\">
            <nav class=\"pull-left\">
              <ul class=\"nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"http://www.themekita.com\">
                    ThemeKita
                  </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Help </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class=\"copyright\">
              ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ", made with <i class=\"fa fa-heart heart text-danger\"></i> by
              <a href=\"http://www.themekita.com\">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target=\"_blank\" href=\"https://themewagon.com/\">ThemeWagon</a>.
            </div>
          </div>
        </footer>
        ";
        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_template(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        yield "      <!-- Custom template | don't include it in your project! -->
      <div class=\"custom-template\">
        <div class=\"title\">Settings</div>
        <div class=\"custom-content\">
          <!-- Contenu du template personnalisé -->
        </div>
      </div>
      ";
        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 155
        yield "    <!--   Core JS Files   -->
    <script src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Chart JS -->
    <script src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery Scrollbar -->
    <script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Kaiadmin JS -->
    <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/kaiadmin.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/setting-demo2.js"), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        yield "    <script>
      // Code JavaScript spécifique à la page
      \$(document).ready(function() {
        ";
        // line 173
        yield from $this->unwrap()->yieldBlock('chart_js', $context, $blocks);
        // line 176
        yield "      });
    </script>
    ";
        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_chart_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 174
        yield "        // Initialisation des graphiques
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "charts/charts.html.twig";
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
        return array (  470 => 174,  463 => 173,  456 => 176,  454 => 173,  449 => 170,  442 => 169,  435 => 166,  430 => 164,  425 => 162,  420 => 160,  415 => 158,  411 => 157,  407 => 156,  404 => 155,  397 => 154,  385 => 144,  378 => 143,  363 => 131,  343 => 113,  336 => 112,  330 => 105,  323 => 104,  310 => 93,  303 => 92,  295 => 107,  293 => 104,  289 => 102,  287 => 92,  283 => 90,  276 => 89,  268 => 84,  261 => 83,  255 => 73,  248 => 72,  238 => 75,  236 => 72,  210 => 49,  205 => 47,  198 => 42,  191 => 41,  184 => 36,  178 => 33,  174 => 32,  170 => 31,  158 => 22,  144 => 11,  141 => 10,  134 => 9,  123 => 5,  113 => 179,  111 => 169,  108 => 168,  106 => 154,  102 => 152,  100 => 143,  96 => 141,  94 => 112,  91 => 111,  89 => 89,  86 => 88,  84 => 83,  80 => 81,  78 => 41,  73 => 38,  71 => 9,  66 => 7,  61 => 5,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "charts/charts.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\charts\\charts.html.twig");
    }
}
