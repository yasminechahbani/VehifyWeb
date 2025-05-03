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

/* pdf_template/pdf_template.html.twig */
class __TwigTemplate_adb9685dd2688429755d1cc7572d930b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_template/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_template/pdf_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Résultat Contrôle Technique</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 20px; 
            background-color: #f4f4f9; 
        }
        .header { 
            text-align: center; 
            margin-bottom: 30px; 
            padding: 10px; 
            background-color: #007bff; 
            color: white; 
            border-radius: 8px; 
        }
        .result-table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        .result-table th, .result-table td { 
            border: 1px solid #ddd; 
            padding: 12px; 
            text-align: left; 
        }
        .result-table th { 
            background-color: #007bff; 
            color: white; 
        }
        .status { 
            margin-top: 20px; 
            padding: 10px; 
            background-color: #e9ecef; 
            border-radius: 8px; 
            text-align: center; 
        }
        .check-result { 
            padding: 5px; 
            margin: 5px 0; 
        }
        .passed { 
            color: green; 
            font-weight: bold; 
        }
        .failed { 
            color: red; 
            font-weight: bold; 
        }
        .details-section { 
            margin-top: 20px; 
            padding: 10px; 
            background-color: #f8f9fa; 
            border-radius: 8px; 
        }
        .details-section p { 
            margin: 5px 0; 
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport de Contrôle Technique</h1>
        <p>Date: ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 69, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        <p>N° VIN: ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 70, $this->source); })()), "vinSaisie", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
    </div>

    <table class=\"result-table\">
        <tr>
            <th>Point de contrôle</th>
            <th>État</th>
        </tr>
        <tr>
            <td>Direction et Tableau de bord</td>
            <td>";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 80, $this->source); })()), "direction", [], "any", false, false, false, 80)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Visibilité</td>
            <td>";
        // line 84
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 84, $this->source); })()), "visibilite", [], "any", false, false, false, 84)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Carrosserie</td>
            <td>";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 88, $this->source); })()), "carrosorie", [], "any", false, false, false, 88)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Éclairage</td>
            <td>";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 92, $this->source); })()), "eclairage", [], "any", false, false, false, 92)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Huile</td>
            <td>";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 96, $this->source); })()), "huileDefault", [], "any", false, false, false, 96)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Échappement</td>
            <td>";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 100, $this->source); })()), "echappement", [], "any", false, false, false, 100)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Freinage</td>
            <td>";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 104, $this->source); })()), "freinage", [], "any", false, false, false, 104)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Pneumatique</td>
            <td>";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 108, $this->source); })()), "pneaumatique", [], "any", false, false, false, 108)) {
            yield "<span class=\"passed\">VALIDÉ</span>";
        } else {
            yield "<span class=\"failed\">NON VALIDÉ</span>";
        }
        yield "</td>
        </tr>
    </table>

    <div class=\"status\">
        <h3>Statut final: ";
        // line 113
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 113, $this->source); })()), "status", [], "any", false, false, false, 113)) ? ("<span class=\"passed\">VALIDÉ</span>") : ("<span class=\"failed\">NON VALIDÉ</span>"));
        yield "</h3>
    </div>
    <div class=\"details-section\">
    ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 116, $this->source); })()), "direction", [], "any", false, false, false, 116)) {
            // line 117
            yield "        <p><strong>Direction :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 117, $this->source); })()), "direction", [], "any", false, false, false, 117), "html", null, true);
            yield "</p>
    ";
        }
        // line 119
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 119, $this->source); })()), "visibilite", [], "any", false, false, false, 119)) {
            // line 120
            yield "        <p><strong>Visibilité :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 120, $this->source); })()), "visibilite", [], "any", false, false, false, 120), "html", null, true);
            yield "</p>
    ";
        }
        // line 122
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 122, $this->source); })()), "carrosorie", [], "any", false, false, false, 122)) {
            // line 123
            yield "        <p><strong>Carrosserie :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 123, $this->source); })()), "carrosorie", [], "any", false, false, false, 123), "html", null, true);
            yield "</p>
    ";
        }
        // line 125
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 125, $this->source); })()), "eclairage", [], "any", false, false, false, 125)) {
            // line 126
            yield "        <p><strong>Éclairage :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 126, $this->source); })()), "eclairage", [], "any", false, false, false, 126), "html", null, true);
            yield "</p>
    ";
        }
        // line 128
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 128, $this->source); })()), "huileDefault", [], "any", false, false, false, 128)) {
            // line 129
            yield "        <p><strong>Huile :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 129, $this->source); })()), "huileDefault", [], "any", false, false, false, 129), "html", null, true);
            yield "</p>
    ";
        }
        // line 131
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 131, $this->source); })()), "echappement", [], "any", false, false, false, 131)) {
            // line 132
            yield "        <p><strong>Échappement :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 132, $this->source); })()), "echappement", [], "any", false, false, false, 132), "html", null, true);
            yield "</p>
    ";
        }
        // line 134
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 134, $this->source); })()), "freinage", [], "any", false, false, false, 134)) {
            // line 135
            yield "        <p><strong>Freins :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 135, $this->source); })()), "freinage", [], "any", false, false, false, 135), "html", null, true);
            yield "</p>
    ";
        }
        // line 137
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 137, $this->source); })()), "pneaumatique", [], "any", false, false, false, 137)) {
            // line 138
            yield "        <p><strong>Pneumatiques :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 138, $this->source); })()), "pneaumatique", [], "any", false, false, false, 138), "html", null, true);
            yield "</p>
    ";
        }
        // line 140
        yield "</div>
</body>
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
        return "pdf_template/pdf_template.html.twig";
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
        return array (  301 => 140,  295 => 138,  292 => 137,  286 => 135,  283 => 134,  277 => 132,  274 => 131,  268 => 129,  265 => 128,  259 => 126,  256 => 125,  250 => 123,  247 => 122,  241 => 120,  238 => 119,  232 => 117,  230 => 116,  224 => 113,  212 => 108,  201 => 104,  190 => 100,  179 => 96,  168 => 92,  157 => 88,  146 => 84,  135 => 80,  122 => 70,  118 => 69,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Résultat Contrôle Technique</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 20px; 
            background-color: #f4f4f9; 
        }
        .header { 
            text-align: center; 
            margin-bottom: 30px; 
            padding: 10px; 
            background-color: #007bff; 
            color: white; 
            border-radius: 8px; 
        }
        .result-table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        .result-table th, .result-table td { 
            border: 1px solid #ddd; 
            padding: 12px; 
            text-align: left; 
        }
        .result-table th { 
            background-color: #007bff; 
            color: white; 
        }
        .status { 
            margin-top: 20px; 
            padding: 10px; 
            background-color: #e9ecef; 
            border-radius: 8px; 
            text-align: center; 
        }
        .check-result { 
            padding: 5px; 
            margin: 5px 0; 
        }
        .passed { 
            color: green; 
            font-weight: bold; 
        }
        .failed { 
            color: red; 
            font-weight: bold; 
        }
        .details-section { 
            margin-top: 20px; 
            padding: 10px; 
            background-color: #f8f9fa; 
            border-radius: 8px; 
        }
        .details-section p { 
            margin: 5px 0; 
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport de Contrôle Technique</h1>
        <p>Date: {{ date|date('d/m/Y H:i') }}</p>
        <p>N° VIN: {{ resultat.vinSaisie }}</p>
    </div>

    <table class=\"result-table\">
        <tr>
            <th>Point de contrôle</th>
            <th>État</th>
        </tr>
        <tr>
            <td>Direction et Tableau de bord</td>
            <td>{% if resultat.direction %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
        <tr>
            <td>Visibilité</td>
            <td>{% if resultat.visibilite %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
        <tr>
            <td>Carrosserie</td>
            <td>{% if resultat.carrosorie %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
        <tr>
            <td>Éclairage</td>
            <td>{% if resultat.eclairage %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
        <tr>
            <td>Huile</td>
            <td>{% if resultat.huileDefault %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
        <tr>
            <td>Échappement</td>
            <td>{% if resultat.echappement %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
        <tr>
            <td>Freinage</td>
            <td>{% if resultat.freinage %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
        <tr>
            <td>Pneumatique</td>
            <td>{% if resultat.pneaumatique %}<span class=\"passed\">VALIDÉ</span>{% else %}<span class=\"failed\">NON VALIDÉ</span>{% endif %}</td>
        </tr>
    </table>

    <div class=\"status\">
        <h3>Statut final: {{ resultat.status ? '<span class=\"passed\">VALIDÉ</span>' : '<span class=\"failed\">NON VALIDÉ</span>' }}</h3>
    </div>
    <div class=\"details-section\">
    {% if rapport.direction %}
        <p><strong>Direction :</strong> {{ rapport.direction }}</p>
    {% endif %}
    {% if rapport.visibilite %}
        <p><strong>Visibilité :</strong> {{ rapport.visibilite }}</p>
    {% endif %}
    {% if rapport.carrosorie %}
        <p><strong>Carrosserie :</strong> {{ rapport.carrosorie }}</p>
    {% endif %}
    {% if rapport.eclairage %}
        <p><strong>Éclairage :</strong> {{ rapport.eclairage }}</p>
    {% endif %}
    {% if rapport.huileDefault %}
        <p><strong>Huile :</strong> {{ rapport.huileDefault }}</p>
    {% endif %}
    {% if rapport.echappement %}
        <p><strong>Échappement :</strong> {{ rapport.echappement }}</p>
    {% endif %}
    {% if rapport.freinage %}
        <p><strong>Freins :</strong> {{ rapport.freinage }}</p>
    {% endif %}
    {% if rapport.pneaumatique %}
        <p><strong>Pneumatiques :</strong> {{ rapport.pneaumatique }}</p>
    {% endif %}
</div>
</body>
</html>", "pdf_template/pdf_template.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\pdf_template\\pdf_template.html.twig");
    }
}
