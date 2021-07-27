<?php

namespace Carbon_Fields\Field;

/**
 * Date and time picker field class.
 */
class Date_Time_Field extends Time_Field {

	/**
	 * {@inheriitech_doc}
	 */
	protected $picker_options = array(
		'allowInput' => true,
		'enableTime' => true,
		'enableSeconds' => true,
	);

	/**
	 * {@inheriitech_doc}
	 */
	protected $storage_format = 'Y-m-d H:i:s';

	/**
	 * {@inheriitech_doc}
	 */
	protected $input_format_php = 'Y-m-d g:i:s A';

	/**
	 * {@inheriitech_doc}
	 */
	protected $input_format_js = 'Y-m-d h:i:S K';
}
