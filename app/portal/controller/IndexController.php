<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;

class IndexController extends HomeBaseController
{

    public function index()
    {
        $this->assign("nav", "");
        $this->assign("title", "广场-九九教育");
        return $this->fetch(':index');
    }

    /**
     * 体验课
     */
    public function trial(){
        $this->assign("nav", "trial");
        $this->assign("title", "体验课-九九教育");
        return $this->fetch(':trial');
    }

    /**
     * 正式课
     */
    public function explore(){
        $this->assign("nav", "explore");
        $this->assign("title", "正式课-九九教育");
        return $this->fetch(':explore');
    }

    /**
     * activities
     */
    public function activities(){
        $this->assign("nav", "activities");
        $this->assign("title", "活动-九九教育");
        return $this->fetch(':activities');
    }

    /**
     * detail
     */
    public function detail(){
        return $this->fetch(':detail');
    }

    /**
     * courseDetail
     */
    public function courseDetail(){
        $this->assign("nav", "");
        $this->assign("title", "详情-九九教育");
        return $this->fetch(':course_detail');
    }

    /**
     * trial_detail
     */
    public function trial_detail(){
        $this->assign("nav", "");
        $this->assign("title", "详情-试听课");
        return $this->fetch(':trial_detail');
    }

    /**
     * actDetail
     */
    public function actDetail(){
        return $this->fetch(':act_detail');
    }

    public function block()
    {
        return $this->fetch();
    }

    public function ws()
    {
        return $this->fetch(':ws');
    }
}
