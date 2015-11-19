<?php
/**
 * Created by PhpStorm.
 * User: aigens
 * Date: 16/11/2015
 * Time: 18:57
 */

namespace Jeffchung\AwsS3Wrapper;
use Aws\Laravel\AwsFacade;

class AwsS3Wrapper
{

    public function moveUploadedFile($source,$destinationDirectory,$destinationFileName){

        $s3 =   AwsFacade::get('s3');
        $result = $s3->putObject(array(
            'Bucket'     => 'websitefile',
            'Key'        => $destinationDirectory."/".$destinationFileName,
            'SourceFile' => $source,
            'ACL'          => 'public-read'
        ));
        return $result;

    }
    public function getUploadedFile($directory,$fileName){


        $s3 =   AwsFacade::get('s3');
        $newPath=   $directory."/".$fileName;
        $s3->getObject(array(
            'Bucket'     => 'websitefile',
            'Key'        => $newPath,
            'SaveAs' => $newPath
        ));


        return $newPath;
    }

}