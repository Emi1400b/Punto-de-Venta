@extends('layouts.app')

@section('content') 

        <div id="page-wrapper" >
          <div class="header"> 
            <h1 class="page-header">
              <b>PUESTOS</b>
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
                          <div class="btn-group  col s12 m2 right">
                            <span tooltip="Clic para recuperar registros eliminados" flow="left">
                              <a href="{{ url('/papelera_pues') }}" class="btn btn-warning">
                                <i class="material-icons left">delete_sweep</i>PAPELERA
                              </a>
                            </span>
                          </div>
                          <div class="btn-group  col s12 m2 right">
                            <span tooltip="Clic para registrar nuevo puesto" flow="left">
                              <a href="{{ url('/registrar_pues') }}" class="btn btn-success">
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
                                <th class="center">ID</th>
                                <th class="center">Puesto</th>
                                <th class="center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="odd gradeX">
                            <td class="center">1</td>
                            <td class="center">Administrador</td>
                            <td class="center">
                              <span tooltip="Clic para editar puesto" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_pues') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar puesto" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
                            </td>
                          </tr>  
                          <tr class="even gradeC">
                            <td class="center">2</td>
                            <td class="center">Almacén</td>
                            <td class="center">
                              <span tooltip="Clic para editar puesto" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_pues') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar puesto" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
                            </td>
                          </tr>  
                          <tr class="odd gradeA">
                            <td class="center">3</td>
                            <td class="center">Caja</td>
                            <td class="center">
                              <span tooltip="Clic para editar puesto" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_pues') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar puesto" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
                            </td>
                          </tr> 
                          <tr class="odd gradeA">
                            <td class="center">4</td>
                            <td class="center">Mostrador</td>
                            <td class="center">
                              <span tooltip="Clic para editar puesto" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_pues') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar puesto" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
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
@endsection
