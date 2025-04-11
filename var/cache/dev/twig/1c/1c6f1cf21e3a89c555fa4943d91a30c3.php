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

/* equipement/_form.html.twig */
class __TwigTemplate_0718c154027a9a22b2a58eae3b6025b3 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'label', ["label" => "Nom"]);
        yield "
                ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'errors');
        yield " ";
        // line 8
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'label', ["label" => "Description"]);
        yield "
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'errors');
        yield " ";
        // line 14
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "categorie", [], "any", false, false, false, 17), 'label', ["label" => "Catégorie"]);
        yield "
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "categorie", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "categorie", [], "any", false, false, false, 19), 'errors');
        yield " ";
        // line 20
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25), 'label', ["label" => "État"]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "etat", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "etat", [], "any", false, false, false, 27), 'errors');
        yield " ";
        // line 28
        yield "            </div>
             

        </div>
    </div>

    <div class=\"card-action\">
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
        <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"btn btn-danger\">Annuler</a>
    </div>
";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "equipement/_form.html.twig";
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
        return array (  134 => 38,  129 => 36,  125 => 35,  116 => 28,  113 => 27,  109 => 26,  105 => 25,  98 => 20,  95 => 19,  91 => 18,  87 => 17,  82 => 14,  79 => 13,  75 => 12,  71 => 11,  66 => 8,  63 => 7,  59 => 6,  55 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.nom, 'Nom') }}
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.nom) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.description, 'Description') }}
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.description) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.categorie, 'Catégorie') }}
                {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.categorie) }} {# Ajoutez l'affichage des erreurs #}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.etat, 'État') }}
                {{ form_widget(form.etat, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.etat) }} {# Ajoutez l'affichage des erreurs #}
            </div>
             

        </div>
    </div>

    <div class=\"card-action\">
        <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Enregistrer') }}</button>
        <a href=\"{{ path('app_employe_index') }}\" class=\"btn btn-danger\">Annuler</a>
    </div>
{{ form_end(form) }}
", "equipement/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\equipement\\_form.html.twig");
    }
}
