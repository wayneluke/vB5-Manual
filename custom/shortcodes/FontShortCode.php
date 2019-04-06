<?php

/**
 * 
 * @author Wayne Luke <wayne.luke@vbulletin.com>
 */
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class FontShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('font', function(ShortcodeInterface $sc) {
            $class = $sc->getParameter('family', $sc->getBbCode());
            return '<span style="font-family:'.$class.';">'.$sc->getContent().'</span>';
        });
    }
}