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
class __TwigTemplate_3a262494b7f316cd25ed3ab1ad0438d6 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["date"] ?? null), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        <p>N° VIN: ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "vinSaisie", [], "any", false, false, false, 29), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "direction", [], "any", false, false, false, 39)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "visibilite", [], "any", false, false, false, 43)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "carrosorie", [], "any", false, false, false, 47)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "eclairage", [], "any", false, false, false, 51)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "huileDefault", [], "any", false, false, false, 55)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "echappement", [], "any", false, false, false, 59)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "freinage", [], "any", false, false, false, 63)) {
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "pneaumatique", [], "any", false, false, false, 67)) {
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
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "status", [], "any", false, false, false, 72)) ? ("VALIDÉ") : ("NON VALIDÉ"));
        yield "</h3>
    </div>
    <div class=\"details-section\">
    ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "direction", [], "any", false, false, false, 75)) {
            // line 76
            yield "        <p><strong>Direction :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "direction", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
    ";
        }
        // line 78
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "visibilite", [], "any", false, false, false, 78)) {
            // line 79
            yield "        <p><strong>Visibilité :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "visibilite", [], "any", false, false, false, 79), "html", null, true);
            yield "</p>
    ";
        }
        // line 81
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "carrosorie", [], "any", false, false, false, 81)) {
            // line 82
            yield "        <p><strong>Carrosserie :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "carrosorie", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
    ";
        }
        // line 84
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "eclairage", [], "any", false, false, false, 84)) {
            // line 85
            yield "        <p><strong>Éclairage :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "eclairage", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>
    ";
        }
        // line 87
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "huileDefault", [], "any", false, false, false, 87)) {
            // line 88
            yield "        <p><strong>Huile :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "huileDefault", [], "any", false, false, false, 88), "html", null, true);
            yield "</p>
    ";
        }
        // line 90
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "echappement", [], "any", false, false, false, 90)) {
            // line 91
            yield "        <p><strong>Échappement :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "echappement", [], "any", false, false, false, 91), "html", null, true);
            yield "</p>
    ";
        }
        // line 93
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "freinage", [], "any", false, false, false, 93)) {
            // line 94
            yield "        <p><strong>Freins :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "freinage", [], "any", false, false, false, 94), "html", null, true);
            yield "</p>
    ";
        }
        // line 96
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "pneaumatique", [], "any", false, false, false, 96)) {
            // line 97
            yield "        <p><strong>Pneumatiques :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rapport"] ?? null), "pneaumatique", [], "any", false, false, false, 97), "html", null, true);
            yield "</p>
    ";
        }
        // line 99
        yield "</div>
</body>
</html>";
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
        return array (  254 => 99,  248 => 97,  245 => 96,  239 => 94,  236 => 93,  230 => 91,  227 => 90,  221 => 88,  218 => 87,  212 => 85,  209 => 84,  203 => 82,  200 => 81,  194 => 79,  191 => 78,  185 => 76,  183 => 75,  177 => 72,  165 => 67,  154 => 63,  143 => 59,  132 => 55,  121 => 51,  110 => 47,  99 => 43,  88 => 39,  75 => 29,  71 => 28,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pdf_template/pdf_template.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\pdf_template\\pdf_template.html.twig");
    }
}
