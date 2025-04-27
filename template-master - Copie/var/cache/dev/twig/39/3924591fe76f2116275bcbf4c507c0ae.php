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

/* user/face_result.html.twig */
class __TwigTemplate_253089a80b9c7d1f772c628bbdc23ac5 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/face_result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/face_result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/face_result.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Résultat";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-4\">
        <h2>Résultat de la reconnaissance faciale</h2>
        
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 14
        yield "
        ";
        // line 15
        if ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "image_path", [], "any", true, true, false, 16) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 16, $this->source); })()), "image_path", [], "any", false, false, false, 16))) {
                // line 17
                yield "                <div class=\"mb-3\">
                    <img src=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 18, $this->source); })()), "image_path", [], "any", false, false, false, 18)), "html", null, true);
                yield "\" alt=\"Image capturée\" class=\"img-fluid\" style=\"max-width: 300px;\">
                </div>
            ";
            }
            // line 21
            yield "            
            ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "match", [], "any", true, true, false, 22)) {
                // line 23
                yield "                <div class=\"alert ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 23, $this->source); })()), "match", [], "any", false, false, false, 23)) {
                    yield "alert-success";
                } else {
                    yield "alert-warning";
                }
                yield "\">
                    <p>Correspondance : <strong>";
                // line 24
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 24, $this->source); })()), "match", [], "any", false, false, false, 24)) ? ("Oui") : ("Non"));
                yield "</strong></p>
                    ";
                // line 25
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "confidence", [], "any", true, true, false, 25)) {
                    // line 26
                    yield "                        <p>Niveau de confiance : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 26, $this->source); })()), "confidence", [], "any", false, false, false, 26) * 100), 2), "html", null, true);
                    yield "%</p>
                    ";
                }
                // line 28
                yield "                </div>
            ";
            }
            // line 30
            yield "        ";
        }
        // line 31
        yield "        
        <div class=\"mt-3\">
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_face_camera");
        yield "\" class=\"btn btn-primary\">Réessayer</a>
            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary\">Retour à l'accueil</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/face_result.html.twig";
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
        return array (  174 => 34,  170 => 33,  166 => 31,  163 => 30,  159 => 28,  153 => 26,  151 => 25,  147 => 24,  138 => 23,  136 => 22,  133 => 21,  127 => 18,  124 => 17,  121 => 16,  119 => 15,  116 => 14,  110 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultat{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h2>Résultat de la reconnaissance faciale</h2>
        
        {% if error %}
            <div class=\"alert alert-danger\">
                {{ error }}
            </div>
        {% endif %}

        {% if result %}
            {% if result.image_path is defined and result.image_path %}
                <div class=\"mb-3\">
                    <img src=\"{{ asset(result.image_path) }}\" alt=\"Image capturée\" class=\"img-fluid\" style=\"max-width: 300px;\">
                </div>
            {% endif %}
            
            {% if result.match is defined %}
                <div class=\"alert {% if result.match %}alert-success{% else %}alert-warning{% endif %}\">
                    <p>Correspondance : <strong>{{ result.match ? 'Oui' : 'Non' }}</strong></p>
                    {% if result.confidence is defined %}
                        <p>Niveau de confiance : {{ (result.confidence * 100)|round(2) }}%</p>
                    {% endif %}
                </div>
            {% endif %}
        {% endif %}
        
        <div class=\"mt-3\">
            <a href=\"{{ path('app_face_camera') }}\" class=\"btn btn-primary\">Réessayer</a>
            <a href=\"{{ path('app_home') }}\" class=\"btn btn-secondary\">Retour à l'accueil</a>
        </div>
    </div>
{% endblock %}
", "user/face_result.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\face_result.html.twig");
    }
}
