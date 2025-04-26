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

/* vin/vin.html.twig */
class __TwigTemplate_122eef500a7d385358e298304c775def extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseEmployeFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vin/vin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vin/vin.html.twig"));

        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "vin/vin.html.twig", 1);
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

        yield "Vérification Carte Grise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vin.css"), "html", null, true);
        yield "\">
    <style>
        #car-container {
            width: 100%;
            height: 400px;
            background: #f5f5f5;
            border-radius: 8px;
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        #car-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        #car-image:hover {
            transform: scale(1.05);
        }
        .welcome-section {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            color: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .progress-tracker {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
            position: relative;
        }
        .progress-step {
            flex: 1;
            text-align: center;
            position: relative;
            padding: 1rem;
        }
        .progress-step::before {
            content: '';
            width: 30px;
            height: 30px;
            background: #e9ecef;
            border-radius: 50%;
            display: block;
            margin: 0 auto 10px;
            border: 3px solid #fff;
            box-shadow: 0 0 0 3px #007bff;
        }
        .progress-step.active::before {
            background: #007bff;
        }
        .progress-step.completed::before {
            background: #28a745;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"welcome-section text-center\">
                    <h1>Bienvenue sur le système de vérification</h1>
                    <p class=\"lead\">Suivez les étapes pour effectuer une vérification complète du véhicule</p>
                </div>

    

                <div class=\"vin-form-container\">

                    <form method=\"post\" action=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_check_vin");
        yield "\" class=\"vin-form\">
                        <div class=\"mb-4\">
                            <label for=\"vin\" class=\"form-label\">Numéro VIN</label>
                            <input type=\"text\" 
                                   name=\"vin\" 
                                   id=\"vin\" 
                                   class=\"form-control\" 
                                   value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("vin", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["vin"]) || array_key_exists("vin", $context) ? $context["vin"] : (function () { throw new RuntimeError('Variable "vin" does not exist.', 93, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                   placeholder=\"Entrez le numéro VIN\"
                                   required>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary vin-submit-btn\">
                                Vérifier
                            </button>
                        </div>
                    </form>

                    ";
        // line 105
        if ((array_key_exists("carteGrise", $context) && (isset($context["carteGrise"]) || array_key_exists("carteGrise", $context) ? $context["carteGrise"] : (function () { throw new RuntimeError('Variable "carteGrise" does not exist.', 105, $this->source); })()))) {
            // line 106
            yield "                        <div class=\"mt-4\">
                            <h3 class=\"text-center mb-3\">Détails de la Carte Grise</h3>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Colonne</th>
                                                <th>Valeur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carteGrise"]) || array_key_exists("carteGrise", $context) ? $context["carteGrise"] : (function () { throw new RuntimeError('Variable "carteGrise" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 119
                yield "                                                <tr>
                                                    <td>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</td>
                                                    <td>";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 130
        yield "
                    ";
        // line 131
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 131, $this->source); })()))) {
            // line 132
            yield "                        <div class=\"alert alert-danger mt-3\">
                            ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 133, $this->source); })()), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 136
        yield "
                    ";
        // line 137
        if (((array_key_exists("showButton", $context) && (isset($context["showButton"]) || array_key_exists("showButton", $context) ? $context["showButton"] : (function () { throw new RuntimeError('Variable "showButton" does not exist.', 137, $this->source); })())) && ( !array_key_exists("error", $context) ||  !(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 137, $this->source); })())))) {
            // line 138
            yield "                        <div class=\"text-center mt-4\">
                            <a href=\"";
            // line 139
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif");
            yield "\" class=\"btn btn-primary\">
                                Commencer la vérification
                            </a>
                        </div>
                    ";
        }
        // line 144
        yield "
                    ";
        // line 145
        if ((array_key_exists("vehicule", $context) && (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 145, $this->source); })()))) {
            // line 146
            yield "                        <div class=\"mt-4\">
                            <h3 class=\"text-center mb-3\">Informations du Véhicule</h3>
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <p><strong>VIN:</strong> ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 150, $this->source); })()), "vin", [], "any", false, false, false, 150), "html", null, true);
            yield "</p>
                                    <p><strong>Marque:</strong> ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 151, $this->source); })()), "marque", [], "any", false, false, false, 151), "html", null, true);
            yield "</p>
                                    <p><strong>Modèle:</strong> ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 152, $this->source); })()), "modele", [], "any", false, false, false, 152), "html", null, true);
            yield "</p>
                                    <p><strong>Année:</strong> ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 153, $this->source); })()), "annee", [], "any", false, false, false, 153), "html", null, true);
            yield "</p>
                                </div>
                            </div>

                            ";
            // line 157
            if ((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 157, $this->source); })())) {
                // line 158
                yield "                                <h3 class=\"text-center mb-3\">Dernière Réservation</h3>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <p><strong>Date:</strong> ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 161, $this->source); })()), "dateReservation", [], "any", false, false, false, 161), "d/m/Y"), "html", null, true);
                yield "</p>
                                        <p><strong>Heure:</strong> ";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 162, $this->source); })()), "heureReservation", [], "any", false, false, false, 162), "html", null, true);
                yield "</p>
                                        ";
                // line 163
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 163, $this->source); })()), "serviceId", [], "any", false, false, false, 163)) {
                    // line 164
                    yield "                                            <p><strong>Service:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 164, $this->source); })()), "serviceId", [], "any", false, false, false, 164), "nom", [], "any", false, false, false, 164), "html", null, true);
                    yield "</p>
                                        ";
                }
                // line 166
                yield "                                    </div>
                                </div>
                            ";
            }
            // line 169
            yield "                        </div>
                    ";
        }
        // line 171
        yield "                </div>
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
        return "vin/vin.html.twig";
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
        return array (  394 => 171,  390 => 169,  385 => 166,  379 => 164,  377 => 163,  373 => 162,  369 => 161,  364 => 158,  362 => 157,  355 => 153,  351 => 152,  347 => 151,  343 => 150,  337 => 146,  335 => 145,  332 => 144,  324 => 139,  321 => 138,  319 => 137,  316 => 136,  310 => 133,  307 => 132,  305 => 131,  302 => 130,  294 => 124,  285 => 121,  281 => 120,  278 => 119,  274 => 118,  260 => 106,  258 => 105,  243 => 93,  233 => 86,  219 => 74,  206 => 73,  192 => 70,  179 => 69,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseEmployeFront.html.twig' %}

{% block title %}Vérification Carte Grise{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/vin.css') }}\">
    <style>
        #car-container {
            width: 100%;
            height: 400px;
            background: #f5f5f5;
            border-radius: 8px;
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        #car-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        #car-image:hover {
            transform: scale(1.05);
        }
        .welcome-section {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            color: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .progress-tracker {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
            position: relative;
        }
        .progress-step {
            flex: 1;
            text-align: center;
            position: relative;
            padding: 1rem;
        }
        .progress-step::before {
            content: '';
            width: 30px;
            height: 30px;
            background: #e9ecef;
            border-radius: 50%;
            display: block;
            margin: 0 auto 10px;
            border: 3px solid #fff;
            box-shadow: 0 0 0 3px #007bff;
        }
        .progress-step.active::before {
            background: #007bff;
        }
        .progress-step.completed::before {
            background: #28a745;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"welcome-section text-center\">
                    <h1>Bienvenue sur le système de vérification</h1>
                    <p class=\"lead\">Suivez les étapes pour effectuer une vérification complète du véhicule</p>
                </div>

    

                <div class=\"vin-form-container\">

                    <form method=\"post\" action=\"{{ path('app_verif_check_vin') }}\" class=\"vin-form\">
                        <div class=\"mb-4\">
                            <label for=\"vin\" class=\"form-label\">Numéro VIN</label>
                            <input type=\"text\" 
                                   name=\"vin\" 
                                   id=\"vin\" 
                                   class=\"form-control\" 
                                   value=\"{{ vin|default('') }}\"
                                   placeholder=\"Entrez le numéro VIN\"
                                   required>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary vin-submit-btn\">
                                Vérifier
                            </button>
                        </div>
                    </form>

                    {% if carteGrise is defined and carteGrise %}
                        <div class=\"mt-4\">
                            <h3 class=\"text-center mb-3\">Détails de la Carte Grise</h3>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Colonne</th>
                                                <th>Valeur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for key, value in carteGrise %}
                                                <tr>
                                                    <td>{{ key }}</td>
                                                    <td>{{ value }}</td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    {% endif %}

                    {% if error is defined and error %}
                        <div class=\"alert alert-danger mt-3\">
                            {{ error }}
                        </div>
                    {% endif %}

                    {% if showButton is defined and showButton and (error is not defined or not error) %}
                        <div class=\"text-center mt-4\">
                            <a href=\"{{ path('app_verif') }}\" class=\"btn btn-primary\">
                                Commencer la vérification
                            </a>
                        </div>
                    {% endif %}

                    {% if vehicule is defined and vehicule %}
                        <div class=\"mt-4\">
                            <h3 class=\"text-center mb-3\">Informations du Véhicule</h3>
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <p><strong>VIN:</strong> {{ vehicule.vin }}</p>
                                    <p><strong>Marque:</strong> {{ vehicule.marque }}</p>
                                    <p><strong>Modèle:</strong> {{ vehicule.modele }}</p>
                                    <p><strong>Année:</strong> {{ vehicule.annee }}</p>
                                </div>
                            </div>

                            {% if reservation %}
                                <h3 class=\"text-center mb-3\">Dernière Réservation</h3>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <p><strong>Date:</strong> {{ reservation.dateReservation|date('d/m/Y') }}</p>
                                        <p><strong>Heure:</strong> {{ reservation.heureReservation }}</p>
                                        {% if reservation.serviceId %}
                                            <p><strong>Service:</strong> {{ reservation.serviceId.nom }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "vin/vin.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\vin\\vin.html.twig");
    }
}
