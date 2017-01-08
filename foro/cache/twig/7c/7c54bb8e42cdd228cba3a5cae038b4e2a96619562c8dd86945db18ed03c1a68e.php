<?php

/* abbc3_url_wizard.html */
class __TwigTemplate_26feb638c0fb9b7b0acaaf930f70f5b7e882ed0273cda34828e9ce4d981af1eb extends Twig_Template
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
        echo "<form>
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_example\">";
        // line 6
        echo ($this->env->getExtension('phpbb')->lang("ABBC3_BBCODE_WIZ_EXAMPLE") . $this->env->getExtension('phpbb')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_example\" name=\"bbcode_wizard_example\" readonly=\"readonly\" value=\"";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("ABBC3_URL_EXAMPLE");
        echo "\" size=\"45\" class=\"inputbox disabled\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<hr />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_link\">";
        // line 13
        echo ($this->env->getExtension('phpbb')->lang("ABBC3_URL_LINK") . $this->env->getExtension('phpbb')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_link\" name=\"bbcode_wizard_link\" value=\"\" class=\"inputbox\" size=\"45\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_description\">";
        // line 19
        echo ($this->env->getExtension('phpbb')->lang("ABBC3_URL_DESCRIPTION") . $this->env->getExtension('phpbb')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_description\" name=\"bbcode_wizard_description\" value=\"\" class=\"inputbox\" size=\"45\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t<div class=\"panel\" style=\"margin-bottom: 0;\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_submit\" id=\"bbcode_wizard_submit\" value=\"";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("ABBC3_BBCODE_WIZ_SUBMIT");
        echo "\" class=\"button1\" data-bbcode=\"url\" />&nbsp;
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_cancel\" id=\"bbcode_wizard_cancel\" value=\"";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("CANCEL");
        echo "\" class=\"button2\" />
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "abbc3_url_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 31,  62 => 30,  48 => 19,  39 => 13,  31 => 8,  26 => 6,  19 => 1,);
    }
}
/* <form>*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 			<fieldset>*/
/* 				<dl>*/
/* 					<dt><label for="bbcode_wizard_example">{{ lang('ABBC3_BBCODE_WIZ_EXAMPLE') ~ lang('COLON') }}</label></dt>*/
/* 					<dd>*/
/* 						<input type="text" id="bbcode_wizard_example" name="bbcode_wizard_example" readonly="readonly" value="{{ lang('ABBC3_URL_EXAMPLE') }}" size="45" class="inputbox disabled" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<hr />*/
/* 				<dl>*/
/* 					<dt><label for="bbcode_wizard_link">{{ lang('ABBC3_URL_LINK') ~ lang('COLON') }}</label></dt>*/
/* 					<dd>*/
/* 						<input type="text" id="bbcode_wizard_link" name="bbcode_wizard_link" value="" class="inputbox" size="45" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt><label for="bbcode_wizard_description">{{ lang('ABBC3_URL_DESCRIPTION') ~ lang('COLON') }}</label></dt>*/
/* 					<dd>*/
/* 						<input type="text" id="bbcode_wizard_description" name="bbcode_wizard_description" value="" class="inputbox" size="45" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="panel" style="margin-bottom: 0;">*/
/* 		<div class="inner">*/
/* 			<fieldset class="submit-buttons">*/
/* 				<input type="button" name="bbcode_wizard_submit" id="bbcode_wizard_submit" value="{{ lang('ABBC3_BBCODE_WIZ_SUBMIT') }}" class="button1" data-bbcode="url" />&nbsp;*/
/* 				<input type="button" name="bbcode_wizard_cancel" id="bbcode_wizard_cancel" value="{{ lang('CANCEL') }}" class="button2" />*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
