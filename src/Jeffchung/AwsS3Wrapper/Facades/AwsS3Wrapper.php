<?php
namespace Jeffchung\AwsS3Wrapper\Facades;
use Illuminate\Support\Facades\Facade;
/**
 * Created by PhpStorm.
 * User: aigens
 * Date: 16/11/2015
 * Time: 19:01
 *
 */

class AwsS3Wrapper extends Facade{
    //facade mapped to related dependency injection name
    protected static function getFacadeAccessor() { return 'awss3wrapper'; }

}