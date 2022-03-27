<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = food::latest()->paginate(10);
        return view('admin.index', compact('foods'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'type'=>'required',
            'photo'=>'required'
        ]);

        //Create a new product
        food::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('admin.index')->with('succes', 'Product created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = food::where('id', $id)->first();
        return view('admin.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = food::where('id', $id)->first();
        return view('admin.edit', compact('food'));
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
        //validate the input
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'type'=>'required'
        ]);

        //Create a new product
        food::where('id', $id)->update($request->except(['_token', '_method'])); // не надо сохранять токен и метод в базе данных, поэтому исключаем их

        //redirect the user and send friendly message
        return redirect()->route('admin.index')->with('succes', 'Product updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete the food
        food::where('id', $id)->delete();

        //redirect the user and display succes message
        return redirect()->route('admin.index')->with('succes', 'Product deleted succesfully');        
    }
}
