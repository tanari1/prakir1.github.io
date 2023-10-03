<?php
$arr_parkir = array("", "Mobil", "Motor", "Sepeda")
    ?>
<h2>PARKIR</h2>
<hr>
<pre>
<form action="parkir1.php" method="post">
Nomor Polisi     : <input type="text" name="no"><br><br />
Jenis Kendaraan  : <select name="jenis">
    <?php
    foreach ($arr_parkir as $jenis) {
        echo "<option >$jenis</option>";
    }
    ?>
</select><br><br>
Jam Masuk        : <input type="time" name="masuk"><br><br>
Jam Keluar       : <input type="time" name="keluar"><br><br>
<input type="submit" value="TAMPILKAN BIAYA PARKIR">
</form>
</pre>