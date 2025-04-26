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

/* components/avatars.html.twig */
class __TwigTemplate_ed58eb5e92b1f3408b609291bc2b25fa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "components/avatars.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Avatars - Kaiadmin Bootstrap 5 Admin Dashboard";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container\">
    <div class=\"page-inner\">
        <div class=\"page-header\">
            <h3 class=\"fw-bold mb-3\">Avatars</h3>
            <ul class=\"breadcrumbs mb-3\">
                <li class=\"nav-home\">
                    <a href=\"#\">
                        <i class=\"icon-home\"></i>
                    </a>
                </li>
                <li class=\"separator\">
                    <i class=\"icon-arrow-right\"></i>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\">Base</a>
                </li>
                <li class=\"separator\">
                    <i class=\"icon-arrow-right\"></i>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\">Avatars</a>
                </li>
            </ul>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Sizing</h4>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"demo\">
                            <div class=\"avatar avatar-xxl\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>

                            <div class=\"avatar avatar-xl\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>

                            <div class=\"avatar avatar-lg\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>

                            <div class=\"avatar\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>

                            <div class=\"avatar avatar-sm\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>

                            <div class=\"avatar avatar-xs\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Status Indicator</h4>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"demo\">
                            <div class=\"avatar avatar-online\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>

                            <div class=\"avatar avatar-offline\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>

                            <div class=\"avatar avatar-away\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Shape</h4>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"demo\">
                            <div class=\"avatar\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded\">
                            </div>

                            <div class=\"avatar\">
                                <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle\">
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Group</h4>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"demo\">
                            <div class=\"avatar-group\">
                                <div class=\"avatar\">
                                    <img src=\"../assets/img/jm_denis.jpg\" alt=\"...\" class=\"avatar-img rounded-circle border border-white\">
                                </div>
                                <div class=\"avatar\">
                                    <img src=\"../assets/img/chadengle.jpg\" alt=\"...\" class=\"avatar-img rounded-circle border border-white\">
                                </div>
                                <div class=\"avatar\">
                                    <img src=\"../assets/img/mlane.jpg\" alt=\"...\" class=\"avatar-img rounded-circle border border-white\">
                                </div>
                                <div class=\"avatar\">
                                    <span class=\"avatar-title rounded-circle border border-white\">CF</span>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/avatars.html.twig";
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
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/avatars.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\components\\avatars.html.twig");
    }
}
