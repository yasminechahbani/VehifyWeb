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
class __TwigTemplate_50f40f8b22e54b3cd8a1cfeeaf3c1b3f extends Template
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-user-tie me-2\"></i>Employee Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Complete employee information</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-user-circle me-2\"></i>Personal Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>Last Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "nom", [], "any", false, false, false, 27), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>First Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "prenom", [], "any", false, false, false, 30), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-envelope me-2\"></i>Email</dt>
                                    <dd class=\"col-sm-8\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-birthday-cake me-2\"></i>Age</dt>
                                    <dd class=\"col-sm-8\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "age", [], "any", false, false, false, 36), "html", null, true);
        yield " years</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-briefcase me-2\"></i>Professional Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user-tag me-2\"></i>Position</dt>
                                    <dd class=\"col-sm-8\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "poste", [], "any", false, false, false, 46), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-phone me-2\"></i>Phone</dt>
                                    <dd class=\"col-sm-8\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "tel", [], "any", false, false, false, 49), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-money-bill me-2\"></i>Salary</dt>
                                    <dd class=\"col-sm-8\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "salaire", [], "any", false, false, false, 52), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-lock me-2\"></i>Password</dt>
                                    <dd class=\"col-sm-8\">
                                        <span class=\"badge bg-secondary\">********</span>
                                    </dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-building me-2\"></i>Service</dt>
                                    <dd class=\"col-sm-8\">
                                        ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "idService", [], "any", false, false, false, 61)) {
            // line 62
            yield "                                            <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "idService", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
            yield "</span>
                                        ";
        } else {
            // line 64
            yield "                                            <span class=\"badge bg-secondary\">No Service Assigned</span>
                                        ";
        }
        // line 66
        yield "                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_edit", ["idEmploye" => CoreExtension::getAttribute($this->env, $this->source, ($context["employe"] ?? null), "idEmploye", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                            <i class=\"fas fa-edit me-2\"></i>Edit
                        </a>
                        ";
        // line 76
        yield Twig\Extension\CoreExtension::include($this->env, $context, "employe/_delete_form.html.twig");
        yield "
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
        return array (  178 => 76,  172 => 73,  163 => 66,  159 => 64,  153 => 62,  151 => 61,  139 => 52,  133 => 49,  127 => 46,  114 => 36,  108 => 33,  102 => 30,  96 => 27,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\employe\\show.html.twig");
    }
}
