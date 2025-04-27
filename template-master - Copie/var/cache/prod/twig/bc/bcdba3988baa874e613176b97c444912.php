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

/* paiement/show.html.twig */
class __TwigTemplate_3df473f7439b2b92e78c409432a36914 extends Template
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
        // line 3
        $context["active_page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "paiement/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détails du Paiement";
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
        <div class=\"container\">
            <h1 class=\"display-4 mb-4\">Détails du Paiement</h1>

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Réservation</th>
                                <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "reservation", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "reservation", [], "any", false, false, false, 22), "dateReservation", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "reservation", [], "any", false, false, false, 22), "heureReservation", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date de paiement</th>
                                <td>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "datePaiement", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "datePaiement", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr>
                                <th>Prix</th>
                                <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "prix", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Statut</th>
                                <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "statut", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Numéro de carte</th>
                                <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "numeroCarte", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date d'expiration</th>
                                <td>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "dateExpiration", [], "any", false, false, false, 42), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Nom du titulaire</th>
                                <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "nomTitulaireCarte", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Téléphone</th>
                                <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "telephone", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["paiement"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Modifier</a>
                ";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "paiement/_delete_form.html.twig");
        yield "
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
        return "paiement/show.html.twig";
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
        return array (  164 => 60,  160 => 59,  156 => 58,  145 => 50,  138 => 46,  131 => 42,  124 => 38,  117 => 34,  110 => 30,  103 => 26,  92 => 22,  85 => 18,  73 => 8,  66 => 7,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "paiement/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\paiement\\show.html.twig");
    }
}
