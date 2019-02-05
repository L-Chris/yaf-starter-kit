<?php
abstract class AbstractController extends Yaf_Controller_Abstract {
	public $arrViewData = array(
		'data' => array()
	);

	protected function init() {
		$this->_initCommon();
	}

  private function _initCommon() {}

	public function assign($strKey, $mixValue) {
		$this->arrViewData['data'][$strKey] = $mixValue;
	}

	public function renderPage($templateName) {
		$this->getView()->assign('pageData', $this->arrViewData);
		$this->getView()->display($templateName);
	}
}