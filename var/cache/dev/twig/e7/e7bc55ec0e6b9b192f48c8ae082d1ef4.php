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

/* contrat/index.html.twig */
class __TwigTemplate_4a21e06743d54630c2adab64b79b12ed extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/index.html.twig", 1);
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

        yield "Gestion des Contrats";
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
            <h2 class=\"h5 mb-0\">
                <i class=\"bi bi-file-earmark-text me-2\"></i>Gestion des Contrats
            </h2>
            <button type=\"button\" class=\"btn btn-light text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#createContratModal\">
                <i class=\"bi bi-plus-circle me-1\"></i> Nouveau Contrat
            </button>
        </div>

        <!-- Create Contrat Modal -->
        <div class=\"modal fade\" id=\"createContratModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content border-0 shadow\">
                    <div class=\"modal-header bg-primary text-white\">
                        <h5 class=\"modal-title\">
                            <i class=\"bi bi-plus-circle me-2\"></i>Créer un nouveau contrat
                        </h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_new"), "attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <label class=\"form-label fw-bold mb-3\">
                                        <i class=\"bi bi-file-text text-primary me-2\"></i>Informations de base
                                    </label>
                                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "typeContrat", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-select border-0 shadow-sm", "placeholder" => "Sélectionner le type"], "label_attr" => ["class" => "text-muted small"]]);
        // line 41
        yield "
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "employe", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-select border-0 shadow-sm", "placeholder" => "Sélectionner l'employé"], "label_attr" => ["class" => "text-muted small mt-3"]]);
        // line 48
        yield "
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <label class=\"form-label fw-bold mb-3\">
                                        <i class=\"bi bi-calendar-event text-primary me-2\"></i>Dates et Salaire
                                    </label>
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateDebut", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control border-0 shadow-sm", "type" => "date"], "label_attr" => ["class" => "text-muted small"]]);
        // line 65
        yield "
                                        </div>
                                        <div class=\"col-md-6\">
                                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "dateFin", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control border-0 shadow-sm", "type" => "date"], "label_attr" => ["class" => "text-muted small"]]);
        // line 74
        yield "
                                        </div>
                                        <div class=\"col-12\">
                                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "salaireContrat", [], "any", false, false, false, 77), 'row', ["attr" => ["class" => "form-control border-0 shadow-sm", "placeholder" => "Montant en TND"], "label_attr" => ["class" => "text-muted small"]]);
        // line 83
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class=\"col-12\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <label class=\"form-label fw-bold mb-3\">
                                        <i class=\"bi bi-shield-check text-primary me-2\"></i>Conditions du contrat
                                    </label>
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-4\">
                                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "periodeEssai", [], "any", false, false, false, 96), 'row', ["attr" => ["class" => "form-control border-0 shadow-sm", "placeholder" => "Ex: 3 mois"], "label_attr" => ["class" => "text-muted small"]]);
        // line 102
        yield "
                                        </div>
                                        <div class=\"col-md-4\">
                                            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "confidentialite", [], "any", false, false, false, 105), 'row', ["attr" => ["class" => "form-select border-0 shadow-sm"], "label_attr" => ["class" => "text-muted small"]]);
        // line 110
        yield "
                                        </div>
                                        <div class=\"col-md-4\">
                                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "preavis", [], "any", false, false, false, 113), 'row', ["attr" => ["class" => "form-control border-0 shadow-sm", "placeholder" => "Ex: 1 mois"], "label_attr" => ["class" => "text-muted small"]]);
        // line 119
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class=\"col-12\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <div class=\"form-check form-switch\">
                                        ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "statutContrat", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 133
        yield "
                                        ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "statutContrat", [], "any", false, false, false, 134), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        // line 136
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class=\"d-flex justify-content-end gap-2 mt-4\">
                            <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">
                                <i class=\"bi bi-x-circle me-2\"></i>Annuler
                            </button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bi bi-check-circle me-2\"></i>Enregistrer
                            </button>
                        </div>
                        ";
        // line 150
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            ";
        // line 157
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 157, $this->source); })()))) {
            // line 158
            yield "                <div class=\"alert alert-info text-center py-4\">
                    <i class=\"bi bi-info-circle-fill me-2\"></i>Aucun contrat trouvé
                </div>
            ";
        } else {
            // line 162
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead class=\"table-light\">
                            <tr>
                                <th class=\"w-50\">Employé</th>
                                <th class=\"w-25\">Type de contrat</th>
                                <th class=\"w-25\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 173, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
                // line 174
                yield "                                <tr class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 174) == "Actif")) {
                    yield "table-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 174) == "Expiré")) {
                    yield "table-danger";
                }
                yield "\">
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"avatar-sm me-3\">
                                                <span class=\"avatar-title bg-secondary rounded-circle\">
                                                    ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "employe", [], "any", false, false, false, 179), "nom", [], "any", false, false, false, 179))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "employe", [], "any", false, false, false, 179), "prenom", [], "any", false, false, false, 179))), "html", null, true);
                yield "
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class=\"mb-0\">";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "employe", [], "any", false, false, false, 183), "nom", [], "any", false, false, false, 183), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "employe", [], "any", false, false, false, 183), "prenom", [], "any", false, false, false, 183), "html", null, true);
                yield "</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "typeContrat", [], "any", false, false, false, 187), "html", null, true);
                yield "</td>
                                    <td>
                                        <span class=\"badge bg-";
                // line 189
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 189) == "Actif")) {
                    yield "success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 189) == "Expiré")) {
                    yield "danger";
                } else {
                    yield "warning";
                }
                yield "\">
                                            ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 190), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <button class=\"btn btn-sm btn-info text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#detailsContratModal";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 195), "html", null, true);
                yield "\" title=\"Détails\">
                                                <i class=\"bi bi-eye-fill\"></i> Détails
                                            </button>
                                            <button class=\"btn btn-sm btn-warning text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#editContratModal";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 198), "html", null, true);
                yield "\" title=\"Modifier\">
                                                <i class=\"bi bi-pencil-fill\"></i> Modifier
                                            </button>
                                            <form method=\"post\" action=\"";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 201)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contrat ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 202))), "html", null, true);
                yield "\">
                                                <button class=\"btn btn-sm btn-danger text-white\" title=\"Supprimer\">
                                                    <i class=\"bi bi-trash-fill\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            yield "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 215
        yield "        </div>
    </div>
</div>

";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 219, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 220
            yield "    <!-- Edit Modal -->
    <div class=\"modal fade\" id=\"editContratModal";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 221), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-warning text-white\">
                    <h5 class=\"modal-title\">
                        <i class=\"bi bi-pencil-square me-2\"></i>Modifier Contrat #";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 226), "html", null, true);
            yield "
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 231
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 231, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 231), [], "array", false, false, false, 231), 'form_start');
            yield "
                    <div class=\"container-fluid\">
                        <div class=\"row g-3\">
                            <!-- Première ligne -->
                            <div class=\"col-md-6\">
                                ";
            // line 236
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 236, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 236), [], "array", false, false, false, 236), "typeContrat", [], "any", false, false, false, 236), 'row', ["attr" => ["class" => "form-select"], "label_attr" => ["class" => "form-label"]]);
            // line 239
            yield "
                            </div>
                            
                            <div class=\"col-md-6\">
                                ";
            // line 243
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 243, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 243), [], "array", false, false, false, 243), "employe", [], "any", false, false, false, 243), 'row', ["attr" => ["class" => "form-select"], "label_attr" => ["class" => "form-label"]]);
            // line 246
            yield "
                            </div>

                            <!-- Deuxième ligne -->
                            <div class=\"col-md-4\">
                                ";
            // line 251
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 251, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 251), [], "array", false, false, false, 251), "dateDebut", [], "any", false, false, false, 251), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"]]);
            // line 254
            yield "
                            </div>
                            
                            <div class=\"col-md-4\">
                                ";
            // line 258
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 258, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 258), [], "array", false, false, false, 258), "dateFin", [], "any", false, false, false, 258), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"]]);
            // line 261
            yield "
                            </div>
                            
                            <div class=\"col-md-4\">
                                ";
            // line 265
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 265, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 265), [], "array", false, false, false, 265), "salaireContrat", [], "any", false, false, false, 265), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Montant en TND"], "label_attr" => ["class" => "form-label"]]);
            // line 268
            yield "
                            </div>

                            <!-- Troisième ligne -->
                            <div class=\"col-md-4\">
                                ";
            // line 273
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 273, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 273), [], "array", false, false, false, 273), "periodeEssai", [], "any", false, false, false, 273), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 3 mois"], "label_attr" => ["class" => "form-label"]]);
            // line 276
            yield "
                            </div>
                            
                            <div class=\"col-md-4\">
                                ";
            // line 280
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 280, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 280), [], "array", false, false, false, 280), "confidentialite", [], "any", false, false, false, 280), 'row', ["attr" => ["class" => "form-select"], "label_attr" => ["class" => "form-label"]]);
            // line 283
            yield "
                            </div>
                            
                            <div class=\"col-md-4\">
                                ";
            // line 287
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 287, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 287), [], "array", false, false, false, 287), "preavis", [], "any", false, false, false, 287), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 1 mois"], "label_attr" => ["class" => "form-label"]]);
            // line 290
            yield "
                            </div>

                            <!-- Statut Contrat -->
                            <div class=\"col-12\">
                                <div class=\"form-check form-switch\">
                                    ";
            // line 296
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 296, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 296), [], "array", false, false, false, 296), "statutContrat", [], "any", false, false, false, 296), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
            // line 298
            yield "
                                    ";
            // line 299
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 299, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 299), [], "array", false, false, false, 299), "statutContrat", [], "any", false, false, false, 299), 'label', ["label_attr" => ["class" => "form-check-label"]]);
            // line 301
            yield "
                                </div>
                            </div>
                        </div>

                        <!-- Boutons -->
                        <div class=\"d-flex justify-content-between mt-4\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"bi bi-x-circle me-1\"></i> Annuler
                            </button>
                            <button type=\"submit\" class=\"btn btn-warning\">
                                <i class=\"bi bi-save me-1\"></i> Enregistrer
                            </button>
                        </div>
                    </div>
                    ";
            // line 316
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["edit_forms"]) || array_key_exists("edit_forms", $context) ? $context["edit_forms"] : (function () { throw new RuntimeError('Variable "edit_forms" does not exist.', 316, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 316), [], "array", false, false, false, 316), 'form_end');
            yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div class=\"modal fade\" id=\"detailsContratModal";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 323), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-info text-white\">
                    <h5 class=\"modal-title\">
                        <i class=\"bi bi-file-earmark-text me-2\"></i>Contrat de ";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "employe", [], "any", false, false, false, 328), "nom", [], "any", false, false, false, 328), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "employe", [], "any", false, false, false, 328), "prenom", [], "any", false, false, false, 328), "html", null, true);
            yield "
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card mb-3\">
                                <div class=\"card-header bg-light\">
                                    <h6 class=\"mb-0\">Informations du contrat</h6>
                                </div>
                                <div class=\"card-body\">
                                    <dl class=\"row mb-0\">
                                        <dt class=\"col-sm-5\">Type de contrat</dt>
                                        <dd class=\"col-sm-7\">";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "typeContrat", [], "any", false, false, false, 342), "html", null, true);
            yield "</dd>
                                        <dt class=\"col-sm-5\">Statut</dt>
                                        <dd class=\"col-sm-7\">
                                            <span class=\"badge bg-";
            // line 345
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 345) == "Actif")) {
                yield "success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 345) == "Expiré")) {
                yield "danger";
            } else {
                yield "warning";
            }
            yield "\">
                                                ";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "statutContrat", [], "any", false, false, false, 346), "html", null, true);
            yield "
                                            </span>
                                        </dd>
                                        <dt class=\"col-sm-5\">Date de début</dt>
                                        <dd class=\"col-sm-7\">";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateDebut", [], "any", false, false, false, 350), "d/m/Y"), "html", null, true);
            yield "</dd>
                                        <dt class=\"col-sm-5\">Date de fin</dt>
                                        <dd class=\"col-sm-7\">";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateFin", [], "any", false, false, false, 352), "d/m/Y"), "html", null, true);
            yield "</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header bg-light\">
                                    <h6 class=\"mb-0\">Conditions</h6>
                                </div>
                                <div class=\"card-body\">
                                    <dl class=\"row mb-0\">
                                        <dt class=\"col-sm-5\">Salaire</dt>
                                        <dd class=\"col-sm-7\">";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "salaireContrat", [], "any", false, false, false, 365), "html", null, true);
            yield " TND</dd>
                                        <dt class=\"col-sm-5\">Période d'essai</dt>
                                        <dd class=\"col-sm-7\">";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "periodeEssai", [], "any", false, false, false, 367), "html", null, true);
            yield "</dd>
                                        <dt class=\"col-sm-5\">Préavis</dt>
                                        <dd class=\"col-sm-7\">";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "preavis", [], "any", false, false, false, 369), "html", null, true);
            yield "</dd>
                                        <dt class=\"col-sm-5\">Confidentialité</dt>
                                        <dd class=\"col-sm-7\">";
            // line 371
            (((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "confidentialite", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "confidentialite", [], "any", false, false, false, 371)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "confidentialite", [], "any", false, false, false, 371), "html", null, true)) : (yield "Non spécifié"));
            yield "</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_generate_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "idContrat", [], "any", false, false, false, 379)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"bi bi-download me-1\"></i> Télécharger en PDF
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"bi bi-x-circle me-1\"></i> Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 391
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

        // line 392
        yield "
    ";
        // line 393
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>

<script>
    function generateProfessionalPDF(modalId, contrat) {
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF('p', 'pt', 'a4');
        
        // Optimize by reducing image quality and size
        const companySignatureImage = 'data:image/png;base64,...'; // Keep your existing base64 image
        
        // Set default font to reduce file size
        pdf.setFont('helvetica');
        
        // Header
        pdf.setFontSize(22);
        pdf.setTextColor(40, 40, 40);
        pdf.text('CONTRAT DE TRAVAIL', 297, 50, { align: 'center' });

        // Company info - combine text calls to reduce operations
        pdf.setFontSize(10);
        pdf.setTextColor(100, 100, 100);
        const companyInfo = [
            'Entreprise: VEHIFY',
            'Adresse: 123 Rue Principale, Ville',
            'SIRET: 123 456 789 00010'
        ];
        pdf.text(companyInfo, 72, 80);

        // Employee info - combine text calls
        const employeeInfo = [
            `Employé(e): \${contrat.employe.nom} \${contrat.employe.prenom}`,
            `Type de contrat: \${contrat.typeContrat}`,
            `Statut: \${contrat.statutContrat}`
        ];
        pdf.text(employeeInfo, 72, 140);

        // Contract content - combine text calls
        pdf.setFontSize(11);
        pdf.setTextColor(60, 60, 60);
        const contractText = [
            'ARTICLE 1 - OBJET DU CONTRAT',
            `Le présent contrat a pour objet de définir les conditions dans lesquelles \${contrat.employe.nom} \${contrat.employe.prenom}`,
            'sera employé(e) par VEHIFY.',
            '',
            'ARTICLE 2 - DURÉE',
            `Le présent contrat prend effet le \${contrat.dateDebut}`,
            `Le présent contrat est un \${contrat.typeContrat} prenant effet le \${contrat.dateDebut}`,
            `et prenant fin le \${contrat.dateFin}.`,
            '',
            'ARTICLE 3 - RÉMUNÉRATION',
            `L'employé(e) percevra une rémunération mensuelle brute de \${contrat.salaireContrat} TND.`,
            '',
            'ARTICLE 4 - PÉRIODE D\\'ESSAI',
            `Une période d'essai de \${contrat.periodeEssai} est prévue.`,
            '',
            'ARTICLE 5 - CONFIDENTIALITÉ',
            `\${contrat.confidentialite || \"L'employé(e) s'engage à respecter la confidentialité des informations de l'entreprise.\"}`,
            '',
            'Fait à [VILLE], le \${new Date().toLocaleDateString()}`,
            '',
            'Pour l\\'entreprise',
            '___________________________',
            '',
            'L\\'employé(e)',
            '___________________________'
        ];

        // Footer
        pdf.setFontSize(8);
        pdf.setTextColor(150, 150, 150);
        pdf.text('Document généré électroniquement - Valeur contractuelle', 297, 800, { align: 'center' });

        // Save with optimized compression
        pdf.save(`Contrat_\${contrat.employe.nom}_\${contrat.employe.prenom}.pdf`, { compress: true });
    }
</script>

    <a href=\"";
        // line 472
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
        yield "\" class=\"btn btn-link mt-3\">← Retour à la liste</a>

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
        return "contrat/index.html.twig";
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
        return array (  721 => 472,  639 => 393,  636 => 392,  623 => 391,  597 => 379,  586 => 371,  581 => 369,  576 => 367,  571 => 365,  555 => 352,  550 => 350,  543 => 346,  533 => 345,  527 => 342,  508 => 328,  500 => 323,  490 => 316,  473 => 301,  471 => 299,  468 => 298,  466 => 296,  458 => 290,  456 => 287,  450 => 283,  448 => 280,  442 => 276,  440 => 273,  433 => 268,  431 => 265,  425 => 261,  423 => 258,  417 => 254,  415 => 251,  408 => 246,  406 => 243,  400 => 239,  398 => 236,  390 => 231,  382 => 226,  374 => 221,  371 => 220,  367 => 219,  361 => 215,  355 => 211,  340 => 202,  336 => 201,  330 => 198,  324 => 195,  316 => 190,  306 => 189,  301 => 187,  292 => 183,  284 => 179,  271 => 174,  267 => 173,  254 => 162,  248 => 158,  246 => 157,  236 => 150,  220 => 136,  218 => 134,  215 => 133,  213 => 128,  202 => 119,  200 => 113,  195 => 110,  193 => 105,  188 => 102,  186 => 96,  171 => 83,  169 => 77,  164 => 74,  162 => 68,  157 => 65,  155 => 59,  142 => 48,  140 => 42,  137 => 41,  135 => 35,  125 => 28,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Contrats{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
            <h2 class=\"h5 mb-0\">
                <i class=\"bi bi-file-earmark-text me-2\"></i>Gestion des Contrats
            </h2>
            <button type=\"button\" class=\"btn btn-light text-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#createContratModal\">
                <i class=\"bi bi-plus-circle me-1\"></i> Nouveau Contrat
            </button>
        </div>

        <!-- Create Contrat Modal -->
        <div class=\"modal fade\" id=\"createContratModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content border-0 shadow\">
                    <div class=\"modal-header bg-primary text-white\">
                        <h5 class=\"modal-title\">
                            <i class=\"bi bi-plus-circle me-2\"></i>Créer un nouveau contrat
                        </h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_start(form, {'action': path('app_contrat_new'), 'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <label class=\"form-label fw-bold mb-3\">
                                        <i class=\"bi bi-file-text text-primary me-2\"></i>Informations de base
                                    </label>
                                    {{ form_row(form.typeContrat, {
                                        'attr': {
                                            'class': 'form-select border-0 shadow-sm',
                                            'placeholder': 'Sélectionner le type'
                                        },
                                        'label_attr': {'class': 'text-muted small'}
                                    }) }}
                                    {{ form_row(form.employe, {
                                        'attr': {
                                            'class': 'form-select border-0 shadow-sm',
                                            'placeholder': 'Sélectionner l\\'employé'
                                        },
                                        'label_attr': {'class': 'text-muted small mt-3'}
                                    }) }}
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <label class=\"form-label fw-bold mb-3\">
                                        <i class=\"bi bi-calendar-event text-primary me-2\"></i>Dates et Salaire
                                    </label>
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.dateDebut, {
                                                'attr': {
                                                    'class': 'form-control border-0 shadow-sm',
                                                    'type': 'date'
                                                },
                                                'label_attr': {'class': 'text-muted small'}
                                            }) }}
                                        </div>
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.dateFin, {
                                                'attr': {
                                                    'class': 'form-control border-0 shadow-sm',
                                                    'type': 'date'
                                                },
                                                'label_attr': {'class': 'text-muted small'}
                                            }) }}
                                        </div>
                                        <div class=\"col-12\">
                                            {{ form_row(form.salaireContrat, {
                                                'attr': {
                                                    'class': 'form-control border-0 shadow-sm',
                                                    'placeholder': 'Montant en TND'
                                                },
                                                'label_attr': {'class': 'text-muted small'}
                                            }) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class=\"col-12\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <label class=\"form-label fw-bold mb-3\">
                                        <i class=\"bi bi-shield-check text-primary me-2\"></i>Conditions du contrat
                                    </label>
                                    <div class=\"row g-3\">
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.periodeEssai, {
                                                'attr': {
                                                    'class': 'form-control border-0 shadow-sm',
                                                    'placeholder': 'Ex: 3 mois'
                                                },
                                                'label_attr': {'class': 'text-muted small'}
                                            }) }}
                                        </div>
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.confidentialite, {
                                                'attr': {
                                                    'class': 'form-select border-0 shadow-sm'
                                                },
                                                'label_attr': {'class': 'text-muted small'}
                                            }) }}
                                        </div>
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.preavis, {
                                                'attr': {
                                                    'class': 'form-control border-0 shadow-sm',
                                                    'placeholder': 'Ex: 1 mois'
                                                },
                                                'label_attr': {'class': 'text-muted small'}
                                            }) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class=\"col-12\">
                                <div class=\"form-group bg-light p-3 rounded-3 shadow-sm\">
                                    <div class=\"form-check form-switch\">
                                        {{ form_widget(form.statutContrat, {
                                            'attr': {
                                                'class': 'form-check-input',
                                                'role': 'switch'
                                            }
                                        }) }}
                                        {{ form_label(form.statutContrat, null, {
                                            'label_attr': {'class': 'form-check-label'}
                                        }) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class=\"d-flex justify-content-end gap-2 mt-4\">
                            <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">
                                <i class=\"bi bi-x-circle me-2\"></i>Annuler
                            </button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bi bi-check-circle me-2\"></i>Enregistrer
                            </button>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            {% if contrats is empty %}
                <div class=\"alert alert-info text-center py-4\">
                    <i class=\"bi bi-info-circle-fill me-2\"></i>Aucun contrat trouvé
                </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead class=\"table-light\">
                            <tr>
                                <th class=\"w-50\">Employé</th>
                                <th class=\"w-25\">Type de contrat</th>
                                <th class=\"w-25\">Statut</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for contrat in contrats %}
                                <tr class=\"{% if contrat.statutContrat == 'Actif' %}table-success{% elseif contrat.statutContrat == 'Expiré' %}table-danger{% endif %}\">
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"avatar-sm me-3\">
                                                <span class=\"avatar-title bg-secondary rounded-circle\">
                                                    {{ contrat.employe.nom|first|upper }}{{ contrat.employe.prenom|first|upper }}
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class=\"mb-0\">{{ contrat.employe.nom }} {{ contrat.employe.prenom }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ contrat.typeContrat }}</td>
                                    <td>
                                        <span class=\"badge bg-{% if contrat.statutContrat == 'Actif' %}success{% elseif contrat.statutContrat == 'Expiré' %}danger{% else %}warning{% endif %}\">
                                            {{ contrat.statutContrat }}
                                        </span>
                                    </td>
                                    <td class=\"text-end\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <button class=\"btn btn-sm btn-info text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#detailsContratModal{{ contrat.idContrat }}\" title=\"Détails\">
                                                <i class=\"bi bi-eye-fill\"></i> Détails
                                            </button>
                                            <button class=\"btn btn-sm btn-warning text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#editContratModal{{ contrat.idContrat }}\" title=\"Modifier\">
                                                <i class=\"bi bi-pencil-fill\"></i> Modifier
                                            </button>
                                            <form method=\"post\" action=\"{{ path('app_contrat_delete', {'id': contrat.idContrat}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contrat ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contrat.idContrat) }}\">
                                                <button class=\"btn btn-sm btn-danger text-white\" title=\"Supprimer\">
                                                    <i class=\"bi bi-trash-fill\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% endif %}
        </div>
    </div>
</div>

{% for contrat in contrats %}
    <!-- Edit Modal -->
    <div class=\"modal fade\" id=\"editContratModal{{ contrat.idContrat }}\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-warning text-white\">
                    <h5 class=\"modal-title\">
                        <i class=\"bi bi-pencil-square me-2\"></i>Modifier Contrat #{{ contrat.idContrat }}
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    {{ form_start(edit_forms[contrat.idContrat]) }}
                    <div class=\"container-fluid\">
                        <div class=\"row g-3\">
                            <!-- Première ligne -->
                            <div class=\"col-md-6\">
                                {{ form_row(edit_forms[contrat.idContrat].typeContrat, {
                                    'attr': {'class': 'form-select'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>
                            
                            <div class=\"col-md-6\">
                                {{ form_row(edit_forms[contrat.idContrat].employe, {
                                    'attr': {'class': 'form-select'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>

                            <!-- Deuxième ligne -->
                            <div class=\"col-md-4\">
                                {{ form_row(edit_forms[contrat.idContrat].dateDebut, {
                                    'attr': {'class': 'form-control'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>
                            
                            <div class=\"col-md-4\">
                                {{ form_row(edit_forms[contrat.idContrat].dateFin, {
                                    'attr': {'class': 'form-control'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>
                            
                            <div class=\"col-md-4\">
                                {{ form_row(edit_forms[contrat.idContrat].salaireContrat, {
                                    'attr': {'class': 'form-control', 'placeholder': 'Montant en TND'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>

                            <!-- Troisième ligne -->
                            <div class=\"col-md-4\">
                                {{ form_row(edit_forms[contrat.idContrat].periodeEssai, {
                                    'attr': {'class': 'form-control', 'placeholder': 'Ex: 3 mois'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>
                            
                            <div class=\"col-md-4\">
                                {{ form_row(edit_forms[contrat.idContrat].confidentialite, {
                                    'attr': {'class': 'form-select'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>
                            
                            <div class=\"col-md-4\">
                                {{ form_row(edit_forms[contrat.idContrat].preavis, {
                                    'attr': {'class': 'form-control', 'placeholder': 'Ex: 1 mois'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>

                            <!-- Statut Contrat -->
                            <div class=\"col-12\">
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(edit_forms[contrat.idContrat].statutContrat, {
                                        'attr': {'class': 'form-check-input', 'role': 'switch'}
                                    }) }}
                                    {{ form_label(edit_forms[contrat.idContrat].statutContrat, null, {
                                        'label_attr': {'class': 'form-check-label'}
                                    }) }}
                                </div>
                            </div>
                        </div>

                        <!-- Boutons -->
                        <div class=\"d-flex justify-content-between mt-4\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"bi bi-x-circle me-1\"></i> Annuler
                            </button>
                            <button type=\"submit\" class=\"btn btn-warning\">
                                <i class=\"bi bi-save me-1\"></i> Enregistrer
                            </button>
                        </div>
                    </div>
                    {{ form_end(edit_forms[contrat.idContrat]) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div class=\"modal fade\" id=\"detailsContratModal{{ contrat.idContrat }}\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content border-0 shadow\">
                <div class=\"modal-header bg-info text-white\">
                    <h5 class=\"modal-title\">
                        <i class=\"bi bi-file-earmark-text me-2\"></i>Contrat de {{ contrat.employe.nom }} {{ contrat.employe.prenom }}
                    </h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card mb-3\">
                                <div class=\"card-header bg-light\">
                                    <h6 class=\"mb-0\">Informations du contrat</h6>
                                </div>
                                <div class=\"card-body\">
                                    <dl class=\"row mb-0\">
                                        <dt class=\"col-sm-5\">Type de contrat</dt>
                                        <dd class=\"col-sm-7\">{{ contrat.typeContrat }}</dd>
                                        <dt class=\"col-sm-5\">Statut</dt>
                                        <dd class=\"col-sm-7\">
                                            <span class=\"badge bg-{% if contrat.statutContrat == 'Actif' %}success{% elseif contrat.statutContrat == 'Expiré' %}danger{% else %}warning{% endif %}\">
                                                {{ contrat.statutContrat }}
                                            </span>
                                        </dd>
                                        <dt class=\"col-sm-5\">Date de début</dt>
                                        <dd class=\"col-sm-7\">{{ contrat.dateDebut|date('d/m/Y') }}</dd>
                                        <dt class=\"col-sm-5\">Date de fin</dt>
                                        <dd class=\"col-sm-7\">{{ contrat.dateFin|date('d/m/Y') }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-header bg-light\">
                                    <h6 class=\"mb-0\">Conditions</h6>
                                </div>
                                <div class=\"card-body\">
                                    <dl class=\"row mb-0\">
                                        <dt class=\"col-sm-5\">Salaire</dt>
                                        <dd class=\"col-sm-7\">{{ contrat.salaireContrat }} TND</dd>
                                        <dt class=\"col-sm-5\">Période d'essai</dt>
                                        <dd class=\"col-sm-7\">{{ contrat.periodeEssai }}</dd>
                                        <dt class=\"col-sm-5\">Préavis</dt>
                                        <dd class=\"col-sm-7\">{{ contrat.preavis }}</dd>
                                        <dt class=\"col-sm-5\">Confidentialité</dt>
                                        <dd class=\"col-sm-7\">{{ contrat.confidentialite ?? 'Non spécifié' }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"{{ path('app_contrat_generate_pdf', {'id': contrat.idContrat}) }}\" class=\"btn btn-outline-primary\">
                        <i class=\"bi bi-download me-1\"></i> Télécharger en PDF
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"bi bi-x-circle me-1\"></i> Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
{% endblock %}
{% block javascripts %}

    {{ parent() }}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>

<script>
    function generateProfessionalPDF(modalId, contrat) {
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF('p', 'pt', 'a4');
        
        // Optimize by reducing image quality and size
        const companySignatureImage = 'data:image/png;base64,...'; // Keep your existing base64 image
        
        // Set default font to reduce file size
        pdf.setFont('helvetica');
        
        // Header
        pdf.setFontSize(22);
        pdf.setTextColor(40, 40, 40);
        pdf.text('CONTRAT DE TRAVAIL', 297, 50, { align: 'center' });

        // Company info - combine text calls to reduce operations
        pdf.setFontSize(10);
        pdf.setTextColor(100, 100, 100);
        const companyInfo = [
            'Entreprise: VEHIFY',
            'Adresse: 123 Rue Principale, Ville',
            'SIRET: 123 456 789 00010'
        ];
        pdf.text(companyInfo, 72, 80);

        // Employee info - combine text calls
        const employeeInfo = [
            `Employé(e): \${contrat.employe.nom} \${contrat.employe.prenom}`,
            `Type de contrat: \${contrat.typeContrat}`,
            `Statut: \${contrat.statutContrat}`
        ];
        pdf.text(employeeInfo, 72, 140);

        // Contract content - combine text calls
        pdf.setFontSize(11);
        pdf.setTextColor(60, 60, 60);
        const contractText = [
            'ARTICLE 1 - OBJET DU CONTRAT',
            `Le présent contrat a pour objet de définir les conditions dans lesquelles \${contrat.employe.nom} \${contrat.employe.prenom}`,
            'sera employé(e) par VEHIFY.',
            '',
            'ARTICLE 2 - DURÉE',
            `Le présent contrat prend effet le \${contrat.dateDebut}`,
            `Le présent contrat est un \${contrat.typeContrat} prenant effet le \${contrat.dateDebut}`,
            `et prenant fin le \${contrat.dateFin}.`,
            '',
            'ARTICLE 3 - RÉMUNÉRATION',
            `L'employé(e) percevra une rémunération mensuelle brute de \${contrat.salaireContrat} TND.`,
            '',
            'ARTICLE 4 - PÉRIODE D\\'ESSAI',
            `Une période d'essai de \${contrat.periodeEssai} est prévue.`,
            '',
            'ARTICLE 5 - CONFIDENTIALITÉ',
            `\${contrat.confidentialite || \"L'employé(e) s'engage à respecter la confidentialité des informations de l'entreprise.\"}`,
            '',
            'Fait à [VILLE], le \${new Date().toLocaleDateString()}`,
            '',
            'Pour l\\'entreprise',
            '___________________________',
            '',
            'L\\'employé(e)',
            '___________________________'
        ];

        // Footer
        pdf.setFontSize(8);
        pdf.setTextColor(150, 150, 150);
        pdf.text('Document généré électroniquement - Valeur contractuelle', 297, 800, { align: 'center' });

        // Save with optimized compression
        pdf.save(`Contrat_\${contrat.employe.nom}_\${contrat.employe.prenom}.pdf`, { compress: true });
    }
</script>

    <a href=\"{{ path('app_contrat_index') }}\" class=\"btn btn-link mt-3\">← Retour à la liste</a>

{% endblock %}", "contrat/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\contrat\\index.html.twig");
    }
}
