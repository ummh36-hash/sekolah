<?php                                                            
                                                                 
                                                                 
include_once('koneksi.php');                                     
                                                                 
                                                                 
$id = $_GET['id'];                                               
                                                                 
                                                                 
$query = mysqli_query ($db, "DELETE from siswa WHERE id = $id " );
                                                                 
                                                                 
// kalau query nya berhasil                                      
header('location: index.php');                                    
?>                                                               