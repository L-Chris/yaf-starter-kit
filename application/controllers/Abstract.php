<?php
abstract class AbstractController extends Yaf_Controller_Abstract {
	public $arrViewData = array(
		'data' => array(),
		'base' => array(),
	);

	protected function init() {
		$this->_initCommon();
	}

  private function _initCommon() {
		$this->arrViewData['base'] = array(
			'__ROOT__' => 'http://yaf.cc',
			'__RESOURCE__' => 'http://yaf.cc/resource'
		);
  }

	public function assign($strKey, $mixValue) {
		$this->arrViewData['data'][$strKey] = $mixValue;
	}

	public function renderPage($templateName) {
		$this->getView()->assign('pageData', $this->arrViewData);
		$this->getView()->display($templateName);
	}
}