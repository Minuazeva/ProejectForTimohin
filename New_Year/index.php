<!DOCTYPE html>
<html>
    <head>

        <title>
                AAAAAAAAAAAAAAAAAAAAAAAAa
        </title>

        <meta charset="utf-8" />  
        <meta http-equiv="Cache-Control" content="no-cache" />        
        <link rel="stylesheet" href="style.css?1239813100" />
                
        <script src = "jquery.js"></script>
        <script src = "script.js?<?=rand()?>"></script>
        <script src = "slider.js?497489863"></script>

    </head>
    
    <body>
    <?
        $arrayImg = array(
            array(
                "small" => "../img/111.jpg",
                "big" => "../img/111.jpg",
            ),
            
            array(
                "small" => "../img/222.jpg",
                "big" => "../img/222.jpg",
            ),

            array(
                "small" => "../img/333.jpg",
                "big" => "../img/333.jpg",
            ),

            array(
                "small" => "../img/444.jpg",
                "big" => "../img/444.jpg",
            ),

            array(
                "small" => "../img/555.jpg",
                "big" => "../img/555.jpg",
            ),

            array(
                "small" => "../img/666.jpg",
                "big" => "../img/666.jpg",
            ),

            array(
                "small" => "../img/777.jpg",
                "big" => "../img/777.jpg",
            ),

            array(
                "small" => "../img/888.jpg",
                "big" => "../img/888.jpg",
            ),

            array(
                "small" => "../img/999.jpg",
                "big" => "../img/999.jpg",
            ),
        );
    ?>

        <div class="newYear">
            <? foreach($arrayImg as $key => $value):?>
            <div>
                <div 
                    class="small_img" 
                    style = "background-image: url('<?= $value["small"]?>')"
                    data-src-big-img = "<?= $value["big"]?>"
                >
                </div>
            </div>
            <?endforeach;?>
        </div>

        <div class="modal_bg">
            
        </div>

        <div class="modal">
            <div class="close">
                 &#10006;
            </div>

            <div class="modal_body">
                <img src=""/>
            </div>

        </div>

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