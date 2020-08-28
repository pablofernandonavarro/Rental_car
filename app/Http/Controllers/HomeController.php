<?php

namespace App\Http\Controllers;

use App\Additional;
use App\CategoryCar;
use App\CategoryHotel;
use App\CategoryFaq;
use App\CarText;
use App\Quotation;
use App\Client;
use App\OwnerData;
use App\Car;
use App\Hotel;
use App\Faq;
use App\Requirement;
use App\Lang;
use Carbon\Carbon;
use App\AdditionalText;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\QuotationRequest;
use App\Mail\Consulta;
use App\Mail\Contact;

class HomeController extends Controller
{
    /*---------------------------Seteo del lenguaje-------------------------*/
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    /*------------------------- Funcion para traer datos relacionados al lenguaje------------------------- */
    public function switchLocale($item){
        $locale = session()->get('locale');
        switch ($locale){
            case 'en':
                $returnItems = $item::where('lang_id', '=', 2)->paginate(10);
                break;
            case 'pt':
                $returnItems = $item::where('lang_id', '=', 3)->paginate(10);
                break;
            default:
                $returnItems = $item::where('lang_id', '=', 1)->paginate(10);
        }
        return $returnItems;
    }
    /*----------------------------Index----------------------------- */
    public function index(){
        return view('index',[   
            'category' => CategoryCar::all(),
            'owner_datas' => OwnerData::first(),
        ]);
    }
    
    /*---------------------------Contacto----------------------------*/
    public function contact(){
        return view ('contact');
    }

    /*--------------------------Sobre Nosotros-----------------------*/
    public function about(){

        $locale = session()->get('locale');
        $langs = Lang::all();
        switch ($locale){
            case 'en':
            $returnItems = '/about-en';
            break;
            case 'pt':
            $returnItems = '/about-pt';
            break;
            default:
            $returnItems = '/about-es';
            break;
        }
        return view ('about' , ['inputs'=>$returnItems,'owner_datas' => OwnerData::first()]);
    }

    /*--------------------------Adicionales---------------------------*/
    public function additionals(){
        return view ('additionals', [
            'additionals' => $this->switchLocale(AdditionalText::class),
            'category' => CategoryCar::all(),
            'owner_datas' => OwnerData::first(),
            'cars'=> Car::all(),
        ]);
    }

    /*-------------------------Requisitos----------------------------*/
    public function requirements(){
        return view ('requirements' , [
            'requirements' => $this->switchLocale(Requirement::class),
            'cars' => Car::all(),
            'category' => CategoryCar::all(),
            'owner_datas' => OwnerData::first(),
        ]);
    }

    /*--------------------------Nuestra flota------------------------*/
    public function listing($filter = ""){
        if ($filter == "" || $filter == 'brands') {
            $cars = Car::orderby('brand_id', 'ASC')->get();
        }
        if($filter == 'categories'){
            $cars = Car::orderBy('category_id', 'ASC')->get();
        }
        return view ('car-listing' , [
            'cars' => $cars,
            'category' => CategoryCar::all(),
            'owner_datas'=> OwnerData::first(),
        ]);
    }

    /*----------------------------Preguntas Frecuentes----------------------------*/
    public function faqs($category_faq = 9){
        $categoryFaq = $this->switchLocale(CategoryFaq::class);
        $faqs = $this->switchLocale(Faq::class);
        
        if ($category_faq == 9 || $category_faq == 0) {
            $faqs = Faq::orderby('id','Asc')->paginate(8);
        }else{
            $faqs = Faq::where ('category_id','=',$category_faq)->paginate(8);
        }
        return view ('faqs' , [
            'cars' => Car::all(),
            'category' => CategoryCar::all(),
            'owner_datas' => OwnerData::first(),
            'faqs'        => Faq::all(),
            'category_faqs' => $categoryFaq,
            'faqs' => $faqs,
        ]);
    }

    /*--------------------------------Hoteles-------------------------------*/
    public function hotels($category = 0){
        if ($category == 0 || $category == 7) {
            $hotels = Hotel::orderby('id', 'ASC')->paginate(9);
        }elseif($category == 6){
                $hotels = Hotel::where('discount', '!=', '')->paginate(9);
        }else{
            $hotels = Hotel::where('category_id', '=', $category)->paginate(9);
        }
        $categories = $this->switchLocale(CategoryHotel::class);
        return view ('hotels' , [
            'categories' => $categories,
            'owner_datas' => OwnerData::first(),
            'hotels' => $hotels,
        ]);
    }

    /*---------------------------Nuestra flota listado en cuadricula--------------------------*/
    public function portfolio($filter = ""){
        $cars = Car::orderby('id', 'ASC')->get();

        if ($filter == 'categories') {
            $cars = Car::orderby('category_id', 'ASC')->get();
        }
        if ($filter == 'brands') {
            $cars = Car::orderby('brand_id', 'DESC')->get();
        }

        return view('portfolio-alt',[
            'cars'          => $cars,
            'category'      => CategoryCar::all(),
            'owner_datas'   => OwnerData::first(),
        ]);
    }

    /*-----------------------------------Portfolio single-------------------------------------*/
    public function carShow(Car $car){
        return view('portfolio-single', [
            'car'           => $car,
            'owner_datas'   => OwnerData::first(),
        ]);
    }

    /*--------------------------Guardar cotización y enviar mail--------------------------------*/
    public function saveQuotation(QuotationRequest $request)
    {
        /*Establecemos el formato de las fechas*/
        $format = 'd/m/Y H:i';

        /*Tomamos los datos ya validados*/
        $name = $request->input('quotation_name');
        $mail = $request->input('quotation_email');
        $phone = $request->input('quotation_phone');
        $firstdate = Carbon::createFromFormat($format, $request->input('quotation_first_date'));
        $lastdate  = Carbon::createFromFormat($format, $request->input('quotation_last_date'));
        $retreatPlace = $request->input('retreat_place');
        $returnPlace = $request->input('return_place');
        $category = CategoryCar::find($request->input('quotation_category'));
        $comments = $request->input('quotation_comments');

        /*Traemos todos los clientes y consultas para saber si ya tenemos un cliente con el mail*/
        $clients= Client::all();
        $quotations = Quotation::all();
        $id = 0;

        /*Buscamos el mail del cliente, si existe guardamos su id*/
        foreach ($clients as $client){
            if ($request->quotation_email == $client->email){
                $id = $client->id;
            }
        }

        /*En caso de que no encuentre el id crea un nuevo cliente*/
        if($id === 0){
            $clients = new Client;
            $clients->email = $mail;
            $clients->first_name = $name;
            $clients->phone = $phone;
            $clients->save();
            $id = $clients->id;
        }
        /*En caso de que haya encontrado el cliente*/
        $clients = client::findOrfail($id);
        $clients->email = $mail;
        $clients->first_name = $name;
        $clients->phone = $phone;
        $clients->update();

        /*Creo la consulta en la base de datos*/
        $quotations= new Quotation;
        $quotations->client_id = $id;
        $quotations->first_date = $firstdate;
        $quotations->last_date = $lastdate;
        $quotations->retreat_place = $retreatPlace;
        $quotations->return_place = $returnPlace;
        $quotations->comments = $comments;
        $quotations->category_id = $category->id;
        $quotations->save();

        /*Enviamos el mail con los datos de un posible cliente*/
        Mail::to('mendozarentalcom@gmail.com')
                ->cc('info@mendozarental.com')
                ->send(new Consulta($name, $mail, $phone, $retreatPlace, $returnPlace, $firstdate, $lastdate, $category->category_car_name, $comments));

        return redirect()->back()->with('message', 'email enviado');
    }
    public function saveContact(Request $request){
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        Mail::to('mendozarentalcom@gmail.com')
                ->cc('info@mendozarental.com')
                ->send(new Contact($name, $email, $subject, $message));
        return redirect()->back()->with('message', 'email enviado');
    }
}
