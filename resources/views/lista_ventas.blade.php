@include('layouts.header')  

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
                            <a href="{{ url('/registrar_venta') }}" class="btn btn-success">
                              <i class="material-icons left">queue</i>REGISTRAR
                            </a>
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
                              <th class="center">ID</th>
                              <th class="center">Usuario</th>
                              <th class="center">Cliente</th>
                              <th class="center">Fecha</th>
                              <th class="center">Representante</th>
                              <th class="center">Saldo de crédito</th>
                              <th class="center">IVA total</th>
                              <th class="center">Subtotal</th>
                              <th class="center">Descuento total</th>
                              <th class="center">Total</th>
                              <th class="center">Forma de pago</th>
                              <th class="center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="odd gradeX">
                            <td class="center">1</td>
                            <td class="center">Emi14</td>
                            <td class="center">Carmela Remírez Correa</td>
                            <td class="center">16/06/2021 </td>
                            <td class="center"></td>
                            <td class="center">0.00</td>
                            <td class="center">$25.00</td>
                            <td class="center">$275.00</th>   
                            <td class="center">$30.00</td>
                            <td class="center">$245.00</td>
                            <td class="center">Efectivo</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                            </td>
                          </tr>  
                          <tr class="even gradeC">
                            <td class="center">2</td>
                            <td class="center">Carlos10</td>
                            <td class="center">PAQUIN, S.A. DE C.V.</td>
                            <td class="center">17/06/2021</td>
                            <td class="center">Luis Alberto Remírez</td>
                            <td class="center">$320.00</td>
                            <td class="center">$15.00</td>
                            <td class="center">$150.00</th>   
                            <td class="center">$35.00</td>
                            <td class="center">$115.00</td>
                            <td class="center">Transferencia</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                            </td>
                          </tr>  
                          <tr class="odd gradeA">
                          <td class="center">3</td>
                            <td class="center">Marijo25</td>
                            <td class="center">Ulises Cuevas Pérez</td>
                            <td class="center">18/06/2021</td>
                            <td class="center"></td>
                            <td class="center">0.00</td>
                            <td class="center">$50.00</td>
                            <td class="center">$200.00</th>   
                            <td class="center">$40.00</td>
                            <td class="center">$160.00</td>
                            <td class="center">Tarjeta</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                            </td>
                          </tr> 
                          <tr class="odd gradeA">
                          <td class="center">4</td>
                            <td class="center">Emi14</td>
                            <td class="center">JORGE CARLOS RODRIGUEZ LANDEROS</td>
                            <td class="center">19/06/2021</td>
                            <td class="center">Mario García Montero</td>
                            <td class="center">$715.00</td>
                            <td class="center">$55.00</td>
                            <td class="center">$360.00</th>   
                            <td class="center">$25.00</td>
                            <td class="center">$335.00</td>
                            <td class="center">Cheque</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_venta') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button  onclick="location.href='{{ url('/registrar_pagos_cred') }}'" type="submit" class="btn btn-warning"><i class="material-icons">monetization_on</i></button>
                            </td>
                          </tr> 
                        </tbody>
                      </table>  

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

@include('layouts.footer')
