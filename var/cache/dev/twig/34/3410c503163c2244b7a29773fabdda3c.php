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

/* home/index.html.twig */
class __TwigTemplate_c2f121f355bcc22bd47ee2e1ee3e15c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <main>

        <!-- slider Area Start-->
        <div class=\"slider-area \">
            <!-- Mobile Menu -->
            <div class=\"slider-active\">
                <div class=\"single-slider slider-height d-flex align-items-center\" >
               
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-lg-9 col-md-10\">
                                <div class=\"hero__caption\">
                                    <h1>Find the most exciting startup jobs</h1>
                                    
                                </div>
                                 
                            </div>
                             <img src=\"assets/img/hero/slider-img.png\" ></img>
                        </div>
                       
                      
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Blog Area Start -->
        <div class=\"home-blog-area blog-h-padding\">
            <div class=\"container\">
                <!-- Section Tittle -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"section-tittle text-center\">
                            <span>Our latest blog</span>
                            <h2>Our recent news</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/blog/home-blog1.jpg\" alt=\"\">
                                    <!-- Blog date -->
                                    <div class=\"blog-date text-center\">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class=\"blog-cap\">
                                    <p>|   Properties</p>
                                    <h3><a href=\"single-blog.html\">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href=\"#\" class=\"more-btn\">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/blog/home-blog2.jpg\" alt=\"\">
                                    <!-- Blog date -->
                                    <div class=\"blog-date text-center\">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class=\"blog-cap\">
                                    <p>|   Properties</p>
                                    <h3><a href=\"single-blog.html\">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href=\"#\" class=\"more-btn\">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Welcome!{% endblock %}

   {% block body %}
    
    <main>

        <!-- slider Area Start-->
        <div class=\"slider-area \">
            <!-- Mobile Menu -->
            <div class=\"slider-active\">
                <div class=\"single-slider slider-height d-flex align-items-center\" >
               
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-lg-9 col-md-10\">
                                <div class=\"hero__caption\">
                                    <h1>Find the most exciting startup jobs</h1>
                                    
                                </div>
                                 
                            </div>
                             <img src=\"assets/img/hero/slider-img.png\" ></img>
                        </div>
                       
                      
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Blog Area Start -->
        <div class=\"home-blog-area blog-h-padding\">
            <div class=\"container\">
                <!-- Section Tittle -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"section-tittle text-center\">
                            <span>Our latest blog</span>
                            <h2>Our recent news</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/blog/home-blog1.jpg\" alt=\"\">
                                    <!-- Blog date -->
                                    <div class=\"blog-date text-center\">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class=\"blog-cap\">
                                    <p>|   Properties</p>
                                    <h3><a href=\"single-blog.html\">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href=\"#\" class=\"more-btn\">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 col-md-6\">
                        <div class=\"home-blog-single mb-30\">
                            <div class=\"blog-img-cap\">
                                <div class=\"blog-img\">
                                    <img src=\"assets/img/blog/home-blog2.jpg\" alt=\"\">
                                    <!-- Blog date -->
                                    <div class=\"blog-date text-center\">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class=\"blog-cap\">
                                    <p>|   Properties</p>
                                    <h3><a href=\"single-blog.html\">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href=\"#\" class=\"more-btn\">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
 {% endblock %}
    
   
    


", "home/index.html.twig", "C:\\Users\\Zahra\\last\\pidev\\templates\\home\\index.html.twig");
    }
}
