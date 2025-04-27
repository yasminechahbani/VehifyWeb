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

/* BackOffice/Liste/liste.html.twig */
class __TwigTemplate_9105d1fba19a62b910cfe0dc5303ec85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/Liste/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/Liste/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/Liste/liste.html.twig", 1);
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

        yield "Vehicle Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <!-- Vehicles Section -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-car me-2\"></i>Vehicle Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage your fleet vehicles</p>
                    </div>
                    <div class=\"d-flex gap-2\">
                        <button class=\"btn btn-light\">
                            <i class=\"fas fa-filter me-2\"></i>Filters
                        </button>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-trademark me-2\"></i>Brand</th>
                                    <th><i class=\"fas fa-car-side me-2\"></i>Model</th>
                                    <th><i class=\"fas fa-id-card me-2\"></i>Registration</th>
                                    <th><i class=\"fas fa-info-circle me-2\"></i>Status</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 37
            yield "                                    <tr>
                                        <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                        <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge bg-";
            // line 42
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "statut", [], "any", false, false, false, 42) == "Visite faite")) ? ("success") : ("warning"));
            yield " rounded-pill\">
                                                ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "statut", [], "any", false, false, false, 43), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_show", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_edit", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Vehicle
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        <form action=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_delete", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\">
                                                            <button type=\"submit\" class=\"dropdown-item text-danger\" onclick=\"return confirm('Are you sure you want to delete this vehicle?')\">
                                                                <i class=\"fas fa-trash-alt me-2\"></i>Delete Vehicle
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-2\">No vehicles found in the system</p>
                                            <a href=\"";
            // line 78
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_add");
            yield "\" class=\"btn btn-sm btn-primary\">Add First Vehicle</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vehicule'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration Cards Section -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-id-card me-2\"></i>Registration Cards</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage vehicle registration cards</p>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-hashtag me-2\"></i>Card Number</th>
                                    <th><i class=\"fas fa-user me-2\"></i>Owner</th>
                                    <th><i class=\"fas fa-map-marker-alt me-2\"></i>Address</th>
                                    <th><i class=\"fas fa-calendar-plus me-2\"></i>Issue Date</th>
                                    <th><i class=\"fas fa-calendar-times me-2\"></i>Expiry Date</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartesGrises"]) || array_key_exists("cartesGrises", $context) ? $context["cartesGrises"] : (function () { throw new RuntimeError('Variable "cartesGrises" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carte_grise"]) {
            // line 116
            yield "                                    <tr>
                                        <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "numeroCarteGrise", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                        <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "proprietaire", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                        <td>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "adresseProprietaire", [], "any", false, false, false, 119), "html", null, true);
            yield "</td>
                                        <td>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "DateEmission", [], "any", false, false, false, 120), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "DateExpiration", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_show", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "idCarteGrise", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_edit", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "idCarteGrise", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Card
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        <form action=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_delete", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, $context["carte_grise"], "idCarteGrise", [], "any", false, false, false, 140)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\">
                                                            <button type=\"submit\" class=\"dropdown-item text-danger\" onclick=\"return confirm('Are you sure you want to delete this registration card?')\">
                                                                <i class=\"fas fa-trash-alt me-2\"></i>Delete Card
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 151
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-2\">No registration cards found</p>
                                            <a href=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_add");
            yield "\" class=\"btn btn-sm btn-primary\">Add First Card</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carte_grise'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                            </tbody>
                        </table>
                    </div>
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
        return "BackOffice/Liste/liste.html.twig";
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
        return array (  336 => 158,  326 => 154,  321 => 151,  305 => 140,  296 => 134,  288 => 129,  277 => 121,  273 => 120,  269 => 119,  265 => 118,  261 => 117,  258 => 116,  253 => 115,  218 => 82,  208 => 78,  203 => 75,  187 => 64,  178 => 58,  170 => 53,  157 => 43,  153 => 42,  148 => 40,  144 => 39,  140 => 38,  137 => 37,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicle Management{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <!-- Vehicles Section -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-car me-2\"></i>Vehicle Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage your fleet vehicles</p>
                    </div>
                    <div class=\"d-flex gap-2\">
                        <button class=\"btn btn-light\">
                            <i class=\"fas fa-filter me-2\"></i>Filters
                        </button>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-trademark me-2\"></i>Brand</th>
                                    <th><i class=\"fas fa-car-side me-2\"></i>Model</th>
                                    <th><i class=\"fas fa-id-card me-2\"></i>Registration</th>
                                    <th><i class=\"fas fa-info-circle me-2\"></i>Status</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                {% for vehicule in vehicules %}
                                    <tr>
                                        <td>{{ vehicule.marque }}</td>
                                        <td>{{ vehicule.modele }}</td>
                                        <td>{{ vehicule.immatriculation }}</td>
                                        <td>
                                            <span class=\"badge bg-{{ vehicule.statut == 'Visite faite' ? 'success' : 'warning' }} rounded-pill\">
                                                {{ vehicule.statut }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_vehiculeB_show', {'idVehicule': vehicule.idVehicule}) }}\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_vehiculeB_edit', {'idVehicule': vehicule.idVehicule}) }}\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Vehicle
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        <form action=\"{{ path('app_vehiculeB_delete', {'idVehicule': vehicule.idVehicule}) }}\" method=\"POST\" class=\"d-inline\">
                                                            <button type=\"submit\" class=\"dropdown-item text-danger\" onclick=\"return confirm('Are you sure you want to delete this vehicle?')\">
                                                                <i class=\"fas fa-trash-alt me-2\"></i>Delete Vehicle
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-2\">No vehicles found in the system</p>
                                            <a href=\"{{ path('app_vehicule_add') }}\" class=\"btn btn-sm btn-primary\">Add First Vehicle</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration Cards Section -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-id-card me-2\"></i>Registration Cards</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage vehicle registration cards</p>
                    </div>
                </div>

                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-hashtag me-2\"></i>Card Number</th>
                                    <th><i class=\"fas fa-user me-2\"></i>Owner</th>
                                    <th><i class=\"fas fa-map-marker-alt me-2\"></i>Address</th>
                                    <th><i class=\"fas fa-calendar-plus me-2\"></i>Issue Date</th>
                                    <th><i class=\"fas fa-calendar-times me-2\"></i>Expiry Date</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                {% for carte_grise in cartesGrises %}
                                    <tr>
                                        <td>{{ carte_grise.numeroCarteGrise }}</td>
                                        <td>{{ carte_grise.proprietaire }}</td>
                                        <td>{{ carte_grise.adresseProprietaire }}</td>
                                        <td>{{ carte_grise.DateEmission|date('d/m/Y') }}</td>
                                        <td>{{ carte_grise.DateExpiration|date('d/m/Y') }}</td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_carte_griseB_show', {'idCarteGrise': carte_grise.idCarteGrise}) }}\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_carte_griseB_edit', {'idCarteGrise': carte_grise.idCarteGrise}) }}\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Card
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        <form action=\"{{ path('app_carte_griseB_delete', {'idCarteGrise': carte_grise.idCarteGrise}) }}\" method=\"POST\" class=\"d-inline\">
                                                            <button type=\"submit\" class=\"dropdown-item text-danger\" onclick=\"return confirm('Are you sure you want to delete this registration card?')\">
                                                                <i class=\"fas fa-trash-alt me-2\"></i>Delete Card
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-2\">No registration cards found</p>
                                            <a href=\"{{ path('app_carte_grise_add') }}\" class=\"btn btn-sm btn-primary\">Add First Card</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "BackOffice/Liste/liste.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\BackOffice\\Liste\\liste.html.twig");
    }
}
