<?php

/**
 * 
 * @author Wayne Luke <wayne.luke@vbulletin.com>
 */
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BasicShortcode extends Shortcode
{
    public function init()
    {
        // Bold BBCode
        $this->shortcode->getHandlers()->add('b', function(ShortcodeInterface $sc) {
            // $class = $sc->getParameter('class', $sc->getBbCode());
            return '<b>'.$sc->getContent().'</b>';
        });

        // Italic BBCode
        $this->shortcode->getHandlers()->add('i', function(ShortcodeInterface $sc) {
          // $class = $sc->getParameter('class', $sc->getBbCode());
          return '<i>'.$sc->getContent().'</i>';
        });

        // Strikethrough BBCode
        $this->shortcode->getHandlers()->add('s', function(ShortcodeInterface $sc) {
          // $class = $sc->getParameter('class', $sc->getBbCode());
          return '<s>'.$sc->getContent().'</s>';
        });

        // Inline var bbcode
        $this->shortcode->getHandlers()->add('var', function(ShortcodeInterface $sc) {
          // $class = $sc->getParameter('class', $sc->getBbCode());
          return '<var>'.$sc->getContent().'</var>';
        });
    }
}