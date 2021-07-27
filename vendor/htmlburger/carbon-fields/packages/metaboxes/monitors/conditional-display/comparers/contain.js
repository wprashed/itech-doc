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
				return b.indexOf( a ) > -1;
			case 'NOT IN':
				return b.indexOf( a ) === -1;
			default:
				return false;
		}
	}
};
