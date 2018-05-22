<?php

namespace App\Http\Controllers\Ad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
class AdController extends Controller
{
    public function __construct(){
        
    }
    /*
     *广告列表
     */
    public function index(Request $request){
        $advertisement = new Advertisement();
        if($request->input('name')){
            $advertisement = $advertisement->where('name','like','%'.$request->input('name').'%');
        }
        $advertisements = $advertisement->paginate(15);
        return view('ad.index',['advertisements'=>$advertisements,'request'=>$request]);
    }

    public function create(Request $request){
        return view('ad.create');
    }

    public function postCreate(Request $request){
        $advertisement  = new Advertisement();
        $advertisement->url = $request->input('url');
        $advertisement->start = $request->input('start');
        $advertisement->end = $request->input('end');
        $advertisement->comment = $request->input('desc');
        $advertisement->status = $request->input('status');
        if($request->input('image')){
            $picResult = $this->upload($request);
            $advertisement->photo =  $picResult['imgurl'];
        }
        if($advertisement->save()){
            return redirect('/ad/list');
        }
    }

    public function edit(Request $request){
        $advertisement = Advertisement::where('id',$request->input('id'))->first();
        return view('ad.edit',['advertisement'=>$advertisement]);
    }

    public function postEdit(Request $request){
        $advertisement = Advertisement::where('id',$request->input('id'))->first();
        $advertisement->url = $request->input('url');
        $advertisement->start = $request->input('start');
        $advertisement->end = $request->input('end');
        $advertisement->comment = $request->input('desc');
        $advertisement->status = $request->input('status');
        if($request->input('image')){
            $picResult = $this->upload($request);
            $advertisement->photo =  $picResult['imgurl'];
        }
        if($advertisement->save()){
            return redirect('/ad/list');
        }
    }
    
    public function delete(Request $request){
        $id = $request->input('id');
        $result = Advertisement::where('id',$id)->delete();
        if($result){
            return json_encode(['code'=>0,'msg'=>'删除成功']);
        }
    }

    /*
     *标题图上传
     */
    public function upload(Request $request)
    {
        $imageUpload = new ImageUpload();
        $resutl = $imageUpload->upload($request);
        return $result;
    }
}
