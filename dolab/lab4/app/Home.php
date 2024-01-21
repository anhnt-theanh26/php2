<?php

namespace App;

class Home
{
    public function index():string
    {
        return <<<form
        <form action="/upload" method="post" enctype="multipart/form-data">
            <input type="file" name="receipt" id="">
            <button type="submit">Upload</button>
        </form>
        form;
    }

    public function upload(){
        $filePath = storage_path.'/'.$_FILES['receipt']['name'];
        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);
        var_dump(pathinfo($filePath));
    }
}

?>
