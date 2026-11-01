<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Pest\Plugins\Only;

class typeformController extends Controller
{
    function typeform(){
        return view('admin.jobinsert');
    }
    function jobtypeinsert(Request $request){
        $response=Http::post('http://127.0.0.1:8000/api/jobinsert',[
            'name'=>$request->name,
            "description"=>$request->description
        ]);
        if($response){
            return redirect()->route('alljobtype');
        }
        else{
            return "not inserted";
        }
    }
    function fatch(){
        $response=Http::get('http://127.0.0.1:8000/api/dataget');
        $data=$response->json()['data'];

        return view('admin.alljobfatch',compact('data'));
    }
    function category(){

$response=Http::get('http://127.0.0.1:8000/api/job/');
$data=$response->json()['data'];
        return view('user.category',compact("data"));
    }
    function alljoblist(){
        $data=Http::get("http://127.0.0.1:8000/api/job/");
         $response=$data->json()['data'];
        return view('user.job_list',compact('response'));
    }
    function home(){
        
    }

    function jobbyid($id){
        $data=Http::get("http://127.0.0.1:8000/api/job_by_id/$id");

    $response=$data->json()['data'];
    return view('user.job_detail',compact('response'));
//return $response;
    }
    function applyjob(Request $request){
        $data=Http::post('http://127.0.0.1:8000/api/apply/job',[
    "name"=>$request->username,
    "email"=>$request->usermail,
    "job_type"=>$request->jobtype,
    "contact"=>$request->contact,
    "description"=>$request->description,
    "user_id"=>$request->userid,
    "job_id"=>$request->jobid
        ]);
        return redirect()->route('home');
    }
        function applyfatch(){
        $response=Http::get('http://127.0.0.1:8000/api/get/applyjob');
        $data=$response->json()['data'];

        return view('admin.allapplyies',compact('data'));
    }
}
