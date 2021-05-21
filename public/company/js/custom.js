$('input[data-bootstrap-switch]').each(function(){
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
})

$('.survey-colorpicker').colorpicker();

new ClipboardJS('.btn-clipboard');