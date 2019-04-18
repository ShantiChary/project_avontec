jQuery(document).ready(function($){
		var modal = document.querySelector(".modal");
		var trigger = document.querySelector(".trigger");
		var closeButton = document.querySelector(".close-button");

		function toggleModal() {
			modal.classList.toggle("show-modal");
		}

		function windowOnClick(event) {
			if (event.target === modal) {
				toggleModal();
			}
		}

		trigger.addEventListener("click", toggleModal);
		closeButton.addEventListener("click", toggleModal);
		window.addEventListener("click", windowOnClick);
});


var wpcf7Elm = document.querySelector( '.wpcf7' );
 
wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
    alert( "Fire!" );
}, false );

