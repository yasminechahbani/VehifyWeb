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
class __TwigTemplate_fddae5d1fa5b522e81798e3854bde3c4 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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

        yield "Vehicle and Carte Grise Management";
        
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
    <!-- Search Form -->
    <form method=\"get\" action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        yield "\" class=\"mb-4 d-flex\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search vehicles or carte grise...\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", ["q"], "method", false, false, false, 10), "html", null, true);
        yield "\" id=\"searchInput\">
            <button class=\"btn btn-primary\" type=\"submit\">Search</button>
        </div>
        <button type=\"button\" class=\"btn btn-secondary ms-2\" id=\"resetButton\">Reset</button>
    </form>

    <!-- Vehicles Section -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <h4 class=\"mb-1\"><i class=\"fas fa-car me-2\"></i>Vehicle Management</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\" id=\"vehicleTable\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th><i class=\"fas fa-trademark me-2\"></i>Brand</th>
                                    <th><i class=\"fas fa-car-side me-2\"></i>Model</th>
                                    <th><i class=\"fas fa-id-card me-2\"></i>Registration</th>
                                    <th><i class=\"fas fa-info-circle me-2\"></i>Status</th>
                                    <th class=\"text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 36, $this->source); })()));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_show", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "carteGrise", [], "any", false, false, false, 58), "idCarteGrise", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-id-card text-primary me-2\"></i>View Registration Card
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_edit", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Vehicle
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        <form action=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehiculeB_delete", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "idVehicule", [], "any", false, false, false, 69)]), "html", null, true);
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
            // line 80
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-2\">No vehicles found</p>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vehicule'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                            </tbody>
                        </table>
                    </div>
                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div class=\"text-muted\">
                            Affichage ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 91, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 91), "html", null, true);
        yield " sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 91, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 91), "html", null, true);
        yield " véhicules
                        </div>
                        <div class=\"pagination-wrapper\">
                            ";
        // line 94
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["align" => "center", "size" => "sm", "rounded" => true, "styled" => true]);
        // line 99
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 108
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 109
        yield "<script>
document.getElementById('resetButton').addEventListener('click', function() {
    document.getElementById('searchInput').value = '';
    window.location.href = '";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        yield "';
});
</script>
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
        return array (  285 => 112,  280 => 109,  257 => 108,  246 => 99,  244 => 94,  236 => 91,  229 => 86,  218 => 80,  202 => 69,  193 => 63,  185 => 58,  177 => 53,  164 => 43,  160 => 42,  155 => 40,  151 => 39,  147 => 38,  144 => 37,  139 => 36,  110 => 10,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicle and Carte Grise Management{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <!-- Search Form -->
    <form method=\"get\" action=\"{{ path('app_search') }}\" class=\"mb-4 d-flex\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search vehicles or carte grise...\" value=\"{{ app.request.query.get('q') }}\" id=\"searchInput\">
            <button class=\"btn btn-primary\" type=\"submit\">Search</button>
        </div>
        <button type=\"button\" class=\"btn btn-secondary ms-2\" id=\"resetButton\">Reset</button>
    </form>

    <!-- Vehicles Section -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <h4 class=\"mb-1\"><i class=\"fas fa-car me-2\"></i>Vehicle Management</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\" id=\"vehicleTable\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th><i class=\"fas fa-trademark me-2\"></i>Brand</th>
                                    <th><i class=\"fas fa-car-side me-2\"></i>Model</th>
                                    <th><i class=\"fas fa-id-card me-2\"></i>Registration</th>
                                    <th><i class=\"fas fa-info-circle me-2\"></i>Status</th>
                                    <th class=\"text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for vehicule in pagination %}
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
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_carte_griseB_show', {'idCarteGrise': vehicule.carteGrise.idCarteGrise}) }}\">
                                                            <i class=\"fas fa-id-card text-primary me-2\"></i>View Registration Card
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
                                            <p class=\"text-muted mb-2\">No vehicles found</p>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div class=\"text-muted\">
                            Affichage {{ pagination.getCurrentPageNumber() }} sur {{ pagination.getTotalItemCount() }} véhicules
                        </div>
                        <div class=\"pagination-wrapper\">
                            {{ knp_pagination_render(pagination, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig', {
                                'align': 'center',
                                'size': 'sm',
                                'rounded': true,
                                'styled': true
                            }) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
<script>
document.getElementById('resetButton').addEventListener('click', function() {
    document.getElementById('searchInput').value = '';
    window.location.href = '{{ path('app_search') }}';
});
</script>
{% endblock %}
{% endblock %}", "BackOffice/Liste/liste.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\BackOffice\\Liste\\liste.html.twig");
    }
}
