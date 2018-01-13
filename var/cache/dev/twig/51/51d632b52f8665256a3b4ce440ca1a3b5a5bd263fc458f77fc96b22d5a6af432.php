<?php

/* index.html.twig */
class __TwigTemplate_fbc7e210b1210e074a4d152e7c214a5d4190195921058ab2f7814e351b9b58bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d203417294855bb33d0659df5e361073ccf2cbeaa01d5eab156c6c9103d8718d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d203417294855bb33d0659df5e361073ccf2cbeaa01d5eab156c6c9103d8718d->enter($__internal_d203417294855bb33d0659df5e361073ccf2cbeaa01d5eab156c6c9103d8718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d203417294855bb33d0659df5e361073ccf2cbeaa01d5eab156c6c9103d8718d->leave($__internal_d203417294855bb33d0659df5e361073ccf2cbeaa01d5eab156c6c9103d8718d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e6daa0eec604942cbf13d3dc1557562ff3151a49ca37c112ce3eb8acdae2465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6daa0eec604942cbf13d3dc1557562ff3151a49ca37c112ce3eb8acdae2465->enter($__internal_7e6daa0eec604942cbf13d3dc1557562ff3151a49ca37c112ce3eb8acdae2465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">OSRS | Best In Slot</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div id=\"osrsbis-container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
          <h1 class=\"mt-6\">OSRS Item Check</h1>
          <p class=\"lead\">Get the best equipment for your money & skill levels.</p>
          <ul class=\"list-unstyled\">
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>

    <div id=\"container\">
      <div id=\"lvl-inputs\">
        <div id=\"hiscore-container\">
          <input type=\"text\" id=\"osrsName\" placeholder=\"dragonslayer483\"/>
          <input type=\"submit\" value=\"Look up\"/>
        </div>
        <table>
          <tr>
            <td class=\"skill-input\">
                <img src=\"imgs/icon-att.png\"><input type=\"number\" value=\"99\"/>
            </td>
            <td class=\"skill-input\">
                <img src=\"imgs/strength.png\"><input type=\"number\" value=\"99\"/>
            </td>
          </tr>
          <tr>
              <td class=\"skill-input\">
                  <img src=\"imgs/defence.png\"><input type=\"number\" value=\"99\"/>
              </td>
              <td class=\"skill-input\">
                  <img src=\"imgs/hitpoints.png\"><input type=\"number\" value=\"99\"/>
              </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/magic.png\"><input type=\"number\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/ranged.png\"><input type=\"number\" value=\"99\"/>
                </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/prayer.png\"><input type=\"number\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/defence.png\"><input type=\"number\" value=\"99\"/>
                </td>
            </tr>
        </table>
      </div>
      <div>
        <label for=\"totalBud\">Total Budget:</label>  
        <input type=\"text\" id=\"totalBud\" value=\"10.5m\" name=\"totalBud\"/>
        <form method=\"POST\" action=\"\">
          <input type=\"submit\" name=\"submit\"/>
        </form>
      </div>
      <div id=\"combat-bonus\">
        <h3 align=\"center\">Combat Bonuses</h4>
        <span>
          <table>
            <h4>Attack Bonus</h4>
            <tr><td>Stab: </td><td id=\"att_stab\">0</td></tr>
            <tr><td>Slash: </td><td id=\"att_slash\">0</td></tr>
            <tr><td>Crush: </td><td id=\"att_crush\">0</td></tr>
            <tr><td>Magic: </td><td id=\"att_magic\">0</td></tr>
            <tr><td>Ranged: </td><td id=\"att_range\">0</td></tr>
          </table>
          <table>
              <h4>Defence Bonus</h4>
              <tr><td>Stab: </td><td id=\"def_stab\">0</td></tr>
              <tr><td>Slash: </td><td id=\"def_slash\">0</td></tr>
              <tr><td>Crush: </td><td id=\"def_crush\">0</td></tr>
              <tr><td>Magic: </td><td id=\"def_magic\">0</td></tr>
              <tr><td>Ranged: </td><td id=\"def_range\">0</td></tr>
            </table>
            <table>
                <h4>Other Bonuses</h4>
                <tr><td>Melee stregth: </td><td id=\"mel_str\">0</td></tr>
                <tr><td>Ranged stregth: </td><td id=\"rang_str\">0</td></tr>
                <tr><td>Magic damage: </td><td id=\"mag_str\">0</td></tr>
                <tr><td>Prayer: </td><td id=\"pray\">0</td></tr>
              </table>
        </span>
      </div>  
    </div>
";
        
        $__internal_7e6daa0eec604942cbf13d3dc1557562ff3151a49ca37c112ce3eb8acdae2465->leave($__internal_7e6daa0eec604942cbf13d3dc1557562ff3151a49ca37c112ce3eb8acdae2465_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
 {% block body %}

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">OSRS | Best In Slot</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div id=\"osrsbis-container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
          <h1 class=\"mt-6\">OSRS Item Check</h1>
          <p class=\"lead\">Get the best equipment for your money & skill levels.</p>
          <ul class=\"list-unstyled\">
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>

    <div id=\"container\">
      <div id=\"lvl-inputs\">
        <div id=\"hiscore-container\">
          <input type=\"text\" id=\"osrsName\" placeholder=\"dragonslayer483\"/>
          <input type=\"submit\" value=\"Look up\"/>
        </div>
        <table>
          <tr>
            <td class=\"skill-input\">
                <img src=\"imgs/icon-att.png\"><input type=\"number\" value=\"99\"/>
            </td>
            <td class=\"skill-input\">
                <img src=\"imgs/strength.png\"><input type=\"number\" value=\"99\"/>
            </td>
          </tr>
          <tr>
              <td class=\"skill-input\">
                  <img src=\"imgs/defence.png\"><input type=\"number\" value=\"99\"/>
              </td>
              <td class=\"skill-input\">
                  <img src=\"imgs/hitpoints.png\"><input type=\"number\" value=\"99\"/>
              </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/magic.png\"><input type=\"number\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/ranged.png\"><input type=\"number\" value=\"99\"/>
                </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/prayer.png\"><input type=\"number\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/defence.png\"><input type=\"number\" value=\"99\"/>
                </td>
            </tr>
        </table>
      </div>
      <div>
        <label for=\"totalBud\">Total Budget:</label>  
        <input type=\"text\" id=\"totalBud\" value=\"10.5m\" name=\"totalBud\"/>
        <form method=\"POST\" action=\"\">
          <input type=\"submit\" name=\"submit\"/>
        </form>
      </div>
      <div id=\"combat-bonus\">
        <h3 align=\"center\">Combat Bonuses</h4>
        <span>
          <table>
            <h4>Attack Bonus</h4>
            <tr><td>Stab: </td><td id=\"att_stab\">0</td></tr>
            <tr><td>Slash: </td><td id=\"att_slash\">0</td></tr>
            <tr><td>Crush: </td><td id=\"att_crush\">0</td></tr>
            <tr><td>Magic: </td><td id=\"att_magic\">0</td></tr>
            <tr><td>Ranged: </td><td id=\"att_range\">0</td></tr>
          </table>
          <table>
              <h4>Defence Bonus</h4>
              <tr><td>Stab: </td><td id=\"def_stab\">0</td></tr>
              <tr><td>Slash: </td><td id=\"def_slash\">0</td></tr>
              <tr><td>Crush: </td><td id=\"def_crush\">0</td></tr>
              <tr><td>Magic: </td><td id=\"def_magic\">0</td></tr>
              <tr><td>Ranged: </td><td id=\"def_range\">0</td></tr>
            </table>
            <table>
                <h4>Other Bonuses</h4>
                <tr><td>Melee stregth: </td><td id=\"mel_str\">0</td></tr>
                <tr><td>Ranged stregth: </td><td id=\"rang_str\">0</td></tr>
                <tr><td>Magic damage: </td><td id=\"mag_str\">0</td></tr>
                <tr><td>Prayer: </td><td id=\"pray\">0</td></tr>
              </table>
        </span>
      </div>  
    </div>
{% endblock %}

", "index.html.twig", "C:\\xampp\\htdocs\\OSRS-Best-In-Slot\\templates\\index.html.twig");
    }
}
