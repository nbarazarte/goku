@extends('app2')

@section('content')


							            <div class="container">
							                <div class="text-align-center">
							                    <h1 class=""><i class="fa fa-chain-broken" aria-hidden="true"></i> Error 404: Página no encontrada</h1>
							                    Parece que ha habido un error con la página que estabas buscando.<br>
							                    Es posible que la página ya no este disponible, o que la dirección no exista.<br>
							                    <h1><i class="fa fa-frown-o"></i></h1>
							                    
							                    <p>
							                        <a href="{{ route('home') }}">
							                            <button type="button" class="btn btn-warning">Volver al inicio</button>
							                        </a>
							                    </p>
							
							                </div>
							                <div class="spacer-30"></div>
							            </div>

@endsection