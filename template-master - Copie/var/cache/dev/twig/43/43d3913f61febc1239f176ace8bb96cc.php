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
class __TwigTemplate_03c9aec25e018a3954fb71293c6efbfb extends Template
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-user me-2\"></i>User Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Complete user information</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-4 text-center\">
                            ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23)) {
            // line 24
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), "html", null, true);
            yield "\" alt=\"Profile Image\" class=\"img-thumbnail rounded-circle shadow-sm\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                            ";
        } else {
            // line 26
            yield "                                <div class=\"d-flex align-items-center justify-content-center bg-light rounded-circle shadow-sm mx-auto\" style=\"width: 150px; height: 150px;\">
                                    <i class=\"fas fa-user-circle fa-4x text-secondary\"></i>
                                </div>
                            ";
        }
        // line 30
        yield "                        </div>
                        <div class=\"col-md-8\">
                            <h2 class=\"h4 mb-2\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield "</h2>
                            <p class=\"text-muted mb-2\"><i class=\"fas fa-user-tag me-2\"></i>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "role", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
                            <span class=\"badge ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34) == "active")) {
            yield "bg-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34) == "inactive")) {
            yield "bg-warning";
        } else {
            yield "bg-secondary";
        }
        yield "\">
                                <i class=\"fas fa-circle me-1\"></i>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35)), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-user-circle me-2\"></i>Personal Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-fingerprint me-2\"></i>ID</dt>
                                    <dd class=\"col-sm-8\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>First Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>Last Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-phone me-2\"></i>Phone</dt>
                                    <dd class=\"col-sm-8\">";
        // line 55
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "tel", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "tel", [], "any", false, false, false, 55), "html", null, true)) : ("N/A"));
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Account Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-envelope me-2\"></i>Email</dt>
                                    <dd class=\"col-sm-8\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-map-marker-alt me-2\"></i>Location</dt>
                                    <dd class=\"col-sm-8\">";
        // line 68
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "localisation", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "localisation", [], "any", false, false, false, 68), "html", null, true)) : ("N/A"));
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user-shield me-2\"></i>Role</dt>
                                    <dd class=\"col-sm-8\">
                                        <span class=\"badge ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "role", [], "any", false, false, false, 72) == "ADMIN")) {
            yield "bg-danger";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "role", [], "any", false, false, false, 72) == "USER")) {
            yield "bg-primary";
        } else {
            yield "bg-secondary";
        }
        yield "\">
                                            ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "role", [], "any", false, false, false, 73), "html", null, true);
        yield "
                                        </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-2\"></i>Edit
                            </a>
                            ";
        // line 86
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
                        </div>
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
        return array (  250 => 86,  244 => 83,  231 => 73,  221 => 72,  214 => 68,  208 => 65,  195 => 55,  189 => 52,  183 => 49,  177 => 46,  163 => 35,  153 => 34,  149 => 33,  143 => 32,  139 => 30,  133 => 26,  127 => 24,  125 => 23,  114 => 15,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Details - {{ user.nom }} {{ user.prenom }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-user me-2\"></i>User Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Complete user information</p>
                    </div>
                    <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-4 text-center\">
                            {% if user.image %}
                                <img src=\"{{ user.image }}\" alt=\"Profile Image\" class=\"img-thumbnail rounded-circle shadow-sm\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                            {% else %}
                                <div class=\"d-flex align-items-center justify-content-center bg-light rounded-circle shadow-sm mx-auto\" style=\"width: 150px; height: 150px;\">
                                    <i class=\"fas fa-user-circle fa-4x text-secondary\"></i>
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"col-md-8\">
                            <h2 class=\"h4 mb-2\">{{ user.nom }} {{ user.prenom }}</h2>
                            <p class=\"text-muted mb-2\"><i class=\"fas fa-user-tag me-2\"></i>{{ user.role }}</p>
                            <span class=\"badge {% if user.status == 'active' %}bg-success{% elseif user.status == 'inactive' %}bg-warning{% else %}bg-secondary{% endif %}\">
                                <i class=\"fas fa-circle me-1\"></i>{{ user.status|capitalize }}
                            </span>
                        </div>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-user-circle me-2\"></i>Personal Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-fingerprint me-2\"></i>ID</dt>
                                    <dd class=\"col-sm-8\">{{ user.id }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>First Name</dt>
                                    <dd class=\"col-sm-8\">{{ user.prenom }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>Last Name</dt>
                                    <dd class=\"col-sm-8\">{{ user.nom }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-phone me-2\"></i>Phone</dt>
                                    <dd class=\"col-sm-8\">{{ user.tel ?: 'N/A' }}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Account Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-envelope me-2\"></i>Email</dt>
                                    <dd class=\"col-sm-8\">{{ user.email }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-map-marker-alt me-2\"></i>Location</dt>
                                    <dd class=\"col-sm-8\">{{ user.localisation ?: 'N/A' }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user-shield me-2\"></i>Role</dt>
                                    <dd class=\"col-sm-8\">
                                        <span class=\"badge {% if user.role == 'ADMIN' %}bg-danger{% elseif user.role == 'USER' %}bg-primary{% else %}bg-secondary{% endif %}\">
                                            {{ user.role }}
                                        </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-2\"></i>Edit
                            </a>
                            {{ include('user/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "user/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\user\\show.html.twig");
    }
}
