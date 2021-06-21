@include('layouts.header')  
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>ACTUALIZAR USUARIO</b>
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
                                                <a href="{{ url('/lista_usuarios') }}" class="btn-danger dropdown-toggle btn">
                                                    <i class="material-icons left">cancel</i>CANCELAR
                                                </a>
                                            </div>
                                            <div class="btn-group col-md-2 right">
                                                <a onclick="Alertabtn()" href="{{ url('/lista_usuarios') }}" class="btn btn-success">
                                                    <i class="material-icons left">check_circle</i>GUARDAR
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="varchar" type="text" class="form-control" id="puesto" class="validate" placeholder="Emi14">
                                        </div>
                                        <div class="col s12 m6">
                                            <label for="password">Contraseña</label>
                                            <input id="password" class="form-control" type="varchar" class="validate" placeholder="14EMI123456">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m8">
                                            <label for="nombreUser">Nombre del empleado</label>
                                            <input type="varchar" id="nombreUser" class="form-control" type="text" class="validate" placeholder="Evelyn Michelle Baz Pérez">
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