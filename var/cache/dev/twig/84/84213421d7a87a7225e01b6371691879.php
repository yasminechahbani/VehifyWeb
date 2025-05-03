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

/* equipement/pdf_content.html.twig */
class __TwigTemplate_0829c956f344638a01ec7029666c4f07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/pdf_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/pdf_content.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Guide d'utilisation - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        h1 { color: #007bff; }
        h2 { color: #28a745; }
        .step { margin-bottom: 15px; border-left: 5px solid #ffc107; padding-left: 10px; }
        .important { color: #dc3545; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Guide d'utilisation - ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
    <p class=\"important\">Veuillez lire attentivement ce guide avant d'utiliser l'équipement.</p>
    <hr>
    ";
        // line 18
        $context["steps"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 18, $this->source); })()), "guideUtilisation", [], "any", false, false, false, 18), "

");
        // line 19
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["step"]) {
            // line 20
            yield "        <div class=\"step\">
            <h2>Étape ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["index"] + 1), "html", null, true);
            yield "</h2>
            <p>";
            // line 22
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["step"], "html", null, true));
            yield "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['index'], $context['step'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "equipement/pdf_content.html.twig";
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
        return array (  98 => 25,  89 => 22,  85 => 21,  82 => 20,  77 => 19,  73 => 18,  67 => 15,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Guide d'utilisation - {{ equipement.nom }}</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        h1 { color: #007bff; }
        h2 { color: #28a745; }
        .step { margin-bottom: 15px; border-left: 5px solid #ffc107; padding-left: 10px; }
        .important { color: #dc3545; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Guide d'utilisation - {{ equipement.nom }}</h1>
    <p class=\"important\">Veuillez lire attentivement ce guide avant d'utiliser l'équipement.</p>
    <hr>
    {% set steps = equipement.guideUtilisation|split('\\n\\n') %}
    {% for index, step in steps %}
        <div class=\"step\">
            <h2>Étape {{ index + 1 }}</h2>
            <p>{{ step|nl2br }}</p>
        </div>
    {% endfor %}
</body>
</html>", "equipement/pdf_content.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\equipement\\pdf_content.html.twig");
    }
}
