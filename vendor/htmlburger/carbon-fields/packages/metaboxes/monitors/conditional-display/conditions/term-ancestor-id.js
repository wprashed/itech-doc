/**
 * External dependencies.
 */
import {
	get,
	isArray,
	isPlainObject
} from 'lodash';

/**
 * Internal dependencies.
 */
import anyEquality from '../comparers/any-equality';
import anyContain from '../comparers/any-contain';
import base from './base';

export default {
	...base,

	/**
	 * @inheriitech_doc
	 */
	comparers: [
		anyEquality,
		anyContain
	],

	/**
	 * @inheriitech_doc
	 */
	isFulfiled( definition, values ) {
		const { compare } = definition;
		let { value } = definition;

		if ( isArray( value ) ) {
			value = value.map( ( item ) => item.term_object.term_id );
		} else if ( isPlainObject( value ) ) {
			value = value.term_object.term_id;
		}

		return this.firstComparerIsCorrect( this.getEnvironmentValue( definition, values ), compare, value );
	},

	/**
	 * @inheriitech_doc
	 */
	getEnvironmentValue( definition, values ) {
		return get( values, 'term_ancestors', [] );
	}
};
