

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
                "val-name": { required: true }, 
               
                "val-lname": { required: true }, 
                "val-bra": { required: true }, 
                "val-db": { required: true }, 
                "val-sex": { required: true }, 
                "val-regno": { required: true }, 
                "val-faname": { required: true }, 
                "val-faoccup": { required: true }, 
                "val-10thcgpa": { required: true }, 
                "val-10thcgpastate": { required: true }, 
                "val-10thcgpacountry": { required: true }, 
                "val-10thcgpaboard": { required: true }, 
                "val-10thcgpaschool": { required: true }, 
                "val-10thcgpapassing": { required: true }, 
                "val-diploma": { required: true }, 
                "val-diplomastate": { required: true }, 
                "val-diplomacountry": { required: true }, 
                "val-diplomaboard": { required: true }, 
                "val-diplomacollege": { required: true }, 
                "val-diplomapassing": { required: true }, 
                "val-btech": { required: true }, 
                "val-btechstate": { required: true }, 
                "val-btechcountry": { required: true }, 
                "val-btechboard": { required: true }, 
                "val-btechschool": { required: true }, 
                "val-btechpassing": { required: true }, 
                "val-country": { required: true }, 
                "val-state": { required: true }, 
                "val-city": { required: true }, 
                "val-adofcom": { required: true }, 
                "val-pnc": { required: true }, 
                "val-phoneus2": { required: true }, 
                "val-email2": { required: true }
               
            },
            messages: {
                "val-name": "Please select a value!", 
               
                "val-lname": "Please select a value!", 
                "val-bra": "Please select a value!", 
                "val-db": "Please select a value!", 
                "val-sex": "Please select a value!", 
                "val-regno": "Please select a value!", 
                "val-faname": "Please select a value!", 
                "val-faoccup": "Please select a value!", 
                "val-10thcgpa": "Please select a value!", 
                "val-10thcgpastate": "Please select a value!", 
                "val-10thcgpacountry": "Please select a value!", 
                "val-10thcgpaboard": "Please select a value!", 
                "val-10thcgpaschool": "Please select a value!", 
                "val-10thcgpapassing": "Please select a value!", 
                "val-diploma": "Please select a value!", 
                "val-diplomastate": "Please select a value!", 
                "val-diplomacountry": "Please select a value!", 
                "val-diplomaboard": "Please select a value!", 
                "val-diplomacollege": "Please select a value!", 
                "val-diplomapassing": "Please select a value!", 
                "val-btech": "Please select a value!", 
                "val-btechstate": "Please select a value!", 
                "val-btechcountry": "Please select a value!", 
                "val-btechboard": "Please select a value!", 
                "val-btechschool": "Please select a value!", 
                "val-btechpassing": "Please select a value!", 
                "val-country": "Please select a value!", 
                "val-state": "Please select a value!", 
                "val-city": "Please select a value!", 
                "val-adofcom": "Please select a value!", 
                "val-pnc": "Please select a value!", 
                "val-phoneus2": "Please select a value!", 
                "val-email2": "Please select a value!"
                
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
                "val-name": { required: true }, 
               
                "val-lname": { required: true }, 
                "val-bra": { required: true }, 
                "val-db": { required: true }, 
                "val-sex": { required: true }, 
                "val-regno": { required: true }, 
                "val-faname": { required: true }, 
                "val-faoccup": { required: true }, 
                "val-10thcgpa": { required: true }, 
                "val-10thcgpastate": { required: true }, 
                "val-10thcgpacountry": { required: true }, 
                "val-10thcgpaboard": { required: true }, 
                "val-10thcgpaschool": { required: true }, 
                "val-10thcgpapassing": { required: true }, 
                "val-diploma": { required: true }, 
                "val-diplomastate": { required: true }, 
                "val-diplomacountry": { required: true }, 
                "val-diplomaboard": { required: true }, 
                "val-diplomacollege": { required: true }, 
                "val-diplomapassing": { required: true }, 
                "val-btech": { required: true }, 
                "val-btechstate": { required: true }, 
                "val-btechcountry": { required: true }, 
                "val-btechboard": { required: true }, 
                "val-btechschool": { required: true }, 
                "val-btechpassing": { required: true }, 
                "val-country": { required: true }, 
                "val-state": { required: true }, 
                "val-city": { required: true }, 
                "val-adofcom": { required: true }, 
                "val-pnc": { required: true }, 
                "val-phoneus2": { required: true }, 
                "val-email2": { required: true }
               
            },
            messages: {
                "val-name": "Please select a value!", 
               
                "val-lname": "Please select a value!", 
                "val-bra": "Please select a value!", 
                "val-db": "Please select a value!", 
                "val-sex": "Please select a value!", 
                "val-regno": "Please select a value!", 
                "val-faname": "Please select a value!", 
                "val-faoccup": "Please select a value!", 
                "val-10thcgpa": "Please select a value!", 
                "val-10thcgpastate": "Please select a value!", 
                "val-10thcgpacountry": "Please select a value!", 
                "val-10thcgpaboard": "Please select a value!", 
                "val-10thcgpaschool": "Please select a value!", 
                "val-10thcgpapassing": "Please select a value!", 
                "val-diploma": "Please select a value!", 
                "val-diplomastate": "Please select a value!", 
                "val-diplomacountry": "Please select a value!", 
                "val-diplomaboard": "Please select a value!", 
                "val-diplomacollege": "Please select a value!", 
                "val-diplomapassing": "Please select a value!", 
                "val-btech": "Please select a value!", 
                "val-btechstate": "Please select a value!", 
                "val-btechcountry": "Please select a value!", 
                "val-btechboard": "Please select a value!", 
                "val-btechschool": "Please select a value!", 
                "val-btechpassing": "Please select a value!", 
                "val-country": "Please select a value!", 
                "val-state": "Please select a value!", 
                "val-city": "Please select a value!", 
                "val-adofcom": "Please select a value!", 
                "val-pnc": "Please select a value!", 
                "val-phoneus2": "Please select a value!", 
                "val-email2": "Please select a value!"
                
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
