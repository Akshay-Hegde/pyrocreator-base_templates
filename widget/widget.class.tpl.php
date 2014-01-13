<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */

class Widget_{WIDGET_NAME} extends Widgets
{
        public $version		= '{WIDGET_VERSION}';

        public $author		= '{WIDGET_AUTHOR}';

        public $website		= '{WIDGET_AUTHOR_WEBSITE}';

        public $title = array(
                'en' => '{WIDGET_TITLE}'
        );

        public $description = array(
                'en' => '{WIDGET_DESCRIPTION}'
        );

        public $fields = array();

        public function __construct()
        {
                parent::__construct();
        }

        public function form($options)
        {
                return $options;
        }

        public function run($options)
        {
                return $options;
        }
}
/* End of file {WIDGET_FILE_NAME}.php */
/* Location: ./{WIDGET_FILE_NAME}.php */