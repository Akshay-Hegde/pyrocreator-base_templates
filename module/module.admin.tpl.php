<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */

class Admin extends Admin_Controller
{
      protected $section = '{MODULE_FILE_NAME}';

      public function __construct()
      {
            parent::__construct();
      }

      public function index()
      {
            redirect('admin/'.$this->module.'/'.$this->section);
      }
}
/* End of file admin.php */
/* Location: ./{MODULE_FILE_NAME}/controllers/admin.php */