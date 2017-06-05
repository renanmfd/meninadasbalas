(function ($, Drupal) {
  "use strict";
  /*global jQuery:false */
  /*global Drupal:false */
  /*global console:false */

  /**
   * Automatic submit views exposed form on /loja.
   */
  Drupal.behaviors.ajaxAutomaticSumit = {
    attach: function (context) {
      console.log('ajaxAutomaticSumit', $('.views-exposed-form input.form-checkbox'));
      $('.views-exposed-form input.form-checkbox').change( 
        function () {
          $(this).parents('form').submit();
        }
      );
    }
  };

}(jQuery, Drupal));
