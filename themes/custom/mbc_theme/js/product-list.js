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
      $('.views-exposed-form')
        .find('input.form-checkbox, select.form-select')
        .change( 
          function () {
            $(this)
              .parents('form')
              .submit();
              //.find('#edit-submit-list-products')
              //.click();
          }
        );
    }
  };

}(jQuery, Drupal));
