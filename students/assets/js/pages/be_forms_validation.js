

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
                'val-username': {
                    required: true,
                    minlength: 3
                },
                'val-email': {
                    required: true,
                    email: true
                },
                'val-password': {
                    required: true,
                    minlength: 5
                },
                'val-confirm-password': {
                    required: true,
                    equalTo: '#val-password'
                },
                'val-select2': {
                    required: true
                },
                'val-select2-multiple': {
                    required: true,
                    minlength: 2
                },
                'val-suggestions': {
                    required: true,
                    minlength: 5
                },
                'val-skill': {
                    required: true
                },
                'val-currency': {
                    required: true,
                    currency: ['$', true]
                },
                'val-website': {
                    required: true,
                    url: true
                },
                'val-phoneus': {
                    required: true,
                    phoneUS: true
                },
                'val-digits': {
                    required: true,
                    digits: true
                },
                'val-number': {
                    required: true,
                    number: true
                },
                'val-range': {
                    required: true,
                    range: [1, 5]
                },
                'val-terms': {
                    required: true
                }
            },
            messages: {
                'val-username': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'val-email': 'Please enter a valid email address',
                'val-password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'val-confirm-password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                'val-select2': 'Please select a value!',
                'val-select2-multiple': 'Please select at least 2 values!',
                'val-suggestions': 'What can we do to become better?',
                'val-skill': 'Please select a skill!',
                'val-currency': 'Please enter a price!',
                'val-website': 'Please enter your website!',
                'val-phoneus': 'Please enter a US phone!',
                'val-digits': 'Please enter only digits!',
                'val-number': 'Please enter a number!',
                'val-range': 'Please enter a number between 1 and 5!',
                'val-terms': 'You must agree to the service terms!'
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
                'val-faoccup': {
                    required: true
                   
                },
                'val-faname': {
                    required: true,
                    minlength: 3
                },
                'val-sex': {
                    required: true
                   
                },
                'val-subcast': {
                    required: true
                   
                },
                'val-db': {
                    required: true
                   
                },
                'val-bdgrup': {
                    required: true
                   
                },
                'val-cate': {
                    required: true,
                    minlength: 1,
                    maxlength: 4
                },
                'val-nati': {
                    required: true,
                    minlength: 3
                },
                'val-adno': {
                    required: true,
                    minlength: 12,
                    maxlength: 12
                },
                'val-name': {
                    required: true,
                    minlength: 3
                    
                },
                'val-erank': {
                    required: true,
                    minlength: 3
                },
                'val-ehallno': {
                    required: true,
                    minlength: 3
                },
                'val-admissionno': {
                    required: true,
                    minlength: 3
                },
                'val-admncategory': {
                    required: true
                   
                },
				'val-faoccup': {
                    required: true
                   
                },
                'val-maname': {
                    required: true
                   
                },
                'val-maoccup': {
                    required: true
                   
                },
                'val-adofcom': {
                    required: true
                   
                },
                'val-pnc': {
                    required: true,
                    minlength: 3
                },
                'val-username2': {
                    required: true,
                    minlength: 3
                },
                'val-email2': {
                    required: true,
                    email: true
                },
                'val-password2': {
                    required: true,
                    minlength: 5
                },
                'val-confirm-password2': {
                    required: true,
                    equalTo: '#val-password2'
                },
                'val-select22': {
                    required: true
                },
                'val-select2-multiple2': {
                    required: true,
                    minlength: 2
                },
                'val-anninc': {
                    required: true,
                    minlength: 2
                },
                'val-suggestions2': {
                    required: true,
                    minlength: 5
                },
                'val-skill2': {
                    required: true
                },
                'val-skill2': {
                    required: true
                },
                'val-currency2': {
                    required: true,
                    currency: ['$', true]
                },
                'val-website2': {
                    required: true,
                    url: true
                },
                'val-phoneus2': {
                    required: true,
                    minlength:10,
                    maxlength:10
                    
                },
                'val-digits2': {
                    required: true,
                    digits: true
                },
                'val-number2': {
                    required: true,
                    number: true
                },
                'val-range2': {
                    required: true,
                    range: [1, 5]
                },
                'val-terms2': {
                    required: true
                }
            },
            messages: {
				
				'val-admissionno': {
                    required: 'Enter Admn Number',
                    minlength: ' Admn Number must consist of at least 3 characters'
                },
				'val-ehallno': {
                    required: 'Enter Hall Ticket Number',
                    minlength: 'Your Hall ticket must consist of at least 5 characters'
                },
				'val-erank': {
                    required: 'Enter Eamcet Rank',
                    minlength: 'Your Eamcet Rank must consist of at least 1 Digit'
                },
				'val-name': {
                    required: 'Enter Name',
                    minlength: 'Your Name must consist of at least 3 character'
                },
				'val-db': {
                    required: 'Enter Date Of Birth',
                    
                },
				'val-sex': {
                    required: 'Select sex',
                    
                },
				'val-faname': {
                    required: 'Enter Father Name',
                    minlength: ' Father name must consist of at least 3 character'
                },
				'val-faoccup': {
                    required: 'Enter Father Occupation'
                    
                },
                'val-username2': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'val-email2': 'Please enter a valid email address',
                'val-password2': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'val-confirm-password2': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                'val-select22': 'Please select a value!',
                'val-select2-multiple2': 'Please select at least 2 values!',
                'val-suggestions2': 'What can we do to become better?',
                'val-skill2': 'Please select a skill!',
                'val-cat': 'Please select a Category!',
                'val-currency2': 'Please enter a price!',
                'val-website2': 'Please enter your website!',
                'val-phoneus2': 'Please enter a India phone!',
                'val-digits2': 'Please enter only digits!',
                'val-number2': 'Please enter a number!',
                'val-range2': 'Please enter a number between 1 and 5!',
                'val-terms2': 'You must agree to the service terms!'
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
