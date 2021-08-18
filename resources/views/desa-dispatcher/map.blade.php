@extends('desa-dispatcher.layouts.app')
@section("content")
<div class="homemian mt10">
    <div class="container">
            <div class="map-head">
                <h1 class="mainHeading">
                    Map
                </h1>
            </div>
            <div class="col-lg-12 d-flex  justify-content-end mb2">
                <a href="{{ route("desa.dispatcher.dispatches.show", 1) }}"><button class="saveBtn">Back</button></a>
                <a href="{{ route("desa.dispatcher.dispatches.edit", 1) }}">
                    <button class="saveBtn">Edit Dispatch</button>
                </a>
            </div>
        <div class="map-content mb5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d26361414.278060596!2d-113.7584948!3d36.2408038!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1628196110576!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection
