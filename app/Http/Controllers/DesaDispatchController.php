<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\DesaDispatch;
use App\Models\Pickup;
use App\Models\Route;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DesaDispatchController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $details = DesaDispatch::where('dispatcher_id',$id)->with('deliveries','routes','pickups')
        ->orderBy('custom_trip_number','desc')->get();
        // dd($details);

        // count booked number show
        $booked_data = DesaDispatch::where('dispatcher_id',$id)->sum('booked');

        return view("desa-dispatcher.index",compact('details','booked_data'));
    }

    public function profile()
    {
        $id = Auth::id();
        $userdata = User::where('id',$id)->first();
        // dd($userdatas);
        return view("desa-dispatcher.profile" ,compact('userdata'));
    }


    public function dispatches()
    {
        return view("desa-dispatcher.dispatches");
    }

    public function create()
    {
        return view("desa-dispatcher.create");
    }


    public function store(Request $request)
    {
        // dd($request->all());
        // dd( count($request->pickupDate));


        $dispatch = new DesaDispatch;
        $dispatch->custom_trip_number = $request->tripNumber;
        $dispatch->driver_username = $request->driverUsername;
        $dispatch->dispatcher_id = auth()->id();
        $dispatch->fuel_expense_type = $request->fuelExpenseType;
        $dispatch->truck_number = $request->truckNumber;
        $dispatch->trailer = $request->trailer;
        $dispatch->odometer = $request->odometer;
        $dispatch->customer_name = $request->customerName;
        $dispatch->primary_fee = $request->primaryFee;
        $dispatch->primary_fee_type = $request->primaryFeeType;
        $dispatch->additional = $request->additional;
        $dispatch->detention = $request->detention;
        $dispatch->lumper = $request->lumper;
        $dispatch->stop_off = $request->stopOff;
        $dispatch->tarp_fee = $request->tarpFee;
        $dispatch->fsc_amount = $request->fscAmount;
        $dispatch->fsc_amount_type = $request->fscAmountType;
        $dispatch->invoice_advance = $request->invoiceAdvance;
        $dispatch->truck_expense = $request->truckExpense;
        $dispatch->fuel_expense = $request->truckExpense;
        $dispatch->refer_fuel_expense = $request->referFuelAmount;
        $dispatch->save();

        // saving pickups;
        for($i = 0; $i < count($request->pickupDate); $i++) {
            $pickup =  new Pickup();
            $pickup->pickupable_id = $dispatch->id;
            $pickup->pickupable_type = "App\Models\DesaDispatch";
            $pickup->shipper = $request->pickupShipper[$i];
            $pickup->pickup_date = $request->pickupDate[$i];
            $pickup->bol = $request->pickupBol[$i];
            $pickup->instructions = $request->pickupInstructions[$i];
            $pickup->customer_required_info = $request->pickupCustomerInfo[$i];
            $pickup->weight = $request->pickupWeight[$i];
            $pickup->quantity = $request->pickupQuantity[$i];
            $pickup->type = $request->pickupType[$i];
            $pickup->notes = $request->pickupNotes[$i];
            $pickup->save();
        }
        // saving routes
        for($i = 0; $i < count($request->routeRoutingStop); $i++) {
            $route = new Route();
            $route->routeable_id = $dispatch->id;
            $route->routeable_type = "App\Models\DesaDispatch";
            $route->route_stop = $request->routeRoutingStop[$i];
            $route->route_stop_date = $request->routeRoutingStopDate[$i];
            $route->instructions = $request->routeInstructions[$i];
            $route->notes = $request->routeNotes[$i];
            $route->save();
        }
        // saving delivery;
        for($i = 0; $i < count($request->deliveryConsignee); $i++) {
            $delivery = new Delivery();
            $delivery->deliveryable_id = $dispatch->id;
            $delivery->deliveryable_type = "App\Models\DesaDispatch";
            $delivery->consignee = $request->deliveryConsignee[$i];
            $delivery->delivery_date = $request->deliveryDate[$i];
            $delivery->instructions = $request->deliveryInstructions[$i];
            $delivery->save();
        }
        Session::flash('success', 'This is a message!');
        return redirect()->route("desa.dispatcher.dispatches")->with(["status" => "Your Dispatch has been added"]);

    }


    public function show(Request $request,$id)
    {
        return view("desa-dispatcher.show");
    }

    public function map($id)
    {
        return view("desa-dispatcher.map");
    }

    public function edit($id)
    {
        // dd($request->all());
        $id = DesaDispatch::find($id);
        $detailsedit  = DesaDispatch::where('id',$id->id)->with('deliveries','routes','pickups')->first();
        return view("desa-dispatcher.edit",compact('detailsedit'));
    }

    public function updatedata(Request $request){

        $id = $request->id;
        $dispatch = DesaDispatch::find($id);
        $dispatch->update([
            'custom_trip_number'=> $request->tripNumber,
            'driver_username'=> $request->driverUsername,
            'dispatcher_id'=> auth()->id(),
            'fuel_expense_type'=> $request->fuelExpenseType,
            'truck_number'=> $request->truckNumber,
            'trailer'=> $request->trailer,
            'odometer'=> $request->odometer,
            'customer_name'=> $request->customerName,
            'primary_fee'=> $request->primaryFee,
            'primary_fee_type'=> $request->primaryFeeType,
            'additional'=> $request->additional,
            'detention'=> $request->detention,
            'lumper'=> $request->lumper,
            'stop_off'=> $request->stopOff,
            'tarp_fee'=> $request->tarpFee,
            'fsc_amount'=>$request->fscAmount,
            'fsc_amount_type'=>$request->fscAmountType,
            'invoice_advance'=>$request->invoiceAdvance,
            'truck_expense'=>$request->truckExpense,
            'refer_fuel_expense'=>$request->referFuelAmount,
        ]);

        // saving pickups;
        $id = $request->id;
        $pickup = Pickup::find($id);
        for($i = 0; $i < count($request->pickupDate); $i++) {
            $pickup =  new Pickup();
            $pickup->pickupable_id = $dispatch->id;
            $pickup->pickupable_type = "App\Models\DesaDispatch";
            $pickup->shipper = $request->pickupShipper[$i];
            $pickup->pickup_date = $request->pickupDate[$i];
            $pickup->bol = $request->pickupBol[$i];
            $pickup->instructions = $request->pickupInstructions[$i];
            $pickup->customer_required_info = $request->pickupCustomerInfo[$i];
            $pickup->weight = $request->pickupWeight[$i];
            $pickup->quantity = $request->pickupQuantity[$i];
            $pickup->type = $request->pickupType[$i];
            $pickup->notes = $request->pickupNotes[$i];
            $pickup->update();
        }
        // saving routes
        for($i = 0; $i < count($request->routeRoutingStop); $i++) {
            $route = new Route();
            $route->routeable_id = $dispatch->id;
            $route->routeable_type = "App\Models\DesaDispatch";
            $route->route_stop = $request->routeRoutingStop[$i];
            $route->route_stop_date = $request->routeRoutingStopDate[$i];
            $route->instructions = $request->routeInstructions[$i];
            $route->notes = $request->routeNotes[$i];
            $route->update();
        }
        // saving delivery;
        for($i = 0; $i < count($request->deliveryConsignee); $i++) {
            $delivery = new Delivery();
            $delivery->deliveryable_id = $dispatch->id;
            $delivery->deliveryable_type = "App\Models\DesaDispatch";
            $delivery->consignee = $request->deliveryConsignee[$i];
            $delivery->delivery_date = $request->deliveryDate[$i];
            $delivery->instructions = $request->deliveryInstructions[$i];
            $delivery->update();
        }

        Session::flash('success', 'This is a message!');
        return redirect()->back();
        // return view("desa-dispatcher.edit");
    }



    public function update(Request $request)
    {
        $id = $request->id;
        $updateprofile = User::find($id);
        $updateprofile->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'zip_code' => $request->zip_code,
                'city' => $request->city,
                'country' => $request->country,
                'state'=>$request->state,
        ]);
        Session::flash('success', 'This is a message!');
         return redirect()->back();
    }
    public function destroy($id)
    {
        // dd($id);
    }
     public function destroy_data($id)
    {
        dd($id);
        # code...
    }
}
