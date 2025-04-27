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

/* facture/index.html.twig */
class __TwigTemplate_e0ee352280aaabd6cc5ed64d94d73556 extends Template
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
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "facture/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des Factures";
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
            <h1 class=\"display-4 text-uppercase text-center mb-5\">Liste des Factures</h1>
            
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                        ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "            
            <div class=\"mb-3\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        yield "\" class=\"btn btn-primary\">Créer une nouvelle facture</a>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Numéro de facture</th>
                            <th>Date de facturation</th>
                            <th>Montant</th>
                            <th>Statut</th>
                            <th>Réservation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["factures"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 39
            yield "                        <tr>
                            <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                            <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numeroFacture", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                            <td>";
            // line 42
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dateFacturation", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dateFacturation", [], "any", false, false, false, 42), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                            <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "montant", [], "any", false, false, false, 43), "html", null, true);
            yield " €</td>
                            <td>
                                ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "statut", [], "any", false, false, false, 45) == "Payée")) {
                // line 46
                yield "                                    <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "statut", [], "any", false, false, false, 46), "html", null, true);
                yield "</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 47
$context["facture"], "statut", [], "any", false, false, false, 47) == "En attente")) {
                // line 48
                yield "                                    <span class=\"badge bg-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "statut", [], "any", false, false, false, 48), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 50
                yield "                                    <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "statut", [], "any", false, false, false, 50), "html", null, true);
                yield "</span>
                                ";
            }
            // line 52
            yield "                            </td>
                            <td>Réservation #";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "reservation", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                                <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 59
        if (!$context['_iterated']) {
            // line 60
            yield "                        <tr>
                            <td colspan=\"7\">Aucune facture trouvée</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                    </tbody>
                </table>
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
        return "facture/index.html.twig";
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
        return array (  209 => 64,  200 => 60,  198 => 59,  190 => 56,  186 => 55,  181 => 53,  178 => 52,  172 => 50,  166 => 48,  164 => 47,  159 => 46,  157 => 45,  152 => 43,  148 => 42,  144 => 41,  140 => 40,  137 => 39,  132 => 38,  112 => 21,  108 => 19,  102 => 18,  93 => 15,  88 => 14,  83 => 13,  79 => 12,  73 => 8,  66 => 7,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "facture/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\facture\\index.html.twig");
    }
}
