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

/* welcomePage/welcome.html.twig */
class __TwigTemplate_59aceb5605bbd523a9554c41156d5559 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcomePage/welcome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcomePage/welcome.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Welcome to Vehify</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        .welcome-container {
            height: 100vh;
            background: linear-gradient(135deg, #0061f2 0%, #6e00ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            position: relative;
        }

        .logo {
            font-size: 3rem;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .welcome-text {
            text-align: center;
            opacity: 0;
        }

        .welcome-text h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 0.8s ease forwards 0.3s;
        }

        .welcome-text p {
            font-size: 1.5rem;
            opacity: 0.9;
            animation: fadeInUp 0.8s ease forwards 0.6s;
        }

        .user-name {
            font-weight: 600;
            color: #ffd700;
        }

        .loading {
            margin-top: 2rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards 0.9s;
        }

        .loading-bar {
            width: 200px;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 2px;
            margin-top: 1rem;
            overflow: hidden;
        }

        .loading-progress {
            width: 0%;
            height: 100%;
            background: #ffd700;
            border-radius: 2px;
            animation: progress 5s linear forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes progress {
            to {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"welcome-container\">
        <div class=\"logo\">
            <i class=\"fas fa-check-circle text-warning\"></i> Vehify
        </div>
        <div class=\"welcome-text\">
            <h1>Welcome, <span class=\"user-name\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 107, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 107, $this->source); })()), "html", null, true);
        yield "</span>!</h1>
            <p>We're preparing your experience...</p>
        </div>
        <div class=\"loading\">
            <div class=\"loading-bar\">
                <div class=\"loading-progress\"></div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = \"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\";
        }, 5500);
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "welcomePage/welcome.html.twig";
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
        return array (  173 => 119,  156 => 107,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Welcome to Vehify</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        .welcome-container {
            height: 100vh;
            background: linear-gradient(135deg, #0061f2 0%, #6e00ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            position: relative;
        }

        .logo {
            font-size: 3rem;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .welcome-text {
            text-align: center;
            opacity: 0;
        }

        .welcome-text h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 0.8s ease forwards 0.3s;
        }

        .welcome-text p {
            font-size: 1.5rem;
            opacity: 0.9;
            animation: fadeInUp 0.8s ease forwards 0.6s;
        }

        .user-name {
            font-weight: 600;
            color: #ffd700;
        }

        .loading {
            margin-top: 2rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards 0.9s;
        }

        .loading-bar {
            width: 200px;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 2px;
            margin-top: 1rem;
            overflow: hidden;
        }

        .loading-progress {
            width: 0%;
            height: 100%;
            background: #ffd700;
            border-radius: 2px;
            animation: progress 5s linear forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes progress {
            to {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class=\"welcome-container\">
        <div class=\"logo\">
            <i class=\"fas fa-check-circle text-warning\"></i> Vehify
        </div>
        <div class=\"welcome-text\">
            <h1>Welcome, <span class=\"user-name\">{{ nom }} {{ prenom }}</span>!</h1>
            <p>We're preparing your experience...</p>
        </div>
        <div class=\"loading\">
            <div class=\"loading-bar\">
                <div class=\"loading-progress\"></div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = \"{{ path('app_home') }}\";
        }, 5500);
    </script>
</body>
</html>", "welcomePage/welcome.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\welcomePage\\welcome.html.twig");
    }
}
