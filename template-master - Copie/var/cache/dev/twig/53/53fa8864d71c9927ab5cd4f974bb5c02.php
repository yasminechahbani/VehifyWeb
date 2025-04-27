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

/* BackOffice/vehicule/edit.html.twig */
class __TwigTemplate_4b65a67ba13b317b814bce75cc1d18fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/vehicule/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/vehicule/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/vehicule/edit.html.twig", 1);
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

        yield "Modifier le Véhicule";
        
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
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Modifier le Véhicule</h4>
                        <p class=\"text-muted small mb-0\">Modifier les informations du véhicule</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "marque", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "marque", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-z0-9s-]+\$", "minlength" => "2", "maxlength" => "50"]]);
        // line 35
        yield "
                                <div class=\"invalid-feedback\">La marque doit contenir entre 2 et 50 caractères</div>
                                <div class=\"text-danger\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "marque", [], "any", false, false, false, 37), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "modele", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "modele", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-z0-9s-]+\$", "minlength" => "2", "maxlength" => "50"]]);
        // line 52
        yield "
                                <div class=\"invalid-feedback\">Le modèle doit contenir entre 2 et 50 caractères</div>
                                <div class=\"text-danger\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "modele", [], "any", false, false, false, 54), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "immatriculation", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "immatriculation", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        // line 66
        yield "
                                <div class=\"invalid-feedback\">Veuillez entrer un numéro d'immatriculation</div>
                                <div class=\"text-danger\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "immatriculation", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "kilometrage", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "kilometrage", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "required" => true, "min" => "0", "max" => "999999", "type" => "number"]]);
        // line 83
        yield "
                                <div class=\"invalid-feedback\">Le kilométrage doit être entre 0 et 999999</div>
                                <div class=\"text-danger\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "kilometrage", [], "any", false, false, false, 85), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "type", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "type", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        yield "
                                <div class=\"invalid-feedback\">Veuillez sélectionner un type</div>
                                <div class=\"text-danger\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "type", [], "any", false, false, false, 94), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "couleur", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "couleur", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-zs]+\$"]]);
        // line 107
        yield "
                                <div class=\"invalid-feedback\">Veuillez entrer une couleur valide</div>
                                <div class=\"text-danger\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "couleur", [], "any", false, false, false, 109), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "statut", [], "any", false, false, false, 115), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "statut", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        yield "
                                <div class=\"invalid-feedback\">Veuillez sélectionner un statut</div>
                                <div class=\"text-danger\">";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "statut", [], "any", false, false, false, 118), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "carteGrise", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "carteGrise", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        yield "
                                <div class=\"invalid-feedback\">Veuillez sélectionner une carte grise</div>
                                <div class=\"text-danger\">";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "carteGrise", [], "any", false, false, false, 127), 'errors');
        yield "</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <button type=\"submit\" class=\"btn btn-warning px-4\">
                            Enregistrer les modifications
                        </button>
                    </div>

                    ";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 145
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

        // line 146
        yield "<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
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
        return "BackOffice/vehicule/edit.html.twig";
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
        return array (  316 => 146,  293 => 145,  283 => 138,  269 => 127,  264 => 125,  260 => 124,  251 => 118,  246 => 116,  242 => 115,  233 => 109,  229 => 107,  227 => 101,  223 => 100,  214 => 94,  209 => 92,  205 => 91,  196 => 85,  192 => 83,  190 => 75,  186 => 74,  177 => 68,  173 => 66,  171 => 61,  167 => 60,  158 => 54,  154 => 52,  152 => 44,  148 => 43,  139 => 37,  135 => 35,  133 => 27,  129 => 26,  121 => 21,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Véhicule{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Modifier le Véhicule</h4>
                        <p class=\"text-muted small mb-0\">Modifier les informations du véhicule</p>
                    </div>
                    <a href=\"{{ path('app_liste') }}\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.marque, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.marque, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true,
                                        'pattern': '^[A-Za-z0-9\\s\\-]+\$',
                                        'minlength': '2',
                                        'maxlength': '50'
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">La marque doit contenir entre 2 et 50 caractères</div>
                                <div class=\"text-danger\">{{ form_errors(form.marque) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.modele, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.modele, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true,
                                        'pattern': '^[A-Za-z0-9\\s\\-]+\$',
                                        'minlength': '2',
                                        'maxlength': '50'
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">Le modèle doit contenir entre 2 et 50 caractères</div>
                                <div class=\"text-danger\">{{ form_errors(form.modele) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.immatriculation, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.immatriculation, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">Veuillez entrer un numéro d'immatriculation</div>
                                <div class=\"text-danger\">{{ form_errors(form.immatriculation) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.kilometrage, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.kilometrage, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true,
                                        'min': '0',
                                        'max': '999999',
                                        'type': 'number'
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">Le kilométrage doit être entre 0 et 999999</div>
                                <div class=\"text-danger\">{{ form_errors(form.kilometrage) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.type, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.type, {'attr': {'class': 'form-control', 'required': true}}) }}
                                <div class=\"invalid-feedback\">Veuillez sélectionner un type</div>
                                <div class=\"text-danger\">{{ form_errors(form.type) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.couleur, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.couleur, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true,
                                        'pattern': '^[A-Za-z\\s]+\$'
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">Veuillez entrer une couleur valide</div>
                                <div class=\"text-danger\">{{ form_errors(form.couleur) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.statut, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.statut, {'attr': {'class': 'form-control', 'required': true}}) }}
                                <div class=\"invalid-feedback\">Veuillez sélectionner un statut</div>
                                <div class=\"text-danger\">{{ form_errors(form.statut) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.carteGrise, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.carteGrise, {'attr': {'class': 'form-control', 'required': true}}) }}
                                <div class=\"invalid-feedback\">Veuillez sélectionner une carte grise</div>
                                <div class=\"text-danger\">{{ form_errors(form.carteGrise) }}</div>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <button type=\"submit\" class=\"btn btn-warning px-4\">
                            Enregistrer les modifications
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
{% endblock %}
{% endblock %}
", "BackOffice/vehicule/edit.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\vehicule\\edit.html.twig");
    }
}
