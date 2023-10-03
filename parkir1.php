<?php
$arr_parkir = array("", "Mobil", "Motor", "Sepeda");
$no = $_POST['no'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];
$jenis = $_POST['jenis'];
$time1=new DateTime($masuk);
$time2=new DateTime($keluar);
$d =$time1->diff($time2);
$jam = $d->h;
$menit = $d->i;
$b = $jam*60 +$menit;
$pm = 7000; $pm1= ceil($b/60)*3000-3000;
$pmt = 5000; $pmt1 = ceil($b/60)*2000-2000;
$ps = 2000; $ps1 = ceil($b/60)*500-500;
?>
<h2>BIAYA PARKIR</h2>
<hr>
<pre> 
Nomor Polisi        : <?php echo $no ?><br ><br>
Jenis Kendaraan     : <?php echo $jenis?><br ><br>
Jam Masuk           : <?php echo $masuk ?><br><br>
Jam Keluar          : <?php echo $keluar ?><br><br>
Waktu Parkir        : <?php echo $jam." jam ".$menit." menit" ?><br><br>
<?php
if($jenis=="Mobil"){
    if($b<=60){
        echo "Biaya Parkir        : Rp".$pm;
    }else{
        echo "Biaya Parkir        : Rp".$pm + $pm1;
    }
}elseif ($jenis=="Motor") {
    if($b<=60){
        echo "Biaya Parkir        : Rp".$pmt;
    }else{
        echo "Biaya Parkir        : Rp".$pmt + $pmt1;
    }
} elseif($jenis=='Sepeda'){
    if($b<=60){
        echo "Biaya Parkir        : Rp".$ps;
    }else{
        echo "Biaya Parkir        : Rp".$ps + $ps1;
    }   
}else{
    echo "Biaya Parkir        : Rp0 <br><br>"; 
    echo "INPUT JENIS KENDARAAN DULUU !!!";
}

 /*   switch($jenis='mobil'){
        case ($b<=60):
            echo "Biaya Parkir        : Rp".$pm;
            break;
        case ($b>60) :
            echo "Biaya Parkir        : Rp".$pm + $pm1;
            break;
    }
    switch($jenis='motor'){
        case ($b<=60):
            echo "Biaya Parkir        : Rp".$pmt;
            break;
        case ($b>60) :
            echo "Biaya Parkir        : Rp".$pmt+ $pmt1;
            break;
    }
    switch($jenis='sepeda'){
        case ($b<=60):
            echo "Biaya Parkir        : Rp".$ps;
            break;
        case ($b>60) :
            echo "Biaya Parkir        : Rp".$ps + $ps1;
            break;
    }*/
?>

</pre>