<?php

/* @vse_abbc3/event/overall_header_head_append.html */
class __TwigTemplate_615dd2a62c7f8f4b0d5bea355db7e6b485f8af207272b879e5448ffb7d093631 extends Twig_Template
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
        $asset_file = "@vse_abbc3/abbc3.min.css";
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
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/overall_header_head_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% INCLUDECSS '@vse_abbc3/abbc3.min.css' %}*/
/* */
