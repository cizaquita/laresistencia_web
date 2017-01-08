<?php

/* @oneall_sociallogin/event/ucp_profile_register_details_before.html */
class __TwigTemplate_0aa671dc236b82363f52d093cc48b7e9388e4c0955e676c25cafddba4888f615 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["OA_SOCIAL_LOGIN_USER"]) ? $context["OA_SOCIAL_LOGIN_USER"] : null)) {
            // line 3
            echo "\t";
            $asset_file = "@oneall_sociallogin/ucp_skip_password.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('26');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "@oneall_sociallogin/event/ucp_profile_register_details_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <!-- IF OA_SOCIAL_LOGIN_USER -->*/
/* 	<!-- INCLUDEJS @oneall_sociallogin/ucp_skip_password.js -->*/
/* <!-- ENDIF -->*/
/* */
/* */
