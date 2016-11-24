<?php

namespace Arkanius\s3Uploader\Upload;


class UploadService
{

    /**
     * @param $hash
     * @param $file
     * @return mixed
     */
    public static function uploadFileToS3($hash, $file)
    {
        $fileName = $hash.'-'.time().'.'.strtolower($file->getClientOriginalExtension());

        $s3 = \Storage::disk('s3');

        return $s3->put($fileName, file_get_contents($file));
    }

    public static function test($ass)
    {
        dd($ass);
    }
}