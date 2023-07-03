<?php 
session_start();


$conn = mysqli_connect("localhost", "root", "", "karangan");
// tabel guru
if(isset($_POST['tambahguru'])){
    $idguru = $_POST['idguru'];
    $namaguru = $_POST['namaguru'];
    $idmapel = $_POST['mapel'];
    $alamatguru = $_POST['alamatguru'];

    $addtotable = mysqli_query($conn, "INSERT INTO guru values('$idguru', '$idmapel', '$namaguru', '$alamatguru')");
    if($addtotable){
        header('location:tbguru.php');
    }else{
        header('location:index.php');
    }
}

if(isset($post['edit']))
// tabel mapel
if(isset($_POST['tambahmapel'])){
    $mapel = $_POST['mapel'];
    $nilai = $_POST['nilai'];
    $idguru = $_POST['idguru'];
    $tahun = $_POST['tahun'];

    $addtotable = mysqli_query($conn, "INSERT INTO mapel values('$mapel', '$nilai', '$idguru', '$tahun')");
    if($addtotable){
        header('location:tbmapel.php');
    }else{
        header('location:index.php');
    }
}
// tabel nilai 
if(isset($_POST['tambahnilai'])){
    $nilai = $_POST['nilai'];
    $mapel = $_POST['idmapel'];
    $tahun = $_POST['tahun'];
    $semester = $_POST['semester'];

    $addtotable = mysqli_query($conn, "INSERT INTO nilai values('$nilai', '$mapel', '$tahun', '$semester')");
    if($addtotable){
        header('location:tbnilai.php');
    }else{
        header('location:index.php');
    }
}
// tabel siswa
if(isset($_POST['+siswa'])){
    $nilai = $_POST['idsiswa'];
    $mapel = $_POST['nama'];
    $tahunakademik = $_POST['alamat'];


    $addtotable = mysqli_query($conn, "INSERT INTO tb_siswa values('$nilai', '$mapel', '$tahunakademik')");
    if($addtotable){
        header('location:tbsiswa.php');
    }else{
        header('location:index.php');
    }
}
?>