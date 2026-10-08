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
	<h2>Tambah Siswa</h2>                                                                              
	<form action="proses-simpan-siswa.php" method="POST" id="formTambahSiswa" autocomplete="off"> 

		<label for="nis">Nis</label>                                                         
		<input type="text" id="nis" name="nis" required> 
                                                 
		<label for="nama">Nama</label>                                                          
		<input type="text" id="nama" name="nama" required>                                      
		
        <label for="kelas">Kelas</label>                                                        
		<input type="text" id="kelas" name="kelas" required>                                    
		
        <label for="jurusan">Jurusan</label>                                                              
		<input type="text" id="jurusan" name="jurusan" min="1000" max="9999" required>           
		
        <div class="form-actions">                                                                    
			<button type="submit" name="submit" class="btn"><i class="fa fa-save"></i> Simpan</button>
			<a href="#" class="back-link"><i class="fa fa-arrow-left"></i> Kembali</a>                
		</div>                                                                                        
	</form>                                                                                           
</div>                                                                                                
























</body>
</html>