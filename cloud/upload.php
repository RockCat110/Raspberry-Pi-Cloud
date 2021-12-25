<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <script>
        alert('<?php
            if(isset($_POST['submit'])&&(strpos($_FILES['files']['name'],'/'))==false) {
                fileUpload();
            }
            function fileUpload () {
                $target_dir = "/var/www/html/cloud/uploads/";
                $file_name = $_FILES['files']['name'];
                $file_tmp = $_FILES["files"]["tmp_name"];
                if(!file_exists($target_dir.$_FILES['files']['name'])) {  
                    if (move_uploaded_file($file_tmp, $target_dir.$file_name)) {
                        echo "The File ".$file_name." Has Been Uploaded Successfully.";
                    } else {
                        echo "Sorry, There Was an Error Uploading Your File.";
                    }
                } else {
                    echo "File Already Exists";
                }
            }
        ?>');
        window.location = '/cloud/';
    </script>
</body>
</html>