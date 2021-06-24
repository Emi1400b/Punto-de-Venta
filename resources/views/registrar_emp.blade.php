@extends('layouts.app')

@section('content') 
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>NUEVO EMPLEADO</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div><label><strong>DATOS PERSONALES</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <label for="puesto" class="form-label">Puesto</label>
                                            <input type="varchar" class="form-control" id="puesto" class="validate" placeholder="Vendedor">
                                        </div>
                                        <div class="col s12 m2 ">
                                            <label for="alias" class="form-label">Alias</label>
                                            <input type="varchar" class="form-control" id="alias" class="validate" placeholder="Eve">
                                        </div>
                                        <div class="col s12 m3 ">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="varchar" class="form-control" id="nombre" class="validate" placeholder="Evelyn">
                                        </div>
                                        <div class="col s12 m3 ">
                                            <label for="apellido_ap" class="form-label">Primer apellido</label>
                                            <input type="varchar" class="form-control" id="apellido" class="validate" placeholder="Baz">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="segundo_ap" class="form-label">Segundo apellido</label>
                                            <input type="varchar" class="form-control" id="segundo_ap" class="validate" placeholder="Pérez">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="num_seg">Número de Seguro Social (NSS)</label>
                                            <input type="char" id="num_seg" class="form-control" class="validate" placeholder="72795608040">
                                        </div>
                                        <div class="col s12 m5">
                                            <label for="clave"> Clave Única de Registro de Población (CURP)</label>
                                            <input type="char" id="clave" class="form-control" class="validate" placeholder="BAPE001011MVZNRVA6">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="fecha_nac">Fecha de nacimiento</label>
                                            <input type="varchar" id="fecha_nac" class="form-control" class="validate" placeholder="11 de octubre de 2000">
                                        </div>
                                    </div>
                                    <div><label><strong>DATOS DE CONTACTO</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="varchar" class="form-control" id="email" class="validate" placeholder="evemi1110@gmail.com">
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
                                            <input type="varchar" id="tel" class="form-control" class="validate" placeholder="2721478987">
                                        </div>
                                    </div>
                                    <div><label><strong>DIRECCIÓN</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <label for="calle" class="form-label">Calle</label>
                                            <input type="varchar" class="form-control" id="calle" class="validate" placeholder="Avenida San Juan">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="entre_cal">Entre calles</label>
                                            <input type="varchar" id="entre_cal" class="form-control" class="validate" placeholder="Mezón y Guadalupe">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_int">Número interior</label>
                                            <input type="varchar" id="no_int" class="form-control" class="validate" placeholder="18">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_ext">Número exterior</label>
                                            <input type="varchar" id="no_ext" class="form-control" class="validate" placeholder="12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="cod_pos" class="form-label">Código Postal (C.P.)</label>
                                            <input type="varchar" class="form-control" id="cod_pos" class="validate" placeholder="94760">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="colonia">Colonia</label>
                                            <input type="varchar" id="colonia" class="form-control" class="validate" placeholder="Centro">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="local">Localidad</label>
                                            <input type="varchar" id="local" class="form-control" class="validate" placeholder="Acultzingo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="ciudad" class="form-label">Ciudad</label>
                                            <input type="varchar" class="form-control" id="ciudad" class="validate" placeholder="Acultzingo">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="estado">Entidad Federativa (estado)</label>
                                            <input type="varchar" id="estado" class="form-control" class="validate" placeholder="Veracruz">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="pais">País</label>
                                            <input type="varchar" id="pais" class="form-control" class="validate" placeholder="México">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <span tooltip="Clic para cancelar la operación" flow="left">
                                                    <a href="{{ url('/lista_empleados') }}" class="btn-danger dropdown-toggle btn">
                                                        <i class="material-icons left">cancel</i>CANCELAR
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <span tooltip="Clic para guardar la información" flow="left">
                                                    <a onclick="Alertabtn()" href="{{ url('/lista_empleados') }}" class="btn btn-success">
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