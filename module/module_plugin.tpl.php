<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */

class Plugin_{MODULE_NAME} extends Plugin
{
      public $version = '1.0.0';

      public $name = array(
            'en' => '{MODULE_NAME}',
      );

      public $description = array(
            'en' => '{MODULE_DESCRIPTION}',
      );

      /**
       * Returns a PluginDoc array
       *
       * @return array
       */
      public function _self_doc()
      {
            return array();
      }
}
/* End of file plugin.php */
/* Location: ./{MODULE_FILE_NAME}/plugin.php */