<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>TUGAS PHP</title>
</head>
<body>
    <form method="POST" name="frmpost" action="">
    <table align="center" border="1" cellpadding="0" cellspacing="0">
    <tr align="center"><td><h2><b>INPUT DATA</b></h2></td>
    <tr>
        <td>
        <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
    <tr>
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nama[]" size="40" /></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td> : </td>
        <td><input type="text" name="tgl[]" size="40" /></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td> : </td>
        <td><select name="jabat">
            <option value="jurnalis">jurnalis</option>
            <option value="marketing communications">marketing communications</option>
            <option value="public relation">public relation</option>
            <option value="advertising">advertesing</option>
            <option value="penyiar">penyiar</option>
        </select></td>
    </tr>
    <tr>
        <td colspan="4" align="center"><input type="submit" name="btnOk" value="Kirim"></td>
    </tr>
        </table>
    </td>
    </tr>
    </tr>
    </table>
</form>
    <center>
    <table width="450" border="1" cellpadding="2" cellspacing="4">
        <?php
        $nama = $_POST['nama'];
        $tgl = $_POST['tgl'];

        foreach ($nama as $key => $value) {
        ?>
        <tr>
            <td align="center" colspan="2">
                <?php
                echo '<b>Hasil Data</b><br>';?>
            </td>
        </tr>
            <tr>
            <td><?php echo 'Nama'?></td>
            <td><?php echo $nama[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'Umur';?></td>
            <td>
                <?php
                $tanggal = new DateTime('2001-07-13');
                $today = new DateTime('2021-5-5');
                $y = $today->diff($tanggal)->y;
                $m = $today->diff($tanggal)->m;
                $d = $today->diff($tanggal)->d;
                echo "". $y . " tahun " . $m . " bulan " . $d . " hari ";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo 'Gaji';?></td>
            <td>
                <?php
                $posisi = $_POST["jabat"];

                if ($posisi=="jurnalis"){
                $posisiku="jurnalis";}
                else if($posisi=="marketing communications"){
                $posisiku="marketing communications";}
                else if($posisi=="public relation"){
                $posisiku="public relation";}
                else if($posisi=="advertising"){
                $posisiku="advertising";}
                else
                {$posisiku="penyiar";}
                echo "";
                if ($posisiku=="jurnalis"){
                $gajifinal="8.900.000";}
                else if($posisiku=="marketing communications"){
                $gajifinal="7.000.000";}
                else if($posisiku=="public relation"){
                $gajifinal="14.000.000";}
                else if($posisiku=="advertising"){
                $gajifinal="19.500.000";}
                else
                {$gajifinal="7.000.000";}
                echo " Rp. $gajifinal  ";
                ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
</html>