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

/* employe/_form.html.twig */
class __TwigTemplate_1e05c2c933eaa27323a2e9405c0ba0da extends Template
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
            <h4 class=\"mb-1\"><i class=\"fas fa-user-tie me-2\"></i>Employee Information</h4>
            <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Fill in the employee details</p>
        </div>
    </div>

    <div class=\"card-body\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "            <div class=\"alert alert-danger d-flex align-items-center\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "            <div class=\"alert alert-success d-flex align-items-center\">
                <i class=\"fas fa-check-circle me-2\"></i>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 29), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 36), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-envelope text-muted ms-2\"></i>
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 43), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "age", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-birthday-cake text-muted ms-2\"></i>
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "age", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "min" => "18", "max" => "99"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "age", [], "any", false, false, false, 50), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmbauche", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-calendar text-muted ms-2\"></i>
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmbauche", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "min" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
        yield "
                    <div class=\"text-danger\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmbauche", [], "any", false, false, false, 59), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "poste", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-briefcase text-muted ms-2\"></i>
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "poste", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "poste", [], "any", false, false, false, 66), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-phone text-muted ms-2\"></i>
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 73), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "salaire", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-money-bill text-muted ms-2\"></i>
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "salaire", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "step" => "0.01"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "salaire", [], "any", false, false, false, 80), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        yield "
                    <i class=\"fas fa-key text-muted ms-2\"></i>
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "type" => "password", "autocomplete" => "new-password"]]);
        // line 92
        yield "
                    <div class=\"text-danger\">";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 93), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "idService", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-building text-muted ms-2\"></i>
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "idService", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "idService", [], "any", false, false, false, 100), 'errors');
        yield "</div>
                </div>
            </div>
        </div>

        <div class=\"border-top mt-4 pt-3 text-center\">
            <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
        yield "\" class=\"btn btn-light me-2\">
                <i class=\"fas fa-arrow-left me-2\"></i>Back to list
            </a>
            <button type=\"submit\" class=\"btn btn-warning\">
                <i class=\"fas fa-save me-2\"></i>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
        ";
        // line 113
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
        return "employe/_form.html.twig";
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
        return array (  276 => 113,  270 => 110,  263 => 106,  254 => 100,  250 => 99,  245 => 97,  238 => 93,  235 => 92,  233 => 86,  228 => 84,  221 => 80,  217 => 79,  212 => 77,  205 => 73,  201 => 72,  196 => 70,  189 => 66,  185 => 65,  180 => 63,  173 => 59,  169 => 58,  164 => 56,  155 => 50,  151 => 49,  146 => 47,  139 => 43,  135 => 42,  130 => 40,  123 => 36,  119 => 35,  114 => 33,  107 => 29,  103 => 28,  98 => 26,  91 => 22,  88 => 21,  79 => 18,  76 => 17,  72 => 16,  69 => 15,  60 => 12,  57 => 11,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\employe\\_form.html.twig");
    }
}
