<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class MyController extends Controller
{
    public function xinchao()
    {
        echo "xin chao";
    }
    public function GetURL(Request $request)
    {
        // return $request->path();
        // if ($request->isMethod('get')) echo "Phương thức get";
        if ($request->is('goi*')) echo "có chữ goi";
        
    }
    public function postform(Request $request)
    {
      echo  $request->hoten; 
    }
    public function setCookie()
    {
        $response = new Response();
        $response->withCookie('KhoaHoc','Laravel',1);
        return $response;
    }
    public function getCookie(Request $request)
    {
        return $request->cookie('KhoaHoc');
    }
    public function postFile(Request $request)
    {
        if($request->hasFile('myFile'))
        {
            
            $file= $request->file('myFile');
            if($file->getClientOriginalExtension('myFile')=="jpg")
            {
                $filename=$file->getClientOriginalName('myFile');
                $file->move('img',$filename);
                echo "Đã lưu file :".$filename;
            }else if($file->getClientOriginalExtension('myFile')=="png")
            {
                $filename=$file->getClientOriginalName('myFile');
                $file->move('img',$filename);
                echo "Đã lưu file :".$filename;
            }
            else echo "Không được phép upload file";
            // $filename=$file->getClientOriginalName('myFile');
            // echo $filename;
            // $file->move('img',$filename);
        }
        else{
            echo "Chưa có file";
        }
    }
    public function getJson()
    {
        $array = ['Laravel','PHP','ASP.net','HTML'];
        return response()->json($array);
    }
    public function myView()
    {
        return view('view.long');
    }
    public function Time($t)
    {
        return view('myView',['t'=>$t]);
    }
    public function blade($str)
    {
        if($str=="laravel")
            return view('pages.laravel');
        else if($str=="php")
            return view('pages.php');
    }
}   
