<?php
namespace yii\bfootable;

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
        $configure = !empty($this->footableOptions['options']) ? Json::encode($this->footableOptions['options']) : '';
        $columns=!empty($this->footableOptions['columns']) ? Json::encode($this->footableOptions['columns']) : '""';
        $this->getView()->registerJs("
            var tableId='{$this->options['id']}';
            var columns = {$columns};
            var tHeadRow=jQuery('#'+tableId+' table thead tr');
            for (var col in columns){
                $(tHeadRow.children()[col]).data('hide',columns[col]);
                console.log($(tHeadRow.children()[col]).data());
                console.log($(tHeadRow.children()[col]).text());
            }
            jQuery('#'+tableId+' table').footable({$configure});
        ");
    }
}
