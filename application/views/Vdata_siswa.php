<html>

<head>
    <title>Data Siswa</title>
</head>

<body>
    <center>
        <div class="header">
                <h1>Data Siswa</h1>
        </div>

        <div class="main">
            <table cellpadding="1" cellspacing="3"> 
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $nama; ?><td>
                </tr>
                <tr>
                    <td>
                        NIS
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $nis; ?><td>
                </tr>
                <tr>
                    <td>
                        Kelas
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $kelas; ?><td>
                </tr>
                <tr>
                    <td>
                        Tanggal Lahir
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $tanggallahir; ?><td>
                </tr>
                <tr>
                    <td>
                        Tempat Lahir
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $tempatlahir; ?><td>
                </tr>
                <tr>
                    <td>
                        Alamat
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $alamat; ?><td>
                </tr>
                <tr>
                    <td>
                        Jenis Kelamin
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $jeniskelamin; ?><td>
                </tr>
                <tr>
                    <td>
                        Agama
                    </td>
                    <td>
                        :
                    </td>
                    <td><?= $agama; ?><td>
                </tr>
            </table>            
            <div class="back"> 
                <a href="<?= base_url('Siswa'); ?>">Back</a>
            </div>
        </div>
    </center>      
    
</body>
</html>