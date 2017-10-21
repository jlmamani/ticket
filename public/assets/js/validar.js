/*!
 * remark (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
  'use strict';
  var Site = window.Site;
  $(document).ready(function($) {
    Site.run();
  });
  // Example Validataion Standard Mode
  // ---------------------------------
  (function() {
    $('#crear_evento').formValidation({
      framework: "bootstrap4",
      button: {
        selector: '#validar',
        disabled: 'disabled'
      },
      icon: null,
      err: {
        clazz: 'text-help'
      },
      row: {
        invalid: 'has-danger'
      },
      fields: {
        ev_desc: {
          validators: {
            notEmpty: {
              message: 'El nombre del evento no puede estar vacio'
            }
          }
        },
        ev_fec_ini: {
          validators: {
            notEmpty: {
              message: 'Debe introducir la fecha de inicio del evento'
            }
          }
        },
        ev_fec_fin: {
          validators: {
            notEmpty: {
              message: 'Debe introducir la fecha de fin del evento'
            }
          }
        },
        ev_banner: {
          validators: {
            notEmpty: {
              message: 'Debe introducir el banner del evento'
            }
          }
        },
        ev_video: {
          validators: {
            notEmpty: {
              message: 'Debe introducir la url para el video del evento'
            }
          }
        },
        ev_pdf: {
          validators: {
            notEmpty: {
              message: 'Debe introducir el brochure del evento'
            }
          }
        },
      }
    });
  })();

})(document, window, jQuery);
