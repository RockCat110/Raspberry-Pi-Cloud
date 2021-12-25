<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <script>
        alert('<?php
            if(isset($_POST['submit'])&&(strpos($_POST['submit'],'/'))==false) {
                f_delete();
            }
            function f_delete () {
                $file_pointer = "/var/www/html/cloud/uploads/".$_POST['submit']; 
                if(file_exists($file_pointer)){
                    if (!unlink($file_pointer)) { 
                    echo ($_POST['submit']." Cannot Be Deleted Due To An Error"); 
                    } else { 
                        echo ($_POST['submit']." Has Been Deleted Successfully."); 
                    }
                } else {
                    echo ("There is No File Called ".$_POST['submit']);
                }             
            }
        ?>');
        window.location = '/cloud/';
    </script>
</body>
</html>