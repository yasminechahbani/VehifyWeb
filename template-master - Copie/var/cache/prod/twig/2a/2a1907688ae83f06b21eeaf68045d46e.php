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

/* carte_grise/_delete_form.html.twig */
class __TwigTemplate_0381667554259cc0c10e1c07ecac53bf extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_delete", ["id_carte_grise" => CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "idCarteGrise", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" 
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette carte grise ? Cette action est irréversible.')\"
      class=\"d-inline\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "idCarteGrise", [], "any", false, false, false, 4))), "html", null, true);
        yield "\">
    <button type=\"submit\" class=\"btn btn-outline-danger\">
        <i class=\"fas fa-trash-alt me-2\"></i>Supprimer
    </button>
</form>

<style>
.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
    transition: all 0.3s ease;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    transform: translateY(-2px);
    box-shadow: 0 2px 5px rgba(220, 53, 69, 0.2);
}
</style>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "carte_grise/_delete_form.html.twig";
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
        return array (  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "carte_grise/_delete_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\carte_grise\\_delete_form.html.twig");
    }
}
