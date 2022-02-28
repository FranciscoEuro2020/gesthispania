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

/* subject.html.twig */
class __TwigTemplate_fe6ddac2b3de62b6adcfcc06052e98d94c74d94bad98bcc20484a67adc571584 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subject.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "subject.html.twig", 1);
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
        $this->loadTemplate("nav.html.twig", "subject.html.twig", 28)->display($context);
        // line 29
        echo "    <div class=\"container-fluid\">
        <div class=\"row justify-content-center align-items-center h-100\">
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
            <form method=\"post\">
                <br>
                <h2 style=\"color:blck; text-align:center;\">Crear Asignatura</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"name\" id=\"inputName\" class=\"form-control form-control-lg\" placeholder=\"Nombre\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"credit\" id=\"inputCredit\" class=\"form-control form-control-lg\" placeholder=\"Créditos\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <select class=\"form-control form-control-lg\" id=\"inputDuration\"  name=\"duration\">
                        <option value=\"anual\">Anual </option>
                        <option value=\"cuatrimestral\">Cuatrimestral </option>
                    </select>
                </div>       
                <div class=\"form-group\">
                    <button id=\"btnSubject\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Registrar Asignatura</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>       
        \$(document).ready(function(){
            \$(\"#btnSubject\").click(function(e){
                e.preventDefault();
                    \$.ajax({
                        url: \"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("subjectManually");
        echo "\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"name\":\$(\"#inputName\").val(),
                            \"credit\":\$(\"#inputCredit\").val(),
                            \"duration\":\$(\"#inputDuration\").val()
                        },
                        success: function(result){
                            if(result.redirect){
                               alert('Asignatura Registrada correctamente.');
                            }
                             var tmpLink = '<a id=\"tmpLink\" href=\"'+result.url+'\"></a>';
                                \$(\"body\").append(tmpLink);
                                \$(\"#tmpLink\")[0].click();
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
        return "subject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  142 => 56,  135 => 55,  103 => 29,  101 => 28,  98 => 27,  91 => 26,  61 => 3,  54 => 2,  37 => 1,);
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
                <h2 style=\"color:blck; text-align:center;\">Crear Asignatura</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"name\" id=\"inputName\" class=\"form-control form-control-lg\" placeholder=\"Nombre\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"credit\" id=\"inputCredit\" class=\"form-control form-control-lg\" placeholder=\"Créditos\" required autofocus value=\"\">
                </div>
                <div class=\"form-group\">
                    <select class=\"form-control form-control-lg\" id=\"inputDuration\"  name=\"duration\">
                        <option value=\"anual\">Anual </option>
                        <option value=\"cuatrimestral\">Cuatrimestral </option>
                    </select>
                </div>       
                <div class=\"form-group\">
                    <button id=\"btnSubject\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Registrar Asignatura</button>
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
            \$(\"#btnSubject\").click(function(e){
                e.preventDefault();
                    \$.ajax({
                        url: \"{{url('subjectManually')}}\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"name\":\$(\"#inputName\").val(),
                            \"credit\":\$(\"#inputCredit\").val(),
                            \"duration\":\$(\"#inputDuration\").val()
                        },
                        success: function(result){
                            if(result.redirect){
                               alert('Asignatura Registrada correctamente.');
                            }
                             var tmpLink = '<a id=\"tmpLink\" href=\"'+result.url+'\"></a>';
                                \$(\"body\").append(tmpLink);
                                \$(\"#tmpLink\")[0].click();
                        }
                    });
            });
        });
    </script>
{% endblock %}", "subject.html.twig", "/var/www/symfony/templates/subject.html.twig");
    }
}
