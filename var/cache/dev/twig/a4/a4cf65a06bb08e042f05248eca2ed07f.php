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

/* contrat/contract_pdf.html.twig */
class __TwigTemplate_9174cc220af02327cb34624edb165603 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/contract_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/contract_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Contrat de ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 5, $this->source); })()), "employe", [], "any", false, false, false, 5), "nom", [], "any", false, false, false, 5), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 5, $this->source); })()), "employe", [], "any", false, false, false, 5), "prenom", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 40px;
            line-height: 1.6;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
            color: #0a4275;
        }
        .company-info {
            text-align: right;
            margin-bottom: 30px;
            font-size: 0.9em;
            color: #555;
        }
        .section {
            margin-bottom: 30px;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .info-item {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #0a4275;
        }
        .value {
            margin-top: 5px;
            color: #444;
        }
        .signatures {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature-block {
            width: 45%;
            text-align: center;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 0.8em;
            color: #666;
        }
        .signature-line {
            border-top: 1px solid #000;
            margin-top: 50px;
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>CONTRAT DE TRAVAIL</h1>
        <p>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 69, $this->source); })()), "typeContrat", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
    </div>

    <div class=\"company-info\">
        <p><strong>VEHIFY</strong><br>
        123 Rue Example<br>
        Ville, Code Postal<br>
        Téléphone: +216 XX XXX XXX</p>
    </div>

    <div class=\"section\">
        <h2>Informations de l'employé</h2>
        <p><strong>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 81, $this->source); })()), "employe", [], "any", false, false, false, 81), "nom", [], "any", false, false, false, 81), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 81, $this->source); })()), "employe", [], "any", false, false, false, 81), "prenom", [], "any", false, false, false, 81), "html", null, true);
        yield "</strong></p>
    </div>

    <div class=\"section\">
        <h2>Détails du contrat</h2>
        <div class=\"info-item\">
            <div class=\"label\">Type de contrat</div>
            <div class=\"value\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 88, $this->source); })()), "typeContrat", [], "any", false, false, false, 88), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Date de début</div>
            <div class=\"value\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 92, $this->source); })()), "dateDebut", [], "any", false, false, false, 92), "d/m/Y"), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Date de fin</div>
            <div class=\"value\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 96, $this->source); })()), "dateFin", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Salaire</div>
            <div class=\"value\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 100, $this->source); })()), "salaireContrat", [], "any", false, false, false, 100), "html", null, true);
        yield " TND</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Période d'essai</div>
            <div class=\"value\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 104, $this->source); })()), "periodeEssai", [], "any", false, false, false, 104), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Préavis</div>
            <div class=\"value\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 108, $this->source); })()), "preavis", [], "any", false, false, false, 108), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Confidentialité</div>
            <div class=\"value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 112, $this->source); })()), "confidentialite", [], "any", false, false, false, 112), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"signatures\">
        <div class=\"signature-block\">
            <p>Pour l'entreprise :</p>
            <p>Date : ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>
            <p>Signature :</p>
            <div class=\"signature-line\"></div>
        </div>
        <div class=\"signature-block\">
            <p>L'employé(e) :</p>
            <p>Date : ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>
            <p>Signature :</p>
            <div class=\"signature-line\"></div>
        </div>
    </div>

    <div class=\"footer\">
        <p>Document généré le ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield " - VEHIFY</p>
    </div>
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
        return "contrat/contract_pdf.html.twig";
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
        return array (  221 => 132,  211 => 125,  202 => 119,  192 => 112,  185 => 108,  178 => 104,  171 => 100,  164 => 96,  157 => 92,  150 => 88,  138 => 81,  123 => 69,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Contrat de {{ contrat.employe.nom }} {{ contrat.employe.prenom }}</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 40px;
            line-height: 1.6;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
            color: #0a4275;
        }
        .company-info {
            text-align: right;
            margin-bottom: 30px;
            font-size: 0.9em;
            color: #555;
        }
        .section {
            margin-bottom: 30px;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .info-item {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #0a4275;
        }
        .value {
            margin-top: 5px;
            color: #444;
        }
        .signatures {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature-block {
            width: 45%;
            text-align: center;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 0.8em;
            color: #666;
        }
        .signature-line {
            border-top: 1px solid #000;
            margin-top: 50px;
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>CONTRAT DE TRAVAIL</h1>
        <p>{{ contrat.typeContrat }}</p>
    </div>

    <div class=\"company-info\">
        <p><strong>VEHIFY</strong><br>
        123 Rue Example<br>
        Ville, Code Postal<br>
        Téléphone: +216 XX XXX XXX</p>
    </div>

    <div class=\"section\">
        <h2>Informations de l'employé</h2>
        <p><strong>{{ contrat.employe.nom }} {{ contrat.employe.prenom }}</strong></p>
    </div>

    <div class=\"section\">
        <h2>Détails du contrat</h2>
        <div class=\"info-item\">
            <div class=\"label\">Type de contrat</div>
            <div class=\"value\">{{ contrat.typeContrat }}</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Date de début</div>
            <div class=\"value\">{{ contrat.dateDebut|date('d/m/Y') }}</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Date de fin</div>
            <div class=\"value\">{{ contrat.dateFin|date('d/m/Y') }}</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Salaire</div>
            <div class=\"value\">{{ contrat.salaireContrat }} TND</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Période d'essai</div>
            <div class=\"value\">{{ contrat.periodeEssai }}</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Préavis</div>
            <div class=\"value\">{{ contrat.preavis }}</div>
        </div>
        <div class=\"info-item\">
            <div class=\"label\">Confidentialité</div>
            <div class=\"value\">{{ contrat.confidentialite }}</div>
        </div>
    </div>

    <div class=\"signatures\">
        <div class=\"signature-block\">
            <p>Pour l'entreprise :</p>
            <p>Date : {{ \"now\"|date('d/m/Y') }}</p>
            <p>Signature :</p>
            <div class=\"signature-line\"></div>
        </div>
        <div class=\"signature-block\">
            <p>L'employé(e) :</p>
            <p>Date : {{ \"now\"|date('d/m/Y') }}</p>
            <p>Signature :</p>
            <div class=\"signature-line\"></div>
        </div>
    </div>

    <div class=\"footer\">
        <p>Document généré le {{ \"now\"|date('d/m/Y') }} - VEHIFY</p>
    </div>
</body>
</html>", "contrat/contract_pdf.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\contrat\\contract_pdf.html.twig");
    }
}
