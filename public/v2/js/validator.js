"use strict";

const validateFields = ({formId, inputSelector = ".form-group", validationRules = {}}) => {
    !function () {
        window.Helpers.initCustomOptionCheck();
        var e = [].slice.call(document.querySelectorAll(".flatpickr-validation")), e = (e && e.forEach(e => {
            e.flatpickr({monthSelectorType: "static"})
        }), document.querySelectorAll(".needs-validation"));
        Array.prototype.slice.call(e).forEach(function (a) {
            a.addEventListener("submit", function (e) {
                a.checkValidity() ? alert("Submitted!!!") : (e.preventDefault(), e.stopPropagation()), a.classList.add("was-validated")
            }, !1)
        })
    }(),

        document.addEventListener("DOMContentLoaded", function (e) {
            var t;
            var formObject = document.querySelector(formId);
            formObject && FormValidation.formValidation(formObject, {
                fields: validationRules,
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({eleValidClass: "", rowSelector: inputSelector}),
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
            }), (t = document.querySelectorAll(".phone-mask")).length && t.forEach(e => {
                new Cleave(e, {phone: !0, phoneRegionCode: e.getAttribute('data-country')})
            })
        });
}
