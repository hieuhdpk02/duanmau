<div class="row">
                <div class="row frmtitle">
                    <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
                </div>
                <div class="row frmcontent">
                    <form action="#" method="post">
                        <div class="row mb10 frmdsloai">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>MÃ LOẠI</th>
                                        <th>TÊN LOẠI<th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($listdanhmuc as $danhmuc){
                                            extract($danhmuc);
                                            $suadm = "index.php?act=suadm&id=".$id;
                                            $xoadm = "index.php?act=xoadm&id=".$id;
                                            echo  '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>
                                                <a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                                <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                                            </td>
                                        </tr>';
                                        } ?>                              
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb10 mt10">
                            <input type="button" class="mr5" value="Chọn tất cả">
                            <input type="button" class="mr5" value="Bỏ chọn tất cả">
                            <input type="button" value="Xóa các mục tất tả">
                            <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a>    
                        </div>
                    </form> 
                </div>
        </div>