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
class __TwigTemplate_b0fb0674b96bf36a53525e190df47a3e extends Template
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
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; }
        .result-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        .result-table th, .result-table td { 
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        }
        .result-table th { background-color: #f5f5f5; }
        .status { margin-top: 20px; }
        .check-result { 
            padding: 5px;
            margin: 5px 0;
        }
        .passed { color: green; }
        .failed { color: red; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport de Contrôle Technique</h1>
        <p>Date: ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 28, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        <p>N° VIN: ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 29, $this->source); })()), "vinSaisie", [], "any", false, false, false, 29), "html", null, true);
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
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 39, $this->source); })()), "direction", [], "any", false, false, false, 39)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Visibilité</td>
            <td>";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 43, $this->source); })()), "visibilite", [], "any", false, false, false, 43)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Carrosserie</td>
            <td>";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 47, $this->source); })()), "carrosorie", [], "any", false, false, false, 47)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Éclairage</td>
            <td>";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 51, $this->source); })()), "eclairage", [], "any", false, false, false, 51)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Huile</td>
            <td>";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 55, $this->source); })()), "huileDefault", [], "any", false, false, false, 55)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Échappement</td>
            <td>";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 59, $this->source); })()), "echappement", [], "any", false, false, false, 59)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Freinage</td>
            <td>";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 63, $this->source); })()), "freinage", [], "any", false, false, false, 63)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
        <tr>
            <td>Pneumatique</td>
            <td>";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 67, $this->source); })()), "pneaumatique", [], "any", false, false, false, 67)) {
            yield "VALIDÉ";
        } else {
            yield "NON VALIDÉ";
        }
        yield "</td>
        </tr>
    </table>

    <div class=\"status\">
        <h3>Statut final: ";
        // line 72
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 72, $this->source); })()), "status", [], "any", false, false, false, 72)) ? ("VALIDÉ") : ("NON VALIDÉ"));
        yield "</h3>
    </div>
    <div class=\"details-section\">
    ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 75, $this->source); })()), "direction", [], "any", false, false, false, 75)) {
            // line 76
            yield "        <p><strong>Direction :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 76, $this->source); })()), "direction", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
    ";
        }
        // line 78
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 78, $this->source); })()), "visibilite", [], "any", false, false, false, 78)) {
            // line 79
            yield "        <p><strong>Visibilité :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 79, $this->source); })()), "visibilite", [], "any", false, false, false, 79), "html", null, true);
            yield "</p>
    ";
        }
        // line 81
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 81, $this->source); })()), "carrosorie", [], "any", false, false, false, 81)) {
            // line 82
            yield "        <p><strong>Carrosserie :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 82, $this->source); })()), "carrosorie", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
    ";
        }
        // line 84
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 84, $this->source); })()), "eclairage", [], "any", false, false, false, 84)) {
            // line 85
            yield "        <p><strong>Éclairage :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 85, $this->source); })()), "eclairage", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>
    ";
        }
        // line 87
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 87, $this->source); })()), "huileDefault", [], "any", false, false, false, 87)) {
            // line 88
            yield "        <p><strong>Huile :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 88, $this->source); })()), "huileDefault", [], "any", false, false, false, 88), "html", null, true);
            yield "</p>
    ";
        }
        // line 90
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 90, $this->source); })()), "echappement", [], "any", false, false, false, 90)) {
            // line 91
            yield "        <p><strong>Échappement :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 91, $this->source); })()), "echappement", [], "any", false, false, false, 91), "html", null, true);
            yield "</p>
    ";
        }
        // line 93
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 93, $this->source); })()), "freinage", [], "any", false, false, false, 93)) {
            // line 94
            yield "        <p><strong>Freins :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 94, $this->source); })()), "freinage", [], "any", false, false, false, 94), "html", null, true);
            yield "</p>
    ";
        }
        // line 96
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 96, $this->source); })()), "pneaumatique", [], "any", false, false, false, 96)) {
            // line 97
            yield "        <p><strong>Pneumatiques :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 97, $this->source); })()), "pneaumatique", [], "any", false, false, false, 97), "html", null, true);
            yield "</p>
    ";
        }
        // line 99
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
        return array (  260 => 99,  254 => 97,  251 => 96,  245 => 94,  242 => 93,  236 => 91,  233 => 90,  227 => 88,  224 => 87,  218 => 85,  215 => 84,  209 => 82,  206 => 81,  200 => 79,  197 => 78,  191 => 76,  189 => 75,  183 => 72,  171 => 67,  160 => 63,  149 => 59,  138 => 55,  127 => 51,  116 => 47,  105 => 43,  94 => 39,  81 => 29,  77 => 28,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Résultat Contrôle Technique</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; }
        .result-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        .result-table th, .result-table td { 
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        }
        .result-table th { background-color: #f5f5f5; }
        .status { margin-top: 20px; }
        .check-result { 
            padding: 5px;
            margin: 5px 0;
        }
        .passed { color: green; }
        .failed { color: red; }
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
            <td>{% if resultat.direction %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
        <tr>
            <td>Visibilité</td>
            <td>{% if resultat.visibilite %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
        <tr>
            <td>Carrosserie</td>
            <td>{% if resultat.carrosorie %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
        <tr>
            <td>Éclairage</td>
            <td>{% if resultat.eclairage %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
        <tr>
            <td>Huile</td>
            <td>{% if resultat.huileDefault %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
        <tr>
            <td>Échappement</td>
            <td>{% if resultat.echappement %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
        <tr>
            <td>Freinage</td>
            <td>{% if resultat.freinage %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
        <tr>
            <td>Pneumatique</td>
            <td>{% if resultat.pneaumatique %}VALIDÉ{% else %}NON VALIDÉ{% endif %}</td>
        </tr>
    </table>

    <div class=\"status\">
        <h3>Statut final: {{ resultat.status ? 'VALIDÉ' : 'NON VALIDÉ' }}</h3>
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
