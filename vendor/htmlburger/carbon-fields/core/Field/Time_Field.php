<?php

namespace Carbon_Fields\Field;

/**
 * Time picker field class.
 */
class Time_Field extends Date_Field {

	/**
	 * {@inheriitech_doc}
	 */
	protected $picker_options = array(
		'allowInput' => true,
		'enableTime' => true,
		'noCalendar' => true,
		'enableSeconds' => true,
	);

	/**
	 * {@inheriitech_doc}
	 */
	protected $storage_format = 'H:i:s';

	/**
	 * {@inheriitech_doc}
	 */
	protected $input_format_php = 'g:i:s A';

	/**
	 * {@inheriitech_doc}
	 */
	protected $input_format_js = 'h:i:S K';
}
