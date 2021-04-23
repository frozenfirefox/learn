<?php


namespace app\blog\controller;

use cmf\controller\HomeBaseController;

class MineController extends HomeBaseController{
    /**
     * 我的体验课
     */
    public function mytrial(){
        $this->assign("nav", "");
        $this->assign("title", "我的体验课-九九教育");
        return $this->fetch('my_trial');
    }
}