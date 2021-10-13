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

/* profile.html.twig */
class __TwigTemplate_2851aa1182b27e0d76599da7d5d74d45ea503e2c1054bcd41ae47acd6e4745ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 3, $this->source); })()), "authFirstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 3, $this->source); })()), "authLastName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/main.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/profile.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <i class=\"fas fa-chevron-left back_chevron position-relative top-0 start-0 col-12 d-none d-sm-block d-md-none d-lg-nonw\"></i>
    
    <div class=\"profile_picture col-12\"></div>

    <div class=\"form_input row\">

        <div class=\"small_input row\">
            <input type=\"text\" name=\"firstName\" placeholder=\"First Name\" class=\"col-5 col-md-5 col-lg-2 profile_input\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 18, $this->source); })()), "authFirstName", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
            <input type=\"text\" name=\"lastName\" placeholder=\"Last Name\" class=\"col-5 col-md-5 col-lg-2 profile_input\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 19, $this->source); })()), "authLastName", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
        </div>

        <div class=\"big_input row\">
            <input type=\"text\" name=\"username\" placeholder=\"Username\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 23, $this->source); })()), "authUsername", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
            <input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 24, $this->source); })()), "authEmail", [], "any", false, false, false, 24), "html", null, true);
        echo "\"
            <input type=\"text\" name=\"phoneNumber\" placeholder=\"Phone Number\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 25, $this->source); })()), "authPhoneNumber", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
            <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Author"]) || array_key_exists("Author", $context) ? $context["Author"] : (function () { throw new RuntimeError('Variable "Author" does not exist.', 26, $this->source); })()), "authPassword", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
        </div>

    </div>

    <div class=\"btns text-center\">
    
        <div class=\"update_btn button col-4 col-md-4 col-lg-2 position-relative top-0 start-50 translate-middle-x\">Update</div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 26,  149 => 25,  145 => 24,  141 => 23,  134 => 19,  130 => 18,  120 => 10,  110 => 9,  98 => 6,  93 => 5,  83 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} {{Author.authFirstName}} {{Author.authLastName}} {% endblock %} 
{% block stylesheet %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../css/main.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../css/profile.css') }}\"/>
{% endblock %} 

{% block body %}

    <i class=\"fas fa-chevron-left back_chevron position-relative top-0 start-0 col-12 d-none d-sm-block d-md-none d-lg-nonw\"></i>
    
    <div class=\"profile_picture col-12\"></div>

    <div class=\"form_input row\">

        <div class=\"small_input row\">
            <input type=\"text\" name=\"firstName\" placeholder=\"First Name\" class=\"col-5 col-md-5 col-lg-2 profile_input\" value=\"{{Author.authFirstName}}\">
            <input type=\"text\" name=\"lastName\" placeholder=\"Last Name\" class=\"col-5 col-md-5 col-lg-2 profile_input\" value=\"{{Author.authLastName}}\">
        </div>

        <div class=\"big_input row\">
            <input type=\"text\" name=\"username\" placeholder=\"Username\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"{{Author.authUsername}}\">
            <input type=\"text\" name=\"email\" placeholder=\"Email\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"{{Author.authEmail}}\"
            <input type=\"text\" name=\"phoneNumber\" placeholder=\"Phone Number\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"{{Author.authPhoneNumber}}\">
            <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"position-relative top-0 start-50 translate-middle-x col-12 col-md-12 col-lg-6 profile_input\" value=\"{{Author.authPassword}}\">
        </div>

    </div>

    <div class=\"btns text-center\">
    
        <div class=\"update_btn button col-4 col-md-4 col-lg-2 position-relative top-0 start-50 translate-middle-x\">Update</div>

    </div>


{% endblock %}", "profile.html.twig", "/Users/h4n51n_pr3m4/Desktop/hypothesis/templates/profile.html.twig");
    }
}
