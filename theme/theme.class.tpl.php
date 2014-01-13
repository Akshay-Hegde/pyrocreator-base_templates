<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * {THEME_NAME} theme
 */

class Theme_{THEME_NAME} extends Theme
{
	public $name			= '{THEME_NAME}';
  	public $version			= '{THEME_VERSION}';
  	public $author			= '{THEME_AUTHOR}';
  	public $description		= '{THEME_INFO}';
  	public $website			= '{THEME_INFO_WEBSITE}';
  	public $author_website	= '{THEME_AUTHOR_WEBSITE}';

  	public $options			= array(
  		
		'show_breadcrumbs' 	=> 	array(
			'title' 			=> 'Show Breadcrums',
	      	'description'   	=> 'Would you like to display breadcrums ?',
	      	'default'       	=> 'yes',
	      	'type'          	=> 'radio',
	      	'options'       	=> 'yes=Yes|no=No',
	      	'is_required'   	=> TRUE
	    ),

	);
}
/* End of file theme.php */
/* ./{THEME_FILE_NAME}/theme.php */