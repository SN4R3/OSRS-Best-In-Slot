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
        $__internal_a67b11c3d7dd2c29184fcd5cc68264b9665fcfe82c8825dd4915cb530687cfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67b11c3d7dd2c29184fcd5cc68264b9665fcfe82c8825dd4915cb530687cfe9->enter($__internal_a67b11c3d7dd2c29184fcd5cc68264b9665fcfe82c8825dd4915cb530687cfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 228
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
        echo "    </body>
</html>
";
        
        $__internal_a67b11c3d7dd2c29184fcd5cc68264b9665fcfe82c8825dd4915cb530687cfe9->leave($__internal_a67b11c3d7dd2c29184fcd5cc68264b9665fcfe82c8825dd4915cb530687cfe9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7e83695b735a9aee3402260685cff800894c0f1ea8f6eeea4a5a458a7986e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e83695b735a9aee3402260685cff800894c0f1ea8f6eeea4a5a458a7986e52->enter($__internal_a7e83695b735a9aee3402260685cff800894c0f1ea8f6eeea4a5a458a7986e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OSRS Best In Slot!";
        
        $__internal_a7e83695b735a9aee3402260685cff800894c0f1ea8f6eeea4a5a458a7986e52->leave($__internal_a7e83695b735a9aee3402260685cff800894c0f1ea8f6eeea4a5a458a7986e52_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_655a7b9f19b93df2e70b397aece86fb7920e6f72752fb8ff816903ec06accfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655a7b9f19b93df2e70b397aece86fb7920e6f72752fb8ff816903ec06accfdd->enter($__internal_655a7b9f19b93df2e70b397aece86fb7920e6f72752fb8ff816903ec06accfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"css/stylesheet.css\" rel=\"stylesheet\">
        ";
        
        $__internal_655a7b9f19b93df2e70b397aece86fb7920e6f72752fb8ff816903ec06accfdd->leave($__internal_655a7b9f19b93df2e70b397aece86fb7920e6f72752fb8ff816903ec06accfdd_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_57f0727639fceb469c43dd6c53fe1a76ebce29b5f5df72a795920621cffccb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f0727639fceb469c43dd6c53fe1a76ebce29b5f5df72a795920621cffccb49->enter($__internal_57f0727639fceb469c43dd6c53fe1a76ebce29b5f5df72a795920621cffccb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"att\" checked=\"checked\"> Attack
          </label>
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"def\" autocomplete=\"off\"> Defence
          </label>
        </div>
        <table id=\"bis-stat-choose\">
          <tr>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"stab\" value=\"stab\"/>
                <img src=\"imgs/stab.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"slash\" value=\"slash\"/>
                <img src=\"imgs/slash.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"crush\" value=\"crush\"/>
                <img src=\"imgs/crush.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"range\" value=\"range\"/>
                <img src=\"imgs/ranged.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"magic\" value=\"magic\"/>
                <img src=\"imgs/magic.png\"/>
              </label>
            </td>
          </tr>
          <tr>
            <td class=\"blank-td\">
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"str\" value=\"mel_str\"/>
                <img src=\"imgs/strength.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"ran_str-str\" value=\"ran_str\"/>
                <img src=\"imgs/ranged-strength.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"mag_str\" value=\"mag_str\"/>
                <img src=\"imgs/magic-damage.png\"/>
              </label>
            </td>
            <td class=\"blank-td\">
            </td>
          </tr>
        </table>
      </div>
      <div>
        <table id=\"worn-equip\">
          <tr>
            <td></td>
            <td><img src=\"imgs/Head_slot.png\" width=\"100%\"/></td>
            <td></td>
          </tr>
          <tr>
            <td><img src=\"imgs/Cape_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Neck_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Ammo_slot.png\" width=\"100%\"/></td>
          </tr>
          <tr>
            <td><img src=\"imgs/Weapon_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Torso_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Shield_slot.png\" width=\"100%\"/></td>
          </tr>
          <tr>
            <td></td>
            <td><img src=\"imgs/Legs_slot.png\" width=\"100%\"/></td>
            <td></td>
          </tr>
          <tr>
            <td><img src=\"imgs/Gloves_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Boots_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Ring_slot.png\" width=\"100%\"/></td>
          </tr>
        </table>
        <br/>
        <label for=\"totalBud\">Total Budget:</label>  
        <input type=\"text\" id=\"totalBud\" value=\"10.5m\" name=\"totalBud\"/>
        <input type=\"submit\" name=\"submit\"/>
        ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 193, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 194
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "item_name", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "      </div>
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
        
        $__internal_57f0727639fceb469c43dd6c53fe1a76ebce29b5f5df72a795920621cffccb49->leave($__internal_57f0727639fceb469c43dd6c53fe1a76ebce29b5f5df72a795920621cffccb49_prof);

    }

    // line 228
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b554710b34d0b18fa05913e8ba44eabbe789c9e8f6079056a0b3126f20fde005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b554710b34d0b18fa05913e8ba44eabbe789c9e8f6079056a0b3126f20fde005->enter($__internal_b554710b34d0b18fa05913e8ba44eabbe789c9e8f6079056a0b3126f20fde005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 229
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script>
      \$(document).ready(()=>{
      });
    </script>
    ";
        
        $__internal_b554710b34d0b18fa05913e8ba44eabbe789c9e8f6079056a0b3126f20fde005->leave($__internal_b554710b34d0b18fa05913e8ba44eabbe789c9e8f6079056a0b3126f20fde005_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 229,  322 => 228,  284 => 196,  275 => 194,  271 => 193,  89 => 13,  83 => 12,  74 => 7,  68 => 6,  56 => 5,  47 => 237,  44 => 228,  42 => 12,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"att\" checked=\"checked\"> Attack
          </label>
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"def\" autocomplete=\"off\"> Defence
          </label>
        </div>
        <table id=\"bis-stat-choose\">
          <tr>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"stab\" value=\"stab\"/>
                <img src=\"imgs/stab.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"slash\" value=\"slash\"/>
                <img src=\"imgs/slash.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"crush\" value=\"crush\"/>
                <img src=\"imgs/crush.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"range\" value=\"range\"/>
                <img src=\"imgs/ranged.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"magic\" value=\"magic\"/>
                <img src=\"imgs/magic.png\"/>
              </label>
            </td>
          </tr>
          <tr>
            <td class=\"blank-td\">
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"str\" value=\"mel_str\"/>
                <img src=\"imgs/strength.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"ran_str-str\" value=\"ran_str\"/>
                <img src=\"imgs/ranged-strength.png\"/>
              </label>
            </td>
            <td>
              <label>
                <input type=\"radio\" name=\"bis-stats-chose\" id=\"mag_str\" value=\"mag_str\"/>
                <img src=\"imgs/magic-damage.png\"/>
              </label>
            </td>
            <td class=\"blank-td\">
            </td>
          </tr>
        </table>
      </div>
      <div>
        <table id=\"worn-equip\">
          <tr>
            <td></td>
            <td><img src=\"imgs/Head_slot.png\" width=\"100%\"/></td>
            <td></td>
          </tr>
          <tr>
            <td><img src=\"imgs/Cape_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Neck_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Ammo_slot.png\" width=\"100%\"/></td>
          </tr>
          <tr>
            <td><img src=\"imgs/Weapon_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Torso_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Shield_slot.png\" width=\"100%\"/></td>
          </tr>
          <tr>
            <td></td>
            <td><img src=\"imgs/Legs_slot.png\" width=\"100%\"/></td>
            <td></td>
          </tr>
          <tr>
            <td><img src=\"imgs/Gloves_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Boots_slot.png\" width=\"100%\"/></td>
            <td><img src=\"imgs/Ring_slot.png\" width=\"100%\"/></td>
          </tr>
        </table>
        <br/>
        <label for=\"totalBud\">Total Budget:</label>  
        <input type=\"text\" id=\"totalBud\" value=\"10.5m\" name=\"totalBud\"/>
        <input type=\"submit\" name=\"submit\"/>
        {% for row in result %}
          {{ row.item_name }}
        {% endfor %}
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
    <script>
      \$(document).ready(()=>{
      });
    </script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\OSRS-Best-In-Slot\\templates\\base.html.twig");
    }
}
