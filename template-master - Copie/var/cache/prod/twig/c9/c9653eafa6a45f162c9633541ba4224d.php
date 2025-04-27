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

/* user/DetectFace.html.twig */
class __TwigTemplate_6cde7ee0c242b366f7e5da23489b9622 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseFlogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseFlogin.html.twig", "user/DetectFace.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .face-container {
            position: relative;
            width: 640px;
            margin: 0 auto;
        }
        #video, #canvas {
            position: absolute;
            left: 0;
            top: 0;
        }
        .controls {
            margin-top: 520px;
            text-align: center;
        }
        .face-box {
            border: 2px solid #00ff00;
            position: absolute;
        }
    </style>
";
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center mb-4\">
                <h2>Face Recognition Login</h2>
            </div>
        </div>

        <div class=\"face-container\">
            <video id=\"video\" width=\"640\" height=\"480\" autoplay muted></video>
            <canvas id=\"canvas\" width=\"640\" height=\"480\"></canvas>
            
            <div class=\"controls\">
                <button id=\"captureButton\" class=\"btn btn-primary me-2\">Capture Face</button>
                <button id=\"loginButton\" class=\"btn btn-success\">Login</button>
                <button id=\"registerButton\" class=\"btn btn-info ms-2\">Register Face</button>
            </div>
        </div>

        <div class=\"row mt-4\">
            <div class=\"col-md-12\">
                <div id=\"status\" class=\"alert\" style=\"display: none;\"></div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"registerModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Register Your Face</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"registerForm\">
                        <div class=\"mb-3\">
                            <label for=\"username\" class=\"form-label\">Username</label>
                            <input type=\"text\" class=\"form-control\" id=\"username\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" required>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"saveRegister\">Save</button>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/opencv.js\"></script>
    <script src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/face-login.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/DetectFace.html.twig";
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
        return array (  164 => 83,  158 => 81,  151 => 80,  95 => 27,  88 => 26,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/DetectFace.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\user\\DetectFace.html.twig");
    }
}
