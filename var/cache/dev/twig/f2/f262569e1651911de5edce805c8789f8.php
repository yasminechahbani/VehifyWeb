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

/* client aff/services.html.twig */
class __TwigTemplate_8567e1ab52fb07d8d20a20ebba254857 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client aff/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client aff/services.html.twig"));

        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "client aff/services.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .reservation-btn {
            background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "
<div class=\"container mt-5\">
    <div class=\"text-center mb-4\">
       
    <!-- Add this after your h1 title -->
    <div class=\"text-center mb-4\">
        <h1 class=\"text-center mb-4 animate__animated animate__fadeInDown\">Nos Services</h1>
       
        <!-- Add search box and button -->
        <!-- Modify the search input and add an ID -->
        <div class=\"search-container mb-4\">
            <div class=\"input-group justify-content-center\">
                <input type=\"text\"
                       id=\"searchInput\"
                       class=\"form-control search-input\"
                       placeholder=\"Rechercher un service...\"
                       style=\"max-width: 400px;
                              border-radius: 25px 0 0 25px;
                              padding: 12px 25px;
                              border: 2px solid #e9ecef;
                              box-shadow: 0 4px 15px rgba(0,0,0,0.05);\">
                <button class=\"btn btn-primary search-btn\"
                        style=\"border-radius: 0 25px 25px 0;
                               background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
                               border: none;
                               padding: 12px 25px;
                               box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);\">
                    <i class=\"fas fa-search me-2\"></i>
                    Rechercher
                </button>
            </div>
        </div>
       
        <!-- Add this JavaScript code in your javascripts block -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const servicesContainer = document.getElementById('servicesContainer');
            const serviceCards = document.querySelectorAll('.service-card');

            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
               
                serviceCards.forEach(card => {
                    const serviceName = card.querySelector('.card-title').textContent.toLowerCase();
                    const serviceDesc = card.querySelector('.card-text').textContent.toLowerCase();
                    const serviceLocation = card.querySelector('.location-info').textContent.toLowerCase();
                    const serviceContact = card.querySelector('.contact-info').textContent.toLowerCase();
                   
                    const matches = serviceName.includes(searchTerm) ||
                                  serviceDesc.includes(searchTerm) ||
                                  serviceLocation.includes(searchTerm) ||
                                  serviceContact.includes(searchTerm);

                    // Add/remove animation classes
                    if (matches) {
                        card.style.display = '';
                        card.classList.add('animate__animated', 'animate__fadeIn');
                    } else {
                        card.style.display = 'none';
                        card.classList.remove('animate__animated', 'animate__fadeIn');
                    }
                });
            });
        });
        </script>
   
    <!-- Sort buttons -->
    <div class=\"text-center mb-4\">
    <button id=\"sortByDistance\" class=\"btn btn-primary search-btn\"
            style=\"border-radius: 25px;
                   background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
                   border: none;
                   padding: 12px 25px;
                   box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);\">
       
        Tri par distance
    </button>
    </div>
   
    <!-- Add animation CSS -->
    <style>
        @import 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css';

        .service-card {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.6s ease;
        }

        .service-card.visible {
            transform: translateY(0);
            opacity: 1;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }

        .service-header {
            background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
            color: white;
            padding: 20px;
            border-radius: 15px 15px 0 0;
            position: relative;
            overflow: hidden;
        }

        .service-header::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: rgba(255,255,255,0.1);
            transform: rotate(45deg);
            top: -50%;
            left: -50%;
            transition: all 0.6s ease;
        }

        .card:hover .service-header::before {
            transform: rotate(45deg) translate(50%, 50%);
        }

        .price-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255,255,255,0.2);
            padding: 8px 15px;
            border-radius: 20px;
            backdrop-filter: blur(5px);
            font-weight: bold;
        }

        .info-box {
            padding: 15px;
            margin: 10px;
            border-radius: 10px;
            background: rgba(99, 102, 241, 0.05);
            transition: all 0.3s ease;
        }

        .info-box:hover {
            background: rgba(99, 102, 241, 0.1);
            transform: scale(1.02);
        }

        .qr-section {
            padding: 20px;
            border-top: 1px solid rgba(0,0,0,0.1);
            background: linear-gradient(to bottom, transparent, rgba(99, 102, 241, 0.05));
        }

        .qr-section img {
            transition: all 0.3s ease;
            border-radius: 10px;
        }

        .qr-section img:hover {
            transform: scale(1.1);
        }

        /* Enhanced button animations */
        .sort-btn {
            background-size: 200% auto;
            transition: all 0.5s ease;
        }

        .sort-btn:hover {
            background-position: right center;
        }

        .price-btn {
            background: linear-gradient(45deg, #10b981, #059669, #10b981);
        }

        .distance-btn {
            background-image: linear-gradient(45deg, #4f46e5, #6366f1, #4f46e5);
        }
    </style>

    <!-- Add intersection observer for scroll animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.service-card').forEach(card => {
                observer.observe(card);
            });

            // Add hover effect for service cards
            document.querySelectorAll('.card').forEach(card => {
                card.addEventListener('mouseenter', function(e) {
                    this.style.transform = `translateY(-10px) rotate(\${Math.random() * 2 - 1}deg)`;
                });
               
                card.addEventListener('mouseleave', function(e) {
                    this.style.transform = 'translateY(0) rotate(0deg)';
                });
            });
        });
    </script>

    <!-- Sort buttons -->
    <!-- Add this in the Sort buttons div -->
   
   
    <!-- Add this JavaScript code in your javascripts block -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click event for distance sorting
            document.getElementById('sortByDistance').addEventListener('click', function() {
                if (navigator.geolocation) {
                    this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Localisation...';
                    this.disabled = true;

                    navigator.geolocation.getCurrentPosition(
                        function(position) {
                            sortByDistance(position.coords.latitude, position.coords.longitude);
                            const btn = document.getElementById('sortByDistance');
                            btn.innerHTML = '<i class=\"fas fa-map-marker-alt me-2\"></i>Trier par distance';
                            btn.disabled = false;
                        },
                        function(error) {
                            alert(\"Erreur de géolocalisation. Veuillez l'activer dans votre navigateur.\");
                            const btn = document.getElementById('sortByDistance');
                            btn.innerHTML = '<i class=\"fas fa-map-marker-alt me-2\"></i>Trier par distance';
                            btn.disabled = false;
                        }
                    );
                } else {
                    alert(\"Votre navigateur ne supporte pas la géolocalisation\");
                }
            });
        });

        function sortByDistance(userLat, userLng) {
            const container = document.getElementById('servicesContainer');
            const cards = Array.from(container.getElementsByClassName('service-card'));
           
            // Sort cards by distance without displaying it
            cards.sort((a, b) => {
                const distA = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(a.dataset.lat),
                    parseFloat(a.dataset.lng)
                );
                const distB = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(b.dataset.lat),
                    parseFloat(b.dataset.lng)
                );
                return distA - distB;
            });
           
            // Reappend cards in sorted order with animation
            cards.forEach((card, index) => {
                setTimeout(() => {
                    container.appendChild(card);
                    card.classList.add('animate__animated', 'animate__fadeIn');
                }, index * 100);
            });
        }

        function calculateDistance(lat1, lon1, lat2, lon2) {
            const R = 6371; // Earth's radius in km
            const dLat = (lat2 - lat1) * Math.PI / 180;
            const dLon = (lon2 - lon1) * Math.PI / 180;
            const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                     Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                     Math.sin(dLon/2) * Math.sin(dLon/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            return R * c;
        }
    </script>

    <!-- Remove the distance-tag style block completely -->
   
    <div class=\"row\" id=\"servicesContainer\">
        ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 316, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 317
            yield "            <div class=\"col-md-4 mb-4 service-card\"
                data-price=\"";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prix", [], "any", false, false, false, 318), "html", null, true);
            yield "\"
                data-lat=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "latitude", [], "any", false, false, false, 319), "html", null, true);
            yield "\"
                data-lng=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "longitude", [], "any", false, false, false, 320), "html", null, true);
            yield "\"
                onclick=\"showServiceDetails('";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 321), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "gouvernerat", [], "any", false, false, false, 321), "html", null, true);
            yield "')\">
                <div class=\"card\">
                    <div class=\"service-header\">
                        <h5 class=\"card-title mb-2\">";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 324), "html", null, true);
            yield "</h5>
                        <div class=\"price-tag\">";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prix", [], "any", false, false, false, 325), "html", null, true);
            yield "DT</div>
                    </div>
                   
                    <div class=\"service-info\">
                        <div class=\"info-box\">
                            <p class=\"card-text\">";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 330), "html", null, true);
            yield "</p>
                        </div>
                       
                        <div class=\"info-box hours-info\">
                            <strong>Heures d'ouverture</strong>
                            <p class=\"mb-0\">";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "heureOuverture", [], "any", false, false, false, 335), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "heureFermeture", [], "any", false, false, false, 335), "html", null, true);
            yield "</p>
                        </div>

                        <div class=\"info-box location-info\">
                            <strong>Localisation</strong>
                            <p class=\"mb-0\">";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "gouvernerat", [], "any", false, false, false, 340), "html", null, true);
            yield "</p>
                            <p class=\"mb-0\">";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 341), "html", null, true);
            yield "</p>
                        </div>

                        <div class=\"info-box contact-info\">
                            <strong>Contact</strong>
                            <p class=\"mb-0\">📞 ";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "numero", [], "any", false, false, false, 346), "html", null, true);
            yield "</p>
                            <p class=\"mb-0\">📧 ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "email", [], "any", false, false, false, 347), "html", null, true);
            yield "</p>
                        </div>

                        <!-- Add reservation button -->
                        <div class=\"text-center mt-3 mb-3\">
                            <a href=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_index", ["service_id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id_service", [], "any", false, false, false, 352)]), "html", null, true);
            yield "\" class=\"btn btn-primary reservation-btn\">
                                <i class=\"fas fa-calendar-check me-2\"></i>
                                Réserver maintenant
                            </a>
                        </div>
                    </div>

                    <div class=\"qr-section text-center\">
                        <img src=\"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.google.com/maps/search/?api=1%26query=";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "latitude", [], "any", false, false, false, 360), "html", null, true);
            yield ",";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "longitude", [], "any", false, false, false, 360), "html", null, true);
            yield "\" 
                             alt=\"QR Code\"
                             title=\"Scanner pour voir la localisation\">
                        <p class=\"mt-2 mb-0\"><small>Scannez pour voir la localisation sur Google Maps</small></p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        yield "    </div>
</div>

<style>
    /* Chat bubble and modal styles */
    .chat-bubble {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .chat-bubble:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(99, 102, 241, 0.4);
    }

    .chat-modal {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 380px;
        height: 600px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        display: none;
        z-index: 999;
        overflow: hidden;
        border: 1px solid rgba(99, 102, 241, 0.1);
    }

    .chat-modal.active {
        display: block;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .chat-header {
        background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
        padding: 20px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .chat-header h5 {
        font-size: 1.1rem;
        font-weight: 600;
        margin: 0;
    }

    .chat-close {
        cursor: pointer;
        font-size: 24px;
        opacity: 0.8;
        transition: all 0.2s ease;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
    }

    .chat-close:hover {
        opacity: 1;
        background: rgba(255, 255, 255, 0.2);
    }

    .chat-body {
        height: calc(100% - 70px);
        padding: 20px;
        background: #f8f9fa;
    }

    .chat-iframe {
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 0 0 20px 20px;
        background: white;
    }
</style>

<!-- Add the chat bubble and modal structure -->
<div class=\"chat-bubble\" onclick=\"toggleDiagnosticChat()\">
    <i class=\"fas fa-robot\" style=\"color: white; font-size: 24px;\"></i>
</div>

<div id=\"diagnosticModal\" class=\"chat-modal\">
    <div class=\"chat-header\">
        <h5 class=\"mb-0\"><i class=\"fas fa-robot me-2\"></i>Diagnostic IA</h5>
        <span class=\"chat-close\" onclick=\"toggleDiagnosticChat()\">×</span>
    </div>
    <div class=\"chat-body\">
        <iframe class=\"chat-iframe\" src=\"";
        // line 481
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic");
        yield "\"></iframe>
    </div>
</div>

<!-- Add the JavaScript -->
<script>
    function toggleDiagnosticChat() {
        const modal = document.getElementById('diagnosticModal');
        modal.classList.toggle('active');
    }
</script>


   

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 498
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

        // line 499
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Card animation setup
            const cards = document.querySelectorAll('.service-card');
            cards.forEach((card, index) => {
                card.style.setProperty('--card-index', index);
            });
   
            // Automatically sort by distance when page loads
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    sortByDistance(position.coords.latitude, position.coords.longitude);
                }, function(error) {
                    // Fallback to Tunisia center coordinates
                    sortByDistance(36.8065, 10.1815);
                });
            }
   
            // Distance sorting button click
            document.getElementById('sortByDistance').addEventListener('click', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        sortByDistance(position.coords.latitude, position.coords.longitude);
                    }, function(error) {
                        sortByDistance(36.8065, 10.1815);
                    });
                } else {
                    alert(\"La géolocalisation n'est pas supportée par votre navigateur.\");
                }
            });
        });

        function sortByDistance(userLat, userLng) {
            const container = document.getElementById('servicesContainer');
            const cards = Array.from(container.getElementsByClassName('service-card'));
           
            // Sort cards by distance without displaying it
            cards.sort((a, b) => {
                const distA = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(a.dataset.lat),
                    parseFloat(a.dataset.lng)
                );
                const distB = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(b.dataset.lat),
                    parseFloat(b.dataset.lng)
                );
                return distA - distB;
            });
           
            // Reappend cards in sorted order with animation
            cards.forEach((card, index) => {
                setTimeout(() => {
                    container.appendChild(card);
                    card.classList.add('animate__animated', 'animate__fadeIn');
                }, index * 100);
            });
        }

        function calculateDistance(lat1, lon1, lat2, lon2) {
            if (lat1 === lat2 && lon1 === lon2) {
                return 0;
            }
           
            const R = 6371; // Earth's radius in km
            const dLat = (lat2 - lat1) * Math.PI / 180;
            const dLon = (lon2 - lon1) * Math.PI / 180;
            const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                     Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                     Math.sin(dLon/2) * Math.sin(dLon/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            return R * c;
        }
   
        function toggleChat() {
            const chatbot = document.getElementById('chatbot');
            chatbot.classList.toggle('active');
        }
   
        function sendMessage() {
            const input = document.getElementById('user-input');
            const message = input.value.trim();
           
            if (message) {
                const messagesContainer = document.getElementById('chat-messages');
                const messageElement = document.createElement('div');
                messageElement.className = 'message user-message';
                messageElement.textContent = message;
                messagesContainer.appendChild(messageElement);
               
                input.value = '';
                // Add your chatbot logic here
            }
        }

            // Add analyze button click handler
            document.getElementById('analyzeButton').addEventListener('click', function() {
                const mileage = document.getElementById('mileage').value;
                const carYear = document.getElementById('carYear').value;
                const messages = document.getElementById('chat-messages');
               
                if (!mileage || !carYear) {
                    messages.innerHTML += `
                        <div class=\"message bot-message\">
                            Veuillez remplir tous les champs avant l'analyse.
                        </div>
                    `;
                    return;
                }
           
                let score = 100;
                const currentYear = new Date().getFullYear();
               
                // Calculate base score from mileage and age
                if (mileage > 200000) score -= 30;
                else if (mileage > 150000) score -= 20;
                else if (mileage > 100000) score -= 10;
               
                const age = currentYear - carYear;
                if (age > 15) score -= 30;
                else if (age > 10) score -= 20;
                else if (age > 5) score -= 10;
           
                // Display analysis result
                messages.innerHTML += `
                    <div class=\"message bot-message\">
                        <h4>Analyse du Véhicule</h4>
                        <p>Kilométrage: \${mileage} km</p>
                        <p>Année: \${carYear}</p>
                        <div class=\"progress mb-2\" style=\"height: 20px;\">
                            <div class=\"progress-bar\" style=\"width: \${score}%; background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);\">
                                \${score}%
                            </div>
                        </div>
                        <p>\${getRecommendation(score)}</p>
                    </div>
                `;
                messages.scrollTop = messages.scrollHeight;
            },
       

        function getRecommendation(score) {
            if (score >= 80) {
                return \"Votre véhicule semble en bon état pour la visite technique.\";
            } else if (score >= 60) {
                return \"Quelques réparations mineures pourraient être nécessaires avant la visite.\";
            } else {
                return \"Des réparations importantes sont recommandées avant la visite technique.\";
            }
        }
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
        return "client aff/services.html.twig";
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
        return array (  678 => 499,  665 => 498,  638 => 481,  523 => 368,  507 => 360,  496 => 352,  488 => 347,  484 => 346,  476 => 341,  472 => 340,  462 => 335,  454 => 330,  446 => 325,  442 => 324,  434 => 321,  430 => 320,  426 => 319,  422 => 318,  419 => 317,  415 => 316,  116 => 19,  103 => 18,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .reservation-btn {
            background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);
        }
    </style>
{% endblock %}

{% block content %}

<div class=\"container mt-5\">
    <div class=\"text-center mb-4\">
       
    <!-- Add this after your h1 title -->
    <div class=\"text-center mb-4\">
        <h1 class=\"text-center mb-4 animate__animated animate__fadeInDown\">Nos Services</h1>
       
        <!-- Add search box and button -->
        <!-- Modify the search input and add an ID -->
        <div class=\"search-container mb-4\">
            <div class=\"input-group justify-content-center\">
                <input type=\"text\"
                       id=\"searchInput\"
                       class=\"form-control search-input\"
                       placeholder=\"Rechercher un service...\"
                       style=\"max-width: 400px;
                              border-radius: 25px 0 0 25px;
                              padding: 12px 25px;
                              border: 2px solid #e9ecef;
                              box-shadow: 0 4px 15px rgba(0,0,0,0.05);\">
                <button class=\"btn btn-primary search-btn\"
                        style=\"border-radius: 0 25px 25px 0;
                               background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
                               border: none;
                               padding: 12px 25px;
                               box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);\">
                    <i class=\"fas fa-search me-2\"></i>
                    Rechercher
                </button>
            </div>
        </div>
       
        <!-- Add this JavaScript code in your javascripts block -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const servicesContainer = document.getElementById('servicesContainer');
            const serviceCards = document.querySelectorAll('.service-card');

            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
               
                serviceCards.forEach(card => {
                    const serviceName = card.querySelector('.card-title').textContent.toLowerCase();
                    const serviceDesc = card.querySelector('.card-text').textContent.toLowerCase();
                    const serviceLocation = card.querySelector('.location-info').textContent.toLowerCase();
                    const serviceContact = card.querySelector('.contact-info').textContent.toLowerCase();
                   
                    const matches = serviceName.includes(searchTerm) ||
                                  serviceDesc.includes(searchTerm) ||
                                  serviceLocation.includes(searchTerm) ||
                                  serviceContact.includes(searchTerm);

                    // Add/remove animation classes
                    if (matches) {
                        card.style.display = '';
                        card.classList.add('animate__animated', 'animate__fadeIn');
                    } else {
                        card.style.display = 'none';
                        card.classList.remove('animate__animated', 'animate__fadeIn');
                    }
                });
            });
        });
        </script>
   
    <!-- Sort buttons -->
    <div class=\"text-center mb-4\">
    <button id=\"sortByDistance\" class=\"btn btn-primary search-btn\"
            style=\"border-radius: 25px;
                   background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
                   border: none;
                   padding: 12px 25px;
                   box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);\">
       
        Tri par distance
    </button>
    </div>
   
    <!-- Add animation CSS -->
    <style>
        @import 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css';

        .service-card {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.6s ease;
        }

        .service-card.visible {
            transform: translateY(0);
            opacity: 1;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }

        .service-header {
            background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
            color: white;
            padding: 20px;
            border-radius: 15px 15px 0 0;
            position: relative;
            overflow: hidden;
        }

        .service-header::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: rgba(255,255,255,0.1);
            transform: rotate(45deg);
            top: -50%;
            left: -50%;
            transition: all 0.6s ease;
        }

        .card:hover .service-header::before {
            transform: rotate(45deg) translate(50%, 50%);
        }

        .price-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255,255,255,0.2);
            padding: 8px 15px;
            border-radius: 20px;
            backdrop-filter: blur(5px);
            font-weight: bold;
        }

        .info-box {
            padding: 15px;
            margin: 10px;
            border-radius: 10px;
            background: rgba(99, 102, 241, 0.05);
            transition: all 0.3s ease;
        }

        .info-box:hover {
            background: rgba(99, 102, 241, 0.1);
            transform: scale(1.02);
        }

        .qr-section {
            padding: 20px;
            border-top: 1px solid rgba(0,0,0,0.1);
            background: linear-gradient(to bottom, transparent, rgba(99, 102, 241, 0.05));
        }

        .qr-section img {
            transition: all 0.3s ease;
            border-radius: 10px;
        }

        .qr-section img:hover {
            transform: scale(1.1);
        }

        /* Enhanced button animations */
        .sort-btn {
            background-size: 200% auto;
            transition: all 0.5s ease;
        }

        .sort-btn:hover {
            background-position: right center;
        }

        .price-btn {
            background: linear-gradient(45deg, #10b981, #059669, #10b981);
        }

        .distance-btn {
            background-image: linear-gradient(45deg, #4f46e5, #6366f1, #4f46e5);
        }
    </style>

    <!-- Add intersection observer for scroll animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.service-card').forEach(card => {
                observer.observe(card);
            });

            // Add hover effect for service cards
            document.querySelectorAll('.card').forEach(card => {
                card.addEventListener('mouseenter', function(e) {
                    this.style.transform = `translateY(-10px) rotate(\${Math.random() * 2 - 1}deg)`;
                });
               
                card.addEventListener('mouseleave', function(e) {
                    this.style.transform = 'translateY(0) rotate(0deg)';
                });
            });
        });
    </script>

    <!-- Sort buttons -->
    <!-- Add this in the Sort buttons div -->
   
   
    <!-- Add this JavaScript code in your javascripts block -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add click event for distance sorting
            document.getElementById('sortByDistance').addEventListener('click', function() {
                if (navigator.geolocation) {
                    this.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Localisation...';
                    this.disabled = true;

                    navigator.geolocation.getCurrentPosition(
                        function(position) {
                            sortByDistance(position.coords.latitude, position.coords.longitude);
                            const btn = document.getElementById('sortByDistance');
                            btn.innerHTML = '<i class=\"fas fa-map-marker-alt me-2\"></i>Trier par distance';
                            btn.disabled = false;
                        },
                        function(error) {
                            alert(\"Erreur de géolocalisation. Veuillez l'activer dans votre navigateur.\");
                            const btn = document.getElementById('sortByDistance');
                            btn.innerHTML = '<i class=\"fas fa-map-marker-alt me-2\"></i>Trier par distance';
                            btn.disabled = false;
                        }
                    );
                } else {
                    alert(\"Votre navigateur ne supporte pas la géolocalisation\");
                }
            });
        });

        function sortByDistance(userLat, userLng) {
            const container = document.getElementById('servicesContainer');
            const cards = Array.from(container.getElementsByClassName('service-card'));
           
            // Sort cards by distance without displaying it
            cards.sort((a, b) => {
                const distA = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(a.dataset.lat),
                    parseFloat(a.dataset.lng)
                );
                const distB = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(b.dataset.lat),
                    parseFloat(b.dataset.lng)
                );
                return distA - distB;
            });
           
            // Reappend cards in sorted order with animation
            cards.forEach((card, index) => {
                setTimeout(() => {
                    container.appendChild(card);
                    card.classList.add('animate__animated', 'animate__fadeIn');
                }, index * 100);
            });
        }

        function calculateDistance(lat1, lon1, lat2, lon2) {
            const R = 6371; // Earth's radius in km
            const dLat = (lat2 - lat1) * Math.PI / 180;
            const dLon = (lon2 - lon1) * Math.PI / 180;
            const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                     Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                     Math.sin(dLon/2) * Math.sin(dLon/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            return R * c;
        }
    </script>

    <!-- Remove the distance-tag style block completely -->
   
    <div class=\"row\" id=\"servicesContainer\">
        {% for service in services %}
            <div class=\"col-md-4 mb-4 service-card\"
                data-price=\"{{ service.prix }}\"
                data-lat=\"{{ service.latitude }}\"
                data-lng=\"{{ service.longitude }}\"
                onclick=\"showServiceDetails('{{ service.nom }}', '{{ service.gouvernerat }}')\">
                <div class=\"card\">
                    <div class=\"service-header\">
                        <h5 class=\"card-title mb-2\">{{ service.nom }}</h5>
                        <div class=\"price-tag\">{{ service.prix }}DT</div>
                    </div>
                   
                    <div class=\"service-info\">
                        <div class=\"info-box\">
                            <p class=\"card-text\">{{ service.description }}</p>
                        </div>
                       
                        <div class=\"info-box hours-info\">
                            <strong>Heures d'ouverture</strong>
                            <p class=\"mb-0\">{{ service.heureOuverture }} - {{ service.heureFermeture }}</p>
                        </div>

                        <div class=\"info-box location-info\">
                            <strong>Localisation</strong>
                            <p class=\"mb-0\">{{ service.gouvernerat }}</p>
                            <p class=\"mb-0\">{{ service.type }}</p>
                        </div>

                        <div class=\"info-box contact-info\">
                            <strong>Contact</strong>
                            <p class=\"mb-0\">📞 {{ service.numero }}</p>
                            <p class=\"mb-0\">📧 {{ service.email }}</p>
                        </div>

                        <!-- Add reservation button -->
                        <div class=\"text-center mt-3 mb-3\">
                            <a href=\"{{ path('app_calendrier_index', {'service_id': service.id_service}) }}\" class=\"btn btn-primary reservation-btn\">
                                <i class=\"fas fa-calendar-check me-2\"></i>
                                Réserver maintenant
                            </a>
                        </div>
                    </div>

                    <div class=\"qr-section text-center\">
                        <img src=\"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.google.com/maps/search/?api=1%26query={{ service.latitude }},{{ service.longitude }}\" 
                             alt=\"QR Code\"
                             title=\"Scanner pour voir la localisation\">
                        <p class=\"mt-2 mb-0\"><small>Scannez pour voir la localisation sur Google Maps</small></p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<style>
    /* Chat bubble and modal styles */
    .chat-bubble {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .chat-bubble:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(99, 102, 241, 0.4);
    }

    .chat-modal {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 380px;
        height: 600px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        display: none;
        z-index: 999;
        overflow: hidden;
        border: 1px solid rgba(99, 102, 241, 0.1);
    }

    .chat-modal.active {
        display: block;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .chat-header {
        background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);
        padding: 20px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .chat-header h5 {
        font-size: 1.1rem;
        font-weight: 600;
        margin: 0;
    }

    .chat-close {
        cursor: pointer;
        font-size: 24px;
        opacity: 0.8;
        transition: all 0.2s ease;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
    }

    .chat-close:hover {
        opacity: 1;
        background: rgba(255, 255, 255, 0.2);
    }

    .chat-body {
        height: calc(100% - 70px);
        padding: 20px;
        background: #f8f9fa;
    }

    .chat-iframe {
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 0 0 20px 20px;
        background: white;
    }
</style>

<!-- Add the chat bubble and modal structure -->
<div class=\"chat-bubble\" onclick=\"toggleDiagnosticChat()\">
    <i class=\"fas fa-robot\" style=\"color: white; font-size: 24px;\"></i>
</div>

<div id=\"diagnosticModal\" class=\"chat-modal\">
    <div class=\"chat-header\">
        <h5 class=\"mb-0\"><i class=\"fas fa-robot me-2\"></i>Diagnostic IA</h5>
        <span class=\"chat-close\" onclick=\"toggleDiagnosticChat()\">×</span>
    </div>
    <div class=\"chat-body\">
        <iframe class=\"chat-iframe\" src=\"{{ path('app_diagnostic') }}\"></iframe>
    </div>
</div>

<!-- Add the JavaScript -->
<script>
    function toggleDiagnosticChat() {
        const modal = document.getElementById('diagnosticModal');
        modal.classList.toggle('active');
    }
</script>


   

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Card animation setup
            const cards = document.querySelectorAll('.service-card');
            cards.forEach((card, index) => {
                card.style.setProperty('--card-index', index);
            });
   
            // Automatically sort by distance when page loads
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    sortByDistance(position.coords.latitude, position.coords.longitude);
                }, function(error) {
                    // Fallback to Tunisia center coordinates
                    sortByDistance(36.8065, 10.1815);
                });
            }
   
            // Distance sorting button click
            document.getElementById('sortByDistance').addEventListener('click', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        sortByDistance(position.coords.latitude, position.coords.longitude);
                    }, function(error) {
                        sortByDistance(36.8065, 10.1815);
                    });
                } else {
                    alert(\"La géolocalisation n'est pas supportée par votre navigateur.\");
                }
            });
        });

        function sortByDistance(userLat, userLng) {
            const container = document.getElementById('servicesContainer');
            const cards = Array.from(container.getElementsByClassName('service-card'));
           
            // Sort cards by distance without displaying it
            cards.sort((a, b) => {
                const distA = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(a.dataset.lat),
                    parseFloat(a.dataset.lng)
                );
                const distB = calculateDistance(
                    userLat,
                    userLng,
                    parseFloat(b.dataset.lat),
                    parseFloat(b.dataset.lng)
                );
                return distA - distB;
            });
           
            // Reappend cards in sorted order with animation
            cards.forEach((card, index) => {
                setTimeout(() => {
                    container.appendChild(card);
                    card.classList.add('animate__animated', 'animate__fadeIn');
                }, index * 100);
            });
        }

        function calculateDistance(lat1, lon1, lat2, lon2) {
            if (lat1 === lat2 && lon1 === lon2) {
                return 0;
            }
           
            const R = 6371; // Earth's radius in km
            const dLat = (lat2 - lat1) * Math.PI / 180;
            const dLon = (lon2 - lon1) * Math.PI / 180;
            const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                     Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                     Math.sin(dLon/2) * Math.sin(dLon/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            return R * c;
        }
   
        function toggleChat() {
            const chatbot = document.getElementById('chatbot');
            chatbot.classList.toggle('active');
        }
   
        function sendMessage() {
            const input = document.getElementById('user-input');
            const message = input.value.trim();
           
            if (message) {
                const messagesContainer = document.getElementById('chat-messages');
                const messageElement = document.createElement('div');
                messageElement.className = 'message user-message';
                messageElement.textContent = message;
                messagesContainer.appendChild(messageElement);
               
                input.value = '';
                // Add your chatbot logic here
            }
        }

            // Add analyze button click handler
            document.getElementById('analyzeButton').addEventListener('click', function() {
                const mileage = document.getElementById('mileage').value;
                const carYear = document.getElementById('carYear').value;
                const messages = document.getElementById('chat-messages');
               
                if (!mileage || !carYear) {
                    messages.innerHTML += `
                        <div class=\"message bot-message\">
                            Veuillez remplir tous les champs avant l'analyse.
                        </div>
                    `;
                    return;
                }
           
                let score = 100;
                const currentYear = new Date().getFullYear();
               
                // Calculate base score from mileage and age
                if (mileage > 200000) score -= 30;
                else if (mileage > 150000) score -= 20;
                else if (mileage > 100000) score -= 10;
               
                const age = currentYear - carYear;
                if (age > 15) score -= 30;
                else if (age > 10) score -= 20;
                else if (age > 5) score -= 10;
           
                // Display analysis result
                messages.innerHTML += `
                    <div class=\"message bot-message\">
                        <h4>Analyse du Véhicule</h4>
                        <p>Kilométrage: \${mileage} km</p>
                        <p>Année: \${carYear}</p>
                        <div class=\"progress mb-2\" style=\"height: 20px;\">
                            <div class=\"progress-bar\" style=\"width: \${score}%; background: linear-gradient(135deg, #6366F1 0%, #4F46E5 100%);\">
                                \${score}%
                            </div>
                        </div>
                        <p>\${getRecommendation(score)}</p>
                    </div>
                `;
                messages.scrollTop = messages.scrollHeight;
            },
       

        function getRecommendation(score) {
            if (score >= 80) {
                return \"Votre véhicule semble en bon état pour la visite technique.\";
            } else if (score >= 60) {
                return \"Quelques réparations mineures pourraient être nécessaires avant la visite.\";
            } else {
                return \"Des réparations importantes sont recommandées avant la visite technique.\";
            }
        }
    </script>
    {% endblock %}
    ", "client aff/services.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\client aff\\services.html.twig");
    }
}
