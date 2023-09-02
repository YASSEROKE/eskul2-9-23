<?php
function conn(){
    $conn = mysqli_connect('localhost','root','','portofolio');
    return $conn;
    if(!$conn){
       echo "Koneksi Gagal";die;
    }
}
function tampilDataArtikel(){
    $sql = "SELECT * FROM artikel";
    $result = mysqli_query(conn(), $sql);
    $data = [];
    while($row = mysqli_fetch_array($result)){
        $data[] = $row;
    }
    return $data;

}
?>