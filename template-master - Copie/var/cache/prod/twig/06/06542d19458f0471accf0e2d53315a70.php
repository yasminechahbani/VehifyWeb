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
class __TwigTemplate_76c93371279e64408b07ebfcd9b22086 extends Template
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
        // line 1
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["employes"] ?? null))) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["employes"] ?? null));
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
        return array (  117 => 24,  104 => 17,  100 => 16,  97 => 15,  79 => 13,  76 => 12,  70 => 10,  68 => 9,  64 => 8,  60 => 7,  54 => 6,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/_search_results.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\employe\\_search_results.html.twig");
    }
}
