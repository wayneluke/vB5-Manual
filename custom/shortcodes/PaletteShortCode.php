<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class PaletteShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('palette', function(ShortcodeInterface $sc) {
            $bgcolor = $sc->getParameter('palette', $sc->getBbCode());
            return "<div class='palette' style='background-color:" . $bgcolor . '>'.$sc->getContent().'</div>';
        });
    }
}