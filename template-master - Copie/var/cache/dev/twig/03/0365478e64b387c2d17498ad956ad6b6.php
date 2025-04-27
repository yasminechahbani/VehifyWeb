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

/* carte_grise/_form.html.twig */
class __TwigTemplate_db8059a37caf3c2d1b056f87ba8d07e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_grise/_form.html.twig"));

        // line 1
        yield "


";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
    <div class=\"row g-3\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 8), 'label');
        yield "
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "valid", [], "any", false, false, false, 11)) ? ("") : (" is-invalid"))), "placeholder" => "Entrez le numéro"]]);
        // line 14
        yield "
                ";
        // line 15
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)) > 0)) {
            // line 16
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "numeroCarteGrise", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                    </div>
                ";
        }
        // line 22
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "proprietaire", [], "any", false, false, false, 27), 'label');
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "proprietaire", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "proprietaire", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "valid", [], "any", false, false, false, 30)) ? ("") : (" is-invalid"))), "placeholder" => "Nom du propriétaire"]]);
        // line 33
        yield "
                ";
        // line 34
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "proprietaire", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34)) > 0)) {
            // line 35
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "proprietaire", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 37
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 37), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "                    </div>
                ";
        }
        // line 41
        yield "            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 46), 'label');
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "valid", [], "any", false, false, false, 49)) ? ("") : (" is-invalid"))), "placeholder" => "Adresse complète"]]);
        // line 52
        yield "
                ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "adresseProprietaire", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 56
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 56), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                    </div>
                ";
        }
        // line 60
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "dateEmission", [], "any", false, false, false, 65), 'label');
        yield "
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "dateEmission", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => ("form-control datepicker" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 68
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "dateEmission", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "valid", [], "any", false, false, false, 68)) ? ("") : (" is-invalid"))), "placeholder" => "JJ/MM/AAAA"]]);
        // line 71
        yield "
                ";
        // line 72
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "dateEmission", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72)) > 0)) {
            // line 73
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "dateEmission", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 75), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                    </div>
                ";
        }
        // line 79
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "dateExpiration", [], "any", false, false, false, 84), 'label');
        yield "
                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "dateExpiration", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => ("form-control datepicker" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "dateExpiration", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "valid", [], "any", false, false, false, 87)) ? ("") : (" is-invalid"))), "placeholder" => "JJ/MM/AAAA"]]);
        // line 90
        yield "
                ";
        // line 91
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "dateExpiration", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91)) > 0)) {
            // line 92
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "dateExpiration", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 94
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 94), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                    </div>
                ";
        }
        // line 98
        yield "            </div>
        </div>

        <div class=\"col-12 mt-4\">
            <button type=\"submit\" class=\"btn btn-primary me-2\">
                <i class=\"fas fa-save me-1\"></i> Enregistrer
            </button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-undo me-1\"></i> Réinitialiser
            </button>
        </div>
    </div>
";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "carte_grise/_form.html.twig";
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
        return array (  262 => 110,  248 => 98,  244 => 96,  235 => 94,  231 => 93,  228 => 92,  226 => 91,  223 => 90,  221 => 87,  220 => 85,  216 => 84,  209 => 79,  205 => 77,  196 => 75,  192 => 74,  189 => 73,  187 => 72,  184 => 71,  182 => 68,  181 => 66,  177 => 65,  170 => 60,  166 => 58,  157 => 56,  153 => 55,  150 => 54,  148 => 53,  145 => 52,  143 => 49,  142 => 47,  138 => 46,  131 => 41,  127 => 39,  118 => 37,  114 => 36,  111 => 35,  109 => 34,  106 => 33,  104 => 30,  103 => 28,  99 => 27,  92 => 22,  88 => 20,  79 => 18,  75 => 17,  72 => 16,  70 => 15,  67 => 14,  65 => 11,  64 => 9,  60 => 8,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("


{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
    <div class=\"row g-3\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.numeroCarteGrise) }}
                {{ form_widget(form.numeroCarteGrise, {
                    'attr': {
                        'class': 'form-control' ~ (form.numeroCarteGrise.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Entrez le numéro'
                    }
                }) }}
                {% if form.numeroCarteGrise.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.numeroCarteGrise.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.proprietaire) }}
                {{ form_widget(form.proprietaire, {
                    'attr': {
                        'class': 'form-control' ~ (form.proprietaire.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Nom du propriétaire'
                    }
                }) }}
                {% if form.proprietaire.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.proprietaire.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                {{ form_label(form.adresseProprietaire) }}
                {{ form_widget(form.adresseProprietaire, {
                    'attr': {
                        'class': 'form-control' ~ (form.adresseProprietaire.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Adresse complète'
                    }
                }) }}
                {% if form.adresseProprietaire.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.adresseProprietaire.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.dateEmission) }}
                {{ form_widget(form.dateEmission, {
                    'attr': {
                        'class': 'form-control datepicker' ~ (form.dateEmission.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'JJ/MM/AAAA'
                    }
                }) }}
                {% if form.dateEmission.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.dateEmission.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.dateExpiration) }}
                {{ form_widget(form.dateExpiration, {
                    'attr': {
                        'class': 'form-control datepicker' ~ (form.dateExpiration.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'JJ/MM/AAAA'
                    }
                }) }}
                {% if form.dateExpiration.vars.errors|length > 0 %}
                    <div class=\"invalid-feedback d-block\">
                        {% for error in form.dateExpiration.vars.errors %}
                            {{ error.message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-12 mt-4\">
            <button type=\"submit\" class=\"btn btn-primary me-2\">
                <i class=\"fas fa-save me-1\"></i> Enregistrer
            </button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-undo me-1\"></i> Réinitialiser
            </button>
        </div>
    </div>
{{ form_end(form) }}", "carte_grise/_form.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\carte_grise\\_form.html.twig");
    }
}
