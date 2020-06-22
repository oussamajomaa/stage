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

/* main/index.html.twig */
class __TwigTemplate_18f4976a2ce540aec2578d7db47619b91c72c1e35ae1f9539861a1ab439cc26c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container mt-5 mb-1 p-0\" style=\"background-color: #E9ECEF\">


    <div class=\"mt-5\">
        <!-- Caroussel start-->
        <div id=\"demo\" class=\"carousel slide \" data-ride=\"carousel\">
            <ul class=\"carousel-indicators\">
                <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                <li data-target=\"#demo\" data-slide-to=\"3\"></li>
                <li data-target=\"#demo\" data-slide-to=\"4\"></li>
                <li data-target=\"#demo\" data-slide-to=\"5\"></li>
            </ul>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel/1.png"), "html", null, true);
        echo "\" alt=\"1.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel/2.png"), "html", null, true);
        echo "\" alt=\"2.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel/3.png"), "html", null, true);
        echo "\" alt=\"3.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel/4.png"), "html", null, true);
        echo "\" alt=\"4.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel/5.png"), "html", null, true);
        echo "\" alt=\"5.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/caroussel/6.png"), "html", null, true);
        echo "\" alt=\"6.png\" class=\"d-block m-auto w-100\">
                </div>

            </div>
            <!--caroussel end-->
        </div>
    </div>
</div>
<div class=\"container my-5\">
    <div class=\"row d-flex align-items-center\">
        <div class=\"col-12 col-md-6\">
            <h3 class=\"bg-danger text-light btn w-100\">Qui sommes-nous</h3>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
        </div>
        <div class=\"col-12 col-md-6\">
            <img class=\"w-100\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/languages.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"row d-flex align-items-center\">
        
        <div class=\"col-12 col-md-6\">
            <h3 class=\"bg-danger text-light btn w-100\">Notre Pédagogie</h3>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
        </div>
        <div class=\"col-12 col-md-6\">
            <img class=\"w-100\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pedagogie.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>


</div>
</div>
<section class=\"container-fluid p-0 mt-2 mb-2\">
    <h2 class=\"font-weight-bold text-center m-0 \">Nous Contacter</h2>
    <p class=\"text-center w-responsive mx-auto \">Avez-vous une question? N'hésitez pas à nous contacter directement.</p>

    <div class=\"row w-100\">

        <div class=\"col-12 col-md-4\">
            <div class=\"container d-flex justify-content-center\">

                <ul class=\"list-unstyled mb-0 \">
                    <li class=\"text-center\"><i class=\"fa fa-map-marker\" style=\"font-size: 32px; color:#D1254A\"></i>
                        <p>PAU Cedex 9, France</p>
                    </li>

                    <li class=\"text-center\"><i class=\"fa fa-phone\" style=\"font-size: 32px; color:#D1254A\"></i>
                        <p>05 59 14 78 79</p>
                    </li>

                    <li class=\"text-center\"><i class=\"fa fa-envelope\" style=\"font-size: 32px; color:#D1254A\"></i>
                        <p>contact@fabriqueadmin.fr</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class=\"col-12 col-md-4\">
            <form id=\"contact-form\" name=\"contact-form\" action=\"\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"name\" class=\"mt-3\">Nom</label>
                            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"Prenom\" class=\"mt-3\">Prenom</label>
                            <input type=\"text\" id=\"Prenom\" name=\"Prenom\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"email\" class=\"mt-3\">Email</label>
                            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"tel\" class=\"mt-3\">Tel</label>
                            <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\">
                        </div>
                    </div>
                </div>

                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <div class=\"md-form\">
                            <label for=\"message\" class=\"mt-3\">Message</label>
                            <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"3\"
                        ";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pedagogie.png"), "html", null, true);
        echo "        class=\"form-control  md-textarea\"></textarea>
                        </div>

                    </div>
                </div>

                <div class=\"row mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <button type=\"submit\" class=\"btn btn-outline-danger\">Envoyer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- END CONTACT FORM -->


        <div class=\"col-12 col-md-4 text-center\">
            <iframe class=\"text-center\"
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.736821896621!2d-0.3666948871811661!3d43.319768437914796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x503142a10cf1a61b!2sSTEP%20-%20L&#39;avanc%C3%A9e%20Num%C3%A9rique!5e0!3m2!1sfr!2sfr!4v1586184376500!5m2!1sfr!2sfr\"
                width=\"400\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                tabindex=\"0\"></iframe>
        </div>
    </div>
</section>


<div class=\"row w-100\">


        <div class=\"container text-center mb-2 mt-2\">
            <h4 class=\"font-weight-bold text-danger\">Nos partenanires</h4>
        </div>
        
        <div class=\"owl-carousel\">
        
            <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/1.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/2.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/3.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/4.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/5.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/6.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/7.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/8.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/9.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/10.png"), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/11.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>

        <!-- Copyright -->
        <div class=\"container text-center mb-2 mt-2\">© 2020 Copyright:
            <a href=\"https://fabriqueadmin.fr/\" class=\"text-warning \"> fabriqueadmin.fr</a>
        </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 228
        echo "
    <script>
        \$(document).ready(function () {
            \$('.owl-carousel').owlCarousel({
                autoplay: true,
                lazyLoad: true,
                loop: true,
                items: 12,
                margin: 0,
                center: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                responsiveClass: true,
                autoHeight: true,
                smartSpeed: 1000
            })
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 228,  378 => 227,  357 => 215,  353 => 214,  349 => 213,  345 => 212,  341 => 211,  337 => 210,  333 => 209,  329 => 208,  325 => 207,  321 => 206,  317 => 205,  277 => 168,  199 => 93,  171 => 68,  138 => 38,  132 => 35,  126 => 32,  120 => 29,  114 => 26,  108 => 23,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<div class=\"container mt-5 mb-1 p-0\" style=\"background-color: #E9ECEF\">


    <div class=\"mt-5\">
        <!-- Caroussel start-->
        <div id=\"demo\" class=\"carousel slide \" data-ride=\"carousel\">
            <ul class=\"carousel-indicators\">
                <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#demo\" data-slide-to=\"1\"></li>
                <li data-target=\"#demo\" data-slide-to=\"2\"></li>
                <li data-target=\"#demo\" data-slide-to=\"3\"></li>
                <li data-target=\"#demo\" data-slide-to=\"4\"></li>
                <li data-target=\"#demo\" data-slide-to=\"5\"></li>
            </ul>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img src=\"{{ asset('assets/img/caroussel/1.png') }}\" alt=\"1.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"{{ asset('assets/img/caroussel/2.png') }}\" alt=\"2.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"{{ asset('assets/img/caroussel/3.png') }}\" alt=\"3.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"{{ asset('assets/img/caroussel/4.png') }}\" alt=\"4.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"{{ asset('assets/img/caroussel/5.png') }}\" alt=\"5.png\" class=\"d-block m-auto w-100\">
                </div>
                <div class=\"carousel-item \">
                    <img src=\"{{ asset('assets/img/caroussel/6.png') }}\" alt=\"6.png\" class=\"d-block m-auto w-100\">
                </div>

            </div>
            <!--caroussel end-->
        </div>
    </div>
</div>
<div class=\"container my-5\">
    <div class=\"row d-flex align-items-center\">
        <div class=\"col-12 col-md-6\">
            <h3 class=\"bg-danger text-light btn w-100\">Qui sommes-nous</h3>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
        </div>
        <div class=\"col-12 col-md-6\">
            <img class=\"w-100\" src=\"{{ asset('assets/img/languages.png') }}\" alt=\"\">
        </div>
    </div>
    <div class=\"row d-flex align-items-center\">
        
        <div class=\"col-12 col-md-6\">
            <h3 class=\"bg-danger text-light btn w-100\">Notre Pédagogie</h3>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
            <p class=\" text-justify\">Cette rémunération peut être réalisée soit par l'intermédiaire de ce qu'on appelle
                le salaire familial, c'est-à-dire un salaire unique donné au chef de famille pour
                son travail, et qui est suffisant pour les besoins de sa famille sans que son épouse
                soit obligée de prendre un travail rétribué hors de son foyer, soit par l'intermédiaire
                d'autres mesures sociales, telles que les allocations familiales ou les allocations de
                la mère au foyer, allocations qui doivent correspondre aux besoins effectifs, c'est-à-dire
                au nombre de personnes à charge durant tout le temps où elles ne sont pas capables d'assumer
                dignement la responsabilité de leur propre vie.</p>
        </div>
        <div class=\"col-12 col-md-6\">
            <img class=\"w-100\" src=\"{{ asset('assets/img/pedagogie.png') }}\" alt=\"\">
        </div>
    </div>


</div>
</div>
<section class=\"container-fluid p-0 mt-2 mb-2\">
    <h2 class=\"font-weight-bold text-center m-0 \">Nous Contacter</h2>
    <p class=\"text-center w-responsive mx-auto \">Avez-vous une question? N'hésitez pas à nous contacter directement.</p>

    <div class=\"row w-100\">

        <div class=\"col-12 col-md-4\">
            <div class=\"container d-flex justify-content-center\">

                <ul class=\"list-unstyled mb-0 \">
                    <li class=\"text-center\"><i class=\"fa fa-map-marker\" style=\"font-size: 32px; color:#D1254A\"></i>
                        <p>PAU Cedex 9, France</p>
                    </li>

                    <li class=\"text-center\"><i class=\"fa fa-phone\" style=\"font-size: 32px; color:#D1254A\"></i>
                        <p>05 59 14 78 79</p>
                    </li>

                    <li class=\"text-center\"><i class=\"fa fa-envelope\" style=\"font-size: 32px; color:#D1254A\"></i>
                        <p>contact@fabriqueadmin.fr</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class=\"col-12 col-md-4\">
            <form id=\"contact-form\" name=\"contact-form\" action=\"\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"name\" class=\"mt-3\">Nom</label>
                            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"Prenom\" class=\"mt-3\">Prenom</label>
                            <input type=\"text\" id=\"Prenom\" name=\"Prenom\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"email\" class=\"mt-3\">Email</label>
                            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <label for=\"tel\" class=\"mt-3\">Tel</label>
                            <input type=\"text\" id=\"tel\" name=\"tel\" class=\"form-control\">
                        </div>
                    </div>
                </div>

                <div class=\"row\">

                    <div class=\"col-md-12\">

                        <div class=\"md-form\">
                            <label for=\"message\" class=\"mt-3\">Message</label>
                            <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"3\"
                        {{ asset('assets/img/pedagogie.png') }}        class=\"form-control  md-textarea\"></textarea>
                        </div>

                    </div>
                </div>

                <div class=\"row mt-2\">
                    <div class=\"col-md-12\">
                        <div class=\"md-form mb-0\">
                            <button type=\"submit\" class=\"btn btn-outline-danger\">Envoyer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- END CONTACT FORM -->


        <div class=\"col-12 col-md-4 text-center\">
            <iframe class=\"text-center\"
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.736821896621!2d-0.3666948871811661!3d43.319768437914796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x503142a10cf1a61b!2sSTEP%20-%20L&#39;avanc%C3%A9e%20Num%C3%A9rique!5e0!3m2!1sfr!2sfr!4v1586184376500!5m2!1sfr!2sfr\"
                width=\"400\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                tabindex=\"0\"></iframe>
        </div>
    </div>
</section>


<div class=\"row w-100\">


        <div class=\"container text-center mb-2 mt-2\">
            <h4 class=\"font-weight-bold text-danger\">Nos partenanires</h4>
        </div>
        
        <div class=\"owl-carousel\">
        
            <img src=\"{{ asset('assets/img/logo/1.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/2.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/3.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/4.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/5.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/6.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/7.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/8.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/9.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/10.png') }}\" alt=\"\">
            <img src=\"{{ asset('assets/img/logo/11.png') }}\" alt=\"\">
        </div>

        <!-- Copyright -->
        <div class=\"container text-center mb-2 mt-2\">© 2020 Copyright:
            <a href=\"https://fabriqueadmin.fr/\" class=\"text-warning \"> fabriqueadmin.fr</a>
        </div>
</div>


{% endblock %}

{% block javascripts %}

    <script>
        \$(document).ready(function () {
            \$('.owl-carousel').owlCarousel({
                autoplay: true,
                lazyLoad: true,
                loop: true,
                items: 12,
                margin: 0,
                center: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                responsiveClass: true,
                autoHeight: true,
                smartSpeed: 1000
            })
        });
    </script>

{% endblock %}
", "main/index.html.twig", "/var/www/html/احتياط/FabriqueAdmin5/templates/main/index.html.twig");
    }
}
