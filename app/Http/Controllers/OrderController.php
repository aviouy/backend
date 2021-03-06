<?php

namespace App\Http\Controllers;

use App\Services\AirFix;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 储存新来的报修单
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');

        // TODO 输入校验
        // $this->validate(...);
        $validator = Validator::make($request->all(), [
            'building' => 'required',
            'room' => 'required',
            'contact' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            $this->message =  $validator->errors()->all();
        }else{
            // TODO 调用Service处理业务
            // AirFix::createNewOrder(...);
            $input['status'] = 'fresh';
            //dd($input);
            $result = AirFix::createNewOrder($input);
            if($result){
                $this->message = '报修成功!!';
            }else {
                $this->message = '报修失败，请稍后再试';
            }
        }

        // TODO 输出结果
        // return [...];
        return $this->message;
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
