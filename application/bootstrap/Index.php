<?php

class Bootstrap extends Yaf_Bootstrap_Abstract {
	public function _initConfig() {
		$config = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $config);
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		$dispatcher->registerPlugin(new AuthenticationPlugin());
	}

	public function _initSmarty(Yaf_Dispatcher $dispatcher) {
		$smarty = new Smarty_Adapter(null , Yaf_Registry::get("config")->get("smarty"));
		$dispatcher->setView($smarty);
	}

	public function _initView(Yaf_Dispatcher $dispatcher) {
		$dispatcher->disableView();
	}

	// public function _initDb(Yaf_Dispatcher $dispatcher) {
	// 	$database = new Medoo(Yaf_Registry::get("config")->get("database"));
	// 	$this->db = $database;
	// 	Yaf_Registry::set('db', $database);
	// }
}
