@extends('layouts.app')

@section('content')
	<div class="container mt-4 mb-4">
		 <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-4 text-secondary">Certificados</h1>
        </div>

		<ul class="list-group">

			@forelse ($certificados as $certificado)
				<li class="list-group-item border-0 mb-2 lead shadow-sm">
					<a class="text-secondary d-flex justify-content-between align-items-center"
							href="{{ route('certificado.show', $certificado->id) }}">
						<span class="lead d-block">{{ $certificado->nombreComercial }}</span>
						<span class="lead d-block">{{ $certificado->riesgo->nombre }}</span>
						<span class="text-black-50 d-block">{{ $certificado->propietario }}</span>
						<span class="text-black-50 d-block">{{ $certificado->fechaCaducidad }}</span>
					</a>


				</li>

			@empty
            	<li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
			@endforelse

		<div class="overflow-auto mt-2">
			{{ $certificados->links() }}
		</div>

		</ul>
	</div>
@endsection