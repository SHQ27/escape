<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /includes/layout.html.twig */
class __TwigTemplate_146951501908270b5b684d05b7c4a4acd3115a4b952afa6114bd83e118e03155 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/includes/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/includes/layout.html.twig"));

        // line 1
        echo "  <!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">

        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>

        <!-- HEADER -->
        <div class=\"container-fluid\">

            <div id='header' class='row'>
                <div class='col-md-2 logoContainer'><a href='";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "'><img id='logo' class='img-fluid' src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "'></a></div>
                <div class='col-md-8 linkContainer row'>
                    <a class='commonLink' data-goto='juegos' href='#'>Juegos</a>
                    <a class='commonLink' href='#'>Cómo jugar</a>
                    <a class='commonLink' href='#'>Eventos</a>
                    <a class='commonLink' data-goto='map' href='#'>Encontranos</a>
                    <a href='";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservas");
        echo "'><div class='reservaAhora'>RESERVÁ AHORA</div></a>
                </div>
                <div class='col-md-2 socialContainer'>
                    <img class='redesLinkFb' href='#' src='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_fb.jpg"), "html", null, true);
        echo "'>
                    <img class='redesLinkIg' href='#' src='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_ig.png"), "html", null, true);
        echo "'>
                </div>
            </div>
        </div>


        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
        <!-- FOOTER -->
        <div>

            <div id='footer' class=\"footer\">
                <div class='logoFooterContainer'>
                    <a id='bottomLogo' data-goto='header' href='#'><img class='logoFooter' class='img-fluid' src='";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "'></a>
                </div>
                <div class='linkFooterContainer'>
                    <a class='commonLinkFooter' data-goto='juegos' href='#'>Juegos</a>
                    <a class='commonLinkFooter' href='#'>Cómo jugar</a>
                    <a class='commonLinkFooter' href='#'>Eventos</a>
                    <a class='commonLinkFooter' href='#'>Encontranos</a>
                    <a class='commonLinkFooter' href='#'>Reservá Ahora</a>
                </div>
                <div class='infoAdressContainer'>
                    <a class='infoAdressFooter' href='#'>Dirección - Horario de atención</a>
                </div>
            </div>
        <div>

        ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Club de escape - Pilar";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/site.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery/jquery-3.4.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Homepage Scroll -->
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/homepage.js"), "html", null, true);
        echo "\"></script>

        <!-- Google Map -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCOc0zLWwXekSXmjE7xbfLpaF9w2VAhjgM&callback=initMap\"
        async defer></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/includes/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 74,  232 => 71,  226 => 68,  222 => 67,  218 => 66,  215 => 65,  206 => 64,  189 => 42,  176 => 14,  167 => 13,  149 => 11,  137 => 79,  135 => 64,  117 => 49,  109 => 43,  107 => 42,  98 => 36,  94 => 35,  88 => 32,  77 => 26,  65 => 17,  62 => 16,  60 => 13,  55 => 11,  50 => 9,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("  <!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap/bootstrap.min.css')}}\">

        <title>{% block title %}Club de escape - Pilar{% endblock %}</title>

        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/site.css')}}\" />
        {% endblock %}
        <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>

        <!-- HEADER -->
        <div class=\"container-fluid\">

            <div id='header' class='row'>
                <div class='col-md-2 logoContainer'><a href='{{path('homepage')}}'><img id='logo' class='img-fluid' src='{{asset('img/logo.png')}}'></a></div>
                <div class='col-md-8 linkContainer row'>
                    <a class='commonLink' data-goto='juegos' href='#'>Juegos</a>
                    <a class='commonLink' href='#'>Cómo jugar</a>
                    <a class='commonLink' href='#'>Eventos</a>
                    <a class='commonLink' data-goto='map' href='#'>Encontranos</a>
                    <a href='{{path('reservas')}}'><div class='reservaAhora'>RESERVÁ AHORA</div></a>
                </div>
                <div class='col-md-2 socialContainer'>
                    <img class='redesLinkFb' href='#' src='{{asset('img/logo_fb.jpg')}}'>
                    <img class='redesLinkIg' href='#' src='{{asset('img/logo_ig.png')}}'>
                </div>
            </div>
        </div>


        {% block body %}{% endblock %}

        <!-- FOOTER -->
        <div>

            <div id='footer' class=\"footer\">
                <div class='logoFooterContainer'>
                    <a id='bottomLogo' data-goto='header' href='#'><img class='logoFooter' class='img-fluid' src='{{asset('img/logo.png')}}'></a>
                </div>
                <div class='linkFooterContainer'>
                    <a class='commonLinkFooter' data-goto='juegos' href='#'>Juegos</a>
                    <a class='commonLinkFooter' href='#'>Cómo jugar</a>
                    <a class='commonLinkFooter' href='#'>Eventos</a>
                    <a class='commonLinkFooter' href='#'>Encontranos</a>
                    <a class='commonLinkFooter' href='#'>Reservá Ahora</a>
                </div>
                <div class='infoAdressContainer'>
                    <a class='infoAdressFooter' href='#'>Dirección - Horario de atención</a>
                </div>
            </div>
        <div>

        {% block javascripts %}

        <script src=\"{{asset('js/jquery/jquery-3.4.0.min.js')}}\"></script>
        <script src=\"{{asset('js/bootstrap/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('js/bootstrap/bootstrap.bundle.min.js')}}\"></script>

        <!-- Homepage Scroll -->
        <script src=\"{{asset('js/homepage.js')}}\"></script>

        <!-- Google Map -->
        <script src=\"{{asset('js/map.js')}}\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCOc0zLWwXekSXmjE7xbfLpaF9w2VAhjgM&callback=initMap\"
        async defer></script>

        {% endblock %}
    </body>
</html>
", "/includes/layout.html.twig", "/var/www/html/escapeOK/app/Resources/views/includes/layout.html.twig");
    }
}
