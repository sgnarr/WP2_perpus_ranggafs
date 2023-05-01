<html>

<head>
    <title>Tampil Data Siswa</title>
</head>

<style>
    fieldset{
        width: 30%;
        margin: 40px auto;
        border-radius: 10px;
    }
    select{
        width: 100%;
    }
</style>

<body>
    <center>
        <fieldset>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Siswa
                </th>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            
            <tr>
                <th>Nomor Induk Siswa</th>
                <th>:</th>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <?= $tempat; ?>
                </td>
            </tr>
            
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <?= $tanggal; ?>
                </td>
            </tr>
            
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <?= $jekel; ?>
                </td>
            </tr>
            
            <tr>
                <th>Agama</th>
                <th>:</th>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('siswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
        </fieldset>
    </center>
</body>

</html>               