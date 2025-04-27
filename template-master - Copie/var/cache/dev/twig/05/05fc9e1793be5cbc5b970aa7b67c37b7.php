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

/* facture/show.html.twig */
class __TwigTemplate_41490e28d17c2cb79106645d8459b082 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/show.html.twig"));

        // line 3
        $context["active_page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "facture/show.html.twig", 1);
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

        yield "Facture";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Détails de la Facture</h1>
            
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header bg-primary text-white\">
                            <h4>Informations de la facture</h4>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Numéro de Facture</th>
                                        <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 27, $this->source); })()), "numeroFacture", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Date de Facturation</th>
                                        <td>";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 31, $this->source); })()), "dateFacturation", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 31, $this->source); })()), "dateFacturation", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Montant</th>
                                        <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 35, $this->source); })()), "montant", [], "any", false, false, false, 35), "html", null, true);
        yield " €</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Statut</th>
                                        <td>
                                            ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 44, $this->source); })()), "statut", [], "any", false, false, false, 44) == "Payée")) {
            // line 45
            yield "                                                <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 45, $this->source); })()), "statut", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46) == "En attente")) {
            // line 47
            yield "                                                <span class=\"badge bg-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 47, $this->source); })()), "statut", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
                                            ";
        } else {
            // line 49
            yield "                                                <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 51
        yield "                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                            <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Modifier</a>
                            <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-danger\"><i class=\"fas fa-file-pdf\"></i> Générer PDF</a>
                            ";
        // line 61
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "facture/show.html.twig";
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
        return array (  197 => 61,  193 => 59,  189 => 58,  185 => 57,  177 => 51,  171 => 49,  165 => 47,  163 => 46,  158 => 45,  156 => 44,  148 => 39,  141 => 35,  134 => 31,  127 => 27,  120 => 23,  103 => 8,  90 => 7,  67 => 5,  56 => 1,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}

{% set active_page = 'home' %}

{% block title %}Facture{% endblock %}

{% block content %}
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Détails de la Facture</h1>
            
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header bg-primary text-white\">
                            <h4>Informations de la facture</h4>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ facture.id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Numéro de Facture</th>
                                        <td>{{ facture.numeroFacture }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date de Facturation</th>
                                        <td>{{ facture.dateFacturation ? facture.dateFacturation|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Montant</th>
                                        <td>{{ facture.montant }} €</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ facture.description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Statut</th>
                                        <td>
                                            {% if facture.statut == 'Payée' %}
                                                <span class=\"badge bg-success\">{{ facture.statut }}</span>
                                            {% elseif facture.statut == 'En attente' %}
                                                <span class=\"badge bg-warning\">{{ facture.statut }}</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">{{ facture.statut }}</span>
                                            {% endif %}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_facture_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                            <a href=\"{{ path('app_facture_edit', {'id': facture.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                            <a href=\"{{ path('app_facture_pdf', {'id': facture.id}) }}\" class=\"btn btn-danger\"><i class=\"fas fa-file-pdf\"></i> Générer PDF</a>
                            {# {{ include('facture/_delete_form.html.twig') }} #}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "facture/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\facture\\show.html.twig");
    }
}
