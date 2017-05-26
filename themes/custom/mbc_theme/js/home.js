(function ($, Drupal) {
  "use strict";
  /*global jQuery:false */
  /*global Drupal:false */
  /*global console:false */

  /**
   * Activate carousel homepage.
   */
  Drupal.behaviors.homepageCarousel = {
    attach: function (context) {
      console.log('homepageCarousel');
      //$('#banner .carousel').carousel();
    }
  };

}(jQuery, Drupal));
