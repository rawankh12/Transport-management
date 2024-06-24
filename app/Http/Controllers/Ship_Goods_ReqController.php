<?php

namespace App\Http\Controllers;

use App\Models\Ship_Goods_Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Ship_Goods_ReqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum',['except'=>['login','register']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Ship_Goods = Ship_Goods_Request::all();
        return response()->json(["Ship_Goods"=>$Ship_Goods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validate = Validator::make($request->all(),
        [
          'address'=>'required|string',
          'time_opened' => 'required',
          'time_closed'=> 'required'
        ]);
        if($validate->fails()){
            return response()->json($validate->errors(),400);
        }
        $Ship_Goods= Ship_Goods_Request::create([

            'address' => $request->address,
            'time_opened' => $request->time_opened,
            'time_closed' => $request->time_closed,
            'admin_id' => $request->admin_id
        ]);

      return response()->json([
        'status'=>true,
        'Ship_Goods'=>  $Ship_Goods
      ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $Ship_Goods = Ship_Goods_Request::where('id' , $request->id)->get();
        return response()->json([
            $Ship_Goods
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Ship_Goods = Ship_Goods_Request::find($request->id);

        $Ship_Goods->address = $request->address;
        $Ship_Goods->time_opened = $request->time_opened;
        $Ship_Goods->time_closed = $request->time_closed;
        $Ship_Goods->save();
        return response()->json([$Ship_Goods]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $Ship_Goods = Ship_Goods_Request::find($request->id);
        $Ship_Goods->delete();
        return response()->json([
            'succes' =>true,
            'msg' => 'deleted succesfully'
        ]);
    }
}
