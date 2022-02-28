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

/* navUser.html.twig */
class __TwigTemplate_4f028e2597f809edf941c7015554e60a61a02341da4d96562a82f086b5ba675f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navUser.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom\">
                
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <span style=\"color:black;\" class=\"nav-link\">Panel
                                <b>Usuario</b></span>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                        <li class=\"nav-item\">
                            <a style=\"color:black;\" class=\"nav-link\"
                                href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">Logout <i
                                    class=\"fas fa-sign-out-alt\"></i></a>
                        </li>
                        
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listCourseUser");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">Listado</a>
                                     <a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listCourseAssign");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">Mis cursos</a>
                                </div>
                            </li>
                            
                    </ul>
                </div>
            </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 22,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom\">
                
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item\">
                            <span style=\"color:black;\" class=\"nav-link\">Panel
                                <b>Usuario</b></span>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                        <li class=\"nav-item\">
                            <a style=\"color:black;\" class=\"nav-link\"
                                href=\"{{url('home')}}\">Logout <i
                                    class=\"fas fa-sign-out-alt\"></i></a>
                        </li>
                        
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"{{url('listCourseUser')}}?id={{id}}\">Listado</a>
                                     <a class=\"dropdown-item\" href=\"{{url('listCourseAssign')}}?id={{id}}\">Mis cursos</a>
                                </div>
                            </li>
                            
                    </ul>
                </div>
            </nav>", "navUser.html.twig", "/var/www/symfony/templates/navUser.html.twig");
    }
}
