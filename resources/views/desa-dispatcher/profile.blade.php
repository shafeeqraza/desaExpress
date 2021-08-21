@extends('desa-dispatcher.layouts.app')
@section('content')

<div class="homemian mt10">
    <div class="container">
        <h1 class="mainHeading">
            My Info
        </h1>
        <form id="" action="{{route('update_profile')}}" method="post">
            @csrf
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
                                    <input id="hidden" type="hidden" name="id" value="{{$userdata->id}}">
                                    <input type="text" id="first_name" name="first_name" placeholder="First Name"
                                        value="{{$userdata->first_name}}">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Last Name</label>
                                    <input type="text" name="last_name" placeholder="Last Name"
                                        value="{{$userdata->last_name}}">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Email Address</label>
                                    <input type="email" name="email" placeholder="Email" value="{{$userdata->email}}"
                                        readonly>
                                </div>

                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Phone Number</label>
                                    <input type="number" name="phone_number" placeholder="Phone Number"
                                        value="{{$userdata->phone_number}}">
                                </div>
                                <div class="col-lg-8 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Address</label>
                                    <input type="text" name="address" placeholder="Address"
                                        value="{{$userdata->address}}">
                                </div>

                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Zip Code</label>
                                    <input type="number" name="zip_code" placeholder="Zip Code"
                                        value="{{$userdata->zip_code}}">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">City</label>
                                    <input type="text" placeholder="City" name="city" value="{{$userdata->city}}">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">State</label>
                                    <input type="text" placeholder="State" name="state" value="{{$userdata->state}}">
                                </div>
                                <div class="col-lg-4 d-flex flex-column mt2">
                                    <label for="" class="inpLabel">Country</label>
                                    <input type="text" placeholder="Country" name="country"
                                        value="{{$userdata->country}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  mt2 ">
                    <div class="col-lg-12 d-flex align-items-center justify-content-end">
                        {{-- <button class="closeBtn">Cancel</button> --}}
                        <button class="saveBtn">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    @if(Session::get('success'))
    swal({
        title: "Desa Dispatcher",
        text: "Your data has been Updated",
        icon: "success",
    });
    @endif

</script>
@endsection
