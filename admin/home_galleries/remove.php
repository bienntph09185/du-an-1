<?php
/**
 * Created by PhpStorm.
 * User: ginv2
 * Date: 2/17/20
 * Time: 18:41
 * 1. lấy id xuống
 * 2. kiểm tra xem có quyền để xóa tài khoản với id đc nhận hay không
 * 4. thực hiện câu lệnh xóa với csdl
 * 5. điều hướng về danh sách
 *
 */
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemovehome_galleriesQuery = "select * from home_galleries where id = $id";
$removehome_galleries = queryExecute($getRemovehome_galleriesQuery, false);
if(!$removehome_galleries){
    header("location: " . ADMIN_URL . "home_galleries?msg=Loại dịch vụ không tồn tại");
    die;
}
$removehome_galleriesQuery = "delete from home_galleries where id = $id";
queryExecute($removehome_galleriesQuery, false);
header("location: " . ADMIN_URL . "home_galleries?msg=Xóa thành công");
die;