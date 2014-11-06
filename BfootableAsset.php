<?php

namespace yii\bfootable;

use \Yii;

class BfootableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor';

    public $js = [
        'fooplugins/footable/js/footable.js'
    ];

    public $css=[
        'fooplugins/footable/css/footable.core.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
