$('document').ready(function() {

    $(" .slider .next ").click(function() {

        img=$(".slider .img.active");
        number_img = Number(img.attr("data-number"));

        count_img = $(".slider .img").length;

        if((number_img +1) < count_img){
            img.removeClass("active");
            $(".slider div.img[data-number=" + ( ++number_img ) + "]").addClass('active');
            
        } else{
            number_img=0;
            img.removeClass("active");
            $(".slider div.img[data-number=" + (number_img) + "]").addClass('active');
        }

        console.log(img);
    });

    $(" .slider .prew ").click(function() {

        img=$(".slider .img.active");
        number_img = Number(img.attr("data-number"));

        count_img = $(".slider .img").length;

        if((number_img - 1) < 0){
            number_img = count_img - 1;
            img.removeClass("active");
            $(".slider div.img[data-number=" + ( number_img ) + "]").addClass('active');
            
        } else{
            number_img=0;
            img.removeClass("active");
            $(".slider div.img[data-number=" + ( --number_img ) + "]").addClass('active');
        }

        console.log(img);
    });

    

});
