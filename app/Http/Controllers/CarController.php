<?php

namespace App\Http\Controllers;

use App\Car;
use App\Status;
use App\CategoryCar;
use App\CarText;
use App\Brand;
use App\Pattern;
use App\Transmission;
use App\Image;
use App\Lang;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\DB;
use Imagenes;

class CarController extends Controller
{
    public function index()
    {
        return view('admin.cars.index', ['cars'=>Car::orderby('id', 'ASC')->paginate('6')]);
    }

    public function show(Car $car)
    {
        return view('admin.cars.show', ['cars'=>$car]);
    }

    public function create()
    {
        return view('admin.cars.create',
        [
            'brands'=>Brand::all(),
            'patterns'=>Pattern::all(),
            'statuses'=>Status::all(),
            'categories'=>CategoryCar::all(),
            'transmissions'=>Transmission::all(),
        ]);
    }

    public function store(CarRequest $request)
    {
        $pattern = Pattern::find($request->input('pattern_id'));
        $brand = $pattern->brand;
        $urlimagenes=[];

        /*Guardado de imagenes y renombrado*/
        if ($request->hasfile('image_name')){
            $images = $request->file('image_name');          
            foreach($images as $i => $image){
                $name = $pattern->pattern_name.($i+1).'.jpg';
                $route = public_path('/public_images'.'/'.$pattern->pattern_name);
                $image = Imagenes::make($image->getRealPath());
                $image->resize(320,220, function($c){
                    $c->aspectRatio();
                });
                $image->save(public_path('/public_images'.'/'.$pattern->pattern_name.'/'.$name));
               
                $urlimagenes[]['image_name'] = '/public_images/'.$pattern->pattern_name.'/'.$name;
              
            }
        }
        $car = new Car();
        $car->status_id = 1;//$request->input('status_id')
        $car->category_id = $request->input('category_id');
        $car->brand_id = $brand->id;
        $car->pattern_id = $request->input('pattern_id');
        $car->transmission_id = $request->input('transmission_id');
        $car->passengerQuantity = $request->input('passengerQuantity') ?? 1;
        $car->luggageBigQuantity = $request->input('luggageBigQuantity') ?? 1;
        $car->luggageSmallQuantity = $request->input('luggageSmallQuantity') ?? 1;
        $car->km_x_lts = $request->input('km_x_lts') ?? 1;
        $car->text_en = $request->input('car_text_en') ?? '';
        $car->text_es = $request->input('car_text_es') ?? '';
        $car->text_pt = $request->input('car_text_pt') ?? '';
        $car->save();
        $car->images()->createMany($urlimagenes);
        
        return  redirect('/car');
     }

    public function edit(Car $car)
    {  
        
        return view('admin.cars.edit',
        [   
            'cars'=>$car,
            'brands'=>Brand::all(),
            'patterns'=>Pattern::all(),
            'statuses'=>Status::all(),
            'categories'=>CategoryCar::all(),
            'transmissions'=>Transmission::all(),
        ]);

    }

    public function update(carRequest $request, Car $car)
    {
        $pattern = Pattern::find($request->input('pattern_id'));
        $brand = $pattern->brand;
        $urlimagenes=[];
        
        /*Guardado de imagenes y renombrado*/
        if ($request->hasfile('image_name')){
            $request->validate([
                'image_name.*' => 'image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            $car->images()->delete();
            $images = $request->file('image_name');
            foreach($images as $i => $image){                
                $name = $pattern->pattern_name.($i+1).'.'.$image->extension();
                $img = Imagenes::make($image->getRealPath());
                $img->resize(360,220, function($c){
                    $c->aspectRatio();
                });
                $img->save(public_path('/public_images'.'/'.$pattern->pattern_name.'/'.$name));
                $urlimagenes[]['image_name'] = '/public_images/'.$pattern->pattern_name.'/'.$name;
            }
            $car->images()->createMany($urlimagenes);
        }
        
        $car->status_id = 1;
        $car->category_id = $request->input('category_id');
        $car->brand_id = $brand->id;
        $car->pattern_id = $request->input('pattern_id');
        $car->transmission_id = $request->input('transmission_id');
        $car->passengerQuantity = $request->input('passengerQuantity') ?? 1;
        $car->luggageBigQuantity = $request->input('luggageBigQuantity') ?? 1;
        $car->luggageSmallQuantity = $request->input('luggageSmallQuantity') ?? 1;
        $car->km_x_lts = $request->input('km_x_lts') ?? 1;
        $car->text_en = $request->input('text_en') ?? '';
        $car->text_es = $request->input('text_es') ?? '';
        $car->text_pt = $request->input('text_pt') ?? '';
        $car->update();
        return redirect('/car');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/car');
    }
}
