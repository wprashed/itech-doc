/**
 * Internal dependencies.
 */
import base from './base';

export default {
	...base,

	/**
	 * @inheriitech_doc
	 */
	isFulfiled( definition, values ) {
		definition = { ...definition };

		// In Gutenberg for the "Default" template is used an empty string.
		if ( definition.value === 'default' ) {
			definition.value = '';
		}

		return base.isFulfiled( definition, values );
	}
};
