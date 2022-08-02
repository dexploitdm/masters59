<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:35
 */

namespace app\components;
use yii\base\Widget;
use app\models\Catalog;
use Yii;

class MenuWidget extends Widget{

    public $tpl;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;

    public function init(){
        parent::init();
        if( $this->tpl === null ){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        // get cache
        if($this->tpl == 'menu.php'){ 
            $menu = Yii::$app->cache->get('menu');
            if($menu) return $menu;
        }

        $this->data = Catalog::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        // set cache
        if($this->tpl == 'menu.php'){
            Yii::$app->cache->set('menu', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    }

    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            $tree[$id] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = ''){
        $str = '';
        foreach ($tree as $catalog) {
            $str .= $this->catToTemplate($catalog, $tab);
        }
        return $str;
    }

    protected function catToTemplate($catalog, $tab){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}