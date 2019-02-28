

var BeFormValidation = function() {
    // Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationBootstrap = function(){
        jQuery('.js-validation-bootstrap').validate({
            ignore: [],
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            rules: {
                'val-name': { required: true }, 
                
                'val-lname': { required: true }, 
                'val-bra': { required: true }, 
                'val-db': { required: true }, 
                'val-sex': { required: true }, 
                'val-regno': { required: true }, 
                'val-faname': { required: true }, 
                'val-faoccup': { required: true }, 
                'val-10thcgpa': { required: true }, 
                'val-10thcgpastate': { required: true }, 
                'val-10thcgpacountry': { required: true }, 
                'val-10thcgpaboard': { required: true }, 
                'val-10thcgpaschool': { required: true }, 
                'val-10thcgpapassing': { required: true }, 
                'val-12th': { required: true }, 
                'val-12thstate': { required: true }, 
                'val-12thcountry': { required: true }, 
                'val-12thboard': { required: true }, 
                'val-12thcollege': { required: true }, 
                'val-12thpassing': { required: true }, 
                'val-btech': { required: true }, 
                'val-btechstate': { required: true }, 
                'val-btechcountry': { required: true }, 
                'val-btechboard': { required: true }, 
                'val-btechschool': { required: true }, 
                'val-btechpassing': { required: true }, 
                'val-country': { required: true }, 
                'val-state': { required: true }, 
                'val-city': { required: true }, 
                'val-adofcom': { required: true }, 
                'val-pnc': { required: true }, 
                'val-phoneus2': { required: true }, 
                'val-email2': { required: true }
               
            },
            messages: {
                'val-name': 'Please enter!', 
                
                'val-lname': 'Please enter!', 
                'val-bra': 'Please enter!', 
                'val-db': 'Please enter!', 
                'val-sex': 'Please enter!', 
                'val-regno': 'Please enter!', 
                'val-faname': 'Please enter!', 
                'val-faoccup': 'Please enter!', 
                'val-10thcgpa': 'Please enter!', 
                'val-10thcgpastate': 'Please enter!', 
                'val-10thcgpacountry': 'Please enter!', 
                'val-10thcgpaboard': 'Please enter!', 
                'val-10thcgpaschool': 'Please enter!', 
                'val-10thcgpapassing': 'Please enter!', 
                'val-12th': 'Please enter!', 
                'val-12thstate': 'Please enter!', 
                'val-12thcountry': 'Please enter!', 
                'val-12thboard': 'Please enter!', 
                'val-12thcollege': 'Please enter!', 
                'val-12thpassing': 'Please enter!', 
                'val-btech': 'Please enter!', 
                'val-btechstate': 'Please enter!', 
                'val-btechcountry': 'Please enter!', 
                'val-btechboard': 'Please enter!', 
                'val-btechschool': 'Please enter!', 
                'val-btechpassing': 'Please enter!', 
                'val-country': 'Please enter!', 
                'val-state': 'Please enter!', 
                'val-city': 'Please enter!', 
                'val-adofcom': 'Please enter!', 
                'val-pnc': 'Please enter!', 
                'val-phoneus2': 'Please enter!', 
                'val-email2': 'Please enter!'
                 
            }
        });
    };

    // Init Material Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationMaterial = function(){
        jQuery('.js-validation-material').validate({
            ignore: [],
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            rules: {
                'val-name': { required: true }, 
                
                'val-lname': { required: true }, 
                'val-bra': { required: true }, 
                'val-db': { required: true }, 
                'val-sex': { required: true }, 
                'val-regno': { required: true }, 
                'val-faname': { required: true }, 
                'val-faoccup': { required: true }, 
                'val-10thcgpa': { required: true }, 
                'val-10thcgpastate': { required: true }, 
                'val-10thcgpacountry': { required: true }, 
                'val-10thcgpaboard': { required: true }, 
                'val-10thcgpaschool': { required: true }, 
                'val-10thcgpapassing': { required: true }, 
                'val-12th': { required: true }, 
                'val-12thstate': { required: true }, 
                'val-12thcountry': { required: true }, 
                'val-12thboard': { required: true }, 
                'val-12thcollege': { required: true }, 
                'val-12thpassing': { required: true }, 
                'val-btech': { required: true }, 
                'val-btechstate': { required: true }, 
                'val-btechcountry': { required: true }, 
                'val-btechboard': { required: true }, 
                'val-btechschool': { required: true }, 
                'val-btechpassing': { required: true }, 
                'val-country': { required: true }, 
                'val-state': { required: true }, 
                'val-city': { required: true }, 
                'val-adofcom': { required: true }, 
                'val-pnc': { required: true }, 
                'val-phoneus2': { required: true }, 
                'val-email2': { required: true }
               
            },
            messages: {
                'val-name': 'Please enter!', 
                
                'val-lname': 'Please enter!', 
                'val-bra': 'Please enter!', 
                'val-db': 'Please enter!', 
                'val-sex': 'Please enter!', 
                'val-regno': 'Please enter!', 
                'val-faname': 'Please enter!', 
                'val-faoccup': 'Please enter!', 
                'val-10thcgpa': 'Please enter!', 
                'val-10thcgpastate': 'Please enter!', 
                'val-10thcgpacountry': 'Please enter!', 
                'val-10thcgpaboard': 'Please enter!', 
                'val-10thcgpaschool': 'Please enter!', 
                'val-10thcgpapassing': 'Please enter!', 
                'val-12th': 'Please enter!', 
                'val-12thstate': 'Please enter!', 
                'val-12thcountry': 'Please enter!', 
                'val-12thboard': 'Please enter!', 
                'val-12thcollege': 'Please enter!', 
                'val-12thpassing': 'Please enter!', 
                'val-btech': 'Please enter!', 
                'val-btechstate': 'Please enter!', 
                'val-btechcountry': 'Please enter!', 
                'val-btechboard': 'Please enter!', 
                'val-btechschool': 'Please enter!', 
                'val-btechpassing': 'Please enter!', 
                'val-country': 'Please enter!', 
                'val-state': 'Please enter!', 
                'val-city': 'Please enter!', 
                'val-adofcom': 'Please enter!', 
                'val-pnc': 'Please enter!', 
                'val-phoneus2': 'Please enter!', 
                'val-email2': 'Please enter!'
                 
            }
        });
    };

    return {
        init: function () {
            // Init Bootstrap Forms Validation
            initValidationBootstrap();

            // Init Material Forms Validation
            initValidationMaterial();

            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BeFormValidation.init(); });
