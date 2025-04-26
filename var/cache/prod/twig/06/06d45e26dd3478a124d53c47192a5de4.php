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

/* employe/show.html.twig */
class __TwigTemplate_e979d07dd83d87b798cb2cac22e36842 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "employe/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Employee Details";
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
        yield "<div class=\"card\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"mb-0\">Employee Details</h5>
        <div>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to list
            </a>
        </div>
    </div>
    <div class=\"card-body\">
        <table class=\"table table-sm\">
            <tbody>
                <tr>
                    <th width=\"30%\"><strong>Last Name</strong></th>
                    <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>First Name</strong></th>
                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "prenom", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Email</strong></th>
                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Age</strong></th>
                    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "age", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Position</strong></th>
                    <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "poste", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Phone</strong></th>
                    <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "tel", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Salary</strong></th>
                    <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "salaire", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th><strong>Status</strong></th>
                    <td>
                        <span class=\"badge ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "statut", [], "any", false, false, false, 49) == "Active")) {
            yield "badge-success";
        } else {
            yield "badge-danger";
        }
        yield "\">
                            ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "statut", [], "any", false, false, false, 50), "html", null, true);
        yield "
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"mt-4\">
            <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_edit", ["id_employe" => CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "id_employe", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn btn-primary mr-2\">
                <i class=\"fas fa-edit\"></i> Edit
            </a>
            
            ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "employe/_delete_form.html.twig");
        yield "
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
        return "employe/show.html.twig";
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
        return array (  165 => 62,  158 => 58,  147 => 50,  139 => 49,  131 => 44,  124 => 40,  117 => 36,  110 => 32,  103 => 28,  96 => 24,  89 => 20,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\employe\\show.html.twig");
    }
}
