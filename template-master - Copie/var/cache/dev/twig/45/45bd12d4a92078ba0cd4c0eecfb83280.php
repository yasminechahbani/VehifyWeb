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

/* vehicule/_form.html.twig */
class __TwigTemplate_b2038458d299f9ba27787bf610013b8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
<div class=\"row g-3\">

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "marque", [], "any", false, false, false, 6), 'label');
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "marque", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "marque", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "valid", [], "any", false, false, false, 9)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: Peugeot"]]);
        // line 12
        yield "
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "marque", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 14
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 14), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "modele", [], "any", false, false, false, 21), 'label');
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "modele", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "modele", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "valid", [], "any", false, false, false, 24)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: 208"]]);
        // line 27
        yield "
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "modele", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 29
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 29), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "immatriculation", [], "any", false, false, false, 36), 'label');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "immatriculation", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "immatriculation", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "valid", [], "any", false, false, false, 39)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: AB-123-CD"]]);
        // line 42
        yield "
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "immatriculation", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 44
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 44), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), 'label');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: SUV, Berline..."]]);
        // line 57
        yield "
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 59
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 59), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "couleur", [], "any", false, false, false, 66), 'label');
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "couleur", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 69
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "couleur", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "valid", [], "any", false, false, false, 69)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: Rouge"]]);
        // line 72
        yield "
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "couleur", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 74
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 74), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "kilometrage", [], "any", false, false, false, 81), 'label');
        yield "
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "kilometrage", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "kilometrage", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "valid", [], "any", false, false, false, 84)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: 45000"]]);
        // line 87
        yield "
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "kilometrage", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 89
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 89), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "statut", [], "any", false, false, false, 96), 'label');
        yield "
            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "statut", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 99
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "statut", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "valid", [], "any", false, false, false, 99)) ? ("") : (" is-invalid"))), "placeholder" => "Visite faite, Visite non faite"]]);
        // line 102
        yield "
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "statut", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 104
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 104), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "carteGrise", [], "any", false, false, false, 111), 'label');
        yield "
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "carteGrise", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => ("form-select" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 114
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "carteGrise", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "valid", [], "any", false, false, false, 114)) ? ("") : (" is-invalid")))]]);
        // line 116
        yield "
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "carteGrise", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "errors", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 118
            yield "                <div class=\"invalid-feedback d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 118), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "        </div>
    </div>
    <div class=\"col-12 mt-4\">
        <button type=\"submit\" class=\"btn btn-primary me-2\">
            <i class=\"fas fa-save me-1\"></i> Enregistrer
        </button>
        <button type=\"reset\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-undo me-1\"></i> Réinitialiser
        </button>
    </div>

</div>
";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
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
        return "vehicule/_form.html.twig";
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
        return array (  303 => 132,  289 => 120,  280 => 118,  276 => 117,  273 => 116,  271 => 114,  270 => 112,  266 => 111,  259 => 106,  250 => 104,  246 => 103,  243 => 102,  241 => 99,  240 => 97,  236 => 96,  229 => 91,  220 => 89,  216 => 88,  213 => 87,  211 => 84,  210 => 82,  206 => 81,  199 => 76,  190 => 74,  186 => 73,  183 => 72,  181 => 69,  180 => 67,  176 => 66,  169 => 61,  160 => 59,  156 => 58,  153 => 57,  151 => 54,  150 => 52,  146 => 51,  139 => 46,  130 => 44,  126 => 43,  123 => 42,  121 => 39,  120 => 37,  116 => 36,  109 => 31,  100 => 29,  96 => 28,  93 => 27,  91 => 24,  90 => 22,  86 => 21,  79 => 16,  70 => 14,  66 => 13,  63 => 12,  61 => 9,  60 => 7,  56 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
<div class=\"row g-3\">

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.marque) }}
            {{ form_widget(form.marque, {
                'attr': {
                    'class': 'form-control' ~ (form.marque.vars.valid ? '' : ' is-invalid'),
                    'placeholder': 'Ex: Peugeot'
                }
            }) }}
            {% for error in form.marque.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.modele) }}
            {{ form_widget(form.modele, {
                'attr': {
                    'class': 'form-control' ~ (form.modele.vars.valid ? '' : ' is-invalid'),
                    'placeholder': 'Ex: 208'
                }
            }) }}
            {% for error in form.modele.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.immatriculation) }}
            {{ form_widget(form.immatriculation, {
                'attr': {
                    'class': 'form-control' ~ (form.immatriculation.vars.valid ? '' : ' is-invalid'),
                    'placeholder': 'Ex: AB-123-CD'
                }
            }) }}
            {% for error in form.immatriculation.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.type) }}
            {{ form_widget(form.type, {
                'attr': {
                    'class': 'form-control' ~ (form.type.vars.valid ? '' : ' is-invalid'),
                    'placeholder': 'Ex: SUV, Berline...'
                }
            }) }}
            {% for error in form.type.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.couleur) }}
            {{ form_widget(form.couleur, {
                'attr': {
                    'class': 'form-control' ~ (form.couleur.vars.valid ? '' : ' is-invalid'),
                    'placeholder': 'Ex: Rouge'
                }
            }) }}
            {% for error in form.couleur.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.kilometrage) }}
            {{ form_widget(form.kilometrage, {
                'attr': {
                    'class': 'form-control' ~ (form.kilometrage.vars.valid ? '' : ' is-invalid'),
                    'placeholder': 'Ex: 45000'
                }
            }) }}
            {% for error in form.kilometrage.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.statut) }}
            {{ form_widget(form.statut, {
                'attr': {
                    'class': 'form-control' ~ (form.statut.vars.valid ? '' : ' is-invalid'),
                    'placeholder': 'Visite faite, Visite non faite'
                }
            }) }}
            {% for error in form.statut.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.carteGrise) }}
            {{ form_widget(form.carteGrise, {
                'attr': {
                    'class': 'form-select' ~ (form.carteGrise.vars.valid ? '' : ' is-invalid')
                }
            }) }}
            {% for error in form.carteGrise.vars.errors %}
                <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>
    <div class=\"col-12 mt-4\">
        <button type=\"submit\" class=\"btn btn-primary me-2\">
            <i class=\"fas fa-save me-1\"></i> Enregistrer
        </button>
        <button type=\"reset\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-undo me-1\"></i> Réinitialiser
        </button>
    </div>

</div>
{{ form_end(form) }}
", "vehicule/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\vehicule\\_form.html.twig");
    }
}
