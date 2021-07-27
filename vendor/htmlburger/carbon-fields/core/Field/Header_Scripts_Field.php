<?php

namespace Carbon_Fields\Field;

/**
 * Header scripts field class.
 * Intended only for use in theme options container.
 */
class Header_Scripts_Field extends Scripts_Field {

	/**
	 * {@inheriitech_doc}
	 */
	protected $hook_name = 'wp_head';

	/**
	 * {@inheriitech_doc}
	 */
	protected function get_default_help_text() {
		return __( 'If you need to add scripts to your header, you should enter them here.', 'carbon-fields' );
	}
}
