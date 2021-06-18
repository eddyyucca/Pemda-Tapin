<?php
header("Content-type: application/vnd-ms-excel");
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=Data Barang $date.xls");
?>
<table border="1">

    <tr align="center" width="400">
        <td colspan="4">PEMDA TAPIN</td>
    </tr>

    <tr align="center">
        <td colspan="4">
            <h2>DATA ATK</h2>
        </td>
    </tr>

    <tr>
        <td>No.</td>
        <td>Item</td>
        <td>Jumlah</td>
        <td>Satuan</td>
    </tr>

    <?php $no = 1; ?>
    <tr>
        <?php foreach ($data as $x) { ?>


            <td align="center"><?= $no++; ?></td>
            <td><?= $x->item; ?></td>
            <td align="center"><?= $x->qty; ?></td>
            <td><?= $x->satuan; ?></td>
    </tr>
<?php } ?>
</table>