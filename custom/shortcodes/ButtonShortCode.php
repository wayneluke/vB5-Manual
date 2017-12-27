<?php
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