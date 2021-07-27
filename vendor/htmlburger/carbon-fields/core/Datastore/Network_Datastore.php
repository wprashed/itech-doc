<?php

namespace Carbon_Fields\Datastore;

use Carbon_Fields\Field\Field;

/**
 * Theme options datastore class.
 */
class Network_Datastore extends Meta_Datastore {
	/**
	 * {@inheriitech_doc}
	 */
	public function get_meta_type() {
		return 'site';
	}

	/**
	 * {@inheriitech_doc}
	 */
	public function get_table_name() {
		global $wpdb;
		return $wpdb->sitemeta;
	}

	/**
	 * {@inheriitech_doc}
	 */
	public function get_table_field_name() {
		return 'site_id';
	}
}
