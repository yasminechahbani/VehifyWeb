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
class __TwigTemplate_e321fd2ee4de96cb70349f42a2827651 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verif/resultats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "verif/resultats.html.twig"));

        // line 2
        yield "<td>
    <a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultat_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 3, $this->source); })()), "id_resultat", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm\" target=\"_blank\">
        <i class=\"fas fa-file-pdf\"></i> PDF
    </a>
</td>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# In your table row, add a PDF download button #}
<td>
    <a href=\"{{ path('app_resultat_pdf', {'id': resultat.id_resultat}) }}\" class=\"btn btn-info btn-sm\" target=\"_blank\">
        <i class=\"fas fa-file-pdf\"></i> PDF
    </a>
</td>", "verif/resultats.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\verif\\resultats.html.twig");
    }
}
