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

/* stripe/index.html.twig */
class __TwigTemplate_0542364539780c6a0bcac3c461144f84 extends Template
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
        return "baseFhomePage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        // line 3
        $context["active_page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "stripe/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Paiement pour votre réservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">Paiement pour votre réservation</h4>
                </div>
                <div class=\"card-body\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "                        <div class=\"alert alert-success\">
                            ";
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
                    <div class=\"mb-4\">
                        <h5>Détails de la réservation</h5>
                        <p><strong>Service:</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                        <p><strong>Date:</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "dateReservation", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
        yield "</p>
                        <p><strong>Heure:</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "heureReservation", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                        <p><strong>Montant à payer:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new RuntimeError('Variable "montant" does not exist.', 27, $this->source); })()) / 100), "html", null, true);
        yield " €</p>
                    </div>

                    <form id='checkout-form' method='post' action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge");
        yield "\">             
                        <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                        <label for=\"card-element\" class=\"form-label\">Informations de paiement</label>
                        <div id=\"card-element\" class=\"form-control mb-3\" ></div>
                        <div id=\"card-errors\" class=\"text-danger mb-3\"></div>
                        <button 
                            id='pay-btn'
                            class=\"btn btn-primary w-100 py-2\"
                            type=\"button\"
                            onclick=\"createToken()\">Payer ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new RuntimeError('Variable "montant" does not exist.', 39, $this->source); })()) / 100), "html", null, true);
        yield " €
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "\");
        var elements = stripe.elements();
        var cardElement = elements.create('card', {
            style: {
                base: {
                    fontSize: '16px',
                    color: '#32325d',
                    fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            }
        });
        cardElement.mount('#card-element');
        
        // Gérer les erreurs de validation en temps réel
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            document.getElementById(\"pay-btn\").textContent = \"Traitement en cours...\";
            
            stripe.createToken(cardElement).then(function(result) {
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    document.getElementById(\"pay-btn\").textContent = \"Payer ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new RuntimeError('Variable "montant" does not exist.', 87, $this->source); })()) / 100), "html", null, true);
        yield " €\";
                    document.getElementById('card-errors').textContent = result.error.message;
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
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
        return "stripe/index.html.twig";
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
        return array (  218 => 87,  178 => 50,  164 => 39,  152 => 30,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  129 => 21,  120 => 18,  117 => 17,  113 => 16,  103 => 8,  90 => 7,  67 => 5,  56 => 1,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFhomePage.html.twig' %}

{% set active_page = 'home' %}

{% block title %}Paiement pour votre réservation{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">Paiement pour votre réservation</h4>
                </div>
                <div class=\"card-body\">
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    
                    <div class=\"mb-4\">
                        <h5>Détails de la réservation</h5>
                        <p><strong>Service:</strong> {{ service.nom }}</p>
                        <p><strong>Date:</strong> {{ reservation.dateReservation|date('d/m/Y') }}</p>
                        <p><strong>Heure:</strong> {{ reservation.heureReservation }}</p>
                        <p><strong>Montant à payer:</strong> {{ montant / 100 }} €</p>
                    </div>

                    <form id='checkout-form' method='post' action=\"{{ path('app_stripe_charge') }}\">             
                        <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                        <label for=\"card-element\" class=\"form-label\">Informations de paiement</label>
                        <div id=\"card-element\" class=\"form-control mb-3\" ></div>
                        <div id=\"card-errors\" class=\"text-danger mb-3\"></div>
                        <button 
                            id='pay-btn'
                            class=\"btn btn-primary w-100 py-2\"
                            type=\"button\"
                            onclick=\"createToken()\">Payer {{ montant / 100 }} €
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"{{stripe_key}}\");
        var elements = stripe.elements();
        var cardElement = elements.create('card', {
            style: {
                base: {
                    fontSize: '16px',
                    color: '#32325d',
                    fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            }
        });
        cardElement.mount('#card-element');
        
        // Gérer les erreurs de validation en temps réel
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            document.getElementById(\"pay-btn\").textContent = \"Traitement en cours...\";
            
            stripe.createToken(cardElement).then(function(result) {
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    document.getElementById(\"pay-btn\").textContent = \"Payer {{ montant / 100 }} €\";
                    document.getElementById('card-errors').textContent = result.error.message;
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
{% endblock %}", "stripe/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\stripe\\index.html.twig");
    }
}
