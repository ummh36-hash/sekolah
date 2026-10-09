<?php                                                                                                              
                                                                                                                                                                                                                                 
include_once ('koneksi.php');                                                                                      
                                                                                                                   
                                                                                                                   
// ini buat ambil id buku yg mau diubah                                                                            
// jadi isi $id nya tergantung sm buku apa yg user klik mau diedit                                                 
$id = $_GET ['id'];                                                                                                
                                                                                                                   
                                                                                                                   
$query = mysqli_query($db, "SELECT * FROM siswa WHERE id = $id");                                                
$siswa = mysqli_fetch_assoc($query);                                                                             
// hasil bentukan dr mysqli_query itu sifatnya masi berupa objek dr database                                       
// php gabisa baca tulisan mya / gabisa baca datanya kalau masih objek                                             
// akhirnya kita pakai mysqli_fetch_assoc yg tugasnya buat ubah dr bentuk object jadi bentuk array                                                                                                                                                                            
                                                                                                             
                                                                                                                
if (isset($_POST ['submit'])){                                                                                  
    $nis = $_POST ['nis'];                                                                                    
    $nama = $_POST ['nama'];                                                                                      
    $kelas = $_POST ['kelas'];                                                                                      
    $jurusan = $_POST  ['jurusan'];                                                                             
                                                                                                                
                                                                                                                
    $query = mysqli_query($db, "UPDATE siswa SET  nis ='$nis',nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE id = $id");
                                                                                                                
                                                                                                                
    if ($query){                                                                                                
        header('location: index.php');                                                                        
    } else {                                                                                                    
        echo 'gagal menyimpan perubahan';                                                                            
    }                                                                                                           
}                                                                                                               
?> 
                                                                                                             
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tambahSiswa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
<div class="container" style="position:relative;z-index:1;">                                          
	<h2>Edit Siswa</h2>                                                                              
	<form action="" method="POST" id="formEditSiswa" autocomplete="off"> 

		<label for="nis">Nis</label>                                                         
		<input type="text" id="nis" name="nis" value="<?php echo $siswa ['nis'] ?>"required> 
                                                 
		<label for="nama">Nama</label>                                                          
		<input type="text" id="nama" name="nama"value="<?php echo $siswa ['nama'] ?>" required>                                      
		
        <label for="kelas">Kelas</label>                                                        
		<input type="text" id="kelas" name="kelas" value="<?php echo $siswa ['kelas'] ?>" required>                                    
		
        <label for="jurusan">Jurusan</label>                                                              
		<input type="text" id="jurusan" name="jurusan" value="<?php echo $siswa ['jurusan'] ?>" required>           
		
        <div class="form-actions">                                                                    
			<button type="submit" name="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
			<a href="#" class="back-link"><i class="fa fa-arrow-left"></i> Kembali</a>                
		</div>                                                                                        
	</form>                                                                                           
</div>                                                                                                

</body>
</html>