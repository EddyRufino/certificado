@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="text-center font-weight-bold lead">MUNICIPALIDAD DISTRITAL DE CASTILLA</h2>
		<h4 class="text-justify font-weight-bold lead">CERTIFICADO DE INSPECCIÓN TÉCNICA DE SEGURIDAD EN EDIFICACIONES PARA ESTABLECIMIENTOS OBJETO DE INSPECCIÓN CLASIFICADOS CON NIVEL DE RIESGO ALTO O RIESGO MUY ALTO SEGÚN LA MATRIZ DE RIESGOS.</h4>
            <div class="form-group text-center mt-4">
                <div class="form-group">
					<label class="lead" for="numCertificado">Nª&nbsp;{{ $certificado->numCertificado }}</label>
                </div>
            </div>

            <span class="text-justify lead">
            	El Órgano Ejecutante de la Municipalidad Distrital de Castilla, en cumplimiento de lo establecido en el D.S. N° 002-2018-PCM, ha realizado la Inspección Técnica en Seguridad en Edificaciones al Establecimiento Objeto de Inspección.
            </span>

            <div class="form-group text-center mt-4">
                <div class="form-group">
                    <p class="text-center lead">{{ $certificado->nombreComercial }}</p>
                </div>
            </div>

            <span class="d-block text-muted text-center">
				Nombre Comercial
            </span>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead" for="ubicacion">Ubicado en:&nbsp;</label>
                    <p class="text-center lead">{{ $certificado->ubicacion }}</p>
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
                    <p class="text-center lead">{{ $certificado->propietario }}</p>
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
					<label class="lead">Capacidad máxima:&nbsp;{{ $certificado->capacidadNum }}</label>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
/
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="lead">{{ $certificado->capacidadLetra }}&nbsp;&nbsp;personas.</label>
                </div>
            </div>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead">Giro o actividad:&nbsp;</label>
                    <span class="lead">{{ $certificado->actividad }}</span>
                </div>
            </div>

            <div class="form-group mt-4">
                <div class="form-group">
					<label class="lead">Expediente Nª:&nbsp;{{ $certificado->numExpediente }}</label>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="lead">Resolución Nª:&nbsp;{{ $certificado->numResolucion }}</label>

                </div>
            </div>

            <div class="form-group">
            	<label class="lead">Vigencia 2 años&nbsp;{{ $certificado->riesgo->nombre }}</label>
            </div>

            <div class="row">
            	<div class="col-md-5"></div>
            	<div class="col-md-5">
					<div class="form-group">
		            	<label class="lead">LUGAR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASTILLA</label>
		            </div>

					<div class="form-group">
		            	<label class="lead">Fecha de Expedición:&nbsp;{{ $certificado->fechaExpedicion }}</label>

					</div>

					<div class="form-group">
		            	<label class="lead">Fecha de Expediente:&nbsp;{{ $certificado->fechaExpediente }}</label>

					</div>

					<div class="form-group">
		            	<label class="lead">Fecha de Caducidad:&nbsp;{{ $certificado->fechaCaducidad }}</label>

					</div>

            	</div>
            </div>


	</div>
@endsection


