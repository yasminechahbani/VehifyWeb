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
class __TwigTemplate_43206c84e150b4d81ecffa4c81e5e220 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vin/vin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vin/vin.html.twig"));

        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "vin/vin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Vérification Carte Grise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vin.css"), "html", null, true);
        yield "\">
    <style>
        /* Styles communs */
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
       
        /* Styles pour les boîtes de vérification */
        .verification-box {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .verification-box h2 {
            margin-bottom: 1.5rem;
            text-align: center;
        }
       
        /* Styles pour l'API NHTSA */
        .api-response {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            background: #f8f9fa;
            display: none;
        }
        .loading-spinner {
            display: none;
            width: 2rem;
            height: 2rem;
            border: 0.25rem solid #f3f3f3;
            border-top: 0.25rem solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .vin-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .vin-details th, .vin-details td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .vin-details th {
            background-color: #f2f2f2;
        }
       
        /* Styles pour les résultats de réservation */
        .reservation-status {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
        }
        .reservation-details {
            margin-top: 15px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion de l'API NHTSA
            const vinFormApi = document.querySelector('.vin-form-api');
            if (vinFormApi) {
                vinFormApi.addEventListener('submit', function(e) {
                    e.preventDefault();
                   
                    const vin = document.getElementById('vin-api').value;
                    const submitBtn = document.getElementById('submit-api');
                    const spinner = document.getElementById('loading-spinner');
                    const responseDiv = document.getElementById('api-response');
                   
                    if (!vin) {
                        alert('Veuillez entrer un numéro VIN');
                        return;
                    }
                   
                    if (vin.length !== 17) {
                        alert('Le numéro VIN doit contenir exactement 17 caractères');
                        return;
                    }
                   
                    submitBtn.disabled = true;
                    spinner.style.display = 'block';
                    responseDiv.style.display = 'none';
                   
                    fetch(`https://vpic.nhtsa.dot.gov/api/vehicles/decodevin/\${vin}?format=json`)
                    .then(response => response.json())
                    .then(data => {
                        let html = '<h4>Résultats de vérification VIN</h4>';
                       
                        if (data.Results && data.Results.length > 0) {
                            const importantFields = [
                                'Make', 'Model', 'Model Year', 'Vehicle Type',
                                'Body Class', 'Engine Manufacturer', 'Displacement (L)',
                                'Fuel Type - Primary', 'Plant Country'
                            ];
                           
                            html += `
                                <div class=\"alert alert-success\">
                                    VIN valide - \${data.Results[0].Value || 'Inconnu'}
                                </div>
                                <div class=\"vin-details\">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Information</th>
                                                <th>Valeur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                            `;
                           
                            data.Results.forEach(item => {
                                if (importantFields.includes(item.Variable)) {
                                    html += `
                                        <tr>
                                            <td><strong>\${item.Variable}</strong></td>
                                            <td>\${item.Value || 'Non spécifié'}</td>
                                        </tr>
                                    `;
                                }
                            });
                           
                            html += `</tbody></table></div>`;
                        } else {
                            html += `<div class=\"alert alert-danger\">Aucune information trouvée</div>`;
                        }
                       
                        responseDiv.innerHTML = html;
                        responseDiv.style.display = 'block';
                    })
                    .catch(error => {
                        responseDiv.innerHTML = `
                            <div class=\"alert alert-danger\">
                                Erreur: \${error.message}
                            </div>
                        `;
                        responseDiv.style.display = 'block';
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        spinner.style.display = 'none';
                    });
                });
            }
           
            // Gestion de la vérification de réservation
            const vinFormReservation = document.querySelector('.vin-form-reservation');
            if (vinFormReservation) {
                vinFormReservation.addEventListener('submit', function(e) {
                    e.preventDefault();
                   
                    const vin = document.getElementById('vin-reservation').value;
                    const submitBtn = document.getElementById('submit-reservation');
                    const spinner = document.getElementById('loading-spinner-reservation');
                    const responseDiv = document.getElementById('reservation-response');
                   
                    if (!vin) {
                        alert('Veuillez entrer un numéro VIN');
                        return;
                    }
                   
                    submitBtn.disabled = true;
                    spinner.style.display = 'block';
                    responseDiv.style.display = 'none';
                   
                    // Simulation de la réponse
                    setTimeout(() => {
                        const hasReservation = Math.random() > 0.5;
                       
                        let html = '<h4>Statut de réservation</h4>';
                       
                        if (hasReservation) {
                            html += `
                                <div class=\"alert alert-success\">
                                    Ce véhicule a une réservation en cours
                                </div>
                                <div class=\"reservation-details\">
                                    <p><strong>Date:</strong> 15/06/2023</p>
                                    <p><strong>Heure:</strong> 14:30</p>
                                    <p><strong>Service:</strong> Révision complète</p>
                                </div>
                            `;
                        } else {
                            html += `
                                <div class=\"alert alert-warning\">
                                    Aucune réservation trouvée pour ce VIN
                                </div>
                            `;
                        }

                        // Add the redirect button
                        html += `
                            <div class=\"text-center mt-4\">
                                <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif");
        yield "\"
                                   class=\"btn btn-lg\"
                                   style=\"background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
                                          color: white;
                                          padding: 15px 30px;
                                          border-radius: 25px;
                                          text-decoration: none;
                                          box-shadow: 0 4px 15px rgba(0,0,0,0.2);
                                          transition: transform 0.3s ease;\">
                                    <i class=\"fas fa-car-mechanic me-2\"></i>
                                    Effectuer le contrôle technique
                                </a>
                            </div>
                        `;
                       
                        responseDiv.innerHTML = html;
                        responseDiv.style.display = 'block';
                        submitBtn.disabled = false;
                        spinner.style.display = 'none';

                        // Store VIN in session storage for use in visite.html.twig
                        sessionStorage.setItem('currentVin', vin);
                    }, 1000);
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 266
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 267
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"welcome-section text-center\">
                    <h1>Bienvenue sur le système de vérification</h1>
                    <p class=\"lead\">Suivez les étapes pour effectuer une vérification complète du véhicule</p>
                </div>

                <!-- Boîte 1: Vérification VIN via API NHTSA -->
                <div class=\"verification-box\">
                    <h2>Vérification technique du véhicule</h2>
                    <form class=\"vin-form-api\">
                        <div class=\"mb-4\">
                            <label for=\"vin-api\" class=\"form-label\">Numéro VIN</label>
                            <input type=\"text\"
                                   name=\"vin\"
                                   id=\"vin-api\"
                                   class=\"form-control\"
                                   placeholder=\"Entrez le numéro VIN (17 caractères)\"
                                   required
                                   minlength=\"17\"
                                   maxlength=\"17\"
                                   pattern=\"[A-HJ-NPR-Z0-9]{17}\"
                                   title=\"17 caractères alphanumériques (sans I, O ou Q)\">
                            <small class=\"text-muted\">Exemple: 1HGCM82633A123456</small>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" id=\"submit-api\" class=\"btn btn-primary\">
                                Vérifier les données techniques
                            </button>
                            <div id=\"loading-spinner\" class=\"loading-spinner mt-3\"></div>
                        </div>
                    </form>

                    <div id=\"api-response\" class=\"api-response\"></div>
                </div>

                <!-- Boîte 2: Vérification de réservation -->
                            <div class=\"vin-form-container\">
            
                                <form method=\"post\" action=\"";
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_check_vin");
        yield "\" class=\"vin-form\">
                                    <div class=\"mb-4\">
                                        <label for=\"vin\" class=\"form-label\">Numéro VIN</label>
                                        <input type=\"text\" 
                                               name=\"vin\" 
                                               id=\"vin\" 
                                               class=\"form-control\" 
                                               value=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("vin", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["vin"]) || array_key_exists("vin", $context) ? $context["vin"] : (function () { throw new RuntimeError('Variable "vin" does not exist.', 315, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                                               placeholder=\"Entrez le numéro VIN\"
                                               required>
                                    </div>
            
                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary vin-submit-btn\">
                                            Vérifier La Reservation
                                        </button>
                                    </div>
                                </form>
            
                                ";
        // line 327
        if ((array_key_exists("carteGrise", $context) && (isset($context["carteGrise"]) || array_key_exists("carteGrise", $context) ? $context["carteGrise"] : (function () { throw new RuntimeError('Variable "carteGrise" does not exist.', 327, $this->source); })()))) {
            // line 328
            yield "                                    <div class=\"mt-4\">
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
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carteGrise"]) || array_key_exists("carteGrise", $context) ? $context["carteGrise"] : (function () { throw new RuntimeError('Variable "carteGrise" does not exist.', 340, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 341
                yield "                                                            <tr>
                                                                <td>";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</td>
                                                                <td>";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            yield "                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 352
        yield "            
                                ";
        // line 353
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 353, $this->source); })()))) {
            // line 354
            yield "                                    <div class=\"alert alert-danger mt-3\">
                                        ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 355, $this->source); })()), "html", null, true);
            yield "
                                    </div>
                                ";
        }
        // line 358
        yield "            
                                ";
        // line 359
        if (((array_key_exists("showButton", $context) && (isset($context["showButton"]) || array_key_exists("showButton", $context) ? $context["showButton"] : (function () { throw new RuntimeError('Variable "showButton" does not exist.', 359, $this->source); })())) && ( !array_key_exists("error", $context) ||  !(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 359, $this->source); })())))) {
            // line 360
            yield "                                    <div class=\"text-center mt-4\">
                                        <a href=\"";
            // line 361
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif");
            yield "\" class=\"btn btn-primary\">
                                            Commencer la vérification
                                        </a>
                                    </div>
                                ";
        }
        // line 366
        yield "            
                                ";
        // line 367
        if ((array_key_exists("vehicule", $context) && (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 367, $this->source); })()))) {
            // line 368
            yield "                                    <div class=\"mt-4\">
                                        <h3 class=\"text-center mb-3\">Informations du Véhicule</h3>
                                        <div class=\"card mb-3\">
                                            <div class=\"card-body\">
                                                <p><strong>VIN:</strong> ";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 372, $this->source); })()), "vin", [], "any", false, false, false, 372), "html", null, true);
            yield "</p>
                                                <p><strong>Marque:</strong> ";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 373, $this->source); })()), "marque", [], "any", false, false, false, 373), "html", null, true);
            yield "</p>
                                                <p><strong>Modèle:</strong> ";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 374, $this->source); })()), "modele", [], "any", false, false, false, 374), "html", null, true);
            yield "</p>
                                                <p><strong>Année:</strong> ";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 375, $this->source); })()), "annee", [], "any", false, false, false, 375), "html", null, true);
            yield "</p>
                                            </div>
                                        </div>
            
                                        ";
            // line 379
            if ((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 379, $this->source); })())) {
                // line 380
                yield "                                            <h3 class=\"text-center mb-3\">Dernière Réservation</h3>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <p><strong>Date:</strong> ";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 383, $this->source); })()), "dateReservation", [], "any", false, false, false, 383), "d/m/Y"), "html", null, true);
                yield "</p>
                                                    <p><strong>Heure:</strong> ";
                // line 384
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 384, $this->source); })()), "heureReservation", [], "any", false, false, false, 384), "html", null, true);
                yield "</p>
                                                    ";
                // line 385
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 385, $this->source); })()), "serviceId", [], "any", false, false, false, 385)) {
                    // line 386
                    yield "                                                        <p><strong>Service:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 386, $this->source); })()), "serviceId", [], "any", false, false, false, 386), "nom", [], "any", false, false, false, 386), "html", null, true);
                    yield "</p>
                                                    ";
                }
                // line 388
                yield "                                                </div>
                                            </div>
                                        ";
            }
            // line 391
            yield "                                    </div>
                                ";
        }
        // line 393
        yield "                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boîte 3: Résultats de la vérification -->

            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  619 => 393,  615 => 391,  610 => 388,  604 => 386,  602 => 385,  598 => 384,  594 => 383,  589 => 380,  587 => 379,  580 => 375,  576 => 374,  572 => 373,  568 => 372,  562 => 368,  560 => 367,  557 => 366,  549 => 361,  546 => 360,  544 => 359,  541 => 358,  535 => 355,  532 => 354,  530 => 353,  527 => 352,  519 => 346,  510 => 343,  506 => 342,  503 => 341,  499 => 340,  485 => 328,  483 => 327,  468 => 315,  458 => 308,  415 => 267,  402 => 266,  363 => 237,  222 => 100,  209 => 99,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseEmployeFront.html.twig' %}

{% block title %}Vérification Carte Grise{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/vin.css') }}\">
    <style>
        /* Styles communs */
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
       
        /* Styles pour les boîtes de vérification */
        .verification-box {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .verification-box h2 {
            margin-bottom: 1.5rem;
            text-align: center;
        }
       
        /* Styles pour l'API NHTSA */
        .api-response {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            background: #f8f9fa;
            display: none;
        }
        .loading-spinner {
            display: none;
            width: 2rem;
            height: 2rem;
            border: 0.25rem solid #f3f3f3;
            border-top: 0.25rem solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .vin-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .vin-details th, .vin-details td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .vin-details th {
            background-color: #f2f2f2;
        }
       
        /* Styles pour les résultats de réservation */
        .reservation-status {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
        }
        .reservation-details {
            margin-top: 15px;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion de l'API NHTSA
            const vinFormApi = document.querySelector('.vin-form-api');
            if (vinFormApi) {
                vinFormApi.addEventListener('submit', function(e) {
                    e.preventDefault();
                   
                    const vin = document.getElementById('vin-api').value;
                    const submitBtn = document.getElementById('submit-api');
                    const spinner = document.getElementById('loading-spinner');
                    const responseDiv = document.getElementById('api-response');
                   
                    if (!vin) {
                        alert('Veuillez entrer un numéro VIN');
                        return;
                    }
                   
                    if (vin.length !== 17) {
                        alert('Le numéro VIN doit contenir exactement 17 caractères');
                        return;
                    }
                   
                    submitBtn.disabled = true;
                    spinner.style.display = 'block';
                    responseDiv.style.display = 'none';
                   
                    fetch(`https://vpic.nhtsa.dot.gov/api/vehicles/decodevin/\${vin}?format=json`)
                    .then(response => response.json())
                    .then(data => {
                        let html = '<h4>Résultats de vérification VIN</h4>';
                       
                        if (data.Results && data.Results.length > 0) {
                            const importantFields = [
                                'Make', 'Model', 'Model Year', 'Vehicle Type',
                                'Body Class', 'Engine Manufacturer', 'Displacement (L)',
                                'Fuel Type - Primary', 'Plant Country'
                            ];
                           
                            html += `
                                <div class=\"alert alert-success\">
                                    VIN valide - \${data.Results[0].Value || 'Inconnu'}
                                </div>
                                <div class=\"vin-details\">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Information</th>
                                                <th>Valeur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                            `;
                           
                            data.Results.forEach(item => {
                                if (importantFields.includes(item.Variable)) {
                                    html += `
                                        <tr>
                                            <td><strong>\${item.Variable}</strong></td>
                                            <td>\${item.Value || 'Non spécifié'}</td>
                                        </tr>
                                    `;
                                }
                            });
                           
                            html += `</tbody></table></div>`;
                        } else {
                            html += `<div class=\"alert alert-danger\">Aucune information trouvée</div>`;
                        }
                       
                        responseDiv.innerHTML = html;
                        responseDiv.style.display = 'block';
                    })
                    .catch(error => {
                        responseDiv.innerHTML = `
                            <div class=\"alert alert-danger\">
                                Erreur: \${error.message}
                            </div>
                        `;
                        responseDiv.style.display = 'block';
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        spinner.style.display = 'none';
                    });
                });
            }
           
            // Gestion de la vérification de réservation
            const vinFormReservation = document.querySelector('.vin-form-reservation');
            if (vinFormReservation) {
                vinFormReservation.addEventListener('submit', function(e) {
                    e.preventDefault();
                   
                    const vin = document.getElementById('vin-reservation').value;
                    const submitBtn = document.getElementById('submit-reservation');
                    const spinner = document.getElementById('loading-spinner-reservation');
                    const responseDiv = document.getElementById('reservation-response');
                   
                    if (!vin) {
                        alert('Veuillez entrer un numéro VIN');
                        return;
                    }
                   
                    submitBtn.disabled = true;
                    spinner.style.display = 'block';
                    responseDiv.style.display = 'none';
                   
                    // Simulation de la réponse
                    setTimeout(() => {
                        const hasReservation = Math.random() > 0.5;
                       
                        let html = '<h4>Statut de réservation</h4>';
                       
                        if (hasReservation) {
                            html += `
                                <div class=\"alert alert-success\">
                                    Ce véhicule a une réservation en cours
                                </div>
                                <div class=\"reservation-details\">
                                    <p><strong>Date:</strong> 15/06/2023</p>
                                    <p><strong>Heure:</strong> 14:30</p>
                                    <p><strong>Service:</strong> Révision complète</p>
                                </div>
                            `;
                        } else {
                            html += `
                                <div class=\"alert alert-warning\">
                                    Aucune réservation trouvée pour ce VIN
                                </div>
                            `;
                        }

                        // Add the redirect button
                        html += `
                            <div class=\"text-center mt-4\">
                                <a href=\"{{ path('app_verif') }}\"
                                   class=\"btn btn-lg\"
                                   style=\"background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
                                          color: white;
                                          padding: 15px 30px;
                                          border-radius: 25px;
                                          text-decoration: none;
                                          box-shadow: 0 4px 15px rgba(0,0,0,0.2);
                                          transition: transform 0.3s ease;\">
                                    <i class=\"fas fa-car-mechanic me-2\"></i>
                                    Effectuer le contrôle technique
                                </a>
                            </div>
                        `;
                       
                        responseDiv.innerHTML = html;
                        responseDiv.style.display = 'block';
                        submitBtn.disabled = false;
                        spinner.style.display = 'none';

                        // Store VIN in session storage for use in visite.html.twig
                        sessionStorage.setItem('currentVin', vin);
                    }, 1000);
                });
            }
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"welcome-section text-center\">
                    <h1>Bienvenue sur le système de vérification</h1>
                    <p class=\"lead\">Suivez les étapes pour effectuer une vérification complète du véhicule</p>
                </div>

                <!-- Boîte 1: Vérification VIN via API NHTSA -->
                <div class=\"verification-box\">
                    <h2>Vérification technique du véhicule</h2>
                    <form class=\"vin-form-api\">
                        <div class=\"mb-4\">
                            <label for=\"vin-api\" class=\"form-label\">Numéro VIN</label>
                            <input type=\"text\"
                                   name=\"vin\"
                                   id=\"vin-api\"
                                   class=\"form-control\"
                                   placeholder=\"Entrez le numéro VIN (17 caractères)\"
                                   required
                                   minlength=\"17\"
                                   maxlength=\"17\"
                                   pattern=\"[A-HJ-NPR-Z0-9]{17}\"
                                   title=\"17 caractères alphanumériques (sans I, O ou Q)\">
                            <small class=\"text-muted\">Exemple: 1HGCM82633A123456</small>
                        </div>

                        <div class=\"text-center\">
                            <button type=\"submit\" id=\"submit-api\" class=\"btn btn-primary\">
                                Vérifier les données techniques
                            </button>
                            <div id=\"loading-spinner\" class=\"loading-spinner mt-3\"></div>
                        </div>
                    </form>

                    <div id=\"api-response\" class=\"api-response\"></div>
                </div>

                <!-- Boîte 2: Vérification de réservation -->
                            <div class=\"vin-form-container\">
            
                                <form method=\"post\" action=\"{{ path('app_verif_check_vin') }}\" class=\"vin-form\">
                                    <div class=\"mb-4\">
                                        <label for=\"vin\" class=\"form-label\">Numéro VIN</label>
                                        <input type=\"text\" 
                                               name=\"vin\" 
                                               id=\"vin\" 
                                               class=\"form-control\" 
                                               value=\"{{ vin|default('') }}\"
                                               placeholder=\"Entrez le numéro VIN\"
                                               required>
                                    </div>
            
                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary vin-submit-btn\">
                                            Vérifier La Reservation
                                        </button>
                                    </div>
                                </form>
            
                                {% if carteGrise is defined and carteGrise %}
                                    <div class=\"mt-4\">
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
                                                        {% for key, value in carteGrise %}
                                                            <tr>
                                                                <td>{{ key }}</td>
                                                                <td>{{ value }}</td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
            
                                {% if error is defined and error %}
                                    <div class=\"alert alert-danger mt-3\">
                                        {{ error }}
                                    </div>
                                {% endif %}
            
                                {% if showButton is defined and showButton and (error is not defined or not error) %}
                                    <div class=\"text-center mt-4\">
                                        <a href=\"{{ path('app_verif') }}\" class=\"btn btn-primary\">
                                            Commencer la vérification
                                        </a>
                                    </div>
                                {% endif %}
            
                                {% if vehicule is defined and vehicule %}
                                    <div class=\"mt-4\">
                                        <h3 class=\"text-center mb-3\">Informations du Véhicule</h3>
                                        <div class=\"card mb-3\">
                                            <div class=\"card-body\">
                                                <p><strong>VIN:</strong> {{ vehicule.vin }}</p>
                                                <p><strong>Marque:</strong> {{ vehicule.marque }}</p>
                                                <p><strong>Modèle:</strong> {{ vehicule.modele }}</p>
                                                <p><strong>Année:</strong> {{ vehicule.annee }}</p>
                                            </div>
                                        </div>
            
                                        {% if reservation %}
                                            <h3 class=\"text-center mb-3\">Dernière Réservation</h3>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <p><strong>Date:</strong> {{ reservation.dateReservation|date('d/m/Y') }}</p>
                                                    <p><strong>Heure:</strong> {{ reservation.heureReservation }}</p>
                                                    {% if reservation.serviceId %}
                                                        <p><strong>Service:</strong> {{ reservation.serviceId.nom }}</p>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boîte 3: Résultats de la vérification -->

            </div>
        </div>
    </div>
{% endblock %}
", "vin/vin.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\vin\\vin.html.twig");
    }
}
