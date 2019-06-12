@extends('layouts.template')
@section('title-page')
    Panel

@stop

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Panel</a>

        </li>
        <li class="breadcrumb-item">
            <a href="#">Principal</a>

        </li>

    </ol>

    <h1>Barberia el Spot</h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="card-body cs-style-3">
                <div class="grid cs-style-3" style="width: 24rem;">
				    <figure class="figure">
					    <img class="card-img-top" src="{{asset('images/inventario.png')}}" alt="Card image cap">
					    <figcaption class="figure-caption">
						    <h3>Iventario</h3>  
						    <a class="hpv" href="">Ver</a>
					    </figcaption>
				    </figure>	
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-body cs-style-3">
                <div class="grid cs-style-3" style="width: 24rem;">
				    <figure class="figure">
					    <img class="card-img-top" src="{{asset('images/venta.png')}}" alt="Card image cap">
					    <figcaption class="figure-caption">
						    <h3>Ventas</h3>  
						    <a class="hpv" href="">Ver</a>
					    </figcaption>
				    </figure>	
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-body cs-style-3">
                <div class="grid cs-style-3" style="width: 24rem;">
				    <figure class="figure">
					    <img class="card-img-top" src="{{asset('images/reporte.png')}}" alt="Card image cap">
					    <figcaption class="figure-caption">
						    <h3>Reportes</h3>  
						    <a class="hpv" href="">Ver</a>
					    </figcaption>
				    </figure>	
                </div>
            </div>
        </div>
    </div>
        
@endsection

@section('script')

<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script src="{{ asset('js/toucheffects.js') }}"></script>

@endsection
