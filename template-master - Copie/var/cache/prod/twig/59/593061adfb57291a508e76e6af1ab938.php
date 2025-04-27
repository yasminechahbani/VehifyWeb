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

/* service/show.html.twig */
class __TwigTemplate_1d74616bf989d6bdc19b4b73994e4fc6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "service/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Service Details";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\"><i class=\"fas fa-cogs me-2\"></i>Service Details</h4>
                        <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Complete service information</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_index");
        yield "\" class=\"btn btn-light\">
                        <i class=\"fas fa-arrow-left me-2\"></i>Back to list
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Basic Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-hashtag me-2\"></i>Service ID</dt>
                                    <dd class=\"col-sm-8\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idService", [], "any", false, false, false, 27), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-signature me-2\"></i>Name</dt>
                                    <dd class=\"col-sm-8\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-tag me-2\"></i>Type</dt>
                                    <dd class=\"col-sm-8\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "type", [], "any", false, false, false, 33), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-euro-sign me-2\"></i>Price</dt>
                                    <dd class=\"col-sm-8\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "prix", [], "any", false, false, false, 36), "html", null, true);
        yield " TND</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-map-marker-alt me-2\"></i>Region</dt>
                                    <dd class=\"col-sm-8\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "gouvernerat", [], "any", false, false, false, 39), "html", null, true);
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-clock me-2\"></i>Contact & Schedule</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-phone me-2\"></i>Phone</dt>
                                    <dd class=\"col-sm-8\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "numero", [], "any", false, false, false, 49), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-envelope me-2\"></i>Email</dt>
                                    <dd class=\"col-sm-8\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "email", [], "any", false, false, false, 52), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-door-open me-2\"></i>Opening</dt>
                                    <dd class=\"col-sm-8\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "getHeureOuverture", [], "method", false, false, false, 55), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-4 text-muted\"><i class=\"fas fa-door-closed me-2\"></i>Closing</dt>
                                    <dd class=\"col-sm-8\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "getHeureFermeture", [], "method", false, false, false, 58), "html", null, true);
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"bg-light p-3 rounded\">
                                <h5 class=\"mb-3\"><i class=\"fas fa-align-left me-2\"></i>Additional Information</h5>
                                <dl class=\"row mb-0\">
                                    <dt class=\"col-sm-2 text-muted\"><i class=\"fas fa-file-alt me-2\"></i>Description</dt>
                                    <dd class=\"col-sm-10\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, false, 68), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-2 text-muted\"><i class=\"fas fa-map-pin me-2\"></i>Location</dt>
                                    <dd class=\"col-sm-10\">Latitude: ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "latitude", [], "any", false, false, false, 71), "html", null, true);
        yield ", Longitude: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "longitude", [], "any", false, false, false, 71), "html", null, true);
        yield "</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-3 text-center\">
                        <a href=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_edit", ["id_service" => CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "idService", [], "any", false, false, false, 78)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                            <i class=\"fas fa-edit me-2\"></i>Edit
                        </a>
                        ";
        // line 81
        yield Twig\Extension\CoreExtension::include($this->env, $context, "service/_delete_form.html.twig");
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
        return "service/show.html.twig";
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
        return array (  188 => 81,  182 => 78,  170 => 71,  164 => 68,  151 => 58,  145 => 55,  139 => 52,  133 => 49,  120 => 39,  114 => 36,  108 => 33,  102 => 30,  96 => 27,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "service/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\service\\show.html.twig");
    }
}
