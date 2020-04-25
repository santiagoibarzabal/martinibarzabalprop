<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Property;

use \App\Category;

use \App\Type;

use \App\Feature;

use \App\Room;

use \App\Service;

use Illuminate\Support\Str;

use Illuminate\Support\Arr;



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

        // Para cada propiedad, convertir la

        // foreach($properties as $property){
        // $limpiarLocalidad = strtolower(str_replace(' ', '-', $property->town));
        // $localidad = preg_replace('/[^A-Za-z0-9\-]/', '', $limpiarLocalidad);
        // $limpiarDireccion = strtolower(str_replace(' ', '-', $property->address)); 
        // $direccion = preg_replace('/[^A-Za-z0-9\-]/', '', $limpiarDireccion); 
        // }

        return view('properties.index', [
            'properties' => $properties,
            'categories' => $categories,
            'types' => $types,
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
            'address' => 'required|string',
            'town' => 'required|string',
            'tips' => 'required|string',
            'description' => 'required|string|max:200',
            'full_description' => 'max:500',
            'image' => '',
            'link' => 'required|string',
            'features' => '',
            'services' => '',
            'rooms' => '',
          ]);
          
          

          $property = new Property;

          $path = $request->file('image')->store('public');
          $property->image = $path;

          $property->type_id = $request['type_id'];
          $property->category_id = $request['category_id'];
          $property->currency = $request['currency'];
          $property->price = $request['price'];
          $property->address = $request['address'];
          $property->town = $request['town'];
          $property->tips = $request['tips'];
          $property->description = $request['description'];
          $property->full_description = $request['full_description'];
          $property->link = $request['link'];
          $property->save();

          
        
          foreach ($request->features as $key => $value) { 
            if(isset($value)) {
                $feature = new Feature;
                $feature->name = $value;
                $property->features()->save($feature);
                } 
            }
            
            
            foreach ($request->rooms as $key => $value) { 
                if(isset($value)) {
                    $room = new Room;
                    $room->name = $value;
                    $property->rooms()->save($room);
                } 
            }
        
            foreach ($request->services as $key => $value) { 
                if(isset($value)) {
                    $service = new Service;
                    $service->name = $value;
                    $property->services()->save($service);
                }
            }
            
       
          
          return redirect('/propiedades');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);

        $categories = Category::all();

        $types = Type::all();

        $properties = Property::all();

        $features = $property->features;
        $rooms = $property->rooms;
        $services = $property->services;
        
        return view('properties.show', [
            'property' => $property,
            'categories' => $categories,
            'types' => $types,
            'features' => $features,
            'rooms' => $rooms,
            'services' => $services,
            ]);
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

        $features = $property->features;
        $rooms = $property->rooms;
        $services = $property->services;
        

        return view('properties.edit', [
            'property' => $property,
            'id' => $id,
            'features' => $features,
            'rooms' => $rooms,
            'services' => $services
            ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function find($name,$id){

        $categories = Category::all();

        $category = Category::find($id);

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
            'address' => 'required|string',
            'town' => '',
            'tips' => 'required|string',
            'description' => 'required|string|max:200',
            'full_description' => '',
            'image' => '',
            'link' => 'required|string',
          ]);

          $property = Property::find($id);
          $incompleteRequest = $request->all();
           
          Arr::forget($incompleteRequest, 'features');
          Arr::forget($incompleteRequest, 'rooms');
          Arr::forget($incompleteRequest, 'services');

          $diff = array_diff($incompleteRequest, $property->toArray());

            if ($request->has('image')) {
                $diff['image'] = $request->file('image')->store('public');
            }

            
            $property->update($diff);

            Feature::where('property_id', $id)->delete();
            foreach ($request->features as $key => $value) { 
                if(isset($value)) {
                    $feature = new Feature;
                    $feature->name = $value;
                    $property->features()->save($feature);
                } 
            }
            Room::where('property_id', $id)->delete();
            foreach ($request->rooms as $key => $value) { 
                if(isset($value)) {
                    $room = new Room;
                    $room->name = $value;
                    $property->rooms()->save($room);
                } 
            }
            Service::where('property_id', $id)->delete();
            foreach ($request->services as $key => $value) { 
                if(isset($value)) {
                    $service = new Service;
                    $service->name = $value;
                    $property->services()->save($service);
                } 
            }
           
            
        
          return redirect('/propiedades');

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

       $property->features()->delete();
       $property->rooms()->delete();
       $property->services()->delete();

       $property->delete();

       return redirect('/propiedades');
    }
}
