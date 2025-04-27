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

/* BackOffice/vehicule/new.html.twig */
class __TwigTemplate_b2c988a1628301ea1402f77e37b2d2d7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/vehicule/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Ajouter un Véhicule";
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
    <h1 class=\"mb-4 text-center\">Ajouter un Véhicule</h1>

    <!-- Affichage des messages flash -->
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            yield "        <div class=\"alert alert-";
            yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
            yield "\" role=\"alert\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                yield "                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "

    <div class=\"card shadow rounded-4 p-4\">
        <h2 class=\"text-primary mb-4\">Informations du Véhicule</h2>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "marque", [], "any", false, false, false, 29), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "modele", [], "any", false, false, false, 37), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "immatriculation", [], "any", false, false, false, 45), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 53), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "couleur", [], "any", false, false, false, 61), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "kilometrage", [], "any", false, false, false, 69), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 77), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "carteGrise", [], "any", false, false, false, 85), 'errors');
        yield "</div>
                </div>
            </div>
        </div>

        <div class=\"mb-3 text-center\">
            <button type=\"submit\" class=\"btn btn-success px-4 py-2 rounded-pill shadow-sm\">
                Ajouter le Véhicule
            </button>
        </div>
    </div>

    ";
        // line 97
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
        return "BackOffice/vehicule/new.html.twig";
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
        return array (  265 => 97,  250 => 85,  246 => 84,  242 => 83,  233 => 77,  229 => 76,  225 => 75,  216 => 69,  212 => 68,  208 => 67,  199 => 61,  195 => 60,  191 => 59,  182 => 53,  178 => 52,  174 => 51,  165 => 45,  161 => 44,  157 => 43,  148 => 37,  144 => 36,  140 => 35,  131 => 29,  127 => 28,  123 => 27,  112 => 19,  108 => 18,  105 => 17,  98 => 15,  89 => 13,  85 => 12,  80 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/vehicule/new.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\vehicule\\new.html.twig");
    }
}
