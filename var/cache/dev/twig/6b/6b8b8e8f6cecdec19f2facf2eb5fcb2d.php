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

/* user/show.html.twig */
class __TwigTemplate_b6a042cacd1089933ff7c5eec44519d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        yield "User Details - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "prenom", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h1 class=\"h4 mb-0\">User Details</h1>
                            <div>
                                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-sm btn-light\">
                                    <i class=\"fas fa-arrow-left\"></i> Back to list
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-4 text-center\">
                                ";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24)) {
            // line 25
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25), "html", null, true);
            yield "\" alt=\"Profile Image\" class=\"img-thumbnail rounded-circle\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                                ";
        } else {
            // line 27
            yield "                                    <div class=\"d-flex align-items-center justify-content-center bg-light rounded-circle\" style=\"width: 150px; height: 150px;\">
                                        <i class=\"fas fa-user fa-3x text-secondary\"></i>
                                    </div>
                                ";
        }
        // line 31
        yield "                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"h3\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), "html", null, true);
        yield "</h2>
                                <p class=\"text-muted\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "role", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>

                                <span class=\"badge
                                    ";
        // line 37
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37) == "active")) {
            yield "bg-success
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38) == "inactive")) {
            yield "bg-warning
                                    ";
        } else {
            // line 39
            yield "bg-secondary
                                    ";
        }
        // line 40
        yield "\">
                                    ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41)), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3 class=\"h5\">Personal Information</h3>
                                <hr>
                                <dl class=\"row\">
                                    <dt class=\"col-sm-4\">ID</dt>
                                    <dd class=\"col-sm-8\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">First Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">Last Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "nom", [], "any", false, false, false, 58), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">Phone</dt>
                                    <dd class=\"col-sm-8\">";
        // line 61
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "tel", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "tel", [], "any", false, false, false, 61), "html", null, true)) : (yield "N/A"));
        yield "</dd>
                                </dl>
                            </div>

                            <div class=\"col-md-6\">
                                <h3 class=\"h5\">Account Information</h3>
                                <hr>
                                <dl class=\"row\">
                                    <dt class=\"col-sm-4\">Email</dt>
                                    <dd class=\"col-sm-8\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">Location</dt>
                                    <dd class=\"col-sm-8\">";
        // line 73
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "localisation", [], "any", false, false, false, 73)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "localisation", [], "any", false, false, false, 73), "html", null, true)) : (yield "N/A"));
        yield "</dd>

                                    <dt class=\"col-sm-4\">Role</dt>
                                    <dd class=\"col-sm-8\">
                                        <span class=\"badge
                                            ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "role", [], "any", false, false, false, 78) == "ADMIN")) {
            yield "bg-danger
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 79
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "role", [], "any", false, false, false, 79) == "USER")) {
            yield "bg-primary
                                            ";
        } else {
            // line 80
            yield "bg-secondary
                                            ";
        }
        // line 81
        yield "\">
                                            ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "role", [], "any", false, false, false, 82), "html", null, true);
        yield "
                                        </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Edit
                            </a>

                            ";
        // line 96
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
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
        return "user/show.html.twig";
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
        return array (  266 => 96,  259 => 92,  246 => 82,  243 => 81,  239 => 80,  234 => 79,  230 => 78,  222 => 73,  216 => 70,  204 => 61,  198 => 58,  192 => 55,  186 => 52,  172 => 41,  169 => 40,  165 => 39,  160 => 38,  156 => 37,  150 => 34,  144 => 33,  140 => 31,  134 => 27,  128 => 25,  126 => 24,  113 => 14,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Details - {{ user.nom }} {{ user.prenom }}{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h1 class=\"h4 mb-0\">User Details</h1>
                            <div>
                                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-sm btn-light\">
                                    <i class=\"fas fa-arrow-left\"></i> Back to list
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-4 text-center\">
                                {% if user.image %}
                                    <img src=\"{{ user.image }}\" alt=\"Profile Image\" class=\"img-thumbnail rounded-circle\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                                {% else %}
                                    <div class=\"d-flex align-items-center justify-content-center bg-light rounded-circle\" style=\"width: 150px; height: 150px;\">
                                        <i class=\"fas fa-user fa-3x text-secondary\"></i>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"h3\">{{ user.nom }} {{ user.prenom }}</h2>
                                <p class=\"text-muted\">{{ user.role }}</p>

                                <span class=\"badge
                                    {% if user.status == 'active' %}bg-success
                                    {% elseif user.status == 'inactive' %}bg-warning
                                    {% else %}bg-secondary
                                    {% endif %}\">
                                    {{ user.status|capitalize }}
                                </span>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3 class=\"h5\">Personal Information</h3>
                                <hr>
                                <dl class=\"row\">
                                    <dt class=\"col-sm-4\">ID</dt>
                                    <dd class=\"col-sm-8\">{{ user.id }}</dd>

                                    <dt class=\"col-sm-4\">First Name</dt>
                                    <dd class=\"col-sm-8\">{{ user.prenom }}</dd>

                                    <dt class=\"col-sm-4\">Last Name</dt>
                                    <dd class=\"col-sm-8\">{{ user.nom }}</dd>

                                    <dt class=\"col-sm-4\">Phone</dt>
                                    <dd class=\"col-sm-8\">{{ user.tel ?: 'N/A' }}</dd>
                                </dl>
                            </div>

                            <div class=\"col-md-6\">
                                <h3 class=\"h5\">Account Information</h3>
                                <hr>
                                <dl class=\"row\">
                                    <dt class=\"col-sm-4\">Email</dt>
                                    <dd class=\"col-sm-8\">{{ user.email }}</dd>

                                    <dt class=\"col-sm-4\">Location</dt>
                                    <dd class=\"col-sm-8\">{{ user.localisation ?: 'N/A' }}</dd>

                                    <dt class=\"col-sm-4\">Role</dt>
                                    <dd class=\"col-sm-8\">
                                        <span class=\"badge
                                            {% if user.role == 'ADMIN' %}bg-danger
                                            {% elseif user.role == 'USER' %}bg-primary
                                            {% else %}bg-secondary
                                            {% endif %}\">
                                            {{ user.role }}
                                        </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Edit
                            </a>

                            {{ include('user/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "user/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\show.html.twig");
    }
}
