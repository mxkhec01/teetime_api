@extends('layouts.vertical', ["page_title"=> "Apex Candlestick Charts"])

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>
                        <li class="breadcrumb-item active">Candlestick Charts</li>
                    </ol>
                </div>
                <h4 class="page-title">Candlestick Charts</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Simple Candlestick Chart</h4>
                    <div dir="ltr">
                        <div id="simple-candlestick" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Combo Candlestick Chart</h4>
                    <div dir="ltr">
                        <div id="combo-candlestick" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                        <div id="combo-bar-candlestick" class="apex-charts" data-colors="#727cf5,#ffbc00"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->


</div> <!-- container -->
@endsection

@section('script-bottom')
<!-- third party js -->
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
<script src="{{asset('assets/js/pages/demo.apex-candlestick.js')}}"></script>
<!-- end demo js-->
@endsection