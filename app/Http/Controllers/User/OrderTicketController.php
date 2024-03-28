<?php

namespace App\Http\Controllers\User;
// use
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

// resource
use App\Http\Resources\ConcertCollection;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\TicketCollection;
use App\Http\Resources\UserCollection;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CategoryCollection;

// Request 
use App\Http\Requests\StoreOrder_itemRequest;
use Illuminate\Support\Facades\Auth;
// model
use App\Models\Concert;
use App\Models\Country;
use App\Models\Order_item;
use App\Models\Ticket;
use App\Models\Category;

class OrderTicketController extends Controller
{
    public function landingPage(){
        return Inertia::render('User/LandingPage');
    }
    public function index(Request $request) {
        if($request->has('search')){
            $key_country = $request->input("country");
            $key_category = $request->input("category");
            $concerts = new ConcertCollection(
                Concert::where('category_id', $key_category)
                    ->orWhere('country_id', $key_country)
                    ->paginate(5)
            );
        } else {
            $concerts = new ConcertCollection(Concert::paginate(5));
        }
    
        $country = new CountryCollection(Country::all());
        $category = new CategoryCollection(Category::all());
    
        return inertia::render('User/HomePage', [
            'concerts' => $concerts,
            'category' => $category,
            'country' => $country,
            'concert_list' => new ConcertCollection(Concert::all())
        ]);    
    }
    
    public function show($slug){
       $concert = Concert::where('Slug', $slug)->first();
       if (!$concert) {
        abort(404);
    }
    $ticketData = Ticket::where('concert_id', $concert->id)->first();

    return inertia::render('User/OrderTicketPage', [
        'ticket' => $ticketData,
        'detail'=>$ticketData->concert
        ]);
    }

    public function payment($order_id){
        // dd($order_id);
        return Inertia::render('User/PanddingOrder',[
            'order_id' => $order_id
        ]);
    }

    public function store( StoreOrder_itemRequest $request)
    {
        $input = $request->validated();
        $input["order_id"] = "ID-".substr(Str::uuid(), 0, 5);
        $input["user_id"] = Auth::id();
        $create =Order_item::create($input);
        if($create){
            return redirect()->route('payment', $create->order_id)->with([
                'message' => "Checkout successfully!",
                'type' => 'success'
            ]);
        }
        return abort(500);
    }
    

    public function success($order_id)
    {
        $orderItems = Order_item::where('order_id', $order_id)->get();
        $userData = $orderItems->first()->user;
        $TicketData = $orderItems->first()->ticket->concert;
        return Inertia::render('User/Success', [
            'order' => new OrderCollection($orderItems),
            'user' => new UserCollection($userData),
            'ticket' =>new TicketCollection($TicketData)
        ]);
    }

}
