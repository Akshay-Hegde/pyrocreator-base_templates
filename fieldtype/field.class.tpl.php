<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */

class Field_{FIELDTYPE_NAME}
{
	public $field_type_slug				= '{FIELDTYPE_FILE_NAME}';

	public $db_col_type					= '{FIELDTYPE_DATABASE_COL}';

	public $version						= '{FIELDTYPE_VERSION}';
	
	public $author						= array(
		'name'	=> '{FIELDTYPE_AUTHOR}',
		'url'	=> '{FIELDTYPE_AUTHOR_WEBSITE}'
	);

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function form_output($data)
	{
	}

	public function event($field)
	{  	
		// $this->CI->template->append_css('');
		// $this->CI->template->append_js('');

		// $this->CI->type->add_misc(
		// 	'<script type="text/javascript">
		// 	</script>'
		// );
	}

	/**
	 * Before save
	 */
	public function pre_save($input)
	{
	}

	/**
	 * Before output
	 */
	public function pre_output($input)
	{
	}
}
/* End of file {FIELDTYPE_FILE_NAME}.php */
/* Location: ./{FIELDTYPE_FILE_NAME}.php */