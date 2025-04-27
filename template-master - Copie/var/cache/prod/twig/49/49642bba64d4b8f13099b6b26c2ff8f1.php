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

/* @Recaptcha/form/recaptcha.html.twig */
class __TwigTemplate_e86274944d3b066cbf2eb14ab75cc520 extends Template
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
            'recaptcha_widget' => [$this, 'block_recaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('recaptcha_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_recaptcha_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        // line 5
        yield "        <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" data-toggle=\"recaptcha\" data-type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\">  
        </div>
        <script type=\"text/javascript\">
        /**
         * The callback function executed
         * once all the Google dependencies have loaded
         */
        function onGoogleReCaptchaApiLoad() {
            var widgets = document.querySelectorAll('[data-toggle=\"recaptcha\"]');

            for (var i = 0; i < widgets.length; i++) {
                renderReCaptcha(widgets[i]);
            }
        }

        function renderReCaptcha(widget) {
            var form = widget.closest('form');
            var widgetType = widget.getAttribute('data-type');
            
            var widgetParameters = {
                'sitekey': '";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["google_site_key"] ?? null), "html", null, true);
        yield "'
            };

            if (widgetType == 'invisible') {
                widgetParameters['callback'] = function () {
                    form.submit()
                };
                widgetParameters['size'] = \"invisible\";
            }

            var widgetId = grecaptcha.render(widget, widgetParameters);
            if (widgetType == 'invisible') {
                bindChallengeToSubmitButtons(form, widgetId);
            }
        }
        function bindChallengeToSubmitButtons(form, reCaptchaId) {
            getSubmitButtons(form).forEach(function (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    grecaptcha.execute(reCaptchaId);
                });
            });
        }
        function getSubmitButtons(form) {
            var buttons = form.querySelectorAll('button, input');
            var submitButtons = [];

            for (var i= 0; i < buttons.length; i++) {
                var button = buttons[i];
                if (button.getAttribute('type') == 'submit') {
                    submitButtons.push(button);
                }
            }

            return submitButtons;
        }
    </script>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl=";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "locale", [], "any", false, false, false, 62), "html", null, true);
        yield "\" async defer></script>

    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Recaptcha/form/recaptcha.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  125 => 62,  85 => 25,  59 => 5,  57 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Recaptcha/form/recaptcha.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\vendor\\victor-prdh\\recaptcha-bundle\\src\\Resources\\views\\form\\recaptcha.html.twig");
    }
}
