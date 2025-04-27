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

/* service/show.html.twig */
class __TwigTemplate_b1fc6a9887dba02322dd38a03332a360 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/show.html.twig", 1);
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

        yield "Service Details";
        
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-cogs me-2\"></i>Service Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Complete service information</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Basic Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-hashtag me-2\"></i>Service ID</dt>
                                    <dd class=\"col-sm-8\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 27, $this->source); })()), "idService", [], "any", false, false, false, 27), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-signature me-2\"></i>Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-tag me-2\"></i>Type</dt>
                                    <dd class=\"col-sm-8\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-euro-sign me-2\"></i>Price</dt>
                                    <dd class=\"col-sm-8\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), "html", null, true);
        yield " TND</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-map-marker-alt me-2\"></i>Region</dt>
                                    <dd class=\"col-sm-8\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 39, $this->source); })()), "gouvernerat", [], "any", false, false, false, 39), "html", null, true);
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-clock me-2\"></i>Contact & Schedule</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-phone me-2\"></i>Phone</dt>
                                    <dd class=\"col-sm-8\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 49, $this->source); })()), "numero", [], "any", false, false, false, 49), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-envelope me-2\"></i>Email</dt>
                                    <dd class=\"col-sm-8\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-door-open me-2\"></i>Opening</dt>
                                    <dd class=\"col-sm-8\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 55, $this->source); })()), "getHeureOuverture", [], "method", false, false, false, 55), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-door-closed me-2\"></i>Closing</dt>
                                    <dd class=\"col-sm-8\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 58, $this->source); })()), "getHeureFermeture", [], "method", false, false, false, 58), "html", null, true);
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"bg-light p-3 rounded\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-align-left me-2\"></i>Additional Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-2 text-muted\"><i class=\"fas fa-file-alt me-2\"></i>Description</dt>
                                    <dd class=\"col-sm-10\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-2 text-muted\"><i class=\"fas fa-map-pin me-2\"></i>Location</dt>
                                    <dd class=\"col-sm-10\">Latitude: ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 71, $this->source); })()), "latitude", [], "any", false, false, false, 71), "html", null, true);
        yield ", Longitude: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 71, $this->source); })()), "longitude", [], "any", false, false, false, 71), "html", null, true);
        yield "</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <a href=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_edit", ["id_service" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 78, $this->source); })()), "idService", [], "any", false, false, false, 78)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                            <i class=\"fas fa-edit me-2\"></i>Edit
                        </a>
                        ";
        // line 81
        yield Twig\Extension\CoreExtension::include($this->env, $context, "service/_delete_form.html.twig");
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
        return "service/show.html.twig";
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
        return array (  218 => 81,  212 => 78,  200 => 71,  194 => 68,  181 => 58,  175 => 55,  169 => 52,  163 => 49,  150 => 39,  144 => 36,  138 => 33,  132 => 30,  126 => 27,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Service Details{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-cogs me-2\"></i>Service Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Complete service information</p>
                    </div>
                    <a href=\"{{ path('app_serve_index') }}\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Basic Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-hashtag me-2\"></i>Service ID</dt>
                                    <dd class=\"col-sm-8\">{{ service.idService }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-signature me-2\"></i>Name</dt>
                                    <dd class=\"col-sm-8\">{{ service.nom }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-tag me-2\"></i>Type</dt>
                                    <dd class=\"col-sm-8\">{{ service.type }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-euro-sign me-2\"></i>Price</dt>
                                    <dd class=\"col-sm-8\">{{ service.prix }} TND</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-map-marker-alt me-2\"></i>Region</dt>
                                    <dd class=\"col-sm-8\">{{ service.gouvernerat }}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-clock me-2\"></i>Contact & Schedule</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-phone me-2\"></i>Phone</dt>
                                    <dd class=\"col-sm-8\">{{ service.numero }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-envelope me-2\"></i>Email</dt>
                                    <dd class=\"col-sm-8\">{{ service.email }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-door-open me-2\"></i>Opening</dt>
                                    <dd class=\"col-sm-8\">{{ service.getHeureOuverture() }}</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-door-closed me-2\"></i>Closing</dt>
                                    <dd class=\"col-sm-8\">{{ service.getHeureFermeture() }}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"bg-light p-3 rounded\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-align-left me-2\"></i>Additional Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-2 text-muted\"><i class=\"fas fa-file-alt me-2\"></i>Description</dt>
                                    <dd class=\"col-sm-10\">{{ service.description }}</dd>

                                    <dt class=\"col-sm-2 text-muted\"><i class=\"fas fa-map-pin me-2\"></i>Location</dt>
                                    <dd class=\"col-sm-10\">Latitude: {{ service.latitude }}, Longitude: {{ service.longitude }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <a href=\"{{ path('app_serve_edit', {'id_service': service.idService}) }}\" class=\"btn btn-warning me-2\">
                            <i class=\"fas fa-edit me-2\"></i>Edit
                        </a>
                        {{ include('service/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "service/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\service\\show.html.twig");
    }
}
