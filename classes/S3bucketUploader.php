<?php


use Aws\S3\S3Client;

class S3bucketUploader{

  private $_bucket;

  
  public function __construct()
  {
    $this->connect_s3();
  }



  private function connect_s3(){
    $this->_bucket= S3Client::factory(array(
      'credentials' => array(
          'key' => _ACCESS_KEY_,
          'secret' => _SECRET_,
      ), 'region' => "us-east-1",
      'version' => 'latest'
  ));

  }


  
  public function upload($filename,$source){
    
    $is_uploaded = $this->_bucket->putObject([
			'Bucket' => _S3_BUCKET_NAME_,
			'Key'    => $filename,
			'SourceFile' => $source			
		]);

    return $is_uploaded;
  }




}