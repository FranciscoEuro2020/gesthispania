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

/* panel.html.twig */
class __TwigTemplate_60118825ded554e8d80f3ba49a0da7d68341108b61f66170b22501d4332d328e extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
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

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo " <div id=\"page-content-wrapper\">
        ";
        // line 96
        $this->loadTemplate("navUser.html.twig", "panel.html.twig", 96)->display($context);
        // line 97
        echo "            <div class=\"container-fluid\">
               <div class=\"row justify-content-center align-items-center h-100\">
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
            <form method=\"post\">
                <br>
                <h2 style=\"color:blck; text-align:center;\">Mis Datos</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"name\" id=\"inputName\" class=\"form-control form-control-lg\" placeholder=\"Nombre\" required autofocus value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "name", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"surname\" id=\"inputSurname\" class=\"form-control form-control-lg\" placeholder=\"Apellidos\" required autofocus value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "surname", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" placeholder=\"Email\" required autofocus value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "login", [], "any", false, false, false, 110), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\" placeholder=\"Password\" required value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"inputPasswordVerification\" class=\"form-control form-control-lg\" placeholder=\"Password Verificación\" required value=\"\">
                </div>
                <div class=\"form-group\">
                    <button id=\"btnReg\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Guardar Datos</button>
                </div>
            </form>
        </div>
    </div>
    
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function checkForm(){
            var result = true;


            if( \$(\"#inputPassword\").val() != \$(\"#inputPasswordVerification\").val() || \$(\"#inputPassword\").val() ==='' ){
                result = false;
                Swal.fire(
                    'No coinciden la contraseña, compruebe que sea la misma',
                    result.message,
                    'error'
                );
            }

            return result;
        }

        \$(document).ready(function(){
            \$(\"#btnReg\").click(function(e){
                e.preventDefault();
                if(checkForm()){
                   
                    \$.ajax({
                        url: \"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("registerManually");
        echo "\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"name\":\$(\"#inputName\").val(),
                            \"surname\":\$(\"#inputSurname\").val(),
                            \"password\":\$(\"#inputPassword\").val(),
                            \"email\":\$(\"#inputEmail\").val(),
                        },
                        success: function(result){
                            if(result.redirect){
                               alert('Usuario Registrado correctamente. Ya puede loguearse');
                            }
                             var tmpLink = '<a id=\"tmpLink\" href=\"'+result.url+'\"></a>';
                                \$(\"body\").append(tmpLink);
                                \$(\"#tmpLink\")[0].click();
                        }
                    });
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 152,  221 => 128,  214 => 127,  191 => 110,  185 => 107,  179 => 104,  170 => 97,  168 => 96,  165 => 95,  158 => 94,  61 => 4,  54 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
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
            <div class=\"container-fluid\">
               <div class=\"row justify-content-center align-items-center h-100\">
            <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
            <form method=\"post\">
                <br>
                <h2 style=\"color:blck; text-align:center;\">Mis Datos</h2>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"name\" id=\"inputName\" class=\"form-control form-control-lg\" placeholder=\"Nombre\" required autofocus value=\"{{ user.name }}\">
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"surname\" id=\"inputSurname\" class=\"form-control form-control-lg\" placeholder=\"Apellidos\" required autofocus value=\"{{ user.surname }}\">
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" placeholder=\"Email\" required autofocus value=\"{{ user.login }}\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\" placeholder=\"Password\" required value=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"inputPasswordVerification\" class=\"form-control form-control-lg\" placeholder=\"Password Verificación\" required value=\"\">
                </div>
                <div class=\"form-group\">
                    <button id=\"btnReg\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Guardar Datos</button>
                </div>
            </form>
        </div>
    </div>
    
 {% endblock %}

 {% block javascripts %}
    {{ parent() }}
    <script>
        function checkForm(){
            var result = true;


            if( \$(\"#inputPassword\").val() != \$(\"#inputPasswordVerification\").val() || \$(\"#inputPassword\").val() ==='' ){
                result = false;
                Swal.fire(
                    'No coinciden la contraseña, compruebe que sea la misma',
                    result.message,
                    'error'
                );
            }

            return result;
        }

        \$(document).ready(function(){
            \$(\"#btnReg\").click(function(e){
                e.preventDefault();
                if(checkForm()){
                   
                    \$.ajax({
                        url: \"{{url('registerManually')}}\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"name\":\$(\"#inputName\").val(),
                            \"surname\":\$(\"#inputSurname\").val(),
                            \"password\":\$(\"#inputPassword\").val(),
                            \"email\":\$(\"#inputEmail\").val(),
                        },
                        success: function(result){
                            if(result.redirect){
                               alert('Usuario Registrado correctamente. Ya puede loguearse');
                            }
                             var tmpLink = '<a id=\"tmpLink\" href=\"'+result.url+'\"></a>';
                                \$(\"body\").append(tmpLink);
                                \$(\"#tmpLink\")[0].click();
                        }
                    });
                }
            });
        });
    </script>
{% endblock %}
", "panel.html.twig", "/var/www/symfony/templates/panel.html.twig");
    }
}
