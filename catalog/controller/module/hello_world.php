<?php  
class ControllerModuleHelloWorld extends Controller {
	protected function index($setting) {
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/welcome.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/hello_world.tpl';
		} else {
			$this->template = 'default/template/module/world.tpl';
		}
		
		$this->render();
	}
}
?>