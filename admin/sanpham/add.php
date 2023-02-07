<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" onsubmit="return validateForm();" enctype="multipart/form-data">
                    <div class="sp-all">
                        <div>
                            <div class="row mb10 sp-one">
                            <strong>Danh mục</strong> <br>
                                <select name="iddm" id="">
                                    <?php 
                                        foreach($listdanhmuc as $danhmuc){
                                            extract($danhmuc);
                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                        }
                                    ?>                               
                                </select>
                            </div>
                            <div class="row mb10 sp-one">
                            <strong>Tên sản phẩm</strong>   <br>
                                <input type="text" name="tensp" id="tensp">
                                <p style="color: red;" id="tensanpham"></p>
                            </div>
                            <div class="row mb10 sp-one">
                            <strong>Giá</strong> <br>
                                <input type="number" name="giasp" id="giasp">
                                <p style="color: red;" id="giasanpham"></p>
                            </div>
                        </div>
                        <div>
                            <div class="row mb10 sp-one1">
                            <strong>Hình ảnh</strong>  <br>
                                <input type="file" name="hinh" id="photo">
                                <p style="color: red;" id="photo-loi"></p>

                            </div>
                            <div class="row mb10 sp-one">
                            <strong>Mô tả</strong> <br>
                                <textarea name="mota" cols="30" rows="10" id="mota"></textarea>
                                <p style="color: red;" id="mota-loi"></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb10 mt10" >
                        <input type="submit" class="mr5" name="themmoi" onclick="validateForm()" value="THÊM MỚI">
                        <input type="reset" class="mr5" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>    
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