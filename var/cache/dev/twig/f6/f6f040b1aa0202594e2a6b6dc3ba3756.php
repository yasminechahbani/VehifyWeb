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

/* employe_front/index.html.twig */
class __TwigTemplate_4555da99b65af471fe385c67a8c3cbbe extends Template
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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe_front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe_front/index.html.twig"));

        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "employe_front/index.html.twig", 1);
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

        yield "Tableau de Bord Technique";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <!-- Welcome Section with Animated Typing -->
    <div class=\"welcome-section mb-5\">
        <div class=\"card border-0 bg-gradient-primary text-white\">
            <div class=\"card-body p-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-8\">
                        <h1 class=\"display-4 fw-bold mb-3\">Bonjour, <span class=\"text-warning\">";
        // line 12
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 12), "get", ["prenom_employe"], "method", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 12), "get", ["prenom_employe"], "method", false, false, false, 12)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 12), "get", ["prenom_employe"], "method", false, false, false, 12), "html", null, true)) : (yield "Technicien"));
        yield "</span></h1>
                        <h3 class=\"mb-4\">Bienvenue sur votre <span id=\"typed-text\"></span></h3>
                        <p class=\"lead\">Gérez vos visites techniques et permis en toute simplicité.</p>
                        <div class=\"mt-4\">
                            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_check_vin");
        yield "\" class=\"btn btn-light btn-lg me-2\">
                                <i class=\"fas fa-clipboard-check me-2\"></i>Nouvelle visite
                            </a>
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_permis");
        yield "\" class=\"btn btn-outline-light btn-lg\">
                                <i class=\"fas fa-id-card me-2\"></i>Nouveau permis
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 d-none d-lg-block\">
                        <div class=\"text-center\">
                            <div class=\"dashboard-icon-container\">
                                <i class=\"fas fa-cogs dashboard-icon\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class=\"row mb-5\">
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-primary-soft text-primary\">
                                <i class=\"fas fa-car-alt\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Véhicules</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"42\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 75%\"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-success-soft text-success\">
                                <i class=\"fas fa-check-circle\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Visites à jour</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"28\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pending_renewals");
        yield "\" style=\"text-decoration: none; color: inherit;\">

            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-warning-soft text-warning\">
                                <i class=\"fas fa-exclamation-triangle\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Visites en attente</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingRenewalCount"]) || array_key_exists("pendingRenewalCount", $context) ? $context["pendingRenewalCount"] : (function () { throw new RuntimeError('Variable "pendingRenewalCount" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 35%\"></div>
                    </div>
                </div>
            </div></a>
            </div>
        
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-info-soft text-info\">
                                <i class=\"fas fa-id-card\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Permis gérés</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"56\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 85%\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Sections -->
    <div class=\"row mb-5\">
        <!-- Recent Technical Visits -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-clipboard-check me-2 text-primary\"></i>Visites récentes
                    </h5>
                    <a href=\"\" class=\"btn btn-sm btn-primary\">Voir tout</a>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"timeline-container p-3\">
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Renault Clio</h6>
                                    <span class=\"badge bg-success\">Validée</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: AB-123-CD</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 15/06/2023</p>
                            </div>
                        </div>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Peugeot 308</h6>
                                    <span class=\"badge bg-warning\">Réparations</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: EF-456-GH</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 10/06/2023</p>
                            </div>
                        </div>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Citroën C3</h6>
                                    <span class=\"badge bg-success\">Validée</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: IJ-789-KL</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 05/06/2023</p>
                            </div>
                        </div>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Volkswagen Golf</h6>
                                    <span class=\"badge bg-danger\">Refusée</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: MN-012-OP</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 01/06/2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- License Management -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-id-card me-2 text-primary\"></i>Permis à vérifier
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"license-cards\">
                            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["permis"]) || array_key_exists("permis", $context) ? $context["permis"] : (function () { throw new RuntimeError('Variable "permis" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["permi"]) {
            // line 198
            yield "                                <div class=\"license-card mb-3\">
                                    <div class=\"row g-0\">
                                        <div class=\"col-auto\">
                                            <div class=\"license-icon\">
                                                <i class=\"fas fa-id-card\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div class=\"card-body py-2\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <h6 class=\"card-title mb-1\">Permis #";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "numeroPermis", [], "any", false, false, false, 208), "html", null, true);
            yield "</h6>
                                                    <span class=\"badge bg-";
            // line 209
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "etat", [], "any", false, false, false, 209) == "Active")) ? ("success") : ("danger"));
            yield "\">
                                                        ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "etat", [], "any", false, false, false, 210), "html", null, true);
            yield "
                                                    </span>
                                                </div>
                                                <p class=\"card-text small text-muted mb-1\">Catégorie: ";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "categorie", [], "any", false, false, false, 213), "html", null, true);
            yield "</p>
                                                <p class=\"card-text small\">
                                                    Expire le ";
            // line 215
            ((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateExpiration", [], "any", false, false, false, 215)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateExpiration", [], "any", false, false, false, 215), "d/m/Y"), "html", null, true)) : (yield "N/A"));
            yield "
                                                </p>
                                               <div class=\"mt-2\">
                                                    <a href=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_permisOne", ["numeroPermis" => CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "numeroPermis", [], "any", false, false, false, 218)]), "html", null, true);
            yield "\" class=\"\">
                                                        <i class=\"fa fa-eye\"></i> Voir
                                                    </a>
        
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['permi'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        yield "                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions and Calendar -->
    <div class=\"row\">
        <!-- Quick Actions -->
        <div class=\"col-lg-5 mb-4\">
            <div class=\"card border-0\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-bolt me-2 text-primary\"></i>Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-primary-soft text-primary\">
                                <i class=\"fas fa-clipboard-check\"></i>
                                <span>Nouvelle visite</span>
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-success-soft text-success\">
                                <i class=\"fas fa-id-card\"></i>
                                <span>Ajouter permis</span>
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-info-soft text-info\">
                                <i class=\"fas fa-file-alt\"></i>
                                <span>Rapport</span>
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-warning-soft text-warning\">
                                <i class=\"fas fa-calendar-alt\"></i>
                                <span>Planifier</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Calendar -->
        <div class=\"col-lg-7 mb-4\">
            <div class=\"card border-0\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-calendar me-2 text-primary\"></i>Calendrier des visites
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div id=\"mini-calendar\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 292
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

        // line 293
        yield "<style>
    /* Gradient Background */
    .bg-gradient-primary {
        background: linear-gradient(135deg, var(--primary) 0%, #4361ee 100%);
    }
    
    /* Dashboard Icon Animation */
    .dashboard-icon-container {
        width: 150px;
        height: 150px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        animation: pulse 2s infinite;
    }
    
    .dashboard-icon {
        font-size: 4rem;
        color: white;
    }
    
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
        }
        70% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }
    
    /* Stats Cards */
    .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .bg-primary-soft { background-color: rgba(13, 110, 253, 0.1); }
    .bg-success-soft { background-color: rgba(25, 135, 84, 0.1); }
    .bg-warning-soft { background-color: rgba(255, 193, 7, 0.1); }
    .bg-info-soft { background-color: rgba(13, 202, 240, 0.1); }
    
    /* Timeline */
    .timeline-container {
        position: relative;
    }
    
    .timeline-item {
        position: relative;
        padding-left: 30px;
        padding-bottom: 20px;
    }
    
    .timeline-item:last-child {
        padding-bottom: 0;
    }
    
    .timeline-item-marker {
        position: absolute;
        left: 0;
        top: 5px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background-color: var(--primary);
        z-index: 2;
    }
    
    .timeline-item:not(:last-child)::before {
        content: '';
        position: absolute;
        left: 6px;
        top: 20px;
        bottom: 0;
        width: 2px;
        background-color: #e9ecef;
    }
    
    /* License Cards */
    .license-card {
        border-radius: 10px;
        border: 1px solid #e9ecef;
        transition: all 0.3s;
    }
    
    .license-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .license-icon {
        width: 50px;
        height: 50px;
        background-color: var(--primary);
        color: white;
        border-radius: 10px 0 0 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    /* Quick Action Cards */
    .quick-action-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s;
        text-decoration: none;
        height: 100%;
    }
    
    .quick-action-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .quick-action-card i {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    
    /* Mini Calendar */
    #mini-calendar {
        height: 250px;
        background-color: #f8f9fa;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: #6c757d;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 443
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

        // line 444
        yield "<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Typed.js for animated text
        var typed = new Typed('#typed-text', {
            strings: ['Portail Technique', 'Espace de Gestion', 'Centre de Contrôle'],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true
        });
        
        // Counter animation
        const counters = document.querySelectorAll('.counter');
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / 100;
            
            const updateCounter = () => {
                const count = +counter.innerText;
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target;
                }
            };
            
            updateCounter();
        });
        
        // Simple calendar display
        const calendarEl = document.getElementById('mini-calendar');
        const today = new Date();
        const monthNames = [\"Janvier\", \"Février\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Août\", \"Septembre\", \"Octobre\", \"Novembre\", \"Décembre\"];
        
        // Sample events data
        const events = [
            { date: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 2), title: \"Visite Renault Clio\" },
            { date: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 4), title: \"Visite Peugeot 208\" },
            { date: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 7), title: \"Visite Citroën C4\" }
        ];
        
        // Create simple calendar HTML
        let calendarHTML = `
            <div class=\"calendar-container\">
                <div class=\"calendar-header d-flex justify-content-between align-items-center mb-3\">
                    <h5 class=\"mb-0\">\${monthNames[today.getMonth()]} \${today.getFullYear()}</h5>
                    <div>
                        <button class=\"btn btn-sm btn-outline-secondary me-2\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </button>
                        <button class=\"btn btn-sm btn-outline-secondary\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </button>
                    </div>
                </div>
                <div class=\"upcoming-events\">
                    <h6 class=\"text-muted mb-3\">Prochaines visites</h6>
                    <div class=\"list-group\">
        `;
        
        // Add events to calendar
        events.forEach(event => {
            const day = event.date.getDate();
            const month = monthNames[event.date.getMonth()].substring(0, 3);
            
            calendarHTML += `
                <div class=\"list-group-item list-group-item-action d-flex gap-3 align-items-center\">
                    <div class=\"calendar-date text-center\">
                        <div class=\"small text-uppercase text-muted\">\${month}</div>
                        <div class=\"fw-bold\">\${day}</div>
                    </div>
                    <div>
                        <h6 class=\"mb-0\">\${event.title}</h6>
                        <p class=\"text-muted small mb-0\">9:00 - 10:00</p>
                    </div>
                </div>
            `;
        });
        
        calendarHTML += `
                    </div>
                </div>
            </div>
        `;
        
        calendarEl.innerHTML = calendarHTML;
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
        return "employe_front/index.html.twig";
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
        return array (  625 => 444,  612 => 443,  453 => 293,  440 => 292,  367 => 228,  351 => 218,  345 => 215,  340 => 213,  334 => 210,  330 => 209,  326 => 208,  314 => 198,  310 => 197,  203 => 93,  188 => 81,  123 => 19,  117 => 16,  110 => 12,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseEmployeFront.html.twig' %}

{% block title %}Tableau de Bord Technique{% endblock %}

{% block body %}
    <!-- Welcome Section with Animated Typing -->
    <div class=\"welcome-section mb-5\">
        <div class=\"card border-0 bg-gradient-primary text-white\">
            <div class=\"card-body p-5\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-8\">
                        <h1 class=\"display-4 fw-bold mb-3\">Bonjour, <span class=\"text-warning\">{{ app.session.get('prenom_employe') ?? 'Technicien' }}</span></h1>
                        <h3 class=\"mb-4\">Bienvenue sur votre <span id=\"typed-text\"></span></h3>
                        <p class=\"lead\">Gérez vos visites techniques et permis en toute simplicité.</p>
                        <div class=\"mt-4\">
                            <a href=\"{{path('app_verif_check_vin')}}\" class=\"btn btn-light btn-lg me-2\">
                                <i class=\"fas fa-clipboard-check me-2\"></i>Nouvelle visite
                            </a>
                            <a href=\"{{path('app_new_permis')}}\" class=\"btn btn-outline-light btn-lg\">
                                <i class=\"fas fa-id-card me-2\"></i>Nouveau permis
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 d-none d-lg-block\">
                        <div class=\"text-center\">
                            <div class=\"dashboard-icon-container\">
                                <i class=\"fas fa-cogs dashboard-icon\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class=\"row mb-5\">
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-primary-soft text-primary\">
                                <i class=\"fas fa-car-alt\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Véhicules</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"42\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 75%\"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-success-soft text-success\">
                                <i class=\"fas fa-check-circle\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Visites à jour</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"28\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <a href=\"{{ path('app_pending_renewals') }}\" style=\"text-decoration: none; color: inherit;\">

            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-warning-soft text-warning\">
                                <i class=\"fas fa-exclamation-triangle\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Visites en attente</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"{{ pendingRenewalCount }}\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 35%\"></div>
                    </div>
                </div>
            </div></a>
            </div>
        
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"stat-icon bg-info-soft text-info\">
                                <i class=\"fas fa-id-card\"></i>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-0\">Permis gérés</h6>
                            <h3 class=\"fw-bold mb-0 counter\" data-target=\"56\">0</h3>
                        </div>
                    </div>
                    <div class=\"progress mt-3\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 85%\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Sections -->
    <div class=\"row mb-5\">
        <!-- Recent Technical Visits -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-clipboard-check me-2 text-primary\"></i>Visites récentes
                    </h5>
                    <a href=\"\" class=\"btn btn-sm btn-primary\">Voir tout</a>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"timeline-container p-3\">
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Renault Clio</h6>
                                    <span class=\"badge bg-success\">Validée</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: AB-123-CD</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 15/06/2023</p>
                            </div>
                        </div>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Peugeot 308</h6>
                                    <span class=\"badge bg-warning\">Réparations</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: EF-456-GH</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 10/06/2023</p>
                            </div>
                        </div>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Citroën C3</h6>
                                    <span class=\"badge bg-success\">Validée</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: IJ-789-KL</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 05/06/2023</p>
                            </div>
                        </div>
                        <div class=\"timeline-item\">
                            <div class=\"timeline-item-marker\"></div>
                            <div class=\"timeline-item-content\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h6 class=\"mb-0\">Volkswagen Golf</h6>
                                    <span class=\"badge bg-danger\">Refusée</span>
                                </div>
                                <p class=\"text-muted small mb-2\">Immatriculation: MN-012-OP</p>
                                <p class=\"text-muted small mb-0\">Effectuée le 01/06/2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- License Management -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"card border-0 h-100\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-id-card me-2 text-primary\"></i>Permis à vérifier
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"license-cards\">
                            {% for permi in permis %}
                                <div class=\"license-card mb-3\">
                                    <div class=\"row g-0\">
                                        <div class=\"col-auto\">
                                            <div class=\"license-icon\">
                                                <i class=\"fas fa-id-card\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div class=\"card-body py-2\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <h6 class=\"card-title mb-1\">Permis #{{ permi.numeroPermis }}</h6>
                                                    <span class=\"badge bg-{{ permi.etat == 'Active' ? 'success' : 'danger' }}\">
                                                        {{ permi.etat }}
                                                    </span>
                                                </div>
                                                <p class=\"card-text small text-muted mb-1\">Catégorie: {{ permi.categorie }}</p>
                                                <p class=\"card-text small\">
                                                    Expire le {{ permi.dateExpiration ? permi.dateExpiration|date('d/m/Y') : 'N/A' }}
                                                </p>
                                               <div class=\"mt-2\">
                                                    <a href=\"{{ path('app_show_permisOne', {'numeroPermis': permi.numeroPermis}) }}\" class=\"\">
                                                        <i class=\"fa fa-eye\"></i> Voir
                                                    </a>
        
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions and Calendar -->
    <div class=\"row\">
        <!-- Quick Actions -->
        <div class=\"col-lg-5 mb-4\">
            <div class=\"card border-0\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-bolt me-2 text-primary\"></i>Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-primary-soft text-primary\">
                                <i class=\"fas fa-clipboard-check\"></i>
                                <span>Nouvelle visite</span>
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-success-soft text-success\">
                                <i class=\"fas fa-id-card\"></i>
                                <span>Ajouter permis</span>
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-info-soft text-info\">
                                <i class=\"fas fa-file-alt\"></i>
                                <span>Rapport</span>
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <a href=\"\" class=\"quick-action-card bg-warning-soft text-warning\">
                                <i class=\"fas fa-calendar-alt\"></i>
                                <span>Planifier</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Calendar -->
        <div class=\"col-lg-7 mb-4\">
            <div class=\"card border-0\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-calendar me-2 text-primary\"></i>Calendrier des visites
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div id=\"mini-calendar\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    /* Gradient Background */
    .bg-gradient-primary {
        background: linear-gradient(135deg, var(--primary) 0%, #4361ee 100%);
    }
    
    /* Dashboard Icon Animation */
    .dashboard-icon-container {
        width: 150px;
        height: 150px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        animation: pulse 2s infinite;
    }
    
    .dashboard-icon {
        font-size: 4rem;
        color: white;
    }
    
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
        }
        70% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }
    
    /* Stats Cards */
    .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .bg-primary-soft { background-color: rgba(13, 110, 253, 0.1); }
    .bg-success-soft { background-color: rgba(25, 135, 84, 0.1); }
    .bg-warning-soft { background-color: rgba(255, 193, 7, 0.1); }
    .bg-info-soft { background-color: rgba(13, 202, 240, 0.1); }
    
    /* Timeline */
    .timeline-container {
        position: relative;
    }
    
    .timeline-item {
        position: relative;
        padding-left: 30px;
        padding-bottom: 20px;
    }
    
    .timeline-item:last-child {
        padding-bottom: 0;
    }
    
    .timeline-item-marker {
        position: absolute;
        left: 0;
        top: 5px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background-color: var(--primary);
        z-index: 2;
    }
    
    .timeline-item:not(:last-child)::before {
        content: '';
        position: absolute;
        left: 6px;
        top: 20px;
        bottom: 0;
        width: 2px;
        background-color: #e9ecef;
    }
    
    /* License Cards */
    .license-card {
        border-radius: 10px;
        border: 1px solid #e9ecef;
        transition: all 0.3s;
    }
    
    .license-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .license-icon {
        width: 50px;
        height: 50px;
        background-color: var(--primary);
        color: white;
        border-radius: 10px 0 0 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    /* Quick Action Cards */
    .quick-action-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s;
        text-decoration: none;
        height: 100%;
    }
    
    .quick-action-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .quick-action-card i {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    
    /* Mini Calendar */
    #mini-calendar {
        height: 250px;
        background-color: #f8f9fa;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: #6c757d;
    }
</style>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Typed.js for animated text
        var typed = new Typed('#typed-text', {
            strings: ['Portail Technique', 'Espace de Gestion', 'Centre de Contrôle'],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true
        });
        
        // Counter animation
        const counters = document.querySelectorAll('.counter');
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / 100;
            
            const updateCounter = () => {
                const count = +counter.innerText;
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target;
                }
            };
            
            updateCounter();
        });
        
        // Simple calendar display
        const calendarEl = document.getElementById('mini-calendar');
        const today = new Date();
        const monthNames = [\"Janvier\", \"Février\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Août\", \"Septembre\", \"Octobre\", \"Novembre\", \"Décembre\"];
        
        // Sample events data
        const events = [
            { date: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 2), title: \"Visite Renault Clio\" },
            { date: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 4), title: \"Visite Peugeot 208\" },
            { date: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 7), title: \"Visite Citroën C4\" }
        ];
        
        // Create simple calendar HTML
        let calendarHTML = `
            <div class=\"calendar-container\">
                <div class=\"calendar-header d-flex justify-content-between align-items-center mb-3\">
                    <h5 class=\"mb-0\">\${monthNames[today.getMonth()]} \${today.getFullYear()}</h5>
                    <div>
                        <button class=\"btn btn-sm btn-outline-secondary me-2\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </button>
                        <button class=\"btn btn-sm btn-outline-secondary\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </button>
                    </div>
                </div>
                <div class=\"upcoming-events\">
                    <h6 class=\"text-muted mb-3\">Prochaines visites</h6>
                    <div class=\"list-group\">
        `;
        
        // Add events to calendar
        events.forEach(event => {
            const day = event.date.getDate();
            const month = monthNames[event.date.getMonth()].substring(0, 3);
            
            calendarHTML += `
                <div class=\"list-group-item list-group-item-action d-flex gap-3 align-items-center\">
                    <div class=\"calendar-date text-center\">
                        <div class=\"small text-uppercase text-muted\">\${month}</div>
                        <div class=\"fw-bold\">\${day}</div>
                    </div>
                    <div>
                        <h6 class=\"mb-0\">\${event.title}</h6>
                        <p class=\"text-muted small mb-0\">9:00 - 10:00</p>
                    </div>
                </div>
            `;
        });
        
        calendarHTML += `
                    </div>
                </div>
            </div>
        `;
        
        calendarEl.innerHTML = calendarHTML;
    });
</script>
{% endblock %}", "employe_front/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\employe_front\\index.html.twig");
    }
}
