<?php

/**
 * Allows you to insert inline buttons within the page content.
 * 
 * Custom BBCode to add a button element inline within the documentation.
 * Format: [button]text[/button]
 * 
 * @author Wayne Luke <wayne.luke@vbulletin.com>
 */
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ButtonShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('button', function(ShortcodeInterface $sc) {
            $class = $sc->getParameter('class', $sc->getBbCode());
            return '<button class="'.$class.'">'.$sc->getContent().'</button>';
        });
    }
}