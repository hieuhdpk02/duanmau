<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>


<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1> 
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" onsubmit="return validateForm();" method="post">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai" value="<?php if(isset($id) && ($id != "")) echo $id;?>" disabled>
                    </div>
                    <div class="row mb10 adddm">
                        Tên loại   <br>
                        <input type="text" name="tenloai" id="tloai" value="<?php if(isset($name) && ($name != "")) echo $name;?>">
                        <p style="color: red;" id="tenloai"></p>
                    </div>
                    <div class="row mb10 mt10">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id; ?>">
                        <input type="submit" class="mr5" name="capnhat" onclick="validateForm()" value="CẬP NHẬT">
                        <input type="reset" class="mr5" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>    
                    </div>
                    <?php
                        if(isset($thongbao) &&($thongbao != "")){
                            echo $thongbao;
                        } 
                    ?>
                </form>
            </div>
    </div>
</div>
