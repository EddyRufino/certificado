@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="text-center font-weight-bold lead">MUNICIPALIDAD DISTRITAL DE CASTILLA</h2>
		<h4 class="text-justify font-weight-bold lead">CERTIFICADO DE INSPECCIÓN TÉCNICA DE SEGURIDAD EN EDIFICACIONES PARA ESTABLECIMIENTOS OBJETO DE INSPECCIÓN CLASIFICADOS CON NIVEL DE RIESGO ALTO O RIESGO MUY ALTO SEGÚN LA MATRIZ DE RIESGOS.</h4>
		<form method="POST" action="{{ route('certificado.store') }}">
			@csrf
            <div class="form-group text-center mt-4">
                <div class="form-group">
					<label class="lead" for="numCertificado">Nª&nbsp;</label>
                    <input class="col-md-4 bg-light shadow-sm @error('numCertificado') is-invalid @else border-0 @enderror"
                            name="numCertificado"
                            type="number"
                            placeholder="Ingresa el número..."
                            value="{{ old('numCertificado') }}">

                    @error('numCertificado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <span class="text-justify lead">
            	El Órgano Ejecutante de la Municipalidad Distrital de Castilla, en cumplimiento de lo establecido en el D.S. N° 002-2018-PCM, ha realizado la Inspección Técnica en Seguridad en Edificaciones al Establecimiento Objeto de Inspección.
            </span>

            <div class="form-group text-center mt-4">
                <div class="form-group">
                    <input class="col-md-10 bg-light shadow-sm @error('nombreComercial') is-invalid @else border-0 @enderror"
                            name="nombreComercial"
                            placeholder="Ingresa el nombre comercial..."
                            value="{{ old('nombreComercial') }}">

                    @error('nombreComercial')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <span class="d-block text-muted text-center">
				Nombre Comercial
            </span>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead" for="ubicacion">Ubicado en:&nbsp;</label>
                    <input class="col-md-10 bg-light shadow-sm @error('ubicacion') is-invalid @else border-0 @enderror"
                            name="ubicacion"
                            placeholder="Ingresa Calle, Av. ,Jr., Lote, Mz, Urb."
                            value="{{ old('ubicacion') }}">

                    @error('ubicacion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <span class="d-block text-muted text-center">
				Calle, Av. ,Jr., Lote, Mz, Urb.
            </span>

			<div class="form-group">
            	<label class="lead mt-3">Distrito:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASTILLA</label>
            </div>
            <div class="form-group">
	            <label class="lead">Provincia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PIURA, Departamento PIURA</label>
            </div>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead">Solicitado por:&nbsp;</label>
                    <input class="col-md-10 bg-light shadow-sm @error('propietario') is-invalid @else border-0 @enderror"
                            name="propietario"
                            placeholder="Ingresa nombre del propietario..."
                            value="{{ old('propietario') }}">

                    @error('propietario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <span class="d-block text-muted text-center">
				Nombre del propietario
            </span>

            <p class="text-justify lead mt-4">
            	El que suscribe <strong>CERTIFICA</strong> que el Establecimiento Objeto de Inspección antes señalado <strong>CUMPLE CON LAS CONDICIONES DE SEGURIDAD</strong>
            </p>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead">Capacidad máxima:&nbsp;</label>
                    <input class="col-md-4 bg-light shadow-sm @error('capacidadNum') is-invalid @else border-0 @enderror"
                            name="capacidadNum"
                            placeholder="Capacidad en números..."
                            value="{{ old('capacidadNum') }}">

                    @error('capacidadNum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input class="col-md-4 bg-light shadow-sm @error('capacidadLetra') is-invalid @else border-0 @enderror"
                            name="capacidadLetra"
                            placeholder="Capacidad en letras..."
                            value="{{ old('capacidadLetra') }}">

                    @error('capacidadLetra')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<label class="lead">personas.</label>
                </div>
            </div>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead">Giro o actividad:&nbsp;</label>
                    <input class="col-md-10 bg-light shadow-sm @error('actividad') is-invalid @else border-0 @enderror"
                            name="actividad"
                            placeholder="Ingresa nombre de la actividad..."
                            value="{{ old('actividad') }}">

                    @error('actividad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead">Expediente Nª:&nbsp;</label>
                    <input class="col-md-4 bg-light shadow-sm @error('numExpediente') is-invalid @else border-0 @enderror"
                            name="numExpediente"
                            placeholder="Ingresa el número del expediente..."
                            value="{{ old('numExpediente') }}">

                    @error('numExpediente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="lead">Resolución Nª:&nbsp;</label>
                    <input class="col-md-4 bg-light shadow-sm @error('numResolucion') is-invalid @else border-0 @enderror"
                            name="numResolucion"
                            placeholder="Ingresa el número de la resolución..."
                            value="{{ old('numResolucion') }}">

                    @error('numResolucion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
            	<label class="lead">Vigencia 2 años&nbsp;</label>
            	<select name="riesgo_id">
					@foreach ($riesgos as $riesgo)
						<option value="{{ $riesgo->id }}">{{ $riesgo->nombre }}</option>
					@endforeach


            	</select>
            </div>

            <div class="row">
            	<div class="col-md-5"></div>
            	<div class="col-md-5">
					<div class="form-group">
		            	<label class="lead">LUGAR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASTILLA</label>
		            </div>

					<div class="form-group">
		            	<label class="lead">Fecha de Expedición:&nbsp;</label>
		            	<input class="col-md-6 bg-light shadow-sm @error('fechaExpedicion') is-invalid @else border-0 @enderror pull-right datepicker"
		                            name="fechaExpedicion"
		                            id="datepicker"
		                            placeholder="Ingresa la fecha Expedicion..."
		                            value="{{ old('fechaExpedicion') }}">

	                    @error('fechaExpedicion')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
					</div>

					<div class="form-group">
		            	<label class="lead">Fecha de Expediente:&nbsp;</label>
		            	<input class="col-md-6 bg-light shadow-sm @error('fechaExpediente') is-invalid @else border-0 @enderror pull-right datepicker"
		                            name="fechaExpediente"
		                            id="datepicker2"
		                            placeholder="Ingresa la fecha Expediente..."
		                            value="{{ old('fechaExpediente') }}">

	                    @error('fechaExpediente')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
					</div>

					<div class="form-group">
		            	<label class="lead">Fecha de Caducidad:&nbsp;</label>
		            	<input class="col-md-6 bg-light shadow-sm @error('fechaCaducidad') is-invalid @else border-0 @enderror pull-right datepicker"
		                            name="fechaCaducidad"
		                            id="datepicker3"
		                            placeholder="Ingresa la fecha Caducidad..."
		                            value="{{ old('fechaCaducidad') }}">

	                    @error('fechaCaducidad')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
					</div>

            	</div>
            </div>

            <div class="form-group">
            	<div class="text-center">
            		<button class="col-md-8 btn btn-primary btn-block">Enviar</button>
            	</div>
            </div>

		</form>


	</div>
@endsection


