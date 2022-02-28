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

/* subjectList.html.twig */
class __TwigTemplate_ee370447b5a1dc36afeef104a2ace9bbcaa061982e26c23f58fa709cafb60486 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subjectList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "subjectList.html.twig", 1);
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
        $this->loadTemplate("nav.html.twig", "subjectList.html.twig", 95)->display($context);
        // line 96
        echo "  <div class=\"container-fluid h-100\">
     <div class=\"row justify-content-center align-items-center h-100\">
        <div class=\"col-12\" style=\"padding-top:20px;text-align:center;\">
            <div class=\"col-12\" style=\"padding:40px;\">
                 <div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12\" style=\"font-size:13px;\">
                  <br>
                    <h2 style=\"color:blck; text-align:center;\">Listado Asignaturas</h2>
                    <table class=\"table table-striped table-bordered order-column\" cellspacing=\"0\">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>duracion(meses)</th>
                    <th>Créditos</th>
                    
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 110
            echo "                        <tr>
                            <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "name", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                            <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "duration", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                            <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "credits", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "subjectList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 117,  203 => 114,  199 => 113,  195 => 112,  191 => 111,  188 => 110,  184 => 109,  169 => 96,  167 => 95,  164 => 94,  157 => 93,  60 => 3,  53 => 2,  36 => 1,);
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
 {% include \"nav.html.twig\" %}
  <div class=\"container-fluid h-100\">
     <div class=\"row justify-content-center align-items-center h-100\">
        <div class=\"col-12\" style=\"padding-top:20px;text-align:center;\">
            <div class=\"col-12\" style=\"padding:40px;\">
                 <div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12\" style=\"font-size:13px;\">
                  <br>
                    <h2 style=\"color:blck; text-align:center;\">Listado Asignaturas</h2>
                    <table class=\"table table-striped table-bordered order-column\" cellspacing=\"0\">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>duracion(meses)</th>
                    <th>Créditos</th>
                    
                    {% for dato in subject %}
                        <tr>
                            <td>{{ dato.id }}</td>
                            <td>{{ dato.name }}</td>
                            <td>{{ dato.duration }}</td>
                            <td>{{ dato.credits }}</td>
                        </tr>
                    {% endfor %}
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "subjectList.html.twig", "/var/www/symfony/templates/subjectList.html.twig");
    }
}
