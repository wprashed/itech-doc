/**
 * External dependencies.
 */
import { get } from 'lodash';

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
	getEnvironmentValue( definition, values ) {
		return get( values, 'post_ancestors', [] );
	}
};
