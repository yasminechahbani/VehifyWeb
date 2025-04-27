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

/* carte_grise/new.html.twig */
class __TwigTemplate_6f0e265216dde5eabc3e5a3751dfce2a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $context["active_page"] = "Carte Grise";
        // line 1
        $this->parent = $this->loadTemplate("baseFhomePage.html.twig", "carte_grise/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Nouvelle Carte Grise";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        .flatpickr-input {
            background-color: white;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "<!-- Page Header Start -->
    <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-bg-1.jpg"), "html", null, true);
        yield ");\">
        <div class=\"container-fluid page-header-inner py-5\">
            <div class=\"container text-center\">
                <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Nouvelle Carte Grise</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center text-uppercase\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_index");
        yield "\">Cartes Grises</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Nouveau
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">

                ";
        // line 44
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 45
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 46
                yield "                        <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : (((($context["label"] == "success")) ? ("success") : ("info"))));
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h1 class=\"h3 mb-0\">Créer une nouvelle Carte Grise</h1>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "carte_grise/_form.html.twig");
        yield "
                    </div>
                    <div class=\"card-footer text-end\">
                        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_grise_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const baseConfig = {
                locale: \"fr\",
                dateFormat: \"d/m/Y\",
                allowInput: true,
                altInput: true,
                altFormat: \"j F Y\",
                static: true
            };

            const dateEmission = flatpickr(\"#carte_grise1_dateEmission\", {
                ...baseConfig,
                minDate: \"today\",
                onChange: function(selectedDates) {
                    if (selectedDates.length > 0) {
                        dateExpiration.set('minDate', selectedDates[0]);
                    }
                }
            });

            const dateExpiration = flatpickr(\"#carte_grise1_dateExpiration\", {
                ...baseConfig,
                minDate: \"today\"
            });

            const resetBtn = document.querySelector('.btn-reset');
            if (resetBtn) {
                resetBtn.addEventListener('click', function() {
                    dateEmission.clear();
                    dateExpiration.clear();
                });
            }
        });
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "carte_grise/new.html.twig";
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
        return array (  200 => 73,  193 => 72,  178 => 61,  172 => 58,  164 => 52,  158 => 51,  148 => 47,  143 => 46,  138 => 45,  133 => 44,  116 => 29,  112 => 28,  103 => 22,  100 => 21,  93 => 20,  75 => 7,  68 => 6,  57 => 4,  52 => 1,  50 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "carte_grise/new.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\carte_grise\\new.html.twig");
    }
}
