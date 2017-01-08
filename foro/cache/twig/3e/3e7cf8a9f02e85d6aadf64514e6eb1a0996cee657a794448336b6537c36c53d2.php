<?php

/* overall_footer.html */
class __TwigTemplate_cb77c748cdb6c54eac018e2242b3d47939e30fcf941a4b89cffb3769e6d113a0 extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t\t";
        // line 3
        echo "\t</div>
</div>

";
        // line 6
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 7
        echo "
<div class=\"inventea-footer-wrapper\">
\t<div class=\"inventea-footer\">
\t\t<div class=\"inventea-widgets-wrapper\">
\t\t\t";
        // line 11
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 12
            echo "\t\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t\t<h4 class=\"inventea-widget-title\">";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("FEED");
            echo "</h4>

\t\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t\t";
            // line 16
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\">";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "</a></li>";
            }
            // line 17
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "</a></li>";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "</a></li>";
            }
            // line 22
            echo "\t\t\t\t\t\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "
\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("GOTO_PAGE");
        echo "</h4>

\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t";
        // line 31
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-star fa-fw\"></i> <a href=\"";
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a></li>";
        }
        // line 32
        echo "\t\t\t\t\t";
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-search fa-fw\"></i> <a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a></li>";
        }
        // line 33
        echo "\t\t\t\t\t";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-user fa-fw\"></i> <a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>";
        }
        // line 34
        echo "\t\t\t\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-tachometer fa-fw\"></i> <a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a></li>";
        }
        // line 35
        echo "\t\t\t\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-cog fa-fw\"></i> <a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></li>";
        }
        // line 36
        echo "\t\t\t\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-envelope fa-fw\"></i> <a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 37
        echo "\t\t\t\t\t";
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-trash fa-fw\"></i> <a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 38
        echo "\t\t\t\t\t<li class=\"inventea-widget-links-item\"><i class=\"fa fa-clock-o fa-fw\"></i> ";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!--
\t\t\tShort description about your website or project. If you don't like to display
\t\t\tthis widget, just remove the whole <div> (lines 46-63) or comment it.
\t\t\tFeel free to modify the social buttons below. For more icons visit:
\t\t\thttp://fortawesome.github.io/Font-Awesome/icons/#brand
\t\t\t-->
\t\t\t<div class=\"inventea-widget inventea-text-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">Resistencia Colombia</h4>

\t\t\t\t<p>El equipo de la Resistencia en Colombia es un grupo Élite que te brinda apoyo siempre que lo necesites. Nos esforzamos con los nuevos jugadores tanto como sea posible para que puedan alcanzar el máximo nivel en el juego. La mejor forma de alcanzar el éxito en Ingress es mediante el trabajo en equipo, la sociabilidad tiene una gran importancia para nosotros, ya que entre todos diseñamos estrategias de ataque; las diversas operaciones exitosas que hemos realizado hasta ahora, dan testimonio de este hecho. Si tienes alguna duda o deseas un buen inicio, cuenta con nosotros.</p>

\t\t\t\t<ul class=\"inventea-social-icons\">
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://www.facebook.com/laresistenciaco/\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://plus.google.com/communities/112924149274761224653\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://twitter.com/laresistenciaco\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://telegram.me/rescol\"><i class=\"fa fa-telegram\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"inventea-breadcrumbs-container\">
\t\t\t<ul class=\"linklist inventea-breadcrumbs\">
\t\t\t\t";
        // line 64
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 65
        echo "\t\t\t\t";
        // line 66
        echo "\t\t\t\t<li class=\"small-icon icon-home inventea-breadcrumbs\" data-skip-responsive=\"true\">
\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
        echo ": ";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 68
        echo "\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 71
            echo "\t\t\t\t\t\t";
            // line 72
            echo "\t\t\t\t\t\t<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t\t\t";
            // line 73
            // line 74
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t";
        // line 76
        echo "\t\t\t\t</li>
\t\t\t\t";
        // line 77
        // line 78
        echo "\t\t\t</ul>
\t\t</div>

\t\t<footer class=\"inventea-credits\" role=\"contentinfo\">
\t\t\t";
        // line 82
        // line 83
        echo "\t\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "<br />
\t\t\tEstilo creado por <a href=\"https://inventea.com\" title=\"phpBB styles, HTML5 &amp; CSS3 templates\">INVENTEA</a>
\t\t\t<br />Editado y construido por <a href=\"https://telegram.me/Cizaquita\">@Cizaquita</a>
\t\t\t<br /><br />Alojado por <a href=\"http://colombianhost.net\">www.ColombianHost.net<img src=\"images/host-logo-32x32.png\" alt=\"ColombianHost.net\" height=\"16\" width=\"16\"></a>
\t\t</footer>
\t</div>
</div>

<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 91
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t<div id=\"darken\">&nbsp;</div>
</div>

<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 95
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t<a href=\"#\" class=\"alert_close\"></a>
\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
</div>
<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t<a href=\"#\" class=\"alert_close\"></a>
\t<div class=\"alert_text\"></div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 104
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 105
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 106
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 107
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('26');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 108
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('26');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 109
        echo "
";
        // line 110
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 111
        echo "
";
        // line 112
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 112)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 113
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

";
        // line 115
        // line 116
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 116,  464 => 115,  459 => 113,  445 => 112,  442 => 111,  437 => 110,  434 => 109,  419 => 108,  404 => 107,  397 => 106,  389 => 105,  385 => 104,  371 => 95,  356 => 91,  344 => 83,  343 => 82,  337 => 78,  336 => 77,  333 => 76,  331 => 75,  325 => 74,  324 => 73,  311 => 72,  309 => 71,  305 => 70,  296 => 69,  294 => 68,  282 => 67,  279 => 66,  277 => 65,  274 => 64,  244 => 38,  235 => 37,  226 => 36,  215 => 35,  204 => 34,  193 => 33,  182 => 32,  168 => 31,  162 => 28,  158 => 26,  153 => 23,  132 => 22,  113 => 21,  100 => 20,  87 => 19,  74 => 18,  61 => 17,  49 => 16,  43 => 13,  40 => 12,  38 => 11,  32 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* 		<!-- EVENT overall_footer_content_after -->*/
/* 		<!-- EVENT overall_footer_page_body_after -->*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF -->*/
/* */
/* <div class="inventea-footer-wrapper">*/
/* 	<div class="inventea-footer">*/
/* 		<div class="inventea-widgets-wrapper">*/
/* 			<!-- IF S_ENABLE_FEEDS -->*/
/* 				<div class="inventea-widget inventea-list-widget">*/
/* 					<h4 class="inventea-widget-title">{L_FEED}</h4>*/
/* */
/* 					<ul class="inventea-widget-links">*/
/* 						<!-- IF S_ENABLE_FEEDS_OVERALL --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}" title="{L_FEED} - {SITENAME}">{SITENAME}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_NEWS --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=news" title="{L_FEED} - {L_FEED_NEWS}">{L_FEED_NEWS}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_FORUMS --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=forums" title="{L_FEED} - {L_ALL_FORUMS}">{L_ALL_FORUMS}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_TOPICS --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=topics" title="{L_FEED} - {L_FEED_TOPICS_NEW}">{L_FEED_TOPICS_NEW}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?mode=topics_active" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}">{L_FEED_TOPICS_ACTIVE}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?f={S_FORUM_ID}" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}">{L_FORUM} - {FORUM_NAME}</a></li><!-- ENDIF -->*/
/* 						<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><li class="inventea-widget-links-item"><i class="fa fa-rss fa-fw"></i> <a href="{U_FEED}?f={S_FORUM_ID}&amp;t={S_TOPIC_ID}" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}">{L_TOPIC} - {TOPIC_TITLE}</a></li><!-- ENDIF -->*/
/* 					</ul>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<div class="inventea-widget inventea-list-widget">*/
/* 				<h4 class="inventea-widget-title">{L_GOTO_PAGE}</h4>*/
/* */
/* 				<ul class="inventea-widget-links">*/
/* 					<!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT --><li class="inventea-widget-links-item"><i class="fa fa-star fa-fw"></i> <a href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-text="{S_WATCH_FORUM_TOGGLE}" data-toggle-url="{U_WATCH_FORUM_TOGGLE}">{S_WATCH_FORUM_TITLE}</a></li><!-- ENDIF -->*/
/* 					<!-- IF S_DISPLAY_SEARCH --><li class="inventea-widget-links-item"><i class="fa fa-search fa-fw"></i> <a href="{U_SEARCH}" title="{L_SEARCH}">{L_SEARCH_ADV}</a></li><!-- ENDIF -->*/
/* 					<!-- IF S_REGISTERED_USER --><li class="inventea-widget-links-item"><i class="fa fa-user fa-fw"></i> <a href="{U_PROFILE}" title="{L_PROFILE}">{L_PROFILE}</a></li><!-- ENDIF -->*/
/* 					<!-- IF U_MCP --><li class="inventea-widget-links-item"><i class="fa fa-tachometer fa-fw"></i> <a href="{U_MCP}" title="{L_MCP}">{L_MCP}</a></li><!-- ENDIF -->*/
/* 					<!-- IF U_ACP --><li class="inventea-widget-links-item"><i class="fa fa-cog fa-fw"></i> <a href="{U_ACP}" title="{L_ACP}">{L_ACP}</a></li><!-- ENDIF -->*/
/* 					<!-- IF U_CONTACT_US --><li class="inventea-widget-links-item"><i class="fa fa-envelope fa-fw"></i> <a href="{U_CONTACT_US}">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/* 					<!-- IF not S_IS_BOT --><li class="inventea-widget-links-item"><i class="fa fa-trash fa-fw"></i> <a href="{U_DELETE_COOKIES}" data-ajax="true" data-refresh="true">{L_DELETE_COOKIES}</a></li><!-- ENDIF -->*/
/* 					<li class="inventea-widget-links-item"><i class="fa fa-clock-o fa-fw"></i> {S_TIMEZONE}</li>*/
/* 				</ul>*/
/* 			</div>*/
/* */
/* 			<!--*/
/* 			Short description about your website or project. If you don't like to display*/
/* 			this widget, just remove the whole <div> (lines 46-63) or comment it.*/
/* 			Feel free to modify the social buttons below. For more icons visit:*/
/* 			http://fortawesome.github.io/Font-Awesome/icons/#brand*/
/* 			-->*/
/* 			<div class="inventea-widget inventea-text-widget">*/
/* 				<h4 class="inventea-widget-title">Resistencia Colombia</h4>*/
/* */
/* 				<p>El equipo de la Resistencia en Colombia es un grupo Élite que te brinda apoyo siempre que lo necesites. Nos esforzamos con los nuevos jugadores tanto como sea posible para que puedan alcanzar el máximo nivel en el juego. La mejor forma de alcanzar el éxito en Ingress es mediante el trabajo en equipo, la sociabilidad tiene una gran importancia para nosotros, ya que entre todos diseñamos estrategias de ataque; las diversas operaciones exitosas que hemos realizado hasta ahora, dan testimonio de este hecho. Si tienes alguna duda o deseas un buen inicio, cuenta con nosotros.</p>*/
/* */
/* 				<ul class="inventea-social-icons">*/
/* 					<li class="inventea-social-icons-item"><a href="https://www.facebook.com/laresistenciaco/"><i class="fa fa-facebook"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="https://plus.google.com/communities/112924149274761224653"><i class="fa fa-google-plus"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="https://twitter.com/laresistenciaco"><i class="fa fa-twitter"></i></a></li>*/
/* 					<li class="inventea-social-icons-item"><a href="https://telegram.me/rescol"><i class="fa fa-telegram"></i></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="inventea-breadcrumbs-container">*/
/* 			<ul class="linklist inventea-breadcrumbs">*/
/* 				<!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/* 				<!-- EVENT overall_header_breadcrumbs_before -->*/
/* 				<li class="small-icon icon-home inventea-breadcrumbs" data-skip-responsive="true">*/
/* 					{L_JUMP_TO}: <!-- IF U_SITE_HOME --><span class="crumb"{$MICRODATA}><a href="{U_SITE_HOME}" data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_SITE_HOME}</span></a></span><!-- ENDIF -->*/
/* 					<!-- EVENT overall_header_breadcrumb_prepend -->*/
/* 					<span class="crumb"{$MICRODATA}><a href="{U_INDEX}" accesskey="h" data-navbar-reference="index" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></span>*/
/* 					<!-- BEGIN navlinks -->*/
/* 						<!-- EVENT overall_header_navlink_prepend -->*/
/* 						<span class="crumb"{$MICRODATA}<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><a href="{navlinks.U_VIEW_FORUM}" itemprop="url"><span itemprop="title">{navlinks.FORUM_NAME}</span></a></span>*/
/* 						<!-- EVENT overall_header_navlink_append -->*/
/* 					<!-- END navlinks -->*/
/* 					<!-- EVENT overall_header_breadcrumb_append -->*/
/* 				</li>*/
/* 				<!-- EVENT overall_header_breadcrumbs_after -->*/
/* 			</ul>*/
/* 		</div>*/
/* */
/* 		<footer class="inventea-credits" role="contentinfo">*/
/* 			<!-- EVENT overall_footer_copyright_prepend -->*/
/* 			{CREDIT_LINE}<br />*/
/* 			Estilo creado por <a href="https://inventea.com" title="phpBB styles, HTML5 &amp; CSS3 templates">INVENTEA</a>*/
/* 			<br />Editado y construido por <a href="https://telegram.me/Cizaquita">@Cizaquita</a>*/
/* 			<br /><br />Alojado por <a href="http://colombianhost.net">www.ColombianHost.net<img src="images/host-logo-32x32.png" alt="ColombianHost.net" height="16" width="16"></a>*/
/* 		</footer>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 	<div id="darken">&nbsp;</div>*/
/* </div>*/
/* */
/* <div id="phpbb_alert" class="phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 	<a href="#" class="alert_close"></a>*/
/* 	<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>*/
/* </div>*/
/* <div id="phpbb_confirm" class="phpbb_alert">*/
/* 	<a href="#" class="alert_close"></a>*/
/* 	<div class="alert_text"></div>*/
/* </div>*/
/* */
/* <script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* <!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* <script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* <!-- INCLUDEJS forum_fn.js -->*/
/* <!-- INCLUDEJS ajax.js -->*/
/* */
/* <!-- EVENT overall_footer_after -->*/
/* */
/* <!-- IF S_PLUPLOAD --><!-- INCLUDE plupload.html --><!-- ENDIF -->*/
/* {$SCRIPTS}*/
/* */
/* <!-- EVENT overall_footer_body_after -->*/
/* */
/* </body>*/
/* </html>*/
/* */
