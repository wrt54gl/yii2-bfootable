<?php
namespace wrt\bfootable;

use yii\helpers\Json;
use kartik\grid;

class GridView extends grid\GridView
{
    public $footableOptions = [];

    public function run()
    {
        BfootableAsset::register($this->getView());
        $this->registerScript();
        parent::run();
    }

    protected function registerScript()
    {
        $configure = !empty($this->footableOptions) ? Json::encode($this->footableOptions) : '';
        $this->getView()->registerJs("jQuery('#{$this->options['id']} table').footable({$configure});");
    }
}
