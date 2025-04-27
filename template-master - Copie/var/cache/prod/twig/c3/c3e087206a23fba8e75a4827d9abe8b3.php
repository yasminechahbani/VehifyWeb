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

/* vin/vin.html.twig */
class __TwigTemplate_5fb60dd1c7543a22de009a9ee5139151 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseEmployeFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "vin/vin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Vérification Carte Grise";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vin.css"), "html", null, true);
        yield "\">
    <style>
        #car-container {
            width: 100%;
            height: 400px;
            background: #f5f5f5;
            border-radius: 8px;
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        #car-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        #car-image:hover {
            transform: scale(1.05);
        }
        .welcome-section {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            color: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .progress-tracker {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
            position: relative;
        }
        .progress-step {
            flex: 1;
            text-align: center;
            position: relative;
            padding: 1rem;
        }
        .progress-step::before {
            content: '';
            width: 30px;
            height: 30px;
            background: #e9ecef;
            border-radius: 50%;
            display: block;
            margin: 0 auto 10px;
            border: 3px solid #fff;
            box-shadow: 0 0 0 3px #007bff;
        }
        .progress-step.active::before {
            background: #007bff;
        }
        .progress-step.completed::before {
            background: #28a745;
        }
    </style>
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"welcome-section text-center\">
                    <h1>Bienvenue sur le système de vérification</h1>
                    <p class=\"lead\">Suivez les étapes pour effectuer une vérification complète du véhicule</p>
                </div>

    

                <div class=\"vin-form-container\">

                    <form method=\"post\" action=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_check_vin");
        yield "\" class=\"vin-form\">
                        <div class=\"mb-4\">
                            <label for=\"vin\" class=\"form-label\">Numéro VIN</label>
                            <input type=\"text\" 
                                   name=\"vin\" 
                                   id=\"vin\" 
                                   class=\"form-control\" 
                                   value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("vin", $context)) ? (Twig\Extension\CoreExtension::default(($context["vin"] ?? null), "")) : ("")), "html", null, true);
        yield "\"
                                   placeholder=\"Entrez le numéro VIN\"
                                   required>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary vin-submit-btn\">
                                Vérifier
                            </button>
                        </div>
                    </form>

                    ";
        // line 105
        if ((array_key_exists("carteGrise", $context) && ($context["carteGrise"] ?? null))) {
            // line 106
            yield "                        <div class=\"mt-4\">
                            <h3 class=\"text-center mb-3\">Détails de la Carte Grise</h3>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Colonne</th>
                                                <th>Valeur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["carteGrise"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 119
                yield "                                                <tr>
                                                    <td>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</td>
                                                    <td>";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 130
        yield "
                    ";
        // line 131
        if ((array_key_exists("error", $context) && ($context["error"] ?? null))) {
            // line 132
            yield "                        <div class=\"alert alert-danger mt-3\">
                            ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 136
        yield "
                    ";
        // line 137
        if (((array_key_exists("showButton", $context) && ($context["showButton"] ?? null)) && ( !array_key_exists("error", $context) ||  !($context["error"] ?? null)))) {
            // line 138
            yield "                        <div class=\"text-center mt-4\">
                            <a href=\"";
            // line 139
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif");
            yield "\" class=\"btn btn-primary\">
                                Commencer la vérification
                            </a>
                        </div>
                    ";
        }
        // line 144
        yield "
                    ";
        // line 145
        if ((array_key_exists("vehicule", $context) && ($context["vehicule"] ?? null))) {
            // line 146
            yield "                        <div class=\"mt-4\">
                            <h3 class=\"text-center mb-3\">Informations du Véhicule</h3>
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <p><strong>VIN:</strong> ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "vin", [], "any", false, false, false, 150), "html", null, true);
            yield "</p>
                                    <p><strong>Marque:</strong> ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "marque", [], "any", false, false, false, 151), "html", null, true);
            yield "</p>
                                    <p><strong>Modèle:</strong> ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "modele", [], "any", false, false, false, 152), "html", null, true);
            yield "</p>
                                    <p><strong>Année:</strong> ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["vehicule"] ?? null), "annee", [], "any", false, false, false, 153), "html", null, true);
            yield "</p>
                                </div>
                            </div>

                            ";
            // line 157
            if (($context["reservation"] ?? null)) {
                // line 158
                yield "                                <h3 class=\"text-center mb-3\">Dernière Réservation</h3>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <p><strong>Date:</strong> ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "dateReservation", [], "any", false, false, false, 161), "d/m/Y"), "html", null, true);
                yield "</p>
                                        <p><strong>Heure:</strong> ";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "heureReservation", [], "any", false, false, false, 162), "html", null, true);
                yield "</p>
                                        ";
                // line 163
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "serviceId", [], "any", false, false, false, 163)) {
                    // line 164
                    yield "                                            <p><strong>Service:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "serviceId", [], "any", false, false, false, 164), "nom", [], "any", false, false, false, 164), "html", null, true);
                    yield "</p>
                                        ";
                }
                // line 166
                yield "                                    </div>
                                </div>
                            ";
            }
            // line 169
            yield "                        </div>
                    ";
        }
        // line 171
        yield "                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vin/vin.html.twig";
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
        return array (  340 => 171,  336 => 169,  331 => 166,  325 => 164,  323 => 163,  319 => 162,  315 => 161,  310 => 158,  308 => 157,  301 => 153,  297 => 152,  293 => 151,  289 => 150,  283 => 146,  281 => 145,  278 => 144,  270 => 139,  267 => 138,  265 => 137,  262 => 136,  256 => 133,  253 => 132,  251 => 131,  248 => 130,  240 => 124,  231 => 121,  227 => 120,  224 => 119,  220 => 118,  206 => 106,  204 => 105,  189 => 93,  179 => 86,  165 => 74,  158 => 73,  150 => 70,  143 => 69,  77 => 7,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "vin/vin.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\vin\\vin.html.twig");
    }
}
