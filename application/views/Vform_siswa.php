<html>

<head>
    <title>Form Siswa</title>
</head>

<body>
    <center>
        <div class="header">
            <h1><span>Form Data Siswa</h1>
        </div>

        <div class="main">
            <?php echo validation_errors(); ?>
            <form action="<?= base_url('Siswa/simpan'); ?>" method="post">
                <table> 
                    <tr>
                        <th>Nama Siswa</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="nama" id="nama">
                        </td>
                    </tr> 
                    <tr>
                        <th>NIS</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="nis" id="nis">
                        </td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="kelas" id="kelas">
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="tanggallahir" id="tanggallahir">
                        </td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="tempatlahir" id="tempatlahir">
                        </td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="alamat" id="alamat">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <td>
                            <div class="radio">
                                <input type="radio" name="jeniskelamin" id="jeniskelamin" value="laki-laki"> <span>Laki-laki</span>
                                <input type="radio" name="jeniskelamin" id="jeniskelamin" value="perempuan"> <span>Perempuan</span>
                            </div>
                        </td>
                    </tr>
                    <tr>      
                        <th>Agama</th>
                        <th>:</th>
                        <td>
                            <select name="agama" id="agama">
                                <option value="---">---</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khonghucu">Khonghucu</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </td>
                    </tr>  
                    <div class="btn">
                        <td colspan="3" align="center">
                            <input type="submit" name="simpan" value="Submit">
                            <input type="reset" name="reset" value="Delete">
                        </td>
                    </div>
                </table>
            </form>
        </div>
    </center>
    
</body>
</html>