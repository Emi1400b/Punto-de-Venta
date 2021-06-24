@extends('layouts.app')

@section('content')   
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>PUESTO</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div class="row">
                                        <div class=" col s12 m6">
                                            <label for="puesto" class="form-label">Puesto</label>
                                            <input type="varchar" class="form-control" id="puesto" class="validate" placeholder="Vendedor">
                                        </div>
                                    </div>
                                    <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                        <div class="btn-group right">
                                            <span tooltip="Clic para cancelar la operación" flow="left">
                                                <a href="{{ url('/lista_pues') }}" class="btn-danger dropdown-toggle btn">
                                                    <i class="material-icons left">cancel</i>CANCELAR
                                                </a>
                                            </span>
                                        </div>
                                        <div class="btn-group col-sm-2 right">
                                            <span tooltip="Clic para guardar la información" flow="left">
                                                <a onclick="Alertabtn()" href="{{ url('/lista_pues') }}" class="btn btn-success">
                                                    <i class="material-icons left">check_circle</i>GUARDAR
                                                </a>
                                            </span>
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