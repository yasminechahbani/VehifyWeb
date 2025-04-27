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

/* permis/index.html.twig */
class __TwigTemplate_7efa4f3931d4265942f5927d34a90ae2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "permis/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Permis index";
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
        yield "<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
    <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
        <h2 class=\"m-0 text-primary\"><i class=\"fa fa-car me-3\"></i>CarServ</h2>
    </a>
    <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
            <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_permisAll");
        yield "\" class=\"nav-item nav-link\">License</a>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_generate");
        yield "\" class=\"nav-item nav-link\">Quiz</a>
            <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
            <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                <div class=\"dropdown-menu fade-up m-0\">
                    <a href=\"booking.html\" class=\"dropdown-item\">Booking</a>
                    <a href=\"team.html\" class=\"dropdown-item\">Technicians</a>
                    <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                    <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                </div>
            </div>
            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
        </div>
        <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Get A Quote<i class=\"fa fa-arrow-right ms-3\"></i></a>
    </div>
</nav>

<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto mb-5\" style=\"max-width: 600px;\">
            <h1 class=\"display-5 mb-0\">Driver's Licenses</h1>
            <hr class=\"w-25 mx-auto bg-primary\">
        </div>

        <div class=\"d-flex justify-content-between mb-4\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_permis");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fa fa-plus me-2\"></i>Create New License
            </a>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped table-hover\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>License Number</th>
                        <th>Category</th>
                        <th>Issue Date</th>
                        <th>Expiration Date</th>
                        <th>Status</th>
                        <th class=\"text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["permis"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["permi"]) {
            // line 62
            yield "                    <tr>
                        <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "numeroPermis", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                        <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "categorie", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                        <td>";
            // line 65
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateDelivrance", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateDelivrance", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateExpiration", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "dateExpiration", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>
                            <span class=\"badge bg-";
            // line 68
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "etat", [], "any", false, false, false, 68) == "Valid")) ? ("success") : ("danger"));
            yield "\">
                                ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "etat", [], "any", false, false, false, 69), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"text-center\">
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_permisOne", ["id_permis" => CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "idPermis", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-sm btn-info me-1\">
                                    <i class=\"fa fa-eye\"></i> Show
                                </a>
                                <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_permisOne", ["id_permis" => CoreExtension::getAttribute($this->env, $this->source, $context["permi"], "idPermis", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-sm btn-warning\">
                                    <i class=\"fa fa-edit\"></i> Edit
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 85
        if (!$context['_iterated']) {
            // line 86
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['permi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                </tbody>
            </table>
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
        return "permis/index.html.twig";
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
        return array (  203 => 90,  194 => 86,  192 => 85,  180 => 78,  173 => 74,  165 => 69,  161 => 68,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  141 => 62,  136 => 61,  115 => 43,  86 => 17,  82 => 16,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "permis/index.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\permis\\index.html.twig");
    }
}
