<?php

/* acp_users_profile.html */
class __TwigTemplate_bd921904969f02464024d8cf9151f20e05aa6bb2bca1a827c608e532e6a6f57f extends Twig_Template
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
        echo "\t<form id=\"user_profile\" method=\"post\" action=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

\t<fieldset>
\t\t<legend>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("USER_PROFILE");
        echo "</legend>
\t";
        // line 5
        // line 6
        echo "\t<dl>
\t\t<dt><label for=\"jabber\">";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("UCP_JABBER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"email\" id=\"jabber\" name=\"jabber\" value=\"";
        // line 8
        echo (isset($context["JABBER"]) ? $context["JABBER"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"birthday\">";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("BIRTHDAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("BIRTHDAY_EXPLAIN");
        echo "</span></dt>
\t\t<dd>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("DAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <select id=\"birthday\" name=\"bday_day\">";
        echo (isset($context["S_BIRTHDAY_DAY_OPTIONS"]) ? $context["S_BIRTHDAY_DAY_OPTIONS"] : null);
        echo "</select> ";
        echo $this->env->getExtension('phpbb')->lang("MONTH");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <select name=\"bday_month\">";
        echo (isset($context["S_BIRTHDAY_MONTH_OPTIONS"]) ? $context["S_BIRTHDAY_MONTH_OPTIONS"] : null);
        echo "</select> ";
        echo $this->env->getExtension('phpbb')->lang("YEAR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <select name=\"bday_year\">";
        echo (isset($context["S_BIRTHDAY_YEAR_OPTIONS"]) ? $context["S_BIRTHDAY_YEAR_OPTIONS"] : null);
        echo "</select></dd>
\t</dl>
\t";
        // line 14
        // line 15
        echo "\t</fieldset>

\t";
        // line 17
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()))) {
            // line 18
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("USER_CUSTOM_PROFILE_FIELDS");
            echo "</legend>
\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 21
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 22
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 23
                echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                echo "</dd>
\t\t\t";
                // line 24
                if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                    // line 25
                    echo "\t\t\t\t<dd><span class=\"small\" style=\"color: red;\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                    echo "</span></dd>
\t\t\t";
                }
                // line 27
                echo "\t\t</dl>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</fieldset>
\t";
        }
        // line 31
        echo "\t";
        // line 32
        echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t\t";
        // line 34
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "acp_users_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 34,  138 => 33,  135 => 32,  133 => 31,  129 => 29,  122 => 27,  116 => 25,  114 => 24,  110 => 23,  93 => 22,  90 => 21,  86 => 20,  82 => 19,  79 => 18,  77 => 17,  73 => 15,  72 => 14,  54 => 12,  47 => 11,  41 => 8,  36 => 7,  33 => 6,  32 => 5,  28 => 4,  19 => 1,);
    }
}
/* 	<form id="user_profile" method="post" action="{U_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_USER_PROFILE}</legend>*/
/* 	<!-- EVENT acp_users_profile_before -->*/
/* 	<dl>*/
/* 		<dt><label for="jabber">{L_UCP_JABBER}{L_COLON}</label></dt>*/
/* 		<dd><input type="email" id="jabber" name="jabber" value="{JABBER}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="birthday">{L_BIRTHDAY}{L_COLON}</label><br /><span>{L_BIRTHDAY_EXPLAIN}</span></dt>*/
/* 		<dd>{L_DAY}{L_COLON} <select id="birthday" name="bday_day">{S_BIRTHDAY_DAY_OPTIONS}</select> {L_MONTH}{L_COLON} <select name="bday_month">{S_BIRTHDAY_MONTH_OPTIONS}</select> {L_YEAR}{L_COLON} <select name="bday_year">{S_BIRTHDAY_YEAR_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT acp_users_profile_after -->*/
/* 	</fieldset>*/
/* */
/* 	<!-- IF .profile_fields -->*/
/* 		<fieldset>*/
/* 			<legend>{L_USER_CUSTOM_PROFILE_FIELDS}</legend>*/
/* 		<!-- BEGIN profile_fields -->*/
/* 		<dl>*/
/* 			<dt><label<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF -->>{profile_fields.LANG_NAME}{L_COLON}</label><!-- IF profile_fields.LANG_EXPLAIN --><br /><span>{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF --></dt>*/
/* 			<dd>{profile_fields.FIELD}</dd>*/
/* 			<!-- IF profile_fields.ERROR -->*/
/* 				<dd><span class="small" style="color: red;">{profile_fields.ERROR}</span></dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 		<!-- END profile_fields -->*/
/* 		</fieldset>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT acp_users_profile_custom_after -->*/
/* 	<fieldset class="quick">*/
/* 		<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
