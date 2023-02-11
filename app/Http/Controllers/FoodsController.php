<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;


class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        //filter
        // $foods = Food::where('id', '>', 3)
        //     ->get();
        //dd($foods);
        return view('foods.index', [
            'foods' => $foods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //insert new food
        $categories = Category::all();
        //dd($category);
        return view('foods.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateValidationRequest $request)
    {
        //dd($request->file('image')->guessExtension());
        //dd($request->file('image')->getClientOriginalExtension());
        //dd($request->all());
        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->description = $request->input('description');
        // $food->price = $request->input('price');
        // $food->count = $request->input('count');
        // dd($request);
        //We need validate the date before we save us in database
        // $request->validate([
        //     'name' => 'required|unique:foods',
        //     'description' => 'required',
        //     'price' => 'required|min:0|max:10000',
        //     'count' => 'required|min:0|max:10000',
        //     'category_id' => 'required',
        // ]);
        $request->validated();

        $generatedImageName = 'image'.time().'-'.$request->name.'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('images'), $generatedImageName);

        $food = Food::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'count' => $request->input('count'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        $food->save();
        return redirect('/foods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        // dd($category);
        return view('foods.show', compact('food','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        //dd($food);
        return view('foods.edit', compact('food'));
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
        dd($request);
        $food = Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'count' => $request->input('count'),
                'category_id' => $request->input('category_id'),
                // 'image_path' => $generatedImageName,
            ]);
        return redirect('/foods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::where('id', $id)
            ->delete();
        return redirect('/foods');
    }
}
