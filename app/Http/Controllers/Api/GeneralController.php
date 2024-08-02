<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function generateSecret(Request $request)
    {
        $data['secret'] = bin2hex(openssl_random_pseudo_bytes(16));
        $data['iv']     = bin2hex(openssl_random_pseudo_bytes(16));

        file_put_contents(resource_path('secret-key/secret.txt'),$data['secret']);
        file_put_contents(resource_path('secret-key/iv.txt'),$data['iv']);

        $this->__collection  = false;
        $this->__is_paginate = false;

        return $this->__sendResponse($data, 200, 'Secret has been generated successfully');
    }
}
