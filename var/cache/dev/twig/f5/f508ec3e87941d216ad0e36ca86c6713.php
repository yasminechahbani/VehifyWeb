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

/* employe/_form.html.twig */
class __TwigTemplate_eefd82fa7e1a6bc99014d90b3ab8d087 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", ["error"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "    <div class=\"alert alert-success\">
        ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'label', ["label" => "Nom"]);
        yield "
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'errors');
        yield " ";
        // line 20
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'label', ["label" => "Prénom"]);
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'errors');
        yield " ";
        // line 26
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'label', ["label" => "Email"]);
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        yield " ";
        // line 32
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "age", [], "any", false, false, false, 35), 'label', ["label" => "Âge"]);
        yield "
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "age", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "min" => "18", "max" => "99"]]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "age", [], "any", false, false, false, 37), 'errors');
        yield " ";
        // line 38
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
             
            <div class=\"form-group\">
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 44), 'label', ["label" => "Date d'embauche"]);
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "min" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
        // line 50
        yield "
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 51), 'errors');
        yield "
    </div>

            <div class=\"form-group\">
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "poste", [], "any", false, false, false, 55), 'label', ["label" => "Poste"]);
        yield "
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "poste", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "poste", [], "any", false, false, false, 57), 'errors');
        yield " ";
        // line 58
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "tel", [], "any", false, false, false, 61), 'label', ["label" => "Téléphone"]);
        yield "
                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "tel", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "tel", [], "any", false, false, false, 63), 'errors');
        yield " ";
        // line 64
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "salaire", [], "any", false, false, false, 67), 'label', ["label" => "Salaire"]);
        yield "
                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "salaire", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "step" => "0.01"]]);
        yield "
                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "salaire", [], "any", false, false, false, 69), 'errors');
        yield " ";
        // line 70
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "statut", [], "any", false, false, false, 73), 'label', ["label" => "Statut"]);
        yield "
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75), 'errors');
        yield " ";
        // line 76
        yield "            </div>
        </div>
    </div>

    <div class=\"card-action\">
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 81, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"btn btn-danger\">Annuler</a>
    </div>
";
        // line 84
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employe/_form.html.twig";
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
        return array (  251 => 84,  246 => 82,  242 => 81,  235 => 76,  232 => 75,  228 => 74,  224 => 73,  219 => 70,  216 => 69,  212 => 68,  208 => 67,  203 => 64,  200 => 63,  196 => 62,  192 => 61,  187 => 58,  184 => 57,  180 => 56,  176 => 55,  169 => 51,  166 => 50,  164 => 45,  160 => 44,  152 => 38,  149 => 37,  145 => 36,  141 => 35,  136 => 32,  133 => 31,  129 => 30,  125 => 29,  120 => 26,  117 => 25,  113 => 24,  109 => 23,  104 => 20,  101 => 19,  97 => 18,  93 => 17,  86 => 13,  83 => 12,  74 => 9,  71 => 8,  67 => 7,  64 => 6,  55 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">
        {{ message }}
    </div>
{% endfor %}

{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.nom, 'Nom') }}
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.nom) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.prenom, 'Prénom') }}
                {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.prenom) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.email, 'Email') }}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.email) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.age, 'Âge') }}
                {{ form_widget(form.age, {'attr': {'class': 'form-control', 'min': '18', 'max': '99'}}) }}
                {{ form_errors(form.age) }} {# Ajoutez l'affichage des erreurs #}
            </div>
        </div>

        <div class=\"col-md-6\">
             
            <div class=\"form-group\">
        {{ form_label(form.dateEmbauche, 'Date d\\'embauche') }}
        {{ form_widget(form.dateEmbauche, {
            'attr': {
                'class': 'form-control',
                'min': \"now\"|date(\"Y-m-d\")
            }
        }) }}
        {{ form_errors(form.dateEmbauche) }}
    </div>

            <div class=\"form-group\">
                {{ form_label(form.poste, 'Poste') }}
                {{ form_widget(form.poste, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.poste) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.tel, 'Téléphone') }}
                {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.tel) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.salaire, 'Salaire') }}
                {{ form_widget(form.salaire, {'attr': {'class': 'form-control', 'step': '0.01'}}) }}
                {{ form_errors(form.salaire) }} {# Ajoutez l'affichage des erreurs #}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.statut, 'Statut') }}
                {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.statut) }} {# Ajoutez l'affichage des erreurs #}
            </div>
        </div>
    </div>

    <div class=\"card-action\">
        <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Enregistrer') }}</button>
        <a href=\"{{ path('app_employe_index') }}\" class=\"btn btn-danger\">Annuler</a>
    </div>
{{ form_end(form) }}", "employe/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\employe\\_form.html.twig");
    }
}
