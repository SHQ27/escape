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

/* site/index.html.twig */
class __TwigTemplate_6ca5ff0ecc0fc6bf3fbf4f24de92b08d387f264afa815ec9352f98d30042a6a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("/includes/layout.html.twig", "site/index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/includes/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- JUMBOTRON -->
<div>

\t<div id='jumbotron' class=\"jumbotron\" style=\"background-image:url('";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/background_jumbotron2.jpg"), "html", null, true);
        echo "')\">
\t\t<h1><div class='mainText'>LA EXPERIENCIA DE JUEGOS DE ESCAPE MÁS INMERSIVA DE BUENOS AIRES</div></h1>
\t\t<a href='";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservas");
        echo "'><div class='reservaJumbotronAhora'>RESERVÁ AHORA</div></a>
\t\t<p>Comunicate con nosotros al <strong>15 4081 7293</strong></p>
\t\t<p>O por Whatsapp al <strong>15 4891 7263</strong></p>
\t</div>
</div>


<!-- JUEGOS -->
<div class=\"container-fluid\">
\t<div id='juegos' class='row'>

    \t<div class='col-md-4 juegosContainer'>
    \t\t<img id='saw' class='img-fluid' src='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/SAW.jpg"), "html", null, true);
        echo "'>
    \t\t<a href='";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservas");
        echo "'><div class='reservaJuegosAhora'>RESERVÁ AHORA</div></a>
\t\t\t\t<!-- Button trigger modal SAW -->
\t\t\t\t<a type=\"button\" data-toggle=\"modal\" data-target=\".saw-modal-xl\"><div class='masInfo'>MÁS INFORMACIÓN</div></a>
\t\t\t\t<!-- Modal SAW -->
\t\t\t\t<div class=\"modal fade saw-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
\t\t\t\t  <div class=\"modal-dialog modal-xl\">
\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">EL JUEGO DEL MIEDO</h5>
\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t        </button>
\t\t\t\t      </div>
\t\t\t\t      <div id='sawModalBody' class=\"modal-body row\">
\t\t\t\t\t\t\t\t<div class='col-md-3 sawModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<img id='sawModalImg' class='img-fluid' src='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/SAW.jpg"), "html", null, true);
        echo "'>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t        <div class='col-md-9 sawModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<a>En medio del cuarto, hay un cadáver con un disparo en la cabeza, una grabadora en la mano derecha y una pistola en la izquierda. Pronto descubren que en sus bolsillos tienen unos sobres con sus nombres y unos casetes con la palabra “reprodúceme” escrita en ellos. El doctor Gordon tiene además una bala (munición) y una llave, que no sirve para abrir las cadenas. Adam consigue la grabadora del muerto y reproduce lo siguiente: Lawrence debe matar a Adam antes de las seis de la mañana, o de lo contrario, su esposa y su hija serán asesinadas y ellos quedarán allí encerrados hasta pudrirse y morir...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t        <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Close</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
    \t</div>

    \t<div class='col-md-4 juegosContainer'>
    \t\t<img id='piratas' class='img-fluid' src='";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/PIRATAS.jpg"), "html", null, true);
        echo "'>
    \t\t<a href='";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservas");
        echo "'><div class='reservaJuegosAhora'>RESERVÁ AHORA</div></a>
\t\t\t\t<!-- Button trigger modal PIRATAS -->
\t\t\t\t<a type=\"button\" data-toggle=\"modal\" data-target=\".piratas-modal-xl\"><div class='masInfo'>MÁS INFORMACIÓN</div></a>
\t\t\t\t<!-- Modal PIRATAS -->
\t\t\t\t<div class=\"modal fade piratas-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
\t\t\t\t  <div class=\"modal-dialog modal-xl\">
\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">LA MALDICIÓN PIRATA</h5>
\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t        </button>
\t\t\t\t      </div>
\t\t\t\t\t\t\t<div id='piratasModalBody' class=\"modal-body row\">
\t\t\t\t\t\t\t\t<div class='col-md-3 piratasModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<img id='piratasModalImg' class='img-fluid' src='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/PIRATAS.jpg"), "html", null, true);
        echo "'>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t        <div class='col-md-9 piratasModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<a>En el Perla Negra, Barbossa le explica a Elizabeth por qué tienen tanto empeño en conseguir el medallón dorado: resulta que se trata de oro azteca maldito, el cual tiene en total 882 piezas que le fueron entregadas en un cofre de roca al conquistador Hernán Cortés en persona y los dioses aztecas pusieron una maldición para todos aquellos que robaran las piezas doradas de su cofre de piedra quedarían castigados por toda la eternidad, serían inmortales aunque no podrían sentir nada y se transformarían en esqueletos vivientes a la luz de la luna llena. Ahora trataban de encontrar todas las monedas del cofre que habían ido malgastando en mujeres y alcohol. Lo que no sabe ella es que es la sangre de «Bootstrap Bill» - o la de su descendencia - se necesita para acabar con la maldición y al decir que ella se apellidaba Turner, los piratas la tomaron por hija...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t        <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Close</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
    \t</div>

    \t<div class='col-md-4 juegosContainer'>
    \t\t<img id='ouija' class='img-fluid' src='";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/OUIJA.jpg"), "html", null, true);
        echo "'>
    \t\t<a href='";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservas");
        echo "'><div class='reservaJuegosAhora'>RESERVÁ AHORA</div></a>
\t\t\t\t<!-- Button trigger modal OUIJA -->
\t\t\t\t<a type=\"button\" data-toggle=\"modal\" data-target=\".ouija-modal-xl\"><div class='masInfo'>MÁS INFORMACIÓN</div></a>
\t\t\t\t<!-- Modal OUIJA-->
\t\t\t\t<div class=\"modal fade ouija-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
\t\t\t\t  <div class=\"modal-dialog modal-xl\">
\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">OUIJA</h5>
\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t        </button>
\t\t\t\t      </div>
\t\t\t\t\t\t\t<div id='ouijaModalBody' class=\"modal-body row\">
\t\t\t\t\t\t\t\t<div class='col-md-3 ouijaModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<img id='ouijaModalImg' class='img-fluid' src='";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/OUIJA.jpg"), "html", null, true);
        echo "'>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t        <div class='col-md-9 ouijaModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<a>Debbie Galardi recuerda jugar a la Ouija con su mejor amiga Laine Morris siendo niñas. En la actualidad, Debbie lanza su tabla Ouija en el fuego, quemándola. Debbie implica a Laine que algo extraño sucedió con el tablero Ouija. Después de que Laine se marcha, el tablero Ouija reaparece en el dormitorio de Debbie y es poseída. Luego se cuelga con las luces navideñas, y resultando así en su muerte...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t        <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Close</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
    \t</div>

\t</div>
</div>


<!-- PRECIOS -->
<div>
    <div id='precios' class='row'>
        <div class='col-md-2 preciosContainer'></div>
        <div class='col-md-2 preciosContainer border-right'>
            <img class='img-fluid preciosImg' src='";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <a><div class='preciosJugadores'>2 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$500</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer border-right'>
            <img class='img-fluid preciosImg' src='";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <a><div class='preciosJugadores'>3 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$450</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer border-right'>
            <img class='img-fluid preciosImg' src='";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <a><div class='preciosJugadores'>4 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$425</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer'>
            <img class='img-fluid preciosImg' src='";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <img class='img-fluid preciosImg' src='";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icono_precios.png"), "html", null, true);
        echo "'>
            <a><div class='preciosJugadores'>5 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$400</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer'></div>
    </div>
</div>


<!--GOOGLE MAP -->
<div id=\"map\" style=\"height: 400px\"></div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 151,  277 => 150,  273 => 149,  269 => 148,  265 => 147,  256 => 141,  252 => 140,  248 => 139,  244 => 138,  235 => 132,  231 => 131,  227 => 130,  218 => 124,  214 => 123,  188 => 100,  170 => 85,  166 => 84,  148 => 69,  130 => 54,  126 => 53,  108 => 38,  90 => 23,  86 => 22,  71 => 10,  66 => 8,  60 => 4,  51 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/includes/layout.html.twig' %}

{% block body %}

<!-- JUMBOTRON -->
<div>

\t<div id='jumbotron' class=\"jumbotron\" style=\"background-image:url('{{ asset('img/background_jumbotron2.jpg') }}')\">
\t\t<h1><div class='mainText'>LA EXPERIENCIA DE JUEGOS DE ESCAPE MÁS INMERSIVA DE BUENOS AIRES</div></h1>
\t\t<a href='{{path('reservas')}}'><div class='reservaJumbotronAhora'>RESERVÁ AHORA</div></a>
\t\t<p>Comunicate con nosotros al <strong>15 4081 7293</strong></p>
\t\t<p>O por Whatsapp al <strong>15 4891 7263</strong></p>
\t</div>
</div>


<!-- JUEGOS -->
<div class=\"container-fluid\">
\t<div id='juegos' class='row'>

    \t<div class='col-md-4 juegosContainer'>
    \t\t<img id='saw' class='img-fluid' src='{{asset('img/SAW.jpg')}}'>
    \t\t<a href='{{path('reservas')}}'><div class='reservaJuegosAhora'>RESERVÁ AHORA</div></a>
\t\t\t\t<!-- Button trigger modal SAW -->
\t\t\t\t<a type=\"button\" data-toggle=\"modal\" data-target=\".saw-modal-xl\"><div class='masInfo'>MÁS INFORMACIÓN</div></a>
\t\t\t\t<!-- Modal SAW -->
\t\t\t\t<div class=\"modal fade saw-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
\t\t\t\t  <div class=\"modal-dialog modal-xl\">
\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">EL JUEGO DEL MIEDO</h5>
\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t        </button>
\t\t\t\t      </div>
\t\t\t\t      <div id='sawModalBody' class=\"modal-body row\">
\t\t\t\t\t\t\t\t<div class='col-md-3 sawModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<img id='sawModalImg' class='img-fluid' src='{{asset('img/SAW.jpg')}}'>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t        <div class='col-md-9 sawModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<a>En medio del cuarto, hay un cadáver con un disparo en la cabeza, una grabadora en la mano derecha y una pistola en la izquierda. Pronto descubren que en sus bolsillos tienen unos sobres con sus nombres y unos casetes con la palabra “reprodúceme” escrita en ellos. El doctor Gordon tiene además una bala (munición) y una llave, que no sirve para abrir las cadenas. Adam consigue la grabadora del muerto y reproduce lo siguiente: Lawrence debe matar a Adam antes de las seis de la mañana, o de lo contrario, su esposa y su hija serán asesinadas y ellos quedarán allí encerrados hasta pudrirse y morir...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t        <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Close</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
    \t</div>

    \t<div class='col-md-4 juegosContainer'>
    \t\t<img id='piratas' class='img-fluid' src='{{asset('img/PIRATAS.jpg')}}'>
    \t\t<a href='{{path('reservas')}}'><div class='reservaJuegosAhora'>RESERVÁ AHORA</div></a>
\t\t\t\t<!-- Button trigger modal PIRATAS -->
\t\t\t\t<a type=\"button\" data-toggle=\"modal\" data-target=\".piratas-modal-xl\"><div class='masInfo'>MÁS INFORMACIÓN</div></a>
\t\t\t\t<!-- Modal PIRATAS -->
\t\t\t\t<div class=\"modal fade piratas-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
\t\t\t\t  <div class=\"modal-dialog modal-xl\">
\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">LA MALDICIÓN PIRATA</h5>
\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t        </button>
\t\t\t\t      </div>
\t\t\t\t\t\t\t<div id='piratasModalBody' class=\"modal-body row\">
\t\t\t\t\t\t\t\t<div class='col-md-3 piratasModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<img id='piratasModalImg' class='img-fluid' src='{{asset('img/PIRATAS.jpg')}}'>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t        <div class='col-md-9 piratasModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<a>En el Perla Negra, Barbossa le explica a Elizabeth por qué tienen tanto empeño en conseguir el medallón dorado: resulta que se trata de oro azteca maldito, el cual tiene en total 882 piezas que le fueron entregadas en un cofre de roca al conquistador Hernán Cortés en persona y los dioses aztecas pusieron una maldición para todos aquellos que robaran las piezas doradas de su cofre de piedra quedarían castigados por toda la eternidad, serían inmortales aunque no podrían sentir nada y se transformarían en esqueletos vivientes a la luz de la luna llena. Ahora trataban de encontrar todas las monedas del cofre que habían ido malgastando en mujeres y alcohol. Lo que no sabe ella es que es la sangre de «Bootstrap Bill» - o la de su descendencia - se necesita para acabar con la maldición y al decir que ella se apellidaba Turner, los piratas la tomaron por hija...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t        <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Close</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
    \t</div>

    \t<div class='col-md-4 juegosContainer'>
    \t\t<img id='ouija' class='img-fluid' src='{{asset('img/OUIJA.jpg')}}'>
    \t\t<a href='{{path('reservas')}}'><div class='reservaJuegosAhora'>RESERVÁ AHORA</div></a>
\t\t\t\t<!-- Button trigger modal OUIJA -->
\t\t\t\t<a type=\"button\" data-toggle=\"modal\" data-target=\".ouija-modal-xl\"><div class='masInfo'>MÁS INFORMACIÓN</div></a>
\t\t\t\t<!-- Modal OUIJA-->
\t\t\t\t<div class=\"modal fade ouija-modal-xl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myExtraLargeModalLabel\" aria-hidden=\"true\">
\t\t\t\t  <div class=\"modal-dialog modal-xl\">
\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">OUIJA</h5>
\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t        </button>
\t\t\t\t      </div>
\t\t\t\t\t\t\t<div id='ouijaModalBody' class=\"modal-body row\">
\t\t\t\t\t\t\t\t<div class='col-md-3 ouijaModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<img id='ouijaModalImg' class='img-fluid' src='{{asset('img/OUIJA.jpg')}}'>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t        <div class='col-md-9 ouijaModalBodyContainer'>
\t\t\t\t\t\t\t\t\t<a>Debbie Galardi recuerda jugar a la Ouija con su mejor amiga Laine Morris siendo niñas. En la actualidad, Debbie lanza su tabla Ouija en el fuego, quemándola. Debbie implica a Laine que algo extraño sucedió con el tablero Ouija. Después de que Laine se marcha, el tablero Ouija reaparece en el dormitorio de Debbie y es poseída. Luego se cuelga con las luces navideñas, y resultando así en su muerte...</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t        <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">Close</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t</div>
    \t</div>

\t</div>
</div>


<!-- PRECIOS -->
<div>
    <div id='precios' class='row'>
        <div class='col-md-2 preciosContainer'></div>
        <div class='col-md-2 preciosContainer border-right'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <a><div class='preciosJugadores'>2 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$500</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer border-right'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <a><div class='preciosJugadores'>3 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$450</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer border-right'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <a><div class='preciosJugadores'>4 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$425</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <img class='img-fluid preciosImg' src='{{asset('img/icono_precios.png')}}'>
            <a><div class='preciosJugadores'>5 JUGADORES</div></a>
            <a><div class='preciosPesos'>\$400</div></a>
            <a><div class='preciosPersona'>POR PERSONA</div></a>
        </div>
        <div class='col-md-2 preciosContainer'></div>
    </div>
</div>


<!--GOOGLE MAP -->
<div id=\"map\" style=\"height: 400px\"></div>


{% endblock %}
", "site/index.html.twig", "/var/www/html/escapeOK/app/Resources/views/site/index.html.twig");
    }
}
