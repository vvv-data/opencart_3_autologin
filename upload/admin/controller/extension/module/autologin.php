<?php
class ControllerExtensionModuleAutologin extends Controller {
 
	public function index() {
   
	  
	  $this->load->model('extension/module/autologin');

	  $data = array();
	  $data = $this->load->language('extension/module/autologin');
   
	  
	  if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
		
		$this->model_extension_module_autologin->SaveSettings();
		
		$this->session->data['success'] = $data['text_success'];
		$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
	  }
   
	  // Загружаем настройки через метод "модели"
	  $data += $this->model_extension_module_autologin->LoadSettings();	  
	  
	  $data += $this->GetBreadCrumbs();
   
	  
	  $data['action'] = $this->url->link('extension/module/autologin', 'user_token=' . $this->session->data['user_token'], true);
	  $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
	  
	  $data['header'] = $this->load->controller('common/header');
	  $data['column_left'] = $this->load->controller('common/column_left');
	  $data['footer'] = $this->load->controller('common/footer');
   
	  
	  $this->response->setOutput($this->load->view('extension/module/autologin', $data));
   
	}
   
	// Хлебные крошки
	private function GetBreadCrumbs() {
	  $data = array(); $data['breadcrumbs'] = array();
	  $data['breadcrumbs'][] = array(
		'text' => $this->language->get('text_home'),
		'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
	  );
	  $data['breadcrumbs'][] = array(
		'text' => $this->language->get('text_extension'),
		'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
	  );
	  $data['breadcrumbs'][] = array(
		'text' => $this->language->get('heading_title'),
		'href' => $this->url->link('extension/module/autologin', 'user_token=' . $this->session->data['user_token'], true)
	  );
	  return $data;
	}

	public function uninstall() {
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('module_autologin');
	  }
   
  }