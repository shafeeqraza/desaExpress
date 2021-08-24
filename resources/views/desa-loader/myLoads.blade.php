@extends('desa-loader.layouts.app')
@section('content')
    <div class="loads-mainBox mt10">
        <div class="container mb7">
            <div class="mainHeading">
                <h1>
                    My Loads
                </h1>
            </div>

            <div class="">
                <div class="loads-tblBox">

                    <div class="capsol d-flex justify-content-between mt5">
                        <div class="box1">
                            <div class="subbox1">
                                <label for="">
                                    All Loads
                                </label>
                            </div>
                            <div class="subbox2">
                                <label for="">
                                    {{ count($myLoads) }}
                                </label>
                            </div>
                        </div>
                        <div class="box1">
                            <div class="subbox1">
                                <label for="">
                                    In Progress
                                </label>
                            </div>
                            <div class="subbox2">
                                <label for="">
                                    {{ $progressLength }}
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
                                    {{ $completedDispatch }}
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
                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Contact</button>
                                </li> --}}
                            </ul>

                        </div>
                        <!-- <div class="loads-search position-absolute">
                            <i class="fas fa-search"></i>
                            <input type="search">
                        </div> -->
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active overflow" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <!-- <div class="loads-tablecontainer">
                                <div class="loads-tableheading d-flex">
                                    <div class="th1 th" style="    width: 9%;">
                                        <label>
                                            Loads
                                        </label>
                                    </div>
                                    <div class="th1 th" style="    width: 11%;">
                                        <label>
                                            Pickup Date
                                        </label>
                                    </div>
                                    <div class="th1  th" style="width: 12%;">
                                        <label>
                                            Delivery Date
                                        </label>
                                    </div>
                                    <div class="th1  th" style="    width: 11%;">
                                        <label>
                                            Truck
                                        </label>
                                    </div>
                                    <div class="th1  th" style="    width: 14%;">
                                        <label>
                                            Customer
                                        </label>
                                    </div>
                                    <div class="th1  th" style="width: 12%;">
                                        <label>
                                            From
                                        </label>
                                    </div>
                                    <div class="th1  th" style="    width: 15%;">
                                        <label>
                                            To
                                        </label>
                                    </div>
                                    <div class="th1  th ml1" style="width: 0;">
                                        <label>
                                            status
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="loads-tablecontent mt1 mb1">
                                <div class="loads-tableheading d-flex align-items-center justify-content-between">
                                    <div class="th1 loads-clr" style="    width: 8%;">
                                        <label>
                                            601 123
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            08/02/2021
                                        </label>
                                    </div>
                                    <div class="th1" style="width: 10%;">
                                        <label>
                                            25/02/2021
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            20
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            Desa
                                        </label>
                                    </div>
                                    <div class="th1" style="width: 10%;">
                                        <label>
                                            Fremont, OH
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 12%;">
                                        <label>
                                            Cottage Grove,, TN
                                        </label>
                                    </div>
                                    <div class="th1 ml1 d-flex position-relative" style="width: 17%;">
                                        <span class="d-flex">
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="wrapp">
                                                <button class="saveBtn p010">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="loads-tablecontent mt1 mb1">
                                <div class="loads-tableheading d-flex align-items-center justify-content-between">
                                    <div class="th1 loads-clr" style="    width: 8%;">
                                        <label>
                                            601 123
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            08/02/2021
                                        </label>
                                    </div>
                                    <div class="th1" style="width: 10%;">
                                        <label>
                                            25/02/2021
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            20
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            Desa
                                        </label>
                                    </div>
                                    <div class="th1" style="width: 10%;">
                                        <label>
                                            Fremont, OH
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 12%;">
                                        <label>
                                            Cottage Grove,, TN
                                        </label>
                                    </div>
                                    <div class="th1 ml1 d-flex position-relative" style="width: 17%;">
                                        <span class="d-flex">
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="wrapp">
                                                <button class="saveBtn p010">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="loads-tablecontent mt1 mb1">
                                <div class="loads-tableheading d-flex align-items-center justify-content-between">
                                    <div class="th1 loads-clr" style="    width: 8%;">
                                        <label>
                                            601 123
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            08/02/2021
                                        </label>
                                    </div>
                                    <div class="th1" style="width: 10%;">
                                        <label>
                                            25/02/2021
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            20
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 10%;">
                                        <label>
                                            Desa
                                        </label>
                                    </div>
                                    <div class="th1" style="width: 10%;">
                                        <label>
                                            Fremont, OH
                                        </label>
                                    </div>
                                    <div class="th1" style="    width: 12%;">
                                        <label>
                                            Cottage Grove,, TN
                                        </label>
                                    </div>
                                    <div class="th1 ml1 d-flex position-relative" style="width: 17%;">
                                        <span class="d-flex">
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="wrapp">
                                                <button class="saveBtn p010">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                            <table class="table myTable">
                                <thead>
                                    <tr>
                                        <th>Loads</th>
                                        <th>Pickup Date</th>
                                        <th>Delivery Date</th>
                                        <th>Truck</th>
                                        <th>Customer</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($myLoads as $dispatch)
                                    <tr>
                                        <td>{{ $dispatch->custom_trip_number }}</td>
                                        <td>{{ $dispatch->pickups[0]->pickup_date }}</td>
                                        <td>{{ $dispatch->deliveries[0]->delivery_date }}</td>
                                        <td>{{ $dispatch->truck_number }}</td>
                                        <td>{{ $dispatch->customer_name }}</td>
                                        <td>{{ $dispatch->pickups[0]->shipper }}</td>
                                        <td>{{ $dispatch->deliveries[0]->consignee }}</td>
                                        <td>
                                            <div class="wrapp">
                                                <form action="{{ route("desa.loader.change.status", $dispatch->id) }}" method="post" >
                                                    @csrf
                                                    @method("patch")
                                                    <select name="status" class="closeBtn p010 w-100 myLoadStatus">
                                                        <option @if($dispatch->status === "In Progress") selected @endif>In Progress</option>
                                                        <option @if($dispatch->status === "Completed") selected @endif>Completed</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="th1 ml2 d-flex position-relative">
                                                <span class="d-flex w-100">
                                                    <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                                    <a href="{{ route("desa.loader.show", $dispatch->id) }}"> <button class="closeBtn">
                                                            View
                                                        </button>
                                                    </a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>601 123</td>
                                        <td>08/02/2021</td>
                                        <td>25/02/2021</td>
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010 w-100">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010 w-100">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>

                        {{-- <div class="tab-pane fade overflow" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <table class="table myTable">
                                <thead>
                                    <tr>
                                        <th>Loads</th>
                                        <th>Pickup Date</th>
                                        <th>Delivery Date</th>
                                        <th>Truck</th>
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
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010 w-100">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010 w-100">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010 w-100">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                                        <td>20</td>
                                        <td>Desa</td>
                                        <td>Fremont, OH</td>
                                        <td>Cottage Grove,, TN</td>
                                        <td>
                                            <div class="wrapp">
                                                <select name="" id="" class="closeBtn p010 w-100">
                                                    <option>In Progress</option>
                                                    <option>Completed</option>
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="wrapp">
                                                <button class="saveBtn p010 w-100">
                                                    Action
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <div class="selecter flex-column">
                                                    <div class="delete">
                                                        <a href="./view-dispatch.php">
                                                            <i class="fa fa-eye"></i>
                                                            <span>View</span>
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
                        </div> --}}


                    </div>


                </div>
            </div>

        </div>
    </div>

    <script>

        @if (Session::get('success'))
            swal({
                title: "Desa Loader",
                text: "Your data has been Updated",
                icon: "success",
            });
        @endif

        const inputs = document.querySelectorAll(".myLoadStatus")

        inputs.forEach((input) => {
            input.addEventListener("change", e => {
                e.target.parentNode.submit();
                // document.getElementById("myLoadStatusChangeForm").submit();
            });
        })
    </script>
@endsection
