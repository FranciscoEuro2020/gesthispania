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

/* nav.html.twig */
class __TwigTemplate_e50bd365d76dc2c1d39c7474ff9a7a829a19abc1eb4275b16238c9efce645f7e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom\">
                
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    
                    <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                         <li class=\"nav-item\">
                            <a style=\"color:black;\" class=\"nav-link\"
                                href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">Home <i
                                    class=\"fas fa-sign-out-alt\"></i></a>
                        </li>
                        
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("course");
        echo "\">Crear Curso</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listCourse");
        echo "\">Listado Cursos</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subjectRegister");
        echo "\">Crear Asignatura</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listSubject");
        echo "\">Listado Asignaturas</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("addSubject");
        echo "\">Añadir Asignatura a Course</a>
                                </div>
                            </li>
                            
                    </ul>
                </div>
            </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  70 => 20,  65 => 18,  61 => 17,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom\">
                
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    
                    <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                         <li class=\"nav-item\">
                            <a style=\"color:black;\" class=\"nav-link\"
                                href=\"{{url('home')}}\">Home <i
                                    class=\"fas fa-sign-out-alt\"></i></a>
                        </li>
                        
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Menu
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"{{url('course')}}\">Crear Curso</a>
                                    <a class=\"dropdown-item\" href=\"{{url('listCourse')}}\">Listado Cursos</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"{{url('subjectRegister')}}\">Crear Asignatura</a>
                                    <a class=\"dropdown-item\" href=\"{{url('listSubject')}}\">Listado Asignaturas</a>
                                    <a class=\"dropdown-item\" href=\"{{url('addSubject')}}\">Añadir Asignatura a Course</a>
                                </div>
                            </li>
                            
                    </ul>
                </div>
            </nav>", "nav.html.twig", "/var/www/symfony/templates/nav.html.twig");
    }
}
