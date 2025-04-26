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

/* baseFhomePage.html.twig */
class __TwigTemplate_a6b5d16d1a503b8eddb6031650e6738d extends Template
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
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFhomePage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFhomePage.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 35
        yield "</head>

<body>
    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\"><i class=\"fas fa-check-circle me-2 text-warning\"></i>Vehify</h2>        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link ";
        if ((((array_key_exists("active_page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["active_page"]) || array_key_exists("active_page", $context) ? $context["active_page"] : (function () { throw new RuntimeError('Variable "active_page" does not exist.', 46, $this->source); })()), "")) : ("")) == "home")) {
            yield "active";
        }
        yield "\">Home</a>

               
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Reservation</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serviceFClient");
        yield "\" class=\"dropdown-item\">Service Technique</a>
                        <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"dropdown-item\">liste Reservation</a>                    
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Quiz</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_generate");
        yield "\" class=\"dropdown-item\">Passer Quiz</a>
                        ";
        // line 60
        if (( !(null === (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 60, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 60, $this->source); })()), "etat", [], "any", false, false, false, 60) == "Expired"))) {
            // line 61
            yield "    ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 61, $this->source); })()), "isRenewal", [], "any", false, false, false, 61)) {
                // line 62
                yield "        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permis_request_renewal");
                yield "\" class=\"btn btn-warning\">
            Request Renewal
        </a>
    ";
            } else {
                // line 66
                yield "        <span class=\"badge bg-info\">Renewal Requested</span>
    ";
            }
        } else {
            // line 69
            yield "    <span class=\"text-muted\">No permis found.</span>
";
        }
        // line 71
        yield "

                    </div>
                </div>


                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Car center</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_index");
        yield "\" class=\"dropdown-item\">Ajouter Cart Grise</a>
                        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\" class=\"dropdown-item\">Ajouter Vehicule</a>                    
                    </div>
                </div>
                <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link ";
        if (((isset($context["active_page"]) || array_key_exists("active_page", $context) ? $context["active_page"] : (function () { throw new RuntimeError('Variable "active_page" does not exist.', 84, $this->source); })()) == "contact")) {
            yield "active";
        }
        yield "\">Contact</a>
            </div>



            </div>
        </div>

            <div class=\"dropdown me-4\">
                <a href=\"#\" class=\"dropdown-toggle d-flex align-items-center text-decoration-none\" id=\"dropdownUser\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "session", [], "any", false, false, false, 94), "get", ["image"], "method", false, false, false, 94)) {
            // line 95
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "session", [], "any", false, false, false, 95), "get", ["image"], "method", false, false, false, 95), "html", null, true);
            yield "\" alt=\"User\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
                    ";
        } else {
            // line 97
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user-profile.jpg"), "html", null, true);
            yield "\" alt=\"User\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
                    ";
        }
        // line 99
        yield "                    <span class=\"d-none d-lg-inline\">
                        ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "get", ["nom"], "method", false, false, false, 100) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "get", ["prenom"], "method", false, false, false, 100))) {
            // line 101
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "get", ["nom"], "method", false, false, false, 101), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "get", ["prenom"], "method", false, false, false, 101), "html", null, true);
            yield "
                        ";
        } else {
            // line 103
            yield "                            Mon Profil
                        ";
        }
        // line 105
        yield "                    </span>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"dropdownUser\">
                    <li><a class=\"dropdown-item\" href=\"\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "session", [], "any", false, false, false, 108), "get", ["email"], "method", false, false, false, 108), "html", null, true);
        yield "</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_editProfile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "session", [], "any", false, false, false, 109), "get", ["id"], "method", false, false, false, 109)]), "html", null, true);
        yield "\">Paramètres</a></li>
                    <li>
                        <a class=\"dropdown-item text-danger\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_logout");
        yield "\" onclick=\"return confirm('Êtes-vous sûr de vouloir vous déconnecter ?')\">
                            <i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion
                        </a>
                    </li>                </ul>
            </div>
        </div>
    </nav>
    ";
        // line 118
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 119
        yield "
    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Address</h4>
                    <p><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Opening Hours</h4>
                    <p>Monday - Friday: 09.00 AM - 09.00 PM</p>
                    <p>Saturday - Sunday: 09.00 AM - 12.00 PM</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"#\">Diagnostic Test</a>
                    <a class=\"btn btn-link\" href=\"#\">Engine Servicing</a>
                    <a class=\"btn btn-link\" href=\"#\">Tires Replacement</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Newsletter</h4>
                    <p>Subscribe to our newsletter for updates.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 165
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 168
        yield "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "CarServ - Car Repair";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 166
        yield "
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
        return "baseFhomePage.html.twig";
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
        return array (  428 => 166,  415 => 165,  393 => 118,  371 => 34,  348 => 6,  335 => 168,  333 => 165,  328 => 163,  324 => 162,  320 => 161,  316 => 160,  273 => 119,  271 => 118,  261 => 111,  256 => 109,  252 => 108,  247 => 105,  243 => 103,  235 => 101,  233 => 100,  230 => 99,  224 => 97,  218 => 95,  216 => 94,  199 => 84,  193 => 81,  189 => 80,  178 => 71,  174 => 69,  169 => 66,  161 => 62,  158 => 61,  156 => 60,  152 => 59,  143 => 53,  139 => 52,  126 => 46,  117 => 40,  110 => 35,  108 => 34,  103 => 32,  97 => 29,  91 => 26,  87 => 25,  83 => 24,  68 => 12,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CarServ - Car Repair{% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    {% block css %}{% endblock %}
</head>

<body>
    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"{{ path('app_home') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\"><i class=\"fas fa-check-circle me-2 text-warning\"></i>Vehify</h2>        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
            <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link {% if active_page|default('') == 'home' %}active{% endif %}\">Home</a>

               
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Reservation</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"{{path('app_serviceFClient')}}\" class=\"dropdown-item\">Service Technique</a>
                        <a href=\"{{path('app_reservation_index')}}\" class=\"dropdown-item\">liste Reservation</a>                    
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Quiz</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"{{path('app_quiz_generate')}}\" class=\"dropdown-item\">Passer Quiz</a>
                        {% if permis is not null and permis.etat=='Expired' %}
    {% if not permis.isRenewal %}
        <a href=\"{{ path('permis_request_renewal') }}\" class=\"btn btn-warning\">
            Request Renewal
        </a>
    {% else %}
        <span class=\"badge bg-info\">Renewal Requested</span>
    {% endif %}
{% else %}
    <span class=\"text-muted\">No permis found.</span>
{% endif %}


                    </div>
                </div>


                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Car center</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"{{path('app_carte_grise_index')}}\" class=\"dropdown-item\">Ajouter Cart Grise</a>
                        <a href=\"{{path('app_vehicule_index')}}\" class=\"dropdown-item\">Ajouter Vehicule</a>                    
                    </div>
                </div>
                <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link {% if active_page == 'contact' %}active{% endif %}\">Contact</a>
            </div>



            </div>
        </div>

            <div class=\"dropdown me-4\">
                <a href=\"#\" class=\"dropdown-toggle d-flex align-items-center text-decoration-none\" id=\"dropdownUser\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {% if app.session.get('image') %}
                        <img src=\"{{ app.session.get('image') }}\" alt=\"User\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
                    {% else %}
                        <img src=\"{{ asset('img/user-profile.jpg') }}\" alt=\"User\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
                    {% endif %}
                    <span class=\"d-none d-lg-inline\">
                        {% if app.session.get('nom') and app.session.get('prenom') %}
                            {{ app.session.get('nom') }} {{ app.session.get('prenom') }}
                        {% else %}
                            Mon Profil
                        {% endif %}
                    </span>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"dropdownUser\">
                    <li><a class=\"dropdown-item\" href=\"\">{{ app.session.get('email') }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_user_editProfile', {'id': app.session.get('id')}) }}\">Paramètres</a></li>
                    <li>
                        <a class=\"dropdown-item text-danger\" href=\"{{path('app_user_logout')}}\" onclick=\"return confirm('Êtes-vous sûr de vouloir vous déconnecter ?')\">
                            <i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion
                        </a>
                    </li>                </ul>
            </div>
        </div>
    </nav>
    {% block content %}{% endblock %}

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Address</h4>
                    <p><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Opening Hours</h4>
                    <p>Monday - Friday: 09.00 AM - 09.00 PM</p>
                    <p>Saturday - Sunday: 09.00 AM - 12.00 PM</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"#\">Diagnostic Test</a>
                    <a class=\"btn btn-link\" href=\"#\">Engine Servicing</a>
                    <a class=\"btn btn-link\" href=\"#\">Tires Replacement</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Newsletter</h4>
                    <p>Subscribe to our newsletter for updates.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>

    {% block scripts %}

   {% endblock %}

</body>
</html>", "baseFhomePage.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\baseFhomePage.html.twig");
    }
}
