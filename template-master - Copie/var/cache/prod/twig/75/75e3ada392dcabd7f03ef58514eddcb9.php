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

/* vehicule/index.html.twig */
class __TwigTemplate_6ab7dd33b29d804b28b2df7ef6ce353d extends Template
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
        return "baseFHomePage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["active_page"] = "vehicules";
        // line 1
        $this->parent = $this->loadTemplate("baseFHomePage.html.twig", "vehicule/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Véhicules";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-car me-2\"></i>Véhicules</h4>
                        <p class=\"text-muted small mb-0\">Liste complète des véhicules disponibles</p>
                    </div>
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Nouveau Véhicule
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vehicules"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 24
            yield "                            <div class=\"col-md-6 col-lg-4\">
                                <div class=\"card h-100 border-0 shadow-sm\">
                                    <div class=\"position-relative\">
                                        <div class=\"position-absolute top-0 end-0 p-3\">
                                            <span class=\"badge bg-";
            // line 28
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "statut", [], "any", false, false, false, 28) == "Disponible")) ? ("success") : ("warning"));
            yield "\">
                                                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "statut", [], "any", false, false, false, 29), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title mb-3\">
                                            <i class=\"fas fa-car-side me-2 text-primary\"></i>
                                            ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 36), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 36), "html", null, true);
            yield "
                                        </h5>
                                        
                                        <div class=\"row g-2 mb-3\">
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Immatriculation</small>
                                                    <strong>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 43), "html", null, true);
            yield "</strong>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Type</small>
                                                    <strong>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "type", [], "any", false, false, false, 49), "html", null, true);
            yield "</strong>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Couleur</small>
                                                    <strong>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "couleur", [], "any", false, false, false, 55), "html", null, true);
            yield "</strong>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div class=\"bg-light p-2 rounded\">
                                                    <small class=\"text-muted d-block\">Kilométrage</small>
                                                    <strong>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "kilometrage", [], "any", false, false, false, 61), "html", null, true);
            yield " km</strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"d-flex gap-2\">
                                            <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "getIdVehicule", [], "method", false, false, false, 67)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-outline-primary flex-grow-1\">
                                                <i class=\"fas fa-eye me-2\"></i>Détails
                                            </a>
                                            <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idVehicule" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "getIdVehicule", [], "method", false, false, false, 71)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-primary flex-grow-1\">
                                                <i class=\"fas fa-edit me-2\"></i>Modifier
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 79
        if (!$context['_iterated']) {
            // line 80
            yield "                            <div class=\"col-12\">
                                <div class=\"alert alert-info text-center\">
                                    <i class=\"fas fa-info-circle me-2\"></i>Aucun véhicule trouvé
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vehicule'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}

.btn-outline-primary {
    color: #0d6efd;
    border-color: #0d6efd;
}

.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vehicule/index.html.twig";
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
        return array (  200 => 86,  189 => 80,  187 => 79,  174 => 71,  167 => 67,  158 => 61,  149 => 55,  140 => 49,  131 => 43,  119 => 36,  109 => 29,  105 => 28,  99 => 24,  94 => 23,  84 => 16,  73 => 7,  66 => 6,  55 => 4,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "vehicule/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\vehicule\\index.html.twig");
    }
}
