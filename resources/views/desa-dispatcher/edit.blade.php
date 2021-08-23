@extends('desa-dispatcher.layouts.app')
@section('content')
    <div class="homemian dispatch-main mt10">
        <div class="container">
            <h1 class="mainHeading mb7">
                Edit Dispatch
            </h1>
            <div class="subheading">
                <h5>Basic</h5>
            </div>
            <form action="{{ route('desa.dispatcher.dispatches.update', $detailsedit->id) }}" method="post">
                @csrf
                @method("patch")
                <div class="basic-card mb2">
                    <div class="basic-card-head mt3">
                        <div class="row mb2">
                            <div class="col-8">
                                <label for="ice-cream-choice">Custom Trip Number</label>
                                <input type="text" name="tripNumber" value="{{ $detailsedit->custom_trip_number }}">
                            </div>
                        </div>
                        <h5>Drivers</h5>
                    </div>
                    <div class="row mt1">
                        <div class="col-4">
                            <div class="row">
                                <label for="ice-cream-choice">Driver</label>
                                <input placeholder="Driver" name="driverUsername" class="fuel-dropdown" list="driver"
                                    id="driver-dropdown" value="{{ $detailsedit->driver_username }}" />
                                <datalist id="driver">
                                    <option value="Andre Bulger">
                                    <option value="Dash">
                                    <option value="Mario Lechuga">
                                    <option value="Martinez">
                                    <option value="Mustafa Shakir">
                                </datalist>
                            </div>

                        </div>
                    </div>
                    <div class="basic-card-head mt3">
                        <h5>Truck</h5>
                    </div>
                    <div class="row mt1">
                        <div class="col-lg-4">
                            <label for="">Truck</label>
                            <input type="number" name="truckNumber" id="" placeholder="TruckNumber"
                                value="{{ $detailsedit->truck_number }}">
                        </div>
                        <div class="col-lg-4">
                            <label for="">Trailer</label>
                            <input type="number" name="trailer" id="" placeholder="28"
                                value="{{ $detailsedit->trailer }}">

                        </div>
                        <div class="col-lg-4">
                            <label for="">Odometer</label>
                            <input type="text" name="odometer" id="" placeholder="12"
                                value="{{ $detailsedit->odometer }}">

                        </div>
                    </div>
                    <div class="basic-card-head mt3">
                        <h5>Customer</h5>
                    </div>
                    <div class="row mt2">
                        <div class="col-lg-4">
                            <label for="">Customer Name</label>
                            <input type="text" name="customerName" placeholder="Customer Name"
                                value="{{ $detailsedit->customer_name }}">
                        </div>
                    </div>
                </div>
                <div class="subheading">
                    <h5>Stops</h5>
                </div>
                <div class="basic-card mb2" id="pickup-card">
                    <div class="basic-card-head mt3">
                        <h5>Pickups</h5>
                    </div>
                    {{-- pickups --}}
                    @foreach ($detailsedit->pickups as $item)
                        <div class="row mt1">
                            <div class="col-lg-4">
                                <label for="">Shipper</label>
                                <input type="text" name="pickupShipper[]" placeholder="Shipper" value="{{ $item->shipper }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Pick Up Date</label>
                                <input type="date" name="pickupDate[]" id="" value="{{ $item->pickup_date }}">

                            </div>
                            <div class="col-lg-4">
                                <label for="">BOL</label>
                                <input type="text" name="pickupBol[]" id="" placeholder="BOL" value="{{ $item->bol }}">

                            </div>
                        </div>
                        <div class="row mt2">
                            <div class="col-lg-8 d-flex flex-column mb2">
                                <label for="">Instructions</label>
                                <textarea name="pickupInstructions[]" id="" cols="30" rows="5"
                                    placeholder="Henry">{{ $item->instructions }}</textarea>
                            </div>
                            <div class="col-lg-8 d-flex flex-column mb2">
                                <label for="">Customer Required Info (Included On Invoice)</label>
                                <textarea name="pickupCustomerInfo[]" id="" cols="30" rows="5"
                                    placeholder="Henry">{{ $item->customer_required_info }}</textarea>
                            </div>

                            <div class="row mt1">
                                <div class="col-lg-4">
                                    <label for="">Weight</label>
                                    <input type="number" placeholder="Henry" name="pickupWeight[]" value="{{ $item->weight }}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Quantity</label>
                                    <input type="number" name="pickupQuantity[]" id="" value="{{ $item->quantity }}">

                                </div>
                                <div class="col-lg-4 d-flex flex-column">
                                    <label for="types">Type</label>
                                    <select id="types" name="pickupType[]">
                                        <option value="">Select Type</option>
                                        <option @if ($item->type === 'Boxes') selected @endif>Boxes </option>
                                    </select>
                                </div>
                                <div class="col-lg-8 d-flex flex-column mt2">
                                    <label for="">Customer Required Info (Included On Invoice)</label>
                                    <textarea name="pickupNotes[]" id="" cols="30" rows="5"
                                        placeholder="Henry">{{ $item->customer_required_info }}</textarea>
                                </div>
                                <div class="pickup-next-sec">
                                </div>
                                @if ($loop->last)
                                    <div class="row mt3">
                                        <div class="col-lg-6">
                                            <button id="pickup-btn" type="button"><i class="fas fa-plus-circle"></i>Add
                                                Another
                                                Pickup</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <hr>

                    <div id="routing-stop-card" class="row mt1">
                        <div class="basic-card-head mt3 mb2">
                            <h5>Routing Stop <span>(Optional)</span></h5>
                        </div>
                        {{-- routing --}}
                        @foreach ($detailsedit->routes as $value)
                            <div class="col-lg-4">
                                <label for="">Routing Stop</label>
                                <input type="text" placeholder="Henry" name="routeRoutingStop[]"
                                    value="{{ $value->route_stop }}">

                            </div>
                            <div class="col-lg-4">
                                <label for="">Routing Stop Date</label>
                                <input type="date" name="routeRoutingStopDate[]" id=""
                                    value="{{ $value->route_stop_date }}">

                            </div>
                            <div class="col-lg-8 d-flex flex-column mt2">
                                <label for="">Instructions</label>
                                <textarea name="routeInstructions[]" id="" cols="30" rows="5"
                                    placeholder="Instructions">{{ $value->instructions }}</textarea>
                            </div>
                            <div class="col-lg-8 d-flex flex-column mt2">
                                <label for="">Notes</label>
                                <textarea name="routeNotes[]" id="" cols="30" rows="5"
                                    placeholder="Notes">{{ $value->notes }}</textarea>
                            </div>
                            <div class="routing-stop-next-sec">
                            </div>
                        @endforeach
                        <div class="row mt3">
                            <div class="col-lg-6">
                                <button id="routing-stop-btn" type="button"><i class="fas fa-plus-circle"></i>Add Another
                                    Routing
                                    Stop</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt1" id="delivery-card">
                        <div class="basic-card-head mt3 mb2">
                            <h5>Delivery</h5>
                        </div>
                        {{-- delivery --}}
                        @foreach ($detailsedit->deliveries as $delivery)
                            <div class="col-lg-4">
                                <label for="">Consignee</label>
                                <input type="text" placeholder="Henry" name="deliveryConsignee[]"
                                    value="{{ $delivery->consignee }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Delivery Date</label>
                                <input type="date" name="deliveryDate[]" id="" value="{{ $delivery->delivery_date }}">
                            </div>
                            <div class="col-lg-8 d-flex flex-column mt2">
                                <label for="">Instructions</label>
                                <textarea name="deliveryInstructions[]" id="" cols="30" rows="5"
                                    placeholder="Instructions">{{ $delivery->instructions }}</textarea>
                            </div>
                            <div class="another-delivery-sec">
                            </div>
                            @if ($loop->last)
                                <div class="row mt3">
                                    <div class="col-lg-6">
                                        <button id="delivery-btn" type="button"><i class="fas fa-plus-circle"></i>Add
                                            Another
                                            Delivery</button>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="subheading">
                    <h5>Fees / Charges</h5>
                </div>
                <div class="basic-card mb2">
                    <div class="basic-card-head mt3">
                        <h5>Primary Fee</h5>
                    </div>
                    <div class="row mt1">
                        <div class="col-lg-4">
                            <label for="">Primary Fee</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="primaryFee"
                                    value="{{ $detailsedit->primary_fee }}">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                            <label for="types">Primary Fee Type</label>
                            <select id="types" name="primaryFeeType">
                                <option @if ($detailsedit->primary_fee_type === 'Flat Free') selected @endif>
                                    Flat Free
                                </option>
                                <option @if ($detailsedit->primary_fee_type === 'Boxes') selected @endif>
                                    Boxes
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="basic-card-head mt3">
                        <h5>Accessory Fees</h5>
                    </div>
                    <div class="row mt2">
                        <div class="col-lg-4">
                            <label for="">Additional</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="additional"
                                    value="{{ $detailsedit->additional }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Detention</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="detention"
                                    value="{{ $detailsedit->detention }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Lumper</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="lumper" value="{{ $detailsedit->lumper }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Stop Off</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="stopOff"
                                    value="{{ $detailsedit->stop_off }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="">Tarp Fee</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="tarpFee"
                                    value="{{ $detailsedit->tarp_fee }}">
                            </div>
                        </div>
                    </div>
                    <div class="basic-card-head mt3">
                        <h5>Fuel Surcharge Fee</h5>
                    </div>
                    <div class="row mt2">
                        <div class="col-lg-4">
                            <label for="">FSC Amount</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="fscAmount"
                                    value="{{ $detailsedit->fsc_amount }}">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                            <label for="types">FSC Amount Type</label>
                            <select id="types" name="fscAmountType">
                                <option @if($detailsedit->fsc_amount_type === "Flat Fee") selected @endif>
                                    Flat Fee
                                </option>
                                <option  @if($detailsedit->fsc_amount_type === "Per Mile") selected @endif>
                                    Per Mile
                                </option>
                                <option  @if($detailsedit->fsc_amount_type === "Percent") selected @endif>
                                    Percent
                                </option>
                            </select>
                        </div>
                        {{-- <div class="col-lg-4">
                        <label for="">FSC Amount Type</label>
                        <div class="dollar-input">
                            <label for=""><i class="fas fa-dollar-sign"></i></label>
                            <input type="text" placeholder="0.00" name="fscAmountType"
                                value="{{$detailsedit->fsc_amount_type}}">
                        </div>
                    </div> --}}
                    </div>
                    <div class="basic-card-head mt3">
                        <h5>Invoice Advance</h5>
                    </div>
                    <div class="row mt2">
                        <div class="col-lg-4">
                            <label for="">Invoice Advance</label>
                            <div class="dollar-input">
                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                <input type="number" placeholder="0.00" name="invoiceAdvance"
                                    value="{{ $detailsedit->invoice_advance }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subheading">
                    <h5>Fuel Expenses</h5>
                </div>
                <div class="basic-card mb2" id=fuel-expense-card>
                    <div class="row mt1">
                        {{-- <div class="col-lg-6">
                            <div class="add-fuel-sec">
                                @if ($detailsedit->fuel_expense)
                                    <div class="added-fuel-expense-card">
                                        <div class="row">
                                            <label for="fuel-expense">Expense Category</label>
                                            <div class="wrapp">

                                                <select class="fuel-dropdown" name="fuelExpenseType"
                                                    id="added-fuel-expense">
                                                    <option value="Fuel" @if ($detailsedit->fuel_expense_type === 'Fuel') selected @endif>Fuel</option>
                                                    <option value="Refer Fuel" @if ($detailsedit->fuel_expense_type === 'Refer Fuel') selected @endif>Refer Fuel</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div>
                                        <div class="mb2 mt1">
                                            <label for="">Amount</label>
                                            <div class="dollar-input">
                                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                                <input type="text" placeholder="0.00"
                                                    value="{{ $detailsedit->fuel_expense }}" name="fuelExpense">
                                            </div>
                                        </div>

                                        <button type="button" id="remove-fuel-expense-btn"><i
                                                class="fas fa-minus-circle"></i>Remove Fuel
                                            Expenses</button>
                                    </div>
                                @else
                                    <button type="button" id="add-fuel-btn"><i class="fas fa-plus-circle"></i>Add Fuel
                                        Expenses</button>
                                @endif
                            </div>
                        </div> --}}
                        <div class="col-lg-6">


                            <div class="add-fuel-sec">
                            </div>

                            <button id="add-fuel-btn" type="button"><i class="fas fa-plus-circle"></i>Add Fuel Expenses</button>
                        </div>
                    </div>
                </div>

                <div class="subheading">
                    <h5>Truck Expenses</h5>
                </div>
                <div class="basic-card mb2" id="truck-expense-card">
                    <div class="row mt1">
                        {{-- <div class="col-lg-6">
                            @if ($detailsedit->truck_expense)
                                <div class="add-truck-expense-sec">
                                    <div class="added-truck-expense-card">
                                        <div class="mb2 mt1">
                                            <label for="">Amount</label>
                                            <div class="dollar-input">
                                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                                <input type="text" placeholder="0.00" name="truckExpense" value="{{ $detailsedit->truck_expense }}">
                                            </div>
                                        </div>
                                        <button type="button" id="remove-truck-expense-btn">
                                            <i class="fas fa-minus-circle"></i>Remove Truck Expenses
                                        </button>
                                    </div>
                                </div>
                            @else
                            <div class="add-truck-expense-sec" id="truck-expense-card"></div>
                                <button type="button" id="add-truck-expense-btn" type="button"><i class="fas fa-plus-circle"></i>Add Truck
                                    Expenses</button>
                            @endif
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="add-truck-expense-sec">

                            </div>
                            <button id="add-truck-expense-btn" type="button"><i class="fas fa-plus-circle"></i>Add Truck Expenses</button>
                        </div>
                    </div>
                </div>
                <div class="subheading">
                    <h5>Refer Fuel Expenses</h5>
                </div>
                <div class="basic-card mb2" id="add-refer-fuel-card">
                    <div class="row mt1">
                        {{-- <div class="col-lg-6">
                            @if ($detailsedit->truck_expense)
                                <div class="add-refer-fuel-card-sec">
                                    <div class="added-refer-fuel-expense-card">
                                        <div class="mb2 mt1">
                                            <label for="">Amount</label>
                                            <div class="dollar-input">
                                                <label for=""><i class="fas fa-dollar-sign"></i></label>
                                                <input type="text" placeholder="0.00" name="referFuelAmount"
                                                    value="{{ $detailsedit->truck_expense }}">
                                            </div>
                                        </div>
                                        <button type="button" id="remove-refer-fuel-expense-btn">
                                            <i class="fas fa-minus-circle"></i>Remove Refer Fuel Expenses
                                        </button>
                                    </div>
                                </div>
                            @else
                                <div class="add-refer-fuel-card-sec" id="add-refer-fuel-card "></div>
                                <button type="button" id="add-refer-fuel-btn" type="button">
                                    <i class="fas fa-plus-circle"></i>Add Refer Fuel Expenses
                                </button>
                            @endif
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="add-refer-fuel-card-sec">

                            </div>
                            <button id="add-refer-fuel-btn" type="button"><i class="fas fa-plus-circle"></i>Add Refer Fuel Expenses</button>
                        </div>
                    </div>
                </div>
                <div class="row  mt2 mb10">
                    <div class="col-lg-12 d-flex align-items-center justify-content-end">
                        {{-- <button class="closeBtn">Cancel</button> --}}
                        <button class="saveBtn">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="{{ asset('assets/dispatcher/js/editDispatch.js') }}"></script>
    <script>
        @if (Session::get('success'))
            swal({
                title: "Desa Dispatcher",
                text: "Your data has been Updated",
                icon: "success",
            });
        @endif

            var data = {!! json_encode($detailsedit) !!};
            console.log(data);
            if(data.truck_expense != null){
                localStorage.setItem('truck_expense',data.truck_expense)
            }
            if(data.refer_fuel_expense != null){
                localStorage.setItem('refer_fuel_expense',data.refer_fuel_expense)
            }
            if(data.fuel_expense != null){
                localStorage.setItem('fuel_expense',data.fuel_expense)
            }

    </script>
@endsection

