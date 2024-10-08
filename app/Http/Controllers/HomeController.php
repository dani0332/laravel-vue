<?php
namespace App\Http\Controllers;

use App\Models\ContentManagement;
use Illuminate\Http\Request;

class HomeController
{
    public function getContent($slug)
    {
        $data['content'] = ContentManagement::getBySlug($slug);
        if( !isset($data['content']->id) )
            return redirect('/');

        return view('content', $data);
    }

    public function index(Request $request){

        return view("vue.master");
    }

}
