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
class __TwigTemplate_40a67c85fabe1be35c152c0fced3df27 extends Template
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
        // line 3
        $context["active_page"] = "home";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "stripe/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Paiement pour votre réservation";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 16));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "nom", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                        <p><strong>Date:</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "dateReservation", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
        yield "</p>
                        <p><strong>Heure:</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "heureReservation", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                        <p><strong>Montant à payer:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["montant"] ?? null) / 100), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["montant"] ?? null) / 100), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["stripe_key"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["montant"] ?? null) / 100), "html", null, true);
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
        return array (  188 => 87,  148 => 50,  134 => 39,  122 => 30,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  99 => 21,  90 => 18,  87 => 17,  83 => 16,  73 => 8,  66 => 7,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "stripe/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\stripe\\index.html.twig");
    }
}
