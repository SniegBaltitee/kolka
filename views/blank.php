<form action="blank.php" method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
    <input type="file" name="files[]" multiple >
    <input type="submit" name="submit" value="UPLOAD">
</form>
<?php 
// Include the database configuration file 
include_once '../database_config.php'; 
     
 if(isset($_POST['newGallery'])){ 
                    // File upload configuration 
                    $targetDir = "crud/images/"; 
                    $allowTypes = array('jpg','png','jpeg','gif'); 
                     
                    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                    $fileNames = array_filter($_FILES['files']['name']); 
                    if(!empty($fileNames)){ 
                        foreach($_FILES['files']['name'] as $key=>$val){ 
                            // File upload path 
                            $fileName = basename($_FILES['files']['name'][$key]); 
                            $targetFilePath = $targetDir . $fileName; 
                             
                            // Check whether file type is valid 
                            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                            if(in_array($fileType, $allowTypes)){ 
                                // Upload file to server 
                                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                                    // Image db insert sql 
                                    $insertValuesSQL .= "('".$fileName."', LAST_INSERT_ID()),"; 
                                }else{ 
                                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                                } 
                            }else{ 
                                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                            } 
                        } 
                         
                        // Error message 
                        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                         
                        if(!empty($insertValuesSQL)){ 
                            $insertValuesSQL = trim($insertValuesSQL, ','); 
                            // Insert image file name into database 
                            $insert = $conn->query("INSERT INTO img_gal (picture, gal_id) VALUES $insertValuesSQL"); 
                            if($insert){ 
                                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
                            }else{ 
                                $statusMsg = "Sorry, there was an error uploading your file."; 
                            } 
                        }else{ 
                            $statusMsg = "Upload failed! ".$errorMsg; 
                        } 
                    }else{ 
                        $statusMsg = 'Please select a file to upload.'; 
                    } 
                } 
 
?>

<?php
// Include the database configuration file
include_once '../database_config.php'; 

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 