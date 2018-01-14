<?php

/* worn-equip.html.twig */
class __TwigTemplate_c57e93d2b988d59e9eac72d2bd70acb68c2e1a85287f7a538189222ac282f8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40cfa9799c6e3ec0b881c292833ffdb65e14c8580dfd1d653cbd2e72d254228a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cfa9799c6e3ec0b881c292833ffdb65e14c8580dfd1d653cbd2e72d254228a->enter($__internal_40cfa9799c6e3ec0b881c292833ffdb65e14c8580dfd1d653cbd2e72d254228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "worn-equip.html.twig"));

        // line 1
        echo "<table id=\"worn-equip\">
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 32, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "item_name", array()), "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>";
        
        $__internal_40cfa9799c6e3ec0b881c292833ffdb65e14c8580dfd1d653cbd2e72d254228a->leave($__internal_40cfa9799c6e3ec0b881c292833ffdb65e14c8580dfd1d653cbd2e72d254228a_prof);

    }

    public function getTemplateName()
    {
        return "worn-equip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 35,  59 => 33,  55 => 32,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table id=\"worn-equip\">
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
</div>", "worn-equip.html.twig", "C:\\xampp\\htdocs\\OSRS-Best-In-Slot\\templates\\worn-equip.html.twig");
    }
}
