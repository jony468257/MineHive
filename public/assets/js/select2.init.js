function formatState(e) {
    var t;
    return e.text
}

$(document).ready(function () {
    $(".js-example-basic-single").select2(), $(".js-example-basic-multiple").select2();
    $(".js-example-data-array").select2({
        data: [{id: 0, text: "enhancement"}, {id: 1, text: "bug"}, {
            id: 2,
            text: "duplicate"
        }, {id: 3, text: "invalid"}, {id: 4, text: "wontfix"}]
    })
}), $(".js-group-templating").select2(), $(".select-flag-templating").select2({templateSelection: formatState}), $(".js-example-disabled").select2(), $(".js-example-disabled-multi").select2(), $(".js-programmatic-enable").on("click", function () {
    $(".js-example-disabled").prop("disabled", !1), $(".js-example-disabled-multi").prop("disabled", !1)
}), $(".js-programmatic-disable").on("click", function () {
    $(".js-example-disabled").prop("disabled", !0), $(".js-example-disabled-multi").prop("disabled", !0)
});

