<?php

/* memberlist_view.html */
class __TwigTemplate_54e5b5f82543a975ab0deecac050237dbbf0465d1e59c94521f471c4ac9aa2c3 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

";
        // line 5
        // line 6
        echo "
<form method=\"post\" action=\"";
        // line 7
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" id=\"viewprofile\">
<div class=\"panel bg1";
        // line 8
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
\t<div class=\"inner\">

\t";
        // line 11
        if (((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null) &&  !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null))) {
            // line 12
            echo "\t\t<div class=\"inventea-online\"><i class=\"fa fa-power-off\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("ONLINE");
            echo "</div>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 16
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">
\t\t\t\t";
            // line 18
            if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
                // line 19
                echo "\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t<div class=\"inventea-online\" style=\"margin-bottom: 6px;\"><i class=\"fa fa-power-off\"></i> ";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("ONLINE");
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 23
            echo "
\t\t\t\t";
            // line 24
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "
\t\t\t</dt>
\t\t\t";
            // line 26
            // line 27
            echo "\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 28
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 29
            echo "\t\t\t";
            // line 30
            echo "\t\t</dl>
\t";
        }
        // line 32
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t<dd>
\t\t\t";
        // line 36
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: ";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</span>
\t\t\t";
        // line 37
        if ((isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 38
        echo "\t\t\t";
        if ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 39
        echo "\t\t\t";
        if ((isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 40
        echo "\t\t\t";
        if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 41
        echo "\t\t</dd>
\t\t";
        // line 42
        if ( !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 43
            echo "\t\t\t";
            // line 44
            echo "\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dt>";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 45
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dt>";
                if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("RANK");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                }
                echo "</dt> <dd>";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 46
            echo "\t\t\t";
            // line 47
            echo "\t\t";
        }
        // line 48
        echo "\t\t";
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "</dd>";
        }
        // line 49
        echo "\t\t";
        if (((isset($context["AGE"]) ? $context["AGE"] : null) !== "")) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["AGE"]) ? $context["AGE"] : null);
            echo "</dd>";
        }
        // line 50
        echo "\t\t";
        if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 51
        echo "\t\t";
        // line 52
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 53
            echo "\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 54
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 56
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t";
        // line 58
        echo "\t\t";
        // line 59
        echo "\t\t";
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_ZEBRA"]) ? $context["S_ZEBRA"] : null))) {
            // line 60
            echo "\t\t\t";
            if ((isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null)) {
                // line 61
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo (isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif (            // line 62
(isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null)) {
                // line 63
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo (isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t";
                if ((isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null)) {
                    // line 66
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo (isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t";
                if ((isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null)) {
                    // line 69
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo (isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 71
                echo "\t\t\t";
            }
            // line 72
            echo "\t\t";
        }
        // line 73
        echo "\t\t";
        // line 74
        echo "\t</dl>

\t</div>
</div>

";
        // line 79
        // line 80
        echo "<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<div class=\"column1\">
\t\t<h3>";
        // line 84
        echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 87
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 88
        echo "\t\t";
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 89
        echo "\t\t";
        if (((isset($context["U_JABBER"]) ? $context["U_JABBER"] : null) && (isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_JABBER"]) ? $context["U_JABBER"] : null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif ((isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null);
            echo "</dd>";
        }
        // line 90
        echo "\t\t";
        // line 91
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 92
            echo "\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 93
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 94
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                    // line 95
                    echo "\t\t\t\t\t<dd><a href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t";
            }
            // line 100
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t";
        // line 102
        echo "\t\t";
        if ((isset($context["S_PROFILE_FIELD1"]) ? $context["S_PROFILE_FIELD1"] : null)) {
            // line 103
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 104
            echo (isset($context["PROFILE_FIELD1_NAME"]) ? $context["PROFILE_FIELD1_NAME"] : null);
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["PROFILE_FIELD1_VALUE"]) ? $context["PROFILE_FIELD1_VALUE"] : null);
            echo "</dd>
\t\t";
        }
        // line 106
        echo "\t\t</dl>
\t</div>

\t<div class=\"column2\">
\t\t<h3>";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 112
        // line 113
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</dd>
\t\t\t<dt>";
        // line 114
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        echo (isset($context["LAST_ACTIVE"]) ? $context["LAST_ACTIVE"] : null);
        echo "</dd>
\t\t\t";
        // line 115
        if ((isset($context["S_WARNINGS"]) ? $context["S_WARNINGS"] : null)) {
            // line 116
            echo "\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 117
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "</strong>";
            if (((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null) || (isset($context["U_WARN"]) ? $context["U_WARN"] : null))) {
                echo " [ ";
                if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_NOTES"]) ? $context["U_NOTES"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if ((isset($context["U_WARN"]) ? $context["U_WARN"] : null)) {
                    if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo (isset($context["U_WARN"]) ? $context["U_WARN"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 119
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 120
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo " ";
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "| <strong><a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 121
        echo "\t\t\t\t\t";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo "<br />(";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo " / ";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo ")";
        }
        // line 122
        echo "\t\t\t\t\t";
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            echo "<br />(<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif ((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            echo "<br />(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 123
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 124
        if (((isset($context["S_SHOW_ACTIVITY"]) ? $context["S_SHOW_ACTIVITY"] : null) && (isset($context["POSTS"]) ? $context["POSTS"] : null))) {
            // line 125
            echo "\t\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 126
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 128
        echo "\t\t\t";
        // line 129
        echo "\t\t</dl>
\t</div>

\t</div>
</div>
";
        // line 134
        // line 135
        echo "
";
        // line 136
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 137
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">

\t\t<h3>";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3>

\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 142
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div></div>

\t</div>
</div>
";
        }
        // line 147
        echo "
</form>

";
        // line 150
        // line 151
        echo "
";
        // line 152
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 152)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 153
        echo "
";
        // line 154
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 154)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 154,  637 => 153,  625 => 152,  622 => 151,  621 => 150,  616 => 147,  608 => 142,  603 => 140,  598 => 137,  596 => 136,  593 => 135,  592 => 134,  585 => 129,  583 => 128,  563 => 126,  543 => 125,  541 => 124,  538 => 123,  525 => 122,  516 => 121,  506 => 120,  500 => 119,  472 => 117,  466 => 116,  464 => 115,  457 => 114,  449 => 113,  448 => 112,  443 => 110,  437 => 106,  429 => 104,  426 => 103,  423 => 102,  421 => 101,  415 => 100,  412 => 99,  406 => 97,  398 => 95,  396 => 94,  390 => 93,  387 => 92,  382 => 91,  380 => 90,  361 => 89,  349 => 88,  338 => 87,  332 => 84,  326 => 80,  325 => 79,  318 => 74,  316 => 73,  313 => 72,  310 => 71,  302 => 69,  299 => 68,  291 => 66,  288 => 65,  280 => 63,  278 => 62,  271 => 61,  268 => 60,  265 => 59,  263 => 58,  261 => 57,  255 => 56,  246 => 54,  243 => 53,  238 => 52,  236 => 51,  224 => 50,  214 => 49,  204 => 48,  201 => 47,  199 => 46,  185 => 45,  175 => 44,  173 => 43,  171 => 42,  168 => 41,  159 => 40,  150 => 39,  141 => 38,  133 => 37,  122 => 36,  116 => 34,  112 => 32,  108 => 30,  106 => 29,  99 => 28,  92 => 27,  91 => 26,  86 => 24,  83 => 23,  77 => 20,  74 => 19,  72 => 18,  68 => 16,  66 => 15,  63 => 14,  57 => 12,  55 => 11,  47 => 8,  43 => 7,  40 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="memberlist-title">{PAGE_TITLE}</h2>*/
/* */
/* <!-- EVENT memberlist_view_content_prepend -->*/
/* */
/* <form method="post" action="{S_PROFILE_ACTION}" id="viewprofile">*/
/* <div class="panel bg1<!-- IF S_ONLINE --> online<!-- ENDIF -->">*/
/* 	<div class="inner">*/
/* */
/* 	<!-- IF S_ONLINE and not AVATAR_IMG -->*/
/* 		<div class="inventea-online"><i class="fa fa-power-off"></i> {L_ONLINE}</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF AVATAR_IMG -->*/
/* 		<dl class="left-box">*/
/* 			<dt class="profile-avatar">*/
/* 				<!-- IF S_ONLINE -->*/
/* 					<div style="text-align: center;">*/
/* 						<div class="inventea-online" style="margin-bottom: 6px;"><i class="fa fa-power-off"></i> {L_ONLINE}</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* */
/* 				{AVATAR_IMG}*/
/* 			</dt>*/
/* 			<!-- EVENT memberlist_view_rank_avatar_before -->*/
/* 			<!-- IF RANK_TITLE --><dd style="text-align: center;">{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG --><dd style="text-align: center;">{RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_rank_avatar_after -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<dl class="left-box details profile-details">*/
/* 		<dt>{L_USERNAME}{L_COLON}</dt>*/
/* 		<dd>*/
/* 			<!-- IF USER_COLOR --><span style="color: {USER_COLOR}; font-weight: bold;"><!-- ELSE --><span><!-- ENDIF -->{USERNAME}</span>*/
/* 			<!-- IF U_EDIT_SELF --> [ <a href="{U_EDIT_SELF}">{L_EDIT_PROFILE}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_USER_ADMIN --> [ <a href="{U_USER_ADMIN}">{L_USER_ADMIN}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_USER_BAN --> [ <a href="{U_USER_BAN}">{L_USER_BAN}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_SWITCH_PERMISSIONS --> [ <a href="{U_SWITCH_PERMISSIONS}">{L_USE_PERMISSIONS}</a> ]<!-- ENDIF -->*/
/* 		</dd>*/
/* 		<!-- IF not AVATAR_IMG -->*/
/* 			<!-- EVENT memberlist_view_rank_no_avatar_before -->*/
/* 			<!-- IF RANK_TITLE --><dt>{L_RANK}{L_COLON}</dt> <dd>{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG --><dt><!-- IF RANK_TITLE -->&nbsp;<!-- ELSE -->{L_RANK}{L_COLON}<!-- ENDIF --></dt> <dd>{RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_rank_no_avatar_after -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_USER_INACTIVE --><dt>{L_USER_IS_INACTIVE}{L_COLON}</dt> <dd>{USER_INACTIVE_REASON}</dd><!-- ENDIF -->*/
/* 		<!-- IF AGE !== '' --><dt>{L_AGE}{L_COLON}</dt> <dd>{AGE}</dd><!-- ENDIF -->*/
/* 		<!-- IF S_GROUP_OPTIONS --><dt>{L_USERGROUPS}{L_COLON}</dt> <dd><select name="g">{S_GROUP_OPTIONS}</select> <input type="submit" name="submit" value="{L_GO}" class="button2" /></dd><!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_non_contact_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF not custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dt>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</dt> <dd>{custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT memberlist_view_non_contact_custom_fields_after -->*/
/* 		<!-- EVENT memberlist_view_zebra_before -->*/
/* 		<!-- IF S_USER_LOGGED_IN and S_ZEBRA -->*/
/* 			<!-- IF U_REMOVE_FRIEND -->*/
/* 				<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_REMOVE_FRIEND}" data-ajax="zebra"><strong>{L_REMOVE_FRIEND}</strong></a></dd>*/
/* 			<!-- ELSEIF U_REMOVE_FOE -->*/
/* 				<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_REMOVE_FOE}" data-ajax="zebra"><strong>{L_REMOVE_FOE}</strong></a></dd>*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF U_ADD_FRIEND -->*/
/* 					<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_ADD_FRIEND}" data-ajax="zebra"><strong>{L_ADD_FRIEND}</strong></a></dd>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_ADD_FOE -->*/
/* 					<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_ADD_FOE}" data-ajax="zebra"><strong>{L_ADD_FOE}</strong></a></dd>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_zebra_after -->*/
/* 	</dl>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- EVENT memberlist_view_contact_before -->*/
/* <div class="panel bg2">*/
/* 	<div class="inner">*/
/* */
/* 	<div class="column1">*/
/* 		<h3>{L_CONTACT_USER}</h3>*/
/* */
/* 		<dl class="details">*/
/* 		<!-- IF U_EMAIL --><dt>{L_EMAIL_ADDRESS}{L_COLON}</dt> <dd><a href="{U_EMAIL}">{L_SEND_EMAIL_USER}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_PM --><dt>{L_PM}{L_COLON}</dt> <dd><a href="{U_PM}">{L_SEND_PRIVATE_MESSAGE}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_JABBER and S_JABBER_ENABLED --><dt>{L_JABBER}{L_COLON}</dt> <dd><a href="{U_JABBER}" onclick="popup(this.href, 750, 320); return false;">{L_SEND_JABBER_MESSAGE}</a></dd><!-- ELSEIF USER_JABBER --><dt>{L_JABBER}{L_COLON}</dt> <dd>{USER_JABBER}</dd><!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_contact_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dt>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</dt>*/
/* 				<!-- IF custom_fields.PROFILE_FIELD_CONTACT -->*/
/* 					<dd><a href="{custom_fields.PROFILE_FIELD_CONTACT}">{custom_fields.PROFILE_FIELD_DESC}</a></dd>*/
/* 				<!-- ELSE -->*/
/* 					<dd>{custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT memberlist_view_contact_custom_fields_after -->*/
/* 		<!-- IF S_PROFILE_FIELD1 -->*/
/* 			<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 			<dt>{PROFILE_FIELD1_NAME}{L_COLON}</dt> <dd>{PROFILE_FIELD1_VALUE}</dd>*/
/* 		<!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* */
/* 	<div class="column2">*/
/* 		<h3>{L_USER_FORUM}</h3>*/
/* 		<dl class="details">*/
/* 			<!-- EVENT memberlist_view_user_statistics_before -->*/
/* 			<dt>{L_JOINED}{L_COLON}</dt> <dd>{JOINED}</dd>*/
/* 			<dt>{L_LAST_ACTIVE}{L_COLON}</dt> <dd>{LAST_ACTIVE}</dd>*/
/* 			<!-- IF S_WARNINGS -->*/
/* 			<dt>{L_WARNINGS}{L_COLON} </dt>*/
/* 			<dd><strong>{WARNINGS}</strong><!-- IF U_NOTES or U_WARN --> [ <!-- IF U_NOTES --><a href="{U_NOTES}">{L_VIEW_NOTES}</a><!-- ENDIF --> <!-- IF U_WARN --><!-- IF U_NOTES --> | <!-- ENDIF --><a href="{U_WARN}">{L_WARN_USER}</a><!-- ENDIF --> ]<!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<dt>{L_TOTAL_POSTS}{L_COLON}</dt>*/
/* 				<dd>{POSTS} <!-- IF S_DISPLAY_SEARCH -->| <strong><a href="{U_SEARCH_USER}">{L_SEARCH_USER_POSTS}</a></strong><!-- ENDIF -->*/
/* 					<!-- IF POSTS_PCT --><br />({POSTS_PCT} / {POSTS_DAY})<!-- ENDIF -->*/
/* 					<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE --><br />(<a href="{U_MCP_QUEUE}">{L_POSTS_IN_QUEUE}</a>)<!-- ELSEIF POSTS_IN_QUEUE --><br />({L_POSTS_IN_QUEUE})<!-- ENDIF -->*/
/* 				</dd>*/
/* 			<!-- IF S_SHOW_ACTIVITY and POSTS -->*/
/* 				<dt>{L_ACTIVE_IN_FORUM}{L_COLON}</dt> <dd><!-- IF ACTIVE_FORUM != '' --><strong><a href="{U_ACTIVE_FORUM}">{ACTIVE_FORUM}</a></strong><br />({ACTIVE_FORUM_POSTS} / {ACTIVE_FORUM_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 				<dt>{L_ACTIVE_IN_TOPIC}{L_COLON}</dt> <dd><!-- IF ACTIVE_TOPIC != '' --><strong><a href="{U_ACTIVE_TOPIC}">{ACTIVE_TOPIC}</a></strong><br />({ACTIVE_TOPIC_POSTS} / {ACTIVE_TOPIC_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_user_statistics_after -->*/
/* 		</dl>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- EVENT memberlist_view_contact_after -->*/
/* */
/* <!-- IF SIGNATURE -->*/
/* <div class="panel bg1">*/
/* 	<div class="inner">*/
/* */
/* 		<h3>{L_SIGNATURE}</h3>*/
/* */
/* 		<div class="postbody"><div class="signature standalone">{SIGNATURE}</div></div>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <!-- EVENT memberlist_view_content_append -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
