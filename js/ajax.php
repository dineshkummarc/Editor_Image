<?php

    if(isset($_POST['download'])){
        move_uploaded_file($_FILES['file']['tmp_name'], '../assets/'.$_FILES['file']['name']);
        // echo $_FILES["file"]["name"];

        $file = explode('.',$_FILES['file']['name']);
        $content = [ 'container' => $_POST['container'], 'style' => '<style>'.$_POST['styles'].'</style>' ];
        file_put_contents('../assets/'.$file[0].'.html', $content);

        echo 'Acesse sua imagem pelo link: http://localhost/Projects/myPhotoshop/assets/'.$file[0].'.html';
    }

?>
