@extends('layouts.app')

@section('content')  
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>CLIENTE</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="col s12 m2 "><label><strong>TIPO DE CLIENTE</strong></label>
                                            <form action="#">
                                                <p>
                                                    <input onclick="fisico()" name="group1" type="radio" id="check1"/>
                                                    <label for="check1">Físico</label>
                                                    <input onclick="moral()" name="group1" type="radio" id="check2" />
                                                    <label for="check2">Moral</label>
                                                </p>
                                            </form>
                                        </div>
                                        <div class="col s12 m2 ">
                                            <label for="numcli" class="form-label">No. cliente</label>
                                            <input type="varchar" class="form-control validate" id="numcli" placeholder="CL10">
                                        </div>
                                    </div>
                                    <div id="fisico" style="display: none;"><label><strong>DATOS PERSONALES</strong></label></div>
                                    <div class="row fisico" style="display: none;">
                                        <div class="col s12 m4 " >
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="varchar" class="form-control validate" id="nombre" placeholder="Luis Ángel">
                                        </div>
                                        <div class="col s12 m4 " >
                                            <label for="apellido_ap" class="form-label">Primer apellido</label>
                                            <input type="varchar" class="form-control validate" id="apellido" placeholder="Pérez">
                                        </div>
                                        <div class="col s12 m4" >
                                            <label for="segundo_ap" class="form-label">Segundo apellido</label>
                                            <input type="varchar" class="form-control validate" id="segundo_ap" placeholder="Carrazco">
                                        </div>
                                    </div>
                                    <div class="row fisico_cli" style="display: none;">
                                        <div class="col s12 m6">
                                            <label for="clave"> Clave Única de Registro de Población (CURP)</label>
                                            <input id="clave" class="form-control" type="varchar" class="validate" placeholder="PECL951007HVZZRD00">
                                        </div>
                                        <div class="col s12 m6">
                                            <label for="rfc" class="form-label">Registro Federal de Contribuyentes (RFC)</label>
                                            <input type="varchar" class="form-control" id="rfc" class="validate" placeholder="PECL951007FD5">
                                        </div>
                                    </div>
                                    <div id="moral" style="display: none;"><label><strong>DATOS DE LA EMPRESA</strong></label></div>
                                    <div class="row moral" style="display: none;">
                                        <div class="col s12 m6">
                                            <label for="razon_s">Razón social</label>
                                            <input id="razon_s" class="form-control" type="varchar" class="validate" placeholder="Razón social">
                                        </div>
                                        <div class="col s12 m6">
                                            <label for="rfc_1" class="form-label">Registro Federal de Contribuyentes (RFC)</label>
                                            <input type="varchar" class="form-control" id="rfc_1" class="validate" placeholder="QUI-95ND-32">
                                        </div>
                                    </div>
                                    <div><label><strong>DATOS DE CONTACTO</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="varchar" class="form-control validate" id="email" placeholder="luis.pc08@gmail.com">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tipo_num" class="form-label">Tipo</label>
                                            <select  type="varchar" class="form-control">
                                                <option value="" disabled selected >Desplega la lista...</option>
                                                <option value="1">Teléfono</option>
                                                <option value="2">Celular</option>
                                            </select>
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tel">Número</label>
                                            <input id="tel" class="form-control validate" type="varchar" placeholder="2721478987">
                                        </div>
                                    </div>
                                    <div><label><strong>DIRECCIÓN</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <label for="calle" class="form-label">Calle</label>
                                            <input type="varchar" class="form-control validate" id="calle" placeholder="Av. San Francisco">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="entre_cal">Entre calles</label>
                                            <input id="entre_cal" class="form-control validate" type="varchar" placeholder="Nicólas y Mezón">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_int">Número interior</label>
                                            <input id="no_int" class="form-control validate" type="varchar" placeholder="35">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_ext">Número exterior</label>
                                            <input id="no_ext" class="form-control validate" type="varchar" placeholder="19">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="cod_pos" class="form-label">Código Postal (C.P.)</label>
                                            <input type="varchar" class="form-control validate" id="cod_pos" placeholder="94700">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="colonia">Colonia</label>
                                            <input type="varchar" id="colonia" class="form-control validate" placeholder="Centro">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="local">Localidad</label>
                                            <input type="varchar" id="local" class="form-control validate" placeholder="Maltrata">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="ciudad" class="form-label">Ciudad</label>
                                            <input type="varchar" class="form-control validate" id="ciudad" placeholder="Maltrata">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="estado">Entidad Federativa (estado)</label>
                                            <input type="varchar" id="estado" class="form-control validate" placeholder="Veracruz">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="pais">País</label>
                                            <input type="varchar" id="pais" class="form-control validate" placeholder="México">
                                        </div>
                                    </div>
                                    <div><label><strong>DATOS DE VENTA</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="credito" class="form-label">Límite de crédito</label>
                                            <input type="integer" class="form-control validate" id="credito" placeholder="$2000.00">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="dias">Días de crédito</label>
                                            <input type="integer" id="dias" class="form-control validate" placeholder="30 ">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tipo_num" class="form-label">Frecuente</label>
                                            <select  type="varchar" class="form-control">
                                                <option value="" disabled selected >Desplega la lista...</option>
                                                <option value="Alto">Alto</option>
                                                <option value="Medio">Medio</option>
                                                <option value="Bajo">Bajo<option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <label for="textarea" class="form-label">Comentarios</label>
                                            <textarea type="varchar" id="textarea" class="form-control validate" placeholder="Se le ha realizado al cliente una venta de $5,000.00 pesos" data-length="255"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <span tooltip="Clic para cancelar la operación" flow="left">
                                                    <a href="{{ url('/lista_clientes') }}" class="btn-danger dropdown-toggle btn">
                                                        <i class="material-icons left">cancel</i>CANCELAR
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <span tooltip="Clic para guardar la información" flow="left">
                                                    <a onclick="Alertabtn()" href="{{ url('/lista_clientes') }}" class="btn btn-success">
                                                        <i class="material-icons left">check_circle</i>GUARDAR
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="clearBoth"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection