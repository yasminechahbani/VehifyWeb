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

/* paiement/_form.html.twig */
class __TwigTemplate_8c46f02ca8e9ff537f75f9f1b2526948 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/_form.html.twig"));

        // line 1
        $context["active_page"] = "home";
        // line 2
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Ajouter un paiement</h1>

    <div class=\"alert alert-warning mb-4\" role=\"alert\">
        La saisie automatique des modes de paiement est désactivée, car la connexion utilisée par ce formulaire n'est pas sécurisée.
    </div>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "reservation", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réservation"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "reservation", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "reservation", [], "any", false, false, false, 15), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "reservation", [], "any", false, false, false, 16), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "datePaiement", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de paiement"]);
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "datePaiement", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "datePaiement", [], "any", false, false, false, 21), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "datePaiement", [], "any", false, false, false, 22), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prix", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Montant"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "statut", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield "
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "statut", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => ("form-select" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "statut", [], "any", false, false, false, 35), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "statut", [], "any", false, false, false, 36), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "numeroCarte", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Numéro de carte"]);
        yield "
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "numeroCarte", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "numeroCarte", [], "any", false, false, false, 41), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "numeroCarte", [], "any", false, false, false, 42), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "dateExpiration", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date d'expiration"]);
        yield "
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "dateExpiration", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "dateExpiration", [], "any", false, false, false, 47), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dateExpiration", [], "any", false, false, false, 48), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "cvv", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "CVV"]);
        yield "
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "cvv", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "cvv", [], "any", false, false, false, 55), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "cvv", [], "any", false, false, false, 56), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nomTitulaireCarte", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du titulaire"]);
        yield "
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nomTitulaireCarte", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nomTitulaireCarte", [], "any", false, false, false, 61), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nomTitulaireCarte", [], "any", false, false, false, 62), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "telephone", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "telephone", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "telephone", [], "any", false, false, false, 67), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "telephone", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mt-3\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 75, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
    </div>
    ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
        yield "
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "paiement/_form.html.twig";
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
        return array (  214 => 77,  209 => 75,  199 => 68,  195 => 67,  191 => 66,  184 => 62,  180 => 61,  176 => 60,  169 => 56,  165 => 55,  161 => 54,  152 => 48,  148 => 47,  144 => 46,  137 => 42,  133 => 41,  129 => 40,  122 => 36,  118 => 35,  114 => 34,  105 => 28,  101 => 27,  97 => 26,  90 => 22,  86 => 21,  82 => 20,  75 => 16,  71 => 15,  67 => 14,  59 => 9,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set active_page = 'home' %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Ajouter un paiement</h1>

    <div class=\"alert alert-warning mb-4\" role=\"alert\">
        La saisie automatique des modes de paiement est désactivée, car la connexion utilisée par ce formulaire n'est pas sécurisée.
    </div>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    {{ form_label(form.reservation, \"Réservation\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.reservation, {'attr': {'class': 'form-control' ~ (form_errors(form.reservation) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.reservation) }}</div>
                </div>

                <div class=\"col-md-4\">
                    {{ form_label(form.datePaiement, \"Date de paiement\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.datePaiement, {'attr': {'class': 'form-control' ~ (form_errors(form.datePaiement) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.datePaiement) }}</div>
                </div>

                <div class=\"col-md-4\">
                    {{ form_label(form.prix, \"Montant\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.prix, {'attr': {'class': 'form-control' ~ (form_errors(form.prix) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.prix) }}</div>
                </div>
            </div>

            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    {{ form_label(form.statut, \"Statut\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.statut, {'attr': {'class': 'form-select' ~ (form_errors(form.statut) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.statut) }}</div>
                </div>

                <div class=\"col-md-4\">
                    {{ form_label(form.numeroCarte, \"Numéro de carte\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.numeroCarte, {'attr': {'class': 'form-control' ~ (form_errors(form.numeroCarte) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.numeroCarte) }}</div>
                </div>

                <div class=\"col-md-4\">
                    {{ form_label(form.dateExpiration, \"Date d'expiration\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.dateExpiration, {'attr': {'class': 'form-control' ~ (form_errors(form.dateExpiration) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.dateExpiration) }}</div>
                </div>
            </div>

            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    {{ form_label(form.cvv, \"CVV\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.cvv, {'attr': {'class': 'form-control' ~ (form_errors(form.cvv) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.cvv) }}</div>
                </div>

                <div class=\"col-md-4\">
                    {{ form_label(form.nomTitulaireCarte, \"Nom du titulaire\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.nomTitulaireCarte, {'attr': {'class': 'form-control' ~ (form_errors(form.nomTitulaireCarte) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.nomTitulaireCarte) }}</div>
                </div>

                <div class=\"col-md-4\">
                    {{ form_label(form.telephone, \"Téléphone\", {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control' ~ (form_errors(form.telephone) ? ' is-invalid' : '')}}) }}
                    <div class=\"invalid-feedback\">{{ form_errors(form.telephone) }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mt-3\">
        <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
    </div>
    {{ form_end(form) }}
</div>", "paiement/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\paiement\\_form.html.twig");
    }
}
