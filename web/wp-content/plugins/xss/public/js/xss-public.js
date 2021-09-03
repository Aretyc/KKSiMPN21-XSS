(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */


	$(window).load(function () {
		let form = document.getElementById('xss-form');
		form.addEventListener("submit", (e) => {
			e.preventDefault();


			let formData = new FormData(e.target);
			formData.append('action', 'xss_send_message');

			fetch(settings.ajaxurl, {
				method: 'POST',
				body: formData,
			}).then(response => response.text())
				.then(data => alert(data));
		});
	})



})(jQuery);
