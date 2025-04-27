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

/* carte_grise/_form.html.twig */
class __TwigTemplate_8100f2a6c8d2a85856101225d5e3f456 extends Template
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
        yield "


";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
    <div class=\"row g-3\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 8), 'label');
        yield "
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "valid", [], "any", false, false, false, 11)) ? ("") : (" is-invalid"))), "placeholder" => "Entrez le numéro"]]);
        // line 14
        yield "
                ";
        // line 15
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)) > 0)) {
            // line 16
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numeroCarteGrise", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                    </div>
                ";
        }
        // line 22
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 27), 'label');
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "valid", [], "any", false, false, false, 30)) ? ("") : (" is-invalid"))), "placeholder" => "Nom du propriétaire"]]);
        // line 33
        yield "
                ";
        // line 34
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34)) > 0)) {
            // line 35
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "proprietaire", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 37
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 37), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "                    </div>
                ";
        }
        // line 41
        yield "            </div>
        </div>

        <div class=\"col-12\">
            <div class=\"form-group\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 46), 'label');
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "valid", [], "any", false, false, false, 49)) ? ("") : (" is-invalid"))), "placeholder" => "Adresse complète"]]);
        // line 52
        yield "
                ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adresseProprietaire", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 56
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 56), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                    </div>
                ";
        }
        // line 60
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 65), 'label');
        yield "
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => ("form-control datepicker" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "valid", [], "any", false, false, false, 68)) ? ("") : (" is-invalid"))), "placeholder" => "JJ/MM/AAAA"]]);
        // line 71
        yield "
                ";
        // line 72
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72)) > 0)) {
            // line 73
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateEmission", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 75), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                    </div>
                ";
        }
        // line 79
        yield "            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 84), 'label');
        yield "
                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => ("form-control datepicker" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 87
($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "valid", [], "any", false, false, false, 87)) ? ("") : (" is-invalid"))), "placeholder" => "JJ/MM/AAAA"]]);
        // line 90
        yield "
                ";
        // line 91
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91)) > 0)) {
            // line 92
            yield "                    <div class=\"invalid-feedback d-block\">
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateExpiration", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 94
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 94), "html", null, true);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                    </div>
                ";
        }
        // line 98
        yield "            </div>
        </div>

        <div class=\"col-12 mt-4\">
            <button type=\"submit\" class=\"btn btn-primary me-2\">
                <i class=\"fas fa-save me-1\"></i> Enregistrer
            </button>
            <button type=\"reset\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-undo me-1\"></i> Réinitialiser
            </button>
        </div>
    </div>
";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "carte_grise/_form.html.twig";
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
        return array (  256 => 110,  242 => 98,  238 => 96,  229 => 94,  225 => 93,  222 => 92,  220 => 91,  217 => 90,  215 => 87,  214 => 85,  210 => 84,  203 => 79,  199 => 77,  190 => 75,  186 => 74,  183 => 73,  181 => 72,  178 => 71,  176 => 68,  175 => 66,  171 => 65,  164 => 60,  160 => 58,  151 => 56,  147 => 55,  144 => 54,  142 => 53,  139 => 52,  137 => 49,  136 => 47,  132 => 46,  125 => 41,  121 => 39,  112 => 37,  108 => 36,  105 => 35,  103 => 34,  100 => 33,  98 => 30,  97 => 28,  93 => 27,  86 => 22,  82 => 20,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  61 => 14,  59 => 11,  58 => 9,  54 => 8,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "carte_grise/_form.html.twig", "C:\\Users\\user\\Videos\\template-master - Copie\\templates\\carte_grise\\_form.html.twig");
    }
}
