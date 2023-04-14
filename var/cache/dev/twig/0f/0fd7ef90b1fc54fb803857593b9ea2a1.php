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

/* course/course_front.html.twig */
class __TwigTemplate_e97a298d5999d19cafe03d45111e178b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/course_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/course_front.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/course_front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
  
     <div class=\"job-listing-area pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Left content -->
                    <div class=\"col-xl-3 col-lg-3 col-md-4\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                    <div class=\"small-section-tittle2 mb-45\">
                                    
                             
                                </div>
                            </div>
                        </div>
                     
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class=\"col-xl-9 col-lg-9 col-md-8\">
                        <!-- Featured_job_start -->
                       
     <section class=\"featured-job-area\">
                    <!-- Right content -->
                    <div class=\"col-xl-9 col-lg-9 col-md-8\">
                        <!-- Featured_job_start -->
                        <section class=\"featured-job-area\">
                            <div class=\"container\">
                                <!-- Count of Job list Start -->
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"count-job mb-35\">
                                          
                                            <!-- Select job items start -->
                                            <div class=\"select-job-items\">
                                                <span>Sort by</span>
                                                <select name=\"select\">
                                                    <option value=\"\">title</option>
                                                    <option value=\"\">price</option>
                                                   
                                                </select>
                                            </div>
                                             <div class=\"select-job-items2\">
                                    <select name=\"select\">
                                        <option value=\"\">All Categories</option>
                                        <option value=\"\">Mathematics</option>
                                        <option value=\"\">Marketing</option>
                                        <option value=\"\">Bussiness</option>
                                        <option value=\"\">Development</option>
                                    </select>
                                </div>
                                
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                 ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 65
            echo "                                <div class=\"single-job-items mb-30\">
                                    <div class=\"job-items\">
                                        <div class=\"company-img\">
                                     
                                            <a href=\"#\"><img src= \"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["course"], "photo", [], "any", false, false, false, 69))), "html", null, true);
            echo "\" alt=\"\" width=\"300\" height=\"150\"> </a>
                                        </div>
                                        <div class=\"job-tittle job-tittle2\">
                                            <a  href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_show", ["cid" => twig_get_attribute($this->env, $this->source, $context["course"], "cid", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" >
                                                <h4>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 73), "html", null, true);
            echo " </h4>
                                            </a>
                                            <ul>
                                                <li>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "category", [], "any", false, false, false, 76), "html", null, true);
            echo "</li>
                                                <li>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "price", [], "any", false, false, false, 77), "html", null, true);
            echo "\$</li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                                 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                          <tr>
                        <td colspan=\"7\">no records found</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                
                  </div>
                  </section>
                   
                    </div>
                </div>
            </div>
        </div>
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "course/course_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 88,  171 => 84,  159 => 77,  155 => 76,  149 => 73,  145 => 72,  139 => 69,  133 => 65,  128 => 64,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


       
{% block body %}
   
  
     <div class=\"job-listing-area pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Left content -->
                    <div class=\"col-xl-3 col-lg-3 col-md-4\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                    <div class=\"small-section-tittle2 mb-45\">
                                    
                             
                                </div>
                            </div>
                        </div>
                     
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class=\"col-xl-9 col-lg-9 col-md-8\">
                        <!-- Featured_job_start -->
                       
     <section class=\"featured-job-area\">
                    <!-- Right content -->
                    <div class=\"col-xl-9 col-lg-9 col-md-8\">
                        <!-- Featured_job_start -->
                        <section class=\"featured-job-area\">
                            <div class=\"container\">
                                <!-- Count of Job list Start -->
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"count-job mb-35\">
                                          
                                            <!-- Select job items start -->
                                            <div class=\"select-job-items\">
                                                <span>Sort by</span>
                                                <select name=\"select\">
                                                    <option value=\"\">title</option>
                                                    <option value=\"\">price</option>
                                                   
                                                </select>
                                            </div>
                                             <div class=\"select-job-items2\">
                                    <select name=\"select\">
                                        <option value=\"\">All Categories</option>
                                        <option value=\"\">Mathematics</option>
                                        <option value=\"\">Marketing</option>
                                        <option value=\"\">Bussiness</option>
                                        <option value=\"\">Development</option>
                                    </select>
                                </div>
                                
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                 {% for course in courses %}
                                <div class=\"single-job-items mb-30\">
                                    <div class=\"job-items\">
                                        <div class=\"company-img\">
                                     
                                            <a href=\"#\"><img src= \"{{ asset('assets/img/' ~ course.photo) }}\" alt=\"\" width=\"300\" height=\"150\"> </a>
                                        </div>
                                        <div class=\"job-tittle job-tittle2\">
                                            <a  href=\"{{ path('app_course_show', {'cid': course.cid}) }}\" >
                                                <h4>{{ course.title }} </h4>
                                            </a>
                                            <ul>
                                                <li>{{course.category}}</li>
                                                <li>{{ course.price }}\$</li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                                 {% else %}
                          <tr>
                        <td colspan=\"7\">no records found</td>
                      </tr>
                    {% endfor %}
                                
                  </div>
                  </section>
                   
                    </div>
                </div>
            </div>
        </div>
  
{% endblock %}", "course/course_front.html.twig", "C:\\Users\\Zahra\\last\\pidev\\templates\\course\\course_front.html.twig");
    }
}
