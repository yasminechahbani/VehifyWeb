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

/* reservation/edit.html.twig */
class __TwigTemplate_7ed16542ca80419f221253cdc8423d70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        // line 2
        $context["active_page"] = "reservation";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "reservation/edit.html.twig", 1);
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
                <i class=\"fas fa-edit fa-2x text-primary me-3\"></i>
                <div>
                    <h2 class=\"mb-1\">Edit Reservation #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-0\">Modify reservation details</p>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            ";
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reservation/_form.html.twig", ["button_label" => "Save Changes", "btn_class" => "btn-primary"]);
        // line 20
        yield "

            <div class=\"border-top pt-4 mt-4\">
                <div class=\"d-flex gap-2\">
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to List
                    </a>
                    <form method=\"post\" action=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id_reservation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\" 
                          onsubmit=\"return confirm('Are you sure you want to delete this reservation?');\" 
                          style=\"display: inline-block;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30))), "html", null, true);
        yield "\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fas fa-trash me-2\"></i>Delete
                        </button>
                    </form>
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

.btn {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0a58ca !important;
    border-color: #0a58ca !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}

.text-primary {
    color: #0b5ed7 !important;
}

.form-control:focus {
    border-color: #0b5ed7;
    box-shadow: 0 0 0 0.25rem rgba(11, 94, 215, 0.25);
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
        return "reservation/edit.html.twig";
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
        return array (  116 => 30,  110 => 27,  104 => 24,  98 => 20,  96 => 17,  87 => 11,  79 => 5,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
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
                <i class=\"fas fa-edit fa-2x text-primary me-3\"></i>
                <div>
                    <h2 class=\"mb-1\">Edit Reservation #{{ reservation.id }}</h2>
                    <p class=\"text-muted mb-0\">Modify reservation details</p>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            {{ include('reservation/_form.html.twig', {
                'button_label': 'Save Changes',
                'btn_class': 'btn-primary'
            }) }}

            <div class=\"border-top pt-4 mt-4\">
                <div class=\"d-flex gap-2\">
                    <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to List
                    </a>
                    <form method=\"post\" action=\"{{ path('app_reservation_delete', {'id_reservation': reservation.id}) }}\" 
                          onsubmit=\"return confirm('Are you sure you want to delete this reservation?');\" 
                          style=\"display: inline-block;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fas fa-trash me-2\"></i>Delete
                        </button>
                    </form>
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

.btn {
    background-color: #0b5ed7 !important;
    border-color: #0b5ed7 !important;
    color: #fff !important;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0a58ca !important;
    border-color: #0a58ca !important;
    transform: translateY(-1px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}

.text-primary {
    color: #0b5ed7 !important;
}

.form-control:focus {
    border-color: #0b5ed7;
    box-shadow: 0 0 0 0.25rem rgba(11, 94, 215, 0.25);
}

.fas {
    width: 20px;
    text-align: center;
}
</style>
{% endblock %}
", "reservation/edit.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\reservation\\edit.html.twig");
    }
}
