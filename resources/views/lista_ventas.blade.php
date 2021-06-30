@extends('layouts.app')

@section('content') 

        <div id="page-wrapper" >
          <div class="header"> 
            <h1 class="page-header">
              <b>VENTAS</b>
            </h1>  
          </div>

          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-content">
                    <div class="table-responsive">
                      <div class=" col-md-12">
                        <div class="row">
                          <div class="btn-group col-md-2 right">
                            <span tooltip="Clic para registrar nueva venta" flow="left">
                              <a href="{{ url('/registrar_venta') }}" class="btn btn-success">
                                <i class="material-icons left">queue</i>REGISTRAR
                              </a>
                            </span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="dataTables_length" id="dataTables-example_length">
                              <label>
                                Registros por página
                                <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> 
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-3 right">
                            <div class="dataTables_length" id="dataTables-example_length">
                              <label>
                                Buscar
                                <input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                              </label>
                              <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                              <th class="center">No.</th>
                              <th class="center">Usuario</th>
                              <th class="center">Cliente</th>
                              <th class="center">Fecha</th>
                              <th class="center">Representante</th>
                              <th class="center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="odd gradeX">
                            <td class="center">1</td>
                            <td class="center">Emi14</td>
                            <td class="center">Carmela Ramírez Correa</td>
                            <td class="center">16/06/2021 </td>
                            <td class="center"></td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar venta" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para realizar pagos de crédito" flow="left">
                                <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                              </span>
                            </td>
                          </tr>  
                          <tr class="even gradeC">
                            <td class="center">2</td>
                            <td class="center">Carlos10</td>
                            <td class="center">PAQUIN, S.A. DE C.V.</td>
                            <td class="center">17/06/2021</td>
                            <td class="center">Luis Alberto Ramírez</td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar venta" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para realizar pagos de crédito" flow="left">
                                <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                              </span>
                            </td>
                          </tr>  
                          <tr class="odd gradeA">
                          <td class="center">3</td>
                            <td class="center">Marijo25</td>
                            <td class="center">Ulises Cuevas Pérez</td>
                            <td class="center">18/06/2021</td>
                            <td class="center"></td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar venta" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para realizar pagos de crédito" flow="left">
                                <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                              </span>
                            </td>
                          </tr> 
                          <tr class="odd gradeA">
                          <td class="center">4</td>
                            <td class="center">Emi14</td>
                            <td class="center">JORGE CARLOS RODRIGUEZ LANDEROS</td>
                            <td class="center">19/06/2021</td>
                            <td class="center">Mario García Montero</td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar venta" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para realizar pagos de crédito" flow="left">
                                <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                              </span>
                            </td>
                          </tr> 
                        </tbody>
                      </table>  

                      <!-- Modal de empleados-->
                      <div class="modal fade" id="modalempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div id="page-inner">
                                      <div class="row">
                                          <div class="col-lg-12">
                                              <div class="card">
                                                  <div class="card-content">
                                                      <form class="col s12">
                                                          <div class="center"><label><strong>CRÉDITO</strong></label></div>
                                                          <div class="row">
                                                              <div class="col s12 m3">
                                                                <label for="saldo" class="form-label">Saldo</label>
                                                              </div>
                                                              <div class="col s12 m3">
                                                                <input type="decimal" class="form-control validate" id="saldo" disabled="disabled" placeholder="1000">
                                                              </div>
                                                              <div class="col s12 m3">
                                                                <label for="estatus" class="form-label">Estatus</label>
                                                              </div>
                                                              <div class="col s12 m3">
                                                                <input type="smallint" class="form-control validate" id="estatus" disabled="disabled" placeholder="1000">
                                                              </div>
                                                          </div>
                                                          <div class="center"><label><strong>VENTA</strong></label></div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="iva_tot" class="form-label">IVA total</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="decimal" class="form-control" id="iva_tot validate" disabled="disabled" placeholder="4.00">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="Subt_gen">Subtotal</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="decimal"  id="desc_tot" class="form-control validate" disabled="disabled" placeholder="10.00">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="desc_tot"> Descuento total </label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="decimal"  id="desc_tot" class="form-control validate" disabled="disabled" placeholder="10.00">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="total_gen">Total</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="decimal" id="total_gen" class="form-control validate" disabled="disabled" placeholder="154.00">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="form_pag" class="form-label">Forma de pago</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" class="form-control validate" id="form_pag" disabled="disabled" placeholder="Efectivo">
                                                              </div>
                                                          </div>
                                                      </form>
                                                      <div class="clearBoth">
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">
                            Mostrando 1 a 4 de 4 entradas
                          </div>
                        </div>

                        <div class="col-sm-3 right">
                          <div>
                            <ul class="pagination">
                              <li class="paginate_button previous disabled" >
                                <a href="#">Anterior</a>
                              </li>
                              <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0">
                                <a href="#">1</a>
                              </li>
                              <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0">
                                <a href="#">2</a>
                              </li>
                              <li class="paginate_button previous disabled"  >
                                <a href="#">Siguiente</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>      
            </div>
          </div>  
        </div>
@endsection
