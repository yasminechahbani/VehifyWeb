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
class __TwigTemplate_0718c154027a9a22b2a58eae3b6025b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/_form.html.twig"));

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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-box text-muted ms-2\"></i>
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter equipment name"]]);
        // line 21
        yield "
                    <div class=\"text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-align-left text-muted ms-2\"></i>
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter description"]]);
        // line 33
        yield "
                    <div class=\"text-danger\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "categorie", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-tag text-muted ms-2\"></i>
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "categorie", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select category"]]);
        // line 45
        yield "
                    <div class=\"text-danger\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "categorie", [], "any", false, false, false, 46), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "etat", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-info-circle text-muted ms-2\"></i>
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "etat", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select status"]]);
        // line 59
        yield "
                    <div class=\"text-danger\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "etat", [], "any", false, false, false, 60), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "employe", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "employe", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select employee"]]);
        // line 71
        yield "
                    <div class=\"text-danger\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "employe", [], "any", false, false, false, 72), 'errors');
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 82, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
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
        return array (  168 => 85,  162 => 82,  155 => 78,  146 => 72,  143 => 71,  141 => 66,  136 => 64,  129 => 60,  126 => 59,  124 => 54,  119 => 52,  110 => 46,  107 => 45,  105 => 40,  100 => 38,  93 => 34,  90 => 33,  88 => 28,  83 => 26,  76 => 22,  73 => 21,  71 => 16,  66 => 14,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card border-0 shadow-sm\">
    <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
        <div>
            <h4 class=\"mb-1\"><i class=\"fas fa-tools me-2\"></i>Equipment Form</h4>
            <p class=\"text-muted small mb-0\"><i class=\"fas fa-info-circle me-2\"></i>Add or modify equipment details</p>
        </div>
    </div>

    <div class=\"card-body\">
        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    {{ form_label(form.nom, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-box text-muted ms-2\"></i>
                    {{ form_widget(form.nom, {
                        'attr': {
                            'class': 'form-control',
                            'placeholder': 'Enter equipment name'
                        }
                    }) }}
                    <div class=\"text-danger\">{{ form_errors(form.nom) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.description, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-align-left text-muted ms-2\"></i>
                    {{ form_widget(form.description, {
                        'attr': {
                            'class': 'form-control',
                            'placeholder': 'Enter description'
                        }
                    }) }}
                    <div class=\"text-danger\">{{ form_errors(form.description) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.categorie, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-tag text-muted ms-2\"></i>
                    {{ form_widget(form.categorie, {
                        'attr': {
                            'class': 'form-control',
                            'placeholder': 'Select category'
                        }
                    }) }}
                    <div class=\"text-danger\">{{ form_errors(form.categorie) }}</div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group bg-light p-3 rounded\">
                    {{ form_label(form.etat, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-info-circle text-muted ms-2\"></i>
                    {{ form_widget(form.etat, {
                        'attr': {
                            'class': 'form-control',
                            'placeholder': 'Select status'
                        }
                    }) }}
                    <div class=\"text-danger\">{{ form_errors(form.etat) }}</div>
                </div>

                <div class=\"form-group bg-light p-3 rounded mt-3\">
                    {{ form_label(form.employe, null, {'label_attr': {'class': 'form-label'}}) }}
                    <i class=\"fas fa-user text-muted ms-2\"></i>
                    {{ form_widget(form.employe, {
                        'attr': {
                            'class': 'form-select',
                            'placeholder': 'Select employee'
                        }
                    }) }}
                    <div class=\"text-danger\">{{ form_errors(form.employe) }}</div>
                </div>
            </div>
        </div>

        <div class=\"border-top mt-4 pt-3 text-center\">
            <a href=\"{{ path('app_equipement_index') }}\" class=\"btn btn-light me-2\">
                <i class=\"fas fa-arrow-left me-2\"></i>Back to list
            </a>
            <button type=\"submit\" class=\"btn btn-warning\">
                <i class=\"fas fa-save me-2\"></i>{{ button_label|default('Save') }}
            </button>
        </div>
        {{ form_end(form) }}
    </div>
</div>
", "equipement/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\equipement\\_form.html.twig");
    }
}
