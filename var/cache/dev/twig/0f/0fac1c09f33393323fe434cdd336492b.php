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

/* equipement/index.html.twig */
class __TwigTemplate_92e4e80bbbeb2371b30e7cde8d5ca5db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipement/index.html.twig", 1);
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

        yield "Gestion des Équipements";
        
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-light shadow-sm\">
                <div class=\"card-header bg-white border-light d-flex justify-content-between align-items-center py-3\">
    <div>
        <h4 class=\"mb-1 text-dark\"><i class=\"fas fa-tools me-2 text-primary\"></i>Gestion des Équipements</h4>
        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2 text-secondary\"></i>Inventaire complet du parc matériel</p>
    </div>
    <div>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_new");
        yield "\" class=\"btn btn-warning btn-sm\">
            <i class=\"fas fa-plus me-2\"></i>Nouvel Équipement
        </a>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipement_stats");
        yield "\" class=\"btn btn-outline-secondary btn-sm ms-2\">
            <i class=\"fas fa-chart-bar me-2\"></i>Statistiques
        </a>
    </div>
</div>
                
                <div class=\"card-body\">
                    ";
        // line 26
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["equipements"]) || array_key_exists("equipements", $context) ? $context["equipements"] : (function () { throw new RuntimeError('Variable "equipements" does not exist.', 26, $this->source); })())) > 0)) {
            // line 27
            yield "                    <div class=\"row g-4\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["equipements"]) || array_key_exists("equipements", $context) ? $context["equipements"] : (function () { throw new RuntimeError('Variable "equipements" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["equipement"]) {
                // line 29
                yield "                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"card h-100 border-light shadow-sm\">
                                <div class=\"card-header bg-light\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h5 class=\"card-title mb-0 text-dark\">
                                            <i class=\"fas fa-box me-2 text-muted\"></i>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "nom", [], "any", false, false, false, 34), "html", null, true);
                yield "
                                        </h5>
                                        <span class=\"badge bg-";
                // line 36
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "etat", [], "any", false, false, false, 36) == "Bon état")) ? ("success") : ("warning"));
                yield " rounded-pill\">
                                            ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "etat", [], "any", false, false, false, 37), "html", null, true);
                yield "
                                        </span>
                                    </div>
                                </div>
                                
                                <div class=\"card-body\">
                                    <div class=\"mb-3\">
                                        <p class=\"text-dark mb-2\"><i class=\"fas fa-info-circle me-2 text-muted\"></i>Description</p>
                                        <p class=\"text-muted small\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "description", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "description", [], "any", false, false, false, 45), "Non renseignée")) : ("Non renseignée")), "html", null, true);
                yield "</p>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <p class=\"text-dark mb-1\"><i class=\"fas fa-tag me-2 text-muted\"></i>Catégorie</p>
                                            <p class=\"text-muted small\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "categorie", [], "any", false, false, false, 51), "html", null, true);
                yield "</p>
                                        </div>
                                        <div class=\"col-6\">
                                            <p class=\"text-dark mb-1\"><i class=\"fas fa-user me-2 text-muted\"></i>Assigné à</p>
                                            <p class=\"text-muted small\">
                                                ";
                // line 56
                if (CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "employe", [], "any", false, false, false, 56)) {
                    // line 57
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "employe", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "employe", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
                    yield "
                                                ";
                } else {
                    // line 59
                    yield "                                                    Non assigné
                                                ";
                }
                // line 61
                yield "                                            </p>
                                        </div>
                                    </div>
                                    
                                    ";
                // line 65
                if (CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "guideUtilisation", [], "any", false, false, false, 65)) {
                    // line 66
                    yield "                                    <div class=\"mt-3\">
                                        <a href=\"";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_guide_pdf", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "idEquipement", [], "any", false, false, false, 67)]), "html", null, true);
                    yield "\" 
   class=\"btn btn-sm w-100 text-white\" 
   style=\"background-color: #0a4275; border-color: #0a4275;\"
   target=\"_blank\">
    <i class=\"fas fa-file-pdf me-2\"></i>Télécharger le guide
</a>
                                    </div>
                                    ";
                }
                // line 75
                yield "                                </div>
                                
                                <div class=\"card-footer bg-white border-light\">
                                    <div class=\"btn-group w-100\">
                                        <a href=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_show", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "idEquipement", [], "any", false, false, false, 79)]), "html", null, true);
                yield "\"
                                           class=\"btn btn-outline-secondary btn-sm\">
                                            <i class=\"fas fa-eye me-1\"></i> Détails
                                        </a>
                                        <a href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_edit", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "idEquipement", [], "any", false, false, false, 83)]), "html", null, true);
                yield "\"
   class=\"btn btn-sm text-white\"
   style=\"background-color: #0a4275; border-color: #0a4275;\">
    <i class=\"fas fa-edit me-1\"></i> Modifier
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['equipement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                    </div>
                    ";
        } else {
            // line 95
            yield "                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                        <h5 class=\"text-dark\">Aucun équipement enregistré</h5>
                        <p class=\"text-muted\">Commencez par ajouter votre premier équipement</p>
                        <a href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_new");
            yield "\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus me-2\"></i>Ajouter un équipement
                        </a>
                    </div>
                    ";
        }
        // line 104
        yield "                </div>
            </div>
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
        return "equipement/index.html.twig";
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
        return array (  264 => 104,  256 => 99,  250 => 95,  246 => 93,  230 => 83,  223 => 79,  217 => 75,  206 => 67,  203 => 66,  201 => 65,  195 => 61,  191 => 59,  183 => 57,  181 => 56,  173 => 51,  164 => 45,  153 => 37,  149 => 36,  144 => 34,  137 => 29,  133 => 28,  130 => 27,  128 => 26,  118 => 19,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Équipements{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-light shadow-sm\">
                <div class=\"card-header bg-white border-light d-flex justify-content-between align-items-center py-3\">
    <div>
        <h4 class=\"mb-1 text-dark\"><i class=\"fas fa-tools me-2 text-primary\"></i>Gestion des Équipements</h4>
        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2 text-secondary\"></i>Inventaire complet du parc matériel</p>
    </div>
    <div>
        <a href=\"{{ path('app_equipement_new') }}\" class=\"btn btn-warning btn-sm\">
            <i class=\"fas fa-plus me-2\"></i>Nouvel Équipement
        </a>
        <a href=\"{{ path('equipement_stats') }}\" class=\"btn btn-outline-secondary btn-sm ms-2\">
            <i class=\"fas fa-chart-bar me-2\"></i>Statistiques
        </a>
    </div>
</div>
                
                <div class=\"card-body\">
                    {% if equipements|length > 0 %}
                    <div class=\"row g-4\">
                        {% for equipement in equipements %}
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"card h-100 border-light shadow-sm\">
                                <div class=\"card-header bg-light\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h5 class=\"card-title mb-0 text-dark\">
                                            <i class=\"fas fa-box me-2 text-muted\"></i>{{ equipement.nom }}
                                        </h5>
                                        <span class=\"badge bg-{{ equipement.etat == 'Bon état' ? 'success' : 'warning' }} rounded-pill\">
                                            {{ equipement.etat }}
                                        </span>
                                    </div>
                                </div>
                                
                                <div class=\"card-body\">
                                    <div class=\"mb-3\">
                                        <p class=\"text-dark mb-2\"><i class=\"fas fa-info-circle me-2 text-muted\"></i>Description</p>
                                        <p class=\"text-muted small\">{{ equipement.description|default('Non renseignée') }}</p>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <p class=\"text-dark mb-1\"><i class=\"fas fa-tag me-2 text-muted\"></i>Catégorie</p>
                                            <p class=\"text-muted small\">{{ equipement.categorie }}</p>
                                        </div>
                                        <div class=\"col-6\">
                                            <p class=\"text-dark mb-1\"><i class=\"fas fa-user me-2 text-muted\"></i>Assigné à</p>
                                            <p class=\"text-muted small\">
                                                {% if equipement.employe %}
                                                    {{ equipement.employe.prenom }} {{ equipement.employe.nom }}
                                                {% else %}
                                                    Non assigné
                                                {% endif %}
                                            </p>
                                        </div>
                                    </div>
                                    
                                    {% if equipement.guideUtilisation %}
                                    <div class=\"mt-3\">
                                        <a href=\"{{ path('app_equipement_guide_pdf', {'idEquipement': equipement.idEquipement}) }}\" 
   class=\"btn btn-sm w-100 text-white\" 
   style=\"background-color: #0a4275; border-color: #0a4275;\"
   target=\"_blank\">
    <i class=\"fas fa-file-pdf me-2\"></i>Télécharger le guide
</a>
                                    </div>
                                    {% endif %}
                                </div>
                                
                                <div class=\"card-footer bg-white border-light\">
                                    <div class=\"btn-group w-100\">
                                        <a href=\"{{ path('app_equipement_show', {'idEquipement': equipement.idEquipement}) }}\"
                                           class=\"btn btn-outline-secondary btn-sm\">
                                            <i class=\"fas fa-eye me-1\"></i> Détails
                                        </a>
                                        <a href=\"{{ path('app_equipement_edit', {'idEquipement': equipement.idEquipement}) }}\"
   class=\"btn btn-sm text-white\"
   style=\"background-color: #0a4275; border-color: #0a4275;\">
    <i class=\"fas fa-edit me-1\"></i> Modifier
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    {% else %}
                    <div class=\"text-center py-5\">
                        <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                        <h5 class=\"text-dark\">Aucun équipement enregistré</h5>
                        <p class=\"text-muted\">Commencez par ajouter votre premier équipement</p>
                        <a href=\"{{ path('app_equipement_new') }}\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus me-2\"></i>Ajouter un équipement
                        </a>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "equipement/index.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\equipement\\index.html.twig");
    }
}
