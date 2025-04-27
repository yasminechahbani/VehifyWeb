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

/* paiement/edit.html.twig */
class __TwigTemplate_7546fd0e2ea26be5c09fdfdfbdf03154 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "paiement/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier Paiement";
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
            <div class=\"row mb-4\">
                <div class=\"col-12\">
                    <h1 class=\"display-4 text-primary\">Modifier le Paiement</h1>
                </div>
            </div>

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
            <div class=\"card shadow-lg border-0 rounded-3\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <h5 class=\"card-title mb-0\"><i class=\"fas fa-edit me-2\"></i>Informations du Paiement</h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "paiement/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
                </div>
            </div>

            <div class=\"d-flex gap-3 mt-4\">
                <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                </a>
                ";
        // line 38
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
        return "paiement/edit.html.twig";
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
        return array (  135 => 38,  129 => 35,  121 => 30,  113 => 24,  107 => 23,  97 => 19,  92 => 18,  87 => 17,  83 => 16,  73 => 8,  66 => 7,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "paiement/edit.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\paiement\\edit.html.twig");
    }
}
