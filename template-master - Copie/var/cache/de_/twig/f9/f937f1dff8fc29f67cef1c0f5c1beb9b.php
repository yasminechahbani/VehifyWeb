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

/* paiement/show.html.twig */
class __TwigTemplate_89d48b972f6d3b8b419a3e3dbeb492db extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/show.html.twig"));

        // line 3
        $context["active_page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "paiement/show.html.twig", 1);
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

        yield "Détails du Paiement";
        
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
        <div class=\"container\">
            <h1 class=\"display-4 mb-4\">Détails du Paiement</h1>

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Réservation</th>
                                <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 22, $this->source); })()), "reservation", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 22, $this->source); })()), "reservation", [], "any", false, false, false, 22), "dateReservation", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 22, $this->source); })()), "reservation", [], "any", false, false, false, 22), "heureReservation", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date de paiement</th>
                                <td>";
        // line 26
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 26, $this->source); })()), "datePaiement", [], "any", false, false, false, 26)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 26, $this->source); })()), "datePaiement", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
                            </tr>
                            <tr>
                                <th>Prix</th>
                                <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 30, $this->source); })()), "prix", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Statut</th>
                                <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 34, $this->source); })()), "statut", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Numéro de carte</th>
                                <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 38, $this->source); })()), "numeroCarte", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date d'expiration</th>
                                <td>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 42, $this->source); })()), "dateExpiration", [], "any", false, false, false, 42), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Nom du titulaire</th>
                                <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 46, $this->source); })()), "nomTitulaireCarte", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Téléphone</th>
                                <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 50, $this->source); })()), "telephone", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new RuntimeError('Variable "paiement" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Modifier</a>
                ";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "paiement/_delete_form.html.twig");
        yield "
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
        return "paiement/show.html.twig";
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
        return array (  194 => 60,  190 => 59,  186 => 58,  175 => 50,  168 => 46,  161 => 42,  154 => 38,  147 => 34,  140 => 30,  133 => 26,  122 => 22,  115 => 18,  103 => 8,  90 => 7,  67 => 5,  56 => 1,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% set active_page = 'home' %}

{% block title %}Détails du Paiement{% endblock %}

{% block content %}
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <h1 class=\"display-4 mb-4\">Détails du Paiement</h1>

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ paiement.id }}</td>
                            </tr>
                            <tr>
                                <th>Réservation</th>
                                <td>{{ paiement.reservation.id }} - {{ paiement.reservation.dateReservation|date('Y-m-d') }} - {{ paiement.reservation.heureReservation }}</td>
                            </tr>
                            <tr>
                                <th>Date de paiement</th>
                                <td>{{ paiement.datePaiement ? paiement.datePaiement|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                            <tr>
                                <th>Prix</th>
                                <td>{{ paiement.prix }}</td>
                            </tr>
                            <tr>
                                <th>Statut</th>
                                <td>{{ paiement.statut }}</td>
                            </tr>
                            <tr>
                                <th>Numéro de carte</th>
                                <td>{{ paiement.numeroCarte }}</td>
                            </tr>
                            <tr>
                                <th>Date d'expiration</th>
                                <td>{{ paiement.dateExpiration }}</td>
                            </tr>
                            <tr>
                                <th>Nom du titulaire</th>
                                <td>{{ paiement.nomTitulaireCarte }}</td>
                            </tr>
                            <tr>
                                <th>Téléphone</th>
                                <td>{{ paiement.telephone }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_paiement_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                <a href=\"{{ path('app_paiement_edit', {'id': paiement.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                {{ include('paiement/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}", "paiement/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\paiement\\show.html.twig");
    }
}
