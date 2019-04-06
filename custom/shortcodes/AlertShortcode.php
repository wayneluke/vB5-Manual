<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class AlertShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('note', function(ShortcodeInterface $sc) {
            $this->shortcode->addAssets('css', 'plugin://shortcode-core/css/shortcode-notice.css');
            return '<div class="sc-notice note"><div>'.$sc->getContent().'</div></div>';
        });

        $this->shortcode->getHandlers()->add('warning', function(ShortcodeInterface $sc) {
          $this->shortcode->addAssets('css', 'plugin://shortcode-core/css/shortcode-notice.css');
          return '<div class="sc-notice warning"><div>'.$sc->getContent().'</div></div>';
        });
    }
}