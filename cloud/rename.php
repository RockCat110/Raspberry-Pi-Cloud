<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rename</title>
</head>
<body>
    <script>
        alert('<?php
            if(isset($_POST['submit'])&&(strpos($_POST['submit'],'/'))==false) {
                f_rename();
            }
            function f_rename () {
                $old_name = "/var/www/html/cloud/uploads/".explode('|file-rename|',$_POST['submit'])[0]; 
                $new_name = "/var/www/html/cloud/uploads/".explode('|file-rename|',$_POST['submit'])[1]; 
                if(file_exists($new_name)) { 
                    echo "A File With The Same Name Already Exists" ;
                } else {
                    if(rename( $old_name, $new_name)) { 
                        echo "Successfully Renamed ".explode('|file-rename|',$_POST['submit'])[0]." To ".explode('|file-rename|',$_POST['submit'])[1] ;
                    } else {
                        echo "Error While Renaming ".explode('|file-rename|',$_POST['submit'])[0] ;
                    }
                }
            }
        ?>');
        window.location = '/cloud/'
    </script>
</body>
</html>