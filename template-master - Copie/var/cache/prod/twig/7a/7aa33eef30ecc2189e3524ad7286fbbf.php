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

/* equipement/_form.html.twig */
class __TwigTemplate_22664591c94ad74fa117af5272c9ef8e extends Template
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
        yield "<div class=\"card border-0 shadow-sm\">
    <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
        <div>
            <h4 class=\"mb-1\"><i class=\"fas fa-tools me-2\"></i>Equipment Form</h4>
            <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Add or modify equipment details</p>
        </div>
    </div>

    <div class=\"card-body\">
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-box text-muted ms-2\"></i>
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter equipment name"]]);
        // line 21
        yield "
                    <div class=\"text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 22), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-align-left text-muted ms-2\"></i>
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter description"]]);
        // line 33
        yield "
                    <div class=\"text-danger\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 34), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-tag text-muted ms-2\"></i>
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select category"]]);
        // line 45
        yield "
                    <div class=\"text-danger\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 46), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-info-circle text-muted ms-2\"></i>
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select status"]]);
        // line 59
        yield "
                    <div class=\"text-danger\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 60), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employe", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employe", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select employee"]]);
        // line 71
        yield "
                    <div class=\"text-danger\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employe", [], "any", false, false, false, 72), 'errors');
        yield "</div>
                </div>
            </div>
        </div>

        <div class=\"border-top mt-4 pt-3 text-center\">
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_index");
        yield "\" class=\"btn btn-light me-2\">
                <i class=\"fas fa-arrow-left me-2\"></i>Back to list
            </a>
            <button type=\"submit\" class=\"btn btn-warning\">
                <i class=\"fas fa-save me-2\"></i>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
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
        return "equipement/_form.html.twig";
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
        return array (  162 => 85,  156 => 82,  149 => 78,  140 => 72,  137 => 71,  135 => 66,  130 => 64,  123 => 60,  120 => 59,  118 => 54,  113 => 52,  104 => 46,  101 => 45,  99 => 40,  94 => 38,  87 => 34,  84 => 33,  82 => 28,  77 => 26,  70 => 22,  67 => 21,  65 => 16,  60 => 14,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "equipement/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\equipement\\_form.html.twig");
    }
}
