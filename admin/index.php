<?php 
    include "../model/pdo.php";

    include "../model/danhmuc.php";
    include "../model/sanpham.php";

    include "./header.php";

    // Controller

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){

            // Danh mục
            case 'adddm':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                   $sql=" insert into danhmuc(name) values('$tenloai')";
                   pdo_execute($sql);
                    $thongbao="Thêm thành công";
                    
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql); 
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                       $sql="delete from danhmuc where id=".$_GET['id'];
                       pdo_execute($sql); 
                    }
                $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql); 
                include "danhmuc/list.php";
                break;
            case 'suadm':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $sql= "delete * from danhmuc where id=".$_GET['id'];
                        $dm=pdo_query_one($sql);
                    }
                    include "danhmuc/update.php";
                    break;
            case 'updatedm':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    $sql="update danhmuc set name='".$tenloai."'where id='".$id;
                    pdo_execute($sql);
                    $thongbao="Cập nhật thành công thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            default:
                include "home.php";
                break;
                // Sản phẩm


            case 'addsp':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                         //quá là ok
                    }else{
                        // lỗi r
                    }

                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Thêm thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                include "./sanpham/add.php";
                break;
            
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;

            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            
            case 'suasp':
                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
            case 'updatesp':
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                         //quá là ok
                    }else{
                        // lỗi r
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao="Cập nhật thành công thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            
        }
    }
    else{
        include "home.php";
    }

    include "footer.php"
?>