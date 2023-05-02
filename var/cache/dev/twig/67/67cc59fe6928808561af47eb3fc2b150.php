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

/* course/show.html.twig */
class __TwigTemplate_7e7a4652685ccacdfcddf0dae0a6a603 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "course/show.html.twig", 1);
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

        echo "Course";
        
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

        echo " <div class=\"slider-area \">
        <div class=\"single-slider section-overly slider-height2 d-flex align-items-center\" data-background=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 6, $this->source); })()), "photo", [], "any", false, false, false, 6))), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"hero-cap text-center\">
                          
                            <h2>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class=\"job-post-company pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <!-- Left Content -->
                    <div class=\"col-xl-7 col-lg-8\">
                        <!-- job single -->
                        <div class=\"single-job-items mb-50\">
                            <div class=\"job-items\">
                               
                                <div class=\"job-tittle\">
                                    <a href=\"#\">
                                    <iframe width=\"560\" height=\"315\" src=";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
        echo " title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
                                       
                                    </a>
                                    <br> 
                                    <p>  </p>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class=\"job-post-details\">
                            <div class=\"post-details1 mb-50\">
                                <!-- Small Section Tittle -->
                                <div class=\"small-section-tittle\">
                                    <h4></h4>
                                </div>
                             
                            </div>
                           
                          
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class=\"col-xl-4 col-lg-4\">
                        <div class=\"post-details3  mb-50\">
                            <!-- Small Section Tittle -->
                           <div class=\"small-section-tittle\">
                               <h4>Course content</h4>
             <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lesson_course_front", ["cid" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 62, $this->source); })()), "cid", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\" class=\"genric-btn info circle\">Check Lessons</a>
                      
                               <br>
                               <br>
                           </div>               
      
         
                         <div class=\"apply-btn2\">
                            <a href=\"#\" class=\"btn\">Buy Now</a>
                         </div>
                       </div>
                        <div class=\"post-details4  mb-50\">
                            <!-- Small Section Tittle -->
                           <div class=\"small-section-tittle\">
                               <h4>Teacher Information</h4>
                           </div>
                             
                            <ul>
                                <li>Name: <span>Colorlib </span></li>
                                <li>Web : <span> colorlib.com</span></li>
                                <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                            </ul>
                       </div>
                    </div>
                 
                </div>
            </div>
               <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_front");
        echo "\" class=\"genric-btn info circle\">back to list</a>

  
 
        </div>
   <!-- <h1>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 94, $this->source); })()), "title", [], "any", false, false, false, 94), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Cid</th>
                <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 100, $this->source); })()), "cid", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
            </tr>
           
            <tr>
                <th>Description</th>
                <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 109, $this->source); })()), "price", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 113, $this->source); })()), "category", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 117, $this->source); })()), "photo", [], "any", false, false, false, 117), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
 -->
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "course/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 117,  224 => 113,  217 => 109,  210 => 105,  202 => 100,  193 => 94,  185 => 89,  155 => 62,  123 => 33,  99 => 12,  90 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Course{% endblock %}

{% block body %} <div class=\"slider-area \">
        <div class=\"single-slider section-overly slider-height2 d-flex align-items-center\" data-background=\"{{ asset('assets/img/' ~ course.photo) }}\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"hero-cap text-center\">
                          
                            <h2>{{course.title}}</h2>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class=\"job-post-company pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <!-- Left Content -->
                    <div class=\"col-xl-7 col-lg-8\">
                        <!-- job single -->
                        <div class=\"single-job-items mb-50\">
                            <div class=\"job-items\">
                               
                                <div class=\"job-tittle\">
                                    <a href=\"#\">
                                    <iframe width=\"560\" height=\"315\" src={{ course.description }} title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
                                       
                                    </a>
                                    <br> 
                                    <p>  </p>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class=\"job-post-details\">
                            <div class=\"post-details1 mb-50\">
                                <!-- Small Section Tittle -->
                                <div class=\"small-section-tittle\">
                                    <h4></h4>
                                </div>
                             
                            </div>
                           
                          
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class=\"col-xl-4 col-lg-4\">
                        <div class=\"post-details3  mb-50\">
                            <!-- Small Section Tittle -->
                           <div class=\"small-section-tittle\">
                               <h4>Course content</h4>
             <a href=\"{{ path('app_lesson_course_front', {'cid': course.cid}) }}\" class=\"genric-btn info circle\">Check Lessons</a>
                      
                               <br>
                               <br>
                           </div>               
      
         
                         <div class=\"apply-btn2\">
                            <a href=\"#\" class=\"btn\">Buy Now</a>
                         </div>
                       </div>
                        <div class=\"post-details4  mb-50\">
                            <!-- Small Section Tittle -->
                           <div class=\"small-section-tittle\">
                               <h4>Teacher Information</h4>
                           </div>
                             
                            <ul>
                                <li>Name: <span>Colorlib </span></li>
                                <li>Web : <span> colorlib.com</span></li>
                                <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                            </ul>
                       </div>
                    </div>
                 
                </div>
            </div>
               <a href=\"{{ path('app_course_front') }}\" class=\"genric-btn info circle\">back to list</a>

  
 
        </div>
   <!-- <h1>{{ course.title }}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Cid</th>
                <td>{{ course.cid }}</td>
            </tr>
           
            <tr>
                <th>Description</th>
                <td>{{ course.description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ course.price }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ course.category }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ course.photo }}</td>
            </tr>
        </tbody>
    </table>
 -->
    
{% endblock %}

  ", "course/show.html.twig", "C:\\Users\\Zahra\\last\\pidev\\templates\\course\\show.html.twig");
    }
}
