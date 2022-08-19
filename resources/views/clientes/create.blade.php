@extends('layouts.vertical', ["page_title"=> "Nuevo Cliente"])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Torton</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
                            <li class="breadcrumb-item active">Crear Cliente</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Nuevo Cliente</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="container mt-5">
            <form method="POST" action="getMiles">
                @csrf
                <input type="text" name="pick" id="pick">

            </form>
        </div>

    </div> <!-- container -->

@endsection
@section('scripts')
    <script>
        function cities() {

            var options = {
                componentRestrictions: {country: "mx"}
            };
            var pickInput = document.getElementById('pick');
            var pickAutocomplete = new google.maps.places.Autocomplete(pickInput, options);
        }
    </script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=cities">

    </script>

@endsection



