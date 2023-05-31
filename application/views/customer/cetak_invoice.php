<table style="width: 40%;">
    <h1>
        Invoice Pembayaran
    </h1>

    <?php foreach ($transaksi as $tr) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>

        <tr>
            <td>Merk Mobil</td>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
        </tr>

        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_rental ?></td>
        </tr>

        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
        </tr>

        <tr>
            <td>Biaya Sewa/Hari</td>
            <td>:</td>
            <td><?php echo number_format($tr->harga, 0, ',', '.') ?></td>
        </tr>

        <tr>
            <?php
            $x = strtotime($tr->tanggal_kembali);
            $y = strtotime($tr->tanggal_rental);
            $jml_hari = abs(($x - $y) / (60 * 60 * 24));
            ?>
            <td>Lama Hari Penyewaan</td>
            <td>:</td>
            <td><?php echo $jml_hari ?> Hari</td>
        </tr>

        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td><?php if ($tr->status_pembayaran == "0") {
                    echo "Belum Dibayar";
                } else {
                    echo "Sudah Dibayar";
                } ?></td>
        </tr>


        <tr style="font-weight: bolder; color:red;">
            <td>Total Pembayaran</td>
            <td>:</td>
            <td> Rp.
                <?php echo number_format($tr->harga * $jml_hari, 0, ',', '.') ?>

            </td>
        </tr>

        <!-- <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <li class="list-group-item">Bank Mandiri 111xxxxxxxxx</li>
                    <li class="list-group-item">Bank BCA 111xxxxxxxxx</li>
                    <li class="list-group-item">Bank BNI 111xxxxxxxxx</li>
                    <li class="list-group-item">Bank BTN 111xxxxxxxxx</li>
                    <li class="list-group-item">Bank BRI 111xxxxxxxxx</li>
                </ul>
            </td>
        </tr> -->
    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>