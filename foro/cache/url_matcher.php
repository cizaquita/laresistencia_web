<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // oneall_sociallogin_validate
        if ($pathinfo === '/oneall_sociallogin_validate') {
            return array (  '_controller' => 'oneall.sociallogin.listener:handle',  '_route' => 'oneall_sociallogin_validate',);
        }

        // vse_abbc3_bbcode_wizard
        if (0 === strpos($pathinfo, '/wizard/bbcode') && preg_match('#^/wizard/bbcode/(?P<mode>\\w+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vse_abbc3_bbcode_wizard')), array (  '_controller' => 'vse.abbc3.wizard:bbcode_wizard',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
