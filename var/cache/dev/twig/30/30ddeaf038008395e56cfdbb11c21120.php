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

/* calendrier/index.html.twig */
class __TwigTemplate_6df64b6e8b8bf6616b18db974d2dbb2e extends Template
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
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        // line 2
        $context["active_page"] = "Calendrier";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "calendrier/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Disponibilités - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css\">
    <style>
        /* Style général */
        .booking-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* En-tête du service */
        .service-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border-left: 5px solid #0d6efd;
        }
        
        .service-name {
            font-size: 1.8rem;
            font-weight: 700;
            color: #212529;
            margin-bottom: 5px;
        }
        
        .service-type {
            font-size: 1.1rem;
            color: #6c757d;
            font-weight: 500;
        }
        
        /* Calendrier */
        #calendar {
            min-height: 600px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        /* Styles des jours */
        .fc-day-past {
            background-color: #f8f9fa !important;
            color: #adb5bd !important;
            pointer-events: none !important;
        }
        
        .fc-day-today {
            background-color: #e7f5ff !important;
        }
        
        .fc-day-future {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .fc-day-future:hover {
            background-color: #f1f8ff !important;
        }
        
        /* Panneau des disponibilités */
        .availability-panel {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 500px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            z-index: 1000;
            padding: 25px;
            animation: fadeInUp 0.3s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate(-50%, -40%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }
        
        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .panel-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #212529;
        }
        
        .close-panel {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .close-panel:hover {
            color: #dc3545;
            transform: rotate(90deg);
        }
        
        /* Grille des créneaux */
        .time-slots-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 10px;
            margin-top: 15px;
        }
        
        .time-slot {
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .available {
            background-color: #e6f7ee;
            color: #0d6832;
            cursor: pointer;
        }
        
        .available:hover {
            background-color: #0d6832;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(13, 104, 50, 0.2);
        }
        
        .unavailable {
            background-color: #fff0f0;
            color: #dc3545;
            cursor: not-allowed;
            position: relative;
        }
        
        .unavailable:after {
            content: \"✖\";
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 12px;
        }
        
        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(3px);
            z-index: 999;
        }
        
        /* Bouton de réservation */
        .book-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #0d6efd;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.2s ease;
        }
        
        .book-btn:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .time-slots-grid {
                grid-template-columns: repeat(auto-fill, minmax(70px, 1fr));
            }
            
            .service-name {
                font-size: 1.5rem;
            }
            
            #calendar {
                padding: 10px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 218
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

        // line 219
        yield "    <div class=\"booking-container\">
        <!-- En-tête du service -->
        <div class=\"service-card\">
            <h1 class=\"service-name\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 222, $this->source); })()), "nom", [], "any", false, false, false, 222), "html", null, true);
        yield "</h1>
            <p class=\"service-type\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 223, $this->source); })()), "type", [], "any", false, false, false, 223), "html", null, true);
        yield "</p>
        </div>
        
        <!-- Calendrier -->
        <div id=\"calendar\" data-service-id=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 227, $this->source); })()), "idService", [], "any", false, false, false, 227), "html", null, true);
        yield "\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 231
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

        // line 232
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceId = document.getElementById('calendar').dataset.serviceId;
            let availabilityPanel = null;
            let overlay = null;
            let selectedDate = null;
            
            // Initialisation du calendrier
            const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
                initialView: 'dayGridMonth',
                locale: 'fr',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth' // Supprimez 'timeGridWeek' ici
                },
                validRange: {
                    start: new Date() // Empêche la sélection des dates passées
                },
                dateClick: function(info) {
                    // Ne pas permettre la sélection des dates passées
                    if (info.date < new Date()) return;
                    
                    selectedDate = info.dateStr;
                    showAvailabilityPanel(info.dateStr);
                },
                datesSet: function(info) {
                    // Masquer les boutons de navigation pour les mois passés
                    const prevButton = document.querySelector('.fc-prev-button');
                    if (info.start < new Date()) {
                        prevButton.disabled = true;
                        prevButton.style.opacity = '0.5';
                    } else {
                        prevButton.disabled = false;
                        prevButton.style.opacity = '1';
                    }
                }
            });
            
            calendar.render();
            
            // Afficher le panneau des disponibilités
            function showAvailabilityPanel(dateStr) {
                // Créer l'overlay
                overlay = document.createElement('div');
                overlay.className = 'overlay';
                document.body.appendChild(overlay);
                
                // Créer le panneau
                availabilityPanel = document.createElement('div');
                availabilityPanel.className = 'availability-panel';
                availabilityPanel.innerHTML = `
                    <div class=\"panel-header\">
                        <h3 class=\"panel-title\">Créneaux disponibles</h3>
                        <button class=\"close-panel\">&times;</button>
                    </div>
                    <div class=\"loading-state\">
                        <div class=\"spinner-border text-primary\"></div>
                        <p>Chargement des disponibilités...</p>
                    </div>
                `;
                
                document.body.appendChild(availabilityPanel);
                
                // Fermer le panneau
                availabilityPanel.querySelector('.close-panel').addEventListener('click', closeAvailabilityPanel);
                overlay.addEventListener('click', closeAvailabilityPanel);
                
                // Charger les disponibilités
                fetch(`/calendrier/disponibilites?date=\${dateStr}&service_id=\${serviceId}`)
                    .then(response => response.json())
                    .then(data => {
                        updateAvailabilityPanel(data, dateStr);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        availabilityPanel.querySelector('.loading-state').innerHTML = `
                            <div class=\"alert alert-danger\">
                                Erreur lors du chargement des disponibilités
                            </div>
                        `;
                    });
            }
            
            // Mettre à jour le panneau avec les données
            function updateAvailabilityPanel(creneaux, dateStr) {
                const formattedDate = new Date(dateStr).toLocaleDateString('fr-FR', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long'
                });
                
                let slotsHTML = '';
                let availableSlots = 0;
                
                creneaux.forEach(creneau => {
                    if (creneau.disponible) {
                        availableSlots++;
                        slotsHTML += `
                            <div class=\"time-slot available\" 
                                 data-heure=\"\${creneau.heure}\"
                                 onclick=\"bookSlot('\${dateStr}', '\${creneau.heure}')\">
                                \${creneau.heure}
                            </div>
                        `;
                    } else {
                        slotsHTML += `
                            <div class=\"time-slot unavailable\">
                                \${creneau.heure}
                            </div>
                        `;
                    }
                });
                
                availabilityPanel.querySelector('.loading-state').outerHTML = `
                    <div>
                        <p>Disponibilités pour le <strong>\${formattedDate}</strong></p>
                        \${availableSlots > 0 ? 
                            `<p class=\"text-success\">\${availableSlots} créneau(x) disponible(s)</p>` : 
                            `<p class=\"text-danger\">Aucun créneau disponible</p>`}
                        
                        <div class=\"time-slots-grid\">
                            \${slotsHTML}
                        </div>
                        
                        \${availableSlots > 0 ? '' : `
                            <button class=\"book-btn\" onclick=\"closeAvailabilityPanel()\">
                                Fermer
                            </button>
                        `}
                    </div>
                `;
            }
            
            // Fermer le panneau
            function closeAvailabilityPanel() {
                if (availabilityPanel) {
                    availabilityPanel.remove();
                    availabilityPanel = null;
                }
                if (overlay) {
                    overlay.remove();
                    overlay = null;
                }
            }
            
            // Réserver un créneau
            window.bookSlot = function(date, heure) {
                window.location.href = `/reservation/new?service_id=\${serviceId}&date=\${date}&heure=\${heure}`;
            };
            
            // Désactiver le bouton précédent si on est sur le mois courant
            const currentDate = new Date();
            const currentMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
            if (calendar.getDate() <= currentMonth) {
                document.querySelector('.fc-prev-button').disabled = true;
                document.querySelector('.fc-prev-button').style.opacity = '0.5';
            }
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
        return "calendrier/index.html.twig";
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
        return array (  384 => 232,  371 => 231,  357 => 227,  350 => 223,  346 => 222,  341 => 219,  328 => 218,  106 => 7,  93 => 6,  69 => 4,  58 => 1,  56 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'Calendrier' %}

{% block title %}Disponibilités - {{ service.nom }}{% endblock %}

{% block css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css\">
    <style>
        /* Style général */
        .booking-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* En-tête du service */
        .service-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border-left: 5px solid #0d6efd;
        }
        
        .service-name {
            font-size: 1.8rem;
            font-weight: 700;
            color: #212529;
            margin-bottom: 5px;
        }
        
        .service-type {
            font-size: 1.1rem;
            color: #6c757d;
            font-weight: 500;
        }
        
        /* Calendrier */
        #calendar {
            min-height: 600px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        /* Styles des jours */
        .fc-day-past {
            background-color: #f8f9fa !important;
            color: #adb5bd !important;
            pointer-events: none !important;
        }
        
        .fc-day-today {
            background-color: #e7f5ff !important;
        }
        
        .fc-day-future {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .fc-day-future:hover {
            background-color: #f1f8ff !important;
        }
        
        /* Panneau des disponibilités */
        .availability-panel {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 500px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            z-index: 1000;
            padding: 25px;
            animation: fadeInUp 0.3s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate(-50%, -40%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }
        
        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .panel-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #212529;
        }
        
        .close-panel {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .close-panel:hover {
            color: #dc3545;
            transform: rotate(90deg);
        }
        
        /* Grille des créneaux */
        .time-slots-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 10px;
            margin-top: 15px;
        }
        
        .time-slot {
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .available {
            background-color: #e6f7ee;
            color: #0d6832;
            cursor: pointer;
        }
        
        .available:hover {
            background-color: #0d6832;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(13, 104, 50, 0.2);
        }
        
        .unavailable {
            background-color: #fff0f0;
            color: #dc3545;
            cursor: not-allowed;
            position: relative;
        }
        
        .unavailable:after {
            content: \"✖\";
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 12px;
        }
        
        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(3px);
            z-index: 999;
        }
        
        /* Bouton de réservation */
        .book-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #0d6efd;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.2s ease;
        }
        
        .book-btn:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .time-slots-grid {
                grid-template-columns: repeat(auto-fill, minmax(70px, 1fr));
            }
            
            .service-name {
                font-size: 1.5rem;
            }
            
            #calendar {
                padding: 10px;
            }
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"booking-container\">
        <!-- En-tête du service -->
        <div class=\"service-card\">
            <h1 class=\"service-name\">{{ service.nom }}</h1>
            <p class=\"service-type\">{{ service.type }}</p>
        </div>
        
        <!-- Calendrier -->
        <div id=\"calendar\" data-service-id=\"{{ service.idService }}\"></div>
    </div>
{% endblock %}

{% block scripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceId = document.getElementById('calendar').dataset.serviceId;
            let availabilityPanel = null;
            let overlay = null;
            let selectedDate = null;
            
            // Initialisation du calendrier
            const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
                initialView: 'dayGridMonth',
                locale: 'fr',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth' // Supprimez 'timeGridWeek' ici
                },
                validRange: {
                    start: new Date() // Empêche la sélection des dates passées
                },
                dateClick: function(info) {
                    // Ne pas permettre la sélection des dates passées
                    if (info.date < new Date()) return;
                    
                    selectedDate = info.dateStr;
                    showAvailabilityPanel(info.dateStr);
                },
                datesSet: function(info) {
                    // Masquer les boutons de navigation pour les mois passés
                    const prevButton = document.querySelector('.fc-prev-button');
                    if (info.start < new Date()) {
                        prevButton.disabled = true;
                        prevButton.style.opacity = '0.5';
                    } else {
                        prevButton.disabled = false;
                        prevButton.style.opacity = '1';
                    }
                }
            });
            
            calendar.render();
            
            // Afficher le panneau des disponibilités
            function showAvailabilityPanel(dateStr) {
                // Créer l'overlay
                overlay = document.createElement('div');
                overlay.className = 'overlay';
                document.body.appendChild(overlay);
                
                // Créer le panneau
                availabilityPanel = document.createElement('div');
                availabilityPanel.className = 'availability-panel';
                availabilityPanel.innerHTML = `
                    <div class=\"panel-header\">
                        <h3 class=\"panel-title\">Créneaux disponibles</h3>
                        <button class=\"close-panel\">&times;</button>
                    </div>
                    <div class=\"loading-state\">
                        <div class=\"spinner-border text-primary\"></div>
                        <p>Chargement des disponibilités...</p>
                    </div>
                `;
                
                document.body.appendChild(availabilityPanel);
                
                // Fermer le panneau
                availabilityPanel.querySelector('.close-panel').addEventListener('click', closeAvailabilityPanel);
                overlay.addEventListener('click', closeAvailabilityPanel);
                
                // Charger les disponibilités
                fetch(`/calendrier/disponibilites?date=\${dateStr}&service_id=\${serviceId}`)
                    .then(response => response.json())
                    .then(data => {
                        updateAvailabilityPanel(data, dateStr);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        availabilityPanel.querySelector('.loading-state').innerHTML = `
                            <div class=\"alert alert-danger\">
                                Erreur lors du chargement des disponibilités
                            </div>
                        `;
                    });
            }
            
            // Mettre à jour le panneau avec les données
            function updateAvailabilityPanel(creneaux, dateStr) {
                const formattedDate = new Date(dateStr).toLocaleDateString('fr-FR', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long'
                });
                
                let slotsHTML = '';
                let availableSlots = 0;
                
                creneaux.forEach(creneau => {
                    if (creneau.disponible) {
                        availableSlots++;
                        slotsHTML += `
                            <div class=\"time-slot available\" 
                                 data-heure=\"\${creneau.heure}\"
                                 onclick=\"bookSlot('\${dateStr}', '\${creneau.heure}')\">
                                \${creneau.heure}
                            </div>
                        `;
                    } else {
                        slotsHTML += `
                            <div class=\"time-slot unavailable\">
                                \${creneau.heure}
                            </div>
                        `;
                    }
                });
                
                availabilityPanel.querySelector('.loading-state').outerHTML = `
                    <div>
                        <p>Disponibilités pour le <strong>\${formattedDate}</strong></p>
                        \${availableSlots > 0 ? 
                            `<p class=\"text-success\">\${availableSlots} créneau(x) disponible(s)</p>` : 
                            `<p class=\"text-danger\">Aucun créneau disponible</p>`}
                        
                        <div class=\"time-slots-grid\">
                            \${slotsHTML}
                        </div>
                        
                        \${availableSlots > 0 ? '' : `
                            <button class=\"book-btn\" onclick=\"closeAvailabilityPanel()\">
                                Fermer
                            </button>
                        `}
                    </div>
                `;
            }
            
            // Fermer le panneau
            function closeAvailabilityPanel() {
                if (availabilityPanel) {
                    availabilityPanel.remove();
                    availabilityPanel = null;
                }
                if (overlay) {
                    overlay.remove();
                    overlay = null;
                }
            }
            
            // Réserver un créneau
            window.bookSlot = function(date, heure) {
                window.location.href = `/reservation/new?service_id=\${serviceId}&date=\${date}&heure=\${heure}`;
            };
            
            // Désactiver le bouton précédent si on est sur le mois courant
            const currentDate = new Date();
            const currentMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
            if (calendar.getDate() <= currentMonth) {
                document.querySelector('.fc-prev-button').disabled = true;
                document.querySelector('.fc-prev-button').style.opacity = '0.5';
            }
        });
    </script>
{% endblock %}", "calendrier/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\calendrier\\index.html.twig");
    }
}
