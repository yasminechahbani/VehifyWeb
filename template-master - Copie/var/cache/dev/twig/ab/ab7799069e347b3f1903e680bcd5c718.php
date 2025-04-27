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

/* permis/show.html.twig */
class __TwigTemplate_d3a026211e465cf1334e8c531f83d5c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permis/show.html.twig"));

        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "permis/show.html.twig", 1);
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

        yield "Détails du Permis";
        
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
        yield "<div class=\"container py-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_front");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-id-card text-primary me-2\"></i>Détails du Permis
                        </h5>
                        <div>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6 text-center mb-4 mb-md-0\">
                            <div class=\"license-card-large mx-auto\">
                                <div class=\"license-header\">
                                    <h6 class=\"mb-0\">PERMIS DE CONDUIRE</h6>
                                </div>
                                <div class=\"license-body\">
                                    <div class=\"license-number mb-3\">N° ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 38, $this->source); })()), "numeroPermis", [], "any", false, false, false, 38), "html", null, true);
        yield "</div>
                                    <div class=\"license-category mb-2\">
                                        <span class=\"badge bg-primary\">Catégorie ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 40, $this->source); })()), "categorie", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                                    </div>
                                    <div class=\"license-dates small\">
                                        <div>Délivré le: ";
        // line 43
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 43, $this->source); })()), "dateDelivrance", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 43, $this->source); })()), "dateDelivrance", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</div>
                                        <div>Expire le: ";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 44, $this->source); })()), "dateExpiration", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 44, $this->source); })()), "dateExpiration", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</div>
                                    </div>
                                    <div class=\"license-status mt-3\">
                                        <span class=\"badge bg-";
        // line 47
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 47, $this->source); })()), "etat", [], "any", false, false, false, 47) == "Active")) ? ("success") : ("danger"));
        yield " px-3 py-2\">
                                            ";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 48, $this->source); })()), "etat", [], "any", false, false, false, 48) == "Expired")) ? ("Valide") : ("Non valide"));
        yield "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <h6 class=\"border-bottom pb-2 mb-3\">Informations détaillées</h6>
                            <table class=\"table table-sm\">
                                <tbody>
                                    <tr>
                                        <th style=\"width: 40%\">Identifiant</th>
                                        <td>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 60, $this->source); })()), "idPermis", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Numéro</th>
                                        <td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 64, $this->source); })()), "numeroPermis", [], "any", false, false, false, 64), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Catégorie</th>
                                        <td>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 68, $this->source); })()), "categorie", [], "any", false, false, false, 68), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Date de délivrance</th>
                                        <td>";
        // line 72
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 72, $this->source); })()), "dateDelivrance", [], "any", false, false, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 72, $this->source); })()), "dateDelivrance", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Date d'expiration</th>
                                        <td>";
        // line 76
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 76, $this->source); })()), "dateExpiration", [], "any", false, false, false, 76)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 76, $this->source); })()), "dateExpiration", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>État</th>
                                        <td>
                                            <span class=\"badge bg-";
        // line 81
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 81, $this->source); })()), "etat", [], "any", false, false, false, 81) == "Valid")) ? ("success") : ("danger"));
        yield "\">
                                                ";
        // line 82
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 82, $this->source); })()), "etat", [], "any", false, false, false, 82) == "Valid")) ? ("Valide") : ("Non valide"));
        yield "
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-clock text-primary me-2\"></i>Statut du permis
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 102
        $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
        // line 103
        yield "                    ";
        $context["expiration"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 103, $this->source); })()), "dateExpiration", [], "any", false, false, false, 103)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 103, $this->source); })()), "dateExpiration", [], "any", false, false, false, 103), "U")) : (0));
        // line 104
        yield "                    ";
        $context["diff"] = ((isset($context["expiration"]) || array_key_exists("expiration", $context) ? $context["expiration"] : (function () { throw new RuntimeError('Variable "expiration" does not exist.', 104, $this->source); })()) - (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 104, $this->source); })()));
        // line 105
        yield "                    ";
        $context["days_remaining"] = ((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 105, $this->source); })()) / 86400);
        // line 106
        yield "                    
                    ";
        // line 107
        if (((isset($context["expiration"]) || array_key_exists("expiration", $context) ? $context["expiration"] : (function () { throw new RuntimeError('Variable "expiration" does not exist.', 107, $this->source); })()) == 0)) {
            // line 108
            yield "                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>Date d'expiration non définie
                        </div>
                    ";
        } elseif ((        // line 111
(isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 111, $this->source); })()) < 0)) {
            // line 112
            yield "                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-times-circle me-2\"></i>Ce permis est expiré
                        </div>
                        <p class=\"mb-0\">Expiré depuis ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 115, $this->source); })()) *  -1)), "html", null, true);
            yield " jours</p>
                    ";
        } elseif ((        // line 116
(isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 116, $this->source); })()) < 30)) {
            // line 117
            yield "                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>Ce permis expire bientôt
                        </div>
                        <p class=\"mb-0\">Expire dans ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 120, $this->source); })())), "html", null, true);
            yield " jours</p>
                    ";
        } else {
            // line 122
            yield "                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-2\"></i>Ce permis est valide
                        </div>
                        <p class=\"mb-0\">Expire dans ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 125, $this->source); })())), "html", null, true);
            yield " jours</p>
                    ";
        }
        // line 127
        yield "                    
                    ";
        // line 128
        if (((isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 128, $this->source); })()) > 0)) {
            // line 129
            yield "                        <div class=\"progress mt-3\" style=\"height: 10px;\">
                            ";
            // line 130
            $context["percentage"] = Twig\Extension\CoreExtension::round((((isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 130, $this->source); })()) / 365) * 100));
            // line 131
            yield "                            ";
            if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 131, $this->source); })()) > 100)) {
                $context["percentage"] = 100;
            }
            // line 132
            yield "                            <div class=\"progress-bar bg-";
            yield ((((isset($context["days_remaining"]) || array_key_exists("days_remaining", $context) ? $context["days_remaining"] : (function () { throw new RuntimeError('Variable "days_remaining" does not exist.', 132, $this->source); })()) < 30)) ? ("warning") : ("success"));
            yield "\" 
                                 role=\"progressbar\" 
                                 style=\"width: ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 134, $this->source); })()), "html", null, true);
            yield "%\" 
                                 aria-valuenow=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 135, $this->source); })()), "html", null, true);
            yield "\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <small>Aujourd'hui</small>
                            <small>Expiration</small>
                        </div>
                    ";
        }
        // line 145
        yield "                </div>
            </div>
            
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-cogs text-primary me-2\"></i>Actions
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_permisOne", ["numeroPermis" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 156, $this->source); })()), "numeroPermis", [], "any", false, false, false, 156)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier le permis
                        </a>
                        <button type=\"button\" class=\"btn btn-info\">
                            <i class=\"fas fa-print me-2\"></i>Imprimer les détails
                        </button>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Êtes-vous sûr de vouloir supprimer ce permis ? Cette action est irréversible.
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <a href=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_permis2", ["id_permis" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["permi"]) || array_key_exists("permi", $context) ? $context["permi"] : (function () { throw new RuntimeError('Variable "permi" does not exist.', 184, $this->source); })()), "idPermis", [], "any", false, false, false, 184)]), "html", null, true);
        yield "\" class=\"btn btn-danger\">
                    <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                </a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 193
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

        // line 194
        yield "<style>
    .license-card-large {
        width: 280px;
        height: 180px;
        background: linear-gradient(135deg, #2c3e50, #4ca1af);
        border-radius: 10px;
        overflow: hidden;
        color: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .license-header {
        background-color: rgba(0,0,0,0.2);
        padding: 8px;
        text-align: center;
    }
    
    .license-body {
        padding: 15px;
        text-align: center;
    }
    
    .license-number {
        font-size: 1.2rem;
        font-weight: bold;
    }
    
    .license-category .badge {
        font-size: 0.9rem;
        padding: 5px 10px;
    }
</style>
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
        return "permis/show.html.twig";
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
        return array (  409 => 194,  396 => 193,  377 => 184,  346 => 156,  333 => 145,  320 => 135,  316 => 134,  310 => 132,  305 => 131,  303 => 130,  300 => 129,  298 => 128,  295 => 127,  290 => 125,  285 => 122,  280 => 120,  275 => 117,  273 => 116,  269 => 115,  264 => 112,  262 => 111,  257 => 108,  255 => 107,  252 => 106,  249 => 105,  246 => 104,  243 => 103,  241 => 102,  218 => 82,  214 => 81,  206 => 76,  199 => 72,  192 => 68,  185 => 64,  178 => 60,  163 => 48,  159 => 47,  153 => 44,  149 => 43,  143 => 40,  138 => 38,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseEmployeFront.html.twig' %}

{% block title %}Détails du Permis{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_employe_front') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-id-card text-primary me-2\"></i>Détails du Permis
                        </h5>
                        <div>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6 text-center mb-4 mb-md-0\">
                            <div class=\"license-card-large mx-auto\">
                                <div class=\"license-header\">
                                    <h6 class=\"mb-0\">PERMIS DE CONDUIRE</h6>
                                </div>
                                <div class=\"license-body\">
                                    <div class=\"license-number mb-3\">N° {{ permi.numeroPermis }}</div>
                                    <div class=\"license-category mb-2\">
                                        <span class=\"badge bg-primary\">Catégorie {{ permi.categorie }}</span>
                                    </div>
                                    <div class=\"license-dates small\">
                                        <div>Délivré le: {{ permi.dateDelivrance ? permi.dateDelivrance|date('d/m/Y') : 'N/A' }}</div>
                                        <div>Expire le: {{ permi.dateExpiration ? permi.dateExpiration|date('d/m/Y') : 'N/A' }}</div>
                                    </div>
                                    <div class=\"license-status mt-3\">
                                        <span class=\"badge bg-{{ permi.etat == 'Active' ? 'success' : 'danger' }} px-3 py-2\">
                                            {{ permi.etat == 'Expired' ? 'Valide' : 'Non valide' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <h6 class=\"border-bottom pb-2 mb-3\">Informations détaillées</h6>
                            <table class=\"table table-sm\">
                                <tbody>
                                    <tr>
                                        <th style=\"width: 40%\">Identifiant</th>
                                        <td>{{ permi.idPermis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Numéro</th>
                                        <td>{{ permi.numeroPermis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Catégorie</th>
                                        <td>{{ permi.categorie }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date de délivrance</th>
                                        <td>{{ permi.dateDelivrance ? permi.dateDelivrance|date('d/m/Y') : 'Non spécifiée' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date d'expiration</th>
                                        <td>{{ permi.dateExpiration ? permi.dateExpiration|date('d/m/Y') : 'Non spécifiée' }}</td>
                                    </tr>
                                    <tr>
                                        <th>État</th>
                                        <td>
                                            <span class=\"badge bg-{{ permi.etat == 'Valid' ? 'success' : 'danger' }}\">
                                                {{ permi.etat == 'Valid' ? 'Valide' : 'Non valide' }}
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-clock text-primary me-2\"></i>Statut du permis
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% set now = \"now\"|date('U') %}
                    {% set expiration = permi.dateExpiration ? permi.dateExpiration|date('U') : 0 %}
                    {% set diff = expiration - now %}
                    {% set days_remaining = diff / 86400 %}
                    
                    {% if expiration == 0 %}
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>Date d'expiration non définie
                        </div>
                    {% elseif days_remaining < 0 %}
                        <div class=\"alert alert-danger\">
                            <i class=\"fas fa-times-circle me-2\"></i>Ce permis est expiré
                        </div>
                        <p class=\"mb-0\">Expiré depuis {{ (days_remaining * -1)|round }} jours</p>
                    {% elseif days_remaining < 30 %}
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>Ce permis expire bientôt
                        </div>
                        <p class=\"mb-0\">Expire dans {{ days_remaining|round }} jours</p>
                    {% else %}
                        <div class=\"alert alert-success\">
                            <i class=\"fas fa-check-circle me-2\"></i>Ce permis est valide
                        </div>
                        <p class=\"mb-0\">Expire dans {{ days_remaining|round }} jours</p>
                    {% endif %}
                    
                    {% if days_remaining > 0 %}
                        <div class=\"progress mt-3\" style=\"height: 10px;\">
                            {% set percentage = (days_remaining / 365 * 100)|round %}
                            {% if percentage > 100 %}{% set percentage = 100 %}{% endif %}
                            <div class=\"progress-bar bg-{{ days_remaining < 30 ? 'warning' : 'success' }}\" 
                                 role=\"progressbar\" 
                                 style=\"width: {{ percentage }}%\" 
                                 aria-valuenow=\"{{ percentage }}\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-between mt-1\">
                            <small>Aujourd'hui</small>
                            <small>Expiration</small>
                        </div>
                    {% endif %}
                </div>
            </div>
            
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-cogs text-primary me-2\"></i>Actions
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"{{ path('app_edit_permisOne', {'numeroPermis': permi.numeroPermis}) }}\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier le permis
                        </a>
                        <button type=\"button\" class=\"btn btn-info\">
                            <i class=\"fas fa-print me-2\"></i>Imprimer les détails
                        </button>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmer la suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Êtes-vous sûr de vouloir supprimer ce permis ? Cette action est irréversible.
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <a href=\"{{ path('app_delete_permis2', {'id_permis': permi.idPermis}) }}\" class=\"btn btn-danger\">
                    <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
    .license-card-large {
        width: 280px;
        height: 180px;
        background: linear-gradient(135deg, #2c3e50, #4ca1af);
        border-radius: 10px;
        overflow: hidden;
        color: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .license-header {
        background-color: rgba(0,0,0,0.2);
        padding: 8px;
        text-align: center;
    }
    
    .license-body {
        padding: 15px;
        text-align: center;
    }
    
    .license-number {
        font-size: 1.2rem;
        font-weight: bold;
    }
    
    .license-category .badge {
        font-size: 0.9rem;
        padding: 5px 10px;
    }
</style>
{% endblock %}
", "permis/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\permis\\show.html.twig");
    }
}
