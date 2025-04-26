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
class __TwigTemplate_cd7ab637085438591a80aafad3fca7da extends Template
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
        // line 187
        yield "</head>
<body>
<div class=\"wrapper\">

    <div class=\"sidebar\" data-background-color=\"dark\">
        <div class=\"sidebar-logo\">
            <div class=\"logo-header\" data-background-color=\"dark\">
                <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Admin");
        yield "\" class=\"logo\">
                    <img src=\"";
        // line 195
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
        // line 207
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "request", [], "any", false, false, false, 207), "attributes", [], "any", false, false, false, 207), "get", ["_route"], "method", false, false, false, 207) == "app_Admin")) {
            yield "active";
        }
        yield "\">
                        <a href=\"";
        // line 208
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
        // line 221
        if (CoreExtension::inFilter("app_user", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "request", [], "any", false, false, false, 221), "attributes", [], "any", false, false, false, 221), "get", ["_route"], "method", false, false, false, 221))) {
            yield "active";
        }
        yield "\">
                        <a data-bs-toggle=\"collapse\" href=\"#userManagement\">
                            <i class=\"fas fa-user-cog\"></i>
                            <p>Users</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse ";
        // line 227
        if (CoreExtension::inFilter("app_user", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "request", [], "any", false, false, false, 227), "attributes", [], "any", false, false, false, 227), "get", ["_route"], "method", false, false, false, 227))) {
            yield "show";
        }
        yield "\" id=\"userManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"";
        // line 229
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "attributes", [], "any", false, false, false, 229), "get", ["_route"], "method", false, false, false, 229) == "app_user_index")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                                        <span class=\"sub-item\">All Users</span>
                                        <span class=\"badge bg-info float-end\">42</span>
                                    </a>
                                </li>
                                <li class=\"";
        // line 235
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "attributes", [], "any", false, false, false, 235), "get", ["_route"], "method", false, false, false, 235) == "app_user_new")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\">
                                        <span class=\"sub-item\">Add New User</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fa fa-users\"></i></span>
                        <h4 class=\"text-section\">vehiculeManagement</h4>
                    </li>
                    <li class=\"nav-item ";
        // line 249
        if (CoreExtension::inFilter("app_vehicule", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "attributes", [], "any", false, false, false, 249), "get", ["_route"], "method", false, false, false, 249))) {
            yield "active";
        }
        yield "\">
                        <a data-bs-toggle=\"collapse\" href=\"#vehiculeManagement\">
                            <i class=\"fas fa-truck\"></i>
                            <p>Vehicles</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse ";
        // line 255
        if (CoreExtension::inFilter("app_vehicule", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 255, $this->source); })()), "request", [], "any", false, false, false, 255), "attributes", [], "any", false, false, false, 255), "get", ["_route"], "method", false, false, false, 255))) {
            yield "show";
        }
        yield "\" id=\"vehiculeManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"";
        // line 257
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "request", [], "any", false, false, false, 257), "attributes", [], "any", false, false, false, 257), "get", ["_route"], "method", false, false, false, 257) == "app_vehicule_index")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 258
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\">
                                        <span class=\"sub-item\">All Vehicles</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Employee Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fas fa-user-tie\"></i></span>
                        <h4 class=\"text-section\">Employee Management</h4>
                    </li>
                    <li class=\"nav-item ";
        // line 271
        if (CoreExtension::inFilter("app_employe_index", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "request", [], "any", false, false, false, 271), "attributes", [], "any", false, false, false, 271), "get", ["_route"], "method", false, false, false, 271))) {
            yield "active";
        }
        yield "\">
                        <a data-bs-toggle=\"collapse\" href=\"#employeManagement\">
                            <i class=\"fas fa-users\"></i>
                            <p>Employees</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse ";
        // line 277
        if (CoreExtension::inFilter("app_employe", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "attributes", [], "any", false, false, false, 277), "get", ["_route"], "method", false, false, false, 277))) {
            yield "show";
        }
        yield "\" id=\"employeManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"";
        // line 279
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "request", [], "any", false, false, false, 279), "attributes", [], "any", false, false, false, 279), "get", ["_route"], "method", false, false, false, 279) == "app_employe_index")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 280
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\">
                                        <span class=\"sub-item\">All Employees</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Equipment Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fas fa-tools\"></i></span>
                        <h4 class=\"text-section\">Equipment Management</h4>
                    </li>
                    <li class=\"nav-item ";
        // line 293
        if (CoreExtension::inFilter("app_equipement_index", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "attributes", [], "any", false, false, false, 293), "get", ["_route"], "method", false, false, false, 293))) {
            yield "active";
        }
        yield "\">
                        <a data-bs-toggle=\"collapse\" href=\"#equipementManagement\">
                            <i class=\"fas fa-toolbox\"></i>
                            <p>Equipment</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse ";
        // line 299
        if (CoreExtension::inFilter("app_equipement", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "request", [], "any", false, false, false, 299), "attributes", [], "any", false, false, false, 299), "get", ["_route"], "method", false, false, false, 299))) {
            yield "show";
        }
        yield "\" id=\"equipementManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"";
        // line 301
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "request", [], "any", false, false, false, 301), "attributes", [], "any", false, false, false, 301), "get", ["_route"], "method", false, false, false, 301) == "app_equipement_index")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_index");
        yield "\">
                                        <span class=\"sub-item\">All Equipment</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    

                    <!-- Service Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fa fa-cogs\"></i></span>
                        <h4 class=\"text-section\">Service Management</h4>
                    </li>

                    <li class=\"nav-item ";
        // line 320
        if (CoreExtension::inFilter("app_service", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "request", [], "any", false, false, false, 320), "attributes", [], "any", false, false, false, 320), "get", ["_route"], "method", false, false, false, 320))) {
            yield "active";
        }
        yield "\">
                        <a data-bs-toggle=\"collapse\" href=\"#serviceManagement\">
                            <i class=\"fas fa-handshake\"></i>
                            <p>Services</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse ";
        // line 326
        if (CoreExtension::inFilter("app_service", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 326, $this->source); })()), "request", [], "any", false, false, false, 326), "attributes", [], "any", false, false, false, 326), "get", ["_route"], "method", false, false, false, 326))) {
            yield "show";
        }
        yield "\" id=\"serviceManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"";
        // line 328
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "request", [], "any", false, false, false, 328), "attributes", [], "any", false, false, false, 328), "get", ["_route"], "method", false, false, false, 328) == "app_service_index")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 329
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_index");
        yield "\">
                                        <i class=\"fas fa-list-ul\"></i>
                                        <span class=\"sub-item\">All Services</span>
                                    </a>
                                </li>
                                <li class=\"";
        // line 334
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "request", [], "any", false, false, false, 334), "attributes", [], "any", false, false, false, 334), "get", ["_route"], "method", false, false, false, 334) == "app_service_new")) {
            yield "active";
        }
        yield "\">
                                    <a href=\"";
        // line 335
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_new");
        yield "\">
                                        <i class=\"fas fa-plus-circle\"></i>
                                        <span class=\"sub-item\">Add New Service</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Additional Menu Items -->
                    ";
        // line 345
        yield from $this->unwrap()->yieldBlock('sidebar_items', $context, $blocks);
        // line 354
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
        // line 406
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
        // line 424
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
            <style>
                .main-content {
                    flex: 1;
                    padding: 40px;
                    margin-top: calc(var(--header-height) + 20px);
                    display: flex;
                    flex-direction: column;
                    width: 100%;
                    max-width: 1800px;
                    margin-left: auto;
                    margin-right: auto;
                }

                .container-fluid {
                    width: 100%;
                    max-width: 1700px;
                    margin: 0 auto;
                    padding: 0 30px;
                }

                .page-inner {
                    background: white;
                    border-radius: 15px;
                    box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
                    padding: 35px;
                    width: 100%;
                }

                .page-header {
                    margin-bottom: 35px;
                    padding-bottom: 20px;
                    border-bottom: 2px solid #eee;
                }

                .page-title {
                    font-size: 2rem;
                    font-weight: 600;
                    margin: 0;
                    color: #2c2c2c;
                }

                .table {
                    font-size: 1.1rem;
                }

                .table th {
                    font-weight: 600;
                    padding: 1rem;
                }

                .table td {
                    padding: 1rem;
                }

                .btn {
                    padding: 0.6rem 1.2rem;
                    font-size: 1rem;
                }

                .card {
                    border-radius: 15px;
                    margin-bottom: 30px;
                    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
                }

                .card-header {
                    padding: 1.5rem;
                    border-bottom: 2px solid #eee;
                }

                .card-body {
                    padding: 1.5rem;
                }
            </style>
            ";
        // line 508
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 509
        yield "
            ";
        // line 510
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 526
        yield "        </div>

        <!-- Footer -->
        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <div class=\"copyright float-start\">
                    &copy; ";
        // line 532
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
        // line 542
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 601
        yield "</body>
</html>

<!-- Update the navbar structure -->
<nav class=\"navbar navbar-header navbar-expand-lg\">
    <div class=\"container-fluid px-0\">
        <div class=\"d-flex align-items-center\">
            <button class=\"btn btn-link text-dark d-lg-none me-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\">
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"search-bar d-none d-md-flex\">
                <input type=\"text\" class=\"form-control border-0 bg-light\" placeholder=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav topbar-nav ms-auto align-items-center\">
            <li class=\"nav-item dropdown\">
              
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

        </ul>
    </div>
</nav>
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
                position: fixed;
                top: 0;
                right: 0;
                left: var(--sidebar-width);
                height: var(--header-height);
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                z-index: 999;
                transition: all var(--transition-speed) ease;
            }

            .navbar-header {
                height: var(--header-height);
                padding: 0 1.5rem;
            }

            .topbar-nav .nav-link {
                padding: 0.5rem 1rem;
                position: relative;
                color: #555;
                transition: all 0.3s ease;
            }

            .topbar-nav .nav-link:hover {
                color: var(--primary-color);
            }

            .notification-badge {
                position: absolute;
                top: 0;
                right: 5px;
                min-width: 18px;
                height: 18px;
                padding: 0 5px;
                border-radius: 10px;
                background: #f5365c;
                color: white;
                font-size: 11px;
                line-height: 18px;
                text-align: center;
            }

            .profile-dropdown {
                min-width: 240px;
                padding: 0.5rem 0;
                margin-top: 0.5rem;
                box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
                border: none;
            }

            .profile-dropdown .dropdown-header {
                padding: 1rem;
                border-bottom: 1px solid #eee;
            }

            .profile-dropdown .dropdown-item {
                padding: 0.75rem 1.5rem;
                transition: all 0.2s;
            }

            .profile-dropdown .dropdown-item:hover {
                background: rgba(94, 114, 228, 0.1);
                color: var(--primary-color);
            }

            @media (max-width: 991px) {
                .main-header {
                    left: 0;
                }
            }
        </style>

        ";
        // line 185
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 186
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 185
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

    // line 345
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

        // line 346
        yield "                        <li class=\"nav-item ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 346, $this->source); })()), "request", [], "any", false, false, false, 346), "attributes", [], "any", false, false, false, 346), "get", ["_route"], "method", false, false, false, 346) == "app_about")) {
            yield "active";
        }
        yield "\">
                            <a href=\"";
        // line 347
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">
                                <i class=\"fas fa-info-circle\"></i>
                                <p>About</p>
                            </a>
                        </li>
                       
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 508
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 510
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

        // line 511
        yield "                <div class=\"container-fluid\">
                    <div class=\"page-inner\">
                        ";
        // line 513
        yield from $this->unwrap()->yieldBlock('page_header', $context, $blocks);
        // line 521
        yield "
                        ";
        // line 522
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 523
        yield "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 513
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

        // line 514
        yield "                            <div class=\"page-header\">
                                <h1 class=\"page-title\">";
        // line 515
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h1>
                                <div class=\"page-actions\">
                                    ";
        // line 517
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        // line 518
        yield "                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 515
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

    // line 517
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

    // line 522
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

    // line 542
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

        // line 543
        yield "    <!-- Core JS Files -->
    <script src=\"";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Plugins -->
    <script src=\"";
        // line 548
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/datatables/datatables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Kaiadmin JS -->
    <script src=\"";
        // line 554
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
        // line 599
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
        return array (  1163 => 599,  1115 => 554,  1109 => 551,  1105 => 550,  1101 => 549,  1097 => 548,  1092 => 546,  1088 => 545,  1084 => 544,  1081 => 543,  1068 => 542,  1046 => 522,  1024 => 517,  1001 => 515,  988 => 518,  986 => 517,  981 => 515,  978 => 514,  965 => 513,  952 => 523,  950 => 522,  947 => 521,  945 => 513,  941 => 511,  928 => 510,  906 => 508,  888 => 347,  881 => 346,  868 => 345,  846 => 185,  835 => 186,  833 => 185,  678 => 33,  674 => 32,  670 => 31,  658 => 22,  643 => 11,  630 => 10,  607 => 7,  553 => 601,  551 => 542,  538 => 532,  530 => 526,  528 => 510,  525 => 509,  523 => 508,  436 => 424,  415 => 406,  361 => 354,  359 => 345,  346 => 335,  340 => 334,  332 => 329,  326 => 328,  319 => 326,  308 => 320,  287 => 302,  281 => 301,  274 => 299,  263 => 293,  247 => 280,  241 => 279,  234 => 277,  223 => 271,  207 => 258,  201 => 257,  194 => 255,  183 => 249,  167 => 236,  161 => 235,  153 => 230,  147 => 229,  140 => 227,  129 => 221,  113 => 208,  107 => 207,  92 => 195,  88 => 194,  79 => 187,  77 => 10,  72 => 8,  68 => 7,  60 => 1,);
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
                position: fixed;
                top: 0;
                right: 0;
                left: var(--sidebar-width);
                height: var(--header-height);
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                z-index: 999;
                transition: all var(--transition-speed) ease;
            }

            .navbar-header {
                height: var(--header-height);
                padding: 0 1.5rem;
            }

            .topbar-nav .nav-link {
                padding: 0.5rem 1rem;
                position: relative;
                color: #555;
                transition: all 0.3s ease;
            }

            .topbar-nav .nav-link:hover {
                color: var(--primary-color);
            }

            .notification-badge {
                position: absolute;
                top: 0;
                right: 5px;
                min-width: 18px;
                height: 18px;
                padding: 0 5px;
                border-radius: 10px;
                background: #f5365c;
                color: white;
                font-size: 11px;
                line-height: 18px;
                text-align: center;
            }

            .profile-dropdown {
                min-width: 240px;
                padding: 0.5rem 0;
                margin-top: 0.5rem;
                box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
                border: none;
            }

            .profile-dropdown .dropdown-header {
                padding: 1rem;
                border-bottom: 1px solid #eee;
            }

            .profile-dropdown .dropdown-item {
                padding: 0.75rem 1.5rem;
                transition: all 0.2s;
            }

            .profile-dropdown .dropdown-item:hover {
                background: rgba(94, 114, 228, 0.1);
                color: var(--primary-color);
            }

            @media (max-width: 991px) {
                .main-header {
                    left: 0;
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


                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fa fa-users\"></i></span>
                        <h4 class=\"text-section\">vehiculeManagement</h4>
                    </li>
                    <li class=\"nav-item {% if 'app_vehicule' in app.request.attributes.get('_route') %}active{% endif %}\">
                        <a data-bs-toggle=\"collapse\" href=\"#vehiculeManagement\">
                            <i class=\"fas fa-truck\"></i>
                            <p>Vehicles</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse {% if 'app_vehicule' in app.request.attributes.get('_route') %}show{% endif %}\" id=\"vehiculeManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"{% if app.request.attributes.get('_route') == 'app_vehicule_index' %}active{% endif %}\">
                                    <a href=\"{{ path('app_liste') }}\">
                                        <span class=\"sub-item\">All Vehicles</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Employee Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fas fa-user-tie\"></i></span>
                        <h4 class=\"text-section\">Employee Management</h4>
                    </li>
                    <li class=\"nav-item {% if 'app_employe_index' in app.request.attributes.get('_route') %}active{% endif %}\">
                        <a data-bs-toggle=\"collapse\" href=\"#employeManagement\">
                            <i class=\"fas fa-users\"></i>
                            <p>Employees</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse {% if 'app_employe' in app.request.attributes.get('_route') %}show{% endif %}\" id=\"employeManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"{% if app.request.attributes.get('_route') == 'app_employe_index' %}active{% endif %}\">
                                    <a href=\"{{ path('app_employe_index') }}\">
                                        <span class=\"sub-item\">All Employees</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Equipment Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fas fa-tools\"></i></span>
                        <h4 class=\"text-section\">Equipment Management</h4>
                    </li>
                    <li class=\"nav-item {% if 'app_equipement_index' in app.request.attributes.get('_route') %}active{% endif %}\">
                        <a data-bs-toggle=\"collapse\" href=\"#equipementManagement\">
                            <i class=\"fas fa-toolbox\"></i>
                            <p>Equipment</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse {% if 'app_equipement' in app.request.attributes.get('_route') %}show{% endif %}\" id=\"equipementManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"{% if app.request.attributes.get('_route') == 'app_equipement_index' %}active{% endif %}\">
                                    <a href=\"{{ path('app_equipement_index') }}\">
                                        <span class=\"sub-item\">All Equipment</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    

                    <!-- Service Management Section -->
                    <li class=\"nav-section\">
                        <span class=\"sidebar-mini-icon\"><i class=\"fa fa-cogs\"></i></span>
                        <h4 class=\"text-section\">Service Management</h4>
                    </li>

                    <li class=\"nav-item {% if 'app_service' in app.request.attributes.get('_route') %}active{% endif %}\">
                        <a data-bs-toggle=\"collapse\" href=\"#serviceManagement\">
                            <i class=\"fas fa-handshake\"></i>
                            <p>Services</p>
                            <span class=\"caret\"></span>
                        </a>
                        <div class=\"collapse {% if 'app_service' in app.request.attributes.get('_route') %}show{% endif %}\" id=\"serviceManagement\">
                            <ul class=\"nav nav-collapse\">
                                <li class=\"{% if app.request.attributes.get('_route') == 'app_service_index' %}active{% endif %}\">
                                    <a href=\"{{path('app_serve_index')}}\">
                                        <i class=\"fas fa-list-ul\"></i>
                                        <span class=\"sub-item\">All Services</span>
                                    </a>
                                </li>
                                <li class=\"{% if app.request.attributes.get('_route') == 'app_service_new' %}active{% endif %}\">
                                    <a href=\"{{path('app_serve_new')}}\">
                                        <i class=\"fas fa-plus-circle\"></i>
                                        <span class=\"sub-item\">Add New Service</span>
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
            <style>
                .main-content {
                    flex: 1;
                    padding: 40px;
                    margin-top: calc(var(--header-height) + 20px);
                    display: flex;
                    flex-direction: column;
                    width: 100%;
                    max-width: 1800px;
                    margin-left: auto;
                    margin-right: auto;
                }

                .container-fluid {
                    width: 100%;
                    max-width: 1700px;
                    margin: 0 auto;
                    padding: 0 30px;
                }

                .page-inner {
                    background: white;
                    border-radius: 15px;
                    box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
                    padding: 35px;
                    width: 100%;
                }

                .page-header {
                    margin-bottom: 35px;
                    padding-bottom: 20px;
                    border-bottom: 2px solid #eee;
                }

                .page-title {
                    font-size: 2rem;
                    font-weight: 600;
                    margin: 0;
                    color: #2c2c2c;
                }

                .table {
                    font-size: 1.1rem;
                }

                .table th {
                    font-weight: 600;
                    padding: 1rem;
                }

                .table td {
                    padding: 1rem;
                }

                .btn {
                    padding: 0.6rem 1.2rem;
                    font-size: 1rem;
                }

                .card {
                    border-radius: 15px;
                    margin-bottom: 30px;
                    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
                }

                .card-header {
                    padding: 1.5rem;
                    border-bottom: 2px solid #eee;
                }

                .card-body {
                    padding: 1.5rem;
                }
            </style>
            {% block breadcrumb %}{% endblock %}

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

<!-- Update the navbar structure -->
<nav class=\"navbar navbar-header navbar-expand-lg\">
    <div class=\"container-fluid px-0\">
        <div class=\"d-flex align-items-center\">
            <button class=\"btn btn-link text-dark d-lg-none me-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\">
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"search-bar d-none d-md-flex\">
                <input type=\"text\" class=\"form-control border-0 bg-light\" placeholder=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav topbar-nav ms-auto align-items-center\">
            <li class=\"nav-item dropdown\">
              
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

        </ul>
    </div>
</nav>
", "base.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\base.html.twig");
    }
}
