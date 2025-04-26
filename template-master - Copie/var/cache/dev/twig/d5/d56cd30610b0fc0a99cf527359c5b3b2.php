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

/* verif/visite.html.twig */
class __TwigTemplate_52759009f9ff891bf418de0b100834d7 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verif/visite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verif/visite.html.twig"));

        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "verif/visite.html.twig", 1);
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

        yield "Contrôle Technique";
        
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <style>
        .container {
            max-width: 1200px;
            padding: 2rem;
        }

        h1 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 15px;
        }

        h1:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, #3498db, #2ecc71);
        }

        .check-section {
            background: white;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            border-radius: 15px;
            padding: 2rem;
            margin-top: 2rem;
            transition: transform 0.3s ease;
        }

        .check-section:hover {
            transform: translateY(-5px);
        }

        .check-item {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            animation: fadeIn 0.5s ease-out;
        }

        .check-item:hover {
            background: #ffffff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .check-item label {
            font-weight: 500;
            color: #34495e;
            margin-left: 10px;
            font-size: 1.1rem;
        }

        .form-select {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 10px;
            transition: all 0.3s ease;
            box-shadow: none;
        }

        .form-select:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52,152,219,0.25);
        }

        .form-select:disabled {
            background-color: #f8f9fa;
            opacity: 0.7;
        }

        input[type=\"checkbox\"] {
            width: 22px;
            height: 22px;
            border-radius: 5px;
            cursor: pointer;
            accent-color: #3498db;
        }

        .verification-image {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
            animation: zoomIn 1s ease-out;
        }

        .verification-image:hover {
            transform: scale(1.02);
        }


        .alert {
            border-radius: 10px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            animation: slideInDown 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .is-invalid {
            border-color: #dc3545;
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
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

        // line 137
        yield "<div class=\"container animate__animated animate__fadeIn\">
    <h1 class=\"text-center mb-4 animate__animated animate__slideInDown\">Contrôle technique : vérifiez pour rouler en toute sécurité</h1>
    
    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "flashes", ["success"], "method", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 141
            yield "        <div class=\"alert alert-success animate__animated animate__fadeInDown\">
            ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "
    ";
        // line 146
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 146, $this->source); })()))) {
            // line 147
            yield "        <div class=\"alert alert-danger animate__animated animate__fadeInDown\">
            ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 151
        yield "    
    <div class=\"row\">
        <div class=\"col-md-8 mx-auto\">
            <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/verif.jpg"), "html", null, true);
        yield "\" alt=\"Points de vérification\" class=\"verification-image animate__animated animate__zoomIn\" style=\"width:100%\">
            
            <div class=\"check-section animate__animated animate__fadeInUp\">
                <form method=\"post\" action=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_submit");
        yield "\" id=\"checkForm\">
                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"direction\" name=\"checks[]\" value=\"direction\">
                        <label for=\"direction\">Direction, Tableau de bord</label>
                        <select class=\"form-select\" name=\"direction_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"bruit_anormal\">Bruit anormal en tournant</option>
                            <option value=\"volant_vibration\">Volant qui vibre</option>
                            <option value=\"temoins_lumineux\">Témoins lumineux allumés</option>
                            <option value=\"direction_assistee\">Direction assistée défaillante</option>
                            <option value=\"jeu_direction\">Jeu dans la direction</option>
                            <option value=\"volant_decentre\">Volant décentré</option>
                            <option value=\"compteur_defectueux\">Compteur défectueux</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"visibilite\" name=\"checks[]\" value=\"visibilite\">
                        <label for=\"visibilite\">Visibilité</label>
                        <select class=\"form-select\" name=\"visibilite_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"essuie_glaces\">Essuie-glaces défectueux</option>
                            <option value=\"lave_glace\">Lave-glace ne fonctionne pas</option>
                            <option value=\"pare_brise\">Pare-brise fissuré</option>
                            <option value=\"retroviseur\">Rétroviseur endommagé</option>
                            <option value=\"vitres_embuees\">Vitres embuées</option>
                            <option value=\"retroviseurs\">Rétroviseurs endommagés</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"carrosserie\" name=\"checks[]\" value=\"carrosserie\">
                        <label for=\"carrosserie\">Carroserie</label>
                        <select class=\"form-select\" name=\"carrosserie_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"rayures_bosses\">Rayures / bosses</option>
                            <option value=\"portieres\">Portières mal alignées</option>
                            <option value=\"rouille\">Rouille visible</option>
                            <option value=\"pare_chocs\">Pare-chocs abîmé</option>
                            <option value=\"capot_coffre\">Capot/coffre difficile à fermer</option>
                            <option value=\"deformation\">Déformation structure</option>
                            <option value=\"pieces_manquantes\">Pièces manquantes</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"eclairage\" name=\"checks[]\" value=\"eclairage\">
                        <label for=\"eclairage\">Éclairage</label>
                        <select class=\"form-select\" name=\"eclairage_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"feu_croisement\">Feu de croisement HS</option>
                            <option value=\"feu_stop\">Feu de stop défectueux</option>
                            <option value=\"clignotant\">Clignotant ne fonctionne pas</option>
                            <option value=\"phares\">Phares mal réglés</option>
                            <option value=\"eclairage_interieur\">Éclairage intérieur HS</option>
                            <option value=\"phares\">Phares défectueux</option>
                            <option value=\"feux_arriere\">Feux arrière cassés</option>
                            <option value=\"clignotants\">Clignotants non fonctionnels</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"huile\" name=\"checks[]\" value=\"huileDefault\">
                        <label for=\"huile\">Huile</label>
                        <select class=\"form-select\" name=\"huile_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"niveau_bas\">Niveau d'huile bas</option>
                            <option value=\"fuite\">Fuite d'huile</option>
                            <option value=\"contamination\">Huile contaminée</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"echappement\" name=\"checks[]\" value=\"echappement\">
                        <label for=\"echappement\">Échappement</label>
                        <select class=\"form-select\" name=\"echappement_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"fumee\">Fumée excessive</option>
                            <option value=\"bruit\">Bruit anormal (pot percé)</option>
                            <option value=\"odeur\">Mauvaise odeur</option>
                            <option value=\"puissance\">Perte de puissance</option>
                            <option value=\"fuite\">Fuite visible</option>
                            <option value=\"catalyseur\">Catalyseur défectueux</option>
                            <option value=\"bruit\">Niveau sonore élevé</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"freins\" name=\"checks[]\" value=\"freins\">
                        <label for=\"freins\">Freins</label>
                        <select class=\"form-select\" name=\"freins_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"pedale\">Pédale molle</option>
                            <option value=\"grincement\">Bruit de grincement</option>
                            <option value=\"inefficace\">Freinage inefficace</option>
                            <option value=\"abs\">Voyant ABS allumé</option>
                            <option value=\"deviation\">Voiture tire d'un côté</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"pneaumatique\" name=\"checks[]\" value=\"pneaumatique\">
                        <label for=\"pneaumatique\">Pneaumatique</label>
                        <select class=\"form-select\" name=\"pneaumatique_details\" >
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"pression\">Pression incorrecte</option>
                            <option value=\"usure\">Usure irrégulière</option>
                            <option value=\"craquelures\">Craquelures visibles</option>
                            <option value=\"vibration\">Vibration à haute vitesse</option>
                            <option value=\"fuite\">Fuite lente</option>
                            <option value=\"lisses\">Pneus lisses</option>
                        </select>
                    </div>

                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">Valider la vérification</button>
                        <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultat_index");
        yield "\" class=\"btn btn-secondary\">Voir les résultats</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 282
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

        // line 283
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate check items on scroll
        const checkItems = document.querySelectorAll('.check-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        checkItems.forEach(item => {
            observer.observe(item);
        });

        // Smooth checkbox animation
        document.querySelectorAll('input[type=\"checkbox\"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const select = this.parentElement.querySelector('select');
                if (this.checked) {
                    select.style.display = 'block';
                    select.classList.add('animate__animated', 'animate__fadeIn');
                } else {
                    select.classList.add('animate__animated', 'animate__fadeOut');
                    setTimeout(() => {
                        select.style.display = 'none';
                        select.value = '';
                        select.classList.remove('animate__animated', 'animate__fadeOut');
                    }, 500);
                }
            });
        });

        // Initialize dropdowns on page load
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.form-select').forEach(select => {
                select.style.display = select.parentElement.querySelector('input[type=\"checkbox\"]').checked ? 'block' : 'none';
            });
        });

        // Form validation
        document.getElementById('checkForm').addEventListener('submit', function(e) {
            const checkboxes = this.querySelectorAll('input[type=\"checkbox\"]:checked');
            
            // Collecter tous les détails
            const details = {
                direction: document.querySelector('[name=\"direction_details\"]').value,
                visibilite: document.querySelector('[name=\"visibilite_details\"]').value,
                carrosserie: document.querySelector('[name=\"carrosserie_details\"]').value,
                eclairage: document.querySelector('[name=\"eclairage_details\"]').value,
                huile: document.querySelector('[name=\"huile_details\"]').value,
                echappement: document.querySelector('[name=\"echappement_details\"]').value,
                freins: document.querySelector('[name=\"freins_details\"]').value,
                pneaumatique: document.querySelector('[name=\"pneaumatique_details\"]').value
            };
        
            // Ajouter des champs cachés pour chaque détail
            Object.entries(details).forEach(([key, value]) => {
                if (value) {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = value;
                    this.appendChild(input);
                }
            });
        });

            if (checkboxes.length === 0) {
                e.preventDefault();
                alert('Veuillez sélectionner au moins un élément à vérifier.');
                return;
            }

            // Validate that selected checkboxes have a dropdown value
            let valid = true;
            checkboxes.forEach(checkbox => {
                const select = checkbox.parentElement.querySelector('select');
                if (!select.value) {
                    valid = false;
                    select.classList.add('is-invalid');
                }
            });

            if (!valid) {
                e.preventDefault();
                alert('Veuillez sélectionner un problème pour chaque élément coché.');
            }
        });

        // Position tracking functionality
        let watchId;

        function startTracking() {
            if (navigator.geolocation) {
                watchId = navigator.geolocation.watchPosition(function(position) {
                    updatePosition(position.coords.latitude, position.coords.longitude);
                }, function(error) {
                    console.error(\"Error getting location: \", error);
                }, {
                    enableHighAccuracy: true,
                    maximumAge: 30000,
                    timeout: 27000
                });
            }
        }

        function updatePosition(lat, lng) {
            fetch(`\${window.location.pathname}?updatePosition=true&lat=\${lat}&lng=\${lng}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                }
            });
        }

        document.addEventListener('DOMContentLoaded', startTracking);

        window.addEventListener('beforeunload', function() {
            if (watchId) {
                navigator.geolocation.clearWatch(watchId);
            }
        });
</script>
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
        return "verif/visite.html.twig";
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
        return array (  453 => 283,  440 => 282,  421 => 273,  302 => 157,  296 => 154,  291 => 151,  285 => 148,  282 => 147,  280 => 146,  277 => 145,  268 => 142,  265 => 141,  261 => 140,  256 => 137,  243 => 136,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseEmployeFront.html.twig' %}

{% block title %}Contrôle Technique{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
    <style>
        .container {
            max-width: 1200px;
            padding: 2rem;
        }

        h1 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 15px;
        }

        h1:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, #3498db, #2ecc71);
        }

        .check-section {
            background: white;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            border-radius: 15px;
            padding: 2rem;
            margin-top: 2rem;
            transition: transform 0.3s ease;
        }

        .check-section:hover {
            transform: translateY(-5px);
        }

        .check-item {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            animation: fadeIn 0.5s ease-out;
        }

        .check-item:hover {
            background: #ffffff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .check-item label {
            font-weight: 500;
            color: #34495e;
            margin-left: 10px;
            font-size: 1.1rem;
        }

        .form-select {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 10px;
            transition: all 0.3s ease;
            box-shadow: none;
        }

        .form-select:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52,152,219,0.25);
        }

        .form-select:disabled {
            background-color: #f8f9fa;
            opacity: 0.7;
        }

        input[type=\"checkbox\"] {
            width: 22px;
            height: 22px;
            border-radius: 5px;
            cursor: pointer;
            accent-color: #3498db;
        }

        .verification-image {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
            animation: zoomIn 1s ease-out;
        }

        .verification-image:hover {
            transform: scale(1.02);
        }


        .alert {
            border-radius: 10px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            animation: slideInDown 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .is-invalid {
            border-color: #dc3545;
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container animate__animated animate__fadeIn\">
    <h1 class=\"text-center mb-4 animate__animated animate__slideInDown\">Contrôle technique : vérifiez pour rouler en toute sécurité</h1>
    
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success animate__animated animate__fadeInDown\">
            {{ message }}
        </div>
    {% endfor %}

    {% if error is defined and error %}
        <div class=\"alert alert-danger animate__animated animate__fadeInDown\">
            {{ error }}
        </div>
    {% endif %}
    
    <div class=\"row\">
        <div class=\"col-md-8 mx-auto\">
            <img src=\"{{ asset('/img/verif.jpg') }}\" alt=\"Points de vérification\" class=\"verification-image animate__animated animate__zoomIn\" style=\"width:100%\">
            
            <div class=\"check-section animate__animated animate__fadeInUp\">
                <form method=\"post\" action=\"{{ path('app_verif_submit') }}\" id=\"checkForm\">
                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"direction\" name=\"checks[]\" value=\"direction\">
                        <label for=\"direction\">Direction, Tableau de bord</label>
                        <select class=\"form-select\" name=\"direction_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"bruit_anormal\">Bruit anormal en tournant</option>
                            <option value=\"volant_vibration\">Volant qui vibre</option>
                            <option value=\"temoins_lumineux\">Témoins lumineux allumés</option>
                            <option value=\"direction_assistee\">Direction assistée défaillante</option>
                            <option value=\"jeu_direction\">Jeu dans la direction</option>
                            <option value=\"volant_decentre\">Volant décentré</option>
                            <option value=\"compteur_defectueux\">Compteur défectueux</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"visibilite\" name=\"checks[]\" value=\"visibilite\">
                        <label for=\"visibilite\">Visibilité</label>
                        <select class=\"form-select\" name=\"visibilite_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"essuie_glaces\">Essuie-glaces défectueux</option>
                            <option value=\"lave_glace\">Lave-glace ne fonctionne pas</option>
                            <option value=\"pare_brise\">Pare-brise fissuré</option>
                            <option value=\"retroviseur\">Rétroviseur endommagé</option>
                            <option value=\"vitres_embuees\">Vitres embuées</option>
                            <option value=\"retroviseurs\">Rétroviseurs endommagés</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"carrosserie\" name=\"checks[]\" value=\"carrosserie\">
                        <label for=\"carrosserie\">Carroserie</label>
                        <select class=\"form-select\" name=\"carrosserie_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"rayures_bosses\">Rayures / bosses</option>
                            <option value=\"portieres\">Portières mal alignées</option>
                            <option value=\"rouille\">Rouille visible</option>
                            <option value=\"pare_chocs\">Pare-chocs abîmé</option>
                            <option value=\"capot_coffre\">Capot/coffre difficile à fermer</option>
                            <option value=\"deformation\">Déformation structure</option>
                            <option value=\"pieces_manquantes\">Pièces manquantes</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"eclairage\" name=\"checks[]\" value=\"eclairage\">
                        <label for=\"eclairage\">Éclairage</label>
                        <select class=\"form-select\" name=\"eclairage_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"feu_croisement\">Feu de croisement HS</option>
                            <option value=\"feu_stop\">Feu de stop défectueux</option>
                            <option value=\"clignotant\">Clignotant ne fonctionne pas</option>
                            <option value=\"phares\">Phares mal réglés</option>
                            <option value=\"eclairage_interieur\">Éclairage intérieur HS</option>
                            <option value=\"phares\">Phares défectueux</option>
                            <option value=\"feux_arriere\">Feux arrière cassés</option>
                            <option value=\"clignotants\">Clignotants non fonctionnels</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"huile\" name=\"checks[]\" value=\"huileDefault\">
                        <label for=\"huile\">Huile</label>
                        <select class=\"form-select\" name=\"huile_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"niveau_bas\">Niveau d'huile bas</option>
                            <option value=\"fuite\">Fuite d'huile</option>
                            <option value=\"contamination\">Huile contaminée</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"echappement\" name=\"checks[]\" value=\"echappement\">
                        <label for=\"echappement\">Échappement</label>
                        <select class=\"form-select\" name=\"echappement_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"fumee\">Fumée excessive</option>
                            <option value=\"bruit\">Bruit anormal (pot percé)</option>
                            <option value=\"odeur\">Mauvaise odeur</option>
                            <option value=\"puissance\">Perte de puissance</option>
                            <option value=\"fuite\">Fuite visible</option>
                            <option value=\"catalyseur\">Catalyseur défectueux</option>
                            <option value=\"bruit\">Niveau sonore élevé</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"freins\" name=\"checks[]\" value=\"freins\">
                        <label for=\"freins\">Freins</label>
                        <select class=\"form-select\" name=\"freins_details\">
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"pedale\">Pédale molle</option>
                            <option value=\"grincement\">Bruit de grincement</option>
                            <option value=\"inefficace\">Freinage inefficace</option>
                            <option value=\"abs\">Voyant ABS allumé</option>
                            <option value=\"deviation\">Voiture tire d'un côté</option>
                        </select>
                    </div>

                    <div class=\"check-item\">
                        <input type=\"checkbox\" id=\"pneaumatique\" name=\"checks[]\" value=\"pneaumatique\">
                        <label for=\"pneaumatique\">Pneaumatique</label>
                        <select class=\"form-select\" name=\"pneaumatique_details\" >
                            <option value=\"\">Sélectionner un problème</option>
                            <option value=\"pression\">Pression incorrecte</option>
                            <option value=\"usure\">Usure irrégulière</option>
                            <option value=\"craquelures\">Craquelures visibles</option>
                            <option value=\"vibration\">Vibration à haute vitesse</option>
                            <option value=\"fuite\">Fuite lente</option>
                            <option value=\"lisses\">Pneus lisses</option>
                        </select>
                    </div>

                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">Valider la vérification</button>
                        <a href=\"{{ path('app_resultat_index') }}\" class=\"btn btn-secondary\">Voir les résultats</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate check items on scroll
        const checkItems = document.querySelectorAll('.check-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        checkItems.forEach(item => {
            observer.observe(item);
        });

        // Smooth checkbox animation
        document.querySelectorAll('input[type=\"checkbox\"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const select = this.parentElement.querySelector('select');
                if (this.checked) {
                    select.style.display = 'block';
                    select.classList.add('animate__animated', 'animate__fadeIn');
                } else {
                    select.classList.add('animate__animated', 'animate__fadeOut');
                    setTimeout(() => {
                        select.style.display = 'none';
                        select.value = '';
                        select.classList.remove('animate__animated', 'animate__fadeOut');
                    }, 500);
                }
            });
        });

        // Initialize dropdowns on page load
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.form-select').forEach(select => {
                select.style.display = select.parentElement.querySelector('input[type=\"checkbox\"]').checked ? 'block' : 'none';
            });
        });

        // Form validation
        document.getElementById('checkForm').addEventListener('submit', function(e) {
            const checkboxes = this.querySelectorAll('input[type=\"checkbox\"]:checked');
            
            // Collecter tous les détails
            const details = {
                direction: document.querySelector('[name=\"direction_details\"]').value,
                visibilite: document.querySelector('[name=\"visibilite_details\"]').value,
                carrosserie: document.querySelector('[name=\"carrosserie_details\"]').value,
                eclairage: document.querySelector('[name=\"eclairage_details\"]').value,
                huile: document.querySelector('[name=\"huile_details\"]').value,
                echappement: document.querySelector('[name=\"echappement_details\"]').value,
                freins: document.querySelector('[name=\"freins_details\"]').value,
                pneaumatique: document.querySelector('[name=\"pneaumatique_details\"]').value
            };
        
            // Ajouter des champs cachés pour chaque détail
            Object.entries(details).forEach(([key, value]) => {
                if (value) {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = value;
                    this.appendChild(input);
                }
            });
        });

            if (checkboxes.length === 0) {
                e.preventDefault();
                alert('Veuillez sélectionner au moins un élément à vérifier.');
                return;
            }

            // Validate that selected checkboxes have a dropdown value
            let valid = true;
            checkboxes.forEach(checkbox => {
                const select = checkbox.parentElement.querySelector('select');
                if (!select.value) {
                    valid = false;
                    select.classList.add('is-invalid');
                }
            });

            if (!valid) {
                e.preventDefault();
                alert('Veuillez sélectionner un problème pour chaque élément coché.');
            }
        });

        // Position tracking functionality
        let watchId;

        function startTracking() {
            if (navigator.geolocation) {
                watchId = navigator.geolocation.watchPosition(function(position) {
                    updatePosition(position.coords.latitude, position.coords.longitude);
                }, function(error) {
                    console.error(\"Error getting location: \", error);
                }, {
                    enableHighAccuracy: true,
                    maximumAge: 30000,
                    timeout: 27000
                });
            }
        }

        function updatePosition(lat, lng) {
            fetch(`\${window.location.pathname}?updatePosition=true&lat=\${lat}&lng=\${lng}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                }
            });
        }

        document.addEventListener('DOMContentLoaded', startTracking);

        window.addEventListener('beforeunload', function() {
            if (watchId) {
                navigator.geolocation.clearWatch(watchId);
            }
        });
</script>
{% endblock %}", "verif/visite.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\verif\\visite.html.twig");
    }
}
