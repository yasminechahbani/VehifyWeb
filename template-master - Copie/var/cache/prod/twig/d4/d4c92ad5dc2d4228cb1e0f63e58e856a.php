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

/* user/show.html.twig */
class __TwigTemplate_99c985da92f59f855dc839fc7c1e9d57 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "User Details - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 3), "html", null, true);
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
                        <h4 class=\"mb-1\"><i class=\"fas fa-user me-2\"></i>User Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Complete user information</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-4 text-center\">
                            ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "image", [], "any", false, false, false, 23)) {
            // line 24
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "image", [], "any", false, false, false, 24), "html", null, true);
            yield "\" alt=\"Profile Image\" class=\"img-thumbnail rounded-circle shadow-sm\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                            ";
        } else {
            // line 26
            yield "                                <div class=\"d-flex align-items-center justify-content-center bg-light rounded-circle shadow-sm mx-auto\" style=\"width: 150px; height: 150px;\">
                                    <i class=\"fas fa-user-circle fa-4x text-secondary\"></i>
                                </div>
                            ";
        }
        // line 30
        yield "                        </div>
                        <div class=\"col-md-8\">
                            <h2 class=\"h4 mb-2\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 32), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield "</h2>
                            <p class=\"text-muted mb-2\"><i class=\"fas fa-user-tag me-2\"></i>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
                            <span class=\"badge ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "status", [], "any", false, false, false, 34) == "active")) {
            yield "bg-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "status", [], "any", false, false, false, 34) == "inactive")) {
            yield "bg-warning";
        } else {
            yield "bg-secondary";
        }
        yield "\">
                                <i class=\"fas fa-circle me-1\"></i>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "status", [], "any", false, false, false, 35)), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>

                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-user-circle me-2\"></i>Personal Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-fingerprint me-2\"></i>ID</dt>
                                    <dd class=\"col-sm-8\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>First Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 49), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user me-2\"></i>Last Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 52), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-phone me-2\"></i>Phone</dt>
                                    <dd class=\"col-sm-8\">";
        // line 55
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tel", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tel", [], "any", false, false, false, 55), "html", null, true)) : ("N/A"));
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Account Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-envelope me-2\"></i>Email</dt>
                                    <dd class=\"col-sm-8\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 65), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-map-marker-alt me-2\"></i>Location</dt>
                                    <dd class=\"col-sm-8\">";
        // line 68
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "localisation", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "localisation", [], "any", false, false, false, 68), "html", null, true)) : ("N/A"));
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-user-shield me-2\"></i>Role</dt>
                                    <dd class=\"col-sm-8\">
                                        <span class=\"badge ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 72) == "ADMIN")) {
            yield "bg-danger";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 72) == "USER")) {
            yield "bg-primary";
        } else {
            yield "bg-secondary";
        }
        yield "\">
                                            ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 73), "html", null, true);
        yield "
                                        </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-2\"></i>Edit
                            </a>
                            ";
        // line 86
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
                        </div>
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
        return "user/show.html.twig";
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
        return array (  220 => 86,  214 => 83,  201 => 73,  191 => 72,  184 => 68,  178 => 65,  165 => 55,  159 => 52,  153 => 49,  147 => 46,  133 => 35,  123 => 34,  119 => 33,  113 => 32,  109 => 30,  103 => 26,  97 => 24,  95 => 23,  84 => 15,  73 => 6,  66 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\user\\show.html.twig");
    }
}
