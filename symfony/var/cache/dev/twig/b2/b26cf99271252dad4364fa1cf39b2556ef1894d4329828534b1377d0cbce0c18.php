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

/* login.html.twig */
class __TwigTemplate_5e3023a1099553610213e8c4eef936c157d7e5f113ee39fcf7b33a4fac1e1912 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        .btn-reg {
            color: #fff;
            background-color: #cdcdcd;
            border-color: #000;
        }
        .btn-reg:hover {
            color: #fff;
            background-color: #333;
            border-color: #000;
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            width: 80%;
          }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo " <div id=\"page-content-wrapper\">
        ";
        // line 44
        $this->loadTemplate("nav.html.twig", "login.html.twig", 44)->display($context);
        // line 45
        echo "        <div class=\"container-fluid h-100\">
            <div class=\"row justify-content-center align-items-center h-100\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
                    <form method=\"post\">
                        <br>
                        <h2 style=\"color:blck; text-align:center;\">Login</h2>
                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" placeholder=\"Email\" required autofocus value=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\" placeholder=\"Password\" required value=\"\">
                        </div>
                        <div class=\"form-group\">
                            <button id=\"btnLogin\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Entrar</button>
                        </div>
                        <div class=\"form-group\">
                            <a  href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "\" class=\"btn btn-reg btn-lg btn-block\" >Registrar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        function validateEmail(email) {
            var re = /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(String(email).toLowerCase());
        }

        function checkForm(){
            var result = true;

            if( ! validateEmail( \$(\"#inputEmail\").val() ) ){
                result = false;
                Swal.fire(
                    '";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.error.notvalid.email", [], "messages");
        echo "',
                    result.message,
                    'error'
                );
            }

            if( \$(\"#inputPassword\").val() == \"\" ){
                result = false;
                Swal.fire(
                    'Error Password',
                    result.message,
                    'error'
                );
            }

            return result;
        }

        \$(document).ready(function(){
            \$(\"#btnLogin\").click(function(e){
                e.preventDefault();
                if(checkForm()){
                   
                    \$.ajax({
                        url: \"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("loginManually");
        echo "\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"email\":\$(\"#inputEmail\").val(),
                            \"password\":\$(\"#inputPassword\").val(),
                        },
                        success: function(result){
                            if(result.redirect){
                                var tmpLink = '<a id=\"tmpLink\" href=\"'+result.url+'\"></a>';
                                \$(\"body\").append(tmpLink);
                                \$(\"#tmpLink\")[0].click();
                            }else{
                                if(result.errorUser){
                                    Swal.fire(
                                        '";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.error.user", [], "messages");
        echo "',
                                        result.message,
                                        'error'
                                    );
                                }else{
                                    if(result.errorPassword){
                                        Swal.fire(
                                            '";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.error.password", [], "messages");
        echo "',
                                            result.message,
                                            'error'
                                        );
                                    }else{
                                        if(result.errorData){
                                            Swal.fire(
                                                '";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.error.swal.errorData", [], "messages");
        echo "',
                                                result.message,
                                                'error'
                                            );
                                        }else{
                                            Swal.fire(
                                                '";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login.error.swal.something.wrong", [], "messages");
        echo "',
                                                result.message,
                                                'error'
                                            );
                                        }  
                                    }
                                }
                            }
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
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 143,  242 => 137,  232 => 130,  222 => 123,  204 => 108,  177 => 84,  159 => 70,  152 => 69,  137 => 61,  119 => 45,  117 => 44,  114 => 43,  107 => 42,  61 => 3,  54 => 2,  37 => 1,);
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
        .btn-reg {
            color: #fff;
            background-color: #cdcdcd;
            border-color: #000;
        }
        .btn-reg:hover {
            color: #fff;
            background-color: #333;
            border-color: #000;
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            width: 80%;
          }
    </style>
{% endblock %}

{% block body %}
 <div id=\"page-content-wrapper\">
        {% include \"nav.html.twig\" %}
        <div class=\"container-fluid h-100\">
            <div class=\"row justify-content-center align-items-center h-100\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4 col-xs-6\" style=\"margin-top:90px;\">
                    <form method=\"post\">
                        <br>
                        <h2 style=\"color:blck; text-align:center;\">Login</h2>
                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" placeholder=\"Email\" required autofocus value=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\" placeholder=\"Password\" required value=\"\">
                        </div>
                        <div class=\"form-group\">
                            <button id=\"btnLogin\" class=\"btn btn-info btn-lg btn-block\" type=\"submit\">Entrar</button>
                        </div>
                        <div class=\"form-group\">
                            <a  href=\"{{url('register')}}\" class=\"btn btn-reg btn-lg btn-block\" >Registrar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>

        function validateEmail(email) {
            var re = /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(String(email).toLowerCase());
        }

        function checkForm(){
            var result = true;

            if( ! validateEmail( \$(\"#inputEmail\").val() ) ){
                result = false;
                Swal.fire(
                    '{% trans %}login.error.notvalid.email{% endtrans %}',
                    result.message,
                    'error'
                );
            }

            if( \$(\"#inputPassword\").val() == \"\" ){
                result = false;
                Swal.fire(
                    'Error Password',
                    result.message,
                    'error'
                );
            }

            return result;
        }

        \$(document).ready(function(){
            \$(\"#btnLogin\").click(function(e){
                e.preventDefault();
                if(checkForm()){
                   
                    \$.ajax({
                        url: \"{{url('loginManually')}}\",
                        type: \"POST\",
                        dataType: 'json',
                        data: {
                            \"email\":\$(\"#inputEmail\").val(),
                            \"password\":\$(\"#inputPassword\").val(),
                        },
                        success: function(result){
                            if(result.redirect){
                                var tmpLink = '<a id=\"tmpLink\" href=\"'+result.url+'\"></a>';
                                \$(\"body\").append(tmpLink);
                                \$(\"#tmpLink\")[0].click();
                            }else{
                                if(result.errorUser){
                                    Swal.fire(
                                        '{% trans %}login.error.user{% endtrans %}',
                                        result.message,
                                        'error'
                                    );
                                }else{
                                    if(result.errorPassword){
                                        Swal.fire(
                                            '{% trans %}login.error.password{% endtrans %}',
                                            result.message,
                                            'error'
                                        );
                                    }else{
                                        if(result.errorData){
                                            Swal.fire(
                                                '{% trans %}login.error.swal.errorData{% endtrans %}',
                                                result.message,
                                                'error'
                                            );
                                        }else{
                                            Swal.fire(
                                                '{% trans %}login.error.swal.something.wrong{% endtrans %}',
                                                result.message,
                                                'error'
                                            );
                                        }  
                                    }
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>
{% endblock %}", "login.html.twig", "/var/www/symfony/templates/login.html.twig");
    }
}
