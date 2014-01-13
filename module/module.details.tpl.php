<?php defined('BASEPATH') OR exit('No direct script access allowed');\n

/**
 *
 */

class Module_{MODULE_NAME} extends Module
{
  public $version= '1.0';

  public $module_name= '{MODULE_FILE_NAME}';

  public function info()
  {
    return array(
      'name'		=> array(
        'en'	=> '{MODULE_NAME}'
      ),
      'description'	=> array(
        'en'		=> '{MODULE_DESCRIPTION}'
      ),
      'frontend'	=> '{MODULE_IS_FRONT}',
      'backend'	=> '{MODULE_IS_BACK}',
      'menu'		=> '{MODULE_MENU}',
      'roles'		=> array(
        // {MODULE_ROLES}
      ),
      'sections'	=> array(
        /* --------------------------------------------------------------
        {MODULE_FILE_NAME}
        -------------------------------------------------------------- */
        '{MODULE_FILE_NAME}' => array(
          'name' 	=> $this->module_name.':{MODULE_FILE_NAME}:title',
          'uri' 	=> 'admin/'.$this->module_name.'/{MODULE_FILE_NAME}',
          'shortcuts' => array(
            $this->module_name.':{MODULE_FILE_NAME}:shortcuts:create' => array(
              'name' 	=> $this->module_name.':{MODULE_FILE_NAME}:shortcuts:create',
              'uri' 	=> 'admin/'.$this->module_name.'/{MODULE_FILE_NAME}/form/new',
              'class' => 'add'
            ),
          )
        ),
      )
    );
  }

  public function install()
  {
    $this->load->driver('Streams');

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Add Stream
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $stream_slug = '{MODULE_FILE_NAME}';
    
    if ($this->streams->streams->add_stream(
        'lang:'.$this->module_name.':title:'.$stream_slug,
        $stream_slug,
        $this->module_name,
        $this->module_name.'_',
        null)
      )
    {
      $update_data = array(
        'view_options'  => array('name')
      );
      $this->streams->streams->update_stream($stream_slug, $this->module_name, $update_data);

      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      // Add Fields to Stream
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      
      /* --------------------------------------------------------------
       name
      -------------------------------------------------------------- */
      $field_slug = 'name';
      if (!$this->db->where('field_namespace', $this->module_name)
          ->where('field_slug', $field_slug)
          ->limit(1)
          ->get('data_fields')
          ->num_rows()
        )
      {
        $field = array(
          'name'				=> 'lang:'.$this->module_name.':'.$stream_slug.':fields:'.$field_slug,
          'slug'				=> $field_slug,
          'namespace'		=> $this->module_name,
          'type'				=> 'text',
          'extra'				=> array(
            // Extra
          ),
          'assign'			=> $stream_slug,
          'title_column'=> true,
          'required'		=> true,
          'unique'			=> true
        );
        $this->streams->fields->add_field($field);
      }
    }
    else
    {
        return FALSE;
    }
    return TRUE;
  }

  public function uninstall()
  {
    $this->load->driver('Streams');
    $this->streams->utilities->remove_namespace($this->module_name);
    return TRUE;
  }

  public function upgrade($old_version) { return TRUE; }
  public function help() { return TRUE; }
}
/* End of file details.php */
/* Location: ./{MODULE_FILE_NAME}/details.php */