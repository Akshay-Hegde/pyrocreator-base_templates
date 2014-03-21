<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */

class Admin_{MODULE_NAME} extends Admin_Controller
{
      protected $section = '{MODULE_FILE_NAME}';

      public function __construct()
      {
            parent::__construct();

            $this->lang->load($this->section);
      }

      public function index($pagination_offset = 0)
      {
            $extra = array(
                  'title'=> lang($this->module.':'.$this->section.':title'),
                  'buttons'=> array(
                        // edit
                        array(
                              'label'=> lang('global:edit'),
                              'url'=> 'admin/'.$this->module.'/'.$this->section.'/form/edit/-entry_id-'
                        ),
                        // delete
                        array(
                              'label'=> lang('global:delete'),
                              'url'=> 'admin/'.$this->module.'/'.$this->section.'/delete/-entry_id-',
                              'confirm'=> true
                        )
                        // !buttons
                  )
            );
            $this->streams->cp->entries_table(
                  $this->section,
                  $this->module,
                  Settings::get('records_per_page'),
                  'admin/'.$this->module.'/'.$this->section.'/index',
                  true,
                  $extra
            );
      }

      public function form($type = 'new', $id = 0)
      {
            $extra = array(
                  'title'           => lang($this->module.':'.$this->section.':'.$type.':title'),
                  'success_message' => lang($this->module.':'.$this->section.':messages:'.$type.':success'),
                  'failure_message' => lang($this->module.':'.$this->section.':messages:'.$type.':failure'),
                  'return'          => 'admin/'.$this->module.'/'.$this->section
            );
            $this->streams->cp->entry_form(
                  $this->section,
                  $this->module,
                  $type,
                  $id,
                  true,
                  $extra
            );
      }

      public function delete($id = 0)
      {
            if ($this->streams->entries->delete_entry($id, $this->section, $this->module))
            {
                  $this->session->set_flashdata('success', lang($this->module.':'.$this->section.':messages:delete:success'));
            }
            else
            {
                  $this->session->set_flashdata('error', lang($this->module.':'.$this->section.':messages:delete:failure'));
            }
            redirect('admin/'.$this->module.'/'.$this->section);
      }
}
/* End of file admin_{MODULE_FILE_NAME}.php */
/* Location: ./{MODULE_FILE_NAME}/controllers/admin_{MODULE_FILE_NAME}.php */