<?php
/*
@author vvv-data
@link   https://vvvdata.ru
*/

class ModelExtensionModuleAutologin extends Model {
 

	// Запись настроек в базу данных
	public function SaveSettings() {
	  $this->load->model('setting/setting');
	  $this->model_setting_setting->editSetting('module_autologin', $this->request->post);
	}
   
	// Загрузка настроек из базы данных
	public function LoadSettings() {
	  $this->load->model('setting/setting');
	  return $this->model_setting_setting->getSetting('module_autologin');
	}
   
  }