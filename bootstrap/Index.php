<?php
class Bootstrap extends Yaf_Bootstrap_Abstract {

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		$dispatcher->registerPlugin(new AuthenticationPlugin());
	}

	public function _initSmarty(Yaf_Dispatcher $dispatcher) {
		$smarty = new Smarty_Adapter(null , Yaf_Application::app()->getConfig()->smarty);
		$dispatcher->setView($smarty);
	}

	public function _initView(Yaf_Dispatcher $dispatcher) {
		$dispatcher->disableView();
	}
}
