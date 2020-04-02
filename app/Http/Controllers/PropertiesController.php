<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Property;

use \App\Category;

use \App\Type;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();

        $categories = Category::all();

        $types = Type::all();
        
        return view('properties.index', [
            'properties' => $properties,
            'categories' => $categories,
            'types' => $types
            ]);
    }

    public function list()
    {
        $properties = Property::all();

        $categories = Category::all();

        $types = Type::all();
        
        return view('properties.list', [
            'properties' => $properties,
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type_id' => 'required',
            'category_id' => 'required',
            'currency' => 'required|string|min:1|max:4',
            'price' => 'required',
            'image' => 'required|file',
            'description' => 'required|string|max:200',
            'address' => 'required|string',
            'tips' => 'required|string',
            'link' =>  'required|string',
          ]);

          $property = new Property;

          $path = $request->file('image')->store('public');

        //   $property = Property::create($request->all());

          $property->image = $path;

          $property->type_id = $request['type_id'];
          $property->category_id = $request['category_id'];
          $property->currency = $request['currency'];
          $property->price = $request['price'];
          $property->description = $request['description'];
          $property->address = $request['address'];
          $property->tips = $request['tips'];
          $property->link = $request['link'];

          $property->save();

          return redirect('/properties');

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
        $property = Property::find($id);
        
        return view('properties.edit', [
            'property' => $property,
            'id' => $id
            ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function find(Category $category){

        $categories = Category::all();

        $types = Type::all();

        $properties = Property::where('category_id', $category->id)->get();

        return view('properties.find', [
            'properties' => $properties,
            'types' => $types,
            'categories' => $categories
            ]);



    }




    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type_id' => 'required',
            'category_id' => 'required',
            'currency' => 'required|string|min:1|max:4',
            'price' => 'required',
            'image' => 'required|file',
            'description' => 'required|string|max:200',
            'address' => 'required|string',
            'tips' => 'required|string',
            'link' =>  'required|string',
          ]);

          $property = Property::find($id);

          $diff = array_diff($request->all(), $property->toArray());

            if ($request->has('image')) {
                $diff['image'] = $request->file('image')->store('public');
            }
            
            $property->update($diff);

          return redirect('/properties');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $property = Property::find($id);

       $property->delete();

       return redirect('/properties');
    }
}
