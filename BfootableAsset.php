<?php

namespace wrt\bfootable;

use \Yii;

class FootableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor';

    public $js = [
        'fooplugins/footable/footable.js'
    ];

    public $css=[
        'fooplugins/footable/css/footable.core.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
