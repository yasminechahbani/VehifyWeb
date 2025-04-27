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
class __TwigTemplate_8962507652e5362583357f95567d5455 extends Template
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
        yield "    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h1 class=\"h4 mb-0\">User Details</h1>
                            <div>
                                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-sm btn-light\">
                                    <i class=\"fas fa-arrow-left\"></i> Back to list
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-4 text-center\">
                                ";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "image", [], "any", false, false, false, 24)) {
            // line 25
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "image", [], "any", false, false, false, 25), "html", null, true);
            yield "\" alt=\"Profile Image\" class=\"img-thumbnail rounded-circle\" style=\"width: 150px; height: 150px; object-fit: cover;\">
                                ";
        } else {
            // line 27
            yield "                                    <div class=\"d-flex align-items-center justify-content-center bg-light rounded-circle\" style=\"width: 150px; height: 150px;\">
                                        <i class=\"fas fa-user fa-3x text-secondary\"></i>
                                    </div>
                                ";
        }
        // line 31
        yield "                            </div>
                            <div class=\"col-md-8\">
                                <h2 class=\"h3\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 33), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 33), "html", null, true);
        yield "</h2>
                                <p class=\"text-muted\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>

                                <span class=\"badge
                                    ";
        // line 37
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "status", [], "any", false, false, false, 37) == "active")) {
            yield "bg-success
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["user"] ?? null), "status", [], "any", false, false, false, 38) == "inactive")) {
            yield "bg-warning
                                    ";
        } else {
            // line 39
            yield "bg-secondary
                                    ";
        }
        // line 40
        yield "\">
                                    ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "status", [], "any", false, false, false, 41)), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3 class=\"h5\">Personal Information</h3>
                                <hr>
                                <dl class=\"row\">
                                    <dt class=\"col-sm-4\">ID</dt>
                                    <dd class=\"col-sm-8\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">First Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 55), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">Last Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 58), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">Phone</dt>
                                    <dd class=\"col-sm-8\">";
        // line 61
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tel", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "tel", [], "any", false, false, false, 61), "html", null, true)) : (yield "N/A"));
        yield "</dd>
                                </dl>
                            </div>

                            <div class=\"col-md-6\">
                                <h3 class=\"h5\">Account Information</h3>
                                <hr>
                                <dl class=\"row\">
                                    <dt class=\"col-sm-4\">Email</dt>
                                    <dd class=\"col-sm-8\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 70), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4\">Location</dt>
                                    <dd class=\"col-sm-8\">";
        // line 73
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "localisation", [], "any", false, false, false, 73)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "localisation", [], "any", false, false, false, 73), "html", null, true)) : (yield "N/A"));
        yield "</dd>

                                    <dt class=\"col-sm-4\">Role</dt>
                                    <dd class=\"col-sm-8\">
                                        <span class=\"badge
                                            ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 78) == "ADMIN")) {
            yield "bg-danger
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["user"] ?? null), "role", [], "any", false, false, false, 79) == "USER")) {
            yield "bg-primary
                                            ";
        } else {
            // line 80
            yield "bg-secondary
                                            ";
        }
        // line 81
        yield "\">
                                            ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 82), "html", null, true);
        yield "
                                        </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Edit
                            </a>

                            ";
        // line 96
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
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
        return array (  236 => 96,  229 => 92,  216 => 82,  213 => 81,  209 => 80,  204 => 79,  200 => 78,  192 => 73,  186 => 70,  174 => 61,  168 => 58,  162 => 55,  156 => 52,  142 => 41,  139 => 40,  135 => 39,  130 => 38,  126 => 37,  120 => 34,  114 => 33,  110 => 31,  104 => 27,  98 => 25,  96 => 24,  83 => 14,  73 => 6,  66 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/show.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\show.html.twig");
    }
}
