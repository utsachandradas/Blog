(function() {
const toggle = document.querySelector( '.menu-toggle' );
const menu = document.querySelector( '#primary-menu' );

if ( ! toggle || ! menu ) {
return;
}

toggle.addEventListener( 'click', function() {
const isExpanded = toggle.getAttribute( 'aria-expanded' ) === 'true';
toggle.setAttribute( 'aria-expanded', ! isExpanded );
menu.classList.toggle( 'toggled' );
} );
})();
