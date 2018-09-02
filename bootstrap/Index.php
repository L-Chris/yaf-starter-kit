<?php

class Bootstrap extends Yaf_Bootstrap_Abstract {

	public function _initConfig() {
		$arrConfig = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $arrConfig);
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		$dispatcher->registerPlugin(new AuthenticationPlugin());
	}

	public function _initSmarty(Yaf_Dispatcher $dispatcher) {
		Smarty_Autoloader::register();
		$smarty = new Smarty_Adapter(null , Yaf_Application::app()->getConfig()->smarty);
		$dispatcher->setView($smarty);
	}

	public function _initView(Yaf_Dispatcher $dispatcher) {
		$dispatcher->disableView();
	}
}
