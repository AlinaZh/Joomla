<?php

/* @gantry-admin/pages/configurations/confirm-deletion.html.twig */
class __TwigTemplate_492ca79b62bb6e5333b1c4ddd88b15a203db412934992e5794ab0106b7931cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gantry-admin/ajax/confirm-deletion.html.twig", "@gantry-admin/pages/configurations/confirm-deletion.html.twig", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@gantry-admin/ajax/confirm-deletion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_message($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((isset($context["inherited"]) ? $context["inherited"] : null)) {
            // line 5
            echo "    <div class=\"alert alert-warning\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE_INHERIT_X", (("<strong>" . (isset($context["outline"]) ? $context["outline"] : null)) . "</strong>"));
            echo "
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE_INHERIT_DESC"), "html", null, true);
            echo "
        <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inherited"]) ? $context["inherited"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    </div>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        $this->displayParentBlock("message", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/confirm-deletion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  64 => 15,  59 => 12,  50 => 10,  46 => 9,  41 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/configurations/confirm-deletion.html.twig", "C:\\xampp\\htdocs\\Joomla\\administrator\\components\\com_gantry5\\templates\\pages\\configurations\\confirm-deletion.html.twig");
    }
}
