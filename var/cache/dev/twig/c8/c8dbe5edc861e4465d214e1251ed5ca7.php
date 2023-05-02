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

/* base.html.twig */
class __TwigTemplate_b9d5eee1d542469374b3e8782f7c07a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"manifest\" href=\"site.webmanifest\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">

\t\t<!-- CSS here -->
        ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 30
        echo "   </head>
";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "   <body>
     
 
  
 ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "    
        
   

    </body>
    <footer>
    ";
        // line 178
        $this->displayBlock('footer', $context, $blocks);
        // line 310
        $this->displayBlock('js', $context, $blocks);
        // line 357
        echo "      
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Instalance";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "        
          <link rel=\"stylesheet\" href= ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/header.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href= ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/price_rangs.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slicknav.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome-all.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slick.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nice-select.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo ">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "   <header>
        <!-- Header Start -->
       <div class=\"header-area header-transparrent\">
           <div class=\"header-top header-sticky\">
                <div class=\"container-md\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-3 col-md-5\">
                            <!-- Logo -->
                            <div class=\"logo\">
                                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> <img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/m.png"), "html", null, true);
        echo " width=\"190\" height=\"45\" alt=\"\"></a>
                            </div>  
                        </div>
                        <div class=\"col-lg-9 col-md-20\">
                            <div class=\"menu-wrapper\">
                                <!-- Main-menu -->
                                <div class=\"main-menu\">
                                    <nav class=\"d-none d-lg-block\">
                                        <ul id=\"navigation\">
                                            <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><font size=\"+1\">Home</font></a></li>
                                            <li><a href=\"#\"><font size=\"+1\">Job offers </font></a></li>
                                            <li><a href=\"#\"><font size=\"+1\">Services</font></a></li>
                                            <li><a href=\"#\"><font size=\"+1\">Courses</font></a>
                                            <ul class=\"submenu\">
                                                 <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_front");
        echo "\">Consult courses</a></li>
                                                    <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_index");
        echo "\">My courses</a></li>
                                                </ul>
                                              <li><a href=\"#\"><font size=\"+1\">Events</font></a>
                                               <li><a href=\"#\"><font size=\"+1\">Blog</font></a>
                                               
                                            </li>
                                          
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class=\"header-btn d-none f-right d-lg-block\">
                                    <a href=\"#\" class=\"btn head-btn4\">Register</b></a>
                                    <a href=\"#\" class=\"btn head-btn2\">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
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

    // line 178
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 179
        echo "        <!-- Footer Start-->
        <div class=\"footer-area footer-bg footer-padding\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-between\">
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                       <div class=\"single-footer-caption mb-50\">
                         <div class=\"single-footer-caption mb-30\">
                             <div class=\"footer-tittle\">
                                 <h4>About Us</h4>
                                 <div class=\"footer-pera\">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :Your address goes
                                        here, your demo address.</p>
                                    </li>
                                    <li><a href=\"#\">Phone : +8880 44338899</a></li>
                                    <li><a href=\"#\">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href=\"#\"> View Project</a></li>
                                    <li><a href=\"#\">Contact Us</a></li>
                                    <li><a href=\"#\">Testimonial</a></li>
                                    <li><a href=\"#\">Proparties</a></li>
                                    <li><a href=\"#\">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Newsletter</h4>
                                <div class=\"footer-pera footer-pera2\">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             <!-- Form -->
                             <div class=\"footer-form\" >
                                 <div id=\"mc_embed_signup\">
                                     <form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                     method=\"get\" class=\"subscribe_form relative mail_part\">
                                         <input type=\"email\" name=\"email\" id=\"newsletter-form-email\" placeholder=\"Email Address\"
                                         class=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\"
                                         onblur=\"this.placeholder = ' Email Address '\">
                                         <div class=\"form-icon\">
                                             <button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
                                             class=\"email_icon newsletter-submit button-contactForm\"><img src=\"assets/img/icon/form.png\" alt=\"\"></button>
                                         </div>
                                         <div class=\"mt-10 info\"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class=\"row footer-wejed justify-content-between\">
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                        <!-- logo -->
                        <div class=\"footer-logo mb-20\">
                        <a href=\"index.html\"><img src=\"assets/img/logo/logo2_footer.png\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                    <div class=\"footer-tittle-bottom\">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"footer-tittle-bottom\">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <!-- Footer Bottom Tittle -->
                        <div class=\"footer-tittle-bottom\">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class=\"footer-bottom-area footer-bg\">
            <div class=\"container\">
                <div class=\"footer-border\">
                     <div class=\"row d-flex justify-content-between align-items-center\">
                         <div class=\"col-xl-10 col-lg-10 \">
                             <div class=\"footer-copy-right\">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class=\"col-xl-2 col-lg-2\">
                             <div class=\"footer-social f-right\">
                                 <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                 <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                 <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                                 <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 310
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 311
        echo "  <!-- JS here -->
\t
\t\t<!-- All JS Custom Plugins Link Here here -->
        <script src=";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "></script>
\t\t<!-- Jquery, Popper, Bootstrap -->
\t\t<script src=";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "></script>
        \t<script src=";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "></script>
            \t<script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
  
\t    <!-- Jquery Mobile Menu -->
       
        <script src= ";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slicknav.min.js"), "html", null, true);
        echo "></script>

\t\t<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        echo "></script>
          <script src=";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/price_rangs.js"), "html", null, true);
        echo "></script>
       
        
\t\t<!-- One Page, Animated-HeadLin -->
                <script src=";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/animated.headline.js"), "html", null, true);
        echo "></script>
          <script src=";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.magnific-popup.js"), "html", null, true);
        echo "></script>
     

\t\t<!-- Scrollup, nice-select, sticky -->
                <script src=";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nice-select.min.js"), "html", null, true);
        echo "></script>
          <script src=";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        echo "></script>
     
        
        <!-- contact js -->
              <script src=";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/contact.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.form.js"), "html", null, true);
        echo "></script>
          <script src=";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.validate.min.js"), "html", null, true);
        echo "></script>
             <script src=";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mail-script.js"), "html", null, true);
        echo "></script>
          <script src=";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "></script>
     
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
\t\t<!-- Jquery Plugins, main Jquery -->\t
            <script src=";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "></script>
          <script src=";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "></script>
     
           <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 353,  646 => 352,  638 => 347,  634 => 346,  630 => 345,  626 => 344,  622 => 343,  615 => 339,  611 => 338,  607 => 337,  600 => 333,  596 => 332,  592 => 331,  585 => 327,  581 => 326,  577 => 325,  571 => 322,  564 => 318,  560 => 317,  556 => 316,  551 => 314,  546 => 311,  536 => 310,  396 => 179,  386 => 178,  294 => 89,  284 => 88,  246 => 56,  242 => 55,  234 => 50,  220 => 41,  209 => 32,  199 => 31,  187 => 28,  183 => 27,  179 => 26,  175 => 25,  171 => 24,  167 => 23,  163 => 22,  159 => 21,  155 => 20,  151 => 19,  147 => 18,  143 => 17,  139 => 16,  136 => 15,  126 => 14,  107 => 7,  94 => 357,  92 => 310,  90 => 178,  82 => 172,  80 => 88,  74 => 84,  72 => 31,  69 => 30,  67 => 14,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> {% block title %}Instalance{% endblock %} </title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"manifest\" href=\"site.webmanifest\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\">

\t\t<!-- CSS here -->
        {% block css%}
        
          <link rel=\"stylesheet\" href= {{asset('assets/css/header.css')}}>
            <link rel=\"stylesheet\" href= {{asset('assets/css/bootstrap.min.css')}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/owl.carousel.min.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/flaticon.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/price_rangs.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/slicknav.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/animate.min.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/magnific-popup.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/fontawesome-all.min.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/themify-icons.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/slick.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/nice-select.css\")}}>
            <link rel=\"stylesheet\" href={{asset(\"assets/css/style.css\")}}>
            {% endblock %}
   </head>
{% block header %}
   <header>
        <!-- Header Start -->
       <div class=\"header-area header-transparrent\">
           <div class=\"header-top header-sticky\">
                <div class=\"container-md\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-3 col-md-5\">
                            <!-- Logo -->
                            <div class=\"logo\">
                                <a href=\"{{ path('home') }}\"> <img src={{asset('assets/img/logo/m.png')}} width=\"190\" height=\"45\" alt=\"\"></a>
                            </div>  
                        </div>
                        <div class=\"col-lg-9 col-md-20\">
                            <div class=\"menu-wrapper\">
                                <!-- Main-menu -->
                                <div class=\"main-menu\">
                                    <nav class=\"d-none d-lg-block\">
                                        <ul id=\"navigation\">
                                            <li><a href=\"{{ path('home') }}\"><font size=\"+1\">Home</font></a></li>
                                            <li><a href=\"#\"><font size=\"+1\">Job offers </font></a></li>
                                            <li><a href=\"#\"><font size=\"+1\">Services</font></a></li>
                                            <li><a href=\"#\"><font size=\"+1\">Courses</font></a>
                                            <ul class=\"submenu\">
                                                 <li><a href=\"{{ path('app_course_front') }}\">Consult courses</a></li>
                                                    <li><a href=\"{{ path('app_course_index') }}\">My courses</a></li>
                                                </ul>
                                              <li><a href=\"#\"><font size=\"+1\">Events</font></a>
                                               <li><a href=\"#\"><font size=\"+1\">Blog</font></a>
                                               
                                            </li>
                                          
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class=\"header-btn d-none f-right d-lg-block\">
                                    <a href=\"#\" class=\"btn head-btn4\">Register</b></a>
                                    <a href=\"#\" class=\"btn head-btn2\">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
{% endblock %}
   <body>
     
 
  
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
    
        
   

    </body>
    <footer>
    {% block footer %}
        <!-- Footer Start-->
        <div class=\"footer-area footer-bg footer-padding\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-between\">
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                       <div class=\"single-footer-caption mb-50\">
                         <div class=\"single-footer-caption mb-30\">
                             <div class=\"footer-tittle\">
                                 <h4>About Us</h4>
                                 <div class=\"footer-pera\">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :Your address goes
                                        here, your demo address.</p>
                                    </li>
                                    <li><a href=\"#\">Phone : +8880 44338899</a></li>
                                    <li><a href=\"#\">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href=\"#\"> View Project</a></li>
                                    <li><a href=\"#\">Contact Us</a></li>
                                    <li><a href=\"#\">Testimonial</a></li>
                                    <li><a href=\"#\">Proparties</a></li>
                                    <li><a href=\"#\">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Newsletter</h4>
                                <div class=\"footer-pera footer-pera2\">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             <!-- Form -->
                             <div class=\"footer-form\" >
                                 <div id=\"mc_embed_signup\">
                                     <form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                     method=\"get\" class=\"subscribe_form relative mail_part\">
                                         <input type=\"email\" name=\"email\" id=\"newsletter-form-email\" placeholder=\"Email Address\"
                                         class=\"placeholder hide-on-focus\" onfocus=\"this.placeholder = ''\"
                                         onblur=\"this.placeholder = ' Email Address '\">
                                         <div class=\"form-icon\">
                                             <button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
                                             class=\"email_icon newsletter-submit button-contactForm\"><img src=\"assets/img/icon/form.png\" alt=\"\"></button>
                                         </div>
                                         <div class=\"mt-10 info\"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class=\"row footer-wejed justify-content-between\">
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                        <!-- logo -->
                        <div class=\"footer-logo mb-20\">
                        <a href=\"index.html\"><img src=\"assets/img/logo/logo2_footer.png\" alt=\"\"></a>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                    <div class=\"footer-tittle-bottom\">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"footer-tittle-bottom\">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5\">
                        <!-- Footer Bottom Tittle -->
                        <div class=\"footer-tittle-bottom\">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class=\"footer-bottom-area footer-bg\">
            <div class=\"container\">
                <div class=\"footer-border\">
                     <div class=\"row d-flex justify-content-between align-items-center\">
                         <div class=\"col-xl-10 col-lg-10 \">
                             <div class=\"footer-copy-right\">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class=\"col-xl-2 col-lg-2\">
                             <div class=\"footer-social f-right\">
                                 <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                 <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                 <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                                 <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
      {% endblock %}
{% block js %}
  <!-- JS here -->
\t
\t\t<!-- All JS Custom Plugins Link Here here -->
        <script src={{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}></script>
\t\t<!-- Jquery, Popper, Bootstrap -->
\t\t<script src={{asset('assets/js/vendor/jquery-1.12.4.min.js')}}></script>
        \t<script src={{asset('assets/js/popper.min.js')}}></script>
            \t<script src={{asset('assets/js/bootstrap.min.js')}}></script>
  
\t    <!-- Jquery Mobile Menu -->
       
        <script src= {{asset('assets/js/jquery.slicknav.min.js')}}></script>

\t\t<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src={{asset('/assets/js/owl.carousel.min.js')}}></script>
         <script src={{asset('assets/js/slick.min.js')}}></script>
          <script src={{asset('assets/js/price_rangs.js')}}></script>
       
        
\t\t<!-- One Page, Animated-HeadLin -->
                <script src={{asset('assets/js/wow.min.js')}}></script>
         <script src={{asset('assets/js/animated.headline.js')}}></script>
          <script src={{asset('assets/js/jquery.magnific-popup.js')}}></script>
     

\t\t<!-- Scrollup, nice-select, sticky -->
                <script src={{asset('/assets/js/jquery.scrollUp.min.js')}}></script>
         <script src={{asset('assets/js/jquery.nice-select.min.js')}}></script>
          <script src={{asset('assets/js/jquery.sticky.js')}}></script>
     
        
        <!-- contact js -->
              <script src={{asset('/assets/js/contact.js')}}></script>
         <script src={{asset('assets/js/jquery.form.js')}}></script>
          <script src={{asset('assets/js/jquery.validate.min.js')}}></script>
             <script src={{asset('assets/js/mail-script.js')}}></script>
          <script src={{asset('assets/js/jquery.ajaxchimp.min.js')}}></script>
     
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
\t\t<!-- Jquery Plugins, main Jquery -->\t
            <script src={{asset('assets/js/plugins.js')}}></script>
          <script src={{asset('assets/js/main.js')}}></script>
     
           <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        {% endblock %}
      
    </body>
</html>
", "base.html.twig", "C:\\Users\\Zahra\\last\\pidev\\templates\\base.html.twig");
    }
}
