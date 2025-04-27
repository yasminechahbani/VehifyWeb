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
class __TwigTemplate_04e042f8447ef4dacadaf5268753abbd extends Template
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
        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => ((array_key_exists("form_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_id"] ?? null), "permis_form")) : ("permis_form")), "class" => "needs-validation"]]);
        yield "
    <div class=\"row g-3\">
        ";
        // line 4
        yield "        <div class=\"col-md-6\">
            <div class=\"form-group mb-3\">
                ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numero_permis", [], "any", false, false, false, 6), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control", "placeholder" => "Entrez le numéro du permis"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 18), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-select"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_delivrance", [], "any", false, false, false, 30), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-control datepicker", "placeholder" => "JJ/MM/AAAA"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 43), 'row', ["label_attr" => ["class" => "form-label"], "attr" => ["class" => "form-select"]]);
        // line 48
        yield "
            </div>
        </div>
    </div>

    ";
        // line 54
        yield "    ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54)) {
            // line 55
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
    </div>

    ";
        // line 68
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

";
        // line 71
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_id"] ?? null), "permis_form")) : ("permis_form")), "html", null, true);
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
        return array (  160 => 87,  143 => 72,  132 => 71,  127 => 69,  122 => 68,  115 => 63,  111 => 61,  108 => 59,  102 => 56,  99 => 55,  96 => 54,  89 => 48,  87 => 43,  83 => 41,  77 => 36,  75 => 30,  71 => 28,  65 => 23,  63 => 18,  59 => 16,  54 => 12,  52 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "permis/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\permis\\_form.html.twig");
    }
}
