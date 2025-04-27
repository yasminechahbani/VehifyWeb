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
class __TwigTemplate_115c3006b1836fb4ed602ea4a7d0007f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/_form.html.twig"));

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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["error"], "method", false, false, false, 10));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-envelope text-muted ms-2\"></i>
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "age", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-birthday-cake text-muted ms-2\"></i>
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "age", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "min" => "18", "max" => "99"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "age", [], "any", false, false, false, 50), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-calendar text-muted ms-2\"></i>
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "min" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
        yield "
                    <div class=\"text-danger\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 59), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "poste", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-briefcase text-muted ms-2\"></i>
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "poste", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "poste", [], "any", false, false, false, 66), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "tel", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-phone text-muted ms-2\"></i>
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "tel", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "tel", [], "any", false, false, false, 73), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "salaire", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-money-bill text-muted ms-2\"></i>
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "salaire", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "step" => "0.01"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "salaire", [], "any", false, false, false, 80), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "statut", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        yield "
                    <i class=\"fas fa-key text-muted ms-2\"></i>
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "statut", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "type" => "password", "autocomplete" => "new-password"]]);
        // line 92
        yield "
                    <div class=\"text-danger\">";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "statut", [], "any", false, false, false, 93), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "idService", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-building text-muted ms-2\"></i>
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "idService", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    <div class=\"text-danger\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "idService", [], "any", false, false, false, 100), 'errors');
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 110, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
        ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  282 => 113,  276 => 110,  269 => 106,  260 => 100,  256 => 99,  251 => 97,  244 => 93,  241 => 92,  239 => 86,  234 => 84,  227 => 80,  223 => 79,  218 => 77,  211 => 73,  207 => 72,  202 => 70,  195 => 66,  191 => 65,  186 => 63,  179 => 59,  175 => 58,  170 => 56,  161 => 50,  157 => 49,  152 => 47,  145 => 43,  141 => 42,  136 => 40,  129 => 36,  125 => 35,  120 => 33,  113 => 29,  109 => 28,  104 => 26,  97 => 22,  94 => 21,  85 => 18,  82 => 17,  78 => 16,  75 => 15,  66 => 12,  63 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card border-0 shadow-sm\">
    <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
        <div>
            <h4 class=\"mb-1\"><i class=\"fas fa-user-tie me-2\"></i>Employee Information</h4>
            <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Fill in the employee details</p>
        </div>
    </div>

    <div class=\"card-body\">
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger d-flex align-items-center\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>{{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success d-flex align-items-center\">
                <i class=\"fas fa-check-circle me-2\"></i>{{ message }}
            </div>
        {% endfor %}

        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    {{ form_label(form.nom, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.nom) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.prenom, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.prenom) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.email, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-envelope text-muted ms-2\"></i>
                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.email) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.age, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-birthday-cake text-muted ms-2\"></i>
                    {{ form_widget(form.age, {'attr': {'class': 'form-control', 'min': '18', 'max': '99'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.age) }}</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    {{ form_label(form.dateEmbauche, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-calendar text-muted ms-2\"></i>
                    {{ form_widget(form.dateEmbauche, {'attr': {'class': 'form-control', 'min': \"now\"|date(\"Y-m-d\")}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.dateEmbauche) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.poste, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-briefcase text-muted ms-2\"></i>
                    {{ form_widget(form.poste, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.poste) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.tel, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-phone text-muted ms-2\"></i>
                    {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.tel) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.salaire, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-money-bill text-muted ms-2\"></i>
                    {{ form_widget(form.salaire, {'attr': {'class': 'form-control', 'step': '0.01'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.salaire) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.statut, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-key text-muted ms-2\"></i>
                    {{ form_widget(form.statut, {
                        'attr': {
                            'class': 'form-control',
                            'type': 'password',
                            'autocomplete': 'new-password'
                        }
                    }) }}
                    <div class=\"text-danger\">{{ form_errors(form.statut) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.idService, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-building text-muted ms-2\"></i>
                    {{ form_widget(form.idService, {'attr': {'class': 'form-select'}}) }}
                    <div class=\"text-danger\">{{ form_errors(form.idService) }}</div>
                </div>
            </div>
        </div>

        <div class=\"border-top mt-4 pt-3 text-center\">
            <a href=\"{{ path('app_employe_index') }}\" class=\"btn btn-light me-2\">
                <i class=\"fas fa-arrow-left me-2\"></i>Back to list
            </a>
            <button type=\"submit\" class=\"btn btn-warning\">
                <i class=\"fas fa-save me-2\"></i>{{ button_label|default('Save') }}
            </button>
        </div>
        {{ form_end(form) }}
    </div>
</div>
", "employe/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\employe\\_form.html.twig");
    }
}
