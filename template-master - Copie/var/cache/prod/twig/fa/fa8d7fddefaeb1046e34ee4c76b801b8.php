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

/* employe_front/pending_renewals.html.twig */
class __TwigTemplate_71abb44b0b39ba5b8e2b1a604a79065f extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseEmployeFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseEmployeFront.html.twig", "employe_front/pending_renewals.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Pending Renewals";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container py-5\">
        <h2 class=\"mb-4\">Permis en attente de renouvellement</h2>

        <div class=\"row\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pendingPermis"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["permi"]) {
            // line 11
            yield "                <div class=\"col-md-6\">
                   <a href=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_permisOne", ["numeroPermis" => CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "numeroPermis", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
    <div class=\"card mb-4 shadow-sm border-primary\" style=\"background-color: #e6f0ff;\">
        <div class=\"card-body text-center\">
            <div class=\"license-card-large mx-auto\">
                <div class=\"license-header bg-primary text-white py-2 rounded-top\">
                    <h6 class=\"mb-0\">PERMIS DE CONDUIRE</h6>
                </div>
                <div class=\"license-body py-3\">
                    <div class=\"license-number mb-3\">N° ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "numeroPermis", [], "any", false, false, false, 20), "html", null, true);
            yield "</div>
                    <div class=\"license-category mb-2\">
                        <span class=\"badge bg-primary\">Catégorie ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "categorie", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"license-dates small\">
                        <div>Délivré le: ";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateDelivrance", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateDelivrance", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</div>
                        <div>Expire le: ";
            // line 26
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateExpiration", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateExpiration", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</div>
                    </div>
                    <div class=\"license-status mt-3\">
                        <span class=\"badge bg-";
            // line 29
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "etat", [], "any", false, false, false, 29) == "Valid")) ? ("success") : ("danger"));
            yield " px-3 py-2\">
                            ";
            // line 30
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "etat", [], "any", false, false, false, 30) == "Valid")) ? ("Valide") : ("Non valide"));
            yield "
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                <div class=\"col-12\">
                    <p class=\"text-muted\">Aucune demande de renouvellement en attente.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['permi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employe_front/pending_renewals.html.twig";
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
        return array (  146 => 45,  137 => 41,  135 => 40,  120 => 30,  116 => 29,  110 => 26,  106 => 25,  100 => 22,  95 => 20,  84 => 12,  81 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe_front/pending_renewals.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\employe_front\\pending_renewals.html.twig");
    }
}
