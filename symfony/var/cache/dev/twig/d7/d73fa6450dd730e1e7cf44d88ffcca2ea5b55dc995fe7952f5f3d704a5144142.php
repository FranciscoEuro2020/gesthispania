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

/* subjectCourse.html.twig */
class __TwigTemplate_2e0a526fe46f6f1eb0e07ed7e1ef563040de7f81029a9d5aa06abccd55e2a11a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subjectCourse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "subjectCourse.html.twig", 1);
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
        $this->loadTemplate("nav.html.twig", "subjectCourse.html.twig", 28)->display($context);
        // line 29
        echo "    <div class=\"container-fluid\">
        <div class=\"row justify-content-center align-items-center h-100\">
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
            <form method=\"post\">
               
                <div class=\"form-group\">
                    <select class=\"form-control form-control-lg\" id=\"subject\"  name=\"subject\">
                     ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 37
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </select>
                </div>      
                <div class=\"form-group\">
                    <select class=\"form-control form-control-lg\" id=\"course\"  name=\"course\">
                     ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 44
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "course", [], "any", false, false, false, 44), "html", null, true);
            echo " )</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </select>
                </div>        
                <div class=\"form-group\">
                    <button id=\"btnAssign\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Asignar Asignatura</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            \$(\"#btnAssign\").click(function(e){
                e.preventDefault();
                    \$.ajax({
                        url: \"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("asssignManually");
        echo "\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"course\":\$(\"#course\").val(),
                            \"subject\":\$(\"#subject\").val(),
                           
                        },
                        success: function(result){
                            if(result.redirect){
                               alert('Asignatura asignada correctamente.');
                            }
                             if(result.error){
                                  alert('Error ya esta la Asignatura asignada a ese course.');
                             }
                        }
                    });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "subjectCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 63,  173 => 57,  166 => 56,  150 => 46,  137 => 44,  133 => 43,  127 => 39,  116 => 37,  112 => 36,  103 => 29,  101 => 28,  98 => 27,  91 => 26,  61 => 3,  54 => 2,  37 => 1,);
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
               
                <div class=\"form-group\">
                    <select class=\"form-control form-control-lg\" id=\"subject\"  name=\"subject\">
                     {% for dato in subject %}
                        <option value=\"{{ dato.id }}\">{{ dato.name }} </option>
                    {% endfor %}
                    </select>
                </div>      
                <div class=\"form-group\">
                    <select class=\"form-control form-control-lg\" id=\"course\"  name=\"course\">
                     {% for dato in course %}
                        <option value=\"{{ dato.id }}\">{{ dato.title }} ( {{ dato.course }} )</option>
                    {% endfor %}
                    </select>
                </div>        
                <div class=\"form-group\">
                    <button id=\"btnAssign\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Asignar Asignatura</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function(){
            \$(\"#btnAssign\").click(function(e){
                e.preventDefault();
                    \$.ajax({
                        url: \"{{url('asssignManually')}}\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"course\":\$(\"#course\").val(),
                            \"subject\":\$(\"#subject\").val(),
                           
                        },
                        success: function(result){
                            if(result.redirect){
                               alert('Asignatura asignada correctamente.');
                            }
                             if(result.error){
                                  alert('Error ya esta la Asignatura asignada a ese course.');
                             }
                        }
                    });
            });
        });
    </script>
{% endblock %}", "subjectCourse.html.twig", "/var/www/symfony/templates/subjectCourse.html.twig");
    }
}
