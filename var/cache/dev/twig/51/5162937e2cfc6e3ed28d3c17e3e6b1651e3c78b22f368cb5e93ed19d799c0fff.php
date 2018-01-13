<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a44cb67e3bfb2b64f72da59a7b00f7a27bdc86dd92315c5fbf0dcf4105824824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b2687b085b664d5e8a05eb719afa509e709bd81a31a5b2b0a17e20357add275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2687b085b664d5e8a05eb719afa509e709bd81a31a5b2b0a17e20357add275->enter($__internal_4b2687b085b664d5e8a05eb719afa509e709bd81a31a5b2b0a17e20357add275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4b2687b085b664d5e8a05eb719afa509e709bd81a31a5b2b0a17e20357add275->leave($__internal_4b2687b085b664d5e8a05eb719afa509e709bd81a31a5b2b0a17e20357add275_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e20aac32fb8f9ea40a8b785c6df5cd0fcdeb5c43e4ddcfb37798fe51312bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e20aac32fb8f9ea40a8b785c6df5cd0fcdeb5c43e4ddcfb37798fe51312bae->enter($__internal_d1e20aac32fb8f9ea40a8b785c6df5cd0fcdeb5c43e4ddcfb37798fe51312bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d1e20aac32fb8f9ea40a8b785c6df5cd0fcdeb5c43e4ddcfb37798fe51312bae->leave($__internal_d1e20aac32fb8f9ea40a8b785c6df5cd0fcdeb5c43e4ddcfb37798fe51312bae_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e162c6d77aa941594963b18b6f305d3dcbaf74387bd94ccca8bd83ed494e269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e162c6d77aa941594963b18b6f305d3dcbaf74387bd94ccca8bd83ed494e269->enter($__internal_9e162c6d77aa941594963b18b6f305d3dcbaf74387bd94ccca8bd83ed494e269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9e162c6d77aa941594963b18b6f305d3dcbaf74387bd94ccca8bd83ed494e269->leave($__internal_9e162c6d77aa941594963b18b6f305d3dcbaf74387bd94ccca8bd83ed494e269_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66b71ade31b2722dc2c49045032f200c603ca17dfa5a82c7dafefe28fa52e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66b71ade31b2722dc2c49045032f200c603ca17dfa5a82c7dafefe28fa52e40->enter($__internal_d66b71ade31b2722dc2c49045032f200c603ca17dfa5a82c7dafefe28fa52e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d66b71ade31b2722dc2c49045032f200c603ca17dfa5a82c7dafefe28fa52e40->leave($__internal_d66b71ade31b2722dc2c49045032f200c603ca17dfa5a82c7dafefe28fa52e40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\OSRS-Best-In-Slot\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
