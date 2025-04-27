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

/* equipement/_delete_form.html.twig */
class __TwigTemplate_cdf7f9fc1961405d79a3dbb0e223bab7 extends Template
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
        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_delete", ["idEquipement" => CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "idEquipement", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this equipment?');\" class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["equipement"] ?? null), "idEquipement", [], "any", false, false, false, 2))), "html", null, true);
        yield "\">
    <button type=\"submit\" class=\"dropdown-item text-danger\">
        <i class=\"fas fa-trash-alt me-2\"></i>Delete Equipment
    </button>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "equipement/_delete_form.html.twig";
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
        return array (  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "equipement/_delete_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\equipement\\_delete_form.html.twig");
    }
}
