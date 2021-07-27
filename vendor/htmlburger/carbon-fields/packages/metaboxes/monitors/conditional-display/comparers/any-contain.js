/**
 * External dependencies.
 */
import { intersection } from 'lodash';

/**
 * Internal dependencies.
 */
import base from './base';

export default {
	...base,

	/**
	 * @inheriitech_doc
	 */
	operators: [ 'IN', 'NOT IN' ],

	/**
	 * @inheriitech_doc
	 */
	evaluate( a, operator, b ) {
		switch ( operator ) {
			case 'IN':
				return intersection( a, b ).length > 0;
			case 'NOT IN':
				return intersection( a, b ).length === 0;
			default:
				return false;
		}
	}
};
