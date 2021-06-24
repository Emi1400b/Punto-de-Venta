@extends('layouts.app')

@section('content')

        <div id="page-wrapper" >
          <div class="header"> 
            <h1 class="page-header">
              <b>PAPELERA-EMPLEADOS</b>
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
                            <span tooltip="Clic para regresar al listado de empleados" flow="left">
                              <a href="{{ url('/lista_empleados') }}" class="btn btn-warning">
                                <i class="material-icons left">arrow_back</i>REGRESAR
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
                                <th class="center">ID</th>
                                <th class="center">Alias</th>
                                <th class="center">Puesto</th>
                                <th class="center">Nombre completo</th>
                                <th class="center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                            <td class="center">5</td>
                                <td class="center">Toño</td>
                                <td class="center">Vendedor</td>
                                <td class="center">Antonio Eugenio Pérez Vázquez</td>
                                <td class="center">
                                  <span tooltip="Clic para reestablecer empleado" flow="left">
                                    <a onclick="Alertabtn()">
                                        <button onclick="location.href='{{ url('/lista_empleados') }}'"  type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-repeat"></i></button>
                                    </a>
                                  </span>
                                </td>

                            </tr>  
                            <tr class="even gradeC">
                                <td class="center">6</td>
                                <td class="center">Rafa</td>
                                <td class="center">Repartidor</td>
                                <td class="center">Rafael Márquez Lezama</td>
                                <td class="center">
                                  <span tooltip="Clic para reestablecer empleado" flow="left">
                                    <a onclick="Alertabtn()">
                                        <button onclick="location.href='{{ url('/lista_empleados') }}'"  type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-repeat"></i></button>
                                    </a>
                                  </span>
                                </td>
                            </tr> 
                            <tr class="even gradeC">
                                <td class="center">7</td>
                                <td class="center">Alex</td>
                                <td class="center">Asesor de ventas</td>
                                <td class="center">Alexander Lázaro Bonilla</td> 
                                <td class="center">
                                  <span tooltip="Clic para reestablecer empleado" flow="left">
                                    <a onclick="Alertabtn()">
                                        <button onclick="location.href='{{ url('/lista_empleados') }}'"  type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-repeat"></i></button>
                                    </a>
                                  </span>
                                </td>
                            </tr> 
                        </tbody>
                      </table>  

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">
                            Mostrando 1 a 2 de 2 entradas
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
