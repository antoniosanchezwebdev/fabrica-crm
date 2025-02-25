<div class="container-fluid">
    <style>
        .col-md-3.sticky-top {
            align-self: flex-start !important;
            top: 100px !important;
        }
    </style>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h4 class="page-title">EDITANDO CONTRATO {{$nContrato}}</span></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Contratos</a></li>
                    <li class="breadcrumb-item active">Editar Contrato {{$nContrato}}</li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div>
    {{-- <h1>Contratos</h1>
    <h2>Crear Contrato</h2>
    <br> --}}

    {{-- {{ var_dump($clienteExistente) }}
    {{ var_dump($solicitante) }}
    {{ var_dump($id_servicio) }}
    {{ var_dump($addDiscount) }}
    {{ var_dump($metodoPago) }}
    {{ var_dump($isTransferencia) }} --}}

    <div class="row">
        <div class="col-md-9">
            <div class="card m-b-30">
                <div class="card-body">
                    <form wire:submit.prevent="update">
                        <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ csrf_token() }}">

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="nContrato" class="col-sm-12 col-form-label">Nº Contrato</label>
                                <div class="col-md-11">
                                    <input type="number" wire:model="nContrato" class="form-control" name="nContrato" placeholder="X" required disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Dia del evento</label>
                                <div class="col-md-11">
                                    <input type="date" wire:model="dia" class="form-control" name="diaEvento" placeholder="X">
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="id_presupuesto" class="col-sm-12 col-form-label">Presupuesto seleccionado</label>
                                <div class="col-md-11">
                                    <select class="form-control select" name="id_presupuesto" wire:model="id_presupuesto">
                                        <option value="">Nº Presupuesto</option>
                                        @foreach ($presupuestos as $presupuestoSelect)
                                        <option value="{{ $presupuestoSelect->id }}">
                                            {{ $presupuestoSelect->id }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        @if($id_presupuesto != 0)
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Datos del solicitante </h6>
                            @if($cliente->tipo_cliente != 1)
                            <div class="col-sm-7">
                                <label for="nContrato" class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->nombre}} {{$cliente->apellido}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <label for="diaEvento" class="col-sm-12 col-form-label">DNI</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->nif}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-sm-7">
                            <label for="nContrato" class="col-sm-12 col-form-label">Entidad</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="{{$cliente->nombre}}" disabled>
                                @error('nContrato')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label for="diaEvento" class="col-sm-12 col-form-label">CIF</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="{{$cliente->nif}}" disabled>
                                @error('diaEvento')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="example-text-input" class="col-sm-12 col-form-label">Código Órgano Gestor</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $cliente->codigo_organo_gestor }}"
                                    class="form-control" name="codigo_organo_gestor" placeholder="Código Órgano Gestor" disabled>
                                @error('codigo_organo_gestor')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="example-text-input" class="col-sm-12 col-form-label">Código Unidad Tramitadora</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $cliente->codigo_unidad_tramitadora }}"
                                    class="form-control" name="codigo_unidad_tramitadora" placeholder="Código Unidad Tramitadora" disabled>
                                @error('codigo_unidad_tramitadora')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="example-text-input" class="col-sm-12 col-form-label">Código Oficina Contable</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $cliente->codigo_oficina_contable }}"
                                    class="form-control" name="codigo_oficina_contable" placeholder="Código Oficina Contable" disabled>
                                @error('codigo_oficina_contable')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <label for="nContrato" class="col-sm-12 col-form-label">Domicilio</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->tipoCalle}} {{$cliente->calle}} , {{$cliente->numero}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="diaEvento" class="col-sm-12 col-form-label">CP</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->codigoPostal}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="dir1" class="col-sm-12 col-form-label">Dir 1 :</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->direccionAdicional1}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Dir 2 :</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->direccionAdicional2}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Dir 3 :</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->direccionAdicional3}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <label for="nContrato" class="col-sm-12 col-form-label">Localidad</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->ciudad}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Provincia</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->provincia}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <label for="nContrato" class="col-sm-12 col-form-label">Teléfono</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->tlf1}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Email</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$cliente->email1}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Datos del evento </h6>
                            <div class="col-sm-7">
                                <label for="nContrato" class="col-sm-12 col-form-label">Evento</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$this->getEventoNombre($evento->eventoNombre)}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Protagonistas</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$evento->eventoProtagonista}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Niños</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$evento->eventoNiños}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="nContrato" class="col-sm-12 col-form-label">Contacto</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$evento->eventoContacto}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Parentesco</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$evento->eventoParentesco}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Telefono</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$evento->eventoTelefono}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <label for="nContrato" class="col-sm-12 col-form-label">Lugar</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$evento->eventoLugar}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Localidad</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$evento->eventoLocalidad}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <label for="nContrato" class="col-sm-12 col-form-label">Posibilidad de montaje</label>

                                <div class="col-md-12">
                                    @if($evento->eventoMontaje != null)
                                    <input type="text" class="form-control" value="{{$evento->eventoMontaje}}" disabled>
                                    @else
                                    <input type="text" class="form-control" value="" disabled>
                                    @endif
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <hr />
                        @if($packs->count() > 0)
                        @foreach($packs as $paquete)
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Packs de servicios contratados </h6>
                            <div class="col-sm-9">
                                <label for="nContrato" class="col-sm-12 col-form-label">Nombre del paquete</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$packs->where('id', $paquete->id)->first()->nombre}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="nContrato" class="col-sm-12 col-form-label">Precio final</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$paquete->pivot->precio_final}} €" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            @foreach($packs->where('id', $paquete->id)->first()->servicios() as $servicioIndex => $servicio)
                            <div class="col-sm-1">
                                &nbsp;
                            </div>
                            <div class="col-sm-3">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Nombre del servicio</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->nombre}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Monitores asignados</label>
                                <div class="col-md-12">
                                    @if(!isset(json_decode($paquete->pivot->numero_monitores, true)[$servicioIndex]))
                                    <input type="text" class="form-control" value="0" disabled>
                                    @else
                                    <input type="text" class="form-control" value="{{json_decode($paquete->pivot->numero_monitores, true)[$servicioIndex]}}" disabled>
                                    @endif
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Importe mínimo del servicio</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->precioBase + ( $servicio->minMonitor * $servicio->precioMonitor)}} €" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                        @endif
                        @if($servicios->count() > 0)
                        <hr />
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Servicios contratados </h6>
                            @foreach($servicios as $servicio)
                            <div class="col-sm-5">
                                <label for="nContrato" class="col-sm-12 col-form-label">Servicio contratado</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->pivot->concepto}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Número de monitores</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->pivot->numero_monitores}}" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label for="diaEvento" class="col-sm-12 col-form-label">Importe</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->pivot->precio_final}} €" disabled>
                                    @error('diaEvento')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="nContrato" class="col-sm-12 col-form-label">Servicio Tiempo</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->pivot->tiempo}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="nContrato" class="col-sm-12 col-form-label">Servicio Hora de inicio</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->pivot->hora_inicio}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="nContrato" class="col-sm-12 col-form-label">Servicio Hora de Finalización</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$servicio->pivot->hora_finalizacion}}" disabled>
                                    @error('nContrato')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <hr />
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Observaciones </h6>
                            <div class="col-sm-12">
                                <textarea wire:model.lazy="observaciones" rows="4" class="w-100"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Reserva de los servicios contratados* </h6>
                            <div class="col-sm-12 mt-2">
                                <h6>Sirva el presente contrato como comprobante del pago en concepto de reserva, de los servicios anteriormente descritos.</h6>
                            </div>
                            @if ($cliente->tipo_cliente == 1)
                            <div class="col-sm-5 mt-3">
                                <h5>Total del evento: &nbsp; {{$presupuesto->precioFinal}} €  (Sin IVA)</h5>
                            </div>
                            @else
                            <div class="col-sm-5 mt-3">
                                <h5>Total del evento: &nbsp; {{$presupuesto->precioFinal}} €</h5>
                            </div>
                            @endif
                            <div class="col-sm-4 mt-3">
                                <h5>Entrega: &nbsp; {{ $presupuesto->adelanto}} € ({{round(($presupuesto->adelanto / $presupuesto->precioFinal) * 100, 2)}}%)</h5>
                            </div>
                            <div class="col-sm-3">
                                <label class="col-form-label">Método de pago</label>
                                <select class="form-control" wire:model="metodoPago">
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Bizum">Bizum</option>
                                    <option value="Transferencia">Transferencia</option>
                                </select>
                            </div>
                            @if ($cliente->tipo_cliente == 1)
                            <div class="col-sm-12 mt-3">
                                <h5>Total del evento: &nbsp; {{($presupuesto->precioFinal)*(1 + ($presupuesto->iva_valor/100))}} €  (IVA Incluido)</h5>
                            </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Suministros de luz, agua y permisos. </h6>
                            <p> Será de cargo y cuenta del cliente suministrar tantos puntos de luz y agua como sean necesarios para el correcto funcionamiento de los servicios contratados. Igualmente corresponde al cliente el pago de los recibos/facturas que sean emitidos por el consumo realizado durante el evento, así como los permisos, si fueran necesarios, para la instalación de nuestros servicios en la vía pública.
                                Con la firma del presente contrato el cliente manifiesta haber sido correctamente informado y su aceptación. </p>
                        </div>
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Consentimiento del tratamiento de datos de carácter personal </h6>
                            <div class="col-sm-12 mt-2">
                                <h6>Identidad del responsable de tratamiento:.</h6>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <p><b>EDUCACIÓN, OCIO Y TIEMPO LIBRE LA FABRICA S.L.</b></p>
                                <p>B-11949658.</p>
                                <p>Avd. Alcalde Cantos Ropero, 51 Pol. Ind. "Jerez 2000" Nave 14.</p>
                                <p>11408 Jerez de la Frontera ( Cádiz)</p>
                                <p>956 042 751 673 811 838</p>

                            </div>
                            <div class="col-sm-12 mt-3">
                                En cumplimiento del RGPD UE 2016/679 de Protección de Datos de Carácter Personal le informamos de que sus datos personales pasarán a formar parte de los sistemas de información de EDUCACIÓN, OCIO Y TIEMPO LIBRE LA FÁBRICA, S.L con la finalidad de gestionar los datos de los clientes de EDUCACIÓN, OCIO Y TIEMPO LIBRE LA FÁBRICA, S.L para su coordinación integral y control, así como el envío de comunicaciones. </div>
                            <div class="col-sm-12 mt-3">
                                La legitimación del tratamiento se basa en la aplicación del artículo 6.1a del citado RGPD, por la que el interesado otorga a EDUCACIÓN, OCIO Y TIEMPO LIBRE LA FÁBRICA, S.L el consentimiento para el tratamiento de sus datos personales. Los datos que nos ha proporcionado se conservarán mientras no solicite su supresión o cancelación y siempre que resulten adecuados, pertinentes y limitados a lo necesario para los fines para los que sean tratados.
                            </div>
                            <div class="col-sm-12 mt-3">
                                Sus datos no serán comunicados a terceros salvo en las excepciones previstas por obligaciones legales. </div>
                            <div class="col-sm-12 mt-3">
                                Asimismo, le informamos de que las imágenes captadas durante actividades y eventos en los que participe o promueva EDUCACIÓN, OCIO Y TIEMPO LIBRE LA FÁBRICA, S.L podrán ser utilizadas en medios propios (publicaciones, página web, redes sociales…) </div>
                            <div class="col-sm-12 mt-3">
                                <h6>MARQUE LAS CASILLAS SI AUTORIZA LO DICHO AQUÍ: </h6>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 d-inline-flex align-items-center ms-5">
                                    <input class="form-check-input mt-0" wire:model="authImagen" type="checkbox" id="authImagen">
                                    <label for="confEmail" class=" col-form-label">¿Autorizo la captación y difusión de imágenes en medios propios.</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 d-inline-flex align-items-center ms-5">
                                    <input class="form-check-input mt-0" wire:model="authMenores" type="checkbox" id="authMenores">
                                    <label for="confEmail" class=" col-form-label">En caso afirmativo, deseo que se muestren los rostros de los menores. </label>
                                </div>
                            </div>

                            <div class="col-sm-12 mt-3">
                                Podrá ejercitar su derecho a solicitar el acceso a sus datos, la rectificación o supresión, la limitación del tratamiento, la oposición del tratamiento o la portabilidad de los datos, dirigiendo un escrito junto a la copia de su DNI a en la siguiente dirección: info@fabricandoeventos.com </div>
                            <div class="col-sm-12 mt-3">
                                En caso de disconformidad, Vd. tiene derecho a elevar una reclamación ante la Agencia Española de Protección de Datos (www.agpd.es). </div>
                            <div class="col-sm-12 mt-3">
                                He sido informado y autorizo expresamente el tratamiento, con la firma de este contrato. </div>
                        </div>
                        @endif
                        <div class="form-group row">
                            <h6 class="card-header mb-2"> Firma y conformidad </h6>
                            <div class="col-sm-12 mt-2">
                                <h6>A día {{$diaMostrar}}, </h6>
                            </div>
                            <div class="col-sm-1 mt-2">&nbsp;</div>
                            <div class="col-sm-5 mt-2">
                                <h5 class="card-header">Firma del solicitante:</h5>
                            </div>
                            <div class="col-sm-5 mt-2">
                                <h5 class="card-header">La Fábrica:</h5>
                            </div>
                            <div class="col-sm-1 mt-2">&nbsp;</div>
                            <div class="col-sm-1 mt-2">&nbsp;</div>
                            <div class="col-sm-5 mt-2">

                            </div>
                            <div class="col-sm-5 mt-2">
                                <img style="text-align: center !important" src="{{ asset('assets/images/firma_fabrica.png') }}" height="200px" width="400px">
                            </div>
                            <div class="col-sm-1 mt-2">&nbsp;</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card m-b-30 position-fixed">
                <div class="card-body">
                    <h5>Acciones</h5>
                    <div class="row">
                        <div class="col-12">
                            <button class="w-100 btn btn-success mb-2" id="alertaGuardar">Editar contrato</button>
                            <button class="w-100 btn btn-info mb-2" id="alertaGuardar2">Descargar documento</button>
                            <button class="w-100 btn btn-danger mb-2" id="alertaEliminar">Eliminar contrato</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @section('scripts')
        <script>
            $("#alertaGuardar").on("click", () => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Pulsa el botón de confirmar para guardar el contrato.',
                    icon: 'info',
                    showConfirmButton: true,
                    showCancelButton: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('update');
                    }
                });
            });

            $("#alertaGuardar2").on("click", () => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Pulsa el botón de confirmar para guardar e imprimir el contrato.',
                    icon: 'info',
                    showConfirmButton: true,
                    showCancelButton: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('submitImprimir');
                    }
                });
            });
            $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '< Ant',
                nextText: 'Sig >',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                    'Octubre', 'Noviembre', 'Diciembre'
                ],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                weekHeader: 'Sm',
                dateFormat: 'yy-mm-dd',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
            document.addEventListener('livewire:load', function() {


            })

            $(document).ready(function() {
                // $('#tableServicios').DataTable({
                //     responsive: true,
                //     dom: 'Bfrtip',
                //     buttons: [
                //         'copy', 'csv', 'excel', 'pdf', 'print'
                //     ],
                //     buttons: [{
                //         extend: 'collection',
                //         text: 'Export',
                //         buttons: [{
                //                 extend: 'pdf',
                //                 className: 'btn-export'
                //             },
                //             {
                //                 extend: 'excel',
                //                 className: 'btn-export'
                //             }
                //         ],
                //         className: 'btn btn-info text-white'
                //     }],
                //     "language": {
                //         "lengthMenu": "Mostrando _MENU_ registros por página",
                //         "zeroRecords": "Nothing found - sorry",
                //         "info": "Mostrando página _PAGE_ of _PAGES_",
                //         "infoEmpty": "No hay registros disponibles",
                //         "infoFiltered": "(filtrado de _MAX_ total registros)",
                //         "search": "Buscar:",
                //         "paginate": {
                //             "first": "Primero",
                //             "last": "Ultimo",
                //             "next": "Siguiente",
                //             "previous": "Anterior"
                //         },
                //         "zeroRecords": "No se encontraron registros coincidentes",
                //     }
                // });
                console.log('select2')
                $('.form-control select').select2();
                $("#diaEvento").datepicker();


                $("#diaEvento").on('change', function(e) {
                    @this.set('diaEvento', $('#diaEvento').val());
                });

            });

            function togglePasswordVisibility() {
                var passwordInput = document.getElementById("password");
                var eyeIcon = document.getElementById("eye-icon");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.className = "fas fa-eye-slash";
                } else {
                    passwordInput.type = "password";
                    eyeIcon.className = "fas fa-eye";
                }
            }


            $("#alertaEliminar").on("click", () => {
            Swal.fire({
                title: '¿Estás seguro? No se podrá revertir la acción.',
                icon: 'error',
                text: 'Si estás seguro, pulsa el botón de "Confirmar" para eliminar el contrato.',
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('destroy');
                }
            });
        });
        </script>
        @endsection
