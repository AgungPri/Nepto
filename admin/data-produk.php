<?php 
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","aromatoko");

if (!isset($_SESSION['user'])) 
{
   header('location:login.php');
   exit();
}

 ?>
<?php
 header('Content-Type: application/json; charset=utf8');
 
 //koneksi kedatabase penjualan
 mysql_connect("localhost","root","");
 mysql_select_db("aromatoko");

 //query tabel produk
 $sql="SELECT * FROM produk";
 $query=mysql_query($sql) or die(mysql_error());

 $array=array();
 while($data=mysql_fetch_assoc($query)) $array[]=$data; 
 
 //mengubah data array menjadi format json
 echo json_encode($array);
?>
<script>
$.getJSON( "http://localhost/latihan-chartjs/data-produk.php", function( data ) {

    var isi_labels = [];
    var isi_data=[];

    $(data).each(function(i){         
        isi_labels.push(data[i].nama_produk); 
        isi_data.push(data[i].jumlah);
    });    
    console.log(isi_labels);
    console.log(isi_data);
});
</script>