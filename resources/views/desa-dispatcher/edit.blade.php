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
        <div class="basic-card mb2">
            <div class="basic-card-head mt3">
                <div class="row mb2">
                    <div class="col-8">
                        <label for="ice-cream-choice">Custom Trip Number</label>
                        <input type="text">
                    </div>
                </div>
                <h5>Drivers</h5>
            </div>
            <div class="row mt1">
                <div class="col-4">
                    <div class="row">
                        <label for="ice-cream-choice">Driver</label>
                        <input placeholder="Driver" class="fuel-dropdown" list="driver" id="driver-dropdown" />
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
                    <input type="number" name="" id="" placeholder="12">
                </div>
                <div class="col-lg-4">
                    <label for="">Trailer</label>
                    <input type="number" name="" id="" placeholder="28">

                </div>
                <div class="col-lg-4">
                    <label for="">Odometer</label>
                    <input type="text" name="" id="" placeholder="12">

                </div>
            </div>
            <div class="basic-card-head mt3">
                <h5>Customer</h5>
            </div>
            <div class="row mt2">
                <div class="col-lg-4">
                    <label for="">Customer Name</label>
                    <input type="text" placeholder="12">
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
            <div class="row mt1">
                <div class="col-lg-4">
                    <label for="">Shipper</label>
                    <input type="text" placeholder="Henry">
                </div>
                <div class="col-lg-4">
                    <label for="">Pick Up Date</label>
                    <input type="date" name="" id="">

                </div>
                <div class="col-lg-4">
                    <label for="">BOL</label>
                    <input type="text" name="" id="" placeholder="12">

                </div>
            </div>
            <div class="row mt2">
                <div class="col-lg-8 d-flex flex-column mb2">
                    <label for="">Instructions</label>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Henry"></textarea>
                </div>
                <div class="col-lg-8 d-flex flex-column mb2">
                    <label for="">Customer Required Info (Included On Invoice)</label>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Henry"></textarea>
                </div>
                <div class="row mt1">
                    <div class="col-lg-4">
                        <label for="">Weight</label>
                        <input type="text" placeholder="Henry">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Quantity</label>
                        <input type="date" name="" id="">

                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                        <label for="types">Type</label>
                        <select id="types">
                            <option value="Boxes">Boxes</option>
                        </select>
                    </div>
                    <div class="col-lg-8 d-flex flex-column mt2">
                        <label for="">Customer Required Info (Included On Invoice)</label>
                        <textarea name="" id="" cols="30" rows="5" placeholder="Henry"></textarea>
                    </div>
                    <div class="pickup-next-sec">
                    </div>
                    <div class="row mt3">
                        <div class="col-lg-6">
                            <button id="pickup-btn"><i class="fas fa-plus-circle"></i>Add Another Pickup</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div id="routing-stop-card" class="row mt1">
                <div class="basic-card-head mt3 mb2">
                    <h5>Routing Stop <span>(Optional)</span></h5>
                </div>
                <div class="col-lg-4">
                    <label for="">Routing Stop</label>
                    <input type="text" placeholder="Henry">
                </div>
                <div class="col-lg-4">
                    <label for="">Routing Stop Date</label>
                    <input type="date" name="" id="">

                </div>
                <div class="col-lg-8 d-flex flex-column mt2">
                    <label for="">Instructions</label>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Instructions"></textarea>
                </div>
                <div class="col-lg-8 d-flex flex-column mt2">
                    <label for="">Notes</label>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Notes"></textarea>
                </div>
                <div class="routing-stop-next-sec">
                </div>
                <div class="row mt3">
                    <div class="col-lg-6">
                        <button id="routing-stop-btn"><i class="fas fa-plus-circle"></i>Add Another Routing Stop</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt1" id="delivery-card">
                <div class="basic-card-head mt3 mb2">
                    <h5>Delivery</h5>
                </div>
                <div class="col-lg-4">
                    <label for="">Consignee</label>
                    <input type="text" placeholder="Henry">
                </div>
                <div class="col-lg-4">
                    <label for="">Delivery Date</label>
                    <input type="date" name="" id="">
                </div>
                <div class="col-lg-8 d-flex flex-column mt2">
                    <label for="">Instructions</label>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Instructions"></textarea>
                </div>
                <div class="another-delivery-sec">

                </div>
                <div class="row mt3">
                    <div class="col-lg-6">
                        <button id="delivery-btn"><i class="fas fa-plus-circle"></i>Add Another Delivery</button>
                    </div>
                </div>
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
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">
                    <label for="types">Primary Fee Type</label>
                    <select id="types">
                        <option value="Boxes">Flat Free</option>
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
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">Detention</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">Lumper</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">Stop Off</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">Tarp Fee</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="text" placeholder="0.00">
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
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">FSC Amount Type</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
            </div>
            <div class="basic-card-head mt3">
                <h5>Invoice Advance</h5>
            </div>
            <div class="row mt2">
                <div class="col-lg-4">
                    <label for="">Invoice Advance</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="text" placeholder="0.00">
                    </div>
                </div>
            </div>
        </div>
        <div class="subheading">
            <h5>Fuel Expenses</h5>
        </div>
        <div class="basic-card mb2" id=fuel-expense-card>
            <div class="row mt1">
                <div class="col-lg-6">


                    <div class="add-fuel-sec">
                    </div>

                    <button id="add-fuel-btn"><i class="fas fa-plus-circle"></i>Add Fuel Expenses</button>
                </div>
            </div>
        </div>
        <div class="subheading">
            <h5>Truck Expenses</h5>
        </div>
        <div class="basic-card mb2" id="truck-expense-card">
            <div class="row mt1">
                <div class="col-lg-6">
                    <div class="add-truck-expense-sec">

                    </div>
                    <button id="add-truck-expense-btn"><i class="fas fa-plus-circle"></i>Add Truck Expenses</button>
                </div>
            </div>
        </div>
        <div class="subheading">
            <h5>Refer Fuel Expenses</h5>
        </div>
        <div class="basic-card mb2" id="add-refer-fuel-card">
            <div class="row mt1">
                <div class="col-lg-6">
                    <div class="add-refer-fuel-card-sec">

                    </div>
                    <button id="add-refer-fuel-btn"><i class="fas fa-plus-circle"></i>Add Refer Fuel Expenses</button>
                </div>
            </div>
        </div>
        <div class="row  mt2 mb10">
            <div class="col-lg-12 d-flex align-items-center justify-content-end">
                <button class="closeBtn">Cancel</button>
                <button class="saveBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset("assets/dispatcher/js/editDispatch.js") }}"></script>
@endsection
