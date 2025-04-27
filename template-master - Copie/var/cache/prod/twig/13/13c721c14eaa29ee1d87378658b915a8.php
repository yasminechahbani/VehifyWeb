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
class __TwigTemplate_35b425e28f3d267528c1067fe8146220 extends Template
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
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "client aff/services.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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

        .reservation-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.3);
        }

        .reservation-btn i {
            transition: transform 0.3s ease;
        }

        .reservation-btn:hover i {
            transform: scale(1.2);
        }
    </style>
";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4 animate__animated animate__fadeInDown\">Nos Services</h1>
    
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
            background-image: linear-gradient(45deg, #10b981, #059669, #10b981);
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
    <div class=\"text-center mb-4\">
        <button id=\"sortByPrice\" class=\"sort-btn price-btn\">
            <i class=\"fas fa-sort-amount-down me-2\"></i>
            Trier par prix
        </button>
        <button id=\"sortByDistance\" class=\"sort-btn distance-btn\">
            <i class=\"fas fa-map-marker-alt me-2\"></i>
            Trier par distance
        </button>
    </div>

    <style>
        .sort-btn {
            padding: 12px 28px;
            margin: 0 10px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 15px;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            color: white;
            cursor: pointer;
        }

        .sort-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .sort-btn:hover::before {
            left: 100%;
        }

        .price-btn {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.2);
        }

        .distance-btn {
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.2);
        }

        .sort-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .sort-btn i {
            transition: transform 0.3s ease;
        }

        .sort-btn:hover i {
            transform: scale(1.2);
        }
    </style>
    
    <div class=\"row\" id=\"servicesContainer\">
        ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 243
            yield "            <div class=\"col-md-4 mb-4 service-card\" 
                data-price=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prix", [], "any", false, false, false, 244), "html", null, true);
            yield "\" 
                data-lat=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "latitude", [], "any", false, false, false, 245), "html", null, true);
            yield "\" 
                data-lng=\"";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "longitude", [], "any", false, false, false, 246), "html", null, true);
            yield "\" 
                onclick=\"showServiceDetails('";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 247), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "gouvernerat", [], "any", false, false, false, 247), "html", null, true);
            yield "')\">
                <div class=\"card\">
                    <div class=\"service-header\">
                        <h5 class=\"card-title mb-2\">";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 250), "html", null, true);
            yield "</h5>
                        <div class=\"price-tag\">";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prix", [], "any", false, false, false, 251), "html", null, true);
            yield "DT</div>
                    </div>
                    
                    <div class=\"service-info\">
                        <div class=\"info-box\">
                            <p class=\"card-text\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 256), "html", null, true);
            yield "</p>
                        </div>
                        
                        <div class=\"info-box hours-info\">
                            <strong>Heures d'ouverture</strong>
                            <p class=\"mb-0\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "heureOuverture", [], "any", false, false, false, 261), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "heureFermeture", [], "any", false, false, false, 261), "html", null, true);
            yield "</p>
                        </div>

                        <div class=\"info-box location-info\">
                            <strong>Localisation</strong>
                            <p class=\"mb-0\">";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "gouvernerat", [], "any", false, false, false, 266), "html", null, true);
            yield "</p>
                            <p class=\"mb-0\">";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 267), "html", null, true);
            yield "</p>
                        </div>

                        <div class=\"info-box contact-info\">
                            <strong>Contact</strong>
                            <p class=\"mb-0\">📞 ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "numero", [], "any", false, false, false, 272), "html", null, true);
            yield "</p>
                            <p class=\"mb-0\">📧 ";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "email", [], "any", false, false, false, 273), "html", null, true);
            yield "</p>
                        </div>

                        <!-- Add reservation button -->
                        <div class=\"text-center mt-3 mb-3\">
                            <a href=\"";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["service_id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id_service", [], "any", false, false, false, 278)]), "html", null, true);
            yield "\" class=\"btn btn-primary reservation-btn\">
                                <i class=\"fas fa-calendar-check me-2\"></i>
                                Réserver maintenant
                            </a>
                        </div>
                    </div>

                    <div class=\"qr-section text-center\">
                        <img src=\"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.google.com/maps?q=";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "latitude", [], "any", false, false, false, 286), "html", null, true);
            yield ",";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "longitude", [], "any", false, false, false, 286), "html", null, true);
            yield "\" alt=\"QR Code\">
                        <p class=\"mt-2 mb-0\"><small>Scannez pour ouvrir dans Google Maps</small></p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "    </div>
</div>

";
        // line 295
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 383
        yield "
";
        yield from [];
    }

    // line 295
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 296
        yield "<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Card animation setup
        const cards = document.querySelectorAll('.service-card');
        cards.forEach((card, index) => {
            card.style.setProperty('--card-index', index);
        });

        // Price sorting
        document.getElementById('sortByPrice').addEventListener('click', function() {
            const container = document.getElementById('servicesContainer');
            const cards = Array.from(container.getElementsByClassName('service-card'));
            
            cards.sort((a, b) => {
                const priceA = parseFloat(a.dataset.price);
                const priceB = parseFloat(b.dataset.price);
                return priceA - priceB;
            });
            
            cards.forEach(card => container.appendChild(card));
        });

        // Distance sorting with OpenStreetMap
        document.getElementById('sortByDistance').addEventListener('click', async function() {
            try {
                // Get user's location from IP using OpenStreetMap
                const response = await fetch('https://nominatim.openstreetmap.org/search?format=json&q=Tunisia');
                const data = await response.json();
                
                if (data && data[0]) {
                    const userLat = parseFloat(data[0].lat);
                    const userLng = parseFloat(data[0].lon);
                    
                    const container = document.getElementById('servicesContainer');
                    const cards = Array.from(container.getElementsByClassName('service-card'));
                    
                    // Sort cards by distance
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
                    
                    // Animate cards reordering
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            container.appendChild(card);
                            card.style.opacity = \"0\";
                            requestAnimationFrame(() => {
                                card.style.opacity = \"1\";
                                card.style.transform = \"translateY(0)\";
                            });
                        }, index * 100);
                    });
                }
            } catch (error) {
                alert(\"Erreur lors du tri par distance. Veuillez réessayer.\");
            }
        });
    });

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
</script>
";
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
        return array (  437 => 296,  430 => 295,  424 => 383,  422 => 295,  417 => 292,  403 => 286,  392 => 278,  384 => 273,  380 => 272,  372 => 267,  368 => 266,  358 => 261,  350 => 256,  342 => 251,  338 => 250,  330 => 247,  326 => 246,  322 => 245,  318 => 244,  315 => 243,  311 => 242,  99 => 32,  92 => 31,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "client aff/services.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\client aff\\services.html.twig");
    }
}
