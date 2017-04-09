<?php

/* @gantry-admin/pages/about/about.html.twig */
class __TwigTemplate_5930212dc5797202d76ae43255ba9ac2a71dd641c105ed35c36024fd3eede81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/about/about.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"g-grid overview-header\">
        <div class=\"g-block\">
            <h2 class=\"theme-title\">
                ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "title", array()), "html", null, true);
        echo "
            </h2>
            <span class=\"theme-version\">v";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "version", array()), "html", null, true);
        echo "</span>
            <div>By <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "author", array()), "link", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "author", array()), "name", array()), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"g-block\">
            <span class=\"float-right\">
                <button class=\"button button-back-to-conf\"><i class=\"fa fa-fw fa-arrow-left\"></i> <span>Back to Setup</span></button>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "support", array()), "link", array()), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-support\"></i> <span>Support</span></a>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "documentation", array()), "link", array()), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a>
            </span>
        </div>
    </div>

    <div class=\"g-grid overview-details\">
        <div class=\"g-block size-35\">
             <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "thumbnail", array())), "html", null, true);
        echo "\" class=\"preview-image\" alt=\"\">
        </div>

        <div class=\"g-block\">
            <p>iFolio Pro is a beautiful joomla template made by the JoomLead Team.</p>
            <ul class=\"overview-list\">
                <li><i class=\"fa fa-check\"></i>OwlCarousel</li>
                <li><i class=\"fa fa-check\"></i>Content Cubes</li>
                <li><i class=\"fa fa-check\"></i>Content Tabs</li>
                <li><i class=\"fa fa-check\"></i>Animated Counter</li>
                <li><i class=\"fa fa-check\"></i>Call To Action</li>
                <li><i class=\"fa fa-check\"></i>Carousel</li>
                <li><i class=\"fa fa-check\"></i>Cookie Consent</li>
                <li><i class=\"fa fa-check\"></i>FAQ</li>
                <li><i class=\"fa fa-check\"></i>Feature box</li>
                <li><i class=\"fa fa-check\"></i>Heading</li>
                <li><i class=\"fa fa-check\"></i>Light Gallery</li>
                <li><i class=\"fa fa-check\"></i>Particle js</li>
                <li><i class=\"fa fa-check\"></i>Pricing</li>
                <li><i class=\"fa fa-check\"></i>Tesimonial</li>
            </ul>
        </div>
    </div>

    ";
        // line 47
        $this->loadTemplate("@gantry-admin/partials/gantry-details.html.twig", "@gantry-admin/pages/about/about.html.twig", 47)->display($context);
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 47,  74 => 23,  64 => 16,  60 => 15,  50 => 10,  46 => 9,  35 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/about/about.html.twig", "C:\\xampp\\htdocs\\Joomla\\templates\\jl_ifolio_free\\admin\\templates\\pages\\about\\about.html.twig");
    }
}
