<?php

namespace App\Http\Controllers;

use App\Models\BusModal;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchBus(Request $request){
        $getBusName = request("searchbus");
        $listbus = BusModal::query()
        ->where('busno','like',"%{$getBusName}%")
        ->get();
        return view("viewallbus",compact('listbus'));
    }
    public function index()
    {
        $listbus = BusModal::all();
        return view("viewallbus",compact('listbus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //bno toute drivername submit btn
        return view("busadd");
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
        $busno = request("busno");
        $route = request("route");
        $driver = request("driver");
        echo "busno =".$busno."<br>"."route = ".$route."<br>"."driver = ".$driver;

        $bus = new BusModal();
        $bus->busno = $busno;
        $bus->route = $route;
        $bus->driver = $driver;

        $bus->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
