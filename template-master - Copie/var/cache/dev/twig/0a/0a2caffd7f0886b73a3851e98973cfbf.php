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

/* tables/tables.html.twig */
class __TwigTemplate_2b536239ceff9c556eb8d6966850c600 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables/tables.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables/tables.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tables/tables.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Tables - Kaiadmin Bootstrap 5 Admin Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo\">
                    <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\" alt=\"navbar brand\" class=\"navbar-brand\" height=\"20\" />
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
                    <li class=\"nav-item\">
                        <a data-bs-toggle=\"collapse\" href=\"#dashboard\" class=\"collapsed\" aria-expanded=\"false\">
                            <i class=\"fas fa-home\"></i>
                            <p>Dashboard</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse\" id=\"dashboard\">
                            <ul class=\"nav nav-collapse\">
                                <li>
                                    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">
                                        <span class=\"sub-item\">Dashboard 1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Autres éléments du menu... -->
                   
                    <!-- Reste du menu... -->
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "    <div class=\"container\">
        <div class=\"page-inner\">
            <div class=\"page-header\">
                <h3 class=\"fw-bold mb-3\">Tables</h3>
                <ul class=\"breadcrumbs mb-3\">
                    <li class=\"nav-home\">
                        <a href=\"#\">
                            <i class=\"icon-home\"></i>
                        </a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"icon-arrow-right\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\">Tables</a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"icon-arrow-right\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\">Basic Tables</a>
                    </li>
                </ul>
            </div>
            
            <!-- Contenu des tables... -->
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"card-title\">Basic Table</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-sub\">
                                This is the basic table view of the ready dashboard :
                            </div>
                            <table class=\"table mt-3\">
                                <!-- Contenu du tableau... -->
                            </table>
                        </div>
                    </div>
                    <!-- Autres cartes... -->
                </div>
                <div class=\"col-md-6\">
                    <!-- Cartes de droite... -->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
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

        // line 114
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/setting-demo2.js"), "html", null, true);
        yield "\"></script>
    <script>
        \$(\"#displayNotif\").on(\"click\", function () {
            var placementFrom = \$(\"#notify_placement_from option:selected\").val();
            var placementAlign = \$(\"#notify_placement_align option:selected\").val();
            var state = \$(\"#notify_state option:selected\").val();
            var style = \$(\"#notify_style option:selected\").val();
            var content = {};

            content.message = 'Turning standard Bootstrap alerts into \"notify\" like notifications';
            content.title = \"Bootstrap notify\";
            if (style == \"withicon\") {
                content.icon = \"fa fa-bell\";
            } else {
                content.icon = \"none\";
            }
            content.url = \"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\";
            content.target = \"_blank\";

            \$.notify(content, {
                type: state,
                placement: {
                    from: placementFrom,
                    align: placementAlign,
                },
                time: 1000,
            });
        });
    </script>
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
        return "tables/tables.html.twig";
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
        return array (  313 => 132,  294 => 116,  288 => 114,  275 => 113,  215 => 62,  202 => 61,  176 => 45,  145 => 17,  141 => 16,  135 => 12,  122 => 11,  109 => 8,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tables - Kaiadmin Bootstrap 5 Admin Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\" />
{% endblock %}

{% block sidebar %}
    <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
            <!-- Logo Header -->
            <div class=\"logo-header\" data-background-color=\"dark\">
                <a href=\"{{ path('app_home') }}\" class=\"logo\">
                    <img src=\"{{ asset('assets/img/kaiadmin/logo_light.svg') }}\" alt=\"navbar brand\" class=\"navbar-brand\" height=\"20\" />
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
                    <li class=\"nav-item\">
                        <a data-bs-toggle=\"collapse\" href=\"#dashboard\" class=\"collapsed\" aria-expanded=\"false\">
                            <i class=\"fas fa-home\"></i>
                            <p>Dashboard</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse\" id=\"dashboard\">
                            <ul class=\"nav nav-collapse\">
                                <li>
                                    <a href=\"{{ path('app_services') }}\">
                                        <span class=\"sub-item\">Dashboard 1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Autres éléments du menu... -->
                   
                    <!-- Reste du menu... -->
                </ul>
            </div>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"container\">
        <div class=\"page-inner\">
            <div class=\"page-header\">
                <h3 class=\"fw-bold mb-3\">Tables</h3>
                <ul class=\"breadcrumbs mb-3\">
                    <li class=\"nav-home\">
                        <a href=\"#\">
                            <i class=\"icon-home\"></i>
                        </a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"icon-arrow-right\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\">Tables</a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"icon-arrow-right\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\">Basic Tables</a>
                    </li>
                </ul>
            </div>
            
            <!-- Contenu des tables... -->
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"card-title\">Basic Table</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-sub\">
                                This is the basic table view of the ready dashboard :
                            </div>
                            <table class=\"table mt-3\">
                                <!-- Contenu du tableau... -->
                            </table>
                        </div>
                    </div>
                    <!-- Autres cartes... -->
                </div>
                <div class=\"col-md-6\">
                    <!-- Cartes de droite... -->
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src=\"{{ asset('assets/js/setting-demo2.js') }}\"></script>
    <script>
        \$(\"#displayNotif\").on(\"click\", function () {
            var placementFrom = \$(\"#notify_placement_from option:selected\").val();
            var placementAlign = \$(\"#notify_placement_align option:selected\").val();
            var state = \$(\"#notify_state option:selected\").val();
            var style = \$(\"#notify_style option:selected\").val();
            var content = {};

            content.message = 'Turning standard Bootstrap alerts into \"notify\" like notifications';
            content.title = \"Bootstrap notify\";
            if (style == \"withicon\") {
                content.icon = \"fa fa-bell\";
            } else {
                content.icon = \"none\";
            }
            content.url = \"{{ path('app_home') }}\";
            content.target = \"_blank\";

            \$.notify(content, {
                type: state,
                placement: {
                    from: placementFrom,
                    align: placementAlign,
                },
                time: 1000,
            });
        });
    </script>
{% endblock %}", "tables/tables.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\tables\\tables.html.twig");
    }
}
