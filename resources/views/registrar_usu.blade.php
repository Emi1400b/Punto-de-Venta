@extends('layouts.app')

@section('content') 
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>NUEVO USUARIO</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="varchar" type="text" class="form-control" id="puesto" class="validate" placeholder="Emi14">
                                        </div>
                                        <div class="col s12 m6">
                                            <label for="password">Contraseña</label>
                                            <input id="password" class="form-control" type="varchar" class="validate" placeholder="14EMI123456">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="num_emp">Número de empleado</label>
                                            <input type="integer" id="num_emp" class="form-control" type="text" class="validate" placeholder="Buscar número de empleado">
                                        </div>
                                        <div class="col s12 m8">
                                            <label for="empleado-auto">Nombre del empleado</label>
                                            <input type="varchar" name="empleado-auto" id="empleado-auto" class="form-control validate" placeholder="Evelyn Michelle Baz Pérez">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <span tooltip="Clic para cancelar la operación" flow="left">
                                                    <a href="{{ url('/lista_usuarios') }}" class="btn-danger dropdown-toggle btn">
                                                        <i class="material-icons left">cancel</i>CANCELAR
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <span tooltip="Clic para guardar la información" flow="left">
                                                    <a onclick="Alertabtn()" href="{{ url('/lista_usuarios') }}" class="btn btn-success">
                                                        <i class="material-icons left">check_circle</i>GUARDAR
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="btn-group col-sm-3 left">
                                                <span tooltip="Clic para agregar empleado" flow="right">
                                                    <a href="{{ url('/registrar_emp') }}" class="btn-primary dropdown-toggle btn">
                                                        <i class="material-icons left">work</i>AGREGAR EMPLEADO
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