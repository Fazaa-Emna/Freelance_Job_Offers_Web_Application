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

/* course/index.html.twig */
class __TwigTemplate_d4b47e285edbbc8211183c7dc2e049c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
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
   <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_new");
        echo "\" class=\"genric-btn info circle\"> New course</a>

<div>
<form id=\"search-form\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_index");
        echo "\" method=\"post\">
    <input type=\"text\" name=\"searchTerm\" placeholder=\"Search for courses\">
    <button type=\"submit\" class=\"genric-btn info circle\">Search</button>
    <div id=\"course-list\">
    ";
        // line 14
        $this->loadTemplate("course/_course_list.html.twig", "course/index.html.twig", 14)->display(twig_array_merge($context, ["courses" => (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 14, $this->source); })())]));
        // line 15
        echo "</div>
</form>
   

  </div>

<script
src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>
<script>
\$(document).on('submit', '#search-form', function(e) {
    e.preventDefault();
    var form = \$(this);
    var url = form.attr('action');
    var method = form.attr('method');
    var data = form.serialize();
    
    \$.ajax({
        url: url,
        type: method,
        data: data,
        dataType: 'html',
        success: function(response) {
            \$('#course-list').html(response);
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  84 => 14,  77 => 10,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


       
{% block body %}
      
   <a href=\"{{ path('app_course_new') }}\" class=\"genric-btn info circle\"> New course</a>

<div>
<form id=\"search-form\" action=\"{{ path('app_course_index') }}\" method=\"post\">
    <input type=\"text\" name=\"searchTerm\" placeholder=\"Search for courses\">
    <button type=\"submit\" class=\"genric-btn info circle\">Search</button>
    <div id=\"course-list\">
    {% include 'course/_course_list.html.twig' with {'courses': courses} %}
</div>
</form>
   

  </div>

<script
src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>
<script>
\$(document).on('submit', '#search-form', function(e) {
    e.preventDefault();
    var form = \$(this);
    var url = form.attr('action');
    var method = form.attr('method');
    var data = form.serialize();
    
    \$.ajax({
        url: url,
        type: method,
        data: data,
        dataType: 'html',
        success: function(response) {
            \$('#course-list').html(response);
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
});
</script>
{% endblock %}

", "course/index.html.twig", "C:\\Users\\Zahra\\last\\pidev\\templates\\course\\index.html.twig");
    }
}
