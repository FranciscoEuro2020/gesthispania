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

/* courseUserList.html.twig */
class __TwigTemplate_cb70b42b49634f4a5597223df8b398f5ee88d0a462d5cb3bbfd603145bc05b78 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "courseUserList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "courseUserList.html.twig", 1);
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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
    html {
        height: 100%;
    }

    .btnAction {
        margin: 10px;
        display: inline-block;
    }

    #tableProducts_wrapper {
        width: 100%;
    }

    input[type=checkbox] {
        /* Double-sized Checkboxes */
        -ms-transform: scale(2);
        /* IE */
        -moz-transform: scale(2);
        /* FF */
        -webkit-transform: scale(2);
        /* Safari and Chrome */
        -o-transform: scale(2);
        /* Opera */
        transform: scale(2);
        padding: 10px;
    }

    .createCandlestick {
        transform: scale(0.9);
    }

    .candlestick-off,
    .candlestick-on,
    .candlestick-nc {
        font-size: 14px !important;
    }

    .modalContainer {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modalContainer .modal-content {
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
        margin: auto;
        padding: 20px;
        border: 1px solid lightgray;
        width: 80%;
    }

    

    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }

    .close:hover {
        background: #cdcdcd;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "<div id=\"page-content-wrapper\">
 ";
        // line 95
        $this->loadTemplate("navUser.html.twig", "courseUserList.html.twig", 95)->display($context);
        // line 96
        echo "  <div class=\"container-fluid h-100\">
     <div class=\"row justify-content-center align-items-center h-100\">
        <div class=\"col-12\" style=\"padding-top:20px;text-align:center;\">
            <div class=\"col-12\" style=\"padding:40px;\">
                   <div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12\" style=\"font-size:13px;\">
                    <h2 style=\"color:blck; text-align:center;\">Listado cursos(asignaturas)</h2>
                    <table id=\"course\" class=\"table table-striped table-bordered order-column\" cellspacing=\"0\">
                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            let tmp = '';
                \$.ajax({
                    url: \"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listCourseUserManually");
        echo "\",
                    type: \"POST\",
                    dataType: 'json',
                    data: {
                    \"iduser\": ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 121, $this->source); })()), "html", null, true);
        echo ",
                    },
                    success: function(result){
                        for(let i=0; i < result.length; i++){
                             for(let j=0; j < result[i].length; j++){
                             // console.log(result[i][j]);
                               tmp += '<tr><td>' + result[i][j]['course'] + '---'+ result[i][j]['signature'] +'' + '</td><td><a href=\"#\" onclick=\"assign('+result[i][j]['idcourse']+' , '+result[i][j]['idsubject']+', ";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 127, $this->source); })()), "html", null, true);
        echo " );\">  Inscribirse <i class=\"fas fa-sign-out-alt\"></i></a></td></tr>';
                             }
                              
                        }
                         \$(\"#course\").append(\$(tmp));
                    }
                    
                });
               
           
        });
        function assign(idcourse,idsubject,iduser)
        {
           \$.ajax({
                url: \"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("assignSubject");
        echo "\",
                type: \"POST\",
                dataType: 'json',
                data: {
                    \"idcourse\": idcourse,
                    \"idsubject\": idsubject,
                    \"iduser\": iduser,
                },
                success: function(result){
                    console.log(result);
                    if(result.error){
                        alert('Inscrito Correctamente');
                    }
                    else{
                         alert('Ya esta Inscrito en ese curso');
                    }
                    
                }
            });
        }    
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "courseUserList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 141,  223 => 127,  214 => 121,  207 => 117,  198 => 112,  191 => 111,  170 => 96,  168 => 95,  165 => 94,  158 => 93,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
{{parent()}}
<style>
    html {
        height: 100%;
    }

    .btnAction {
        margin: 10px;
        display: inline-block;
    }

    #tableProducts_wrapper {
        width: 100%;
    }

    input[type=checkbox] {
        /* Double-sized Checkboxes */
        -ms-transform: scale(2);
        /* IE */
        -moz-transform: scale(2);
        /* FF */
        -webkit-transform: scale(2);
        /* Safari and Chrome */
        -o-transform: scale(2);
        /* Opera */
        transform: scale(2);
        padding: 10px;
    }

    .createCandlestick {
        transform: scale(0.9);
    }

    .candlestick-off,
    .candlestick-on,
    .candlestick-nc {
        font-size: 14px !important;
    }

    .modalContainer {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modalContainer .modal-content {
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
        margin: auto;
        padding: 20px;
        border: 1px solid lightgray;
        width: 80%;
    }

    

    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }

    .close:hover {
        background: #cdcdcd;
    }
</style>
{% endblock %}
 {% block body %}
<div id=\"page-content-wrapper\">
 {% include \"navUser.html.twig\" %}
  <div class=\"container-fluid h-100\">
     <div class=\"row justify-content-center align-items-center h-100\">
        <div class=\"col-12\" style=\"padding-top:20px;text-align:center;\">
            <div class=\"col-12\" style=\"padding:40px;\">
                   <div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12\" style=\"font-size:13px;\">
                    <h2 style=\"color:blck; text-align:center;\">Listado cursos(asignaturas)</h2>
                    <table id=\"course\" class=\"table table-striped table-bordered order-column\" cellspacing=\"0\">
                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function(){
            let tmp = '';
                \$.ajax({
                    url: \"{{url('listCourseUserManually')}}\",
                    type: \"POST\",
                    dataType: 'json',
                    data: {
                    \"iduser\": {{id}},
                    },
                    success: function(result){
                        for(let i=0; i < result.length; i++){
                             for(let j=0; j < result[i].length; j++){
                             // console.log(result[i][j]);
                               tmp += '<tr><td>' + result[i][j]['course'] + '---'+ result[i][j]['signature'] +'' + '</td><td><a href=\"#\" onclick=\"assign('+result[i][j]['idcourse']+' , '+result[i][j]['idsubject']+', {{id}} );\">  Inscribirse <i class=\"fas fa-sign-out-alt\"></i></a></td></tr>';
                             }
                              
                        }
                         \$(\"#course\").append(\$(tmp));
                    }
                    
                });
               
           
        });
        function assign(idcourse,idsubject,iduser)
        {
           \$.ajax({
                url: \"{{url('assignSubject')}}\",
                type: \"POST\",
                dataType: 'json',
                data: {
                    \"idcourse\": idcourse,
                    \"idsubject\": idsubject,
                    \"iduser\": iduser,
                },
                success: function(result){
                    console.log(result);
                    if(result.error){
                        alert('Inscrito Correctamente');
                    }
                    else{
                         alert('Ya esta Inscrito en ese curso');
                    }
                    
                }
            });
        }    
    </script>
{% endblock %}", "courseUserList.html.twig", "/var/www/symfony/templates/courseUserList.html.twig");
    }
}
