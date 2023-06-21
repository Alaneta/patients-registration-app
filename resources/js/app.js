import './bootstrap'

$(document).ready(function () {
    const loading = $('#loading')

    loading.hide();

    $("form").submit(function() {
        loading.show();
    });
})
