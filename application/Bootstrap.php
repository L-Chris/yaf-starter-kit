<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class Bootstrap extends Yaf_Bootstrap_Abstract {
	public function _initLoader() {
		Yaf_Loader::import(APP_PATH . '/vendor/smarty/smarty/libs/Autoloader.php');
		Yaf_Loader::import(APP_PATH . '/vendor/autoload.php');
		Yaf_Loader::import(APP_PATH . '/application/Function.php');
	}

	public function _initConfig() {
		$config = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $config);
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		$dispatcher->registerPlugin(new AuthenticationPlugin());
	}

	public function _initSmarty(Yaf_Dispatcher $dispatcher) {
		$smarty = new Smarty_Adapter(null , Yaf_Registry::get('config')->get('smarty'));
		$dispatcher->setView($smarty);
	}

	public function _initView(Yaf_Dispatcher $dispatcher) {
		$dispatcher->disableView();
	}

	public function _initDb(Yaf_Dispatcher $dispatcher) {
		$db_config_file = new Yaf_Config_Ini(APP_PATH . '/conf/db.ini');
		$db_config = $db_config_file->get('mysql')->toArray();

		$capsule = new Capsule;
		$capsule->addConnection($db_config);
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}
}