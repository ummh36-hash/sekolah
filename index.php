<?php                                                                    
                                                                                                                                            
include_once 'koneksi.php';                                                                                                                 
                                                                         
$query = mysqli_query ($db, "SELECT * FROM siswa");                       
$nomor =1;                                                               
                                                                         
                                                                         
?>                                                                       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>


<div class="container" style="position:relative;z-index:1;">            
    <h1>Daftar Nama Siswa</h1>                                       
    <a href="tambahSiswa.php" class="add-btn"><i class="fa fa-plus"></i> Tambah Siswa</a>                                                       
    <table>                                                             
        <thead>                                                         
            <tr>                                                        
                <th>No</th>                                             
                <th>Nis</th>                                     
                <th>Nama</th>                                        
                <th>Kelas</th>                                       
                <th>Jurusan</th>
                <th>Aksi</th>                                                                                     
            </tr>                                                       
        </thead>                                                        
        <tbody id="SiswaTableBody">                                      
            <?php foreach ($query as $siswa){ ?>                         
            <tr>                                                        
                <td> <?php echo $nomor++ ?> </td>                       
                <td> <?php echo $siswa ['nis'] ?> </td>                
                <td> <?php echo $siswa ['nama'] ?></td>               
                <td> <?php echo $siswa ['kelas'] ?> </td>             
                <td> <?php echo $siswa ['jurusan'] ?> </td>         
                <td>                                                    
                    <a href="editSiswa.php?id=<?php echo $siswa ['id']?>" class="action-btn edit"style="text-decoration: none!important;">                               
                       <i class="fa fa-edit"></i>                       
                    </a>                                                
                    <a href="hapusSiswa.php?id=<?php echo $siswa ['id']?>" class="action-btn delete" style="text-decoration: none!important;" onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?');">                            
                        <i class="fa fa-trash"></i>                     
                    </a>                                                
                </td>                                                   
            </tr>                                                       
            <?php } ?>                                                  
        </tbody>  

      </table> <br> 

 </div>    
 
 
    </body>
    
   
    </html>
                                                                