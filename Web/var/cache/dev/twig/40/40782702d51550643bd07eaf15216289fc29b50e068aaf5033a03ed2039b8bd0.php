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

/* activity_front/listconsult.html.twig */
class __TwigTemplate_446745daeb9544781eb3aeb47e1fcbc68d1c45a2e8c98e252d7ccc2ceda161f2 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity_front/listconsult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity_front/listconsult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activity_front/listconsult.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/single_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 8, $this->source); })()), "titleActivity", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"listing\">

        <!-- Search -->


        <!-- Single Listing -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_listing\">

                        <!-- Hotel Info -->

                        <div class=\"hotel_info\">

                            <!-- Title -->
                            <div class=\"hotel_title_container d-flex flex-lg-row flex-column\">
                                <div class=\"hotel_title_content\">
                                    <h1 class=\"hotel_title\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 33, $this->source); })()), "titleActivity", [], "any", false, false, false, 33), "html", null, true);
        echo "</h1>
                                    <div class=\"rating_r rating_r_4 hotel_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"hotel_location\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 41, $this->source); })()), "adressActivity", [], "any", false, false, false, 41), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"hotel_title_button ml-lg-auto text-lg-right\">

                                </div>
                            </div>

                            <!-- Listing Image -->

                            <div class=\"hotel_image\">
                                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/listing_hotel.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"hotel_review_container d-flex flex-column align-items-center justify-content-center\">
                                    <div class=\"hotel_review\">
                                        <div class=\"hotel_review_content\">
                                            <div class=\"hotel_review_title\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 55, $this->source); })()), "titleActivity", [], "any", false, false, false, 55), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"hotel_review_rating text-center\"> <i class=\"fa fa-thumbs-up\"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hotel Gallery -->

                            <div class=\"hotel_gallery\">
                                <div class=\"hotel_slider_container\">
                                    <div class=\"owl-carousel owl-theme hotel_slider\">

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class=\"owl-item\">
                                            <a class=\"colorbox cboxElement\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/listing_1.jpg"), "html", null, true);
        echo "\">
                                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/listing_thumb_1.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@jbriscoe\">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class=\"owl-item\">
                                            <a class=\"colorbox cboxElement\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/listing_2.jpg"), "html", null, true);
        echo "\">
                                                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/listing_thumb_2.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@grovemade\">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class=\"owl-item\">
                                            <a class=\"colorbox cboxElement\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/listing_3.jpg"), "html", null, true);
        echo "\">
                                                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/listing_thumb_3.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@fransaraco\">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->

                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->

                                    </div>

                                    <!-- Hotel Slider Nav - Prev -->
                                    <div class=\"hotel_slider_nav hotel_slider_prev\">
                                        <svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_prev'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                    <!-- Hotel Slider Nav - Next -->
                                    <div class=\"hotel_slider_nav hotel_slider_next\">
                                        <svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_next'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                </div>
                            </div>

                            <!-- Hotel Info Text -->

                            <div class=\"hotel_info_text\">
                                <p>";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 149, $this->source); })()), "descriptionActivity", [], "any", false, false, false, 149), "html", null, true);
        echo "</p>
                            </div>
                            <!-- Hotel Info Tags -->

                            <div class=\"hotel_info_tags\">
                                <ul class=\"hotel_icons_list\">
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/compass.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/bicycle.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/sailboat.png"), "html", null, true);
        echo "\" alt=\"\"></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Rooms -->



                        <!-- Reviews -->

                        <div class=\"reviews\">
                            <div class=\"reviews_title\">Commentaires</div>
                            <div class=\"reviews_container\">

                                <!-- Review -->
                                <div class=\"review\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-1\">
                                            <div class=\"review_image\">
                                                <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/review_1.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@saaout\">
                                            </div>
                                        </div>
                                        <div class=\"col-lg-11\">
                                            <div class=\"review_content\">
                                                <div class=\"review_title_container\">
                                                    <div class=\"review_title\">\"We loved the services\"</div>
                                                    <div class=\"review_rating\">9.5</div>
                                                </div>
                                                <div class=\"review_text\">
                                                    <p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
                                                </div>
                                                <div class=\"review_name\">Christinne Smith</div>
                                                <div class=\"review_date\">12 November 2017</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review -->


                            </div>
                        </div>

                        <!-- Location on Map -->


                    </div>


                </div>

            </div>
        </div>



        <div class=\"search\">
            <div class=\"search_inner\">

                <!-- Search Contents -->

                <div class=\"container fill_height no-padding\">
                    <div class=\"row fill_height no-margin\">
                        <div class=\"col fill_height no-padding\">

                            <!-- Search Tabs -->

                            <div class=\"search_tabs_container\">
                                <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                    <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>Ajouter un commentaire</span></div>

                                </div>
                            </div>
                            <div class=\"search_panel\">
                                <form action=\"#\" id=\"search_form_3\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                    <div class=\"search_item\">
                                        <div>Commentez</div>
                                        <textarea type=\"text\" class=\"destination search_input\" placeholder=\"Si vous avez un commentaire ! N'h??sitez pas de l'??crire ...\" required=\"required\"></textarea>
                                    </div>



                                    <button class=\"button search_button\">OK<span></span><span></span><span></span></button>
                                </form>
                            </div>

                            <!-- Search Panel -->



                            <!-- Search Panel -->


                            <!-- Search Panel -->

                        </div>
                    </div>
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
        return "activity_front/listconsult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 179,  272 => 158,  268 => 157,  264 => 156,  260 => 155,  251 => 149,  184 => 85,  180 => 84,  171 => 78,  167 => 77,  158 => 71,  154 => 70,  136 => 55,  129 => 51,  116 => 41,  105 => 33,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
    {% block content %}

    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/images/single_background.jpg') }}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">{{ activity.titleActivity }}</div>
        </div>
    </div>

    <!-- Offers -->

    <div class=\"listing\">

        <!-- Search -->


        <!-- Single Listing -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_listing\">

                        <!-- Hotel Info -->

                        <div class=\"hotel_info\">

                            <!-- Title -->
                            <div class=\"hotel_title_container d-flex flex-lg-row flex-column\">
                                <div class=\"hotel_title_content\">
                                    <h1 class=\"hotel_title\">{{ activity.titleActivity }}</h1>
                                    <div class=\"rating_r rating_r_4 hotel_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"hotel_location\">{{ activity.adressActivity }}</div>
                                </div>
                                <div class=\"hotel_title_button ml-lg-auto text-lg-right\">

                                </div>
                            </div>

                            <!-- Listing Image -->

                            <div class=\"hotel_image\">
                                <img src=\"{{ asset('front/images/listing_hotel.jpg') }}\" alt=\"\">
                                <div class=\"hotel_review_container d-flex flex-column align-items-center justify-content-center\">
                                    <div class=\"hotel_review\">
                                        <div class=\"hotel_review_content\">
                                            <div class=\"hotel_review_title\">{{ activity.titleActivity }}</div>
                                        </div>
                                        <div class=\"hotel_review_rating text-center\"> <i class=\"fa fa-thumbs-up\"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hotel Gallery -->

                            <div class=\"hotel_gallery\">
                                <div class=\"hotel_slider_container\">
                                    <div class=\"owl-carousel owl-theme hotel_slider\">

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class=\"owl-item\">
                                            <a class=\"colorbox cboxElement\" href=\"{{ asset('front/images/listing_1.jpg') }}\">
                                                <img src=\"{{ asset('front/images/listing_thumb_1.jpg') }}\" alt=\"https://unsplash.com/@jbriscoe\">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class=\"owl-item\">
                                            <a class=\"colorbox cboxElement\" href=\"{{ asset('front/images/listing_2.jpg') }}\">
                                                <img src=\"{{ asset('front/images/listing_thumb_2.jpg') }}\" alt=\"https://unsplash.com/@grovemade\">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class=\"owl-item\">
                                            <a class=\"colorbox cboxElement\" href=\"{{ asset('front/images/listing_3.jpg') }}\">
                                                <img src=\"{{ asset('front/images/listing_thumb_3.jpg') }}\" alt=\"https://unsplash.com/@fransaraco\">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->

                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->


                                        <!-- Hotel Gallery Slider Item -->

                                    </div>

                                    <!-- Hotel Slider Nav - Prev -->
                                    <div class=\"hotel_slider_nav hotel_slider_prev\">
                                        <svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_prev'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                    <!-- Hotel Slider Nav - Next -->
                                    <div class=\"hotel_slider_nav hotel_slider_next\">
                                        <svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t<defs>
                                                <linearGradient id='hotel_grad_next'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                                            <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t\t\t\t</svg>
                                    </div>

                                </div>
                            </div>

                            <!-- Hotel Info Text -->

                            <div class=\"hotel_info_text\">
                                <p>{{ activity.descriptionActivity }}</p>
                            </div>
                            <!-- Hotel Info Tags -->

                            <div class=\"hotel_info_tags\">
                                <ul class=\"hotel_icons_list\">
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/post.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/compass.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/bicycle.png') }}\" alt=\"\"></li>
                                    <li class=\"hotel_icons_item\"><img src=\"{{ asset('front/images/sailboat.png') }}\" alt=\"\"></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Rooms -->



                        <!-- Reviews -->

                        <div class=\"reviews\">
                            <div class=\"reviews_title\">Commentaires</div>
                            <div class=\"reviews_container\">

                                <!-- Review -->
                                <div class=\"review\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-1\">
                                            <div class=\"review_image\">
                                                <img src=\"{{ asset('front/images/review_1.jpg') }}\" alt=\"https://unsplash.com/@saaout\">
                                            </div>
                                        </div>
                                        <div class=\"col-lg-11\">
                                            <div class=\"review_content\">
                                                <div class=\"review_title_container\">
                                                    <div class=\"review_title\">\"We loved the services\"</div>
                                                    <div class=\"review_rating\">9.5</div>
                                                </div>
                                                <div class=\"review_text\">
                                                    <p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
                                                </div>
                                                <div class=\"review_name\">Christinne Smith</div>
                                                <div class=\"review_date\">12 November 2017</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review -->


                            </div>
                        </div>

                        <!-- Location on Map -->


                    </div>


                </div>

            </div>
        </div>



        <div class=\"search\">
            <div class=\"search_inner\">

                <!-- Search Contents -->

                <div class=\"container fill_height no-padding\">
                    <div class=\"row fill_height no-margin\">
                        <div class=\"col fill_height no-padding\">

                            <!-- Search Tabs -->

                            <div class=\"search_tabs_container\">
                                <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                    <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>Ajouter un commentaire</span></div>

                                </div>
                            </div>
                            <div class=\"search_panel\">
                                <form action=\"#\" id=\"search_form_3\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                    <div class=\"search_item\">
                                        <div>Commentez</div>
                                        <textarea type=\"text\" class=\"destination search_input\" placeholder=\"Si vous avez un commentaire ! N'h??sitez pas de l'??crire ...\" required=\"required\"></textarea>
                                    </div>



                                    <button class=\"button search_button\">OK<span></span><span></span><span></span></button>
                                </form>
                            </div>

                            <!-- Search Panel -->



                            <!-- Search Panel -->


                            <!-- Search Panel -->

                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    {% endblock %}
", "activity_front/listconsult.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\activity_front\\listconsult.html.twig");
    }
}
