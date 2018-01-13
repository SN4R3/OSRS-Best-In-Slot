<?php

/* base.html.twig */
class __TwigTemplate_6fd77ec57e8ea38fb6d0fd910a35130ec8a283833106810d86d8f168db2383b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf2d5a843721470508ca63217046ec5c5ee7e9ede738aba9e895a7f668658715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2d5a843721470508ca63217046ec5c5ee7e9ede738aba9e895a7f668658715->enter($__internal_cf2d5a843721470508ca63217046ec5c5ee7e9ede738aba9e895a7f668658715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "    </body>
</html>
";
        
        $__internal_cf2d5a843721470508ca63217046ec5c5ee7e9ede738aba9e895a7f668658715->leave($__internal_cf2d5a843721470508ca63217046ec5c5ee7e9ede738aba9e895a7f668658715_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad6383e5f9e7036167de10b22ad416d08ca6eedcf3b8796add97c5570586bfd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6383e5f9e7036167de10b22ad416d08ca6eedcf3b8796add97c5570586bfd0->enter($__internal_ad6383e5f9e7036167de10b22ad416d08ca6eedcf3b8796add97c5570586bfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OSRS Best In Slot!";
        
        $__internal_ad6383e5f9e7036167de10b22ad416d08ca6eedcf3b8796add97c5570586bfd0->leave($__internal_ad6383e5f9e7036167de10b22ad416d08ca6eedcf3b8796add97c5570586bfd0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a7cee9a75f463ade209842398bba9f910092d0fdf2e1f0da303b4c09b7447d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7cee9a75f463ade209842398bba9f910092d0fdf2e1f0da303b4c09b7447d8->enter($__internal_5a7cee9a75f463ade209842398bba9f910092d0fdf2e1f0da303b4c09b7447d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"css/stylesheet.css\" rel=\"stylesheet\">
        ";
        
        $__internal_5a7cee9a75f463ade209842398bba9f910092d0fdf2e1f0da303b4c09b7447d8->leave($__internal_5a7cee9a75f463ade209842398bba9f910092d0fdf2e1f0da303b4c09b7447d8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e29f712e551ff1fde998b514dbd640fdea66df254e0f90346f3bcb8ef1be9019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29f712e551ff1fde998b514dbd640fdea66df254e0f90346f3bcb8ef1be9019->enter($__internal_e29f712e551ff1fde998b514dbd640fdea66df254e0f90346f3bcb8ef1be9019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <!-- Navigation -->
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
<form method=\"POST\" action=\"/go\">
    <div id=\"container\">
      <div id=\"lvl-inputs\">
        <div id=\"hiscore-container\">
          <input type=\"text\" id=\"osrsName\" placeholder=\"dragonslayer483\"/>
          <input type=\"submit\" value=\"Look up\"/>
        </div>
        <table>
          <tr>
            <td class=\"skill-input\">
                <img src=\"imgs/icon-att.png\"><input type=\"number\" name=\"att_lvl\" value=\"99\"/>
            </td>
            <td class=\"skill-input\">
                <img src=\"imgs/strength.png\"><input type=\"number\" name=\"str_lvl\" value=\"99\"/>
            </td>
          </tr>
          <tr>
              <td class=\"skill-input\">
                  <img src=\"imgs/defence.png\"><input type=\"number\" name=\"def_lvl\" value=\"99\"/>
              </td>
              <td class=\"skill-input\">
                  <img src=\"imgs/hitpoints.png\"><input type=\"number\" name=\"hp_lvl\" value=\"99\"/>
              </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/magic.png\"><input type=\"number\" name=\"mag_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/ranged.png\"><input type=\"number\" name=\"ran_lvl\" value=\"99\"/>
                </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/prayer.png\"><input type=\"number\" name=\"pray_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/slayer.png\"><input type=\"number\" name=\"slay\" value=\"99\"/>
                </td>
            </tr>
        </table>
      </div>
      <div>
        <label for=\"totalBud\">Total Budget:</label>  
        <input type=\"text\" id=\"totalBud\" value=\"10.5m\" name=\"totalBud\"/>
        <input type=\"submit\" name=\"submit\"/>
";
        // line 99
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 99, $this->getSourceContext()); })())), "html", null, true);
        echo "
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
</form>
";
        
        $__internal_e29f712e551ff1fde998b514dbd640fdea66df254e0f90346f3bcb8ef1be9019->leave($__internal_e29f712e551ff1fde998b514dbd640fdea66df254e0f90346f3bcb8ef1be9019_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cf4432f8dc77333235d1b70767f8db66a49978932a758bce5c3c812facf356d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf4432f8dc77333235d1b70767f8db66a49978932a758bce5c3c812facf356d->enter($__internal_3cf4432f8dc77333235d1b70767f8db66a49978932a758bce5c3c812facf356d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_3cf4432f8dc77333235d1b70767f8db66a49978932a758bce5c3c812facf356d->leave($__internal_3cf4432f8dc77333235d1b70767f8db66a49978932a758bce5c3c812facf356d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 133,  217 => 132,  177 => 99,  89 => 13,  83 => 12,  74 => 7,  68 => 6,  56 => 5,  47 => 137,  44 => 132,  42 => 12,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}OSRS Best In Slot!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"css/stylesheet.css\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>
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
<form method=\"POST\" action=\"/go\">
    <div id=\"container\">
      <div id=\"lvl-inputs\">
        <div id=\"hiscore-container\">
          <input type=\"text\" id=\"osrsName\" placeholder=\"dragonslayer483\"/>
          <input type=\"submit\" value=\"Look up\"/>
        </div>
        <table>
          <tr>
            <td class=\"skill-input\">
                <img src=\"imgs/icon-att.png\"><input type=\"number\" name=\"att_lvl\" value=\"99\"/>
            </td>
            <td class=\"skill-input\">
                <img src=\"imgs/strength.png\"><input type=\"number\" name=\"str_lvl\" value=\"99\"/>
            </td>
          </tr>
          <tr>
              <td class=\"skill-input\">
                  <img src=\"imgs/defence.png\"><input type=\"number\" name=\"def_lvl\" value=\"99\"/>
              </td>
              <td class=\"skill-input\">
                  <img src=\"imgs/hitpoints.png\"><input type=\"number\" name=\"hp_lvl\" value=\"99\"/>
              </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/magic.png\"><input type=\"number\" name=\"mag_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/ranged.png\"><input type=\"number\" name=\"ran_lvl\" value=\"99\"/>
                </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/prayer.png\"><input type=\"number\" name=\"pray_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/slayer.png\"><input type=\"number\" name=\"slay\" value=\"99\"/>
                </td>
            </tr>
        </table>
      </div>
      <div>
        <label for=\"totalBud\">Total Budget:</label>  
        <input type=\"text\" id=\"totalBud\" value=\"10.5m\" name=\"totalBud\"/>
        <input type=\"submit\" name=\"submit\"/>
{{ result|join }}
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
</form>
{% endblock %}
    {% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\OSRS-Best-In-Slot\\templates\\base.html.twig");
    }
}
