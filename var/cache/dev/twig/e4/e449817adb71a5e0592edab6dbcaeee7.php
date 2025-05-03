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
class __TwigTemplate_84245dd9c0334ade9ba4d6e72ebd478a extends Template
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
        yield "
<div class=\"container\">
    ";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "dateReservation", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de réservation"]);
        yield "
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "dateReservation", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control datepicker", "readonly" => "readonly"]]);
        yield "
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "dateReservation", [], "any", false, false, false, 9), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "heureReservation", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de réservation"]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "heureReservation", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control timepicker", "readonly" => "readonly"]]);
        yield "
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "heureReservation", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
    </div>

   
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vehiculeId", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Véhicule"]);
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vehiculeId", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vehiculeId", [], "any", false, false, false, 26), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <button class=\"btn btn-primary me-2 ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("btn_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btn_class"]) || array_key_exists("btn_class", $context) ? $context["btn_class"] : (function () { throw new RuntimeError('Variable "btn_class" does not exist.', 32, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
    </div>
";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer les paramètres de l'URL
        const urlParams = new URLSearchParams(window.location.search);
        const dateParam = urlParams.get('date');
        const heureParam = urlParams.get('heure');
        
        // Si une date est passée en paramètre, la définir dans le champ de date
        if (dateParam) {
            const dateField = document.querySelector('input[name*=\"dateReservation\"]');
            if (dateField) {
                dateField.value = dateParam;
            }
        }
        
        // Si une heure est passée en paramètre, la définir dans le champ d'heure
        if (heureParam) {
            const heureField = document.querySelector('input[name*=\"heureReservation\"]');
            if (heureField) {
                heureField.value = heureParam;
            }
        }
    });
</script>
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
        return array (  118 => 34,  111 => 32,  102 => 26,  98 => 25,  94 => 24,  83 => 16,  79 => 15,  75 => 14,  67 => 9,  63 => 8,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"container\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                {{ form_label(form.dateReservation, \"Date de réservation\", {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.dateReservation, {'attr': {'class': 'form-control datepicker', 'readonly': 'readonly'}}) }}
                {{ form_errors(form.dateReservation, {'attr': {'class': 'invalid-feedback'}}) }}
            </div>
        </div>
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                {{ form_label(form.heureReservation, \"Heure de réservation\", {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.heureReservation, {'attr': {'class': 'form-control timepicker', 'readonly': 'readonly'}}) }}
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
        <button class=\"btn btn-primary me-2 {{ btn_class|default('') }}\">{{ button_label|default('Enregistrer') }}</button>
    </div>
{{ form_end(form) }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer les paramètres de l'URL
        const urlParams = new URLSearchParams(window.location.search);
        const dateParam = urlParams.get('date');
        const heureParam = urlParams.get('heure');
        
        // Si une date est passée en paramètre, la définir dans le champ de date
        if (dateParam) {
            const dateField = document.querySelector('input[name*=\"dateReservation\"]');
            if (dateField) {
                dateField.value = dateParam;
            }
        }
        
        // Si une heure est passée en paramètre, la définir dans le champ d'heure
        if (heureParam) {
            const heureField = document.querySelector('input[name*=\"heureReservation\"]');
            if (heureField) {
                heureField.value = heureParam;
            }
        }
    });
</script>
", "reservation/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\reservation\\_form.html.twig");
    }
}
