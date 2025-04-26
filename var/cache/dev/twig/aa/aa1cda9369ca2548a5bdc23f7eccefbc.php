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

/* carte_grise/index.html.twig */
class __TwigTemplate_acd2c170876d179ed59ea7278fc2ae5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/index.html.twig"));

        // line 2
        $context["active_page"] = "Carte Grise";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "carte_grise/index.html.twig", 1);
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

        yield "Carte Grise";
        
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-id-card me-2\"></i>Cartes Grises</h4>
                        <p class=\"text-muted small mb-0\">Liste complète des cartes grises enregistrées</p>
                    </div>
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Nouvelle Carte Grise
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carte_grises"]) || array_key_exists("carte_grises", $context) ? $context["carte_grises"] : (function () { throw new RuntimeError('Variable "carte_grises" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carte_grise"]) {
            // line 24
            yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"card h-100 border-0 shadow-sm\">
                                    <div class=\"position-relative\">
                                        <div class=\"position-absolute top-0 end-0 p-3\">
                                            <span class=\"badge bg-primary\">
                                                #";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "numeroCarteGrise", [], "any", false, false, false, 29), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"mb-3\">
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <i class=\"fas fa-user me-2 text-primary\"></i>
                                                <h6 class=\"mb-0\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "proprietaire", [], "any", false, false, false, 37), "html", null, true);
            yield "</h6>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                                <p class=\"small text-muted mb-0\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "adresseProprietaire", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                                            </div>
                                        </div>
                                        
                                        <div class=\"row g-2 mb-3\">
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Date d'émission</small>
                                                    <strong>";
            // line 49
            ((CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "dateEmission", [], "any", false, false, false, 49)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "dateEmission", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true)) : (yield "N/A"));
            yield "</strong>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Date d'expiration</small>
                                                    <strong>";
            // line 55
            ((CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "dateExpiration", [], "any", false, false, false, 55)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "dateExpiration", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true)) : (yield "N/A"));
            yield "</strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"d-flex gap-2\">
                                            <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_show", ["id_carte_grise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "idCarteGrise", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-outline-primary flex-grow-1\">
                                                <i class=\"fas fa-eye me-2\"></i>Détails
                                            </a>
                                            <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_edit", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "getIdCarteGrise", [], "method", false, false, false, 65)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-primary flex-grow-1\">
                                                <i class=\"fas fa-edit me-2\"></i>Modifier
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            yield "                            <div class=\"col-12\">
                                <div class=\"alert alert-info text-center\">
                                    <i class=\"fas fa-info-circle me-2\"></i>Aucune carte grise trouvée
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carte_grise'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
    color: white;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}

.btn-outline-primary {
    color: #0d6efd;
    border-color: #0d6efd;
}

.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
}

.text-primary {
    color: #0d6efd !important;
}

.bg-primary {
    background-color: #0d6efd !important;
}

.card {
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
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
        return "carte_grise/index.html.twig";
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
        return array (  215 => 80,  204 => 74,  190 => 65,  183 => 61,  174 => 55,  165 => 49,  154 => 41,  147 => 37,  136 => 29,  129 => 24,  124 => 23,  114 => 16,  103 => 7,  90 => 6,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'Carte Grise' %}

{% block title %}Carte Grise{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-id-card me-2\"></i>Cartes Grises</h4>
                        <p class=\"text-muted small mb-0\">Liste complète des cartes grises enregistrées</p>
                    </div>
                    <a href=\"{{ path('app_carte_grise_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Nouvelle Carte Grise
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        {% for carte_grise in carte_grises %}
                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"card h-100 border-0 shadow-sm\">
                                    <div class=\"position-relative\">
                                        <div class=\"position-absolute top-0 end-0 p-3\">
                                            <span class=\"badge bg-primary\">
                                                #{{ carte_grise.numeroCarteGrise }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"mb-3\">
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <i class=\"fas fa-user me-2 text-primary\"></i>
                                                <h6 class=\"mb-0\">{{ carte_grise.proprietaire }}</h6>
                                            </div>
                                            <div class=\"d-flex align-items-center mb-2\">
                                                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                                <p class=\"small text-muted mb-0\">{{ carte_grise.adresseProprietaire }}</p>
                                            </div>
                                        </div>
                                        
                                        <div class=\"row g-2 mb-3\">
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Date d'émission</small>
                                                    <strong>{{ carte_grise.dateEmission ? carte_grise.dateEmission|date('d/m/Y') : 'N/A' }}</strong>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Date d'expiration</small>
                                                    <strong>{{ carte_grise.dateExpiration ? carte_grise.dateExpiration|date('d/m/Y') : 'N/A' }}</strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"d-flex gap-2\">
                                            <a href=\"{{ path('app_carte_grise_show', {'id_carte_grise': carte_grise.idCarteGrise}) }}\" 
                                               class=\"btn btn-outline-primary flex-grow-1\">
                                                <i class=\"fas fa-eye me-2\"></i>Détails
                                            </a>
                                            <a href=\"{{ path('app_carte_grise_edit', {'idCarteGrise': carte_grise.getIdCarteGrise()}) }}\" 
                                               class=\"btn btn-primary flex-grow-1\">
                                                <i class=\"fas fa-edit me-2\"></i>Modifier
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"col-12\">
                                <div class=\"alert alert-info text-center\">
                                    <i class=\"fas fa-info-circle me-2\"></i>Aucune carte grise trouvée
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
    color: white;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}

.btn-outline-primary {
    color: #0d6efd;
    border-color: #0d6efd;
}

.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
}

.text-primary {
    color: #0d6efd !important;
}

.bg-primary {
    background-color: #0d6efd !important;
}

.card {
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}
</style>
{% endblock %}
", "carte_grise/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\carte_grise\\index.html.twig");
    }
}
