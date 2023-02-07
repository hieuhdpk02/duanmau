<div class="row mb">
            <div class="boxtrai mr">

                <div class="row">
                <div class="boxsp1">
                    <?php 
                        foreach ($spnew as $sp){
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $hinh  = $img_path.$img;
                            echo '
                            
                            <div class="boxsp">
                                <div class="sp9">
                                <a href="'.$linksp.'"><img class="sp9-anh"  src="'.$hinh.'" alt=""></a>
                                </div>
                                <a href="'.$linksp.'"><span>'.$name.'</span></a>
                                <p><b>'.$price.'</b> <ins>đ</ins></p>
                                
                                <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                            </form>
                            </div>
                            
                            ';
                        }
                    
                    ?>
                    
                    </div>      
                </div>
            </div>

            <div class="boxphai">
                <?php include "boxright.php"?>;
            </div>
        </div>