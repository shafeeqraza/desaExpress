@extends('desa-dispatcher.layouts.app')
@section('content')
    <div class="loads-mainBox mt10">
        <div class="container mb7">
            <div class="mainHeading d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-start">
                    <h1>
                        My Dispatches
                    </h1>
                </div>
                <a href="{{ route("desa.dispatcher.dispatches.create") }}" class="tNone d-flex align-items-end">
                    <button class="saveBtn d-flex align-items-center justify-content-between f16">
                        <i class="fa fa-plus-circle"></i>
                        Add Dispatch
                    </button>
                </a>
            </div>

            <div class="">
                <div class="loads-tblBox">

                    <div class="capsol d-flex mt5">
                        <div class="box1">
                            <div class="subbox1">
                                <label for="">
                                    All Loads
                                </label>
                            </div>
                            <div class="subbox2">
                                <label for="">
                                    1024
                                </label>
                            </div>
                        </div>
                        <div class="box1">
                            <div class="subbox1">
                                <label for="">
                                    Booked
                                </label>
                            </div>
                            <div class="subbox2">
                                <label for="">
                                    524
                                </label>
                            </div>
                        </div>
                        <div class="box1">
                            <div class="subbox1">
                                <label for="">
                                    Pending
                                </label>
                            </div>
                            <div class="subbox2">
                                <label for="">
                                    500
                                </label>
                            </div>
                        </div>
                        <div class="box1">
                            <div class="subbox1">
                                <label for="">
                                    Completed
                                </label>
                            </div>
                            <div class="subbox2">
                                <label for="">
                                    500
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="loads-subheadingBox loads-subheadingBox1 position-relative ">
                        <div class="tabheading">
                            <!-- tabs nav -->
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Home</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Contact</button>
                                </li>
                            </ul>

                        </div>
                        <!-- <div class="loads-search position-absolute">
                            <i class="fas fa-search"></i>
                            <input type="search" placeholder="Search">
                        </div> -->
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active overflow" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <table class="table myTable">
                                <thead>
                                    <tr>
                                        <th>Loads</th>
                                        <th>Pickup Date</th>
                                        <th>Delivery Date</th>
                                        <th>Truck</th>
                                        <th>Driver</th>
                                        <th>Customer</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>601 123</td>
                                        <td>08/02/2021</td>
                                        <td>25/02/2021</td>
                                        <td>Gomez</td>
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <button class="closeBtn dnoo">
                                                Booked
                                            </button>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.show", 1) }}">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.edit", 1) }}">
                                                            <i class="fa fa-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="">
                                                            <i class="fa fa-trash"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>601 123</td>
                                        <td>08/02/2021</td>
                                        <td>25/02/2021</td>
                                        <td>Gomez</td>
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <button class="closeBtn dnoo">
                                                Booked
                                            </button>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.show", 1) }}">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.edit", 1) }}">
                                                            <i class="fa fa-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="">
                                                            <i class="fa fa-trash"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade overflow" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <table class="table myTable">
                                <thead>
                                    <tr>
                                        <th>Loads</th>
                                        <th>Pickup Date</th>
                                        <th>Delivery Date</th>
                                        <th>Truck</th>
                                        <th>Driver</th>
                                        <th>Customer</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>601 123</td>
                                        <td>08/02/2021</td>
                                        <td>25/02/2021</td>
                                        <td>Gomez</td>
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td style="width:auto">Cottage Grove,, TN</td>
                                        <td>
                                            <button class="closeBtn dnoo">
                                                Booked
                                            </button>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.show", 1) }}">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.edit", 1) }}">
                                                            <i class="fa fa-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="">
                                                            <i class="fa fa-trash"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>601 123</td>
                                        <td>08/02/2021</td>
                                        <td>25/02/2021</td>
                                        <td>Gomez</td>
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <button class="closeBtn dnoo">
                                                Booked
                                            </button>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.show", 1) }}">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.edit", 1) }}">
                                                            <i class="fa fa-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="">
                                                            <i class="fa fa-trash"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade overflow" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <table class="table myTable">
                                <thead>
                                    <tr>
                                        <th>Loads</th>
                                        <th>Pickup Date</th>
                                        <th>Delivery Date</th>
                                        <th>Truck</th>
                                        <th>Driver</th>
                                        <th>Customer</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>601 123</td>
                                        <td>08/02/2021</td>
                                        <td>25/02/2021</td>
                                        <td>Gomez</td>
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td style="width:auto">Cottage Grove,, TN</td>
                                        <td>
                                            <button class="closeBtn dnoo">
                                                Booked
                                            </button>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.show", 1) }}">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.edit", 1) }}">
                                                            <i class="fa fa-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="">
                                                            <i class="fa fa-trash"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>601 123</td>
                                        <td>08/02/2021</td>
                                        <td>25/02/2021</td>
                                        <td>Gomez</td>
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <button class="closeBtn dnoo">
                                                Booked
                                            </button>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.show", 1) }}">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="{{ route("desa.dispatcher.dispatches.edit", 1) }}">
                                                            <i class="fa fa-edit"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </div>
                                                    <div class="delete">
                                                        <a href="">
                                                            <i class="fa fa-trash"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
