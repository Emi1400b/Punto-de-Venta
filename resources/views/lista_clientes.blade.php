@include('layouts.header')  

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
                          <div class="btn-group col-md-2 right">
                            <a href="{{ url('/papelera_cli') }}" class="btn btn-warning">
                              <i class="material-icons left">delete_sweep</i>PAPELERA
                            </a>
                          </div>
                          <div class="btn-group col-md-2 right">
                            <a href="{{ url('/registrar_cli') }}" class="btn btn-success">
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
                              <th class="center">No. cliente</th>
                              <th class="center">Nombre completo</th>
                              <th class="center">Razón social</th>
                              <th class="center">RFC</th>
                              <th class="center">Teléfono</th>
                              <th class="center">Email</th>
                              <th class="center">Dirección</th>
                              <th class="center">límite de crédito</th>
                              <th class="center">Días de crédito</th>
                              <th class="center">Frecuente</th>
                              <th class="center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="odd gradeX">
                            <td class="center">1</td>
                            <td class="center">CL1</td>
                            <td class="center">Carmela Remírez Correa</td>
                            <td class="center"></td>
                            <td class="center">RACC9506258M2</td>
                            <td class="center">2721650819</td>
                            <td class="center">carmen.raco1@gmail.com</td>
                            <td class="center">Salvador Gonzalo Garcia No.20, Centro, C.P. 94300, Orizaba, Veracruz</th>   
                            <td class="center">$2,500.00</td>
                            <td class="center">30</td>
                            <td class="center">Bajo</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr>  
                          <tr class="even gradeC">
                          <td class="center">2</td>
                            <td class="center">CL2</td>
                            <td class="center"></td>
                            <td class="center">PAQUIN, S.A. DE C.V.</td>
                            <td class="center">PAQ-591107-QY3</td>
                            <td class="center">2724783502</td>
                            <td class="center">paquin.miempresa59@gmail.com</td>
                            <td class="center">NetzahualcoyotLl No.202, Minera, C.P. 94320, Santa Cruz, Veracruz</th>   
                            <td class="center">$15,000.00</td>
                            <td class="center">210</td>
                            <td class="center">Alto</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr>  
                          <tr class="odd gradeA">
                          <td class="center">3</td>
                            <td class="center">CL3</td>
                            <td class="center">Ulises Cuevas Pérez</td>
                            <td class="center"></td>
                            <td class="center">CUPU800825569</td>
                            <td class="center">2711156487</td>
                            <td class="center">moreno.carj@gmail.com</td>
                            <td class="center">Av. Adolfo López Mateos No.7, Centro, C.P. 94300, Orizaba, Veracruz</th>   
                            <td class="center">$4,000.00</td>
                            <td class="center">150</td>
                            <td class="center">Medio</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr> 
                          <tr class="odd gradeA">
                          <td class="center">4</td>
                            <td class="center">CL4</td>
                            <td class="center"></td>
                            <td class="center">JORGE CARLOS RODRIGUEZ LANDEROS</td>
                            <td class="center">ROLJ-610423-154</td>
                            <td class="center">2728497895</td>
                            <td class="center">jorg.rodl61@gmail.com</td>
                            <td class="center">Av. San Juan No.18, Centro, C.P. 94760, Córdoba, Veracruz</th>   
                            <td class="center">$3,500.00</td>
                            <td class="center">120</td>
                            <td class="center">Medio</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
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
