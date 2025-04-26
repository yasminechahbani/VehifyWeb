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

/* permis/edit.html.twig */
class __TwigTemplate_8e1c5fd1f5af4696e6c48b3f13152975 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseEmployeFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "permis/edit.html.twig", 1);
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

        yield "Modifier le Permis";
        
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
        yield "<div class=\"container py-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <!-- Add flash messages -->
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
            <nav aria-label=\"breadcrumb\" class=\"d-flex justify-content-between align-items-center\">
                <ol class=\"breadcrumb mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_front");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier le permis #";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 20, $this->source); })()), "numeroPermis", [], "any", false, false, false, 20), "html", null, true);
        yield "</li>
                </ol>
                <button type=\"submit\" form=\"permis_form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-save me-1\"></i>Enregistrer
                </button>
            </nav>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-edit text-primary me-2\"></i>Modifier le Permis
                        </h5>
                        <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_permisOne", ["id_permis" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 37, $this->source); })()), "idPermis", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "permis/_form.html.twig", ["button_label" => "Enregistrer les modifications", "form" =>         // line 45
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "form_id" => "permis_form"]);
        // line 47
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-4\">
            <!-- Add warning about date_delivrance -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations importantes
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>La date d'expiration sera mise à jour automatiquement si vous modifiez la date de délivrance.
                    </div>
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-lightbulb me-2\"></i>Vous modifiez les informations du permis n° ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 65, $this->source); })()), "numeroPermis", [], "any", false, false, false, 65), "html", null, true);
        yield "
                    </div>
                    <p>Veuillez vous assurer que toutes les informations saisies sont correctes avant d'enregistrer les modifications.</p>
                    <p class=\"mb-0\">Les champs marqués d'un astérisque (*) sont obligatoires.</p>
                </div>
            </div>
            
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-trash-alt text-danger me-2\"></i>Supprimer
                    </h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"text-danger mb-3\">Attention : La suppression d'un permis est définitive et ne peut pas être annulée.</p>
                    ";
        // line 80
        yield Twig\Extension\CoreExtension::include($this->env, $context, "permis/_delete_form.html.twig", ["button_class" => "btn-danger w-100"]);
        yield "
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

    // line 88
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

        // line 89
        yield "<style>
    /* Form styling */
    .form-label {
        font-weight: 500;
    }
    
    .required:after {
        content: \" *\";
        color: #dc3545;
    }
    
    /* Custom button styling */
    .btn-primary {
        background-color: #4361ee;
        border-color: #4361ee;
    }
    
    .btn-primary:hover {
        background-color: #3a56d4;
        border-color: #3a56d4;
    }
</style>
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
        return "permis/edit.html.twig";
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
        return array (  234 => 89,  221 => 88,  203 => 80,  185 => 65,  165 => 47,  163 => 45,  162 => 43,  153 => 37,  133 => 20,  129 => 19,  124 => 16,  114 => 12,  111 => 11,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseEmployeFront.html.twig' %}

{% block title %}Modifier le Permis{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <!-- Add flash messages -->
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            <nav aria-label=\"breadcrumb\" class=\"d-flex justify-content-between align-items-center\">
                <ol class=\"breadcrumb mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_employe_front') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier le permis #{{ permi.numeroPermis }}</li>
                </ol>
                <button type=\"submit\" form=\"permis_form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-save me-1\"></i>Enregistrer
                </button>
            </nav>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-edit text-primary me-2\"></i>Modifier le Permis
                        </h5>
                        <a href=\"{{ path('app_show_permisOne', {'id_permis': permi.idPermis}) }}\" class=\"btn btn-secondary btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    {{ include('permis/_form.html.twig', {
                        'button_label': 'Enregistrer les modifications',
                        'form': form,
                        'form_id': 'permis_form'
                    }) }}
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-4\">
            <!-- Add warning about date_delivrance -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations importantes
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>La date d'expiration sera mise à jour automatiquement si vous modifiez la date de délivrance.
                    </div>
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-lightbulb me-2\"></i>Vous modifiez les informations du permis n° {{ permi.numeroPermis }}
                    </div>
                    <p>Veuillez vous assurer que toutes les informations saisies sont correctes avant d'enregistrer les modifications.</p>
                    <p class=\"mb-0\">Les champs marqués d'un astérisque (*) sont obligatoires.</p>
                </div>
            </div>
            
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-trash-alt text-danger me-2\"></i>Supprimer
                    </h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"text-danger mb-3\">Attention : La suppression d'un permis est définitive et ne peut pas être annulée.</p>
                    {{ include('permis/_delete_form.html.twig', {'button_class': 'btn-danger w-100'}) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    /* Form styling */
    .form-label {
        font-weight: 500;
    }
    
    .required:after {
        content: \" *\";
        color: #dc3545;
    }
    
    /* Custom button styling */
    .btn-primary {
        background-color: #4361ee;
        border-color: #4361ee;
    }
    
    .btn-primary:hover {
        background-color: #3a56d4;
        border-color: #3a56d4;
    }
</style>
{% endblock %}
", "permis/edit.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\permis\\edit.html.twig");
    }
}
