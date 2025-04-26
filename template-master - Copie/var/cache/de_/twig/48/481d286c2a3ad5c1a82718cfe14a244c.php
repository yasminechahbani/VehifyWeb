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

/* reservation/_form.html.twig */
class __TwigTemplate_bea706f737debeb5a82e636ff947e555 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_form.html.twig"));

        // line 1
        yield "<div class=\"container\">
    ";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dateReservation", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de réservation"]);
        yield "
                ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "dateReservation", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "dateReservation", [], "any", false, false, false, 8), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "heureReservation", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de réservation"]);
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "heureReservation", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control timepicker"]]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "heureReservation", [], "any", false, false, false, 15), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
    </div>

   
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vehiculeId", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Véhicule"]);
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vehiculeId", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vehiculeId", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save\"></i> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
    </div>
    ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        yield "
</div>
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
        return "reservation/_form.html.twig";
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
        return array (  117 => 35,  111 => 32,  101 => 25,  97 => 24,  93 => 23,  82 => 15,  78 => 14,  74 => 13,  66 => 8,  62 => 7,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                {{ form_label(form.dateReservation, \"Date de réservation\", {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.dateReservation, {'attr': {'class': 'form-control datepicker'}}) }}
                {{ form_errors(form.dateReservation, {'attr': {'class': 'invalid-feedback'}}) }}
            </div>
        </div>
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                {{ form_label(form.heureReservation, \"Heure de réservation\", {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.heureReservation, {'attr': {'class': 'form-control timepicker'}}) }}
                {{ form_errors(form.heureReservation, {'attr': {'class': 'invalid-feedback'}}) }}
            </div>
        </div>
    </div>

   
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                {{ form_label(form.vehiculeId, \"Véhicule\", {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.vehiculeId, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.vehiculeId, {'attr': {'class': 'invalid-feedback'}}) }}
            </div>
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save\"></i> {{ button_label|default('Enregistrer') }}
        </button>
    </div>
    {{ form_end(form) }}
</div>
", "reservation/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\reservation\\_form.html.twig");
    }
}
