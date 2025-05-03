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

/* BackOffice/carte_grise/show.html.twig */
class __TwigTemplate_dd923d0a8d36b7886c86bac749639280 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/carte_grise/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/carte_grise/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/carte_grise/show.html.twig", 1);
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

        yield "Détail Carte Grise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Détails de la Carte Grise</h4>
                        <p class=\"text-muted small mb-0\">Informations complètes de la carte grise</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Numéro de Carte Grise</label>
                                <div class=\"h5 mb-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 25, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 25), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Propriétaire</label>
                                <div class=\"h5 mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 32, $this->source); })()), "proprietaire", [], "any", false, false, false, 32), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"bg-light p-3 rounded\">
                                <label class=\"form-label text-muted mb-1\">Adresse du Propriétaire</label>
                                <div class=\"h5 mb-0\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 39, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 39), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Date d'Émission</label>
                                <div class=\"h5 mb-0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 46, $this->source); })()), "DateEmission", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                       
                    </div>

                    <div class=\"border-top mt-4 pt-4\">
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_edit", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 55, $this->source); })()), "idCarteGrise", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\"
                               class=\"btn btn-warning\">
                                Modifier
                            </a>
                            <form action=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_delete", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["carte_grise"]) || array_key_exists("carte_grise", $context) ? $context["carte_grise"] : (function () { throw new RuntimeError('Variable "carte_grise" does not exist.', 59, $this->source); })()), "idCarteGrise", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\"
                                  method=\"POST\"
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette carte grise ?');\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
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
        return "BackOffice/carte_grise/show.html.twig";
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
        return array (  173 => 59,  166 => 55,  154 => 46,  144 => 39,  134 => 32,  124 => 25,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail Carte Grise{% endblock %}

{% block content %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Détails de la Carte Grise</h4>
                        <p class=\"text-muted small mb-0\">Informations complètes de la carte grise</p>
                    </div>
                    <a href=\"{{ path('app_liste') }}\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Numéro de Carte Grise</label>
                                <div class=\"h5 mb-0\">{{ carte_grise.numeroCarteGrise }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Propriétaire</label>
                                <div class=\"h5 mb-0\">{{ carte_grise.proprietaire }}</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"bg-light p-3 rounded\">
                                <label class=\"form-label text-muted mb-1\">Adresse du Propriétaire</label>
                                <div class=\"h5 mb-0\">{{ carte_grise.adresseProprietaire }}</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Date d'Émission</label>
                                <div class=\"h5 mb-0\">{{ carte_grise.DateEmission|date('d/m/Y') }}</div>
                            </div>
                        </div>

                       
                    </div>

                    <div class=\"border-top mt-4 pt-4\">
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"{{ path('app_carte_griseB_edit', {'idCarteGrise': carte_grise.idCarteGrise}) }}\"
                               class=\"btn btn-warning\">
                                Modifier
                            </a>
                            <form action=\"{{ path('app_carte_griseB_delete', {'idCarteGrise': carte_grise.idCarteGrise}) }}\"
                                  method=\"POST\"
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette carte grise ?');\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "BackOffice/carte_grise/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\BackOffice\\carte_grise\\show.html.twig");
    }
}
