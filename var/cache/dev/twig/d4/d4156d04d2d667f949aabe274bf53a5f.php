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

/* carte_grise/show.html.twig */
class __TwigTemplate_a7b1e23b1a8ed57dbb6c6fab30065d2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/show.html.twig"));

        // line 2
        $context["active_page"] = "Carte Grise";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "carte_grise/show.html.twig", 1);
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

        yield "Détails de la carte grise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg rounded-3\">
                <div class=\"card-header bg-primary p-4 border-0\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"text-white\">
                            <h3 class=\"h4 mb-1\">Détails de la carte grise</h3>
                            <p class=\"mb-0 small\">Informations complètes</p>
                        </div>
                        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_index");
        yield "\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                    </div>
                </div>

                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary-subtle mb-3\">
                            <i class=\"fas fa-id-card fa-2x text-primary\"></i>
                        </div>
                        <h5 class=\"fw-bold\">Carte Grise N° ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 28, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 28), "html", null, true);
        yield "</h5>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-user text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Propriétaire</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 38, $this->source); })()), "proprietaire", [], "any", false, false, false, 38), "html", null, true);
        yield "</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-map-marker-alt text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Adresse</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 48, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 48), "html", null, true);
        yield "</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-calendar-plus text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Date d'émission</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 58
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 58, $this->source); })()), "dateEmission", [], "any", false, false, false, 58)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 58, $this->source); })()), "dateEmission", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true)) : (yield "Non spécifiée"));
        yield "</h6>
                            </div>
                        </div>

                        <!-- Removed date expiration card -->

                    </div>

                    <div class=\"d-flex justify-content-center gap-3 mt-4 pt-4 border-top\">
                        <a href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_edit", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 67, $this->source); })()), "getIdCarteGrise", [], "method", false, false, false, 67)]), "html", null, true);
        yield "\"
                           class=\"btn btn-primary\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier
                        </a>
                        ";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "carte_grise/_delete_form.html.twig");
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.info-card {
    height: 100%;
    transition: transform 0.2s;
}

.info-card:hover {
    transform: translateY(-3px);
}

.bg-primary-subtle {
    background-color: rgba(13, 110, 253, 0.1);
}

.text-primary {
    color: #0d6efd !important;
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
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
        return "carte_grise/show.html.twig";
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
        return array (  187 => 71,  180 => 67,  168 => 58,  155 => 48,  142 => 38,  129 => 28,  115 => 17,  103 => 7,  90 => 6,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'Carte Grise' %}

{% block title %}Détails de la carte grise{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg rounded-3\">
                <div class=\"card-header bg-primary p-4 border-0\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"text-white\">
                            <h3 class=\"h4 mb-1\">Détails de la carte grise</h3>
                            <p class=\"mb-0 small\">Informations complètes</p>
                        </div>
                        <a href=\"{{ path('app_carte_grise_index') }}\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                    </div>
                </div>

                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary-subtle mb-3\">
                            <i class=\"fas fa-id-card fa-2x text-primary\"></i>
                        </div>
                        <h5 class=\"fw-bold\">Carte Grise N° {{ carte_grise.numeroCarteGrise }}</h5>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-user text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Propriétaire</span>
                                </div>
                                <h6 class=\"mb-0\">{{ carte_grise.proprietaire }}</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-map-marker-alt text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Adresse</span>
                                </div>
                                <h6 class=\"mb-0\">{{ carte_grise.adresseProprietaire }}</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-calendar-plus text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Date d'émission</span>
                                </div>
                                <h6 class=\"mb-0\">{{ carte_grise.dateEmission ? carte_grise.dateEmission|date('d/m/Y') : 'Non spécifiée' }}</h6>
                            </div>
                        </div>

                        <!-- Removed date expiration card -->

                    </div>

                    <div class=\"d-flex justify-content-center gap-3 mt-4 pt-4 border-top\">
                        <a href=\"{{ path('app_carte_grise_edit', {'idCarteGrise': carte_grise.getIdCarteGrise()}) }}\"
                           class=\"btn btn-primary\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier
                        </a>
                        {{ include('carte_grise/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.info-card {
    height: 100%;
    transition: transform 0.2s;
}

.info-card:hover {
    transform: translateY(-3px);
}

.bg-primary-subtle {
    background-color: rgba(13, 110, 253, 0.1);
}

.text-primary {
    color: #0d6efd !important;
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}
</style>
{% endblock %}
", "carte_grise/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\carte_grise\\show.html.twig");
    }
}
