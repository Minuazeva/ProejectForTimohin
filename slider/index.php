<!DOCTYPE html>
<html>
    <head>

        <title>
                Слайдер
        </title>

        <meta charset="utf-8" />  
        <meta http-equiv="Cache-Control" content="no-cache" />        
        <link rel="stylesheet" href="style.css?1239813100" />
                
        <script src = "jquery.js"></script>
        <script src = "slider.js?497489863"></script>

    </head>
    <?
        $arrayImg = array(
            "1.jpg",
            "2.jpg",
            "3.jpg",
            "4.jpg",
            "5.jpg",
        );
    ?>
    
    <body>

        <div class="slider">
            <? foreach ( $arrayImg as $key => $img ) {?>
                <div class = "img <?= $key == 0 ? 'active' : '' ?>"
                    data-number = "<?= $key ?>"
                    style = "background-image: url('<?= $img?>');"
                >
                    &nbsp;
                </div>
            <?}?>
            <div class="next"> &#9658; </div>
            <div class="prew"> &#9668; </div>
        <div>
    </body>
</html>
