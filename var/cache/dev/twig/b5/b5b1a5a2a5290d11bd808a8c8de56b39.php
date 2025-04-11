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

/* services/services.html.twig */
class __TwigTemplate_c12b87f75c2f37a334ac9b52b9bb424a extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/services.html.twig"));

        // line 2
        $context["active_page"] = "services";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "services/services.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "


    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(img/carousel-bg-2.jpg);\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Services</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class=\"container-xxl service py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"text-primary text-uppercase\">// Our Services //</h6>
                <h1 class=\"mb-5\">Explore Our Services</h1>
            </div>
            <div class=\"row g-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"col-lg-4\">
                    <div class=\"nav w-100 nav-pills me-4\">
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-1\" type=\"button\">
                            <i class=\"fa fa-car-side fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Diagnostic Test</h4>
                        </button>
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-4\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-2\" type=\"button\">
                            <i class=\"fa fa-car fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Engine Servicing</h4>
                        </button>
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-4\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-3\" type=\"button\">
                            <i class=\"fa fa-cog fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Tires Replacement</h4>
                        </button>
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-0\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-4\" type=\"button\">
                            <i class=\"fa fa-oil-can fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Oil Changing</h4>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"tab-content w-100\">
                        <div class=\"tab-pane fade show active\" id=\"tab-pane-1\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-1.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-2\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-2.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-3\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-3.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-4\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-4.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class=\"container-fluid bg-secondary booking my-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-6 py-5\">
                    <div class=\"py-5\">
                        <h1 class=\"text-white mb-4\">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class=\"text-white mb-0\">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn\" data-wow-delay=\"0.6s\">
                        <h1 class=\"text-white mb-4\">Book For A Service</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select border-0\" style=\"height: 55px;\">
                                        <option selected>Select A Service</option>
                                        <option value=\"1\">Service 1</option>
                                        <option value=\"2\">Service 2</option>
                                        <option value=\"3\">Service 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date1\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control border-0 datetimepicker-input\"
                                            placeholder=\"Service Date\" data-target=\"#date1\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control border-0\" placeholder=\"Special Request\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-secondary w-100 py-3\" type=\"submit\">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h6 class=\"text-primary text-uppercase\">// Testimonial //</h6>
                <h1 class=\"mb-5\">Our Clients Say!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel position-relative\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-4.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->





    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>


    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/counterup/counterup.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment-timezone.min.js\"></script>
    <script src=\"lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
</body>

</html>
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
        return "services/services.html.twig";
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
        return array (  79 => 4,  66 => 3,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% set active_page = 'services' %}
{%block content %}



    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(img/carousel-bg-2.jpg);\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Services</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class=\"container-xxl service py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"text-primary text-uppercase\">// Our Services //</h6>
                <h1 class=\"mb-5\">Explore Our Services</h1>
            </div>
            <div class=\"row g-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"col-lg-4\">
                    <div class=\"nav w-100 nav-pills me-4\">
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-1\" type=\"button\">
                            <i class=\"fa fa-car-side fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Diagnostic Test</h4>
                        </button>
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-4\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-2\" type=\"button\">
                            <i class=\"fa fa-car fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Engine Servicing</h4>
                        </button>
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-4\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-3\" type=\"button\">
                            <i class=\"fa fa-cog fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Tires Replacement</h4>
                        </button>
                        <button class=\"nav-link w-100 d-flex align-items-center text-start p-4 mb-0\" data-bs-toggle=\"pill\" data-bs-target=\"#tab-pane-4\" type=\"button\">
                            <i class=\"fa fa-oil-can fa-2x me-3\"></i>
                            <h4 class=\"m-0\">Oil Changing</h4>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"tab-content w-100\">
                        <div class=\"tab-pane fade show active\" id=\"tab-pane-1\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-1.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-2\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-2.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-3\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-3.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-4\">
                            <div class=\"row g-4\">
                                <div class=\"col-md-6\" style=\"min-height: 350px;\">
                                    <div class=\"position-relative h-100\">
                                        <img class=\"position-absolute img-fluid w-100 h-100\" src=\"img/service-4.jpg\"
                                            style=\"object-fit: cover;\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h3 class=\"mb-3\">15 Years Of Experience In Auto Servicing</h3>
                                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Quality Servicing</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Expert Workers</p>
                                    <p><i class=\"fa fa-check text-success me-3\"></i>Modern Equipment</p>
                                    <a href=\"\" class=\"btn btn-primary py-3 px-5 mt-3\">Read More<i class=\"fa fa-arrow-right ms-3\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class=\"container-fluid bg-secondary booking my-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"row gx-5\">
                <div class=\"col-lg-6 py-5\">
                    <div class=\"py-5\">
                        <h1 class=\"text-white mb-4\">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class=\"text-white mb-0\">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn\" data-wow-delay=\"0.6s\">
                        <h1 class=\"text-white mb-4\">Book For A Service</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"text\" class=\"form-control border-0\" placeholder=\"Your Name\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email\" style=\"height: 55px;\">
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <select class=\"form-select border-0\" style=\"height: 55px;\">
                                        <option selected>Select A Service</option>
                                        <option value=\"1\">Service 1</option>
                                        <option value=\"2\">Service 2</option>
                                        <option value=\"3\">Service 3</option>
                                    </select>
                                </div>
                                <div class=\"col-12 col-sm-6\">
                                    <div class=\"date\" id=\"date1\" data-target-input=\"nearest\">
                                        <input type=\"text\"
                                            class=\"form-control border-0 datetimepicker-input\"
                                            placeholder=\"Service Date\" data-target=\"#date1\" data-toggle=\"datetimepicker\" style=\"height: 55px;\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <textarea class=\"form-control border-0\" placeholder=\"Special Request\"></textarea>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-secondary w-100 py-3\" type=\"submit\">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Testimonial Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"text-center\">
                <h6 class=\"text-primary text-uppercase\">// Testimonial //</h6>
                <h1 class=\"mb-5\">Our Clients Say!</h1>
            </div>
            <div class=\"owl-carousel testimonial-carousel position-relative\">
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-1.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-2.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-3.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class=\"testimonial-item text-center\">
                    <img class=\"bg-light rounded-circle p-2 mx-auto mb-3\" src=\"img/testimonial-4.jpg\" style=\"width: 80px; height: 80px;\">
                    <h5 class=\"mb-0\">Client Name</h5>
                    <p>Profession</p>
                    <div class=\"testimonial-text bg-light text-center p-4\">
                    <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->





    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>


    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/counterup/counterup.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment-timezone.min.js\"></script>
    <script src=\"lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
</body>

</html>
{%endblock%}", "services/services.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\services\\services.html.twig");
    }
}
