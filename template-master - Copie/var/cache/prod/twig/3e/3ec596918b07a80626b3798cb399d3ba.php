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

/* paiement/index.html.twig */
class __TwigTemplate_895afe1f6fb5534966cf8d02d13111e5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "paiement/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des Paiements";
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
            <h1 class=\"display-4 mb-4\">Gestion des Paiements</h1>

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
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"table-dark\">
                        <tr>
                            <th>ID</th>
                            <th>Réservation</th>
                            <th>Date de paiement</th>
                            <th>Prix</th>
                            <th>Statut</th>
                            <th>Nom du titulaire</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["paiements"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 35
            yield "                        <tr>
                            <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                            <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "reservation", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "reservation", [], "any", false, false, false, 37), "dateReservation", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td>";
            // line 38
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "datePaiement", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "datePaiement", [], "any", false, false, false, 38), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
                            <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "prix", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                            <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "statut", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                            <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "nomTitulaireCarte", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                            <td>
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                                    ";
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "paiement/_delete_form.html.twig");
            yield "
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 50
        if (!$context['_iterated']) {
            // line 51
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center\">Aucun paiement trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['paiement'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"mt-4\">
                <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_new");
        yield "\" class=\"btn btn-success\">Créer un nouveau paiement</a>
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
        return "paiement/index.html.twig";
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
        return array (  217 => 60,  210 => 55,  201 => 51,  199 => 50,  182 => 46,  178 => 45,  174 => 44,  168 => 41,  164 => 40,  160 => 39,  156 => 38,  150 => 37,  146 => 36,  143 => 35,  125 => 34,  108 => 19,  102 => 18,  93 => 15,  88 => 14,  83 => 13,  79 => 12,  73 => 8,  66 => 7,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "paiement/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\paiement\\index.html.twig");
    }
}
