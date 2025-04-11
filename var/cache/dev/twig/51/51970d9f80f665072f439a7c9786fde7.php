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

/* base.html.twig */
class __TwigTemplate_9bf9b6f93651fa3e1504cb3ae87c56c9 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar_items' => [$this, 'block_sidebar_items'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
            'page_header' => [$this, 'block_page_header'],
            'page_title' => [$this, 'block_page_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/kaiadmin/favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">

    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 179
        yield "</head>
<body>
<div class=\"wrapper\">

    <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
            <div class=\"logo-header\" data-background-color=\"dark\">
                <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Admin");
        yield "\" class=\"logo\">
                    <img src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/kaiadmin/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" height=\"60\">
            
                </a>
                <button class=\"btn btn-toggle toggle-sidebar d-lg-none\">
                    <i class=\"gg-menu-right\"></i>
                </button>
            </div>
        </div>

        <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
            <div class=\"sidebar-content\">
                <ul class=\"nav nav-secondary\">
                    <li class=\"nav-item ";
        // line 199
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 199, $this->source); })()), "request", [], "any", false, false, false, 199), "attributes", [], "any", false, false, false, 199), "get", ["_route"], "method", false, false, false, 199) == "app_Admin")) {
            yield "active";
        }
        yield "\">
                        <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Admin");
        yield "\">
                            <i class=\"fas fa-home\"></i>
                            <p>Dashboard</p>
                            <span class=\"badge bg-primary float-end\">New</span>
                        </a>
                    </li>

                    <!-- User Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fa fa-users\"></i></span>
                        <h4 class=\"text-section\">User Management</h4>
                    </li>

                    <li class=\"nav-item ";
        // line 213
        if (CoreExtension::inFilter("app_user", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "request", [], "any", false, false, false, 213), "attributes", [], "any", false, false, false, 213), "get", ["_route"], "method", false, false, false, 213))) {
            yield "active";
        }
        yield "\">
                        <a data-bs-toggle=\"collapse\" href=\"#userManagement\">
                            <i class=\"fas fa-user-cog\"></i>
                            <p>Users</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse ";
        // line 219
        if (CoreExtension::inFilter("app_user", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "request", [], "any", false, false, false, 219), "attributes", [], "any", false, false, false, 219), "get", ["_route"], "method", false, false, false, 219))) {
            yield "show";
        }
        yield "\" id=\"userManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"";
        // line 221
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "request", [], "any", false, false, false, 221), "attributes", [], "any", false, false, false, 221), "get", ["_route"], "method", false, false, false, 221) == "app_user_index")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                                        <span class=\"sub-item\">All Users</span>
                                        <span class=\"badge bg-info float-end\">42</span>
                                    </a>
                                </li>
                                <li class=\"";
        // line 227
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "request", [], "any", false, false, false, 227), "attributes", [], "any", false, false, false, 227), "get", ["_route"], "method", false, false, false, 227) == "app_user_new")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\">
                                        <span class=\"sub-item\">Add New User</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Additional Menu Items -->
                    ";
        // line 237
        yield from $this->unwrap()->yieldBlock('sidebar_items', $context, $blocks);
        // line 251
        yield "                </ul>
            </div>
        </div>
    </div>

    <div class=\"main-panel\">
        <!-- Header -->
        <div class=\"main-header\">
            <div class=\"main-header-logo\">
                <div class=\"logo-header\" data-background-color=\"dark\">
                    <button class=\"btn btn-toggle toggle-sidebar d-none d-lg-block\">
                        <i class=\"gg-menu-right\"></i>
                    </button>
                </div>
            </div>

            <nav class=\"navbar navbar-header navbar-expand-lg border-bottom\">
                <div class=\"container-fluid\">
                    <!-- Search Bar -->
    

                    <!-- Top Navigation -->
                    <ul class=\"navbar-nav topbar-nav ms-auto align-items-center\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bell\"></i>
                                <span class=\"notification-badge\">4</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end notification-dropdown p-0\">
                                <div class=\"dropdown-header\">
                                    <h6>Notifications</h6>
                                    <span class=\"badge bg-primary\">4 New</span>
                                </div>
                                <div class=\"dropdown-body\">
                                    <a href=\"#\" class=\"dropdown-item\">
                                        <div class=\"icon bg-info\">
                                            <i class=\"fas fa-user-plus\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>New user registered</p>
                                            <small>2 mins ago</small>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"dropdown-footer\">
                                    <a href=\"#\">View all notifications</a>
                                </div>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown ms-2\">
                            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <img src=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile.jpg"), "html", null, true);
        yield "\" alt=\"Profile\" class=\"rounded-circle\" width=\"35\">
                                <span class=\"ms-2 d-none d-lg-inline-block\">Admin User</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end profile-dropdown\">
                                <div class=\"dropdown-header\">
                                    <h6>Admin User</h6>
                                    <span>Administrator</span>
                                </div>
                                <a href=\"#\" class=\"dropdown-item\">
                                    <i class=\"fas fa-user me-2\"></i> Profile
                                </a>
                                <a href=\"#\" class=\"dropdown-item\">
                                    <i class=\"fas fa-cog me-2\"></i> Settings
                                </a>
                                <a href=\"#\" class=\"dropdown-item\">
                                    <i class=\"fas fa-envelope me-2\"></i> Messages
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"dropdown-item text-danger\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class=\"main-content\">
            ";
        // line 331
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 333
        yield "
            ";
        // line 334
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 350
        yield "        </div>

        <!-- Footer -->
        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <div class=\"copyright float-start\">
                    &copy; ";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Your Company. All rights reserved.
                </div>
                <div class=\"float-end\">
                    <span class=\"text-muted\">Version 1.0.0</span>
                </div>
            </div>
        </footer>
    </div>
</div>

";
        // line 366
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 425
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Admin Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "        <script src=\"";
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
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/kaiadmin.min.css"), "html", null, true);
        yield "\">

        <style>
            :root {
                --sidebar-width: 250px;
                --header-height: 60px;
                --transition-speed: 0.3s;
                --primary-color: #5e72e4;
                --secondary-color: #825ee4;
            }

            .bg-gradient-primary {
                background: linear-gradient(87deg, var(--primary-color) 0, var(--secondary-color) 100%);
            }

            .sidebar {
                background: linear-gradient(180deg, #2c2c2c 0%, #1a1a1a 100%);
            }

            .main-header {
                backdrop-filter: blur(10px);
                background: rgba(255, 255, 255, 0.95);
            }

            .notification-badge {
                position: absolute;
                top: 0;
                right: 0;
                padding: 0.25rem 0.5rem;
                font-size: 0.75rem;
                border-radius: 50%;
                background: #f5365c;
                color: white;
            }

            .nav-item a:hover {
                background: rgba(255, 255, 255, 0.1);
                transform: translateX(5px);
            }

            .dropdown-menu {
                animation: dropdownFade 0.3s ease;
            }

            @keyframes dropdownFade {
                from { opacity: 0; transform: translateY(-10px); }
                to { opacity: 1; transform: translateY(0); }
            }

            body {
                overflow-x: hidden;
                background-color: #f5f7fb;
            }

            /* Fixed Sidebar */
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: var(--sidebar-width);
                z-index: 1000;
                transition: all var(--transition-speed) ease;
                overflow-y: auto;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            }

            /* Main Panel Adjustment */
            .main-panel {
                margin-left: var(--sidebar-width);
                width: calc(100% - var(--sidebar-width));
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                transition: all var(--transition-speed) ease;
            }

            /* Header Styling */
            .main-header {
                position: sticky;
                top: 0;
                z-index: 999;
                background: #fff;
                box-shadow: 0 1px 15px rgba(0, 0, 0, 0.04);
                height: var(--header-height);
            }

            /* Content Area */
            .main-content {
                flex: 1;
                padding: 20px;
                margin-top: var(--header-height);
            }

            /* Footer Styling */
            .footer {
                background: #fff;
                padding: 15px;
                border-top: 1px solid #e9ecef;
            }

            /* Improved Navigation */
            .nav-item {
                margin-bottom: 5px;
            }

            .nav-item a {
                border-radius: 4px;
                transition: all 0.2s;
            }

            .nav-item.active a {
                background: rgba(255, 255, 255, 0.1);
                font-weight: 500;
            }

            /* Better Dropdowns */
            .dropdown-menu {
                border: none;
                box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            }

            /* Responsive Adjustments */
            @media (max-width: 991px) {
                .sidebar {
                    transform: translateX(-100%);
                }

                .sidebar.active {
                    transform: translateX(0);
                }

                .main-panel {
                    margin-left: 0;
                    width: 100%;
                }

                .main-panel.active {
                    margin-left: var(--sidebar-width);
                    width: calc(100% - var(--sidebar-width));
                }
            }
        </style>

        ";
        // line 177
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 178
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 177
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 237
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

        // line 238
        yield "                        <li class=\"nav-item ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "request", [], "any", false, false, false, 238), "attributes", [], "any", false, false, false, 238), "get", ["_route"], "method", false, false, false, 238) == "app_about")) {
            yield "active";
        }
        yield "\">
                            <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">
                                <i class=\"fas fa-info-circle\"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class=\"nav-item ";
        // line 244
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "request", [], "any", false, false, false, 244), "attributes", [], "any", false, false, false, 244), "get", ["_route"], "method", false, false, false, 244) == "app_services")) {
            yield "active";
        }
        yield "\">
                            <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">
                                <i class=\"fas fa-concierge-bell\"></i>
                                <p>Services</p>
                            </a>
                        </li>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 332
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 334
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

        // line 335
        yield "                <div class=\"container-fluid\">
                    <div class=\"page-inner\">
                        ";
        // line 337
        yield from $this->unwrap()->yieldBlock('page_header', $context, $blocks);
        // line 345
        yield "
                        ";
        // line 346
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 347
        yield "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 337
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_header"));

        // line 338
        yield "                            <div class=\"page-header\">
                                <h1 class=\"page-title\">";
        // line 339
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h1>
                                <div class=\"page-actions\">
                                    ";
        // line 341
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        // line 342
        yield "                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 339
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

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 341
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 346
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 366
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

        // line 367
        yield "    <!-- Core JS Files -->
    <script src=\"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Plugins -->
    <script src=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/datatables/datatables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Kaiadmin JS -->
    <script src=\"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/kaiadmin.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom JS -->
    <script>
        \$(document).ready(function() {
            // Initialize tooltips
            \$('[data-bs-toggle=\"tooltip\"]').tooltip();

            // Initialize popovers
            \$('[data-bs-toggle=\"popover\"]').popover();

            // Toggle sidebar
            \$('.toggle-sidebar').click(function() {
                \$('.sidebar').toggleClass('active');
                \$('.main-panel').toggleClass('active');
            });

            // Activate current menu item
            \$('.nav-item a').each(function() {
                if (\$(this).attr('href') === window.location.pathname) {
                    \$(this).parent().addClass('active');
                }
            });

            \$(document).click(function(e) {
                if (\$(window).width() < 992) {
                    if (!\$(e.target).closest('.sidebar, .toggle-sidebar').length) {
                        \$('.sidebar').removeClass('active');
                        \$('.main-panel').removeClass('active');
                    }
                }
            });

            // Perfect scrollbar for sidebar
            if (\$('.sidebar-wrapper').length) {
                const sidebarScrollbar = new PerfectScrollbar('.sidebar-wrapper');
            }

            // Auto collapse other dropdowns when one is opened
            \$('.nav-item .collapse').on('show.bs.collapse', function() {
                \$('.nav-item .collapse.show').not(this).collapse('hide');
            });
        });
    </script>

    ";
        // line 423
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  875 => 423,  827 => 378,  821 => 375,  817 => 374,  813 => 373,  809 => 372,  804 => 370,  800 => 369,  796 => 368,  793 => 367,  780 => 366,  758 => 346,  736 => 341,  713 => 339,  700 => 342,  698 => 341,  693 => 339,  690 => 338,  677 => 337,  664 => 347,  662 => 346,  659 => 345,  657 => 337,  653 => 335,  640 => 334,  629 => 332,  616 => 331,  599 => 245,  593 => 244,  585 => 239,  578 => 238,  565 => 237,  543 => 177,  532 => 178,  530 => 177,  383 => 33,  379 => 32,  375 => 31,  363 => 22,  348 => 11,  335 => 10,  312 => 7,  299 => 425,  297 => 366,  284 => 356,  276 => 350,  274 => 334,  271 => 333,  269 => 331,  256 => 321,  235 => 303,  181 => 251,  179 => 237,  167 => 228,  161 => 227,  153 => 222,  147 => 221,  140 => 219,  129 => 213,  113 => 200,  107 => 199,  92 => 187,  88 => 186,  79 => 179,  77 => 10,  72 => 8,  68 => 7,  60 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>{% block title %}Admin Dashboard{% endblock %}</title>
    <link rel=\"icon\" href=\"{{ asset('assets/img/kaiadmin/favicon.ico') }}\" type=\"image/x-icon\">

    {% block css %}
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
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/plugins.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/kaiadmin.min.css') }}\">

        <style>
            :root {
                --sidebar-width: 250px;
                --header-height: 60px;
                --transition-speed: 0.3s;
                --primary-color: #5e72e4;
                --secondary-color: #825ee4;
            }

            .bg-gradient-primary {
                background: linear-gradient(87deg, var(--primary-color) 0, var(--secondary-color) 100%);
            }

            .sidebar {
                background: linear-gradient(180deg, #2c2c2c 0%, #1a1a1a 100%);
            }

            .main-header {
                backdrop-filter: blur(10px);
                background: rgba(255, 255, 255, 0.95);
            }

            .notification-badge {
                position: absolute;
                top: 0;
                right: 0;
                padding: 0.25rem 0.5rem;
                font-size: 0.75rem;
                border-radius: 50%;
                background: #f5365c;
                color: white;
            }

            .nav-item a:hover {
                background: rgba(255, 255, 255, 0.1);
                transform: translateX(5px);
            }

            .dropdown-menu {
                animation: dropdownFade 0.3s ease;
            }

            @keyframes dropdownFade {
                from { opacity: 0; transform: translateY(-10px); }
                to { opacity: 1; transform: translateY(0); }
            }

            body {
                overflow-x: hidden;
                background-color: #f5f7fb;
            }

            /* Fixed Sidebar */
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: var(--sidebar-width);
                z-index: 1000;
                transition: all var(--transition-speed) ease;
                overflow-y: auto;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            }

            /* Main Panel Adjustment */
            .main-panel {
                margin-left: var(--sidebar-width);
                width: calc(100% - var(--sidebar-width));
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                transition: all var(--transition-speed) ease;
            }

            /* Header Styling */
            .main-header {
                position: sticky;
                top: 0;
                z-index: 999;
                background: #fff;
                box-shadow: 0 1px 15px rgba(0, 0, 0, 0.04);
                height: var(--header-height);
            }

            /* Content Area */
            .main-content {
                flex: 1;
                padding: 20px;
                margin-top: var(--header-height);
            }

            /* Footer Styling */
            .footer {
                background: #fff;
                padding: 15px;
                border-top: 1px solid #e9ecef;
            }

            /* Improved Navigation */
            .nav-item {
                margin-bottom: 5px;
            }

            .nav-item a {
                border-radius: 4px;
                transition: all 0.2s;
            }

            .nav-item.active a {
                background: rgba(255, 255, 255, 0.1);
                font-weight: 500;
            }

            /* Better Dropdowns */
            .dropdown-menu {
                border: none;
                box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            }

            /* Responsive Adjustments */
            @media (max-width: 991px) {
                .sidebar {
                    transform: translateX(-100%);
                }

                .sidebar.active {
                    transform: translateX(0);
                }

                .main-panel {
                    margin-left: 0;
                    width: 100%;
                }

                .main-panel.active {
                    margin-left: var(--sidebar-width);
                    width: calc(100% - var(--sidebar-width));
                }
            }
        </style>

        {% block stylesheets %}{% endblock %}
    {% endblock %}
</head>
<body>
<div class=\"wrapper\">

    <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
            <div class=\"logo-header\" data-background-color=\"dark\">
                <a href=\"{{ path('app_Admin') }}\" class=\"logo\">
                    <img src=\"{{ asset('assets/img/kaiadmin/logo.png') }}\" alt=\"Logo\" height=\"60\">
            
                </a>
                <button class=\"btn btn-toggle toggle-sidebar d-lg-none\">
                    <i class=\"gg-menu-right\"></i>
                </button>
            </div>
        </div>

        <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
            <div class=\"sidebar-content\">
                <ul class=\"nav nav-secondary\">
                    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'app_Admin' %}active{% endif %}\">
                        <a href=\"{{ path('app_Admin') }}\">
                            <i class=\"fas fa-home\"></i>
                            <p>Dashboard</p>
                            <span class=\"badge bg-primary float-end\">New</span>
                        </a>
                    </li>

                    <!-- User Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fa fa-users\"></i></span>
                        <h4 class=\"text-section\">User Management</h4>
                    </li>

                    <li class=\"nav-item {% if 'app_user' in app.request.attributes.get('_route') %}active{% endif %}\">
                        <a data-bs-toggle=\"collapse\" href=\"#userManagement\">
                            <i class=\"fas fa-user-cog\"></i>
                            <p>Users</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse {% if 'app_user' in app.request.attributes.get('_route') %}show{% endif %}\" id=\"userManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"{% if app.request.attributes.get('_route') == 'app_user_index' %}active{% endif %}\">
                                    <a href=\"{{ path('app_user_index') }}\">
                                        <span class=\"sub-item\">All Users</span>
                                        <span class=\"badge bg-info float-end\">42</span>
                                    </a>
                                </li>
                                <li class=\"{% if app.request.attributes.get('_route') == 'app_user_new' %}active{% endif %}\">
                                    <a href=\"{{ path('app_user_new') }}\">
                                        <span class=\"sub-item\">Add New User</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Additional Menu Items -->
                    {% block sidebar_items %}
                        <li class=\"nav-item {% if app.request.attributes.get('_route') == 'app_about' %}active{% endif %}\">
                            <a href=\"{{ path('app_about') }}\">
                                <i class=\"fas fa-info-circle\"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class=\"nav-item {% if app.request.attributes.get('_route') == 'app_services' %}active{% endif %}\">
                            <a href=\"{{ path('app_services') }}\">
                                <i class=\"fas fa-concierge-bell\"></i>
                                <p>Services</p>
                            </a>
                        </li>
                    {% endblock %}
                </ul>
            </div>
        </div>
    </div>

    <div class=\"main-panel\">
        <!-- Header -->
        <div class=\"main-header\">
            <div class=\"main-header-logo\">
                <div class=\"logo-header\" data-background-color=\"dark\">
                    <button class=\"btn btn-toggle toggle-sidebar d-none d-lg-block\">
                        <i class=\"gg-menu-right\"></i>
                    </button>
                </div>
            </div>

            <nav class=\"navbar navbar-header navbar-expand-lg border-bottom\">
                <div class=\"container-fluid\">
                    <!-- Search Bar -->
    

                    <!-- Top Navigation -->
                    <ul class=\"navbar-nav topbar-nav ms-auto align-items-center\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bell\"></i>
                                <span class=\"notification-badge\">4</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end notification-dropdown p-0\">
                                <div class=\"dropdown-header\">
                                    <h6>Notifications</h6>
                                    <span class=\"badge bg-primary\">4 New</span>
                                </div>
                                <div class=\"dropdown-body\">
                                    <a href=\"#\" class=\"dropdown-item\">
                                        <div class=\"icon bg-info\">
                                            <i class=\"fas fa-user-plus\"></i>
                                        </div>
                                        <div class=\"content\">
                                            <p>New user registered</p>
                                            <small>2 mins ago</small>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"dropdown-footer\">
                                    <a href=\"#\">View all notifications</a>
                                </div>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown ms-2\">
                            <a class=\"nav-link dropdown-toggle d-flex align-items-center\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\">
                                <img src=\"{{ asset('assets/img/profile.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\" width=\"35\">
                                <span class=\"ms-2 d-none d-lg-inline-block\">Admin User</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end profile-dropdown\">
                                <div class=\"dropdown-header\">
                                    <h6>Admin User</h6>
                                    <span>Administrator</span>
                                </div>
                                <a href=\"#\" class=\"dropdown-item\">
                                    <i class=\"fas fa-user me-2\"></i> Profile
                                </a>
                                <a href=\"#\" class=\"dropdown-item\">
                                    <i class=\"fas fa-cog me-2\"></i> Settings
                                </a>
                                <a href=\"#\" class=\"dropdown-item\">
                                    <i class=\"fas fa-envelope me-2\"></i> Messages
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{path('app_user_new')}}\" class=\"dropdown-item text-danger\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class=\"main-content\">
            {% block breadcrumb %}
            {% endblock %}

            {% block body %}
                <div class=\"container-fluid\">
                    <div class=\"page-inner\">
                        {% block page_header %}
                            <div class=\"page-header\">
                                <h1 class=\"page-title\">{% block page_title %}Dashboard{% endblock %}</h1>
                                <div class=\"page-actions\">
                                    {% block page_actions %}{% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block content %}{% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        <!-- Footer -->
        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <div class=\"copyright float-start\">
                    &copy; {{ \"now\"|date(\"Y\") }} Your Company. All rights reserved.
                </div>
                <div class=\"float-end\">
                    <span class=\"text-muted\">Version 1.0.0</span>
                </div>
            </div>
        </footer>
    </div>
</div>

{% block js %}
    <!-- Core JS Files -->
    <script src=\"{{ asset('assets/js/core/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
    <!-- Plugins -->
    <script src=\"{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/chart.js/chart.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/datatables/datatables.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}\"></script>

    <!-- Kaiadmin JS -->
    <script src=\"{{ asset('assets/js/kaiadmin.min.js') }}\"></script>

    <!-- Custom JS -->
    <script>
        \$(document).ready(function() {
            // Initialize tooltips
            \$('[data-bs-toggle=\"tooltip\"]').tooltip();

            // Initialize popovers
            \$('[data-bs-toggle=\"popover\"]').popover();

            // Toggle sidebar
            \$('.toggle-sidebar').click(function() {
                \$('.sidebar').toggleClass('active');
                \$('.main-panel').toggleClass('active');
            });

            // Activate current menu item
            \$('.nav-item a').each(function() {
                if (\$(this).attr('href') === window.location.pathname) {
                    \$(this).parent().addClass('active');
                }
            });

            \$(document).click(function(e) {
                if (\$(window).width() < 992) {
                    if (!\$(e.target).closest('.sidebar, .toggle-sidebar').length) {
                        \$('.sidebar').removeClass('active');
                        \$('.main-panel').removeClass('active');
                    }
                }
            });

            // Perfect scrollbar for sidebar
            if (\$('.sidebar-wrapper').length) {
                const sidebarScrollbar = new PerfectScrollbar('.sidebar-wrapper');
            }

            // Auto collapse other dropdowns when one is opened
            \$('.nav-item .collapse').on('show.bs.collapse', function() {
                \$('.nav-item .collapse.show').not(this).collapse('hide');
            });
        });
    </script>

    {% block javascripts %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\base.html.twig");
    }
}
