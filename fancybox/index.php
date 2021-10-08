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

    </head>
    
    <body>
    <?
        $arrayImg = array(
            array(
                "small" => "../img/1.jpg",
                "big" => "../img/1.jpg",
            ),
            
            array(
                "small" => "../img/2.jpg",
                "big" => "../img/2.jpg",
            ),

            array(
                "small" => "../img/3.jpg",
                "big" => "../img/3.jpg",
            ),

            array(
                "small" => "../img/4.jpg",
                "big" => "../img/4.jpg",
            ),

            array(
                "small" => "../img/5.jpg",
                "big" => "../img/5.jpg",
            ),
        );
    ?>

        <div class="fancybox">
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
    </body>

    
    

</html>