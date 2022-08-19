@extends('layouts.vertical', ["page_title"=> "Apex Column Charts"])

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
                        <li class="breadcrumb-item active">Column Charts</li>
                    </ol>
                </div>
                <h4 class="page-title">Column Charts</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Column Chart</h4>
                    <div dir="ltr">
                        <div id="basic-column" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c"></div>
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
                    <h4 class="header-title mb-3">Column Chart with Datalabels</h4>
                    <div dir="ltr">
                        <div id="datalabels-column" class="apex-charts" data-colors="#727cf5"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Stacked Column Chart</h4>
                    <div dir="ltr">
                        <div id="stacked-column" class="apex-charts" data-colors="#39afd1,#ffbc00,#e3eaef"></div>
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
                    <h4 class="header-title">100% Stacked Column Chart</h4>
                    <div dir="ltr">
                        <div id="full-stacked-column" class="apex-charts" data-colors="#39afd1,#0acf97,#e3eaef"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Column Chart with rotated labels & Annotations</h4>
                    <div dir="ltr">
                        <div id="rotate-labels-column" class="apex-charts" data-colors="#fa5c7c"></div>
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
                    <h4 class="header-title">Column Chart with negative values</h4>
                    <div dir="ltr">
                        <div id="negative-value-column" class="apex-charts" data-colors="#727cf5"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Distributed Column Chart</h4>
                    <div dir="ltr">
                        <div id="distributed-column" class="apex-charts" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#ffbc00,#39afd1,#e3eaef,#313a46"></div>
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
                    <h4 class="header-title">Range Column Chart</h4>
                    <div dir="ltr">
                        <div id="range-column" class="apex-charts" data-colors="#0acf97,#39afd1"></div>
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
<script src="{{asset('assets/js/pages/demo.apex-column.js')}}"></script>
<!-- end demo js-->
@endsection