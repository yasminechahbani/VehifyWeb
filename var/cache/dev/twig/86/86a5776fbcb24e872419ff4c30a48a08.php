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

/* reservation/show.html.twig */
class __TwigTemplate_af36f55b57e7fe2244cae79bbba8e44d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        // line 2
        $context["active_page"] = "reservation";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "reservation/show.html.twig", 1);
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
        yield "<div class=\"container py-5\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-calendar-check fa-2x text-primary me-3\"></i>
                <div>
                    <h2 class=\"mb-1\">Reservation Details #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-0\">View and manage reservation information</p>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-user me-2\"></i>Client Information</h5>
                        <p><strong>Name:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "userId", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "userId", [], "any", false, false, false, 21), "prenom", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-clock me-2\"></i>Appointment Details</h5>
                        <p><strong>Date:</strong> ";
        // line 26
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "dateReservation", [], "any", false, false, false, 26)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "dateReservation", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true)) : (yield ""));
        yield "</p>
                        <p><strong>Time:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "heureReservation", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-car me-2\"></i>Vehicle Information</h5>
                        <p><strong>Vehicle:</strong> ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "vehiculeId", [], "any", false, false, false, 34), "marque", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                        <p><strong>Registration:</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "vehiculeId", [], "any", false, false, false, 35), "immatriculation", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-tools me-2\"></i>Service Details</h5>
                        <p><strong>Service:</strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), "serviceId", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
                        <p><strong>Price:</strong> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "serviceId", [], "any", false, false, false, 41), "prix", [], "any", false, false, false, 41), "html", null, true);
        yield " TND</p>
                    </div>
                </div>
            </div>

            <div class=\"border-top pt-4 mt-4\">
                <div class=\"d-flex gap-2\">
                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to List
                    </a>
                    <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i>Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.card-header {
    border-bottom: 1px solid rgba(0,0,0,.1);
}

.info-group {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 0.5rem;
}

.btn {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}

.text-primary {
    color: #4a90e2 !important;
}

strong {
    color: #495057;
}

.fas {
    width: 20px;
    text-align: center;
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
        return "reservation/show.html.twig";
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
        return array (  156 => 51,  150 => 48,  140 => 41,  136 => 40,  128 => 35,  124 => 34,  114 => 27,  110 => 26,  100 => 21,  87 => 11,  79 => 5,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'reservation' %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-calendar-check fa-2x text-primary me-3\"></i>
                <div>
                    <h2 class=\"mb-1\">Reservation Details #{{ reservation.id }}</h2>
                    <p class=\"text-muted mb-0\">View and manage reservation information</p>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-user me-2\"></i>Client Information</h5>
                        <p><strong>Name:</strong> {{ reservation.userId.nom }} {{ reservation.userId.prenom }}</p>
                    </div>
                    
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-clock me-2\"></i>Appointment Details</h5>
                        <p><strong>Date:</strong> {{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : '' }}</p>
                        <p><strong>Time:</strong> {{ reservation.heureReservation }}</p>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-car me-2\"></i>Vehicle Information</h5>
                        <p><strong>Vehicle:</strong> {{ reservation.vehiculeId.marque }}</p>
                        <p><strong>Registration:</strong> {{ reservation.vehiculeId.immatriculation }}</p>
                    </div>
                    
                    <div class=\"info-group mb-4\">
                        <h5 class=\"text-primary mb-3\"><i class=\"fas fa-tools me-2\"></i>Service Details</h5>
                        <p><strong>Service:</strong> {{ reservation.serviceId.nom }}</p>
                        <p><strong>Price:</strong> {{ reservation.serviceId.prix }} TND</p>
                    </div>
                </div>
            </div>

            <div class=\"border-top pt-4 mt-4\">
                <div class=\"d-flex gap-2\">
                    <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to List
                    </a>
                    <a href=\"{{ path('app_reservation_edit', {'id_reservation': reservation.id}) }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i>Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.card-header {
    border-bottom: 1px solid rgba(0,0,0,.1);
}

.info-group {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 0.5rem;
}

.btn {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}

.text-primary {
    color: #4a90e2 !important;
}

strong {
    color: #495057;
}

.fas {
    width: 20px;
    text-align: center;
}
</style>
{% endblock %}
", "reservation/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\reservation\\show.html.twig");
    }
}
