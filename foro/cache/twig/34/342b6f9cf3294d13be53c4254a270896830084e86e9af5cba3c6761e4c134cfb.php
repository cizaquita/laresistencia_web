<?php

/* navbar_header.html */
class __TwigTemplate_069d1eefefc818e3d0d3ee4d6b465883bd0c45cdb2531a4b1b83ed3cb1aa3bcb extends Twig_Template
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
        echo "<nav role=\"navigation\">
\t<ul class=\"linklist bulletin inventea-forum-menu\" role=\"menubar\">
\t\t";
        // line 3
        // line 4
        echo "
\t\t";
        // line 5
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></li>";
        }
        // line 6
        echo "\t\t<li><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 7
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>";
        }
        // line 8
        echo "
\t\t";
        // line 9
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 10
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 11
            echo "\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "
\t\t";
        // line 14
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 15
            echo "\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            // line 16
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t";
        }
        // line 18
        echo "
\t\t";
        // line 19
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 20
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 21
        echo "
\t\t";
        // line 22
        // line 23
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 23,  126 => 22,  123 => 21,  112 => 20,  102 => 19,  99 => 18,  92 => 16,  85 => 15,  83 => 14,  80 => 13,  77 => 12,  68 => 11,  59 => 10,  57 => 9,  54 => 8,  46 => 7,  37 => 6,  27 => 5,  24 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav role="navigation">*/
/* 	<ul class="linklist bulletin inventea-forum-menu" role="menubar">*/
/* 		<!-- EVENT overall_header_navigation_prepend -->*/
/* */
/* 		<!-- IF U_SITE_HOME --><li data-skip-responsive="true"><a href="{U_SITE_HOME}" title="{L_SITE_HOME}" role="menuitem">{L_SITE_HOME}</a></li><!-- ENDIF -->*/
/* 		<li><a href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}" role="menuitem">{L_FAQ}</a></li>*/
/* 		<!-- IF S_DISPLAY_SEARCH --><li data-skip-responsive="true"><a href="{U_SEARCH}" role="menuitem">{L_SEARCH}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- IF not S_IS_BOT -->*/
/* 			<!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 			<!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_DISPLAY_SEARCH -->*/
/* 			<li data-skip-responsive="true"><a href="{U_SEARCH_UNANSWERED}" role="menuitem">{L_SEARCH_UNANSWERED}</a></li>*/
/* 			<li data-skip-responsive="true"><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF U_MCP --><li><a href="{U_MCP}" title="{L_MCP}" role="menuitem">{L_MCP_SHORT}</a></li><!-- ENDIF -->*/
/* 		<!-- IF U_ACP --><li><a href="{U_ACP}" title="{L_ACP}" role="menuitem">{L_ACP_SHORT}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_header_navigation_append -->*/
/* 	</ul>*/
/* </nav>*/
/* */
