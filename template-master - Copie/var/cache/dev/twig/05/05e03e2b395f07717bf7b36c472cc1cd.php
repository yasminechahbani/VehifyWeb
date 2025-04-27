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
class __TwigTemplate_0e570266832dc337afb4fdfbf2c4d223 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts/charts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts/charts.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Charts - Kaiadmin Bootstrap 5 Admin Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_items"));

        // line 73
        yield "              <!-- Contenu du menu sidebar -->
              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 84
        yield "        <div class=\"main-header\">
          <!-- Contenu de l'en-tête -->
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 105
        yield "              <!-- Contenu principal de la page -->
              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_template(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_template"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_template"));

        // line 144
        yield "      <!-- Custom template | don't include it in your project! -->
      <div class=\"custom-template\">
        <div class=\"title\">Settings</div>
        <div class=\"custom-content\">
          <!-- Contenu du template personnalisé -->
        </div>
      </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_chart_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart_js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart_js"));

        // line 174
        yield "        // Initialisation des graphiques
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  632 => 174,  619 => 173,  606 => 176,  604 => 173,  599 => 170,  586 => 169,  573 => 166,  568 => 164,  563 => 162,  558 => 160,  553 => 158,  549 => 157,  545 => 156,  542 => 155,  529 => 154,  511 => 144,  498 => 143,  477 => 131,  457 => 113,  444 => 112,  432 => 105,  419 => 104,  400 => 93,  387 => 92,  373 => 107,  371 => 104,  367 => 102,  365 => 92,  361 => 90,  348 => 89,  334 => 84,  321 => 83,  309 => 73,  296 => 72,  280 => 75,  278 => 72,  252 => 49,  247 => 47,  240 => 42,  227 => 41,  214 => 36,  208 => 33,  204 => 32,  200 => 31,  188 => 22,  174 => 11,  171 => 10,  158 => 9,  135 => 5,  119 => 179,  117 => 169,  114 => 168,  112 => 154,  108 => 152,  106 => 143,  102 => 141,  100 => 112,  97 => 111,  95 => 89,  92 => 88,  90 => 83,  86 => 81,  84 => 41,  79 => 38,  77 => 9,  72 => 7,  67 => 5,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>{% block title %}Charts - Kaiadmin Bootstrap 5 Admin Dashboard{% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\" />
    <link rel=\"icon\" href=\"{{ asset('assets/img/kaiadmin/favicon.ico') }}\" type=\"image/x-icon\"/>

    {% block css %}
    <!-- Fonts and icons -->
    <script src=\"{{ asset('assets/js/plugin/webfont/webfont.min.js') }}\"></script>
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
          urls: [\"{{ asset('assets/css/fonts.min.css') }}\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/plugins.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/kaiadmin.min.css') }}\" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\" />
    {% endblock %}
</head>
<body>
    <div class=\"wrapper\">
      {% block sidebar %}
      <!-- Sidebar -->
      <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
          <!-- Logo Header -->
          <div class=\"logo-header\" data-background-color=\"dark\">
            <a href=\"{{ path('app_home') }}\" class=\"logo\">
              <img
                src=\"{{ asset('assets/img/kaiadmin/logo_light.svg') }}\"
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
              {% block sidebar_items %}
              <!-- Contenu du menu sidebar -->
              {% endblock %}
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
      {% endblock %}

      <div class=\"main-panel\">
        {% block header %}
        <div class=\"main-header\">
          <!-- Contenu de l'en-tête -->
        </div>
        {% endblock %}

        {% block body %}
        <div class=\"container\">
          <div class=\"page-inner\">
            {% block page_title %}
            <h3 class=\"fw-bold mb-3\">Chart.js</h3>
            <div class=\"page-category\">
              Simple yet flexible JavaScript charting for designers &
              developers. Please checkout their
              <a href=\"http://www.chartjs.org/\" target=\"_blank\"
                >full documentation</a
              >.
            </div>
            {% endblock %}

            <div class=\"row\">
              {% block content %}
              <!-- Contenu principal de la page -->
              {% endblock %}
            </div>
          </div>
        </div>
        {% endblock %}

        {% block footer %}
        <footer class=\"footer\">
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
              {{ \"now\"|date(\"Y\") }}, made with <i class=\"fa fa-heart heart text-danger\"></i> by
              <a href=\"http://www.themekita.com\">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target=\"_blank\" href=\"https://themewagon.com/\">ThemeWagon</a>.
            </div>
          </div>
        </footer>
        {% endblock %}
      </div>

      {% block custom_template %}
      <!-- Custom template | don't include it in your project! -->
      <div class=\"custom-template\">
        <div class=\"title\">Settings</div>
        <div class=\"custom-content\">
          <!-- Contenu du template personnalisé -->
        </div>
      </div>
      {% endblock %}
    </div>

    {% block js %}
    <!--   Core JS Files   -->
    <script src=\"{{ asset('assets/js/core/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
    <!-- Chart JS -->
    <script src=\"{{ asset('assets/js/plugin/chart.js/chart.min.js') }}\"></script>
    <!-- jQuery Scrollbar -->
    <script src=\"{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}\"></script>
    <!-- Kaiadmin JS -->
    <script src=\"{{ asset('assets/js/kaiadmin.min.js') }}\"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src=\"{{ asset('assets/js/setting-demo2.js') }}\"></script>
    {% endblock %}

    {% block javascripts %}
    <script>
      // Code JavaScript spécifique à la page
      \$(document).ready(function() {
        {% block chart_js %}
        // Initialisation des graphiques
        {% endblock %}
      });
    </script>
    {% endblock %}
</body>
</html>



", "charts/charts.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\charts\\charts.html.twig");
    }
}
