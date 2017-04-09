<?php

/* @gantry-admin/ajax/fontpicker.html.twig */
class __TwigTemplate_5ce9271eb0cb7f77d07d0bca0d566db051ed9f06f3f51a8eca515df285784e76 extends Twig_Template
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
        echo "<div id=\"g-fonts\" class=\"g-grid\">
    <div class=\"g-particles-header settings-block\">
        <input class=\"float-left font-preview\" type=\"text\" data-font-preview=\"\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_PREVIEW"), "html", null, true);
        echo "\"
               value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_SAMPLE"), "html", null, true);
        echo "\">
        <span class=\"float-right particle-search-wrapper\">
            <input class=\"font-search\" type=\"text\" data-font-search=\"\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SEARCH_FONT_ELI"), "html", null, true);
        echo "\">
            <span class=\"particle-search-total\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonts"]) ? $context["fonts"] : null), "count", array()), "html", null, true);
        echo "</span>
        </span>
    </div>
    <div class=\"g-particles-main\">
        <ul class=\"g-fonts-list\">
            ";
        // line 12
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["fonts"]) ? $context["fonts"] : null), "local_families", array()))) {
            // line 13
            echo "                <li class=\"g-font-heading\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_LOCAL"), "html", null, true);
            echo "</li>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fonts"]) ? $context["fonts"] : null), "local_families", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 15
                echo "                <li class=\"g-local-font\" data-font=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "family", array()), "html", null, true);
                echo "\" data-variant data-variants=\"";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["font"], "variants", array()), ","), "html", null, true);
                echo "\"
                    data-subsets=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["font"], "subsets", array()), ","), "html", null, true);
                echo "\" data-category=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "category", array()), "html", null, true);
                echo "\">
                    <input type=\"checkbox\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "family", array()), "html", null, true);
                echo "\" />
                    <div class=\"family\">
                        <strong>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "family", array()), "html", null, true);
                echo "</strong>,
                        <span class=\"g-font-variants-list\">
                            ";
                // line 21
                if ((twig_length_filter($this->env, $this->getAttribute($context["font"], "variants", array())) > 1)) {
                    // line 22
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_X_STYLES", twig_length_filter($this->env, $this->getAttribute($context["font"], "variants", array()))), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 24
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_X_STYLE", twig_length_filter($this->env, $this->getAttribute($context["font"], "variants", array()))), "html", null, true);
                    echo "
                            ";
                }
                // line 26
                echo "                        </span>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                <li class=\"g-font-heading\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_REMOTE"), "html", null, true);
            echo "</li>
            ";
        }
        // line 32
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fonts"]) ? $context["fonts"] : null), "families", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 33
            echo "                <li data-font=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "family", array()), "html", null, true);
            echo "\" data-variant=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($context["font"], "variants", array())), "html", null, true);
            echo "\"
                    data-variants=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_replace_filter(twig_join_filter($this->getAttribute($context["font"], "variants", array()), ","), array("regular" => "normal")), "html", null, true);
            echo "\"
                    data-subsets=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["font"], "subsets", array()), ","), "html", null, true);
            echo "\" data-category=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "category", array()), "html", null, true);
            echo "\">
                    <div class=\"family\">
                        <strong>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "family", array()), "html", null, true);
            echo "</strong>,
                        ";
            // line 38
            if ((twig_length_filter($this->env, $this->getAttribute($context["font"], "variants", array())) > 1)) {
                // line 39
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_X_STYLES", twig_length_filter($this->env, $this->getAttribute($context["font"], "variants", array()))), "html", null, true);
                echo "
                        ";
            } else {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_X_STYLE", twig_length_filter($this->env, $this->getAttribute($context["font"], "variants", array()))), "html", null, true);
                echo "
                        ";
            }
            // line 43
            if ((twig_length_filter($this->env, $this->getAttribute($context["font"], "subsets", array())) > 1)) {
                // line 44
                echo ", <span class=\"font-charsets\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_X_CHARSETS", twig_length_filter($this->env, $this->getAttribute($context["font"], "subsets", array()))), "html", null, true);
                echo "
                            <span class=\"font-charsets-selected\">(<i class=\"fa fa-fw fa-check-square-o\" aria-hidden=\"true\"></i>
                                <span class=\"font-charsets-details\">";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_X_OF_Y", 1, twig_length_filter($this->env, $this->getAttribute($context["font"], "subsets", array()))), "html", null, true);
                echo "</span>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_SELECTED"), "html", null, true);
                echo ")
                            </span>
                        </span>
                        ";
            }
            // line 51
            echo "                    </div>
                    <ul>
                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["font"], "variants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 54
                echo "                            <li data-font=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "family", array()), "html", null, true);
                echo "\" data-variant=\"";
                echo twig_escape_filter($this->env, $context["variant"], "html", null, true);
                echo "\"";
                if (($context["variant"] != twig_first($this->env, $this->getAttribute($context["font"], "variants", array())))) {
                    // line 55
                    echo "                                class=\"g-variant-hide\"";
                }
                echo ">
                                <input type=\"checkbox\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $context["variant"], "html", null, true);
                echo "\" />
                                <div class=\"variant\"><small>";
                // line 57
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["variantsMap"]) ? $context["variantsMap"] : null), $context["variant"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["variantsMap"]) ? $context["variantsMap"] : null), $context["variant"], array(), "array"), $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_UNKNOWN_VARIANT"))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_UNKNOWN_VARIANT"))), "html", null, true);
                echo "</small></div>
                                <div class=\"preview\">";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FONTS_SAMPLE"), "html", null, true);
                echo "</div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    </ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </ul>
    </div>
    <div class=\"g-particles-footer settings-block\">
        <div class=\"float-left font-left-container\">
            <span class=\"button font-category\" data-font-categories=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["fonts"]) ? $context["fonts"] : null), "categories", array()), ","), "html", null, true);
        echo "\">
                ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CATEGORIES"), "html", null, true);
        echo " (<small>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["fonts"]) ? $context["fonts"] : null), "categories", array())), "html", null, true);
        echo "</small>) <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
            </span>
            <span class=\"button font-subsets\" data-font-subsets=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["fonts"]) ? $context["fonts"] : null), "subsets", array()), ","), "html", null, true);
        echo "\">
                ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SUBSETS"), "html", null, true);
        echo " (<small>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LATIN"), "html", null, true);
        echo "</small>) <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
            </span>
        </div>
        <div class=\"float-right font-right-container\">
            <span class=\"font-selected\"></span>
            <button class=\"button button-primary\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo "</button>
            <span>&nbsp;</span>
            <button class=\"button g5-dialog-close\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/fontpicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 79,  243 => 77,  233 => 72,  229 => 71,  222 => 69,  218 => 68,  212 => 64,  204 => 61,  195 => 58,  191 => 57,  187 => 56,  182 => 55,  175 => 54,  171 => 53,  167 => 51,  160 => 47,  156 => 46,  150 => 44,  148 => 43,  142 => 41,  136 => 39,  134 => 38,  130 => 37,  123 => 35,  119 => 34,  112 => 33,  107 => 32,  101 => 30,  92 => 26,  86 => 24,  80 => 22,  78 => 21,  73 => 19,  68 => 17,  62 => 16,  55 => 15,  51 => 14,  46 => 13,  44 => 12,  36 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/ajax/fontpicker.html.twig", "C:\\xampp\\htdocs\\Joomla\\administrator\\components\\com_gantry5\\templates\\ajax\\fontpicker.html.twig");
    }
}
