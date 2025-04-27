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

/* verif/resultats.html.twig */
class __TwigTemplate_10e495887a7f638762b1eff4a2606565 extends Template
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
        // line 2
        yield "<td>
    <a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultat_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["resultat"] ?? null), "id_resultat", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm\" target=\"_blank\">
        <i class=\"fas fa-file-pdf\"></i> PDF
    </a>
</td>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "verif/resultats.html.twig";
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
        return array (  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "verif/resultats.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\verif\\resultats.html.twig");
    }
}
