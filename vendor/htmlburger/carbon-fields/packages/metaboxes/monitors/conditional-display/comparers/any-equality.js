/**
 * External dependencies.
 */
import { includes } from 'lodash';

/**
 * Internal dependencies.
 */
import base from './base';

export default {
	...base,

	/**
	 * @inheriitech_doc
	 */
	operators: [ '=', '!=' ],

	/**
	 * @inheriitech_doc
	 */
	evaluate( a, operator, b ) {
		switch ( operator ) {
			case '=':
				return includes( a, b );
			case '!=':
				return ! includes( a, b );
			default:
				return false;
		}
	}
};

