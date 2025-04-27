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
class __TwigTemplate_fae17e18c4413a0c757a2476a5b870a8 extends Template
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
        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
<div class=\"row g-3\">

    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 6), 'label');
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["form"] ?? null), "marque", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "valid", [], "any", false, false, false, 9)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: Peugeot"]]);
        // line 12
        yield "
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 21), 'label');
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["form"] ?? null), "modele", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "valid", [], "any", false, false, false, 24)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: 208"]]);
        // line 27
        yield "
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 36), 'label');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "valid", [], "any", false, false, false, 39)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: AB-123-CD"]]);
        // line 42
        yield "
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 51), 'label');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["form"] ?? null), "type", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: SUV, Berline..."]]);
        // line 57
        yield "
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 66), 'label');
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["form"] ?? null), "couleur", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "valid", [], "any", false, false, false, 69)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: Rouge"]]);
        // line 72
        yield "
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 81), 'label');
        yield "
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 84
($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "valid", [], "any", false, false, false, 84)) ? ("") : (" is-invalid"))), "placeholder" => "Ex: 45000"]]);
        // line 87
        yield "
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 96), 'label');
        yield "
            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["form"] ?? null), "statut", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "valid", [], "any", false, false, false, 99)) ? ("") : (" is-invalid"))), "placeholder" => "Visite faite, Visite non faite"]]);
        // line 102
        yield "
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 111), 'label');
        yield "
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => ("form-select" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 114
($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "valid", [], "any", false, false, false, 114)) ? ("") : (" is-invalid")))]]);
        // line 116
        yield "
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "errors", [], "any", false, false, false, 117));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
";
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
        return array (  297 => 132,  283 => 120,  274 => 118,  270 => 117,  267 => 116,  265 => 114,  264 => 112,  260 => 111,  253 => 106,  244 => 104,  240 => 103,  237 => 102,  235 => 99,  234 => 97,  230 => 96,  223 => 91,  214 => 89,  210 => 88,  207 => 87,  205 => 84,  204 => 82,  200 => 81,  193 => 76,  184 => 74,  180 => 73,  177 => 72,  175 => 69,  174 => 67,  170 => 66,  163 => 61,  154 => 59,  150 => 58,  147 => 57,  145 => 54,  144 => 52,  140 => 51,  133 => 46,  124 => 44,  120 => 43,  117 => 42,  115 => 39,  114 => 37,  110 => 36,  103 => 31,  94 => 29,  90 => 28,  87 => 27,  85 => 24,  84 => 22,  80 => 21,  73 => 16,  64 => 14,  60 => 13,  57 => 12,  55 => 9,  54 => 7,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "vehicule/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\vehicule\\_form.html.twig");
    }
}
