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

/* facture/show.html.twig */
class __TwigTemplate_7c9926c24af4ae366c1e39703cc221ed extends Template
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
        $context["active_page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "facture/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Facture";
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
        yield "    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Détails de la Facture</h1>
            
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header bg-primary text-white\">
                            <h4>Informations de la facture</h4>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-striped\">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Numéro de Facture</th>
                                        <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "numeroFacture", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Date de Facturation</th>
                                        <td>";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "dateFacturation", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "dateFacturation", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Montant</th>
                                        <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "montant", [], "any", false, false, false, 35), "html", null, true);
        yield " €</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "description", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                                    </tr>
                                    <tr>
                                        <th>Statut</th>
                                        <td>
                                            ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 44) == "Payée")) {
            // line 45
            yield "                                                <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["facture"] ?? null), "statut", [], "any", false, false, false, 46) == "En attente")) {
            // line 47
            yield "                                                <span class=\"badge bg-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
                                            ";
        } else {
            // line 49
            yield "                                                <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "statut", [], "any", false, false, false, 49), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 51
        yield "                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                            <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Modifier</a>
                            <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-danger\"><i class=\"fas fa-file-pdf\"></i> Générer PDF</a>
                            ";
        // line 61
        yield "                        </div>
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
        return "facture/show.html.twig";
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
        return array (  167 => 61,  163 => 59,  159 => 58,  155 => 57,  147 => 51,  141 => 49,  135 => 47,  133 => 46,  128 => 45,  126 => 44,  118 => 39,  111 => 35,  104 => 31,  97 => 27,  90 => 23,  73 => 8,  66 => 7,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "facture/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\facture\\show.html.twig");
    }
}
