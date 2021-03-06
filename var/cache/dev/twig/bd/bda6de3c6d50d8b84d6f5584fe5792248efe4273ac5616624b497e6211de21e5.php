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
        $__internal_86f63e0ac211d1d22328d2e1dc241a4566000f96c6a3f1d75f0f938b9e1318c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f63e0ac211d1d22328d2e1dc241a4566000f96c6a3f1d75f0f938b9e1318c8->enter($__internal_86f63e0ac211d1d22328d2e1dc241a4566000f96c6a3f1d75f0f938b9e1318c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 292
        echo "    </body>
</html>
";
        
        $__internal_86f63e0ac211d1d22328d2e1dc241a4566000f96c6a3f1d75f0f938b9e1318c8->leave($__internal_86f63e0ac211d1d22328d2e1dc241a4566000f96c6a3f1d75f0f938b9e1318c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8567fba357155799a072d409b267fc4de5ca9ae7600ed487066042baac55e957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8567fba357155799a072d409b267fc4de5ca9ae7600ed487066042baac55e957->enter($__internal_8567fba357155799a072d409b267fc4de5ca9ae7600ed487066042baac55e957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OSRS Best In Slot!";
        
        $__internal_8567fba357155799a072d409b267fc4de5ca9ae7600ed487066042baac55e957->leave($__internal_8567fba357155799a072d409b267fc4de5ca9ae7600ed487066042baac55e957_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f49f65ef7169f57f876a5f46f1e22a4e27748b5b7e67b97ec268c91abc8e7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f49f65ef7169f57f876a5f46f1e22a4e27748b5b7e67b97ec268c91abc8e7b1->enter($__internal_7f49f65ef7169f57f876a5f46f1e22a4e27748b5b7e67b97ec268c91abc8e7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        <link href=\"css/stylesheet.css\" rel=\"stylesheet\">
        ";
        
        $__internal_7f49f65ef7169f57f876a5f46f1e22a4e27748b5b7e67b97ec268c91abc8e7b1->leave($__internal_7f49f65ef7169f57f876a5f46f1e22a4e27748b5b7e67b97ec268c91abc8e7b1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_487f3773ae306d794f6e8364af04f963b9dc4569a517acd78e873c4534b704a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487f3773ae306d794f6e8364af04f963b9dc4569a517acd78e873c4534b704a2->enter($__internal_487f3773ae306d794f6e8364af04f963b9dc4569a517acd78e873c4534b704a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div id=\"container\">
      <div id=\"lvl-inputs\">
        <div id=\"hiscore-container\">
          <input type=\"text\" id=\"osrsName\" placeholder=\"dragonslayer483\"/>
          <input type=\"submit\" value=\"Look up\"/>
        </div>
        <table>
          <tr>
            <td class=\"skill-input\">
                <img src=\"imgs/icon-att.png\"><input type=\"number\" id=\"att_lvl\" name=\"att_lvl\" value=\"99\"/>
            </td>
            <td class=\"skill-input\">
                <img src=\"imgs/strength.png\"><input type=\"number\" id=\"str_lvl\" name=\"str_lvl\" value=\"99\"/>
            </td>
          </tr>
          <tr>
              <td class=\"skill-input\">
                  <img src=\"imgs/defence.png\"><input type=\"number\" id=\"def_lvl\" name=\"def_lvl\" value=\"99\"/>
              </td>
              <td class=\"skill-input\">
                  <img src=\"imgs/hitpoints.png\"><input type=\"number\" id=\"hp_lvl\" name=\"hp_lvl\" value=\"99\"/>
              </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/magic.png\"><input type=\"number\" id=\"mag_lvl\" name=\"mag_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/ranged.png\"><input type=\"number\" id=\"ran_lvl\" name=\"ran_lvl\" value=\"99\"/>
                </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/prayer.png\"><input type=\"number\" id=\"pray_lvl\" ame=\"pray_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/slayer.png\"><input type=\"number\" id=\"slay\" name=\"slay\" value=\"99\"/>
                </td>
            </tr>
        </table>
        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"att\" checked=\"checked\" value=\"att\"> Attack
          </label>
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"def\" autocomplete=\"off\" value=\"def\"> Defence
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
        <br/>
        <br/>
        <input type=\"submit\" id=\"go\" name=\"submit\" value=\"Go\" style=\"width:100%\"/>
        ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 194, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 195
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "item_name", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
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
";
        
        $__internal_487f3773ae306d794f6e8364af04f963b9dc4569a517acd78e873c4534b704a2->leave($__internal_487f3773ae306d794f6e8364af04f963b9dc4569a517acd78e873c4534b704a2_prof);

    }

    // line 228
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2215b075c68c482b2b0b875b0633276f7e82273e5dd22ac093505e0db4bef2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2215b075c68c482b2b0b875b0633276f7e82273e5dd22ac093505e0db4bef2c6->enter($__internal_2215b075c68c482b2b0b875b0633276f7e82273e5dd22ac093505e0db4bef2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 229
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script>
      \$(document).ready(() => {
          //Get skill lvl inputs via their parents
          \$('#go').on('click', () => {
              var err = validateForm();
              if (err.length < 1) {
                  var skillInputs = [];
                  var bonusAttDef = {
                      type: \"\",
                      bonus: \"\"
                  }
                  var budget = 0;
                  \$('.skill-input').each(function() {
                      skillInputs.push(new Array(\$(this).children(\"input\").attr(\"id\"), \$(this).children(\"input\").val()));
                  });
                  bonusAttDef.type = \$(\"input[name='bis-att-def']:checked\").val();
                  bonusAttDef.bonus = \$(\"input[name='bis-stats-chose']:checked\").val();
                  totalBud = \$('#totalBud').val();

                  var data = [];
                  data.push(skillInputs);
                  data.push(bonusAttDef);
                  data.push(totalBud);

                  \$.ajax({
                      url: '/go',
                      type: 'POST',
                      data: {
                          \"data\": data
                      },
                      async: true,
                      success: function(resp) {
                          console.log(resp);

                      },
                      error: function(errorMsg, status) {
                          console.log(status);
                      }
                  });
              } else {
                console.log(err);
              }

              function validateForm() {
                let err = \"\";
                let bonusChosen = \$(\"input[name='bis-stats-chose']:checked\");
                if(bonusChosen == 'undefined') {
                  err = \"Please choose a bonus\";
                } else if(bonusChosen.val().substring(bonusChosen.val().length - 3, bonusChosen.val().length) !== \"lvl\") {
                    //Checked if user selected \"Melee, ranged or Magic Strength\"
                    if(\$(\"input[name='bis-stats-chose']:checked\").val().length < 1) {
                      err = \"Please check 'Attack or Defence'\";
                    }
                  }
                return err;
              }
          });
      });
    </script>
    ";
        
        $__internal_2215b075c68c482b2b0b875b0633276f7e82273e5dd22ac093505e0db4bef2c6->leave($__internal_2215b075c68c482b2b0b875b0633276f7e82273e5dd22ac093505e0db4bef2c6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 229,  322 => 228,  285 => 197,  276 => 195,  272 => 194,  89 => 13,  83 => 12,  74 => 7,  68 => 6,  56 => 5,  47 => 292,  44 => 228,  42 => 12,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
    <div id=\"container\">
      <div id=\"lvl-inputs\">
        <div id=\"hiscore-container\">
          <input type=\"text\" id=\"osrsName\" placeholder=\"dragonslayer483\"/>
          <input type=\"submit\" value=\"Look up\"/>
        </div>
        <table>
          <tr>
            <td class=\"skill-input\">
                <img src=\"imgs/icon-att.png\"><input type=\"number\" id=\"att_lvl\" name=\"att_lvl\" value=\"99\"/>
            </td>
            <td class=\"skill-input\">
                <img src=\"imgs/strength.png\"><input type=\"number\" id=\"str_lvl\" name=\"str_lvl\" value=\"99\"/>
            </td>
          </tr>
          <tr>
              <td class=\"skill-input\">
                  <img src=\"imgs/defence.png\"><input type=\"number\" id=\"def_lvl\" name=\"def_lvl\" value=\"99\"/>
              </td>
              <td class=\"skill-input\">
                  <img src=\"imgs/hitpoints.png\"><input type=\"number\" id=\"hp_lvl\" name=\"hp_lvl\" value=\"99\"/>
              </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/magic.png\"><input type=\"number\" id=\"mag_lvl\" name=\"mag_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/ranged.png\"><input type=\"number\" id=\"ran_lvl\" name=\"ran_lvl\" value=\"99\"/>
                </td>
            </tr>
            <tr>
                <td class=\"skill-input\">
                    <img src=\"imgs/prayer.png\"><input type=\"number\" id=\"pray_lvl\" ame=\"pray_lvl\" value=\"99\"/>
                </td>
                <td class=\"skill-input\">
                    <img src=\"imgs/slayer.png\"><input type=\"number\" id=\"slay\" name=\"slay\" value=\"99\"/>
                </td>
            </tr>
        </table>
        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"att\" checked=\"checked\" value=\"att\"> Attack
          </label>
          <label class=\"btn btn-secondary\">
            <input type=\"radio\" name=\"bis-att-def\" id=\"def\" autocomplete=\"off\" value=\"def\"> Defence
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
        <br/>
        <br/>
        <input type=\"submit\" id=\"go\" name=\"submit\" value=\"Go\" style=\"width:100%\"/>
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
{% endblock %}
    {% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.js\" integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script>
      \$(document).ready(() => {
          //Get skill lvl inputs via their parents
          \$('#go').on('click', () => {
              var err = validateForm();
              if (err.length < 1) {
                  var skillInputs = [];
                  var bonusAttDef = {
                      type: \"\",
                      bonus: \"\"
                  }
                  var budget = 0;
                  \$('.skill-input').each(function() {
                      skillInputs.push(new Array(\$(this).children(\"input\").attr(\"id\"), \$(this).children(\"input\").val()));
                  });
                  bonusAttDef.type = \$(\"input[name='bis-att-def']:checked\").val();
                  bonusAttDef.bonus = \$(\"input[name='bis-stats-chose']:checked\").val();
                  totalBud = \$('#totalBud').val();

                  var data = [];
                  data.push(skillInputs);
                  data.push(bonusAttDef);
                  data.push(totalBud);

                  \$.ajax({
                      url: '/go',
                      type: 'POST',
                      data: {
                          \"data\": data
                      },
                      async: true,
                      success: function(resp) {
                          console.log(resp);

                      },
                      error: function(errorMsg, status) {
                          console.log(status);
                      }
                  });
              } else {
                console.log(err);
              }

              function validateForm() {
                let err = \"\";
                let bonusChosen = \$(\"input[name='bis-stats-chose']:checked\");
                if(bonusChosen == 'undefined') {
                  err = \"Please choose a bonus\";
                } else if(bonusChosen.val().substring(bonusChosen.val().length - 3, bonusChosen.val().length) !== \"lvl\") {
                    //Checked if user selected \"Melee, ranged or Magic Strength\"
                    if(\$(\"input[name='bis-stats-chose']:checked\").val().length < 1) {
                      err = \"Please check 'Attack or Defence'\";
                    }
                  }
                return err;
              }
          });
      });
    </script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\OSRS-Best-In-Slot\\templates\\base.html.twig");
    }
}
