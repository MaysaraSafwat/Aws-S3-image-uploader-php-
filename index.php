<?php
require_once("vendor/autoload.php");

var_dump($_FILES);
if(isset($_FILES["fileToUpload"])){
    if($_FILES["fileToUpload"]["size"] > _MAX_IMG_SIZE_){
        var_dump("File is to large");
    }elseif(!strstr($_FILES["fileToUpload"]["type"], "image")){
        var_dump("File type Is not Supported, Please Uplad an Image");
    }else {
        $id = uniqid();
        $file_loc = $_FILES["fileToUpload"]["tmp_name"];
       $s3_bucket = new S3bucketUploader();
       $s3_bucket->upload($id, $file_loc);

    }

  }


require_once("views/upload.php");