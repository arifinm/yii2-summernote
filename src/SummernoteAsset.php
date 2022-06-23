<?php

namespace arifinm\summernote;

use Yii;
use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = '@bower/summernote/dist';

    /**
     * {@inheritDoc}
     */
    public $css = [
        'summernote-bs5.css'
    ];
    /**
     * {@inheritDoc}
     */
    public $js = [
        'summernote-bs5.js'
    ];

    /**
     * {@inheritDoc}
     */
    public $depends = [
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
