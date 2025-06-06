"use strict";
const formAuthentication = document.querySelector("#formAuthentication");
document.addEventListener("DOMContentLoaded", function (e) {
    var t;
    formAuthentication && FormValidation.formValidation(formAuthentication, {
        fields: {
            login: {
                validators: {
                    notEmpty: {message: "Le login est obligatoire"},
                    // stringLength: {min: 6, message: "Username must be more than 6 characters"}
                }
            },
            password: {
                validators: {
                    notEmpty: {message: "Le mot de passe est obligatoire"},
                    // stringLength: {min: 6, message: "Password must be more than 6 characters"}
                }
            },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger,
            bootstrap5: new FormValidation.plugins.Bootstrap5({eleValidClass: "", rowSelector: ".mb-3"}),
            submitButton: new FormValidation.plugins.SubmitButton,
            defaultSubmit: new FormValidation.plugins.DefaultSubmit,
            autoFocus: new FormValidation.plugins.AutoFocus
        },
        init: e => {
            e.on("plugins.message.placed", function (e) {
                e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
            })
        }
    }), (t = document.querySelectorAll(".numeral-mask")).length && t.forEach(e => {
        new Cleave(e, {numeral: !0})
    })
});
