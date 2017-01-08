<?php

/* @vse_abbc3/event/acp_posting_buttons_before.html */
class __TwigTemplate_e56dfe62cf93b3e7dde84c148036ce4ecac58d1bd0b0fbd0abf70590f543995f extends Twig_Template
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
        $asset_file = "@vse_abbc3/js/abbc3.min.js";
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
        // line 2
        $this->loadTemplate("abbc3_posting_buttons.html", "@vse_abbc3/event/acp_posting_buttons_before.html", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_posting_buttons_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  19 => 1,);
    }
}
/* {% INCLUDEJS '@vse_abbc3/js/abbc3.min.js' %}*/
/* {% include 'abbc3_posting_buttons.html' %}*/
/* */
