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

/* service/index.html.twig */
class __TwigTemplate_8b02807b524f6e4c2ed7abfedfc6e758 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/index.html.twig", 1);
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

        yield "Services Management";
        
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
                        <h4 class=\"mb-1\"><i class=\"fas fa-cogs me-2\"></i>Services Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage all available services</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_new");
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-plus me-2\"></i>Add New Service
                    </a>
                </div>

                <div class=\"card-body\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " d-flex align-items-center\">
                                <i class=\"fas fa-info-circle me-2\"></i>
                                ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-hashtag me-2\"></i>ID</th>
                                    <th><i class=\"fas fa-signature me-2\"></i>Nom</th>
                                    <th><i class=\"fas fa-tag me-2\"></i>Type</th>
                                    <th><i class=\"fas fa-clock me-2\"></i>Heures</th>
                                    <th><i class=\"fas fa-euro-sign me-2\"></i>Prix</th>
                                    <th><i class=\"fas fa-map-marker-alt me-2\"></i>Gouvernorat</th>
                                    <th><i class=\"fas fa-phone me-2\"></i>Contact</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 46
            yield "                                    <tr>
                                        <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "idService", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                        <td><span class=\"badge bg-info\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 49), "html", null, true);
            yield "</span></td>
                                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "heureOuverture", [], "any", false, false, false, 50), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "heureFermeture", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "prix", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "gouvernerat", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "numero", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_show", ["id_service" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id_service", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_edit", ["id_service" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id_service", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Service
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        ";
            // line 72
            yield Twig\Extension\CoreExtension::include($this->env, $context, "service/_delete_form.html.twig");
            yield "
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "                                    <tr>
                                        <td colspan=\"8\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-0\">No services found</p>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return "service/index.html.twig";
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
        return array (  275 => 85,  264 => 79,  262 => 78,  243 => 72,  234 => 66,  226 => 61,  215 => 53,  211 => 52,  207 => 51,  201 => 50,  197 => 49,  193 => 48,  189 => 47,  186 => 46,  168 => 45,  150 => 29,  144 => 28,  135 => 25,  129 => 23,  124 => 22,  120 => 21,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Services Management{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-cogs me-2\"></i>Services Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage all available services</p>
                    </div>
                    <a href=\"{{ path('app_serve_new') }}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-plus me-2\"></i>Add New Service
                    </a>
                </div>

                <div class=\"card-body\">
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label }} d-flex align-items-center\">
                                <i class=\"fas fa-info-circle me-2\"></i>
                                {{ message }}
                            </div>
                        {% endfor %}
                    {% endfor %}

                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle border-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th class=\"rounded-start\"><i class=\"fas fa-hashtag me-2\"></i>ID</th>
                                    <th><i class=\"fas fa-signature me-2\"></i>Nom</th>
                                    <th><i class=\"fas fa-tag me-2\"></i>Type</th>
                                    <th><i class=\"fas fa-clock me-2\"></i>Heures</th>
                                    <th><i class=\"fas fa-euro-sign me-2\"></i>Prix</th>
                                    <th><i class=\"fas fa-map-marker-alt me-2\"></i>Gouvernorat</th>
                                    <th><i class=\"fas fa-phone me-2\"></i>Contact</th>
                                    <th class=\"rounded-end text-end\"><i class=\"fas fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody class=\"border-0\">
                                {% for service in services %}
                                    <tr>
                                        <td>{{ service.idService }}</td>
                                        <td>{{ service.nom }}</td>
                                        <td><span class=\"badge bg-info\">{{ service.type }}</span></td>
                                        <td>{{ service.heureOuverture }} - {{ service.heureFermeture }}</td>
                                        <td>{{ service.prix }}</td>
                                        <td>{{ service.gouvernerat }}</td>
                                        <td>{{ service.numero }}</td>
                                        <td>
                                            <div class=\"btn-group float-end\">
                                                <button type=\"button\" class=\"btn btn-light btn-sm\" data-bs-toggle=\"dropdown\">
                                                    <i class=\"fas fa-ellipsis-v\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_serve_show', {'id_service': service.id_service}) }}\">
                                                            <i class=\"fas fa-eye text-info me-2\"></i>View Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_serve_edit', {'id_service': service.id_service}) }}\">
                                                            <i class=\"fas fa-edit text-warning me-2\"></i>Edit Service
                                                        </a>
                                                    </li>
                                                    <li><hr class=\"dropdown-divider\"></li>
                                                    <li>
                                                        {{ include('service/_delete_form.html.twig') }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"8\" class=\"text-center py-4\">
                                            <p class=\"text-muted mb-0\">No services found</p>
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
{% endblock %}", "service/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\service\\index.html.twig");
    }
}
