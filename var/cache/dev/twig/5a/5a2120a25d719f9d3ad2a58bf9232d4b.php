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

/* reservation/index.html.twig */
class __TwigTemplate_ff7eab9c396a6f2a26ac34f1833753ce extends Template
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
        return "baseFhomePage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        // line 2
        $context["active_page"] = "reservation";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "reservation/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"display-4\"><i class=\"fas fa-calendar-check me-3\"></i>Reservations Management</h1>
                <div>
                    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serviceFClient");
        yield "\" class=\"btn btn-success me-2\">
                        <i class=\"fas fa-plus-circle me-2\"></i>New Reservation
                    </a>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        yield "\" class=\"btn btn-info\">
                        <i class=\"fas fa-file-invoice me-2\"></i>Invoices List
                    </a>
                </div>
            </div>
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title mb-3\">Rechercher des réservations</h5>
                    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 align-items-end"]]);
        yield "
                        <div class=\"col-md-4\">
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 23, $this->source); })()), "dateReservation", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control shadow-sm", "placeholder" => "Select Date"]]);
        // line 25
        yield "
                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 28, $this->source); })()), "serviceId", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control shadow-sm", "placeholder" => "Select Service"]]);
        // line 30
        yield "
                        </div>
                        <div class=\"col-md-4 d-flex align-items-end\">
                            <button type=\"submit\" class=\"btn btn-primary shadow-sm\">
                                <i class=\"fas fa-search me-2\"></i>Rechercher
                            </button>
                            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-secondary ms-2 shadow-sm\">
                                <i class=\"fas fa-redo me-2\"></i>Réinitialiser
                            </a>
                        </div>
                    ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
              
                       
        

            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Service</th>
                                    <th>Vehicle</th>
                                    <th>Client</th>
                                    <th class=\"text-end\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 66
            yield "                                <tr>
                                    <td>";
            // line 67
            ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 67)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "heureReservation", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                    <td>";
            // line 69
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idService", [], "any", false, true, false, 69), "nom", [], "any", true, true, false, 69) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idService", [], "any", false, true, false, 69), "nom", [], "any", false, false, false, 69)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idService", [], "any", false, true, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td>";
            // line 70
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "vehiculeId", [], "any", false, true, false, 70), "immatriculation", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "vehiculeId", [], "any", false, true, false, 70), "immatriculation", [], "any", false, false, false, 70)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "vehiculeId", [], "any", false, true, false, 70), "immatriculation", [], "any", false, false, false, 70), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td>";
            // line 71
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, true, false, 71), "email", [], "any", true, true, false, 71) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, true, false, 71), "email", [], "any", false, false, false, 71)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, true, false, 71), "email", [], "any", false, false, false, 71), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            ";
            // line 80
            yield Twig\Extension\CoreExtension::include($this->env, $context, "reservation/_delete_form.html.twig");
            yield "
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 85
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center py-4 text-muted\">
                                        <i class=\"fas fa-inbox fa-3x mb-3\"></i>
                                        <p class=\"mb-0\">No reservations found</p>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            ";
        // line 98
        yield "           

<style>
.btn-group .btn {
    padding: 0.25rem 0.5rem;
    margin: 0 2px;
}

.btn-success, .btn-info, .btn-primary, .btn-secondary, 
.btn-outline-info, .btn-outline-primary {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
}

.btn-success:hover, .btn-info:hover, .btn-primary:hover, 
.btn-secondary:hover, .btn-outline-info:hover, .btn-outline-primary:hover {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}

.table th {
    font-weight: 600;
    color: #495057;
}

.card {
    border: none;
    margin-bottom: 1.5rem;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.card-header {
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.table td {
    vertical-align: middle;
}
</style>
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
        return "reservation/index.html.twig";
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
        return array (  252 => 98,  245 => 92,  233 => 85,  215 => 80,  209 => 77,  203 => 74,  197 => 71,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  178 => 66,  160 => 65,  132 => 40,  125 => 36,  117 => 30,  115 => 28,  110 => 25,  108 => 23,  103 => 21,  92 => 13,  86 => 10,  79 => 5,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'reservation' %}

{% block content %}
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"display-4\"><i class=\"fas fa-calendar-check me-3\"></i>Reservations Management</h1>
                <div>
                    <a href=\"{{path('app_serviceFClient')}}\" class=\"btn btn-success me-2\">
                        <i class=\"fas fa-plus-circle me-2\"></i>New Reservation
                    </a>
                    <a href=\"{{ path('app_facture_index') }}\" class=\"btn btn-info\">
                        <i class=\"fas fa-file-invoice me-2\"></i>Invoices List
                    </a>
                </div>
            </div>
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <h5 class=\"card-title mb-3\">Rechercher des réservations</h5>
                    {{ form_start(search_form, {'attr': {'class': 'row g-3 align-items-end'}}) }}
                        <div class=\"col-md-4\">
                            {{ form_row(search_form.dateReservation, {
                                'attr': {'class': 'form-control shadow-sm', 'placeholder': 'Select Date'}
                            }) }}
                        </div>
                        <div class=\"col-md-4\">
                            {{ form_row(search_form.serviceId, {
                                'attr': {'class': 'form-control shadow-sm', 'placeholder': 'Select Service'}
                            }) }}
                        </div>
                        <div class=\"col-md-4 d-flex align-items-end\">
                            <button type=\"submit\" class=\"btn btn-primary shadow-sm\">
                                <i class=\"fas fa-search me-2\"></i>Rechercher
                            </button>
                            <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-secondary ms-2 shadow-sm\">
                                <i class=\"fas fa-redo me-2\"></i>Réinitialiser
                            </a>
                        </div>
                    {{ form_end(search_form) }}
                </div>
            </div>
        </div>
    </div>
              
                       
        

            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Service</th>
                                    <th>Vehicle</th>
                                    <th>Client</th>
                                    <th class=\"text-end\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for reservation in reservations %}
                                <tr>
                                    <td>{{ reservation.dateReservation ? reservation.dateReservation|date('Y-m-d') : '' }}</td>
                                    <td>{{ reservation.heureReservation }}</td>
                                    <td>{{ reservation.idService.nom ?? '' }}</td>
                                    <td>{{ reservation.vehiculeId.immatriculation ?? '' }}</td>
                                    <td>{{ reservation.userId.email ?? '' }}</td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('app_reservation_show', {'id_reservation': reservation.id}) }}\" class=\"btn btn-outline-info btn-sm\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_reservation_edit', {'id_reservation': reservation.id}) }}\" class=\"btn btn-outline-primary btn-sm\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            {{ include('reservation/_delete_form.html.twig') }}
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"text-center py-4 text-muted\">
                                        <i class=\"fas fa-inbox fa-3x mb-3\"></i>
                                        <p class=\"mb-0\">No reservations found</p>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {# Ajouter le formulaire de recherche #}
           

<style>
.btn-group .btn {
    padding: 0.25rem 0.5rem;
    margin: 0 2px;
}

.btn-success, .btn-info, .btn-primary, .btn-secondary, 
.btn-outline-info, .btn-outline-primary {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
}

.btn-success:hover, .btn-info:hover, .btn-primary:hover, 
.btn-secondary:hover, .btn-outline-info:hover, .btn-outline-primary:hover {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}

.table th {
    font-weight: 600;
    color: #495057;
}

.card {
    border: none;
    margin-bottom: 1.5rem;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.card-header {
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.table td {
    vertical-align: middle;
}
</style>
{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\reservation\\index.html.twig");
    }
}
