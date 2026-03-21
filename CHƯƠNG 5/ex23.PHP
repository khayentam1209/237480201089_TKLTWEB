<?php
if(isset($_POST['btnUpload'])) {
    $dir = "Tailieu/";
    // Tự động tạo thư mục nếu chưa có
    if (!file_exists($dir)) mkdir($dir, 0777, true);

    $file_path = $dir . basename($_FILES['fileToUpload']['name']);
    
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $file_path)) {
        echo "File đã được tải lên thư mục Tailieu thành công!";
    } else {
        echo "Có lỗi xảy ra khi tải file.";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Chọn file để upload:
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload File" name="btnUpload">
</form>