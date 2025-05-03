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

/* employe/index.html.twig */
class __TwigTemplate_1229e040a0d68a5cceab69288b2ae014 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/index.html.twig", 1);
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

        yield "Employee Management";
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-users me-2\"></i>Employee Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage all employees</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_new");
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-plus me-2\"></i>Add New Employee
                    </a>
                    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-plus me-2\"></i>Add New contrat
                    </a>

                </div>

                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-8\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-0\">
                                    <i class=\"fas fa-search\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control bg-light border-0\" id=\"searchInput\" 
                                       placeholder=\"Search by name or firstname...\">
                            </div>
                        </div>
                    </div>

                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-user me-2\"></i>Name</th>
                                    <th><i class=\"fas fa-envelope me-2\"></i>Email</th>
                                    <th><i class=\"fas fa-birthday-cake me-2\"></i>Age</th>
                                    <th><i class=\"fas fa-briefcase me-2\"></i>Position</th>
                                    <th><i class=\"fas fa-phone me-2\"></i>Phone</th>
                                    <th><i class=\"fas fa-building me-2\"></i>Service</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\" id=\"employeesContainerAll\">
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 52
            yield "                                <td>
           
        </td>
                                    <tr>
                                        <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 56), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "prenom", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                                        <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "email", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                                        <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "age", [], "any", false, false, false, 58), "html", null, true);
            yield " years</td>
                                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "poste", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                                        <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "tel", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                                        <td>";
            // line 61
            ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "idService", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "idService", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true)) : (yield "N/A"));
            yield "</td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_show", ["idEmploye" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "idEmploye", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_edit", ["idEmploye" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "idEmploye", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Employee
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            yield "                                    <tr>
                                        <td colspan=\"7\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-0\">No employees found</p>
                                        </td>
                                    </tr>

                                    
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                            </tbody>
                        </table>
                    </div>

                    <div id=\"employeesContainerSearch\" class=\"d-none\">
                        <!-- Search results will be injected here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 104
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

        // line 105
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#searchInput').on('input', function () {
                const value = \$(this).val().trim();
                
                if (value === '') {
                    \$('#employeesContainerAll').removeClass('d-none');
                    \$('#employeesContainerSearch').addClass('d-none').empty();
                    return;
                }

                \$.ajax({
                    url: \"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_search_nom");
        yield "\",
                    type: 'GET',
                    data: { searchValue: value },
                    success: function (html) {
                        \$('#employeesContainerAll').addClass('d-none');
                        \$('#employeesContainerSearch').removeClass('d-none').html(html);
                    },
                    error: function () {
                        alert('Error during AJAX search!');
                    }
                });
            });
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
        return "employe/index.html.twig";
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
        return array (  289 => 119,  271 => 105,  248 => 104,  233 => 91,  220 => 83,  206 => 74,  198 => 69,  187 => 61,  183 => 60,  179 => 59,  175 => 58,  171 => 57,  165 => 56,  159 => 52,  154 => 51,  118 => 18,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Employee Management{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-users me-2\"></i>Employee Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage all employees</p>
                    </div>
                    <a href=\"{{ path('app_employe_new') }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-plus me-2\"></i>Add New Employee
                    </a>
                    <a href=\"{{ path('app_contrat_index') }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-plus me-2\"></i>Add New contrat
                    </a>

                </div>

                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-8\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-0\">
                                    <i class=\"fas fa-search\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control bg-light border-0\" id=\"searchInput\" 
                                       placeholder=\"Search by name or firstname...\">
                            </div>
                        </div>
                    </div>

                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-user me-2\"></i>Name</th>
                                    <th><i class=\"fas fa-envelope me-2\"></i>Email</th>
                                    <th><i class=\"fas fa-birthday-cake me-2\"></i>Age</th>
                                    <th><i class=\"fas fa-briefcase me-2\"></i>Position</th>
                                    <th><i class=\"fas fa-phone me-2\"></i>Phone</th>
                                    <th><i class=\"fas fa-building me-2\"></i>Service</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\" id=\"employeesContainerAll\">
                                {% for employe in employes %}
                                <td>
           
        </td>
                                    <tr>
                                        <td>{{ employe.nom }} {{ employe.prenom }}</td>
                                        <td>{{ employe.email }}</td>
                                        <td>{{ employe.age }} years</td>
                                        <td>{{ employe.poste }}</td>
                                        <td>{{ employe.tel }}</td>
                                        <td>{{ employe.idService ? employe.idService.nom : 'N/A' }}</td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_employe_show', {'idEmploye': employe.idEmploye}) }}\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_employe_edit', {'idEmploye': employe.idEmploye}) }}\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Employee
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-0\">No employees found</p>
                                        </td>
                                    </tr>

                                    
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <div id=\"employeesContainerSearch\" class=\"d-none\">
                        <!-- Search results will be injected here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#searchInput').on('input', function () {
                const value = \$(this).val().trim();
                
                if (value === '') {
                    \$('#employeesContainerAll').removeClass('d-none');
                    \$('#employeesContainerSearch').addClass('d-none').empty();
                    return;
                }

                \$.ajax({
                    url: \"{{ path('employe_search_nom') }}\",
                    type: 'GET',
                    data: { searchValue: value },
                    success: function (html) {
                        \$('#employeesContainerAll').addClass('d-none');
                        \$('#employeesContainerSearch').removeClass('d-none').html(html);
                    },
                    error: function () {
                        alert('Error during AJAX search!');
                    }
                });
            });
        });
    </script>
{% endblock %}
{% endblock %}", "employe/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\employe\\index.html.twig");
    }
}
