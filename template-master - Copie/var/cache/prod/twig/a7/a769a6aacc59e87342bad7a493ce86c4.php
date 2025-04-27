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

/* equipement/show.html.twig */
class __TwigTemplate_652815dc3587621ee58e2e44ff399235 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "equipement/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Equipment Details";
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
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-tools me-2\"></i>Equipment Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>View equipment information</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4 text-center mb-4\">
                            <div class=\"bg-light p-4 rounded-circle mx-auto\" style=\"width: 150px; height: 150px;\">
                                <i class=\"fas fa-box fa-4x text-secondary\"></i>
                            </div>
                        </div>
                        <div class=\"col-md-8\">
                            <h2 class=\"h4 mb-3\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</h2>
                            <span class=\"badge bg-";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "etat", [], "any", false, false, false, 29) == "Bon état")) ? ("success") : ("warning"));
        yield " mb-3\">
                                ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "etat", [], "any", false, false, false, 30), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Basic Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-hashtag me-2\"></i>ID</dt>
                                    <dd class=\"col-sm-8\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "idEquipement", [], "any", false, false, false, 41), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-tag me-2\"></i>Category</dt>
                                    <dd class=\"col-sm-8\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "categorie", [], "any", false, false, false, 44), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-align-left me-2\"></i>Description</dt>
                                    <dd class=\"col-sm-8\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "description", [], "any", false, false, false, 47), "html", null, true);
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-user me-2\"></i>Assignment Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\">Employee</dt>
                                    <dd class=\"col-sm-8\">
                                        ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "employe", [], "any", false, false, false, 58)) {
            // line 59
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "employe", [], "any", false, false, false, 59), "prenom", [], "any", false, false, false, 59), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "employe", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
            yield "
                                        ";
        } else {
            // line 61
            yield "                                            <span class=\"text-muted\">No assigned employee</span>
                                        ";
        }
        // line 63
        yield "                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <a href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_edit", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "idEquipement", [], "any", false, false, false, 70)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                            <i class=\"fas fa-edit me-2\"></i>Edit
                        </a>
                        
                    </div>
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
        return "equipement/show.html.twig";
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
        return array (  168 => 70,  159 => 63,  155 => 61,  147 => 59,  145 => 58,  131 => 47,  125 => 44,  119 => 41,  105 => 30,  101 => 29,  97 => 28,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "equipement/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\equipement\\show.html.twig");
    }
}
