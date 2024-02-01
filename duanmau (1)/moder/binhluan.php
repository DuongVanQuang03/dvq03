<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
    $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) values('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan(){
    $sql = "SELECT * FROM binhluan order by id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql = "DELETE FROM binhluan WHERE idpro = '$id';";
    pdo_execute($sql);
}
?>