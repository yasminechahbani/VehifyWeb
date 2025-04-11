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

/* employe/show.html.twig */
class __TwigTemplate_8e30752e54e5ff2dfec9d08e598fcca2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/show.html.twig", 1);
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

        yield "Employee Details";
        
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
        yield "<div class=\"card\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"mb-0\">Employee Details</h5>
        <div>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to list
            </a>
        </div>
    </div>
    <div class=\"card-body\">
        <table class=\"table table-sm\">
            <tbody>
                <tr>
                    <th width=\"30%\"><strong>Last Name</strong></th>
                    <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>First Name</strong></th>
                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Email</strong></th>
                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Age</strong></th>
                    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 32, $this->source); })()), "age", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Position</strong></th>
                    <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 36, $this->source); })()), "poste", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Phone</strong></th>
                    <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 40, $this->source); })()), "tel", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Salary</strong></th>
                    <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 44, $this->source); })()), "salaire", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Status</strong></th>
                    <td>
                        <span class=\"badge ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49) == "Active")) {
            yield "badge-success";
        } else {
            yield "badge-danger";
        }
        yield "\">
                            ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50), "html", null, true);
        yield "
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"mt-4\">
            <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_edit", ["id_employe" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 58, $this->source); })()), "id_employe", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn btn-primary mr-2\">
                <i class=\"fas fa-edit\"></i> Edit
            </a>
            
            ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "employe/_delete_form.html.twig");
        yield "
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
        return "employe/show.html.twig";
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
        return array (  195 => 62,  188 => 58,  177 => 50,  169 => 49,  161 => 44,  154 => 40,  147 => 36,  140 => 32,  133 => 28,  126 => 24,  119 => 20,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Employee Details{% endblock %}

{% block body %}
<div class=\"card\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"mb-0\">Employee Details</h5>
        <div>
            <a href=\"{{ path('app_employe_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to list
            </a>
        </div>
    </div>
    <div class=\"card-body\">
        <table class=\"table table-sm\">
            <tbody>
                <tr>
                    <th width=\"30%\"><strong>Last Name</strong></th>
                    <td>{{ employe.nom }}</td>
                </tr>
                <tr>
                    <th><strong>First Name</strong></th>
                    <td>{{ employe.prenom }}</td>
                </tr>
                <tr>
                    <th><strong>Email</strong></th>
                    <td>{{ employe.email }}</td>
                </tr>
                <tr>
                    <th><strong>Age</strong></th>
                    <td>{{ employe.age }}</td>
                </tr>
                <tr>
                    <th><strong>Position</strong></th>
                    <td>{{ employe.poste }}</td>
                </tr>
                <tr>
                    <th><strong>Phone</strong></th>
                    <td>{{ employe.tel }}</td>
                </tr>
                <tr>
                    <th><strong>Salary</strong></th>
                    <td>{{ employe.salaire }}</td>
                </tr>
                <tr>
                    <th><strong>Status</strong></th>
                    <td>
                        <span class=\"badge {% if employe.statut == 'Active' %}badge-success{% else %}badge-danger{% endif %}\">
                            {{ employe.statut }}
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"mt-4\">
            <a href=\"{{ path('app_employe_edit', {'id_employe': employe.id_employe}) }}\" class=\"btn btn-primary mr-2\">
                <i class=\"fas fa-edit\"></i> Edit
            </a>
            
            {{ include('employe/_delete_form.html.twig') }}
        </div>
    </div>
</div>
{% endblock %}", "employe/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\employe\\show.html.twig");
    }
}
