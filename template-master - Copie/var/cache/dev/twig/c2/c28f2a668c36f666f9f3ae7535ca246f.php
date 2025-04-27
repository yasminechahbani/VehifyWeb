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

/* basePermis.html.twig */
class __TwigTemplate_ed9426d00ecf4f342b6f5f4266dc859a extends Template
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
            'javascripts_head' => [$this, 'block_javascripts_head'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basePermis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basePermis.html.twig"));

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

    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 35
        yield "
    ";
        // line 36
        yield from $this->unwrap()->yieldBlock('javascripts_head', $context, $blocks);
        // line 39
        yield "</head>

<body>
    ";
        // line 42
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 179
        yield "
    ";
        // line 180
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 224
        yield "</body>
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

        yield "CarServ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 37
        yield "    <!-- Head JavaScript -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class=\"container-fluid bg-light p-0\">
        <div class=\"row gx-0 d-none d-lg-flex\">
            <div class=\"col-lg-7 px-5 text-start\">
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-map-marker-alt text-primary me-2\"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center py-3\">
                    <small class=\"far fa-clock text-primary me-2\"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class=\"col-lg-5 px-5 text-end\">
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-phone-alt text-primary me-2\"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center\">
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-0\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\"><i class=\"fa fa-car me-3\"></i>CarServ</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_permisAll");
        yield "\" class=\"nav-item nav-link\">License</a>
                <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_generate");
        yield "\" class=\"nav-item nav-link\">Quiz</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"booking.html\" class=\"dropdown-item\">Booking</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Technicians</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Get A Quote<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    ";
        // line 111
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 112
        yield "
    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Address</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Opening Hours</h4>
                    <h6 class=\"text-light\">Monday - Friday:</h6>
                    <p class=\"mb-4\">09.00 AM - 09.00 PM</p>
                    <h6 class=\"text-light\">Saturday - Sunday:</h6>
                    <p class=\"mb-0\">09.00 AM - 12.00 PM</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"\">Diagnostic Test</a>
                    <a class=\"btn btn-link\" href=\"\">Engine Servicing</a>
                    <a class=\"btn btn-link\" href=\"\">Tires Replacement</a>
                    <a class=\"btn btn-link\" href=\"\">Oil Changing</a>
                    <a class=\"btn btn-link\" href=\"\">Vacuam Cleaning</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                        <br>Distributed By: <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Home</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Help</a>
                            <a href=\"\">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 111
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

    // line 180
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

        // line 181
        yield "    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/permis-form.js"), "html", null, true);
        yield "\"></script>
    
    
    <!-- TTS Service Initialization -->
    <script>
        // Ensure TTS service is available globally
        window.ttsService = {
            init: function() {
                console.log('TTS Service initialized');
                if ('speechSynthesis' in window) {
                    return true;
                }
                console.warn('Speech synthesis not supported');
                return false;
            },
            speak: function(text) {
                if ('speechSynthesis' in window) {
                    const utterance = new SpeechSynthesisUtterance(text);
                    window.speechSynthesis.speak(utterance);
                }
            }
        };

        // Initialize TTS when window loads
        window.addEventListener('DOMContentLoaded', function() {
            window.ttsService.init();
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
        return "basePermis.html.twig";
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
        return array (  464 => 195,  460 => 194,  454 => 191,  450 => 190,  446 => 189,  442 => 188,  438 => 187,  434 => 186,  430 => 185,  426 => 184,  421 => 181,  408 => 180,  386 => 111,  309 => 112,  307 => 111,  285 => 92,  281 => 91,  277 => 90,  266 => 82,  225 => 43,  212 => 42,  200 => 37,  187 => 36,  174 => 33,  168 => 30,  162 => 27,  158 => 26,  154 => 25,  142 => 15,  129 => 14,  106 => 6,  94 => 224,  92 => 180,  89 => 179,  87 => 42,  82 => 39,  80 => 36,  77 => 35,  75 => 14,  70 => 12,  61 => 6,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CarServ{% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\">

    {% block css %}
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
    <link href=\"{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascripts_head %}
    <!-- Head JavaScript -->
    {% endblock %}
</head>

<body>
    {% block body %}
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class=\"container-fluid bg-light p-0\">
        <div class=\"row gx-0 d-none d-lg-flex\">
            <div class=\"col-lg-7 px-5 text-start\">
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-map-marker-alt text-primary me-2\"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center py-3\">
                    <small class=\"far fa-clock text-primary me-2\"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class=\"col-lg-5 px-5 text-end\">
                <div class=\"h-100 d-inline-flex align-items-center py-3 me-4\">
                    <small class=\"fa fa-phone-alt text-primary me-2\"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class=\"h-100 d-inline-flex align-items-center\">
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-sm-square bg-white text-primary me-0\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"{{ path('app_home') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <h2 class=\"m-0 text-primary\"><i class=\"fa fa-car me-3\"></i>CarServ</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"{{ path('app_about_permisAll') }}\" class=\"nav-item nav-link\">License</a>
                <a href=\"{{ path('app_quiz_generate') }}\" class=\"nav-item nav-link\">Quiz</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu fade-up m-0\">
                        <a href=\"booking.html\" class=\"dropdown-item\">Booking</a>
                        <a href=\"team.html\" class=\"dropdown-item\">Technicians</a>
                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Get A Quote<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    {% block content %}{% endblock %}

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Address</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Opening Hours</h4>
                    <h6 class=\"text-light\">Monday - Friday:</h6>
                    <p class=\"mb-4\">09.00 AM - 09.00 PM</p>
                    <h6 class=\"text-light\">Saturday - Sunday:</h6>
                    <p class=\"mb-0\">09.00 AM - 12.00 PM</p>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Services</h4>
                    <a class=\"btn btn-link\" href=\"\">Diagnostic Test</a>
                    <a class=\"btn btn-link\" href=\"\">Engine Servicing</a>
                    <a class=\"btn btn-link\" href=\"\">Tires Replacement</a>
                    <a class=\"btn btn-link\" href=\"\">Oil Changing</a>
                    <a class=\"btn btn-link\" href=\"\">Vacuam Cleaning</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-4\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                        <br>Distributed By: <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Home</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Help</a>
                            <a href=\"\">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    {% endblock %}

    {% block js %}
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/counterup/counterup.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script src=\"{{ asset('js/permis-form.js') }}\"></script>
    
    
    <!-- TTS Service Initialization -->
    <script>
        // Ensure TTS service is available globally
        window.ttsService = {
            init: function() {
                console.log('TTS Service initialized');
                if ('speechSynthesis' in window) {
                    return true;
                }
                console.warn('Speech synthesis not supported');
                return false;
            },
            speak: function(text) {
                if ('speechSynthesis' in window) {
                    const utterance = new SpeechSynthesisUtterance(text);
                    window.speechSynthesis.speak(utterance);
                }
            }
        };

        // Initialize TTS when window loads
        window.addEventListener('DOMContentLoaded', function() {
            window.ttsService.init();
        });
    </script>
    {% endblock %}
</body>
</html>", "basePermis.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\basePermis.html.twig");
    }
}
