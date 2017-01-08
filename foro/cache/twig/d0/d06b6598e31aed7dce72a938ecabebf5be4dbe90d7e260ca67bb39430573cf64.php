<?php

/* mailinglist.html */
class __TwigTemplate_892aee8c09a8488c173b625cc2a9ddacaec9b3e8c06c69ee19f9f4cd08069c14 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "mailinglist.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_MAILINGLIST_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_MAILINGLIST_SETTINGS_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"acp_mailinglist\" method=\"post\" action=\"";
        // line 16
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
<fieldset>
\t<legend>";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_OPTIONS");
        echo "</legend>

\t<dl>
\t\t<dt><label for=\"mailinglist_email\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_EMAIL_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" name=\"mailinglist_email\" id=\"mailinglist_email\" value=\"";
        // line 22
        echo (isset($context["S_MAILINGLIST_EMAIL"]) ? $context["S_MAILINGLIST_EMAIL"] : null);
        echo "\" maxlength=\"200\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"mailinglist_post_type\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_POST_TYPE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_POST_TYPE_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<select name=\"mailinglist_post_type\" id=\"mailinglist_post_type\">
\t\t\t\t<option value=\"1\"";
        // line 28
        if (((isset($context["S_MAILINGLIST_POST_TYPE"]) ? $context["S_MAILINGLIST_POST_TYPE"] : null) == 1)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("NEW_POSTS");
        echo "</option>
\t\t\t\t<option value=\"2\"";
        // line 29
        if (((isset($context["S_MAILINGLIST_POST_TYPE"]) ? $context["S_MAILINGLIST_POST_TYPE"] : null) == 2)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("NEW_TOPICS");
        echo "</option>
\t\t\t\t<option value=\"3\"";
        // line 30
        if (((isset($context["S_MAILINGLIST_POST_TYPE"]) ? $context["S_MAILINGLIST_POST_TYPE"] : null) == 3)) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("NEW_POSTS_NEW_TOPICS");
        echo "</option>
\t\t\t</select>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"mailinglist_include_contents\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_INCLUDE_CONTENTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo (isset($context["l_MAILINGLIST_INCLUDE_CONTENTS_EXPLAIN"]) ? $context["l_MAILINGLIST_INCLUDE_CONTENTS_EXPLAIN"] : null);
        echo "</span></dt>
\t\t<dd><label><input type=\"radio\" name=\"mailinglist_include_contents\" value=\"1\"";
        // line 36
        if ((isset($context["S_MAILINGLIST_INCLUDE_CONTENTS"]) ? $context["S_MAILINGLIST_INCLUDE_CONTENTS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "  class=\"radio\" /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" name=\"mailinglist_include_contents\" id=\"mailinglist_include_contents\" value=\"0\"";
        // line 37
        if ( !(isset($context["S_MAILINGLIST_INCLUDE_CONTENTS"]) ? $context["S_MAILINGLIST_INCLUDE_CONTENTS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"mailinglist_unsubscribe\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_UNSUBSCRIBE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MAILINGLIST_UNSUBSCRIBE_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" name=\"mailinglist_unsubscribe\" id=\"mailinglist_unsubscribe\" value=\"";
        // line 41
        echo (isset($context["S_MAILINGLIST_UNSUBSCRIBE"]) ? $context["S_MAILINGLIST_UNSUBSCRIBE"] : null);
        echo "\" maxlength=\"200\" /></dd>
\t</dl>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 47
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 51
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "mailinglist.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mailinglist.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 51,  172 => 47,  167 => 45,  163 => 44,  157 => 41,  150 => 40,  140 => 37,  132 => 36,  125 => 35,  113 => 30,  105 => 29,  97 => 28,  88 => 25,  82 => 22,  75 => 21,  69 => 18,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a name="maincontent"></a>*/
/* */
/* <h1>{L_ACP_MAILINGLIST_SETTINGS}</h1>*/
/* */
/* <p>{L_ACP_MAILINGLIST_SETTINGS_EXPLAIN}</p>*/
/* */
/* <!-- IF S_ERROR -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{ERROR_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="acp_mailinglist" method="post" action="{U_ACTION}">*/
/* <fieldset>*/
/* 	<legend>{L_MAILINGLIST_OPTIONS}</legend>*/
/* */
/* 	<dl>*/
/* 		<dt><label for="mailinglist_email">{L_MAILINGLIST_EMAIL}{L_COLON}</label><br /><span>{L_MAILINGLIST_EMAIL_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" name="mailinglist_email" id="mailinglist_email" value="{S_MAILINGLIST_EMAIL}" maxlength="200" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="mailinglist_post_type">{L_MAILINGLIST_POST_TYPE}{L_COLON}</label><br /><span>{L_MAILINGLIST_POST_TYPE_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<select name="mailinglist_post_type" id="mailinglist_post_type">*/
/* 				<option value="1"<!-- IF S_MAILINGLIST_POST_TYPE eq 1 --> selected="selected"<!-- ENDIF -->>{L_NEW_POSTS}</option>*/
/* 				<option value="2"<!-- IF S_MAILINGLIST_POST_TYPE eq 2 --> selected="selected"<!-- ENDIF -->>{L_NEW_TOPICS}</option>*/
/* 				<option value="3"<!-- IF S_MAILINGLIST_POST_TYPE eq 3 --> selected="selected"<!-- ENDIF -->>{L_NEW_POSTS_NEW_TOPICS}</option>*/
/* 			</select>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="mailinglist_include_contents">{L_MAILINGLIST_INCLUDE_CONTENTS}{L_COLON}</label><br /><span>{l_MAILINGLIST_INCLUDE_CONTENTS_EXPLAIN}</span></dt>*/
/* 		<dd><label><input type="radio" name="mailinglist_include_contents" value="1"<!-- IF S_MAILINGLIST_INCLUDE_CONTENTS --> checked="checked"<!-- ENDIF -->  class="radio" /> {L_YES}</label>*/
/* 		<label><input type="radio" name="mailinglist_include_contents" id="mailinglist_include_contents" value="0"<!-- IF not S_MAILINGLIST_INCLUDE_CONTENTS --> checked="checked"<!-- ENDIF --> class="radio" /> {L_NO}</label></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="mailinglist_unsubscribe">{L_MAILINGLIST_UNSUBSCRIBE}{L_COLON}</label><br /><span>{L_MAILINGLIST_UNSUBSCRIBE_EXPLAIN}</span></dt>*/
/* 		<dd><input type="text" name="mailinglist_unsubscribe" id="mailinglist_unsubscribe" value="{S_MAILINGLIST_UNSUBSCRIBE}" maxlength="200" /></dd>*/
/* 	</dl>*/
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
