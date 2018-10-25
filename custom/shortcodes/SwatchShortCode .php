<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class swatchShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('swatch', function(ShortcodeInterface $sc) {
            $class = $sc->getParameter('color', $sc->getBbCode());
            return "<div style='display:inline-block;vertical-align:middle;border:1px solid #CECECE;width:3.5em;height:16pt;background-color:" . $color . '>'.$sc->getContent().'</div>';
        });
    }
}