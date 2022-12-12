<?php
    require('opencon.php');
    $strsql = "SELECT * FROM tbl_products";
    function viewRS($con, $strsql){
        $rs = [];
        $i = 0;
        if($stmt = mysqli_query($con, $strsql)){
            // specific
            if(mysqli_num_rows($stmt) == 1){
                $record = mysqli_fetch_array($stmt);
                foreach($record as $key => $value){
                    $rs[$key] = $value;
                }
            }
            elseif(mysqli_num_rows($stmt) > 1){
                while($record = mysqli_fetch_array($stmt)){
                    foreach($record as $key => $value){
                        $rs[$i][$key] = $value;
                    }
                    $i++;
                }
            }
            mysqli_free_result($stmt);
        }
        return $rs;
    }
    
    $arrProducts = viewRS($con,$strsql);


    

    require('closecon.php');

    $arrProducts = array(
        array(
            'name'          => "Air Jordan 3 Retro SE",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim vulputate tortor, sed ornare dui pharetra sed. Aliquam posuere eleifend eros nec aliquam. Aliquam ac risus a tellus mollis ultrices. Mauris tellus felis, luctus id metus nec, tristique molestie neque.",
            'price'         => "995",
            'photo1'        => "product1A.png",
            'photo2'        => "product1B.png"
        ),
        array(
            'name'          => "LeBron XX EP",
            'description'   => "Aenean tincidunt mattis eros, non venenatis felis suscipit eu. Fusce a tempus nulla. Cras pretium purus augue, ut semper arcu pulvinar sit amet. Nam et est consectetur, mollis mi nec, pharetra nibh. Sed malesuada pellentesque ipsum, vel congue purus. Mauris eget velit vel metus ullamcorper lacinia. Sed in vestibulum erat.",
            'price'         => "895",
            'photo1'        => "product2A.png",
            'photo2'        => "product2B.png",
        ),
        array(
            'name'          => "Nike Air Max Penny",
            'description'   => "Donec ac neque non turpis aliquet vehicula a in eros. Vestibulum ante mauris, condimentum nec ex eget, ultrices consequat felis. Curabitur nec consequat magna. Donec euismod magna tortor, eget ultrices mauris lobortis et. Etiam imperdiet aliquet porta. Maecenas magna felis, placerat et rhoncus quis, gravida in nunc.",
            'price'         => "895",
            'photo1'        => "product3A.png",
            'photo2'        => "product3B.png",
        ),
        array(
            'name'          => "Nike Air Max Plus SE",
            'description'   => "Proin rutrum volutpat ultricies. In vitae lorem vitae augue blandit lobortis. Aenean vel elit malesuada, semper diam et, tristique quam. Praesent scelerisque ipsum vitae vehicula aliquet. Morbi odio risus, consectetur in tristique eget, scelerisque nec erat. Nulla porttitor erat eget risus scelerisque, vitae gravida tortor interdum. Aliquam commodo lacinia ante sit amet commodo.",
            'price'         => "895",
            'photo1'        => "product4A.png",
            'photo2'        => "product4B.png",
        ),
        array(
            'name'          => "Nike LeBron 9 Low",
            'description'   => "Nullam pharetra sit amet lectus eu mattis. Cras nec blandit massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur volutpat, velit eu bibendum aliquet, justo justo sodales ligula, sit amet fermentum velit est id sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras eget scelerisque dui.",
            'price'         => "895",
            'photo1'        => "product5A.png",
            'photo2'        => "product5B.png",
        ),
        array(
            'name'          => "Nike x Ambush Air Adjust Force",
            'description'   => "Maecenas gravida viverra felis, in rutrum dolor. Nam pharetra mollis urna, eu sagittis odio luctus quis. Pellentesque vulputate arcu purus, non tincidunt ligula rutrum ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et nibh sed massa vulputate sagittis. Fusce sit amet odio ut dui auctor venenatis eu non leo. ",
            'price'         => "975",
            'photo1'        => "product6A.png",
            'photo2'        => "product6B.png",
        ),
        array(
            'name'          => "Nike Zoom LeBron 2",
            'description'   => "Morbi pharetra nisi felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse pretium sem ut orci semper fermentum. Curabitur quis dui quis quam laoreet sollicitudin. Quisque sit amet faucibus ligula, quis pharetra lacus. Proin ut imperdiet lectus, sit amet placerat risus.",
            'price'         => "975",
            'photo1'        => "product7A.png",
            'photo2'        => "product7B.png",
        ), 
        array(
            'name'          => "NikeCourt React Vapor NXT",
            'description'   => "Donec rutrum, ipsum ac molestie tristique, nisi leo hendrerit nibh, eu volutpat augue nibh in massa. Nulla molestie elit sit amet urna mattis, molestie pharetra tortor venenatis. In quis dolor sed urna maximus dignissim. Morbi aliquet nulla eget erat accumsan, id pretium ex varius.",
            'price'         => "975",
            'photo1'        => "product8A.png",
            'photo2'        => "product8B.png",
        )
    );
 ?>

