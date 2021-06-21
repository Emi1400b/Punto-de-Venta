@include('layouts.header')  
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>ACTUALIZAR VENTA</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <a href="{{ url('/lista_ventas') }}" class="btn-danger dropdown-toggle btn">
                                                    <i class="material-icons left">cancel</i>CANCELAR
                                                </a>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <a onclick="Alertabtn()" href="{{ url('/lista_ventas') }}" class="btn btn-success">
                                                    <i class="material-icons left">check_circle</i>GUARDAR
                                                </a>
                                            </div>
                                            <div class="btn-group col-sm-3 left">
                                                <a href="{{ url('/registrar_prod_rap') }}" class="btn-primary dropdown-toggle btn">
                                                    <i class="material-icons left">add_shopping_cart</i>PRODUCTO RÁPIDO
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div><label><strong>DATOS DE VENTA</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <label for="fecha_ven" class="form-label">Fecha</label>
                                            <input type="date" class="form-control" id="fecha_ven" class="validate" placeholder="dd/mm/aaaa">
                                        </div>
                                        <div class="col s12 m2 ">
                                            <label for="usu" class="form-label">Usuario</label>
                                            <input type="integer" class="form-control" id="usu" class="validate" placeholder="2">
                                        </div>
                                        <div class="col s12 m2 ">
                                            <label for="clien" class="form-label">Cliente</label>
                                            <input type="integer" class="form-control" id="clien" class="validate" placeholder="1">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="repres" class="form-label">Representante</label>
                                            <input type="varchar" class="form-control" id="repres" class="validate" placeholder="Pedro Martínez Lara">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="saldo" class="form-label">Saldo</label>
                                            <input type="decimal" class="form-control validate" id="saldo" disabled="disabled" placeholder="1000">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="estatus" class="form-label">Estatus de crédito</label>
                                            <input type="smallint" class="form-control" id="estatus" disabled="disabled" class="validate" placeholder="Pagado/Deuda">
                                        </div>
                                    </div>
                                    <div><label><strong>DETALLE DE VENTA</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <label for="cod_pr"> Código de producto</label>
                                            <input type="varchar" id="cod_pr" class="form-control"  class="validate" placeholder="291706">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="precio" class="form-label">Precio </label>
                                            <input type="decimal" class="form-control" id="precio" class="validate" placeholder="25.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="cant_prd">Cantidad</label>
                                            <input type="integer" id="cant_prd" class="form-control" class="validate" placeholder="2">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="desc"> Descuento </label>
                                            <input type="decimal"  id="desc" class="form-control" class="validate" placeholder="5.00">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <label for="Subt">Subtotal</label>
                                            <input type="decimal" id="Subt" class="form-control" class="validate" placeholder="100.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="impuesto_prd" class="form-label">IVA</label>
                                            <input type="decimal" class="form-control" id="impuesto_prd" class="validate" placeholder="4.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="total_prd">Total</label>
                                            <input type="decimal" id="total_prd" class="form-control" class="validate" placeholder="104.00 ">
                                        </div>
                                        <div class="col s12 m3">
                                            <a class="btn-floating btn-large waves-effect waves-light btn-success">
                                                <i class="material-icons">add</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div><label><strong>VENTA GENERAL</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <label for="desc_tot"> Descuento total </label>
                                            <input type="decimal"  id="desc_tot" class="form-control" class="validate" placeholder="10.00">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="Subt_gen">Subtotal</label>
                                            <input type="decimal" id="Subt_gen" class="form-control" class="validate" placeholder="150.00">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="iva_tot" class="form-label">IVA total</label>
                                            <input type="decimal" class="form-control" id="iva_tot" class="validate" placeholder="4.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="total_gen">Total</label>
                                            <input type="decimal" id="total_gen" class="form-control" class="validate" placeholder="154.00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="tipo_num" class="form-label">Forma de pago</label>
                                            <input type="varchar" class="form-control" list="datalistOptions" id="tipo_num" placeholder="Desplega la lista...">
                                            <datalist id="datalistOptions">
                                                <option value="Efectivo">
                                                <option value="Tarjeta">
                                                <option value="Transferencia">
                                                <option value="Cheque">
                                                <option value="Vales">
                                            </datalist>
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
@include('layouts.footer')  