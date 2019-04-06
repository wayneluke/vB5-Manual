<?php

/**
 * Allows you to show text in bold.
 * 
 * Custom BBCode to add a <b> element inline within the documentation.
 * Format: [b]text[/b]
 * 
 * @author Wayne Luke <wayne.luke@vbulletin.com>
 */
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class IndentShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('indent', function(ShortcodeInterface $sc) {
            return '<div style="text-indent:50px;">'.$sc->getContent().'</div>';
        });
    }
}