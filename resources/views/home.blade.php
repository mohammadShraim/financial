@extends('layouts.app')

@section('wrapper')
    <div class="card shadow p-3 mb-5 bg-white card-rounded">

        <div class="profile-img">
            <img alt="user" class="profile-pic" width="80px" height="80px"
                 src="{{asset('assets/images/default-image-user.png')}}">
            <h5 style="color: #1c1ca9; font-weight: bold;">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
        </div>

        <div class="row">

            <div class="col-md-4">
                <span class="btn btn-dark btn-circle btn-sm"></span>الرجاء تعبئة كافة البيانات ليتم التواصل معكم
            </div>

            <div class="col-md-4">

                {{\Illuminate\Support\Facades\Auth::user()->PointOfSale->id}}

            </div>

            <div class="col-md-4">
                <select class="select2 m-b-10 select2-multiple col-12"
                        id="inlineFormCustomSelect" data-placeholder="Point Of Sale"
                        name="point_of_sale_id">
                    <option
                        value="{{\Illuminate\Support\Facades\Auth::user()->PointOfSale->id}}" {{!empty(request('point_of_sale_id')) ? request('point_of_sale_id') == \Illuminate\Support\Facades\Auth::user()->PointOfSale->d ? 'selected' : '' : ''}}>{{\Illuminate\Support\Facades\Auth::user()->PointOfSale->name}}</option>
                </select>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="col-md-4">
                {{\Illuminate\Support\Facades\Auth::user()->mobile}}
            </div>

            <div class="col-md-4">
                {{\Illuminate\Support\Facades\Auth::user()->PointOfSale->location}}
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card shadow p-3 mb-5 bg-white card-rounded ">

                <div class="card-body">
                    <a href="{{route('card.search', \Illuminate\Support\Facades\Auth::user()->point_of_sale_id)}}">Refund</a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card shadow p-3 mb-5 bg-white card-rounded ">

                <div class="card-body">
                    @foreach(\App\Helpers\Helper::getStylePointOfSaleStatus() as $status)
                        {!! $status !!}
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card shadow p-3 mb-5 bg-white card-rounded ">

                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script type="text/javascript">
            jQuery(document).ready(function () {
                // For select 2
                $(".select2").select2();
            });
    @endpush
@endsection
