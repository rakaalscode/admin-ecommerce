<?php

namespace App\Helpers;

use Carbon\Carbon;
use OSS\OssClient;
use OSS\Core\OssException;
/**
 * Description of Crypt
 *
 * @author abid
 */
class alliyunOSS {
    //put your code here
    public function upload($fileName,$fileTemp){
        $year   = Carbon::now('Asia/Jakarta')->format('Y');
        $month  = Carbon::now('Asia/Jakarta')->format('m');
        $day    = Carbon::now('Asia/Jakarta')->format('d');
        $time   = Carbon::now('Asia/Jakarta')->format('YmdHis');

        $accessKeyId = env('OSS_ACCESS_KEY_ID');
        $accessKeySecret = env('OSS_ACCESS_KEY_SECRET');
        $endpoint = env('OSS_ENDPOINT');
        $client = new OSSClient($accessKeyId, $accessKeySecret, $endpoint);
        $bucket = env("OSS_BUCKET");

        $photo_name = $fileName;
        $object = $year."/".$month."/".$day."/".$time."-".$photo_name;
        $files = $fileTemp;
        $client->uploadFile($bucket, $object, $files);
        $image = $client->getObjectMeta($bucket, $object)['oss-request-url'];
        $envURL = env("OSS_URL");
        if($bucket==="carsworldmarketplace"){
            $pathimage=str_replace("http://carsworldmarketplace.oss-ap-southeast-5.aliyuncs.com",$envURL,$image);
        }else{
            $pathimage=str_replace("http://marketplace-bucket.oss-ap-southeast-5.aliyuncs.com",$envURL,$image); 
        }
        return $pathimage;
    }

    public function deleteImage($pictureName)
    {
        $accessKeyId = env('OSS_ACCESS_KEY_ID');
        $accessKeySecret = env('OSS_ACCESS_KEY_SECRET');
        $endpoint = env('OSS_ENDPOINT');
        $client = new OSSClient($accessKeyId, $accessKeySecret, $endpoint);
        $bucket = env("OSS_BUCKET");

        $object = $pictureName;
        $client->deleteObject($bucket, $object);

        $image = $client->deleteObject($bucket, $object);

        return $image;
    }

}
