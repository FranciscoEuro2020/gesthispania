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

/* course.html.twig */
class __TwigTemplate_3a8212df3b563caedb1c83a309242bdf816f95515feb728c2d0ff329f1ceb2ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        html{
            height:100%;
            font-size:12px;
        }
        body.login-body{
            height:100%;
            padding-top:20px;
        }
        .btn-info {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }
        .btn-info:hover {
            color: #fff;
            background-color: #333;
            border-color: #000;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo " <div id=\"page-content-wrapper\">
 ";
        // line 28
        $this->loadTemplate("nav.html.twig", "course.html.twig", 28)->display($context);
        // line 29
        echo "    <div class=\"container-fluid\">
        <div class=\"row justify-content-center align-items-center h-100\">
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
            <form method=\"post\">
                <br>
                <h2 style=\"color:blck; text-align:center;\">Cursos</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"course\" id=\"inputCurso\" class=\"form-control form-control-lg\" placeholder=\"curso\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"title\" id=\"inputTitle\" class=\"form-control form-control-lg\" placeholder=\"title\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"number\" name=\"duration\" id=\"inputDuration\" class=\"form-control form-control-lg\" placeholder=\"Duración\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"number\" name=\"year\" id=\"inputYear\" class=\"form-control form-control-lg\" placeholder=\"Año\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Registrar Curso</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  100 => 28,  97 => 27,  90 => 26,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{parent()}}
    <style>
        html{
            height:100%;
            font-size:12px;
        }
        body.login-body{
            height:100%;
            padding-top:20px;
        }
        .btn-info {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }
        .btn-info:hover {
            color: #fff;
            background-color: #333;
            border-color: #000;
        }
    </style>
{% endblock %}

{% block body %}
 <div id=\"page-content-wrapper\">
 {% include \"nav.html.twig\" %}
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center align-items-center h-100\">
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
            <form method=\"post\">
                <br>
                <h2 style=\"color:blck; text-align:center;\">Cursos</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"course\" id=\"inputCurso\" class=\"form-control form-control-lg\" placeholder=\"curso\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"title\" id=\"inputTitle\" class=\"form-control form-control-lg\" placeholder=\"title\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"number\" name=\"duration\" id=\"inputDuration\" class=\"form-control form-control-lg\" placeholder=\"Duración\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"number\" name=\"year\" id=\"inputYear\" class=\"form-control form-control-lg\" placeholder=\"Año\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Registrar Curso</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "course.html.twig", "/var/www/symfony/templates/course.html.twig");
    }
}
