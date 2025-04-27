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

/* BackOffice/carte_grise/show.html.twig */
class __TwigTemplate_65480423e25bd5fbfa2c6e486c935dc8 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "BackOffice/carte_grise/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détail Carte Grise";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-0 d-flex justify-content-between align-items-center py-3\">
                    <div>
                        <h4 class=\"mb-1\">Détails de la Carte Grise</h4>
                        <p class=\"text-muted small mb-0\">Informations complètes de la carte grise</p>
                    </div>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste");
        yield "\" class=\"btn btn-light\">
                        Retour à la liste
                    </a>
                </div>

                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Numéro de Carte Grise</label>
                                <div class=\"h5 mb-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 25), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Propriétaire</label>
                                <div class=\"h5 mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "proprietaire", [], "any", false, false, false, 32), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-12\">
                            <div class=\"bg-light p-3 rounded\">
                                <label class=\"form-label text-muted mb-1\">Adresse du Propriétaire</label>
                                <div class=\"h5 mb-0\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "adresseProprietaire", [], "any", false, false, false, 39), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Date d'Émission</label>
                                <div class=\"h5 mb-0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "DateEmission", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
        yield "</div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"bg-light p-3 rounded h-100\">
                                <label class=\"form-label text-muted mb-1\">Date d'Expiration</label>
                                <div class=\"h5 mb-0\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "DateExpiration", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
        yield "</div>
                                ";
        // line 54
        $context["daysUntilExpiration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "DateExpiration", [], "any", false, false, false, 54)), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 54), "days", [], "any", false, false, false, 54);
        // line 55
        yield "                                ";
        if ((($context["daysUntilExpiration"] ?? null) <= 30)) {
            // line 56
            yield "                                    <div class=\"badge bg-warning text-dark mt-2\">Expire dans ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysUntilExpiration"] ?? null), "html", null, true);
            yield " jours</div>
                                ";
        }
        // line 58
        yield "                            </div>
                        </div>
                    </div>

                    <div class=\"border-top mt-4 pt-4\">
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_edit", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "idCarteGrise", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" 
                               class=\"btn btn-warning\">
                                Modifier
                            </a>
                            <form action=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_griseB_delete", ["idCarteGrise" => CoreExtension::getAttribute($this->env, $this->source, ($context["carte_grise"] ?? null), "idCarteGrise", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\" 
                                  method=\"POST\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette carte grise ?');\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
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
        return "BackOffice/carte_grise/show.html.twig";
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
        return array (  164 => 68,  157 => 64,  149 => 58,  143 => 56,  140 => 55,  138 => 54,  134 => 53,  124 => 46,  114 => 39,  104 => 32,  94 => 25,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "BackOffice/carte_grise/show.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\BackOffice\\carte_grise\\show.html.twig");
    }
}
