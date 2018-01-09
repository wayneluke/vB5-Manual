<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class SegmentShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('segment', function(ShortcodeInterface $sc) {
            $class = $sc->getParameter('class', $sc->getBbCode());
            return '<section class="'.$class.'">'.$sc->getContent().'</section>';
        });
    }
}