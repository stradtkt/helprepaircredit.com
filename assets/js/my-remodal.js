$(document).on('ready', function() {
    setTimeout(function() {
        var inst = $('[data-remodal-id=modal]').remodal();
        inst.open();
    }, 5000);
});