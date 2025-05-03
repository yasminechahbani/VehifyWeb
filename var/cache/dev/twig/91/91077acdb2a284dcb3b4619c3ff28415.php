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

/* equipement/show.html.twig */
class __TwigTemplate_e3ba84a2ed89828986c534e306528140 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipement/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Équipement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEquipement</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 12, $this->source); })()), "idEquipement", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 24, $this->source); })()), "categorie", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>État</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 28, $this->source); })()), "etat", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Guide d'utilisation</th>
                <td>
                    ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 33, $this->source); })()), "guideUtilisation", [], "any", false, false, false, 33)) {
            // line 34
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_generate_pdf_guide", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 34, $this->source); })()), "idEquipement", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-primary mt-2\" target=\"_blank\">
                            <i class=\"fas fa-file-pdf me-2\"></i>Afficher le PDF
                        </a>
                    ";
        }
        // line 38
        yield "                </td>
            </tr>
            <tr>
                <th>Employé</th>
                <td>";
        // line 42
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 42, $this->source); })()), "employe", [], "any", false, false, false, 42)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 42, $this->source); })()), "employe", [], "any", false, false, false, 42), "prenom", [], "any", false, false, false, 42) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 42, $this->source); })()), "employe", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42)), "html", null, true)) : (yield "Non assigné"));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
    <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_edit", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 48, $this->source); })()), "idEquipement", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>

    ";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "equipement/_delete_form.html.twig");
        yield "
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
        return "equipement/show.html.twig";
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
        return array (  179 => 50,  174 => 48,  170 => 47,  162 => 42,  156 => 38,  148 => 34,  146 => 33,  138 => 28,  131 => 24,  124 => 20,  117 => 16,  110 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Équipement{% endblock %}

{% block body %}
    <h1>{{ equipement.nom }}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEquipement</th>
                <td>{{ equipement.idEquipement }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ equipement.nom }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ equipement.description }}</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>{{ equipement.categorie }}</td>
            </tr>
            <tr>
                <th>État</th>
                <td>{{ equipement.etat }}</td>
            </tr>
            <tr>
                <th>Guide d'utilisation</th>
                <td>
                    {% if equipement.guideUtilisation %}
                        <a href=\"{{ path('app_equipement_generate_pdf_guide', {'idEquipement': equipement.idEquipement}) }}\" class=\"btn btn-primary mt-2\" target=\"_blank\">
                            <i class=\"fas fa-file-pdf me-2\"></i>Afficher le PDF
                        </a>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Employé</th>
                <td>{{ equipement.employe ? equipement.employe.prenom ~ ' ' ~ equipement.employe.nom : 'Non assigné' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_equipement_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
    <a href=\"{{ path('app_equipement_edit', {'idEquipement': equipement.idEquipement}) }}\" class=\"btn btn-warning\">Modifier</a>

    {{ include('equipement/_delete_form.html.twig') }}
{% endblock %}", "equipement/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\equipement\\show.html.twig");
    }
}
