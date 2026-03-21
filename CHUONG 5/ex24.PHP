<?php
if(isset($_POST['btnUploadMultiple'])) {
    $dir = "BoSuuTap/";
    if (!file_exists($dir)) mkdir($dir, 0777, true);

    $files = $_FILES['filesUpload'];
    $count = count($files['name']);

    for($i = 0; $i < $count; $i++) {
        $path = $dir . basename($files['name'][$i]);
        if(move_uploaded_file($files['tmp_name'][$i], $path)) {
            echo "Đã upload file: " . $files['name'][$i] . "<br>";
        }
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Chọn nhiều file ảnh:
    <input type="file" name="filesUpload[]" multiple>
    <input type="submit" value="Upload tất cả" name="btnUploadMultiple">
</form>