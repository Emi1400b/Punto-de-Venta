@extends('layouts.app')

@section('content')   
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>PRODUCTO RÁPIDO</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="col s12 m4 ">
                                            <label for="cantidad" class="form-label">Cantidad</label>
                                            <input type="integer" class="form-control validate" id="cantidad" placeholder="3">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="desc" class="form-label">Descripción</label>
                                            <textarea type="varchar" id="desc" class="form-control validate" placeholder="Pieza pequeña para..." data-length="255"></textarea>
                                        </div>
                                        <div class="col s12 m4 ">
                                            <label for="impuesto" class="form-label">Impuesto</label>
                                            <input type="decimal" class="form-control validate" id="impuesto" placeholder="5.00">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m3 ">
                                            <label for="prec_net" class="form-label">Precio neto</label>
                                            <input type="decimal" class="form-control validate" id="prec_net" placeholder="30.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="prec_net_imp" class="form-label">Precio neto sin impuesto</label>
                                            <input type="decimal" class="form-control validate" id="prec_net_imp" placeholder="25.00">
                                        </div>
                                        <div class="col s12 m3 ">
                                            <label for="porc" class="form-label">Porcentaje de utilidad</label>
                                            <input type="decimal" class="form-control validate" id="porc" placeholder="2">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="prec_ven" class="form-label">Precio de venta</label>
                                            <input type="decimal" class="form-control validate" id="prec_ven" placeholder="500.00">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <label for="uni_com" class="form-label">Unidad de compra</label>
                                            <input type="integer" class="form-control validate" id="uni_com" placeholder="Caja ">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="uni_ven" class="form-label">Unidad de venta</label>
                                            <input type="integer" class="form-control validate" id="uni_ven" placeholder="PZA">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="factor" class="form-label">Factor</label>
                                            <input type="integer" class="form-control validate" id="factor" placeholder="1">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="clave_ser" class="form-label">Clave del producto servicio</label>
                                            <input type="integer" class="form-control validate" id="clave_ser" placeholder="29014">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <span tooltip="Clic para cancelar la operación" flow="left">
                                                    <a href="{{ url('/registrar_venta') }}" class="btn-danger dropdown-toggle btn">
                                                        <i class="material-icons left">cancel</i>CANCELAR
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <span tooltip="Clic para agregar la información" flow="left">
                                                    <a onclick="Alertabtn()" href="{{ url('/registrar_venta') }}" class="btn btn-success">
                                                        <i class="material-icons left">check_circle</i>AGREGAR
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