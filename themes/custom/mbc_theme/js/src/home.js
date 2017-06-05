(function ($, Drupal) {
  "use strict";
  /*global jQuery:false */
  /*global Drupal:false */
  /*global console:false */

  /**
   * Equalize opinion teaser heights on homepage.
   */
  Drupal.behaviors.newsHeightEqualizer = {
    attach: function (context) {
      var equalize = function () {
          var maxHeight = 0;
          $('.view-homepage .views-row').each(function () {
            var height = $(this).children().first().height();
            if (height > maxHeight) {
              maxHeight = height;
            }
          });
          $('.view-homepage .views-row').each(function () {
            $(this).height(maxHeight);
          });
        };

      equalize();
    }
  };

}(jQuery, Drupal));
