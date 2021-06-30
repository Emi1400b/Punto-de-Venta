@extends('layouts.app')

@section('content') 

        <div id="page-wrapper" >
          <div class="header"> 
            <h1 class="page-header">
              <b>CLIENTES</b>
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
                                <a href="{{ url('/papelera_cli') }}" class="btn btn-warning">
                                  <i class="material-icons left">delete_sweep</i>PAPELERA
                                </a>
                              </span>
                            </div>
                            <div class="btn-group col s12 m2 right">
                              <span tooltip="Clic para registrar nuevo empleado" flow="left">
                                <a href="{{ url('/registrar_cli') }}" class="btn btn-success">
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
                              <th class="center">No. cliente</th>
                              <th class="center">Nombre completo</th>
                              <th class="center">Razón social</th>
                              <th class="center">RFC</th>
                              <th class="center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="odd gradeX">
                            <td class="center">1</td>
                            <td class="center">CL1</td>
                            <td class="center">Carmela Ramírez Correa</td>
                            <td class="center"></td>
                            <td class="center">RACC9506258M2</td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar cliente" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar cliente" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
                            </td>
                          </tr>  
                          <tr class="even gradeC">
                          <td class="center">2</td>
                            <td class="center">CL2</td>
                            <td class="center"></td>
                            <td class="center">PAQUIN, S.A. DE C.V.</td>
                            <td class="center">PAQ-591107-QY3</td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar cliente" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar cliente" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
                            </td>
                          </tr>  
                          <tr class="odd gradeA">
                          <td class="center">3</td>
                            <td class="center">CL3</td>
                            <td class="center">Ulises Cuevas Pérez</td>
                            <td class="center"></td>
                            <td class="center">CUPU900810GY5</td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar cliente" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar cliente" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
                            </td>
                          </tr> 
                          <tr class="odd gradeA">
                          <td class="center">4</td>
                            <td class="center">CL4</td>
                            <td class="center"></td>
                            <td class="center">JORGE CARLOS RODRIGUEZ LANDEROS</td>
                            <td class="center">ROLJ-610423-154</td>
                            <td class="center">
                              <span tooltip="Clic para ver más detalles" flow="left">
                                <button  data-toggle="modal" data-target="#modalempleado" type="submit" class="btn btn-info"><i class="fa fa-eye"></i></button>
                              </span>
                              <span tooltip="Clic para editar cliente" flow="left">
                                <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn" ><i class="fa fa-pencil-square" ></i></button>
                              </span>
                              <span tooltip="Clic para eliminar cliente" flow="left">
                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o "></i></button>
                              </span>
                            </td>
                          </tr> 
                        </tbody>
                      </table>  

                      <!-- Modal de empleados-->
                      <div class="modal fade" id="modalempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div >
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div id="page-inner">
                                    <div class="row">
                                          <div class="col-lg-12">
                                              <div class="card">
                                                  <div class="card-content">
                                                      <form class="col s12">
                                                          <div  class="center"><label><strong>DATOS PERSONALES</strong></label></div>
                                                          <div class="row ">
                                                            <div class="row">
                                                                <div class="col s12 m6">
                                                                  <label for="clave"> Clave Única de Registro de Población (CURP)</label>
                                                                </div>
                                                                <div class="col s12 m6">
                                                                  <input type="char" id="clave" disabled="disabled" class="form-control validate" placeholder="BAPE001011MVZNRVA6">
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="center"><label><strong>DATOS DE CONTACTO</strong></label></div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="email" class="form-label">Email</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" class="form-control validate" id="email" disabled="disabled" placeholder="evemi1110@gmail.com">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="tel">Teléfono</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="tel" class="form-control validate" disabled="disabled" placeholder="2721478987">
                                                              </div>
                                                          </div>
                                                          <div class="center"><label><strong>DIRECCIÓN</strong></label></div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="calle" class="form-label">Calle</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" class="form-control validate" id="calle" disabled="disabled" placeholder="Avenida San Juan">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="entre_cal">Entre calles</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="entre_cal" class="form-control validate" disabled="disabled" placeholder="Mezón y Guadalupe">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="no_int">Número interior</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="no_int" class="form-control validate"  disabled="disabled" placeholder="18">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="no_ext">Número exterior</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="no_ext" class="form-control validate" disabled="disabled" placeholder="12">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="cod_pos" class="form-label">Código Postal (C.P.)</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" class="form-control validate" id="cod_pos" disabled="disabled" placeholder="94760">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="colonia">Colonia</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="colonia" class="form-control validate" disabled="disabled" placeholder="Centro">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="local">Localidad</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="local" class="form-control validate" disabled="disabled" placeholder="Acultzingo">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="ciudad" class="form-label">Ciudad</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" class="form-control validate" id="ciudad"  disabled="disabled" placeholder="Acultzingo">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="estado">Entidad Federativa (estado)</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="estado" class="form-control validate" disabled="disabled" placeholder="Veracruz">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                <label for="pais">País</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                <input type="varchar" id="pais" class="form-control validate" disabled="disabled" placeholder="México">
                                                              </div>
                                                          </div>
                                                          <div class="center"><label><strong>DATOS DE VENTA</strong></label></div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                  <label for="credito" class="form-label">Límite de crédito</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                  <input type="integer" class="form-control validate" disabled="disabled" id="credito" placeholder="$2000.00">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                  <label for="dias">Días de crédito</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                  <input type="integer" id="dias" class="form-control validate" disabled="disabled" placeholder="30 ">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m6">
                                                                  <label for="frec" class="form-label">Frecuente</label>
                                                              </div>
                                                              <div class="col s12 m6">
                                                                  <input type="varchar" id="frec" class="form-control validate" disabled="disabled" placeholder="Alto">
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col s12 m12">
                                                                  <label for="textarea" class="form-label">Comentarios</label>
                                                                  <textarea type="varchar" id="textarea" class="form-control validate" disabled="disabled" placeholder="Se le ha realizado al cliente una venta de $5,000.00 pesos" data-length="255"></textarea>
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
