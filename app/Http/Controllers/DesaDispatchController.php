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
use  Illuminate\Support\Facades\DB;

use function Psy\debug;

class DesaDispatchController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $details = DesaDispatch::where('dispatcher_id', $id)->with('deliveries', 'routes', 'pickups')
            ->orderBy('custom_trip_number', 'desc')->get();
        // count booked number show
        $booked_data = DesaDispatch::where('dispatcher_id', $id)->sum('booked');

        return view("desa-dispatcher.index", compact('details', 'booked_data'));
    }

    public function profile()
    {
        $id = Auth::id();
        $userdata = User::where('id', $id)->first();
        // dd($userdatas);
        return view("desa-dispatcher.profile", compact('userdata'));
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
        $dispatch->fuel_expense_type = $request->fuelCategory;
        $dispatch->refer_fuel_expense = $request->referFuelAmount;
        $dispatch->save();

        // saving pickups;
        for ($i = 0; $i < count($request->pickupDate); $i++) {
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
        for ($i = 0; $i < count($request->routeRoutingStop); $i++) {
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
        for ($i = 0; $i < count($request->deliveryConsignee); $i++) {
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

    // uzair work
    public function show(Request $request, $id)
    {
        $id = DesaDispatch::find($id);
        $detailshow  = DesaDispatch::where('id', $id->id)->with('deliveries', 'routes', 'pickups')->first();
        return view("desa-dispatcher.show", compact('detailshow'));
    }

    public function map($id)
    {
        return view("desa-dispatcher.map");
    }

    // uzair work
    public function edit($id)
    {
        $id = DesaDispatch::find($id);
        $detailsedit  = DesaDispatch::where('id', $id->id)->with('deliveries', 'routes', 'pickups')->first();
        // return $detailsedit;
        return view("desa-dispatcher.edit", compact('detailsedit'));
    }

    // uzair work
    public function update(Request $request, $id)
    {
        // return $request->all();

        $dispatch = DesaDispatch::find($id);
        // return $dispatch->pickups;
        $dispatch->custom_trip_number = $request->tripNumber;
        $dispatch->driver_username = $request->driverUsername;
        $dispatch->dispatcher_id = auth()->id();
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
        $dispatch->fuel_expense = $request->fuelExpense;
        $dispatch->fuel_expense_type = $request->fuelCategory;
        $dispatch->refer_fuel_expense = $request->referFuelAmount;
        $dispatch->save();

        foreach ($dispatch->routes as $route) {
            $route->delete();
        }

        foreach ($dispatch->deliveries as $delivery) {
            $delivery->delete();
        }

        foreach($dispatch->pickups as $pickup) {
            $pickup->delete();
        }

        // saving routes
        for ($i = 0; $i < count($request->routeRoutingStop); $i++) {
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
        for ($i = 0; $i < count($request->deliveryConsignee); $i++) {
            $delivery = new Delivery();
            $delivery->deliveryable_id = $dispatch->id;
            $delivery->deliveryable_type = "App\Models\DesaDispatch";
            $delivery->consignee = $request->deliveryConsignee[$i];
            $delivery->delivery_date = $request->deliveryDate[$i];
            $delivery->instructions = $request->deliveryInstructions[$i];
            $delivery->save();
        }

        // saving pickups;
        for ($i = 0; $i < count($request->pickupDate); $i++) {
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

        Session::flash('success', 'Your Data has been saved!');
        return redirect()->back();
    }

    // uzair work
    public function updateProfile(Request $request)
    {
        $updateprofile = User::find(auth()->id());
        $updateprofile->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'country' => $request->country,
            'state' => $request->state,
        ]);
        Session::flash('success', 'This is a message!');
        return redirect()->back();
    }

    // public function destroy($id)
    // {
    //     // dd($id);
    // }

    // uzair work
    public function destroy($id)
    {
        $dispatch = DesaDispatch::find($id);
        foreach ($dispatch->routes as $route) {
            $route->delete();
        }

        foreach ($dispatch->deliveries as $delivery) {
            $delivery->delete();
        }

        foreach($dispatch->pickups as $pickup) {
            $pickup->delete();
        }

        $dispatch->delete();

        Session::flash('success', 'This is a message!');
        return redirect()->back();
        // DB::table('desa_dispatches')->where('id', $id)->delete();
        // DB::table('deliveries')->where('deliveryable_id', $id)->delete();
        // DB::table('pickups')->where('pickupable_id', $id)->delete();
        // DB::table('routes')->where('routeable_id', $id)->delete();
        // Session::flash('success', 'This is a message!');
        // return redirect()->back();
    }
}
