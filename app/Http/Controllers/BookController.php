<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use App\Models\BusModal;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buses = BusModal::all();
        return view("viewallbus",compact($buses));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("book");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $booktitltel = request("booktitle");
        $authorl = request("author");
        $descriptionl= request("description");
        $distributel= request("distributer");
        $pricel= request("price");
        echo "title=".$booktitltel."author = " .$authorl."descri =".$descriptionl."distributor =".$distributel."price =".$pricel;

        $book = new BookModel();
    
       
        $book->booktitlte =$booktitltel;
        $book->author =$authorl;
        $book->description =$descriptionl;
        $book->distributer =$distributel;
        $book->price = $pricel;
        
        

        $book->save();

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
