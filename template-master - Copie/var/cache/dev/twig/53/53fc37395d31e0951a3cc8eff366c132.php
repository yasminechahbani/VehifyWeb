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

/* permis/_form.html.twig */
class __TwigTemplate_aefbda789d116aad852a3fef720d6e2b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => ((array_key_exists("form_id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_id"]) || array_key_exists("form_id", $context) ? $context["form_id"] : (function () { throw new RuntimeError('Variable "form_id" does not exist.', 1, $this->source); })()), "permis_form")) : ("permis_form")), "class" => "needs-validation"]]);
        yield "
    <div class=\"row g-3\">
        ";
        // line 4
        yield "        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "numero_permis", [], "any", false, false, false, 6), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control", "placeholder" => "Entrez le numéro du permis"]]);
        // line 12
        yield "
            </div>
        </div>
        ";
        // line 16
        yield "        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "categorie", [], "any", false, false, false, 18), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-select"]]);
        // line 23
        yield "
            </div>
        </div>

        ";
        // line 28
        yield "        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date_delivrance", [], "any", false, false, false, 30), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control datepicker", "placeholder" => "JJ/MM/AAAA"]]);
        // line 36
        yield "
            </div>
        </div>

        ";
        // line 41
        yield "        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "etat", [], "any", false, false, false, 43), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-select"]]);
        // line 48
        yield "
            </div>
        </div>
    </div>

    ";
        // line 54
        yield "    ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54)) {
            // line 55
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'errors');
            yield "
        </div>
    ";
        }
        // line 59
        yield "
    ";
        // line 61
        yield "    <div class=\"d-flex justify-content-end mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 63, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
    </div>

    ";
        // line 68
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'rest');
        yield "
";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        yield "

";
        // line 71
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        // line 72
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize datepicker for date fields
    const dateInputs = document.querySelectorAll('.datepicker');
    dateInputs.forEach(input => {
        if (typeof flatpickr !== 'undefined') {
            flatpickr(input, {
                dateFormat: \"Y-m-d\",
                locale: \"fr\",
                allowInput: true
            });
        }
    });

    // Form validation
    const form = document.getElementById('";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_id"]) || array_key_exists("form_id", $context) ? $context["form_id"] : (function () { throw new RuntimeError('Variable "form_id" does not exist.', 87, $this->source); })()), "permis_form")) : ("permis_form")), "html", null, true);
        yield "');
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});
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
        return "permis/_form.html.twig";
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
        return array (  178 => 87,  161 => 72,  138 => 71,  133 => 69,  128 => 68,  121 => 63,  117 => 61,  114 => 59,  108 => 56,  105 => 55,  102 => 54,  95 => 48,  93 => 43,  89 => 41,  83 => 36,  81 => 30,  77 => 28,  71 => 23,  69 => 18,  65 => 16,  60 => 12,  58 => 6,  54 => 4,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'id': form_id|default('permis_form'), 'class': 'needs-validation'}}) }}
    <div class=\"row g-3\">
        {# Permit Number #}
        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                {{ form_row(form.numero_permis, {
                    'label_attr': {'class': 'form-label'},
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Entrez le numéro du permis'
                    }
                }) }}
            </div>
        </div>
        {# Category #}
        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                {{ form_row(form.categorie, {
                    'label_attr': {'class': 'form-label'},
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
            </div>
        </div>

        {# Delivery Date #}
        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                {{ form_row(form.date_delivrance, {
                    'label_attr': {'class': 'form-label'},
                    'attr': {
                        'class': 'form-control datepicker',
                        'placeholder': 'JJ/MM/AAAA'
                    }
                }) }}
            </div>
        </div>

        {# Status #}
        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                {{ form_row(form.etat, {
                    'label_attr': {'class': 'form-label'},
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
            </div>
        </div>
    </div>

    {# Error Messages #}
    {% if not form.vars.valid %}
        <div class=\"alert alert-danger\">
            {{ form_errors(form) }}
        </div>
    {% endif %}

    {# Submit Button #}
    <div class=\"d-flex justify-content-end mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>{{ button_label|default('Enregistrer') }}
        </button>
    </div>

    {# Render any remaining fields #}
    {{ form_rest(form) }}
{{ form_end(form) }}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize datepicker for date fields
    const dateInputs = document.querySelectorAll('.datepicker');
    dateInputs.forEach(input => {
        if (typeof flatpickr !== 'undefined') {
            flatpickr(input, {
                dateFormat: \"Y-m-d\",
                locale: \"fr\",
                allowInput: true
            });
        }
    });

    // Form validation
    const form = document.getElementById('{{ form_id|default('permis_form') }}');
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});
</script>
{% endblock %}", "permis/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\permis\\_form.html.twig");
    }
}
