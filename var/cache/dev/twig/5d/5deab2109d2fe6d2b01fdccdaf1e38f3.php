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

/* home/index.html.twig */
class __TwigTemplate_657583821cf8737d4bf26a597b51385e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseFhomePage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 2
        $context["active_page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "home/index.html.twig", 1);
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
";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "session", [], "any", false, false, false, 6), "get", ["just_logged_in"], "method", false, false, false, 6)) {
            // line 7
            yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'État du Permis',
                html: `
                    ";
            // line 12
            if ( !(null === (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 12, $this->source); })()))) {
                // line 13
                yield "                        <div class=\"text-left\">
                            <p><strong>Status:</strong> ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 14, $this->source); })()), "etat", [], "any", false, false, false, 14), "html", null, true);
                yield "</p>
                            ";
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 15, $this->source); })()), "dateExpiration", [], "any", false, false, false, 15)) {
                    // line 16
                    yield "                                <p><strong>Date d'expiration:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 16, $this->source); })()), "dateExpiration", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
                    yield "</p>
                            ";
                }
                // line 18
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 18, $this->source); })()), "etat", [], "any", false, false, false, 18) == "Expired")) {
                    // line 19
                    yield "                                <p class=\"text-danger\">Attention: Votre permis a expiré!</p>
                                ";
                    // line 20
                    if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 20, $this->source); })()), "isRenewal", [], "any", false, false, false, 20)) {
                        // line 21
                        yield "                                    <p>Vous pouvez demander un renouvellement.</p>
                                ";
                    }
                    // line 23
                    yield "                            ";
                }
                // line 24
                yield "                        </div>
                    ";
            } else {
                // line 26
                yield "                        <p>Aucun permis trouvé dans le système.</p>
                    ";
            }
            // line 28
            yield "                `,
                icon: ";
            // line 29
            if (( !(null === (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 29, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 29, $this->source); })()), "etat", [], "any", false, false, false, 29) == "Expired"))) {
                yield "'warning'";
            } else {
                yield "'info'";
            }
            yield ",
                confirmButtonText: 'Compris',
                confirmButtonColor: '#3085d6'
            });
        });
    </script>
    ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "set", ["just_logged_in", false], "method", false, false, false, 35), "html", null, true);
            yield "
";
        }
        // line 37
        yield "
";
        // line 39
        yield "<!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-5\">
        <div id=\"header-carousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"img/carousel-bg-1.jpg\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex align-items-center\">
                        <div class=\"container\">
                            <div class=\"row align-items-center justify-content-center justify-content-lg-start\">
                                <div class=\"col-10 col-lg-7 text-center text-lg-start\">
                                    <h1 class=\"text-white text-uppercase mb-3 animated slideInDown\">Vehify</h1>
                                    <h1 class=\"display-3 text-white mb-4 pb-3 animated slideInDown\">Centre de Visite automobile qualifié
                                    </h1>
                                </div>
                                <div class=\"col-lg-5 d-none d-lg-flex animated zoomIn\">
                                    <img class=\"img-fluid\" src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mg/carousel-1.png"), "html", null, true);
        yield "\" alt=\"\">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"d-flex py-5 px-4\">
                        <i class=\"fa fa-certificate fa-3x text-primary flex-shrink-0\"></i>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-3\">Quality Servicing</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"d-flex bg-light py-5 px-4\">
                        <i class=\"fa fa-users-cog fa-3x text-primary flex-shrink-0\"></i>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-3\">Expert Workers</h5>
                           
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"d-flex py-5 px-4\">
                        <i class=\"fa fa-tools fa-3x text-primary flex-shrink-0\"></i>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-3\">Modern Equipment</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    
                
                 


    <!-- Fact Start -->
    <div class=\"container-fluid fact bg-dark my-5 py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.1s\">
                    <i class=\"fa fa-check fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">1</h2>
                    <p class=\"text-white mb-0\">Years Experience</p>
                </div>
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.3s\">
                    <i class=\"fa fa-users-cog fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">100</h2>
                    <p class=\"text-white mb-0\">Expert Technicians</p>
                </div>
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.5s\">
                    <i class=\"fa fa-users fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">500</h2>
                    <p class=\"text-white mb-0\">Satisfied Clients</p>
                </div>
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.7s\">
                    <i class=\"fa fa-car fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">1000</h2>
                    <p class=\"text-white mb-0\">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


   

    

    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"text-primary text-uppercase\">// Our Technicians //</h6>
                <h1 class=\"mb-5\">Our Expert Technicians</h1>
            </div>
            <div class=\"row g-4\">
               
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-6/275756419_5167584203261800_940009227304410662_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=l788jp_UapkQ7kNvwFfbYvw&_nc_oc=AdnkRajbGUs7MLu5zlUTQVIuh3ku-Sob7Mc8roOwKf8-VS6IQcFUTZW2NuIxpu79kB0&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=NwKLlkbdfJHLZxcEoC341Q&oh=00_AfG_HM-qiyI3rPsUyAYzmLnFaqk9l3ZEZxMWiKCeV_uVLQ&oe=68150EA3\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/motez.selmi.20\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Motez Selmi</h5>
                           
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-1/462136134_524195523854568_7962770770086732357_n.jpg?stp=cp6_dst-jpg_s200x200_tt6&_nc_cat=103&ccb=1-7&_nc_sid=e99d92&_nc_ohc=WoWCU5VQh34Q7kNvwFSSFxe&_nc_oc=AdnORD28vUjZ6R1MqZtLwhUCAqaLE6VhWWCDkds42R9HKRIuxllMiIRK6rjLKPbE1jo&_nc_zt=24&_nc_ht=scontent.ftun16-1.fna&_nc_gid=3KsSgv_rbpBQxx_jmzao8Q&oh=00_AfHqjXRF8WWjf_CYUCeW1G6sU00OSqZtEXXUblyHkM4u0Q&oe=68151D8C\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/profile.php?id=100087923751706\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Emna Azouz</h5>
                           
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://media.licdn.com/dms/image/v2/D4D03AQGN44hqsYewPg/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1681998737951?e=1751500800&v=beta&t=BISKDww5DkpvMY2RqSQmbQ0Ezk9g83aZsYmYvOXX2JY\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/motez.selmi.20\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Yassmine Chahbani</h5>
                           
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-6/417464952_2433081033531613_4840677208914098734_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=rm-JrJ2SiIIQ7kNvwGPzMQU&_nc_oc=AdnsiYhIH9UasrS5IUtsVSg20eQRsfsO5SYXi36zQK1g7C9QbTk2F71ak7jb2OffUOU&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=1Ijg_qie0ho3XOdmYEAz4w&oh=00_AfEdddFKP4aFI3AsGSKDStyBXk34QXoZBWltwjCF-NQNaA&oe=68151583\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/achref.sehli.79\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Ashref Sehli</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-6/470680999_1905275629875911_1868304312599352670_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=pyzhVb8ivWAQ7kNvwFUjbbB&_nc_oc=Adn_cxjeihSI3J1R_f501faRWDj3QufhFK0exZlqtT2m_Y22fLngU4cx_UMYQfvpL6Q&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=6I759UbUy2VOalRxD2DbDg&oh=00_AfFYa0T9CO4PRKyOQB0xGdpyLj_KAA8BNbi2x9TIgRLqeQ&oe=68154031\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/karim.kebaili.184\"><i class=\"fab fa-facebook-f\"></i></a>
                                
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Mohamed Karim Kbaili</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t1.6435-9/190389836_1309315242799175_8135373750942921178_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_ohc=g5OHMX-hIJkQ7kNvwHpBrtv&_nc_oc=Adnzx9ym3U95HpZCahct6ujOqeckOwSsa9RA3o8w2jC2PxjgrJQ1bWT1zRWCNMYnjuw&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=3k0REt8RGwjLUDETA_QuMw&oh=00_AfHlX4ro92IWf1leKk-5MJ148rzO42yGwX23zaAwzi2OOg&oe=6836C0CC\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/chams02.bejaoui\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Chams Bejaoui</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


    
</div>


    <!-- Team End -->


    

";
        // line 268
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 271
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 268
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

        // line 269
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 271
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

        // line 272
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js\"></script>
    ";
        // line 273
        if ((isset($context["expiryMessage"]) || array_key_exists("expiryMessage", $context) ? $context["expiryMessage"] : (function () { throw new RuntimeError('Variable "expiryMessage" does not exist.', 273, $this->source); })())) {
            // line 274
            yield "        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'License Expired',
                    text: '";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expiryMessage"]) || array_key_exists("expiryMessage", $context) ? $context["expiryMessage"] : (function () { throw new RuntimeError('Variable "expiryMessage" does not exist.', 278, $this->source); })()), "html", null, true);
            yield "',
                    icon: 'warning',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
            });
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  453 => 278,  447 => 274,  445 => 273,  442 => 272,  429 => 271,  417 => 269,  404 => 268,  393 => 271,  391 => 268,  174 => 54,  157 => 39,  154 => 37,  149 => 35,  136 => 29,  133 => 28,  129 => 26,  125 => 24,  122 => 23,  118 => 21,  116 => 20,  113 => 19,  110 => 18,  104 => 16,  102 => 15,  98 => 14,  95 => 13,  93 => 12,  86 => 7,  84 => 6,  81 => 4,  68 => 3,  57 => 1,  55 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'home' %}
{%block content %}

{# Add this popup code right at the start of the content block #}
{% if app.session.get('just_logged_in') %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'État du Permis',
                html: `
                    {% if permis is not null %}
                        <div class=\"text-left\">
                            <p><strong>Status:</strong> {{ permis.etat }}</p>
                            {% if permis.dateExpiration %}
                                <p><strong>Date d'expiration:</strong> {{ permis.dateExpiration|date('d/m/Y') }}</p>
                            {% endif %}
                            {% if permis.etat == 'Expired' %}
                                <p class=\"text-danger\">Attention: Votre permis a expiré!</p>
                                {% if not permis.isRenewal %}
                                    <p>Vous pouvez demander un renouvellement.</p>
                                {% endif %}
                            {% endif %}
                        </div>
                    {% else %}
                        <p>Aucun permis trouvé dans le système.</p>
                    {% endif %}
                `,
                icon: {% if permis is not null and permis.etat == 'Expired' %}'warning'{% else %}'info'{% endif %},
                confirmButtonText: 'Compris',
                confirmButtonColor: '#3085d6'
            });
        });
    </script>
    {{ app.session.set('just_logged_in', false) }}
{% endif %}

{# Rest of your existing content #}
<!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-5\">
        <div id=\"header-carousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"w-100\" src=\"img/carousel-bg-1.jpg\" alt=\"Image\">
                    <div class=\"carousel-caption d-flex align-items-center\">
                        <div class=\"container\">
                            <div class=\"row align-items-center justify-content-center justify-content-lg-start\">
                                <div class=\"col-10 col-lg-7 text-center text-lg-start\">
                                    <h1 class=\"text-white text-uppercase mb-3 animated slideInDown\">Vehify</h1>
                                    <h1 class=\"display-3 text-white mb-4 pb-3 animated slideInDown\">Centre de Visite automobile qualifié
                                    </h1>
                                </div>
                                <div class=\"col-lg-5 d-none d-lg-flex animated zoomIn\">
                                    <img class=\"img-fluid\" src=\"{{ asset('mg/carousel-1.png') }}\" alt=\"\">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#header-carousel\"
                data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"d-flex py-5 px-4\">
                        <i class=\"fa fa-certificate fa-3x text-primary flex-shrink-0\"></i>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-3\">Quality Servicing</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"d-flex bg-light py-5 px-4\">
                        <i class=\"fa fa-users-cog fa-3x text-primary flex-shrink-0\"></i>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-3\">Expert Workers</h5>
                           
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"d-flex py-5 px-4\">
                        <i class=\"fa fa-tools fa-3x text-primary flex-shrink-0\"></i>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-3\">Modern Equipment</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    
                
                 


    <!-- Fact Start -->
    <div class=\"container-fluid fact bg-dark my-5 py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.1s\">
                    <i class=\"fa fa-check fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">1</h2>
                    <p class=\"text-white mb-0\">Years Experience</p>
                </div>
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.3s\">
                    <i class=\"fa fa-users-cog fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">100</h2>
                    <p class=\"text-white mb-0\">Expert Technicians</p>
                </div>
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.5s\">
                    <i class=\"fa fa-users fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">500</h2>
                    <p class=\"text-white mb-0\">Satisfied Clients</p>
                </div>
                <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.7s\">
                    <i class=\"fa fa-car fa-2x text-white mb-3\"></i>
                    <h2 class=\"text-white mb-2\" data-toggle=\"counter-up\">1000</h2>
                    <p class=\"text-white mb-0\">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


   

    

    <!-- Team Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"text-primary text-uppercase\">// Our Technicians //</h6>
                <h1 class=\"mb-5\">Our Expert Technicians</h1>
            </div>
            <div class=\"row g-4\">
               
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-6/275756419_5167584203261800_940009227304410662_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=l788jp_UapkQ7kNvwFfbYvw&_nc_oc=AdnkRajbGUs7MLu5zlUTQVIuh3ku-Sob7Mc8roOwKf8-VS6IQcFUTZW2NuIxpu79kB0&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=NwKLlkbdfJHLZxcEoC341Q&oh=00_AfG_HM-qiyI3rPsUyAYzmLnFaqk9l3ZEZxMWiKCeV_uVLQ&oe=68150EA3\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/motez.selmi.20\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Motez Selmi</h5>
                           
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-1/462136134_524195523854568_7962770770086732357_n.jpg?stp=cp6_dst-jpg_s200x200_tt6&_nc_cat=103&ccb=1-7&_nc_sid=e99d92&_nc_ohc=WoWCU5VQh34Q7kNvwFSSFxe&_nc_oc=AdnORD28vUjZ6R1MqZtLwhUCAqaLE6VhWWCDkds42R9HKRIuxllMiIRK6rjLKPbE1jo&_nc_zt=24&_nc_ht=scontent.ftun16-1.fna&_nc_gid=3KsSgv_rbpBQxx_jmzao8Q&oh=00_AfHqjXRF8WWjf_CYUCeW1G6sU00OSqZtEXXUblyHkM4u0Q&oe=68151D8C\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/profile.php?id=100087923751706\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Emna Azouz</h5>
                           
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://media.licdn.com/dms/image/v2/D4D03AQGN44hqsYewPg/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1681998737951?e=1751500800&v=beta&t=BISKDww5DkpvMY2RqSQmbQ0Ezk9g83aZsYmYvOXX2JY\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/motez.selmi.20\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Yassmine Chahbani</h5>
                           
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-6/417464952_2433081033531613_4840677208914098734_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=rm-JrJ2SiIIQ7kNvwGPzMQU&_nc_oc=AdnsiYhIH9UasrS5IUtsVSg20eQRsfsO5SYXi36zQK1g7C9QbTk2F71ak7jb2OffUOU&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=1Ijg_qie0ho3XOdmYEAz4w&oh=00_AfEdddFKP4aFI3AsGSKDStyBXk34QXoZBWltwjCF-NQNaA&oe=68151583\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/achref.sehli.79\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Ashref Sehli</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t39.30808-6/470680999_1905275629875911_1868304312599352670_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=pyzhVb8ivWAQ7kNvwFUjbbB&_nc_oc=Adn_cxjeihSI3J1R_f501faRWDj3QufhFK0exZlqtT2m_Y22fLngU4cx_UMYQfvpL6Q&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=6I759UbUy2VOalRxD2DbDg&oh=00_AfFYa0T9CO4PRKyOQB0xGdpyLj_KAA8BNbi2x9TIgRLqeQ&oe=68154031\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/karim.kebaili.184\"><i class=\"fab fa-facebook-f\"></i></a>
                                
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Mohamed Karim Kbaili</h5>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"team-item\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid\" src=\"https://scontent.ftun16-1.fna.fbcdn.net/v/t1.6435-9/190389836_1309315242799175_8135373750942921178_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_ohc=g5OHMX-hIJkQ7kNvwHpBrtv&_nc_oc=Adnzx9ym3U95HpZCahct6ujOqeckOwSsa9RA3o8w2jC2PxjgrJQ1bWT1zRWCNMYnjuw&_nc_zt=23&_nc_ht=scontent.ftun16-1.fna&_nc_gid=3k0REt8RGwjLUDETA_QuMw&oh=00_AfHlX4ro92IWf1leKk-5MJ148rzO42yGwX23zaAwzi2OOg&oe=6836C0CC\" alt=\"\">
                            <div class=\"team-overlay position-absolute start-0 top-0 w-100 h-100\">
                                <a class=\"btn btn-square mx-1\" href=\"https://www.facebook.com/chams02.bejaoui\"><i class=\"fab fa-facebook-f\"></i></a>
                               
                            </div>
                        </div>
                        <div class=\"bg-light text-center p-4\">
                            <h5 class=\"fw-bold mb-0\">Chams Bejaoui</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


    
</div>


    <!-- Team End -->


    

{%block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css\">
{% endblock %}
{%block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js\"></script>
    {% if expiryMessage %}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'License Expired',
                    text: '{{ expiryMessage }}',
                    icon: 'warning',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
            });
        </script>
    {% endif %}
{% endblock %}
{%endblock%}", "home/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\home\\index.html.twig");
    }
}
