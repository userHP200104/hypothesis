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

/* home.html.twig */
class __TwigTemplate_90c50ce487560e6bbb0af2ed4ad0ba6d99a4f119d082c08843eab2b3896e35f0 extends Template
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
            'session' => [$this, 'block_session'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        echo " Home ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/main.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/newQuestion.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_session($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session"));

        // line 11
        echo "    ";
        if ((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 12, $this->source); })()), "html", null, true);
            echo " logged in
        ";
        } else {
            // line 14
            echo "            <div class=\"register_sign_in_btn position-relative top-50 start-0 translate-middle-y col-6 col-sm-6 col-md-6 col-lg-4 row\">
                <div class=\"sign_in_btn register_sign_in_btn_props col-6 position-relative top-50 start-50 translate-middle-x\">
                    <a href=\"/sign-in\">Sign In</a>
                </div>

                <div class=\"register_btn register_sign_in_btn_props position-relative col-6 position-relative top-50 start-50 translate-middle-x\">
                    <a href=\"/register\">Register</a>
                </div>
            </div>
        ";
        }
        // line 24
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <div id=\"home_body\" class=\"row col-12\">

        <div id=\"new_question_background\">
            <form id=\"new_question_dialogue\">

                <div class=\"form_widget\">
                    <i class=\"fas fa-times close_icon\"></i>
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["no-validate" => "no-validate"]]);
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "question_title", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control ask_question_title", "placeholder" => "Enter Title"]]);
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "question", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control ask_question_dialouge", "placeholder" => "Enter Question Here.."]]);
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "post", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control post_btn", "placeholder" => "Enter Question Here.."]]);
        echo "
                    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
                </div>

                ";
        // line 48
        echo "
            </form>
        </div>

        ";
        // line 53
        echo "
        <div class=\"search_container col-12 d-block d-sm-block d-md-block d-lg-none\">
            <i class=\"fas fa-search search_icon\"></i>
            <input type=\"text\" class=\"search_bar col-10\" placeholder=\"Search...\" spellcheck=\"true\" autocomplete=\"on\">
            <select class=\"subject_select\">
                <option value=\"All\">All</option>
                <option value=\"Physics\">Physics</option>
                <option value=\"Chemistry\">Chemistry</option>
                <option value=\"Biology\">Biology</option>
            </select>
        </div>

        ";
        // line 66
        echo "    
        <div class=\"desktop_nav_container d-none d-sm-none d-md-none d-lg-block col-lg-4\">
            <div class=\"desktop_navbar row\">
                <div class=\"col-3\"></div>
                <div class=\"nav_container col-9\">
                    <h1 class=\"nav_menu_header\">Menu</h1>

                        <div class=\"nav_btn nav_btn_active col-9\">
                            <i class=\"fas fa-home nav_icon\"></i>
                            Home
                        </div>

                    <a href=\"/explore\">
                        <div class=\"nav_btn  col-9\">
                            <i class=\"fas fa-compass nav_icon\"></i>
                            Explore
                        </div>
                    </a>

                    <a href=\"/my-answers\">
                        <div class=\"nav_btn  col-9\">
                            <i class=\"fas fa-comment-alt nav_icon\"></i>
                            My Answers
                        </div>
                    </a>

                </div>
            </div>
            
        </div>

        <div class=\"desktop_question_container d-none d-sm-none d-md-none d-lg-block col-lg-4\">
            <div class=\"question_box position-relative top-0 start-50 translate-middle-x col-12 row\">
                <div class=\"gap col-1\">
                    <div class=\"voter position-relative top-50 start-0 translate-middle-y\">
                        <i class=\"fas fa-sort-up upvote position-relative top-0 start-50 translate-middle-y\"></i>
                        <div class=\"vote_number position-relative top-0 start-50 translate-middle-y\">12k</div>
                        <i class=\"fas fa-sort-down downvote position-relative bottom-0 start-50 translate-middle-y\"></i>
                    </div>
                </div>
                <div class=\"col-10\">
                    <h1 class=\"quetion_title\">What is a Black Hole?</h1>
                    <div class=\"question\">
                        I have become very intrested in astro physics lately and I was looking at the phenomenon of a black hole and I’ve done some research but do not fully understand what a black hole is, how it is formed and what it does. I have become very intrested in astro physics lately and I was looking at the phenomenon of a black hole and I’ve done some research but do not fully understand what a black hole is, how it is formed and what it does.
                    </div>
                    <div class=\"break_line\"></div>
                    <div class=\"user\">
                        <i class=\"far fa-user-circle user_profile\"></i>
                        User
                    </div>
                    <div class=\"answers\">
                        <i class=\"far fa-comment-alt answer_icon\"></i>
                        50+
                    </div>
                </div>
                <div class=\"gap col-1\"></div>            
            </div>
        </div>
        ";
        // line 125
        echo "

        <div class=\"desktop_rank_container d-none d-sm-none d-md-none d-lg-block col-lg-4\">
            <div class=\"subject_filter position-relative top-0 start-50 translate-middle-x\">
            
                <label for=\"input-1\">
                    <input type=\"radio\" id=\"input-1\" name=\"group\" checked/>
                    <span class=\"btn\">
                        <span class=\"btn-icon\">
                            <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/physics.svg"), "html", null, true);
        echo "\" class=\"radio_icon\">
                            <span class=\"btn-text\">
                                Physics
                            </span>
                        </span>
                    </span>
                </label>

                <label for=\"input-2\">
                    <input type=\"radio\" id=\"input-2\" name=\"group\"/>
                    <span class=\"btn\">
                        <span class=\"btn-icon\">
                            <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/chemistry.svg"), "html", null, true);
        echo "\" class=\"radio_icon\">
                            <span class=\"btn-text\">
                                Chemistry
                            </span>
                        </span>
                    </span>
                </label>

                <label for=\"input-3\">
                    <input type=\"radio\" id=\"input-3\" name=\"group\"/>
                    <span class=\"btn\">
                        <span class=\"btn-icon\">
                            <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/biology.svg"), "html", null, true);
        echo "\" class=\"radio_icon\">
                            <span class=\"btn-text\">
                                Biology
                            </span>
                        </span>
                    </span>
                </label>
            
            </div>
            <div class=\"author_rank_container position-relative top-0 start-50 translate-middle-x\">
            
                <h1 class=\"author_rank_title\">Top Authors:</h1>

                <div class=\"author_rank\">
                    <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">1</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">2</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">3</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">4</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">5</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">6</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>
                </div>
            </div>

            <div class=\"ask_question_btn position-relative top-0 start-50 translate-middle-x\">
                <i class=\"fas fa-comment-alt ask_question\"></i>
                Ask Question
            </div>
        </div>
        

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 228
        echo "    <script src=\"../js/addQuestion.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 228,  393 => 227,  315 => 158,  300 => 146,  285 => 134,  274 => 125,  214 => 66,  200 => 53,  194 => 48,  188 => 42,  184 => 41,  180 => 40,  176 => 39,  172 => 38,  160 => 28,  150 => 27,  139 => 24,  127 => 14,  121 => 12,  118 => 11,  108 => 10,  96 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Home {% endblock %} 

{% block stylesheet %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../css/main.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../css/newQuestion.css') }}\"/>
{% endblock %} 

{% block session %}
    {% if (username) %}
            {{username}} logged in
        {% else %}
            <div class=\"register_sign_in_btn position-relative top-50 start-0 translate-middle-y col-6 col-sm-6 col-md-6 col-lg-4 row\">
                <div class=\"sign_in_btn register_sign_in_btn_props col-6 position-relative top-50 start-50 translate-middle-x\">
                    <a href=\"/sign-in\">Sign In</a>
                </div>

                <div class=\"register_btn register_sign_in_btn_props position-relative col-6 position-relative top-50 start-50 translate-middle-x\">
                    <a href=\"/register\">Register</a>
                </div>
            </div>
        {% endif %}

{% endblock %} 

{% block body %}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <div id=\"home_body\" class=\"row col-12\">

        <div id=\"new_question_background\">
            <form id=\"new_question_dialogue\">

                <div class=\"form_widget\">
                    <i class=\"fas fa-times close_icon\"></i>
                    {{form_start(form, {'attr': {'no-validate': 'no-validate'}})}}
                        {{form_widget(form.question_title, {'attr': {'class' : 'form-control ask_question_title', 'placeholder': 'Enter Title'}})}}
                        {{form_widget(form.question, {'attr': {'class' : 'form-control ask_question_dialouge', 'placeholder': 'Enter Question Here..'}})}}
                        {{form_widget(form.post, {'attr': {'class' : 'form-control post_btn', 'placeholder': 'Enter Question Here..'}})}}
                    {{form_end(form)}}
                </div>

                {# <input type=\"text\" name=\"firstName\" placeholder=\"Enter Title Here\" class=\"ask_question_title\">
                <textarea placeholder=\"Enter Question Here...\" class=\"ask_question_dialouge\"></textarea>
                <button class=\"post_btn\">Post</button> #}

            </form>
        </div>

        {# only for mobile and ipad #}

        <div class=\"search_container col-12 d-block d-sm-block d-md-block d-lg-none\">
            <i class=\"fas fa-search search_icon\"></i>
            <input type=\"text\" class=\"search_bar col-10\" placeholder=\"Search...\" spellcheck=\"true\" autocomplete=\"on\">
            <select class=\"subject_select\">
                <option value=\"All\">All</option>
                <option value=\"Physics\">Physics</option>
                <option value=\"Chemistry\">Chemistry</option>
                <option value=\"Biology\">Biology</option>
            </select>
        </div>

        {# for desktop and ipad #}
    
        <div class=\"desktop_nav_container d-none d-sm-none d-md-none d-lg-block col-lg-4\">
            <div class=\"desktop_navbar row\">
                <div class=\"col-3\"></div>
                <div class=\"nav_container col-9\">
                    <h1 class=\"nav_menu_header\">Menu</h1>

                        <div class=\"nav_btn nav_btn_active col-9\">
                            <i class=\"fas fa-home nav_icon\"></i>
                            Home
                        </div>

                    <a href=\"/explore\">
                        <div class=\"nav_btn  col-9\">
                            <i class=\"fas fa-compass nav_icon\"></i>
                            Explore
                        </div>
                    </a>

                    <a href=\"/my-answers\">
                        <div class=\"nav_btn  col-9\">
                            <i class=\"fas fa-comment-alt nav_icon\"></i>
                            My Answers
                        </div>
                    </a>

                </div>
            </div>
            
        </div>

        <div class=\"desktop_question_container d-none d-sm-none d-md-none d-lg-block col-lg-4\">
            <div class=\"question_box position-relative top-0 start-50 translate-middle-x col-12 row\">
                <div class=\"gap col-1\">
                    <div class=\"voter position-relative top-50 start-0 translate-middle-y\">
                        <i class=\"fas fa-sort-up upvote position-relative top-0 start-50 translate-middle-y\"></i>
                        <div class=\"vote_number position-relative top-0 start-50 translate-middle-y\">12k</div>
                        <i class=\"fas fa-sort-down downvote position-relative bottom-0 start-50 translate-middle-y\"></i>
                    </div>
                </div>
                <div class=\"col-10\">
                    <h1 class=\"quetion_title\">What is a Black Hole?</h1>
                    <div class=\"question\">
                        I have become very intrested in astro physics lately and I was looking at the phenomenon of a black hole and I’ve done some research but do not fully understand what a black hole is, how it is formed and what it does. I have become very intrested in astro physics lately and I was looking at the phenomenon of a black hole and I’ve done some research but do not fully understand what a black hole is, how it is formed and what it does.
                    </div>
                    <div class=\"break_line\"></div>
                    <div class=\"user\">
                        <i class=\"far fa-user-circle user_profile\"></i>
                        User
                    </div>
                    <div class=\"answers\">
                        <i class=\"far fa-comment-alt answer_icon\"></i>
                        50+
                    </div>
                </div>
                <div class=\"gap col-1\"></div>            
            </div>
        </div>
        {# desktop question container #}


        <div class=\"desktop_rank_container d-none d-sm-none d-md-none d-lg-block col-lg-4\">
            <div class=\"subject_filter position-relative top-0 start-50 translate-middle-x\">
            
                <label for=\"input-1\">
                    <input type=\"radio\" id=\"input-1\" name=\"group\" checked/>
                    <span class=\"btn\">
                        <span class=\"btn-icon\">
                            <img src=\"{{ asset('../assets/physics.svg')}}\" class=\"radio_icon\">
                            <span class=\"btn-text\">
                                Physics
                            </span>
                        </span>
                    </span>
                </label>

                <label for=\"input-2\">
                    <input type=\"radio\" id=\"input-2\" name=\"group\"/>
                    <span class=\"btn\">
                        <span class=\"btn-icon\">
                            <img src=\"{{ asset('../assets/chemistry.svg')}}\" class=\"radio_icon\">
                            <span class=\"btn-text\">
                                Chemistry
                            </span>
                        </span>
                    </span>
                </label>

                <label for=\"input-3\">
                    <input type=\"radio\" id=\"input-3\" name=\"group\"/>
                    <span class=\"btn\">
                        <span class=\"btn-icon\">
                            <img src=\"{{ asset('../assets/biology.svg')}}\" class=\"radio_icon\">
                            <span class=\"btn-text\">
                                Biology
                            </span>
                        </span>
                    </span>
                </label>
            
            </div>
            <div class=\"author_rank_container position-relative top-0 start-50 translate-middle-x\">
            
                <h1 class=\"author_rank_title\">Top Authors:</h1>

                <div class=\"author_rank\">
                    <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">1</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">2</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">3</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">4</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">5</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>

                        <div class=\"rank\"> 
                        <i class=\"far fa-user-circle user_rank_image\"></i>
                        <div class=\"user_rank_name\">The_Mad_Scientist</div>
                        <div class=\"user_rank_number\">6</div>
                        <i class=\"fas fa-sort-up user_rank_level\"></i>
                    </div>
                </div>
            </div>

            <div class=\"ask_question_btn position-relative top-0 start-50 translate-middle-x\">
                <i class=\"fas fa-comment-alt ask_question\"></i>
                Ask Question
            </div>
        </div>
        

    </div>

{% endblock %}

{% block javascripts %}
    <script src=\"../js/addQuestion.js\"></script>
{% endblock %}
", "home.html.twig", "/Users/h4n51n_pr3m4/Desktop/hypothesis/templates/home.html.twig");
    }
}
