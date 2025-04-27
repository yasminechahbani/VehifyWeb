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
class __TwigTemplate_a2dcff7f41d61d887e839bd101b160a1 extends Template
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
              
                       
        

            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>ID</th>
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 38, $this->source); })()));
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
            // line 39
            yield "                                <tr>
                                    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                    <td>";
            // line 41
            ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 41)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "heureReservation", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                    <td>";
            // line 43
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "serviceId", [], "any", false, true, false, 43), "nom", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "serviceId", [], "any", false, true, false, 43), "nom", [], "any", false, false, false, 43)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "serviceId", [], "any", false, true, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td>";
            // line 44
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "vehiculeId", [], "any", false, true, false, 44), "immatriculation", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "vehiculeId", [], "any", false, true, false, 44), "immatriculation", [], "any", false, false, false, 44)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "vehiculeId", [], "any", false, true, false, 44), "immatriculation", [], "any", false, false, false, 44), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td>";
            // line 45
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, true, false, 45), "email", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, true, false, 45), "email", [], "any", false, false, false, 45)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "userId", [], "any", false, true, false, 45), "email", [], "any", false, false, false, 45), "html", null, true)) : (yield ""));
            yield "</td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            ";
            // line 54
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
            // line 59
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
        // line 66
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        return array (  209 => 66,  197 => 59,  179 => 54,  173 => 51,  167 => 48,  161 => 45,  157 => 44,  153 => 43,  149 => 42,  145 => 41,  141 => 40,  138 => 39,  120 => 38,  92 => 13,  86 => 10,  79 => 5,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
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
              
                       
        

            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>ID</th>
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
                                    <td>{{ reservation.id }}</td>
                                    <td>{{ reservation.dateReservation ? reservation.dateReservation|date('Y-m-d') : '' }}</td>
                                    <td>{{ reservation.heureReservation }}</td>
                                    <td>{{ reservation.serviceId.nom ?? '' }}</td>
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
        </div>
    </div>

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
