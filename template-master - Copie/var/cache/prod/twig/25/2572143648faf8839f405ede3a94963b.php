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

/* service/_form.html.twig */
class __TwigTemplate_c0e3f7683801aa59a6068dbe45c7515a extends Template
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
        // line 1
        $context["active_page"] = "home";
        // line 2
        yield "<div class=\"card\">
    <div class=\"card-header bg-primary text-white\">
        <h3>";
        // line 4
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4), "id_service", [], "any", false, false, false, 4)) ? ("Edit Service") : ("New Service"));
        yield "</h3>
    </div>
    <div class=\"card-body\">
        ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
        <div class=\"row g-3\">
            <div class=\"col-md-6\">
                <div class=\"form-group mb-3\">
                    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Service Name"]);
        yield "
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 12), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 13
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 13), 'errors')) {
            // line 14
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 14), 'errors');
            yield "</div>
                    ";
        }
        // line 16
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Service Type"]);
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 20), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 21
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 21), 'errors')) {
            // line 22
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 22), 'errors');
            yield "</div>
                    ";
        }
        // line 24
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Price (TND)"]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 28), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 29
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 29), 'errors')) {
            // line 30
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 30), 'errors');
            yield "</div>
                    ";
        }
        // line 32
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "gouvernerat", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Region"]);
        yield "
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "gouvernerat", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => ("form-control" . ((        // line 38
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "gouvernerat", [], "any", false, false, false, 38), 'errors')) ? (" is-invalid") : (""))), "onchange" => "updateCoordinates(this.value)", "placeholder" => "Rue de..."]]);
        // line 42
        yield "
                    ";
        // line 43
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "gouvernerat", [], "any", false, false, false, 43), 'errors')) {
            // line 44
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "gouvernerat", [], "any", false, false, false, 44), 'errors');
            yield "</div>
                    ";
        }
        // line 46
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numero", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Phone Number"]);
        yield "
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numero", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numero", [], "any", false, false, false, 50), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 51
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numero", [], "any", false, false, false, 51), 'errors')) {
            // line 52
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numero", [], "any", false, false, false, 52), 'errors');
            yield "</div>
                    ";
        }
        // line 54
        yield "                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group mb-3\">
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureOuverture", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure d'ouverture"]);
        yield "
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureOuverture", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureOuverture", [], "any", false, false, false, 60), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 61
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureOuverture", [], "any", false, false, false, 61), 'errors')) {
            // line 62
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureOuverture", [], "any", false, false, false, 62), 'errors');
            yield "</div>
                    ";
        }
        // line 64
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureFermeture", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de fermeture"]);
        yield "
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureFermeture", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureFermeture", [], "any", false, false, false, 68), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 69
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureFermeture", [], "any", false, false, false, 69), 'errors')) {
            // line 70
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "heureFermeture", [], "any", false, false, false, 70), 'errors');
            yield "</div>
                    ";
        }
        // line 72
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 76), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 77
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 77), 'errors')) {
            // line 78
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 78), 'errors');
            yield "</div>
                    ";
        }
        // line 80
        yield "                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => ("form-control" . (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 84), 'errors')) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 85
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 85), 'errors')) {
            // line 86
            yield "                    <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 86), 'errors');
            yield "</div>
                    ";
        }
        // line 88
        yield "                </div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "latitude", [], "any", false, false, false, 93), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Latitude"]);
        yield "
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "latitude", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        yield "
                            ";
        // line 95
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "latitude", [], "any", false, false, false, 95), 'errors')) {
            // line 96
            yield "                            <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "latitude", [], "any", false, false, false, 96), 'errors');
            yield "</div>
                            ";
        }
        // line 98
        yield "                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group mb-3\">
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "longitude", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Longitude"]);
        yield "
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "longitude", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        yield "
                            ";
        // line 104
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "longitude", [], "any", false, false, false, 104), 'errors')) {
            // line 105
            yield "                            <div class=\"validation-error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "longitude", [], "any", false, false, false, 105), 'errors');
            yield "</div>
                            ";
        }
        // line 107
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"d-grid gap-2 d-md-flex justify-content-md-end mt-4\">
            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_index");
        yield "\" class=\"btn btn-secondary me-2\">Back to list</a>
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        yield "</button>
        </div>
        ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>

<script>
function updateCoordinates(region) {
    if (!region) return;
    
    const searchQuery = `\${region}, Tunisia`;
    const apiUrl = `https://nominatim.openstreetmap.org/search?format=json&q=\${encodeURIComponent(searchQuery)}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data && data.length > 0) {
                const latitude = parseFloat(data[0].lat);
                const longitude = parseFloat(data[0].lon);
                
                document.getElementById('";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "latitude", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
        yield "').value = latitude;
                document.getElementById('";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "longitude", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), "html", null, true);
        yield "').value = longitude;
            }
        })
        .catch(error => console.error('Error fetching coordinates:', error));
}
</script>

<style>
.card {
    border: none !important;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.card-header {
    background-color: white !important;
    border: none !important;
    padding: 1rem 1.5rem !important;
}

.card-header h3 {
    font-size: 1.25rem;
    margin-bottom: 0.25rem;
    color: #333;
}

.bg-primary {
    background-color: white !important;
}

.text-white {
    color: #333 !important;
}

.card-body {
    padding: 1.5rem;
}

.form-group {
    background-color: #f8f9fa !important;
    padding: 1rem !important;
    border-radius: 0.375rem !important;
    margin-bottom: 1rem !important;
}

.form-control {
    border: 1px solid #dee2e6;
    padding: 0.5rem 0.75rem;
    border-radius: 0.25rem;
    height: calc(1.5em + 1rem + 2px);
    transition: all 0.2s ease-in-out;
}

.form-control:focus {
    border-color: #ffc107;
    box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
}

.form-label {
    font-weight: 500;
    color: #495057;
    margin-bottom: 0.5rem;
}

.btn {
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    font-weight: 500;
    transition: all 0.2s ease-in-out;
}

.btn-primary {
    background-color: #ffc107 !important;
    border-color: #ffc107 !important;
    color: #000 !important;
}

.btn-secondary {
    background-color: #f8f9fa !important;
    border-color: #f8f9fa !important;
    color: #333 !important;
}

.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

.validation-error, .text-danger {
    color: #dc3545 !important;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.form-control.is-invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e\");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 1.5rem;
}

.mt-4 {
    margin-top: 2rem !important;
}

.d-grid {
    display: grid !important;
}

.gap-2 {
    gap: 0.5rem !important;
}

.me-2 {
    margin-right: 0.5rem !important;
}

.justify-content-md-end {
    justify-content: flex-end !important;
}

.border-top {
    border-top: 1px solid #dee2e6 !important;
    padding-top: 1rem !important;
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
        return "service/_form.html.twig";
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
        return array (  337 => 136,  333 => 135,  312 => 117,  307 => 115,  303 => 114,  294 => 107,  288 => 105,  286 => 104,  282 => 103,  278 => 102,  272 => 98,  266 => 96,  264 => 95,  260 => 94,  256 => 93,  249 => 88,  243 => 86,  241 => 85,  237 => 84,  233 => 83,  228 => 80,  222 => 78,  220 => 77,  216 => 76,  212 => 75,  207 => 72,  201 => 70,  199 => 69,  195 => 68,  191 => 67,  186 => 64,  180 => 62,  178 => 61,  174 => 60,  170 => 59,  163 => 54,  157 => 52,  155 => 51,  151 => 50,  147 => 49,  142 => 46,  136 => 44,  134 => 43,  131 => 42,  129 => 38,  128 => 36,  124 => 35,  119 => 32,  113 => 30,  111 => 29,  107 => 28,  103 => 27,  98 => 24,  92 => 22,  90 => 21,  86 => 20,  82 => 19,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  61 => 11,  54 => 7,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "service/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\service\\_form.html.twig");
    }
}
