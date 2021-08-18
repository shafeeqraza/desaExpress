@extends("desa-loader.layouts.app")
@section("content")
<div class="homemian mt10">
    <div class="container">
        <div class="view-dispatch-head mb2">
            <div class="main-heading-sec">
                <h1 class="mainHeading">
                    Desa Load
                </h1>
                <h5>Load # 489-789</h5>
            </div>
            <div class="main-head-btns">
                <div class="col-lg-12 d-flex justify-content-end actionsView">
                    <a href="{{ route("desa.loader.map", 1) }}"><button class="saveBtn">Map</button></a>

                    <a style="margin-left: 10px;" >
                    <button class="closeBtn">
                    Delete
                    </button>
                    </a>
                </div>

            </div>
        </div>
        <div class="view-dispatch-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="subheading">
                        <h5>Basic</h5>
                    </div>
                    <div class="basic-card mb2">
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Load #:</label>
                            <h5>489-789</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between align-items-center">
                            <label for="">Invoice #: &nbsp;&nbsp; <span class="invoiceName"></span> </label>
                            <input type="file" hidden id="invoice-input">
                            <label for="invoice-input" class="dispatch-load-btn">Upload Invoice</label>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Bol</label>
                            <h5>489-789</h5>
                        </div>

                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">1 Driver:</label>
                            <h5>Bulger</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Truck / Trailer</label>
                            <h5>20 / 28</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Pickup Date</label>
                            <h5>07/28/2021</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Delivery Date</label>
                            <h5>07/28/2021</h5>
                        </div>
                        <div class="load mt2 load-from d-flex">
                            <label for="">From</label>
                            <h5> HALEX HAHA68
                                7715 HOMESTEAD DRIVE,, HAMILTON, IN</h5>
                        </div>
                        <div class="load mt2 load-from d-flex">
                            <label for="">To</label>
                            <h5>HOME DEPOT IB XD05
                                500 GATEWAY BLVD,, Monroe, OH</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Miles</label>
                            <h5>191.8</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Deadhead Miles</label>
                            <h5>147.8</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Customer Required Info</label>
                            <!-- <h5>07/28/2021</h5> -->
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Note</label>
                            <!-- <h5>07/28/2021</h5> -->
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Weight</label>
                            <h5>0.0</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subheading">
                        <h5>Fees</h5>
                    </div>
                    <div class="basic-card mb2">
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Primary Fee</label>
                            <!-- <h5>489-789</h5> -->
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Flat Fee</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Fuel Surcharge Fee</label>
                            <!-- <h5>Flat Fee</h5> -->
                        </div>

                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Flat Fee:</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Total Charge</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Invoice Advance</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Weight</label>
                            <h5>0.0</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="subheading">
                        <h5>Settlement Details</h5>
                    </div>
                    <div class="basic-card mb2">
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Driver Andre Bulger</label>
                            <!-- <h5>489-789</h5> -->
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Driver Base Pay</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Fuel Surcharge Fee</label>
                            <h5>$0.00</h5>
                        </div>

                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Flat Fee</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Total Charge</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Invoice Advance</label>
                            <h5>$0.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subheading">
                        <h5>Profit/Loss</h5>
                    </div>
                    <div class="basic-card mb2">
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Revenue</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Profit</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Revenue Per Mile</label>
                            <h5>$0.00</h5>
                        </div>

                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Expense Per Mile</label>
                            <h5>$0.00</h5>
                        </div>
                        <div class="load mt2 d-flex justify-content-between">
                            <label for="">Profit Per Mile</label>
                            <h5>$0.00</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-heading-sec">
                <h5>Miles by state</h5>
            </div>

            <div class="tables mb2">
                <div class="subheading">
                    <h5>Loaded Miles</h5>
                </div>
                <div class="table-overflow">
                    <div class="basic-card table-con mb2">
                        <div class="row mt1 mb1">
                            <div class="col-2">
                                <h5>State</h5>
                            </div>
                            <div class="col-2">
                                <h5>Total Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Toll Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Non-Toll Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Manual Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Total Miles</h5>
                            </div>
                        </div>
                        <div class="row mt1">
                            <div class="col-2"><label>IN</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                        <div class="row mt1">
                            <div class="col-2"><label>OH</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                        <div class="row mt1">
                            <div class="col-2"><label>US</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                        <div class="row mt1">
                            <div class="col-2"><label>TOTAL</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tables mb2">
                <div class="subheading">
                    <h5>Empty Miles</h5>
                </div>
                <div class="table-overflow">
                    <div class="basic-card table-con  mb2">
                        <div class="row mt1 mb1">
                            <div class="col-2">
                                <h5>State</h5>
                            </div>
                            <div class="col-2">
                                <h5>Total Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Toll Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Non-Toll Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Manual Miles</h5>
                            </div>
                            <div class="col-2">
                                <h5>Total Miles</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt1">
                            <div class="col-2"><label>IN</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                        <hr>
                        <div class="row mt1">
                            <div class="col-2"><label>OH</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                        <hr>
                        <div class="row mt1">
                            <div class="col-2"><label>US</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                        <hr>
                        <div class="row mt1">
                            <div class="col-2"><label>TOTAL</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                            <div class="col-2"><label>0.0</label> </div>
                            <div class="col-2"><label>53.6</label> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-heading-sec mb2">
                <h5>Truck Route</h5>
            </div>

            <div class="tables mb2">
                <div class="subheading">
                    <h5>Loaded Miles</h5>
                </div>
                <div class="table-overflow">
                    <div class="basic-card table-con mb2">
                        <div class="row mt1">
                            <div class="col">
                                <h5>No</h5>
                            </div>
                            <div class="col">
                                <h5>Status</h5>
                            </div>
                            <div class="col">
                                <h5>PcMiler Routed Address</h5>
                            </div>
                            <div class="col">
                                <h5>Entered Address</h5>
                            </div>
                            <div class="col">
                                <h5>Arrive At</h5>
                            </div>
                            <div class="col">
                                <h5>Miles</h5>
                            </div>
                            <div class="col">
                                <h5>Tolls</h5>
                            </div>
                        </div>
                        <div class="row mt2">
                            <div class="col">
                                <label>1</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                            <div class="col">
                                <label>Munster, IN 46321</label>
                            </div>
                            <div class="col">
                                <label>PEPSI COLA GENERAL BOTTLERS 9300 CALUMET AVE,
                                    Munster, IN</label>
                            </div>
                            <div class="col">
                                <label>07/27/2021</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                            <div class="col">
                                <label>53.6</label>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt2">
                            <div class="col">
                                <label>2</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                            <div class="col">
                                <label>Munster, IN 46321</label>
                            </div>
                            <div class="col">
                                <label>PEPSI COLA GENERAL BOTTLERS 9300 CALUMET AVE,
                                    Munster, IN</label>
                            </div>
                            <div class="col">
                                <label>07/28/2021</label>
                            </div>
                            <div class="col">
                                <label>147.8mi</label>
                            </div>
                            <div class="col">
                                <label>$0.00</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 add-note-sec mb2">

        </div>
        <div class="col-lg-12 d-flex align-items-center justify-content-start mb10">
            <button id="add-note" class="saveBtn">Add Note</button>
        </div>
    </div>
</div>
<script>
    $("#add-note").on('click', () => {
        $(".add-note-sec").append(`
        <div class="note-added">
        <textarea placeholder="Add Note" name="" class="note-text-area" rows="10"></textarea>
        <div class="col-lg-12 d-flex align-items-center justify-content-start mt1 mb2">
                <button id="delete-note" class="saveBtn">Delete Note</button>
            </div>
            </div>
        `)
        $("#delete-note").click(function() {
            $(".note-added").remove()
            $('#add-note').show();
        })
    });

    $('#add-note').click(function() {
        $(this).hide();
    });
</script>
@endsection
