<?php

/**
 * Palette BBCode Extension.
 * 
 * Provides a custom BBCode used with Style Variable documentation to show a color swatch 
 * next to the default value of style variables.
 * Format: [palette]color code[/palette]
 * 
 * 
 * @author: Wayne Luke <wayne.luke@vbulletin.com>
 */

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