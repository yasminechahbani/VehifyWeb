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

/* vehicule/show.html.twig */
class __TwigTemplate_b26f91aa0c67a050d7a03f599c7ff7f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

        // line 2
        $context["active_page"] = "vehicules";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "vehicule/show.html.twig", 1);
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

        yield "Détails du véhicule";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg rounded-3\">
                <div class=\"card-header bg-primary p-4 border-0\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"text-white\">
                            <h3 class=\"h4 mb-1\">Détails du véhicule</h3>
                            <p class=\"mb-0 small\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 15, $this->source); })()), "marque", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 15, $this->source); })()), "modele", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
                        </div>
                        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                    </div>
                </div>

                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary-subtle mb-3\">
                            <i class=\"fas fa-car fa-2x text-primary\"></i>
                        </div>
                        <span class=\"badge bg-";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 28, $this->source); })()), "statut", [], "any", false, false, false, 28) == "Disponible")) ? ("success") : ("warning"));
        yield " px-3 py-2\">
                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 29, $this->source); })()), "statut", [], "any", false, false, false, 29), "html", null, true);
        yield "
                        </span>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-car text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Marque</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 40, $this->source); })()), "marque", [], "any", false, false, false, 40), "html", null, true);
        yield "</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-car-side text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Modèle</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 50, $this->source); })()), "modele", [], "any", false, false, false, 50), "html", null, true);
        yield "</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-hashtag text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Immatriculation</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 60, $this->source); })()), "immatriculation", [], "any", false, false, false, 60), "html", null, true);
        yield "</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-tags text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Type</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 70, $this->source); })()), "type", [], "any", false, false, false, 70), "html", null, true);
        yield "</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-palette text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Couleur</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 80, $this->source); })()), "couleur", [], "any", false, false, false, 80), "html", null, true);
        yield "</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-tachometer-alt text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Kilométrage</span>
                                </div>
                                <h6 class=\"mb-0\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 90, $this->source); })()), "kilometrage", [], "any", false, false, false, 90), "html", null, true);
        yield " km</h6>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-center gap-3 mt-4 pt-4 border-top\">
                        <a href=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 96, $this->source); })()), "getIdVehicule", [], "method", false, false, false, 96)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-primary\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier
                        </a>
                        ";
        // line 100
        yield Twig\Extension\CoreExtension::include($this->env, $context, "vehicule/_delete_form.html.twig");
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

.badge {
    font-size: 0.9rem;
    font-weight: 500;
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
        return "vehicule/show.html.twig";
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
        return array (  233 => 100,  226 => 96,  217 => 90,  204 => 80,  191 => 70,  178 => 60,  165 => 50,  152 => 40,  138 => 29,  134 => 28,  120 => 17,  113 => 15,  103 => 7,  90 => 6,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'vehicules' %}

{% block title %}Détails du véhicule{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg rounded-3\">
                <div class=\"card-header bg-primary p-4 border-0\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"text-white\">
                            <h3 class=\"h4 mb-1\">Détails du véhicule</h3>
                            <p class=\"mb-0 small\">{{ vehicule.marque }} {{ vehicule.modele }}</p>
                        </div>
                        <a href=\"{{ path('app_vehicule_index') }}\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                    </div>
                </div>

                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary-subtle mb-3\">
                            <i class=\"fas fa-car fa-2x text-primary\"></i>
                        </div>
                        <span class=\"badge bg-{{ vehicule.statut == 'Disponible' ? 'success' : 'warning' }} px-3 py-2\">
                            {{ vehicule.statut }}
                        </span>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-car text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Marque</span>
                                </div>
                                <h6 class=\"mb-0\">{{ vehicule.marque }}</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-car-side text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Modèle</span>
                                </div>
                                <h6 class=\"mb-0\">{{ vehicule.modele }}</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-hashtag text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Immatriculation</span>
                                </div>
                                <h6 class=\"mb-0\">{{ vehicule.immatriculation }}</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-tags text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Type</span>
                                </div>
                                <h6 class=\"mb-0\">{{ vehicule.type }}</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-palette text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Couleur</span>
                                </div>
                                <h6 class=\"mb-0\">{{ vehicule.couleur }}</h6>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"info-card bg-light p-3 rounded-3\">
                                <div class=\"d-flex align-items-center mb-2\">
                                    <i class=\"fas fa-tachometer-alt text-primary me-2\"></i>
                                    <span class=\"text-muted small\">Kilométrage</span>
                                </div>
                                <h6 class=\"mb-0\">{{ vehicule.kilometrage }} km</h6>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-center gap-3 mt-4 pt-4 border-top\">
                        <a href=\"{{ path('app_vehicule_edit', {'idVehicule': vehicule.getIdVehicule()}) }}\" 
                           class=\"btn btn-primary\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier
                        </a>
                        {{ include('vehicule/_delete_form.html.twig') }}
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

.badge {
    font-size: 0.9rem;
    font-weight: 500;
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
", "vehicule/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\vehicule\\show.html.twig");
    }
}
