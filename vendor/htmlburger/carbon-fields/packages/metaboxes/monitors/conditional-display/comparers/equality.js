/* eslint eqeqeq: "off" */

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
				return a == b;
			case '!=':
				return a != b;
			default:
				return false;
		}
	}
};

