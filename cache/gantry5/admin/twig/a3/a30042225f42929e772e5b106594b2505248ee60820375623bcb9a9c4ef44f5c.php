<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_917f69629842674644b89e6692b73cfc2a6b7147e3e4f0f8c28cb2ca5b48f74c extends Twig_Template
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
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_584420f3f9583c05423ae3e9cf2f8cb1016ab236e06d406acae1b7483c496d02 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_4e4a2381e9763a7ccd5ff03c8ecc5dbac52051b7938f27c97471cc17350eab21 = "5.4") && ('' === $__internal_4e4a2381e9763a7ccd5ff03c8ecc5dbac52051b7938f27c97471cc17350eab21 || 0 === strpos($__internal_584420f3f9583c05423ae3e9cf2f8cb1016ab236e06d406acae1b7483c496d02, $__internal_4e4a2381e9763a7ccd5ff03c8ecc5dbac52051b7938f27c97471cc17350eab21)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "C:\\xampp\\htdocs\\Joomla\\administrator\\components\\com_gantry5\\templates\\partials\\php_unsupported.html.twig");
    }
}
