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

/* BackOffice/carte_grise/new.html.twig */
class __TwigTemplate_2e01b13364014251ddf14a07178cb9b2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/carte_grise/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Ajouter une Carte Grise";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container my-4\">
    <h1 class=\"mb-4\">Ajouter une Carte Grise</h1>

    <!-- Affichage des messages flash (erreurs, succès, etc.) -->
    <div class=\"container\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 12
            yield "             <div class=\"alert alert-";
            yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
            yield "\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </div>

    ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
        <div class=\"mb-3\">
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 22), 'label');
        yield "
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"text-danger\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 24), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 28), 'label');
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"text-danger\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 30), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 34), 'label');
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"text-danger\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 36), 'errors');
        yield "</div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 41), 'label');
        yield "
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"text-danger\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 43), 'errors');
        yield "</div>
            </div>

            <div class=\"col-md-6 mb-3\">
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 47), 'label');
        yield "
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"text-danger\">";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 49), 'errors');
        yield "</div>
            </div>

            <div class=\"col-md-6 mb-3\">
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 53), 'label');
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <div class=\"text-danger\">";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 55), 'errors');
        yield "</div>
            </div>
        </div>

        <div class=\"mb-3\">
            <button type=\"submit\" class=\"btn btn-success\">Ajouter la Carte Grise</button>
        </div>
    ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "BackOffice/carte_grise/new.html.twig";
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
        return array (  209 => 62,  199 => 55,  195 => 54,  191 => 53,  184 => 49,  180 => 48,  176 => 47,  169 => 43,  165 => 42,  161 => 41,  153 => 36,  149 => 35,  145 => 34,  138 => 30,  134 => 29,  130 => 28,  123 => 24,  119 => 23,  115 => 22,  110 => 20,  106 => 18,  99 => 16,  90 => 14,  86 => 13,  81 => 12,  77 => 11,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/carte_grise/new.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\carte_grise\\new.html.twig");
    }
}
