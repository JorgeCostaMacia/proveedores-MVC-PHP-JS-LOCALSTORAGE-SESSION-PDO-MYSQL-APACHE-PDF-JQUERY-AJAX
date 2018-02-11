<div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1">
                <div class="container" id="formAcountContainer">
                    <form id="formGetAccount" method="POST" class="col-md-6 col-md-offset-2 panel panel-default">
                        <input type="hidden" name="usuario" value="cliente">
                        <input type="hidden" name="cod_cliente" value="<?=$services->getSession()->getUsuario()->getCodCliente();?>">

                        <div class="panel-body">
                            <h3 class="text-center">Datos cliente</h3>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon "><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-user"></span>
                    </i></span>
                                <input type="text" name="cod_cliente" id="cod_cliente" maxlength="30" class="form-control" placeholder="Nick" aria-describedby="sizing-addon1" value="<?=$services->getSession()->getUsuario()->getCodCliente();?>" required disabled>
                            </div>
                            <br>


                            <div class="input-group input-group-lg">
                <span class="input-group-addon "><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-user"></span>
                    </i></span>
                                <input type="text" name="nick" id="nickReg" maxlength="30" class="form-control" placeholder="Nick" aria-describedby="sizing-addon1" value="<?=$services->getSession()->getUsuario()->getNick();?>" required disabled>
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-lock"></span>
                </i></span>
                                <input type="password" name="password" id="passReg" maxlength="30" class="form-control" placeholder="Password" value="<?=$services->getSession()->getUsuario()->getPassword();?>" required>
                            </div>
                            <br/>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-user"></span>
                </i></span>
                                <input type="text" name="nombre_completo" id="nombre_completo" maxlength="30" class="form-control" placeholder="Nombre completo" value="<?=$services->getSession()->getUsuario()->getNombreCompleto();?>" required disabled>
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-user"></span>
                </i></span>
                                <input type="text" name="cif_dni" id="cif_dni" maxlength="30" class="form-control" placeholder="CIF / DNI" value="<?=$services->getSession()->getUsuario()->getCifDni();?>" required disabled>
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-briefcase"></span>
                </i></span>
                                <input type="text" name="razon_social" id="razon_social" maxlength="30" class="form-control" placeholder="Razon social" value="<?=$services->getSession()->getUsuario()->getRazonSocial();?>" required>
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-briefcase"></span>
                </i></span>
                                <input type="text" name="domicilio_social" id="domicilio_social" maxlength="30" class="form-control" placeholder="Domicilio social" value="<?=$services->getSession()->getUsuario()->getDomicilioSocial();?>" required>
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-map-marker"></span>
                </i></span>
                                <input type="text" name="ciudad" id="ciudad" maxlength="30" class="form-control" placeholder="Ciudad" value="<?=$services->getSession()->getUsuario()->getCiudad();?>" required>
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-envelope"></span>
                </i></span>
                                <input type="email" name="email" id="email" maxlength="30" class="form-control" placeholder="Email" value="<?=$services->getSession()->getUsuario()->getEmail();?>" required>
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-earphone"></span>
                </i></span>
                                <input type="text" name="telefono" id="telefono" maxlength="30" class="form-control" placeholder="Telefono" value="<?=$services->getSession()->getUsuario()->getTelefono();?>" required>
                            </div>
                            <br>
                            <button type="button" name="modificar" id="modificar" class="btn btn-warning btn-block">Modificar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>