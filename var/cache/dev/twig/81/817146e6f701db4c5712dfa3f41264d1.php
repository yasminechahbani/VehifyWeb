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

/* user/index.html.twig */
class __TwigTemplate_e4dad268a26b49e271b5b88d2d2782e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "User Management";
        
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
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-users me-2\"></i>User Management</h4>
                        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i> Add New User
                        </a>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light\">
                                        <i class=\"fas fa-search\"></i>
                                    </span>
                                    <input type=\"text\" id=\"userSearch\" class=\"form-control\" placeholder=\"Search users...\">
                                </div>
                            </div>
                            <div class=\"col-md-6 text-end\">
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-outline-primary\">
                                        <i class=\"fas fa-filter me-1\"></i> Filter
                                    </button>
                                    <button class=\"btn btn-outline-primary\">
                                        <i class=\"fas fa-download me-1\"></i> Export
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover align-middle\">
                                <thead class=\"bg-light\">
                                    <tr>                                        <th style=\"min-width: 250px\">Name</th>
                                        <th style=\"min-width: 200px\">Contact</th>
                                        <th style=\"width: 100px\">Status</th>
                                        <th style=\"width: 100px\">Role</th>
                                        <th style=\"width: 120px\" class=\"text-end\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 51
            yield "                                        <tr class=\"align-middle\">
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 54)) {
                // line 55
                yield "                                                        <div class=\"avatar-wrapper me-3\">
                                                            <img src=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 56), "html", null, true);
                yield "\" alt=\"Profile\" class=\"rounded-circle\" width=\"45\" height=\"45\" style=\"object-fit: cover; border: 2px solid #eee;\">
                                                        </div>
                                                    ";
            } else {
                // line 59
                yield "                                                        <div class=\"avatar-wrapper me-3\">
                                                            <div class=\"bg-primary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px;\">
                                                                <i class=\"fas fa-user text-white\"></i>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 65
            yield "                                                    <div>
                                                        <h6 class=\"mb-0\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 66), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 66), "html", null, true);
            yield "</h6>
                                                        <small class=\"text-muted\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 67), "html", null, true);
            yield "</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-flex flex-column\">
                                                    <span><i class=\"fas fa-phone me-2 text-primary\"></i>";
            // line 73
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 73)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 73), "html", null, true)) : (yield "N/A"));
            yield "</span>
                                                    <span><i class=\"fas fa-map-marker-alt me-2 text-danger\"></i>";
            // line 74
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "localisation", [], "any", false, false, false, 74)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "localisation", [], "any", false, false, false, 74), "html", null, true)) : (yield "N/A"));
            yield "</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"badge rounded-pill ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 78) == "active")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 78) == "inactive")) {
                yield "bg-warning";
            } else {
                yield "bg-secondary";
            }
            yield "\">
                                                    <i class=\"fas fa-circle me-1\" style=\"font-size: 8px;\"></i>
                                                    ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 80)), "html", null, true);
            yield "
                                                </span>
                                            </td>
                                            <td>
                                                <span class=\"badge rounded-pill ";
            // line 84
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 84) == "ADMIN")) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 84) == "USER")) {
                yield "bg-primary";
            } else {
                yield "bg-secondary";
            }
            yield "\">
                                                    ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 85), "html", null, true);
            yield "
                                                </span>
                                            </td>
                                            <td>
                                                <div class=\"btn-group float-end\">
                                                    <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" title=\"View\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                    <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Edit\">
                                                        <i class=\"fas fa-edit\"></i>
                                                    </a>
                                                    <form method=\"post\" action=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_deleteUserByhimSelf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 97))), "html", null, true);
            yield "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" title=\"Delete\">
                                                            <i class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            yield "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center py-5\">
                                                <div class=\"text-muted\">
                                                    <i class=\"fas fa-users fa-3x mb-3\"></i>
                                                    <p class=\"mb-0\">No users found</p>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "                                </tbody>
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

    // line 125
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

        // line 126
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function() {
            // Search functionality
            \$(\"#userSearch\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"table tbody tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
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
        return "user/index.html.twig";
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
        return array (  320 => 126,  307 => 125,  288 => 115,  274 => 106,  260 => 97,  256 => 96,  250 => 93,  244 => 90,  236 => 85,  226 => 84,  219 => 80,  208 => 78,  201 => 74,  197 => 73,  188 => 67,  182 => 66,  179 => 65,  171 => 59,  165 => 56,  162 => 55,  160 => 54,  155 => 51,  150 => 50,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Management{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-users me-2\"></i>User Management</h4>
                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i> Add New User
                        </a>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light\">
                                        <i class=\"fas fa-search\"></i>
                                    </span>
                                    <input type=\"text\" id=\"userSearch\" class=\"form-control\" placeholder=\"Search users...\">
                                </div>
                            </div>
                            <div class=\"col-md-6 text-end\">
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-outline-primary\">
                                        <i class=\"fas fa-filter me-1\"></i> Filter
                                    </button>
                                    <button class=\"btn btn-outline-primary\">
                                        <i class=\"fas fa-download me-1\"></i> Export
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover align-middle\">
                                <thead class=\"bg-light\">
                                    <tr>                                        <th style=\"min-width: 250px\">Name</th>
                                        <th style=\"min-width: 200px\">Contact</th>
                                        <th style=\"width: 100px\">Status</th>
                                        <th style=\"width: 100px\">Role</th>
                                        <th style=\"width: 120px\" class=\"text-end\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for user in users %}
                                        <tr class=\"align-middle\">
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    {% if user.image %}
                                                        <div class=\"avatar-wrapper me-3\">
                                                            <img src=\"{{ user.image }}\" alt=\"Profile\" class=\"rounded-circle\" width=\"45\" height=\"45\" style=\"object-fit: cover; border: 2px solid #eee;\">
                                                        </div>
                                                    {% else %}
                                                        <div class=\"avatar-wrapper me-3\">
                                                            <div class=\"bg-primary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 45px; height: 45px;\">
                                                                <i class=\"fas fa-user text-white\"></i>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                    <div>
                                                        <h6 class=\"mb-0\">{{ user.nom }} {{ user.prenom }}</h6>
                                                        <small class=\"text-muted\">{{ user.email }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-flex flex-column\">
                                                    <span><i class=\"fas fa-phone me-2 text-primary\"></i>{{ user.tel ?: 'N/A' }}</span>
                                                    <span><i class=\"fas fa-map-marker-alt me-2 text-danger\"></i>{{ user.localisation ?: 'N/A' }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"badge rounded-pill {% if user.status == 'active' %}bg-success{% elseif user.status == 'inactive' %}bg-warning{% else %}bg-secondary{% endif %}\">
                                                    <i class=\"fas fa-circle me-1\" style=\"font-size: 8px;\"></i>
                                                    {{ user.status|capitalize }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class=\"badge rounded-pill {% if user.role == 'ADMIN' %}bg-danger{% elseif user.role == 'USER' %}bg-primary{% else %}bg-secondary{% endif %}\">
                                                    {{ user.role }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class=\"btn-group float-end\">
                                                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"View\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Edit\">
                                                        <i class=\"fas fa-edit\"></i>
                                                    </a>
                                                    <form method=\"post\" action=\"{{ path('app_user_deleteUserByhimSelf', {'id': user.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" title=\"Delete\">
                                                            <i class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"6\" class=\"text-center py-5\">
                                                <div class=\"text-muted\">
                                                    <i class=\"fas fa-users fa-3x mb-3\"></i>
                                                    <p class=\"mb-0\">No users found</p>
                                                </div>
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

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function() {
            // Search functionality
            \$(\"#userSearch\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"table tbody tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
{% endblock %}", "user/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\index.html.twig");
    }
}
