function glPopUp() {
	if ( Cookies.get( 'gl-popup' ) !== 'closed' ) {
		document.getElementById( 'gl-popup' ).classList.add( 'gl-popup-open' );
	}
	document.getElementById( 'gl-popup-close' ).addEventListener( 'click', function ( event ) {
		event.preventDefault();
		event.stopPropagation();
		
		document.getElementById( 'gl-popup' ).classList.remove( 'gl-popup-open' );
		Cookies.set( 'gl-popup', 'closed', {expires: 30} );
	} );
}

document.body.onload = glPopUp;
