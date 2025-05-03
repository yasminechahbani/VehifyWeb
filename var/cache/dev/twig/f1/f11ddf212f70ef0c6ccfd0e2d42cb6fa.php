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

/* employe/employePDF.html.twig */
class __TwigTemplate_164d38955e9a431312569d678f177f69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/employePDF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/employePDF.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        h1, h2 { text-align: center; }
        .section { margin-bottom: 20px; }
        .signature { margin-top: 50px; display: flex; justify-content: space-between; }
    </style>
</head>
<body>

<h1>CONTRAT DE TRAVAIL À DURÉE INDÉTERMINÉE</h1>

<div class=\"section\">
    <strong>Entre :</strong><br>
    <strong>Société :</strong> Paws for Peace<br>
    Adresse : Rue de l'Avenir, Tunis<br>
    Représentée par : M. Directeur Général
</div>

<div class=\"section\">
    <strong>Et :</strong><br>
    <strong>Nom :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        yield "<br>
    <strong>Email :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "<br>
    <strong>Poste :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 27, $this->source); })()), "poste", [], "any", false, false, false, 27), "html", null, true);
        yield "<br>
</div>

<div class=\"section\">
    <h2>1. Objet du contrat</h2>
    Le présent contrat a pour objet l’engagement de ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield " au poste de <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 32, $this->source); })()), "poste", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong>.
</div>

<div class=\"section\">
    <h2>2. Durée</h2>
    Contrat à durée indéterminée, prenant effet à la date de signature.
</div>

<div class=\"section\">
    <h2>3. Période d’essai</h2>
    Une période d’essai de <strong>2 mois</strong> est convenue à compter de la date d’entrée en fonction.
</div>

<div class=\"section\">
    <h2>4. Rémunération</h2>
    L’employé percevra un salaire mensuel brut de <strong>XXXX dinars</strong>.
</div>

<div class=\"section\">
    <h2>5. Confidentialité</h2>
    L’employé s’engage à garder confidentielles toutes les informations relatives à l’entreprise.
</div>

<div class=\"section\">
    <h2>6. Résiliation</h2>
    Le contrat peut être résilié à tout moment sous réserve du respect du préavis légal ou conventionnel.
</div>

<div class=\"section\">
    <h2>7. Dispositions légales</h2>
    Ce contrat est soumis aux dispositions du <strong>Code du Travail tunisien</strong> et à la convention collective applicable.
</div>

<div class=\"signature\">
    <div>
        <strong>Pour l’employeur</strong><br>
        Signature :
    </div>
    <div>
        <strong>Pour l’employé</strong><br>
        Signature : ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 72, $this->source); })()), "prenom", [], "any", false, false, false, 72), "html", null, true);
        yield "
    </div>
</div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employe/employePDF.html.twig";
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
        return array (  137 => 72,  92 => 32,  84 => 27,  80 => 26,  74 => 25,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        h1, h2 { text-align: center; }
        .section { margin-bottom: 20px; }
        .signature { margin-top: 50px; display: flex; justify-content: space-between; }
    </style>
</head>
<body>

<h1>CONTRAT DE TRAVAIL À DURÉE INDÉTERMINÉE</h1>

<div class=\"section\">
    <strong>Entre :</strong><br>
    <strong>Société :</strong> Paws for Peace<br>
    Adresse : Rue de l'Avenir, Tunis<br>
    Représentée par : M. Directeur Général
</div>

<div class=\"section\">
    <strong>Et :</strong><br>
    <strong>Nom :</strong> {{ employe.nom }} {{ employe.prenom }}<br>
    <strong>Email :</strong> {{ employe.email }}<br>
    <strong>Poste :</strong> {{ employe.poste }}<br>
</div>

<div class=\"section\">
    <h2>1. Objet du contrat</h2>
    Le présent contrat a pour objet l’engagement de {{ employe.prenom }} au poste de <strong>{{ employe.poste }}</strong>.
</div>

<div class=\"section\">
    <h2>2. Durée</h2>
    Contrat à durée indéterminée, prenant effet à la date de signature.
</div>

<div class=\"section\">
    <h2>3. Période d’essai</h2>
    Une période d’essai de <strong>2 mois</strong> est convenue à compter de la date d’entrée en fonction.
</div>

<div class=\"section\">
    <h2>4. Rémunération</h2>
    L’employé percevra un salaire mensuel brut de <strong>XXXX dinars</strong>.
</div>

<div class=\"section\">
    <h2>5. Confidentialité</h2>
    L’employé s’engage à garder confidentielles toutes les informations relatives à l’entreprise.
</div>

<div class=\"section\">
    <h2>6. Résiliation</h2>
    Le contrat peut être résilié à tout moment sous réserve du respect du préavis légal ou conventionnel.
</div>

<div class=\"section\">
    <h2>7. Dispositions légales</h2>
    Ce contrat est soumis aux dispositions du <strong>Code du Travail tunisien</strong> et à la convention collective applicable.
</div>

<div class=\"signature\">
    <div>
        <strong>Pour l’employeur</strong><br>
        Signature :
    </div>
    <div>
        <strong>Pour l’employé</strong><br>
        Signature : {{ employe.nom }} {{ employe.prenom }}
    </div>
</div>

</body>
</html>
", "employe/employePDF.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\employe\\employePDF.html.twig");
    }
}
