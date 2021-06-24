@extends('layouts.app')

@section('content')   
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>NUEVA VENTA</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div><label><strong>DATOS DE VENTA</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="fecha_ven" class="form-label">Fecha</label>
                                            <input type="date" class="form-control" id="fecha_ven" class="validate" placeholder="dd/mm/aaaa">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="usu" class="form-label">Usuario</label>
                                            <input type="varchar" class="form-control" id="usu" class="validate" placeholder="Emi14">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="clien" class="form-label">Cliente</label>
                                            <input type="varchar" class="form-control" id="clien" class="validate" placeholder="Carmela Ramírez Correa">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="repres" class="form-label">Representante</label>
                                            <input type="varchar" class="form-control" id="repres" class="validate" placeholder="Pedro Martínez Lara">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="saldo" class="form-label">Saldo</label>
                                            <input type="decimal" class="form-control validate" id="saldo" disabled="disabled" placeholder="1000">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="estatus" class="form-label">Estatus de crédito</label>
                                            <input type="smallint" class="form-control" id="estatus" disabled="disabled" class="validate" placeholder="Pagado/Deuda">
                                        </div>
                                    </div>
                                    <div><label><strong>DETALLE DE VENTA</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <input type="varchar" class="form-control validate" id="estatus" placeholder="Código">
                                        </div>
                                        <div class="col s12 m3">
                                            <input type="varchar" class="form-control validate" id="estatus" placeholder="Nombre del productos">
                                        </div>
                                        <div class="col s12 m2 ">
                                            <span tooltip="Clic para agregar producto a la venta" flow="left">
                                                <button type="submit" class="btn-info dropdown-toggle btn" ><i class="material-icons">add_circle</i></button>
                                            </span>
                                        </div>
                                        <div class="col s12 m2 ">
                                            <span tooltip="Clic para generar código QR" flow="left">
                                                <button type="submit" class="btn btn-secondary dropdown-toggle btn" ><i class="fa fa-qrcode"></i></button>
                                            </span>
                                        </div>
                                        <div class="col s12 m3 ">
                                            <span tooltip="Clic para registrar producto rápido" flow="left">
                                                <a href="{{ url('/registrar_prod_rap') }}" class="btn-primary dropdown-toggle btn">
                                                    <i class="material-icons left">add_shopping_cart</i>PRODUCTO RÁPIDO
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <table class="table table-responsive table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                    <th class="center">Código</th>
                                                    <th class="center">Código alterno</th>
                                                    <th class="center">Nombre</th>
                                                    <th class="center">Precio</th>
                                                    <th class="center">Cantidad</th>
                                                    <th class="center">Descuento</th>
                                                    <th class="center">Subtotal</th>
                                                    <th class="center">IVA</th>
                                                    <th class="center">Total</th>
                                                    <th class="center">Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td class="center">1201</td>
                                                        <td class="center">PARDIC26</td>
                                                        <td class="center">Par Direccional</td>
                                                        <td class="center">$1100.00</td>
                                                        <td class="center">
                                                            <input type="integer"  id="cantidad" class="form-control validate" placeholder="0">
                                                        </td>
                                                        <td class="center">
                                                            <input type="integer"  id="desscuento" class="form-control validate" placeholder="%">
                                                        </td>
                                                        <td class="center">$</td>
                                                        <td class="center">
                                                            <input type="integer"  id="iva" class="form-control validate" placeholder="%">
                                                        </th>   
                                                        <td class="center">$</td>
                                                        <td class="center">
                                                            <span tooltip="Clic para quitar producto de la lista" flow="left">
                                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o "></i></button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                    <div><label><strong>VENTA GENERAL</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <label for="desc_tot"> Descuento total </label>
                                            <input type="decimal"  id="desc_tot" class="form-control validate" placeholder="10.00">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="Subt_gen">Subtotal</label>
                                            <input type="decimal" id="Subt_gen" class="form-control validate" placeholder="150.00">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="iva_tot" class="form-label">IVA total</label>
                                            <input type="decimal" class="form-control" id="iva_tot validate" placeholder="4.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="total_gen">Total a pagar</label>
                                            <input type="decimal" id="total_gen" class="form-control validate" placeholder="154.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="tipo_num" class="form-label">Forma de pago</label>
                                            <select  type="varchar" class="form-control">
                                                <option value="" disabled selected >Desplega la lista...</option>
                                                <option value="Efectivo">Efectivo</option>
                                                <option value="Tarjeta">Tarjeta</option>
                                                <option value="Transferencia">Transferencia</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="Vales">Vales</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <span tooltip="Clic para cancelar la operación" flow="left">
                                                    <a href="{{ url('/lista_ventas') }}" class="btn-danger dropdown-toggle btn">
                                                        <i class="material-icons left">cancel</i>CANCELAR
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <span tooltip="Clic para guardar la información" flow="left">
                                                    <a onclick="Alertabtn()" href="{{ url('/lista_ventas') }}" class="btn btn-success">
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