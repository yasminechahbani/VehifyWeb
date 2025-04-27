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

/* facture/pdf.html.twig */
class __TwigTemplate_b0e3e683572ba73e5c99848592f0cf2f extends Template
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
    <title>Facture ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "numeroFacture", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #0d6efd;
            margin-bottom: 5px;
        }
        .company-info {
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .invoice-details {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }
        .invoice-details h2 {
            margin-top: 0;
            color: #0d6efd;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .client-info, .reservation-info, .vehicle-info {
            margin-bottom: 20px;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 10px;
            color: #0d6efd;
        }
        .info-row {
            display: flex;
            margin-bottom: 5px;
        }
        .info-label {
            font-weight: bold;
            width: 200px;
        }
        .service-details {
            margin-top: 20px;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total-row {
            font-weight: bold;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 3px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
        }
        .status-paid {
            background-color: #d4edda;
            color: #155724;
        }
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>CarServ</h1>
        <div class=\"company-info\">
            <p>123 Street, New York, USA | Tél: +012 345 67890 | Email: info@example.com</p>
        </div>
    </div>

    <div class=\"invoice-details\">
        <h2>FACTURE N° ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "numeroFacture", [], "any", false, false, false, 113), "html", null, true);
        yield "</h2>
        
        <div class=\"info-row\">
            <div class=\"info-label\">Date de facturation:</div>
            <div>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "dateFacturation", [], "any", false, false, false, 117), "d/m/Y"), "html", null, true);
        yield "</div>
        </div>
        
        <div class=\"info-row\">
            <div class=\"info-label\">Statut:</div>
            <div>
                ";
        // line 123
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 123) == "Payée")) {
            // line 124
            yield "                    <span class=\"status status-paid\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 124), "html", null, true);
            yield "</span>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 125
($context["facture"] ?? null), "statut", [], "any", false, false, false, 125) == "En attente")) {
            // line 126
            yield "                    <span class=\"status status-pending\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 126), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 128
            yield "                    <span class=\"status status-cancelled\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 128), "html", null, true);
            yield "</span>
                ";
        }
        // line 130
        yield "            </div>
        </div>
    </div>

    <div class=\"client-info\">
        <div class=\"section-title\">INFORMATIONS CLIENT</div>
        <div class=\"info-row\">
            <div class=\"info-label\">Nom:</div>
            <div>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "nom", [], "any", false, false, false, 138), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "prenom", [], "any", false, false, false, 138), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Email:</div>
            <div>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 142), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Téléphone:</div>
            <div>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "tel", [], "any", false, false, false, 146), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"reservation-info\">
        <div class=\"section-title\">DÉTAILS DE LA RÉSERVATION</div>
        <div class=\"info-row\">
            <div class=\"info-label\">Numéro de réservation:</div>
            <div>#";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 154), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Date de réservation:</div>
            <div>";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "dateReservation", [], "any", false, false, false, 158), "d/m/Y"), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Heure de réservation:</div>
            <div>";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "heureReservation", [], "any", false, false, false, 162), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"vehicle-info\">
        <div class=\"section-title\">INFORMATIONS VÉHICULE</div>
        <div class=\"info-row\">
            <div class=\"info-label\">Marque:</div>
            <div>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "marque", [], "any", false, false, false, 170), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Modèle:</div>
            <div>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "modele", [], "any", false, false, false, 174), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Immatriculation:</div>
            <div>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "immatriculation", [], "any", false, false, false, 178), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"service-details\">
        <div class=\"section-title\">SERVICES FACTURÉS</div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "nom", [], "any", false, false, false, 193), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, false, 193), "html", null, true);
        yield "</td>
                    <td>";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "prix", [], "any", false, false, false, 194), "html", null, true);
        yield " €</td>
                </tr>
                ";
        // line 196
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "description", [], "any", false, false, false, 196)) {
            // line 197
            yield "                <tr>
                    <td colspan=\"2\"><strong>Note:</strong> ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "description", [], "any", false, false, false, 198), "html", null, true);
            yield "</td>
                </tr>
                ";
        }
        // line 201
        yield "            </tbody>
            <tfoot>
                <tr class=\"total-row\">
                    <td>Total</td>
                    <td>";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "montant", [], "any", false, false, false, 205), "html", null, true);
        yield " €</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class=\"footer\">
        <p>Merci de votre confiance. Pour toute question concernant cette facture, veuillez nous contacter.</p>
        <p>CarServ - Service automobile professionnel</p>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "facture/pdf.html.twig";
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
        return array (  318 => 205,  312 => 201,  306 => 198,  303 => 197,  301 => 196,  296 => 194,  290 => 193,  272 => 178,  265 => 174,  258 => 170,  247 => 162,  240 => 158,  233 => 154,  222 => 146,  215 => 142,  206 => 138,  196 => 130,  190 => 128,  184 => 126,  182 => 125,  177 => 124,  175 => 123,  166 => 117,  159 => 113,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "facture/pdf.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\facture\\pdf.html.twig");
    }
}
