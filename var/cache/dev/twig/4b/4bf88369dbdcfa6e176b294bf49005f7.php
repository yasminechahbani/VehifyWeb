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

/* user/new.html.twig */
class __TwigTemplate_101d097d4954c7ec5dc4a0b0163b2d64 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 1
        yield "
";
        // line 3
        if ((array_key_exists("show_error_popup", $context) && (isset($context["show_error_popup"]) || array_key_exists("show_error_popup", $context) ? $context["show_error_popup"] : (function () { throw new RuntimeError('Variable "show_error_popup" does not exist.', 3, $this->source); })()))) {
            // line 4
            yield "    <div id=\"errorPopup\" class=\"popup-overlay\">
        <div class=\"popup-content\">
            <div class=\"verify-container\">
                <span class=\"verify-text\">Vehify</span>
                <i class=\"fas fa-check-circle tick-icon\"></i>
            </div>
            <div class=\"popup-header\">
                <i class=\"fas fa-exclamation-circle\"></i>
                <h3>Erreur de Vérification</h3>
            </div>
            <p>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "</p>
            <button onclick=\"closePopup()\">
                <i class=\"fas fa-times\"></i> Fermer
            </button>
        </div>
    </div>

    <style>
        .verify-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .verify-text {
            font-size: 2.5em;
            font-weight: bold;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .tick-icon {
            font-size: 2em;
            color: #FFD700;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        .logo-container {
            background: red;
            padding: 10px;
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
        }

        .popup-logo {
            width: 100px;
            height: auto;
            object-fit: contain;
            margin: 0;
        }

        .popup-content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
            text-align: center;
            animation: slideIn 0.3s ease-out;
            position: relative;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        .popup-content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
            text-align: center;
            animation: slideIn 0.3s ease-out;
        }

        .popup-logo {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
        }

        .popup-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .popup-header i {
            color: #dc3545;
            font-size: 24px;
        }

        .popup-content h3 {
            color: #dc3545;
            margin: 0;
            font-size: 1.5em;
        }

        .popup-content p {
            color: #666;
            margin: 15px 0;
            line-height: 1.5;
        }

        .popup-content button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            cursor: pointer;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin: 20px auto 0;
        }

        .popup-content button:hover {
            background-color: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 2px 8px rgba(220, 53, 69, 0.4);
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('container');
            if (container) {
                container.classList.add(\"right-panel-active\");
            }
        });

        function closePopup() {
            const popup = document.getElementById('errorPopup');
            popup.style.opacity = '0';
            popup.style.transform = 'translateY(20px)';
            popup.style.transition = 'all 0.3s ease-out';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 300);
        }

        setTimeout(function() {
            closePopup();
        }, 3000);
    </script>
";
        }
        // line 193
        yield "

";
        // line 195
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 196
        yield "
";
        // line 197
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 195
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 197
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

        // line 198
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_form.html.twig");
        yield "
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
        return "user/new.html.twig";
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
        return array (  304 => 198,  291 => 197,  269 => 195,  258 => 197,  255 => 196,  253 => 195,  249 => 193,  67 => 14,  55 => 4,  53 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{# Add this near the top of your template #}
{% if show_error_popup is defined and show_error_popup %}
    <div id=\"errorPopup\" class=\"popup-overlay\">
        <div class=\"popup-content\">
            <div class=\"verify-container\">
                <span class=\"verify-text\">Vehify</span>
                <i class=\"fas fa-check-circle tick-icon\"></i>
            </div>
            <div class=\"popup-header\">
                <i class=\"fas fa-exclamation-circle\"></i>
                <h3>Erreur de Vérification</h3>
            </div>
            <p>{{ error_message }}</p>
            <button onclick=\"closePopup()\">
                <i class=\"fas fa-times\"></i> Fermer
            </button>
        </div>
    </div>

    <style>
        .verify-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .verify-text {
            font-size: 2.5em;
            font-weight: bold;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .tick-icon {
            font-size: 2em;
            color: #FFD700;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        .logo-container {
            background: red;
            padding: 10px;
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
        }

        .popup-logo {
            width: 100px;
            height: auto;
            object-fit: contain;
            margin: 0;
        }

        .popup-content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
            text-align: center;
            animation: slideIn 0.3s ease-out;
            position: relative;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        .popup-content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
            text-align: center;
            animation: slideIn 0.3s ease-out;
        }

        .popup-logo {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
        }

        .popup-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .popup-header i {
            color: #dc3545;
            font-size: 24px;
        }

        .popup-content h3 {
            color: #dc3545;
            margin: 0;
            font-size: 1.5em;
        }

        .popup-content p {
            color: #666;
            margin: 15px 0;
            line-height: 1.5;
        }

        .popup-content button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            cursor: pointer;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin: 20px auto 0;
        }

        .popup-content button:hover {
            background-color: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 2px 8px rgba(220, 53, 69, 0.4);
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('container');
            if (container) {
                container.classList.add(\"right-panel-active\");
            }
        });

        function closePopup() {
            const popup = document.getElementById('errorPopup');
            popup.style.opacity = '0';
            popup.style.transform = 'translateY(20px)';
            popup.style.transition = 'all 0.3s ease-out';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 300);
        }

        setTimeout(function() {
            closePopup();
        }, 3000);
    </script>
{% endif %}


{% block title %}{% endblock %}

{% block body %}
    {{ include('user/_form.html.twig') }}
{% endblock %}
", "user/new.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\new.html.twig");
    }
}
