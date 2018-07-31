@extends('voyager::master')
<head>

</head>

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.(!is_null($dataTypeContent->getKey()) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.(!is_null($dataTypeContent->getKey()) ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                 <div class="col-md-9">
                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="@if(!is_null($dataTypeContent->getKey())){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
                            method="POST" enctype="multipart/form-data">
                       <!-- PUT Method if we are editing -->
                        @if(!is_null($dataTypeContent->getKey()))
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}
                       

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{(!is_null($dataTypeContent->getKey()) ? 'editRows' : 'addRows' )};
                            @endphp

                            @foreach($dataTypeRows as $row)
                                <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $options = json_decode($row->details);
                                    $display_options = isset($options->display) ? $options->display : NULL;
                                @endphp
                                @if ($options && isset($options->legend) && isset($options->legend->text))
                                    <legend class="text-{{$options->legend->align or 'center'}}" style="background-color: {{$options->legend->bgcolor or '#f0f0f0'}};padding: 5px;">{{$options->legend->text}}</legend>
                                @endif
                                @if ($options && isset($options->formfields_custom))
                                    @include('voyager::formfields.custom.' . $options->formfields_custom)
                                @else
                                    <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width or 12 }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                        {{ $row->slugify }}
                                        <label for="name">{{ $row->display_name }}</label>
                                        @include('voyager::multilingual.input-hidden-bread-edit-add')
                                        @if($row->type == 'relationship')
                                            @include('voyager::formfields.relationship')
                                        @else
                                            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                        @endif

                                        @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                            {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach

                        <div class="form-group col-md-12">
                        <label>Categories</label>
                        <ul style="list-style-type: none;padding-left: 0">
                             @foreach($allCategories as $Category)
                        
                        <li ><label ><input value=" {{ $Category->id }} " type="checkbox" name="category[]" style="margin-right:5px;" 
                            {{ $CategoriesForLaundry->contains($Category)? 'checked' : '' }}>{{ $Category->name }}</label></li>
                        @endforeach
                        </ul>
                      
                        </div>
                           
                            <div class="form-group  col-md-12" >
                             <style type="text/css">
                                .wrapper{
                                    align-content:center;
                                }
                            </style>
                             
                                <label for="name">latitude</label>
                                 <input  type="text" class="form-control" name="latitude"   placeholder="latitude" id="latitude" value="@if(isset($laundry->latitude)){{ old('latitude', $laundry->latitude) }}@else{{old('latitude')}}@endif"></>
                           
                                 <label for="name">longitude</label>
                                 <input id="longitude" type="text" class="form-control" name="longitude"   placeholder="longitude" value="@if(isset($laundry->longitude)){{ old('longitude', $laundry->longitude) }}@else{{old('longitude')}}@endif"></>
                                
                    <a href="#" class="wrapper btn btn-info btn-sm " data-toggle="modal" data-target="#myModal"  >
                       <span  class="glyphicon glyphicon-map-marker "   ></span>
                      </a>
                            </div>

                           
       
    </div><!-- panel-body -->
             
                        <!-- <input onsubmit="return false;" type=image src="/images/map-marker.png"  width="48" height="48" data-toggle="modal" data-target="#myModal"></> -->
                        
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>
                 </div>
             </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
    <form>
        <div class="modal-dialog">
        
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}
                    </button>
                </div>
            </div>

        </div>
        </form>
    </div>

      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Google Maps</h4>
                </div>
                <div class="modal-body">

                    <div id="map_canvas" style="width:auto; height: 500px;"></div>
                    <div class="form-group  col-md-2">
                   <label>latitide</label> <input id="lati" value="" placeholder="latitude" >
                    <label>longitude</label><input id="long" value="" placeholder="longitude">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="latlng" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')

    <script>

        var params = {}
        var $image

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.type != 'date' || elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', function (e) {
                e.preventDefault();
                $image = $(this).siblings('img');

                params = {
                    slug:   '{{ $dataType->slug }}',
                    image:  $image.data('image'),
                    id:     $image.data('id'),
                    field:  $image.parent().data('field-name'),
                    _token: '{{ csrf_token() }}'
                }

                $('.confirm_delete_name').text($image.data('image'));
                $('#confirm_delete_modal').modal('show');
            });

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $image.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing image.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script type="text/javascript">
    function initializeMap() {
        var mapOptions = {
            center: new google.maps.LatLng(39.850855, -8.51219),
            zoom: 7
            
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
          mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(39.850855, -8.51219),
            map:map,
            draggable:true
        });
        marker.setMap(map);

        google.maps.event.addListener(marker,'dragend',
            function()
            {
                var lat = marker.getPosition().lat();
                 var lng = marker.getPosition().lng();
                 $('#lati').val(lat);
                 $('#long').val(lng);
            });
    }

    //show map on modal
    $('#myModal').on('shown.bs.modal', function () {
        initializeMap();
    });

 
</script>
<script>
   $(document).ready(function(){
        $('#latlng').click(function(){
           
            $('#latitude').val($('#lati').val());
           
            $('#longitude').val($('#long').val());


        });
    });
  
</script>
 <script src="https://maps.googleapis.com/maps/api/js?v=3&callback=initMap&libraries=places&key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4"
    async defer>
        </script>
@stop
