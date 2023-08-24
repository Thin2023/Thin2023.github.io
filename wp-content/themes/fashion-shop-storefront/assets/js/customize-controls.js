( function( api ) {

	// Extends our custom "fashion-shop-storefront" section.
	api.sectionConstructor['fashion-shop-storefront'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );