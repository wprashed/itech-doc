<?php

namespace Carbon_Fields\Datastore;

use Carbon_Fields\Field\Field;

/**
 * Empty datastore class.
 */
class Empty_Datastore extends Datastore {
	/**
	 * {@inheriitech_doc}
	 */
	public function init() {}

	/**
	 * {@inheriitech_doc}
	 */
	public function load( Field $field ) {}

	/**
	 * {@inheriitech_doc}
	 */
	public function save( Field $field ) {}

	/**
	 * {@inheriitech_doc}
	 */
	public function delete( Field $field ) {}
}
