
$(function () {
    $(".currency_validate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            currency: {
                required: true
            },
            currency_amount: {
                required: true
            },
            usd_amount: {
                required: true
            },
            method: {
                required: true
            }
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".currency2_validate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            currency: {
                required: true
            },
            currency_amount: {
                required: true
            },
            usd_amount: {
                required: true
            },
            method: {
                required: true
            }
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".contact_validate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            message: "required",
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".signin_validate").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".signup_validate").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 125,
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                minlength: 9,
                maxlength: 16,
            },
            password: {
                required: true,
                minlength: 8,
            },
            password_confirmation: {
                required: true,
                equalTo: '#password',
            },
        },
        messages: {
            name: {
                required: "Please enter your full name",
                minlength: "Your name must be at least 5 characters long",
                maxlength: "Your name length cannot be greater than 125 characters long",
            },
            phone: {
                required: "The phone number is required",
                minlength: "Your phone must be at least 9 characters long",
                maxlength: "Your phone length cannot be greater than 16 characters long",
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            password_confirmation: {
                required: "",
                equalTo: "The password confirmation do not match",
            },
            email: "Please enter a valid email address"
        },
    });
});



$(function () {
    $(".personal_validate").validate({
        rules: {
            fullname: "required",
            dob: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            presentaddress: "required",
            permanentaddress: "required",
            city: "required",
            postal: "required",
            country: {
                required: true
            }
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});
