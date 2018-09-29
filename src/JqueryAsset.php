<?php

namespace yidas\yii\jquery;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [jQuery](http://jquery.com/) JavaScript library.
 *
 * @author  Nick Tsai <myintaer@gmail.com>
 * @version 3.0.0
 */
class JqueryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yidas/yii2-jquery/dist';

    public $js = [];

    /**
     * @var string Default version for fixed assets
     */
    public $version = '3.3.1';

    /**
     * Default CDN JS URL
     *
     * @var string
     */
    public $cdnJS = ['https://code.jquery.com/jquery-%s.min.js'];

    /**
     * @var string CDN version for CDN mode, refer `$version` while `null`, eg. `'2.2.4'`
     */
    public $cdnVersion = null;
    
    /**
     * @var bool Enable or disable CDN mode
     */
    public $cdn = false;

    public function init()
    {
        // CDN mode
        if ($this->cdn) {
            // CDN version
            $this->cdnVersion = ($this->cdnVersion) ? $this->cdnVersion : $this->version;
            // Unset sourcePath
            $this->sourcePath = NULL;
            // Rewrite JS
            $this->js = [];
            foreach ($this->cdnJS as $key => $js) {
                $this->js[] = sprintf($js, $this->cdnVersion);
            }
        } else {
            // Dist mode
            $this->js = [
                sprintf("jquery-%s.min.js", $this->version)
                ];
        }
        parent::init();
    }
}
