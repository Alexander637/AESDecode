<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AesInfo;

class InfoController extends Controller
{
    public function submit(Request $request)
    {
        $aesInfo = new AesInfo();

        $encrypt_method = "AES-128-CBC";

        $decrypt = openssl_decrypt($request->input('encode'),
            $encrypt_method,
            $request->input('secret') ,
            0,
            $request->input('iv')
        );

        $aesInfo->EncodedText = $decrypt;
        $aesInfo->SecretKey = $request->input('secret');
        $aesInfo->IV = $request->input('iv');

        $aesInfo->save();

        return 'Success';

    }

}
