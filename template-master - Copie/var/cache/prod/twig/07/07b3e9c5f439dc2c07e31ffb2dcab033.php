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

/* paiement/_form.html.twig */
class __TwigTemplate_ee9d6081d51dc0d704b45e92ed6f083a extends Template
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
        $context["active_page"] = "home";
        // line 2
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Ajouter un paiement</h1>

    <div class=\"alert alert-warning mb-4\" role=\"alert\">
        La saisie automatique des modes de paiement est désactivée, car la connexion utilisée par ce formulaire n'est pas sécurisée.
    </div>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réservation"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", false, false, false, 15), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", false, false, false, 16), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "datePaiement", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de paiement"]);
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "datePaiement", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "datePaiement", [], "any", false, false, false, 21), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "datePaiement", [], "any", false, false, false, 22), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Montant"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 27), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 28), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield "
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => ("form-select" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 35), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 36), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarte", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Numéro de carte"]);
        yield "
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarte", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarte", [], "any", false, false, false, 41), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarte", [], "any", false, false, false, 42), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date d'expiration"]);
        yield "
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 47), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 48), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"row mb-3\">
                <div class=\"col-md-4\">
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cvv", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "CVV"]);
        yield "
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cvv", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cvv", [], "any", false, false, false, 55), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cvv", [], "any", false, false, false, 56), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nomTitulaireCarte", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du titulaire"]);
        yield "
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nomTitulaireCarte", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nomTitulaireCarte", [], "any", false, false, false, 61), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nomTitulaireCarte", [], "any", false, false, false, 62), 'errors');
        yield "</div>
                </div>

                <div class=\"col-md-4\">
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 67), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    <div class=\"invalid-feedback\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"mt-3\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
    </div>
    ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "paiement/_form.html.twig";
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
        return array (  208 => 77,  203 => 75,  193 => 68,  189 => 67,  185 => 66,  178 => 62,  174 => 61,  170 => 60,  163 => 56,  159 => 55,  155 => 54,  146 => 48,  142 => 47,  138 => 46,  131 => 42,  127 => 41,  123 => 40,  116 => 36,  112 => 35,  108 => 34,  99 => 28,  95 => 27,  91 => 26,  84 => 22,  80 => 21,  76 => 20,  69 => 16,  65 => 15,  61 => 14,  53 => 9,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "paiement/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\paiement\\_form.html.twig");
    }
}
