$('document').ready(function() {

    $('.newYear .small_img').click(function(event){
        el = $(event.target);

        bsi = el.attr('data-src-big-img');

        set_img_in_modal(bsi);
        show_modal();

    })
});

function show_modal() {
    $('.modal_bg, .modal').show();

    $('.modal_bg, .modal .close').click(function(){
        $('.modal_bg, .modal').hide();
    })
}

function set_img_in_modal( src ){
    $('.modal .modal_body img').attr('src', src);
}