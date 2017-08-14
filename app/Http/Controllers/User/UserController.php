<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\User\Users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Model\Common;
//use App\Model\Wallet\ShareConfigure;
class UserController extends Controller
{

    /*
     * 获取用户分享余额
     * 
     */
    public function index(Request $request)
    {
       //判断当前是否登录
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('111');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('22');
    }

    /**
     * 获取分享红包设置 当前余额
     * min_money--max_money随机分配
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('article.details');
    }
    public function articleInfo($id){
        return view('article.detais');
    }
    /**
     * 获取分类信息
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCate($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}