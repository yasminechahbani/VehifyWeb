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

/* BackOffice/carte_grise/edit.html.twig */
class __TwigTemplate_8e39ec304823c3904da488931beda9a8 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/carte_grise/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/carte_grise/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/carte_grise/edit.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Modifier la Carte Grise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Modifier la Carte Grise</h4>
                        <p class=\"text-muted small mb-0\">Modifier les informations de la carte grise</p>
                    </div>
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                   
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        // line 34
        yield "
                                <div class=\"text-muted small mt-1\">Le numéro de carte grise ne peut pas être modifié</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "proprietaire", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "proprietaire", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "required" => true, "pattern" => "^[A-Za-zÀ-ÿs-]+\$", "minlength" => "3", "maxlength" => "50"]]);
        // line 50
        yield "
                                <div class=\"invalid-feedback\">Nom du propriétaire invalide (3-50 caractères)</div>
                                <div class=\"text-danger\">";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "proprietaire", [], "any", false, false, false, 52), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "required" => true, "minlength" => "5", "maxlength" => "100"]]);
        // line 66
        yield "
                                <div class=\"invalid-feedback\">Adresse invalide (5-100 caractères)</div>
                                <div class=\"text-danger\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "dateEmission", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "dateEmission", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "required" => true]]);
        // line 80
        yield "
                                <div class=\"invalid-feedback\">Date d'émission invalide</div>
                                <div class=\"text-danger\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "dateEmission", [], "any", false, false, false, 82), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <!-- Removed dateExpiration field -->
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <button type=\"submit\" class=\"btn btn-warning px-4\">
                            Enregistrer les modifications
                        </button>
                    </div>

                    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 102
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

        // line 103
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
        // Removed date range validation
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
        return "BackOffice/carte_grise/edit.html.twig";
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
        return array (  241 => 103,  218 => 102,  208 => 95,  192 => 82,  188 => 80,  186 => 75,  182 => 74,  173 => 68,  169 => 66,  167 => 59,  163 => 58,  154 => 52,  150 => 50,  148 => 42,  144 => 41,  135 => 34,  133 => 29,  129 => 28,  121 => 23,  112 => 17,  101 => 8,  88 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/BackOffice/carte_grise/edit.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Modifier la Carte Grise{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Modifier la Carte Grise</h4>
                        <p class=\"text-muted small mb-0\">Modifier les informations de la carte grise</p>
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
                                {{ form_label(form.numeroCarteGrise, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.numeroCarteGrise, {
                                    'attr': {
                                        'class': 'form-control',
                                        'readonly': 'readonly'
                                    }
                                }) }}
                                <div class=\"text-muted small mt-1\">Le numéro de carte grise ne peut pas être modifié</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.proprietaire, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.proprietaire, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true,
                                        'pattern': '^[A-Za-zÀ-ÿ\\s\\-]+\$',
                                        'minlength': '3',
                                        'maxlength': '50'
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">Nom du propriétaire invalide (3-50 caractères)</div>
                                <div class=\"text-danger\">{{ form_errors(form.proprietaire) }}</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.adresseProprietaire, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.adresseProprietaire, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true,
                                        'minlength': '5',
                                        'maxlength': '100'
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">Adresse invalide (5-100 caractères)</div>
                                <div class=\"text-danger\">{{ form_errors(form.adresseProprietaire) }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group bg-light p-3 rounded\">
                                {{ form_label(form.dateEmission, null, {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.dateEmission, {
                                    'attr': {
                                        'class': 'form-control',
                                        'required': true
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">Date d'émission invalide</div>
                                <div class=\"text-danger\">{{ form_errors(form.dateEmission) }}</div>
                            </div>
                        </div>

                        <!-- Removed dateExpiration field -->
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
        // Removed date range validation
    })()
</script>
{% endblock %}
{% endblock %}", "BackOffice/carte_grise/edit.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\BackOffice\\carte_grise\\edit.html.twig");
    }
}
