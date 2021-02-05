<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Url;
use Illuminate\Http\Request;


class UrlsController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $url = $request->url;
        //$validator = Validator::make(compact('url'), ['url' => 'required|url|max:255'])->validate();
        $this->validate($request,['url' => 'required|url|max:255']);
        $tmp = Url::where('url', $_POST['url'])->first();
        if($tmp != null){
            return view('newUrl')->withAlias($tmp->alias);
        }else{
            $alias =  Url::generateAlias();
            Url::create([
                'url'=> $_POST['url'],
                'alias'=> $alias
            ]);
            return view('newUrl')->withAlias($alias);
        }    
    }

    public function show($alias)
    {
        $url = Url::whereAlias($alias)->firstOrFail();
        if($url){
            return redirect($url->url);
            exit;
        }else{
            return redirect('/');
        }
    }
}
