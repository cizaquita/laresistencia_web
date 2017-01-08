<?php

/* abbc3_bbvideo_wizard.html */
class __TwigTemplate_6cef6b4713b11db52b93134e9981fec38e0551d3948629d83f811e9b830de2f7 extends Twig_Template
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
\t\t\t\t\t<dt><label for=\"bbvideo_wizard_sites\">";
        // line 6
        echo ($this->env->getExtension('phpbb')->lang("ABBC3_BBVIDEO_SITES") . $this->env->getExtension('phpbb')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<select id=\"bbvideo_wizard_sites\" name=\"bbvideo_wizard_sites\">
\t\t\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ABBC3_BBVIDEO_SITES"]) ? $context["ABBC3_BBVIDEO_SITES"] : null));
        foreach ($context['_seq'] as $context["site"] => $context["example"]) {
            // line 10
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["example"];
            echo "\"";
            if (($context["site"] == (isset($context["ABBC3_BBVIDEO_DEFAULT"]) ? $context["ABBC3_BBVIDEO_DEFAULT"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $context["site"];
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['site'], $context['example'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbvideo_wizard_example\">";
        // line 16
        echo ($this->env->getExtension('phpbb')->lang("ABBC3_BBCODE_WIZ_EXAMPLE") . $this->env->getExtension('phpbb')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbvideo_wizard_example\" name=\"bbvideo_wizard_example\" readonly=\"readonly\" value=\"";
        // line 18
        echo (isset($context["ABBC3_BBVIDEO_LINK_EX"]) ? $context["ABBC3_BBVIDEO_LINK_EX"] : null);
        echo "\" size=\"45\" class=\"inputbox disabled\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<hr />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbvideo_wizard_link\">";
        // line 23
        echo ($this->env->getExtension('phpbb')->lang("ABBC3_BBVIDEO_LINK") . $this->env->getExtension('phpbb')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbvideo_wizard_link\" name=\"bbvideo_wizard_link\" value=\"\" class=\"inputbox\" size=\"45\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbvideo_wizard_width\">";
        // line 29
        echo ($this->env->getExtension('phpbb')->lang("ABBC3_BBVIDEO_SIZE") . $this->env->getExtension('phpbb')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"number\" id=\"bbvideo_wizard_width\" name=\"bbvideo_wizard_width\" value=\"";
        // line 31
        echo (isset($context["ABBC3_BBVIDEO_WIDTH"]) ? $context["ABBC3_BBVIDEO_WIDTH"] : null);
        echo "\" class=\"inputbox narrow\" style=\"width:60px;\" min=\"0\" max=\"9999\" size=\"4\" />
\t\t\t\t\t\t<span style=\"margin-right:3px;\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("ABBC3_BBVIDEO_SEPARATOR");
        echo "</span>
\t\t\t\t\t\t<input type=\"number\" id=\"bbvideo_wizard_height\" name=\"bbvideo_wizard_height\" value=\"";
        // line 33
        echo (isset($context["ABBC3_BBVIDEO_HEIGHT"]) ? $context["ABBC3_BBVIDEO_HEIGHT"] : null);
        echo "\" class=\"inputbox narrow\" style=\"width:60px;\" min=\"0\" max=\"9999\" size=\"4\" />
\t\t\t\t\t\t<select id=\"bbvideo_wizard_size_presets\" name=\"bbvideo_wizard_size_presets\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("ABBC3_BBVIDEO_PRESETS");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ABBC3_BBVIDEO_PRESETS"]) ? $context["ABBC3_BBVIDEO_PRESETS"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["preset"], "w", array());
            echo ",";
            echo $this->getAttribute($context["preset"], "h", array());
            echo "\">";
            echo $this->getAttribute($context["preset"], "w", array());
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("ABBC3_BBVIDEO_SEPARATOR");
            echo " ";
            echo $this->getAttribute($context["preset"], "h", array());
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t<div class=\"panel\" style=\"margin-bottom: 0;\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_submit\" id=\"bbcode_wizard_submit\" value=\"";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("ABBC3_BBCODE_WIZ_SUBMIT");
        echo "\" class=\"button1\" data-bbcode=\"bbvideo\" />&nbsp;
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_cancel\" id=\"bbcode_wizard_cancel\" value=\"";
        // line 49
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
        return "abbc3_bbvideo_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  133 => 48,  122 => 39,  105 => 37,  101 => 36,  97 => 35,  92 => 33,  88 => 32,  84 => 31,  79 => 29,  70 => 23,  62 => 18,  57 => 16,  51 => 12,  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* <form>*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 			<fieldset>*/
/* 				<dl>*/
/* 					<dt><label for="bbvideo_wizard_sites">{{ lang('ABBC3_BBVIDEO_SITES') ~ lang('COLON') }}</label></dt>*/
/* 					<dd>*/
/* 						<select id="bbvideo_wizard_sites" name="bbvideo_wizard_sites">*/
/* 							{% for site, example in ABBC3_BBVIDEO_SITES %}*/
/* 								<option value="{{ example }}"{% if site == ABBC3_BBVIDEO_DEFAULT %} selected="selected"{% endif %}>{{ site }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt><label for="bbvideo_wizard_example">{{ lang('ABBC3_BBCODE_WIZ_EXAMPLE') ~ lang('COLON') }}</label></dt>*/
/* 					<dd>*/
/* 						<input type="text" id="bbvideo_wizard_example" name="bbvideo_wizard_example" readonly="readonly" value="{{ ABBC3_BBVIDEO_LINK_EX }}" size="45" class="inputbox disabled" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<hr />*/
/* 				<dl>*/
/* 					<dt><label for="bbvideo_wizard_link">{{ lang('ABBC3_BBVIDEO_LINK') ~ lang('COLON') }}</label></dt>*/
/* 					<dd>*/
/* 						<input type="text" id="bbvideo_wizard_link" name="bbvideo_wizard_link" value="" class="inputbox" size="45" />*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<dl>*/
/* 					<dt><label for="bbvideo_wizard_width">{{ lang('ABBC3_BBVIDEO_SIZE') ~ lang('COLON') }}</label></dt>*/
/* 					<dd>*/
/* 						<input type="number" id="bbvideo_wizard_width" name="bbvideo_wizard_width" value="{{ ABBC3_BBVIDEO_WIDTH }}" class="inputbox narrow" style="width:60px;" min="0" max="9999" size="4" />*/
/* 						<span style="margin-right:3px;">{{ lang('ABBC3_BBVIDEO_SEPARATOR') }}</span>*/
/* 						<input type="number" id="bbvideo_wizard_height" name="bbvideo_wizard_height" value="{{ ABBC3_BBVIDEO_HEIGHT }}" class="inputbox narrow" style="width:60px;" min="0" max="9999" size="4" />*/
/* 						<select id="bbvideo_wizard_size_presets" name="bbvideo_wizard_size_presets">*/
/* 							<option value="">{{ lang('ABBC3_BBVIDEO_PRESETS') }}</option>*/
/* 							{% for preset in ABBC3_BBVIDEO_PRESETS %}*/
/* 								<option value="{{ preset.w }},{{ preset.h }}">{{ preset.w }} {{ lang('ABBC3_BBVIDEO_SEPARATOR') }} {{ preset.h }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</dd>*/
/* 				</dl>*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="panel" style="margin-bottom: 0;">*/
/* 		<div class="inner">*/
/* 			<fieldset class="submit-buttons">*/
/* 				<input type="button" name="bbcode_wizard_submit" id="bbcode_wizard_submit" value="{{ lang('ABBC3_BBCODE_WIZ_SUBMIT') }}" class="button1" data-bbcode="bbvideo" />&nbsp;*/
/* 				<input type="button" name="bbcode_wizard_cancel" id="bbcode_wizard_cancel" value="{{ lang('CANCEL') }}" class="button2" />*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
