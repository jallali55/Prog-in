<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* payment/success.html.twig */
class __TwigTemplate_1e23dbb3672105d2ff41a0850d3387f036422d2a328d26da55286ff46a5aea0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/single_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>


    <div class=\"container fill_height no-padding\">

    <div class=\"search_tabs_container\">
        <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
            <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/suitcase.png"), "html", null, true);
        echo "\" alt=\"\"><span>Paiement avec succ??es</span></div>
        </div>
    </div>
    </div>
    <div>
        <div class=\"offers\">
            <div class=\"container\">

                <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"section_title\">Votre achat est enregistr?? avec succ??es</h2>
            </div>

    <button class=\"button search_button\" type=\"submit\"><a href=\"#\">Consulter mes commandes <span></span><span></span><span></span></button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "payment/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/single_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">Produits</div>
        </div>
    </div>


    <div class=\"container fill_height no-padding\">

    <div class=\"search_tabs_container\">
        <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
            <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\">
                <img src=\"{{ asset('front/images/suitcase.png') }}\" alt=\"\"><span>Paiement avec succ??es</span></div>
        </div>
    </div>
    </div>
    <div>
        <div class=\"offers\">
            <div class=\"container\">

                <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"section_title\">Votre achat est enregistr?? avec succ??es</h2>
            </div>

    <button class=\"button search_button\" type=\"submit\"><a href=\"#\">Consulter mes commandes <span></span><span></span><span></span></button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "payment/success.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\payment\\success.html.twig");
    }
}
