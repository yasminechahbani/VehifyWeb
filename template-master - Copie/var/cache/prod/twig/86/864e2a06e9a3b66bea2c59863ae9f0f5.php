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
class __TwigTemplate_1a629673e34de84d85fb037cd255bc24 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "equipement/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Equipment Management";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-tools me-2\"></i>Equipment Management</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Manage all equipment inventory</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_new");
        yield "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-plus me-2\"></i>Add New Equipment
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["equipements"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipement"]) {
            // line 23
            yield "                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <div class=\"card h-100 border-0 shadow-sm\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                            <h5 class=\"card-title mb-0\">
                                                <i class=\"fas fa-box me-2\"></i>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield "
                                            </h5>
                                            <span class=\"badge bg-";
            // line 30
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "etat", [], "any", false, false, false, 30) == "Bon état")) ? ("success") : ("warning"));
            yield "\">
                                                ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "etat", [], "any", false, false, false, 31), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                        
                                        <div class=\"mb-3\">
                                            <small class=\"text-muted\"><i class=\"fas fa-hashtag me-2\"></i>ID: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "idEquipement", [], "any", false, false, false, 36), "html", null, true);
            yield "</small>
                                        </div>

                                        <p class=\"card-text\">
                                            <i class=\"fas fa-info-circle me-2\"></i>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "description", [], "any", false, false, false, 40), "html", null, true);
            yield "
                                        </p>
                                        
                                        <p class=\"card-text\">
                                            <i class=\"fas fa-tag me-2\"></i>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "categorie", [], "any", false, false, false, 44), "html", null, true);
            yield "
                                        </p>

                                        <p class=\"card-text\">
                                            <i class=\"fas fa-user me-2\"></i>
                                            ";
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "employe", [], "any", false, false, false, 49)) {
                // line 50
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "employe", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "employe", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
                yield "
                                            ";
            } else {
                // line 52
                yield "                                                <span class=\"text-muted\">No assigned employee</span>
                                            ";
            }
            // line 54
            yield "                                        </p>
                                    </div>

                                    <div class=\"card-footer bg-white border-0 pt-0\">
                                        <div class=\"btn-group w-100\">
                                            <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_show", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "idEquipement", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-light\">
                                                <i class=\"fas fa-eye me-2\"></i>View
                                            </a>
                                            <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_edit", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, $context["equipement"], "idEquipement", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-warning\">
                                                <i class=\"fas fa-edit me-2\"></i>Edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 71
        if (!$context['_iterated']) {
            // line 72
            yield "                            <div class=\"col-12 text-center py-4\">
                                <p class=\"text-muted mb-0\">No equipment found in the system</p>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['equipement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
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
        return array (  194 => 76,  185 => 72,  183 => 71,  170 => 63,  163 => 59,  156 => 54,  152 => 52,  144 => 50,  142 => 49,  134 => 44,  127 => 40,  120 => 36,  112 => 31,  108 => 30,  103 => 28,  96 => 23,  91 => 22,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "equipement/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\equipement\\index.html.twig");
    }
}
