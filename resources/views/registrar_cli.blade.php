@include('layouts.header')  
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>NUEVO CLIENTE</b>
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
                                                <a href="{{ url('/lista_clientes') }}" class="btn-danger dropdown-toggle btn">
                                                    <i class="material-icons left">cancel</i>CANCELAR
                                                </a>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <a onclick="Alertabtn()" href="{{ url('/lista_clientes') }}" class="btn btn-success">
                                                    <i class="material-icons left">check_circle</i>GUARDAR
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div><label><strong>TIPO DE CLIENTE</strong></label></div>
                                    <div class="row">
                                        <form action="#">
                                            <p>
                                                <input name="group1" type="radio" id="check1" />
                                                <label for="check1">Físico</label>
                                                <input name="group1" type="radio" id="check2" />
                                                <label for="check2">Moral</label>
                                            </p>
                                        </form>
                                    </div>
                                    <div><label><strong>DATOS PERSONALES</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m1 ">
                                            <label for="puesto" class="form-label">No. cliente</label>
                                            <input type="varchar" class="form-control" id="puesto" class="validate" placeholder="3">
                                        </div>
                                        <div class="col s12 m4 ">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="varchar" class="form-control" id="nombre" class="validate" placeholder="Luis Ángel">
                                        </div>
                                        <div class="col s12 m4 ">
                                            <label for="apellido_ap" class="form-label">Primer apellido</label>
                                            <input type="varchar" class="form-control" id="apellido" class="validate" placeholder="Pérez">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="segundo_ap" class="form-label">Segundo apellido</label>
                                            <input type="varchar" class="form-control" id="segundo_ap" class="validate" placeholder="Carrazco">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="clave"> Clave Única de Registro de Población (CURP)</label>
                                            <input id="clave" class="form-control" type="varchar" class="validate" placeholder="PECL970807HVZZRD00">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="alias" class="form-label">Registro Federal de Contribuyentes (RFC)</label>
                                            <input type="varchar" class="form-control" id="alias" class="validate" placeholder="PECL970807ND06">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="fecha_nac">Razón social</label>
                                            <input id="fecha_nac" class="form-control" type="varchar" class="validate" placeholder="11 de octubre de 2000">
                                        </div>
                                    </div>
                                    <div><label><strong>DATOS DE CONTACTO</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="varchar" class="form-control" id="email" class="validate" placeholder="luis.pc08@gmail.com">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tipo_num" class="form-label">Tipo</label>
                                            <select  type="varchar" class="form-control">
                                                <option value="" disabled selected >Desplega la lista...</option>
                                                <option value="1">Teléfono</option>
                                                <option value="2">Celular</option>
                                            </select>
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tel">Número</label>
                                            <input id="tel" class="form-control" type="varchar" class="validate" placeholder="2721478987">
                                        </div>
                                    </div>
                                    <div><label><strong>DIRECCIÓN</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <label for="calle" class="form-label">Calle</label>
                                            <input type="varchar" class="form-control" id="calle" class="validate" placeholder="Av. San Francisco">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="entre_cal">Entre calles</label>
                                            <input id="entre_cal" class="form-control" type="varchar" class="validate" placeholder="Nicólas y Mezón">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_int">Número interior</label>
                                            <input id="no_int" class="form-control" type="varchar" class="validate" placeholder="35">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_ext">Número exterior</label>
                                            <input id="no_ext" class="form-control" type="varchar" class="validate" placeholder="19">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="cod_pos" class="form-label">Código Postal (C.P.)</label>
                                            <input type="varchar" class="form-control" id="cod_pos" class="validate" placeholder="94700">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="colonia">Colonia</label>
                                            <input type="varchar" id="colonia" class="form-control" class="validate" placeholder="Centro">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="local">Localidad</label>
                                            <input type="varchar" id="local" class="form-control" class="validate" placeholder="Maltrata">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="ciudad" class="form-label">Ciudad</label>
                                            <input type="varchar" class="form-control" id="ciudad" class="validate" placeholder="Maltrata">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="estado">Entidad Federativa (estado)</label>
                                            <input type="varchar" id="estado" class="form-control" class="validate" placeholder="Veracruz">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="pais">País</label>
                                            <input type="varchar" id="pais" class="form-control" class="validate" placeholder="México">
                                        </div>
                                    </div>
                                    <div><label><strong>DATOS DE VENTA</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="credito" class="form-label">Límite de crédito</label>
                                            <input type="integer" class="form-control" id="credito" class="validate" placeholder="$2000.00">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="dias">Días de crédito</label>
                                            <input type="integer" id="dias" class="form-control" class="validate" placeholder="30 ">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tipo_num" class="form-label">Frecuente</label>
                                            <select  type="varchar" class="form-control">
                                                <option value="" disabled selected >Desplega la lista...</option>
                                                <option value="Alto">Alto</option>
                                                <option value="Medio">Medio</option>
                                                <option value="Bajo">Bajo<option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <label for="textarea" class="form-label">Comentarios</label>
                                            <textarea type="varchar" id="textarea" class="form-control validate" placeholder="Se le ha realizado al cliente una venta de $5,000.00 pesos" data-length="255"></textarea>
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