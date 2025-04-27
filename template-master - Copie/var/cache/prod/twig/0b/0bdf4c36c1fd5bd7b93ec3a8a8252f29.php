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

/* reservation/new.html.twig */
class __TwigTemplate_a4fc2b4a91bb582dd4121a645e93e18c extends Template
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
        return "baseFhomePage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["active_page"] = "reservation";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "reservation/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Nouvelle Réservation";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h2 class=\"mb-0\">Créer une nouvelle réservation</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reservation/_form.html.twig");
        yield "
                    
                    <div class=\"mt-3\">
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
    
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
        return "reservation/new.html.twig";
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
        return array (  89 => 19,  83 => 16,  73 => 8,  66 => 7,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/new.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\reservation\\new.html.twig");
    }
}
