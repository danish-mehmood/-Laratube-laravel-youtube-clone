<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Http\Requests\Channels\UpdateFormRequest;
use Illuminate\Http\Request;


class ChannelController extends Controller
{
   

public function __construct()
{
    $this->middleware('auth')->only('update');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Channel $channel)
    {
        //
        return view("channel.show")->with("channel" , $channel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request,Channel $channel)
    {
        //
      

        if($request->hasFile("image")){

            $channel->clearMediaCollection("images");
            $channel->addMediaFromRequest('image')->toMediaCollection("images");
        
        
        }
        $channel->update([
          'name' =>$request->name,
          'description' =>$request->description,
        ]);

        return redirect()->back();

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
