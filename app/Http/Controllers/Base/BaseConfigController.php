<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BaseConfig;
use Symfony\Component\Yaml\Tests\B;

class BaseConfigController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request){
        $configs = BaseConfig::get();
        return view('base.index',['configs'=>$configs]);
    }

    public function create(Request $request){

        return view('base.create');
    }
    public function postCreate(Request $request){
        $config = new BaseConfig();
        $config->title = $request->input('title');
        $config->name = $request->input('name');
        $config->home_key_word = $request->input('home_key_word');
        $config->home_meta_description = $request->input('home_meta_description');
        $config->link_style = $request->input('link_style');
        $config->link_mobile = $request->input('link_mobile');
        $config->address = $request->input('address');
        if($config->save()){
            return redirect('/base/list');
        }
    }
    public function edit(Request $request){
        $config = BaseConfig::where('id',$request->input('id'))->first();
        return view('base.edit',['config'=>$config]);
    }

    public function postEdit(Request $request){
        $config = BaseConfig::where('id',$request->input('id'))->first();
        $config->title = $request->input('title');
        $config->name = $request->input('name');
        $config->home_key_word = $request->input('home_key_word');
        $config->home_meta_description = $request->input('home_meta_description');
        $config->link_style = $request->input('link_style');
        $config->link_mobile = $request->input('link_mobile');
        $config->address = $request->input('address');
        if($config->save()){
            return redirect('/base/list');
        }
    }

    public function del(Request $request){
        $id = $request->input('id');
        $result = BaseConfig::where('id',$id)->delete();
        if($result){
            return json_encode(['code'=>0,'msg'=>'删除成功']);
        }else{
            return json_encode(['code'=>1,'msg'=>'删除失败']);
        }
    }
}
