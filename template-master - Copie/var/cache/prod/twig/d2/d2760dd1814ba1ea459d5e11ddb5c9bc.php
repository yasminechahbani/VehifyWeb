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

/* permis/edit.html.twig */
class __TwigTemplate_f1a91514247f494d192b93dfe037279b extends Template
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
        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "permis/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier le Permis";
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
        yield "<div class=\"container py-4\">
    <div class=\"row mb-4\">
        <div class=\"col\">
            <!-- Add flash messages -->
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
            <nav aria-label=\"breadcrumb\" class=\"d-flex justify-content-between align-items-center\">
                <ol class=\"breadcrumb mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_front");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Modifier le permis #";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["permi"] ?? null), "numeroPermis", [], "any", false, false, false, 20), "html", null, true);
        yield "</li>
                </ol>
                <button type=\"submit\" form=\"permis_form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-save me-1\"></i>Enregistrer
                </button>
            </nav>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-edit text-primary me-2\"></i>Modifier le Permis
                        </h5>
                        <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_permisOne", ["numeroPermis" => CoreExtension::getAttribute($this->env, $this->source, ($context["permi"] ?? null), "idPermis", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "permis/_form.html.twig", ["button_label" => "Enregistrer les modifications", "form" =>         // line 45
($context["form"] ?? null), "form_id" => "permis_form"]);
        // line 47
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-4\">
            <!-- Add warning about date_delivrance -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations importantes
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>La date d'expiration sera mise à jour automatiquement si vous modifiez la date de délivrance.
                    </div>
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-lightbulb me-2\"></i>Vous modifiez les informations du permis n° ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["permi"] ?? null), "numeroPermis", [], "any", false, false, false, 65), "html", null, true);
        yield "
                    </div>
                    <p>Veuillez vous assurer que toutes les informations saisies sont correctes avant d'enregistrer les modifications.</p>
                    <p class=\"mb-0\">Les champs marqués d'un astérisque (*) sont obligatoires.</p>
                </div>
            </div>
            
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-trash-alt text-danger me-2\"></i>Supprimer
                    </h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"text-danger mb-3\">Attention : La suppression d'un permis est définitive et ne peut pas être annulée.</p>
                    ";
        // line 80
        yield Twig\Extension\CoreExtension::include($this->env, $context, "permis/_delete_form.html.twig", ["button_class" => "btn-danger w-100"]);
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "<style>
    /* Form styling */
    .form-label {
        font-weight: 500;
    }
    
    .required:after {
        content: \" *\";
        color: #dc3545;
    }
    
    /* Custom button styling */
    .btn-primary {
        background-color: #4361ee;
        border-color: #4361ee;
    }
    
    .btn-primary:hover {
        background-color: #3a56d4;
        border-color: #3a56d4;
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
        return "permis/edit.html.twig";
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
        return array (  192 => 89,  185 => 88,  173 => 80,  155 => 65,  135 => 47,  133 => 45,  132 => 43,  123 => 37,  103 => 20,  99 => 19,  94 => 16,  84 => 12,  81 => 11,  77 => 10,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "permis/edit.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\permis\\edit.html.twig");
    }
}
