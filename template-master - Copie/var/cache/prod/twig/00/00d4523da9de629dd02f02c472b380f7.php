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

/* reservation/_form.html.twig */
class __TwigTemplate_607d5b189b4386aa4705870b7ed3f3e8 extends Template
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
        yield "<div class=\"container\">
    ";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateReservation", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de réservation"]);
        yield "
                ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateReservation", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateReservation", [], "any", false, false, false, 8), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureReservation", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de réservation"]);
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureReservation", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control timepicker"]]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureReservation", [], "any", false, false, false, 15), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
    </div>

   
        <div class=\"col-md-6 mb-3\">
            <div class=\"form-group\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vehiculeId", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Véhicule"]);
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vehiculeId", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vehiculeId", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        yield "
            </div>
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save\"></i> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
    </div>
    ";
        // line 35
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
        return "reservation/_form.html.twig";
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
        return array (  111 => 35,  105 => 32,  95 => 25,  91 => 24,  87 => 23,  76 => 15,  72 => 14,  68 => 13,  60 => 8,  56 => 7,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\reservation\\_form.html.twig");
    }
}
