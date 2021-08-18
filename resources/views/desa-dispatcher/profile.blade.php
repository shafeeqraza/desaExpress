
@extends('desa-dispatcher.layouts.app')
@section('content')

    <div class="homemian mt10">
        <div class="container">
            <h1 class="mainHeading">
                My Info
            </h1>
            <div class="row mt5 mb10">
                <div class="col-lg-12">
                    <div class="myInfo position-relative">
                        <div class="hDiv">
                            My Info
                        </div>
                        <div class="dataTablel">
                            <div class="row">
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">First Name</label>
                                    <input type="text" placeholder="Noah Conner">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Last Name</label>
                                    <input type="text" placeholder="Noah Conner">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Email Address</label>
                                    <input type="text" placeholder="NoahConner@yahoo.com">
                                </div>

                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Phone Number</label>
                                    <input type="text" placeholder="123456789">
                                </div>
                                <div class="col-lg-8 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Address</label>
                                    <input type="text" placeholder="57th Street xyz">
                                </div>

                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Zip Code</label>
                                    <input type="text" placeholder="00000">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">City</label>
                                    <input type="text" placeholder="Houston">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">State</label>
                                    <input type="text" placeholder="Texas">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Country</label>
                                    <input type="text" placeholder="USA">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  mt2 ">
                    <div class="col-lg-12 d-flex align-items-center justify-content-end">
                        <button class="closeBtn">Cancel</button>
                        <button class="saveBtn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
