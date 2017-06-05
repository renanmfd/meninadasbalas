(function ($, Drupal) {
  "use strict";
  /*global jQuery:false */
  /*global Drupal:false */
  /*global console:false */

  /**
   * Activate carousel homepage.
   */
  Drupal.behaviors.newsHeightEqualizer = {
    attach: function (context) {
      var equalize = function () {
          var maxHeight = 0;
          console.log('equalize');
          $('.view-homepage .views-row').each(function () {
            var height = $(this).children().first().height();
            console.log('height', height);
            if (height > maxHeight) {
              maxHeight = height;
            }
          });
          console.log('maxHeight', maxHeight);
          $('.view-homepage .views-row').each(function () {
            $(this).height(maxHeight);
          });
        };
      console.log('newsHeightEqualizer');
      equalize();
    }
  };

}(jQuery, Drupal));
