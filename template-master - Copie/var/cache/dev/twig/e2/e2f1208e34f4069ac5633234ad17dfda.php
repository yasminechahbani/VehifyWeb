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
class __TwigTemplate_1627148363d38749f4a1923a718a13d7 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        // line 3
        $context["active_page"] = "calendrier";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calendrier/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Calendrier des Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css\">
    <style>
        #calendar-container {
            max-width: 1100px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        #calendar {
            margin-top: 20px;
        }
        .fc-toolbar-title {
            color: #5a5c69;
            font-size: 1.5rem !important;
        }
        .fc-button-primary {
            background-color: #4e73df !important;
            border-color: #4e73df !important;
        }
        .fc-button-primary:hover {
            background-color: #2e59d9 !important;
            border-color: #2653d4 !important;
        }
        .fc-button-primary:disabled {
            background-color: #6c87e0 !important;
            border-color: #6c87e0 !important;
        }
        .fc-daygrid-day.fc-day-today {
            background-color: rgba(78, 115, 223, 0.1) !important;
        }
        .event-tooltip {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            padding: 10px;
            max-width: 300px;
        }
        .event-tooltip h5 {
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
        .event-tooltip p {
            margin-bottom: 5px;
        }
        .legend-item {
            display: inline-flex;
            align-items: center;
            margin-right: 15px;
            margin-bottom: 10px;
        }
        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 3px;
            margin-right: 5px;
        }
        .filters-container {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fc;
            border-radius: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
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

        // line 78
        yield "    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mb-5\">
                <h1 class=\"display-4\">Calendrier des Réservations</h1>
                <p class=\"lead\">Visualisez et gérez votre planning de réservations</p>
            </div>
            
            <div id=\"calendar-container\">
                <!-- Filtres -->
                <div class=\"filters-container\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <label for=\"service-filter\"><strong>Filtrer par service:</strong></label>
                            <select id=\"service-filter\" class=\"form-control selectpicker\" data-live-search=\"true\">
                                <option value=\"\">Tous les services</option>
                                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 94
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idService", [], "any", false, false, false, 94), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 94), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 94), "html", null, true);
            yield ")</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                            </select>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"legend mt-3\">
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #e74a3b;\"></div> Réparation</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #1cc88a;\"></div> Entretien</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #f6c23e;\"></div> Diagnostic</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #36b9cc;\"></div> Lavage</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #3788d8;\"></div> Autre</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Calendrier -->
                <div id=\"calendar\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        // line 119
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                locale: 'fr',
                timeZone: 'local',
                editable: true,
                selectable: true,
                selectMirror: true,
                dayMaxEvents: true,
                weekNumbers: true,
                navLinks: true,
                businessHours: {
                    daysOfWeek: [1, 2, 3, 4, 5, 6], // Lundi - Samedi
                    startTime: '08:00',
                    endTime: '18:00',
                },
                eventSources: [{
                    url: '";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_events");
        yield "',
                    method: 'GET',
                    extraParams: function() {
                        return {
                            service: \$('#service-filter').val()
                        };
                    },
                    success: function(events) {
                        events.forEach(function(event) {
                            event.title = event.title || 'Sans titre';
                            event.start = event.start || new Date();
                        });
                    }
                }],
                eventDidMount: function(info) {
                    \$(info.el).tooltip({
                        title: function() {
                            return '<div class=\"event-tooltip\">' +
                                '<h5>' + (info.event.extendedProps.service || 'Service non spécifié') + '</h5>' +
                                '<p><strong>Client:</strong> ' + (info.event.extendedProps.client || 'Client non spécifié') + '</p>' +
                                '<p><strong>Véhicule:</strong> ' + (info.event.extendedProps.vehicule || 'Véhicule non spécifié') + '</p>' +
                                '<p>' + (info.event.extendedProps.description || '') + '</p>' +
                                '</div>';
                        },
                        html: true,
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body'
                    });
                    info.el.classList.add('calendar-event');
                },
                select: function(info) {
                    // TODO: Implémenter la création de réservation
                    console.log('Date sélectionnée:', info.startStr);
                },
                eventClick: function(info) {
                    // TODO: Implémenter la modification de réservation
                    console.log('Événement cliqué:', info.event.id);
                },
                eventDrop: function(info) {
                    // TODO: Implémenter le déplacement de réservation
                    console.log('Événement déplacé:', info.event.id);
                }
            
            });
            
            calendar.render();

            // Initialiser le sélecteur de service
            \$('.selectpicker').selectpicker();

            // Gérer le changement de filtre
            \$('#service-filter').on('change', function() {
                calendar.refetchEvents();
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
        return array (  306 => 149,  274 => 119,  261 => 118,  230 => 96,  217 => 94,  213 => 93,  196 => 78,  183 => 77,  105 => 8,  92 => 7,  69 => 5,  58 => 1,  56 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% set active_page = 'calendrier' %}

{% block title %}Calendrier des Réservations{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css\">
    <style>
        #calendar-container {
            max-width: 1100px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        #calendar {
            margin-top: 20px;
        }
        .fc-toolbar-title {
            color: #5a5c69;
            font-size: 1.5rem !important;
        }
        .fc-button-primary {
            background-color: #4e73df !important;
            border-color: #4e73df !important;
        }
        .fc-button-primary:hover {
            background-color: #2e59d9 !important;
            border-color: #2653d4 !important;
        }
        .fc-button-primary:disabled {
            background-color: #6c87e0 !important;
            border-color: #6c87e0 !important;
        }
        .fc-daygrid-day.fc-day-today {
            background-color: rgba(78, 115, 223, 0.1) !important;
        }
        .event-tooltip {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            padding: 10px;
            max-width: 300px;
        }
        .event-tooltip h5 {
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
        .event-tooltip p {
            margin-bottom: 5px;
        }
        .legend-item {
            display: inline-flex;
            align-items: center;
            margin-right: 15px;
            margin-bottom: 10px;
        }
        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 3px;
            margin-right: 5px;
        }
        .filters-container {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fc;
            border-radius: 5px;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mb-5\">
                <h1 class=\"display-4\">Calendrier des Réservations</h1>
                <p class=\"lead\">Visualisez et gérez votre planning de réservations</p>
            </div>
            
            <div id=\"calendar-container\">
                <!-- Filtres -->
                <div class=\"filters-container\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <label for=\"service-filter\"><strong>Filtrer par service:</strong></label>
                            <select id=\"service-filter\" class=\"form-control selectpicker\" data-live-search=\"true\">
                                <option value=\"\">Tous les services</option>
                                {% for service in services %}
                                    <option value=\"{{ service.idService }}\">{{ service.nom }} ({{ service.type }})</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"legend mt-3\">
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #e74a3b;\"></div> Réparation</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #1cc88a;\"></div> Entretien</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #f6c23e;\"></div> Diagnostic</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #36b9cc;\"></div> Lavage</div>
                                <div class=\"legend-item\"><div class=\"legend-color\" style=\"background-color: #3788d8;\"></div> Autre</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Calendrier -->
                <div id=\"calendar\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block scripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                locale: 'fr',
                timeZone: 'local',
                editable: true,
                selectable: true,
                selectMirror: true,
                dayMaxEvents: true,
                weekNumbers: true,
                navLinks: true,
                businessHours: {
                    daysOfWeek: [1, 2, 3, 4, 5, 6], // Lundi - Samedi
                    startTime: '08:00',
                    endTime: '18:00',
                },
                eventSources: [{
                    url: '{{ path(\"app_calendrier_events\") }}',
                    method: 'GET',
                    extraParams: function() {
                        return {
                            service: \$('#service-filter').val()
                        };
                    },
                    success: function(events) {
                        events.forEach(function(event) {
                            event.title = event.title || 'Sans titre';
                            event.start = event.start || new Date();
                        });
                    }
                }],
                eventDidMount: function(info) {
                    \$(info.el).tooltip({
                        title: function() {
                            return '<div class=\"event-tooltip\">' +
                                '<h5>' + (info.event.extendedProps.service || 'Service non spécifié') + '</h5>' +
                                '<p><strong>Client:</strong> ' + (info.event.extendedProps.client || 'Client non spécifié') + '</p>' +
                                '<p><strong>Véhicule:</strong> ' + (info.event.extendedProps.vehicule || 'Véhicule non spécifié') + '</p>' +
                                '<p>' + (info.event.extendedProps.description || '') + '</p>' +
                                '</div>';
                        },
                        html: true,
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body'
                    });
                    info.el.classList.add('calendar-event');
                },
                select: function(info) {
                    // TODO: Implémenter la création de réservation
                    console.log('Date sélectionnée:', info.startStr);
                },
                eventClick: function(info) {
                    // TODO: Implémenter la modification de réservation
                    console.log('Événement cliqué:', info.event.id);
                },
                eventDrop: function(info) {
                    // TODO: Implémenter le déplacement de réservation
                    console.log('Événement déplacé:', info.event.id);
                }
            
            });
            
            calendar.render();

            // Initialiser le sélecteur de service
            \$('.selectpicker').selectpicker();

            // Gérer le changement de filtre
            \$('#service-filter').on('change', function() {
                calendar.refetchEvents();
            });
        });
    </script>
{% endblock %}", "calendrier/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\calendrier\\index.html.twig");
    }
}
