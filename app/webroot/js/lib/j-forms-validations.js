var jq=jQuery.noConflict();

jq(document).ready(function() {

    // Show password
    jq("#show-pass").on("change", function(){
        jq("#show-pass").is(":checked") ? jq("#password").attr("type", "text") : jq("#password").attr("type", "password");
    });
/////////////////////////////////////////////////////////////////

    // Show confirm password
    jq("#show-conf-pass").on("change", function(){
        jq("#show-conf-pass").is(":checked") ? jq("#confirm-password").attr("type", "text") : jq("#confirm-password").attr("type", "password");
    });
/////////////////////////////////////////////////////////////////

    // Enabled input
    jq('#check-enable-input').on('change', function() {
        if ( jq('#check-enable-input').is(':checked') ) {
            jq('#enable-input').attr('disabled', false).parent().removeClass('disabled-view error-view success-view');
        } else {
            jq('#enable-input').attr('disabled', true).parent().addClass('disabled-view').removeClass('success-view error-view');

            // ID for error message = field ID + "-error"
            // if error message for disable field exists
            // hide error message
            if ( jq('#enable-input-error').length ) {
                jq('#enable-input-error').css('display', 'none');
            }
        };
    });
/////////////////////////////////////////////////////////////////

    var form = jq( "#j-forms-validation" );

    form.validate({

        /* @validation states + elements
         ------------------------------------------- */

        errorClass: 'error-view',
        validClass: 'success-view',
        errorElement: 'span',

        /* @validation rules
         ------------------------------------------ */
        rules: {
            req_field: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            url: {
                required: true,
                url: true
            },
            file: {
                required: true,
                extension:'jpg|png'
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 50
            },
            confirm_password: {
                required: true,
                minlength: 6,
                maxlength: 50,
                equalTo: '#password'
            },
            first_name: {
                require_from_group: [1, '.required-group']
            },
            last_name: {
                require_from_group: [1, '.required-group']
            },
            checkbox: {
                required: true
            },
            radio: {
                required: true
            },
            checkbox_toggle: {
                required: true
            },
            min_val: {
                required: true,
                min: 10
            },
            range_val: {
                required: true,
                range: [10, 50]
            },
            max_val: {
                required: true,
                max: 50
            },
            min_len: {
                required: true,
                minlength: 3
            },
            range_len: {
                required: true,
                rangelength: [3, 8]
            },
            max_len: {
                required: true,
                maxlength: 8
            },
            decimals: {
                required: true,
                number: true
            },
            digits: {
                required: true,
                digits: true
            },
            enable_input: {
                required: '#check-enable-input:checked'
            }
        },
        messages: {
            req_field: {
                required: 'Please field is required'
            },
            email: {
                required: 'Please field is required',
                email: 'Incorrect email format'
            },
            url: {
                required: 'Please field is required',
                url: 'Incorrect url format'
            },
            file: {
                required: 'Please upload some file',
                extension:'Incorrect file format'
            },
            password: {
                required: 'Please password is required'
            },
            confirm_password: {
                required: 'Please confirm your password',
                equalTo: 'Mismatched passwords'
            },
            first_name: {
                require_from_group: 'Please fill at least one field'
            },
            last_name: {
                require_from_group: 'Please fill at least one field'
            },
            checkbox: {
                required: 'Please select an option'
            },
            radio: {
                required: 'Please select an option'
            },
            checkbox_toggle: {
                required: 'Please select an option'
            },
            min_val: {
                required:'Please field is required'
            },
            range_val: {
                required: 'Please field is required'
            },
            max_val: {
                required: 'Please field is required'
            },
            min_len: {
                required: 'Please field is required'
            },
            range_len: {
                required: 'Please field is required'
            },
            max_len: {
                required: 'Please field is required'
            },
            decimals: {
                required: 'Please field is required',
                number: 'Only decimal numbers allowed'
            },
            digits: {
                required: 'Please field is required',
                digits: 'Only digits allowed'
            },
            enable_input: {
                required: 'Please field is required'
            }
        },
        highlight: function(element, errorClass, validClass) {
            jq(element).closest('.input').removeClass(validClass).addClass(errorClass);
            if ( jq(element).is(':checkbox') || jq(element).is(':radio') ) {
                jq(element).closest('.check').removeClass(validClass).addClass(errorClass);
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            jq(element).closest('.input').removeClass(errorClass).addClass(validClass);
            if ( jq(element).is(':checkbox') || jq(element).is(':radio') ) {
                jq(element).closest('.check').removeClass(errorClass).addClass(validClass);
            }
        },
        errorPlacement: function(error, element) {
            if ( jq(element).is(':checkbox') || jq(element).is(':radio') ) {
                jq(element).closest('.check').append(error);
            } else {
                jq(element).closest('.unit').append(error);
            }
        }
    });

});