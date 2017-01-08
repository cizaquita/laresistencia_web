<?php

/* ucp_resend.html */
class __TwigTemplate_491ce3b5297c8a74a6e99f67032fc8e98fabcf99b7e4850784aa5caa6ebd2ac3 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_resend.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "

<form action=\"";
        // line 4
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" method=\"post\" id=\"resend\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<h2>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("UCP_RESEND");
        echo "</h2>

\t\t<fieldset>
\t\t<dl>
\t\t\t<dt><label for=\"username\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input class=\"inputbox narrow\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"email\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("EMAIL_REMIND");
        echo "</span></dt>
\t\t\t<dd><input class=\"inputbox narrow\" type=\"email\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd>";
        // line 23
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"button1\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" tabindex=\"2\" />&nbsp; <input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" /></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t</div>
</div>
</form>

";
        // line 32
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_resend.html", 32)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_resend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  70 => 23,  59 => 18,  51 => 14,  44 => 10,  35 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* */
/* <form action="{S_PROFILE_ACTION}" method="post" id="resend">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<div class="content">*/
/* 		<h2>{L_UCP_RESEND}</h2>*/
/* */
/* 		<fieldset>*/
/* 		<dl>*/
/* 			<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 			<dd><input class="inputbox narrow" type="text" name="username" id="username" size="25" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label><br /><span>{L_EMAIL_REMIND}</span></dt>*/
/* 			<dd><input class="inputbox narrow" type="email" name="email" id="email" size="25" maxlength="100" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt>&nbsp;</dt>*/
/* 			<dd>{S_HIDDEN_FIELDS}{S_FORM_TOKEN}<input type="submit" name="submit" id="submit" class="button1" value="{L_SUBMIT}" tabindex="2" />&nbsp; <input type="reset" value="{L_RESET}" name="reset" class="button2" /></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
