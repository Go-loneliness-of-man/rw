<?php

// 命名空间
namespace app\index\controller;
use \core\publicController;
use \app\index\service\index as service;           // service
use \plugIn\test;                                  // 插件

class index extends publicController {

  // 基本流程示例
  public function index() {
    $service = new service();
    $params = $this->get();
    dump('控制器打印了请求参数：');
    dump($params);
    return $service->index($params);
  }

  // 简化控制器流程示例
  public function easy() {
    return $this->oftenCode(new service(), [], 'easy');
  }

  // 插件示例
  public function plugIn() {
    $plugIn = new test();
    return $plugIn->test();
  }

  // 模板示例
  public function template() {
    $a = '变量 a';
    $b = '变量 b';
    $this->loadVar('a', $a);
    $this->loadVar('b', $b);
    $this->show('demo');
  }

  public function test() {
    dump('test 服务被 index 控制器调用了');
  }
}

