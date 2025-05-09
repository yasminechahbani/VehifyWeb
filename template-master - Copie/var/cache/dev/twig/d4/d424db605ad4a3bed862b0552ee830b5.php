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

/* vehicule/new.html.twig */
class __TwigTemplate_5472e87de1c5c374cf72fc02b029c9e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/new.html.twig"));

        // line 2
        $context["active_page"] = "vehicules";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "vehicule/new.html.twig", 1);
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

        yield "Nouveau Véhicule";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-input {
            background-color: white;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
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

        // line 21
        yield "    <!-- Affichage des messages flash -->
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["vehicule_ajoute"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "        <div class=\"text-center mb-5\">
            <h4 class=\"text-success\">Véhicule ajouté avec succès !</h4>

            <!-- Affichage du loader -->

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-bg-1.jpg"), "html", null, true);
        yield ");\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Nouveau Véhicule</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\">Véhicules</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Nouveau</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<div class=\"car-road-container\">
    <div class=\"car-road\">
        <div class=\"car\">
            <div class=\"car-top\"><div class=\"window\"></div></div>
            <div class=\"car-base\"></div>
            <div class=\"wheel-left wheel\"><div class=\"wheel-spike\"></div><div class=\"wheel-center\"></div></div>
            <div class=\"wheel-right wheel\"><div class=\"wheel-spike\"></div><div class=\"wheel-center\"></div></div>
            <div class=\"head-light\"></div>
        </div>
        <div class=\"road\"></div>
    </div>
</div>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h1 class=\"h3 mb-0\">Enregistrer un nouveau véhicule</h1>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 68
        yield Twig\Extension\CoreExtension::include($this->env, $context, "vehicule/_form.html.twig");
        yield "
                    </div>
                    <div class=\"card-footer text-end\">
                        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                        </a>
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
        return "vehicule/new.html.twig";
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
        return array (  215 => 71,  209 => 68,  177 => 39,  173 => 38,  164 => 32,  160 => 30,  148 => 23,  144 => 22,  141 => 21,  128 => 20,  104 => 7,  91 => 6,  68 => 4,  57 => 1,  55 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}
{% set active_page = 'vehicules' %}

{% block title %}Nouveau Véhicule{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-input {
            background-color: white;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
{% endblock %}

{% block content %}
    <!-- Affichage des messages flash -->
    {% for message in app.flashes('vehicule_ajoute') %}
        <div class=\"text-center mb-5\">
            <h4 class=\"text-success\">Véhicule ajouté avec succès !</h4>

            <!-- Affichage du loader -->

        </div>
    {% endfor %}

    <!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url({{ asset('img/carousel-bg-1.jpg') }});\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Nouveau Véhicule</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_vehicule_index') }}\">Véhicules</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Nouveau</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<div class=\"car-road-container\">
    <div class=\"car-road\">
        <div class=\"car\">
            <div class=\"car-top\"><div class=\"window\"></div></div>
            <div class=\"car-base\"></div>
            <div class=\"wheel-left wheel\"><div class=\"wheel-spike\"></div><div class=\"wheel-center\"></div></div>
            <div class=\"wheel-right wheel\"><div class=\"wheel-spike\"></div><div class=\"wheel-center\"></div></div>
            <div class=\"head-light\"></div>
        </div>
        <div class=\"road\"></div>
    </div>
</div>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h1 class=\"h3 mb-0\">Enregistrer un nouveau véhicule</h1>
                    </div>
                    <div class=\"card-body\">
                        {{ include('vehicule/_form.html.twig') }}
                    </div>
                    <div class=\"card-footer text-end\">
                        <a href=\"{{ path('app_vehicule_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


", "vehicule/new.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\vehicule\\new.html.twig");
    }
}
