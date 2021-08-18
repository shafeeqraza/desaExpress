@extends('desa-loader.layouts.app')
@section('content')

    <div class="loads-mainBox mt10">
        <div class="container">
            <div class="mainHeading">
                <h1>
                    Loads
                </h1>
            </div>
            <div class="loads-subheadingBox position-relative ">
                <div class="tabheading">
                    <h5>All Loads</h5>
                </div>
                <!-- <div class="loads-search position-absolute">
                    <i class="fas fa-search"></i>
                    <input type="search">
                </div> -->
            </div>

            <div class="overflow mb7">
                <!-- <div class="loads-tblBox">
                    <div class="loads-tablecontainer">
                        <div class="loads-tableheading d-flex ">
                            <div class="th1  th">
                                <label>
                                    Loads
                                </label>
                            </div>
                            <div class="th1  th">
                                <label>
                                    Pickup Date
                                </label>
                            </div>
                            <div class="th1  th">
                                <label>
                                    Delivery Date
                                </label>
                            </div>
                            <div class="th1  th">
                                <label>
                                    Truck
                                </label>
                            </div>
                            <div class="th1  th">
                                <label>
                                    Customer
                                </label>
                            </div>
                            <div class="th1  th">
                                <label>
                                    From
                                </label>
                            </div>
                            <div class="th1  th">
                                <label>
                                    To
                                </label>
                            </div>
                            <div class="th1  th">
                                <label>

                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="loads-tablecontent mb1">
                        <div class="loads-tableheading d-flex align-items-center">
                            <div class="th1 loads-clr">
                                <label>
                                    601 123
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    08/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    25/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    20
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Desa
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Fremont, OH
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Cottage Grove,, TN
                                </label>
                            </div>
                            <div class="th1 ml2 d-flex position-relative">
                                <span class="d-flex">
                                    <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                    <a href="{{ route("desa.loader.show", 1) }}"> <button class="closeBtn">
                                            View
                                        </button>
                                    </a>
                                </span>
                                <a href="">
                                    <button class="saveBtn">
                                        Book
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="loads-tablecontent mt1 mb1">
                        <div class="loads-tableheading d-flex align-items-center">
                            <div class="th1 loads-clr">
                                <label>
                                    601 123
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    08/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    25/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    20
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Desa
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Fremont, OH
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Cottage Grove,, TN
                                </label>
                            </div>
                            <div class="th1 ml2 d-flex position-relative">
                                <span class="d-flex">
                                    <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                    <a href="{{ route("desa.loader.show", 1) }}"> <button class="closeBtn">
                                            View
                                        </button>
                                    </a>
                                </span>
                                <a href=".">
                                    <button class="saveBtn">
                                        Book
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="loads-tablecontent mt1 mb1">
                        <div class="loads-tableheading d-flex align-items-center">
                            <div class="th1 loads-clr">
                                <label>
                                    601 123
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    08/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    25/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    20
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Desa
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Fremont, OH
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Cottage Grove,, TN
                                </label>
                            </div>
                            <div class="th1 ml2 d-flex position-relative">
                                <span class="d-flex">
                                    <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                    <a href="{{ route("desa.loader.show", 1) }}"> <button class="closeBtn">
                                            View
                                        </button>
                                    </a>
                                </span>
                                <a href="">
                                    <button class="saveBtn">
                                        Book
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="loads-tablecontent mt1 mb1">
                        <div class="loads-tableheading d-flex align-items-center">
                            <div class="th1 loads-clr">
                                <label>
                                    601 123
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    08/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    25/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    20
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Desa
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Fremont, OH
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Cottage Grove,, TN
                                </label>
                            </div>
                            <div class="th1 ml2 d-flex position-relative">
                                <span class="d-flex">
                                    <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                    <a href="{{ route("desa.loader.show", 1) }}"> <button class="closeBtn">
                                            View
                                        </button>
                                    </a>
                                </span>
                                <a href="">
                                    <button class="saveBtn">
                                        Book
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="loads-tablecontent mt1 mb1">
                        <div class="loads-tableheading d-flex align-items-center">
                            <div class="th1 loads-clr">
                                <label>
                                    601 123
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    08/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    25/02/2021
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    20
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Desa
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Fremont, OH
                                </label>
                            </div>
                            <div class="th1">
                                <label>
                                    Cottage Grove,, TN
                                </label>
                            </div>
                            <div class="th1 ml2 d-flex position-relative">
                                <span class="d-flex">
                                    <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                    <a href="{{ route("desa.loader.show", 1) }}"> <button class="closeBtn">
                                            View
                                        </button>
                                    </a>
                                </span>
                                <a href="">
                                    <button class="saveBtn">
                                        Book
                                    </button>
                                </a>
                            </div>
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
                            <th></th>
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
                                <div class="th1 ml2 d-flex position-relative">
                                    <span class="d-flex w-100">
                                        <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                        <a href="{{ route("desa.loader.show", 1) }}"> <button class="closeBtn">
                                                View
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="th1 ml2 d-flex position-relative">
                                    <a href="" class="w-100">
                                        <button class="saveBtn">
                                            Book
                                        </button>
                                    </a>
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
                                <div class="th1 ml2 d-flex position-relative">
                                    <span class="d-flex w-100">
                                        <i class="far fa-eye loads-btnIcon position-absolute"></i>
                                        <a href="{{ route("desa.loader.show", 1) }}"> <button class="closeBtn">
                                                View
                                            </button>
                                        </a>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="th1 ml2 d-flex position-relative">
                                    <a href="" class="w-100">
                                        <button class="saveBtn">
                                            Book
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
