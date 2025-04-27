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

/* employe/_search_results.html.twig */
class __TwigTemplate_97f8a1d20bc139f30edc85599eedb0ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_search_results.html.twig"));

        // line 1
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 2, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
                // line 3
                yield "        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card shadow-sm h-100 border-primary\">
                <div class=\"card-body p-3 d-flex flex-column\">
                    <h5 class=\"card-title text-primary mb-2\">";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "nom", [], "any", false, false, false, 6), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "prenom", [], "any", false, false, false, 6), "html", null, true);
                yield "</h5>
                    <p class=\"card-text small mb-1\"><i class=\"fa fa-envelope me-1 text-secondary\"></i> <span class=\"text-muted\">";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "email", [], "any", false, false, false, 7), "html", null, true);
                yield "</span></p>
                    <p class=\"card-text small mb-1\"><i class=\"fa fa-user me-1 text-secondary\"></i> <span class=\"text-muted\">";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "age", [], "any", false, false, false, 8), "html", null, true);
                yield " ans</span></p>
                    ";
                // line 9
                if (CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "poste", [], "any", true, true, false, 9)) {
                    // line 10
                    yield "                        <p class=\"card-text small mb-1\"><i class=\"fa fa-briefcase me-1 text-secondary\"></i> <span class=\"text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "poste", [], "any", false, false, false, 10), "html", null, true);
                    yield "</span></p>
                    ";
                }
                // line 12
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "statut", [], "any", true, true, false, 12)) {
                    // line 13
                    yield "                        <p class=\"card-text small mb-2\"><i class=\"fa fa-check-circle me-1 ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "statut", [], "any", false, false, false, 13) == "Active")) {
                        yield "text-success";
                    } else {
                        yield "text-danger";
                    }
                    yield "\"></i> <span class=\"badge ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "statut", [], "any", false, false, false, 13) == "Active")) {
                        yield "bg-success";
                    } else {
                        yield "bg-danger";
                    }
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "statut", [], "any", false, false, false, 13), "html", null, true);
                    yield "</span></p>
                    ";
                }
                // line 15
                yield "                    <div class=\"mt-auto d-flex justify-content-end align-items-center\">
                        <a href=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_show", ["idEmploye" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "idEmploye", [], "any", false, false, false, 16)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill me-2\"><i class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_edit", ["idEmploye" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "idEmploye", [], "any", false, false, false, 17)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning rounded-pill\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 24
            yield "    <div class=\"col-12\">
        <div class=\"alert alert-info text-center\">Aucun employé trouvé pour cette recherche.</div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employe/_search_results.html.twig";
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
        return array (  123 => 24,  110 => 17,  106 => 16,  103 => 15,  85 => 13,  82 => 12,  76 => 10,  74 => 9,  70 => 8,  66 => 7,  60 => 6,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if employes is not empty %}
    {% for employe in employes %}
        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card shadow-sm h-100 border-primary\">
                <div class=\"card-body p-3 d-flex flex-column\">
                    <h5 class=\"card-title text-primary mb-2\">{{ employe.nom }} {{ employe.prenom }}</h5>
                    <p class=\"card-text small mb-1\"><i class=\"fa fa-envelope me-1 text-secondary\"></i> <span class=\"text-muted\">{{ employe.email }}</span></p>
                    <p class=\"card-text small mb-1\"><i class=\"fa fa-user me-1 text-secondary\"></i> <span class=\"text-muted\">{{ employe.age }} ans</span></p>
                    {% if employe.poste is defined %}
                        <p class=\"card-text small mb-1\"><i class=\"fa fa-briefcase me-1 text-secondary\"></i> <span class=\"text-muted\">{{ employe.poste }}</span></p>
                    {% endif %}
                    {% if employe.statut is defined %}
                        <p class=\"card-text small mb-2\"><i class=\"fa fa-check-circle me-1 {% if employe.statut == 'Active' %}text-success{% else %}text-danger{% endif %}\"></i> <span class=\"badge {% if employe.statut == 'Active' %}bg-success{% else %}bg-danger{% endif %}\">{{ employe.statut }}</span></p>
                    {% endif %}
                    <div class=\"mt-auto d-flex justify-content-end align-items-center\">
                        <a href=\"{{ path('app_employe_show', {'idEmploye': employe.idEmploye}) }}\" class=\"btn btn-sm btn-outline-primary rounded-pill me-2\"><i class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"{{ path('app_employe_edit', {'idEmploye': employe.idEmploye}) }}\" class=\"btn btn-sm btn-outline-warning rounded-pill\"><i class=\"fa fa-edit\"></i> Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
{% else %}
    <div class=\"col-12\">
        <div class=\"alert alert-info text-center\">Aucun employé trouvé pour cette recherche.</div>
    </div>
{% endif %}", "employe/_search_results.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\employe\\_search_results.html.twig");
    }
}
