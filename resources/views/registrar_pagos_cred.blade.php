@include('layouts.header')  
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>PAGOS DE CRÉDITO</b>
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m3 ">
                                            <label for="fecha" class="form-label">Fecha</label>
                                            <input type="date" class="form-control validate" id="fecha" placeholder="dd/mm/aaaa-18/06/2021">
                                        </div>
                                        <div class="col s12 m3  ">
                                            <label for="id_venta" class="form-label">ID Venta</label>
                                            <input type="integer" class="form-control validate" id="id_venta" disabled="disabled" placeholder="1">
                                        </div>
                                        <div class="col s12 m3 ">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="varchar" class="form-control validate" id="usuario" placeholder="Emi14">
                                        </div>
                                        <div class="col s12 m3 ">
                                            <label for="abono" class="form-label">Abono $</label>
                                            <input type="decimal" class="form-control validate" id="abono" placeholder="500.00">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m12 ">
                                            <label for="obs" class="form-label">Observaciones</label>
                                            <textarea type="varchar" id="obs" class="form-control validate" placeholder="Se dio el primer pago al crédito de la venta 1" data-length="255"></textarea>
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