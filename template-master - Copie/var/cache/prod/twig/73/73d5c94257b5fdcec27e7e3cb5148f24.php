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

/* vehicule/edit.html.twig */
class __TwigTemplate_d846b7dfc3e8618b3895c92fd5d470ed extends Template
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
        // line 2
        $context["active_page"] = "vehicules";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "vehicule/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier le véhicule";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg rounded-3\">
                <div class=\"card-header bg-primary p-4 border-0\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"text-white\">
                            <h3 class=\"h4 mb-1\">Modifier le véhicule</h3>
                            <p class=\"mb-0 small\">Mettez à jour les informations du véhicule</p>
                        </div>
                        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\" class=\"btn btn-light btn-sm\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                    </div>
                </div>

                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary-subtle mb-3\">
                            <i class=\"fas fa-car fa-2x text-primary\"></i>
                        </div>
                    </div>

                    ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "vehicule/_form.html.twig", ["button_label" => "Enregistrer les modifications", "button_class" => "btn-primary btn-lg w-100"]);
        // line 33
        yield "

                    <div class=\"d-flex justify-content-between align-items-center mt-4 pt-3 border-top\">
                        <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-list me-2\"></i>Liste des véhicules
                        </a>
                        ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "vehicule/_delete_form.html.twig");
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.bg-primary-subtle {
    background-color: rgba(13, 110, 253, 0.1);
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0a58ca;
}

.btn-outline-primary {
    color: #0d6efd;
    border-color: #0d6efd;
}

.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
}

.card {
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vehicule/edit.html.twig";
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
        return array (  114 => 39,  108 => 36,  103 => 33,  101 => 30,  85 => 17,  73 => 7,  66 => 6,  55 => 4,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "vehicule/edit.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\vehicule\\edit.html.twig");
    }
}
