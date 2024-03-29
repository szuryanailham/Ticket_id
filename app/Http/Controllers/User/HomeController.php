<?php

namespace App\Http\Controllers\User;
// use
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

// resource
use App\Http\Resources\ConcertCollection;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\TicketCollection;
use App\Http\Resources\UserCollection;

// Request 
use App\Http\Requests\StoreOrder_itemRequest;

// model
use App\Models\Concert;
use App\Models\Order_item;
use App\Models\Ticket;

class HomeController extends Controller
{
    public function index(){
        $concerts = new ConcertCollection(Concert::paginate(5));
        return inertia::render('User/HomePage', [
            'concerts'=>$concerts
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

    public function store( StoreOrder_itemRequest $request)
    {
      
        $input = $request->validated();
        $uuid = Str::uuid();
        $shortenedUuid = substr($uuid, 0, 5);
        $input["order_id"] = "ID-$shortenedUuid";
        // input data 
        $create =Order_item::create($input);
        if($create){
            return redirect()->route('checkout.success', $create->order_id)->with([
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
