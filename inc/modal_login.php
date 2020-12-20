<style>
.pages {
    flex: 1;
    white-space: nowrap;
    position: relative;
    transition: all 0.4s;
    display: flex;
}

.pages .page {
    min-width: 100%;
    padding: 20px 15px;
    padding-top: 0px;
    background: linear-gradient(to left, #005a8f, #005a8f);
}



.pages .page:nth-of-type(1) .input {
    transform: translateX(-100%) scale(0.5);
}

.pages .page:nth-of-type(2) .input {
    transform: translateX(100%) scale(0.5);
}

.pages .page .input {
    transition: all 1s;
    opacity: 0;
    transition-delay: 0s;
}

.pages .page.signup {
    background: linear-gradient(to left, #005a8f, #005a8f);
}

.pages .page .title {
    margin-bottom: 10px;
    font-size: 14px;
    position: relative;
    line-height: 14px;
    color: white;
}

.pages .page .title i {
    vertical-align: text-bottom;
    font-size: 19px;
}

.pages .page .input {
    margin-top: 20px;
}

.pages .page input.text {
    background: #f6f7f9;
    border: none;
    border-radius: 4px;
    width: 100%;
    height: 40px;
    line-height: 40px;
    padding: 0px 10px;
    color: rgba(0, 0, 0, 0.5);
    outline: none;
}

.pages .page input[type=submit] {
    background: rgba(0, 0, 0, 0.5);
    color: #f6f7f9;
    height: 40px;
    line-height: 40px;
    width: 100%;
    border: none;
    border-radius: 4px;
    font-weight: 600;
}

.tabs {
    max-height: 50px;
    height: 50px;
    display: flex;
    background: #fff;
}

.tabs .tab {
    flex: 1;
    color: #5d708a;
    text-align: center;
    line-height: 50px;
    transition: all 0.2s;
}

.tabs .tab .text {
    font-size: 14px;
    transform: scale(1);
    transition: all 0.2s;
}

input[type=radio] {
    display: none;
}

input[type=radio]:nth-of-type(1):checked~.tabs .tab:nth-of-type(1) {
    box-shadow: inset -3px 2px 5px rgba(0, 0, 0, 0.25);
    color: #3f4c7f;
}

input[type=radio]:nth-of-type(1):checked~.tabs .tab:nth-of-type(1) .text {
    transform: scale(0.9);
}

input[type=radio]:nth-of-type(1):checked~.pages {
    transform: translateX(0%);
}

input[type=radio]:nth-of-type(1):checked~.pages .page:nth-of-type(1) .input {
    opacity: 1;
    transform: translateX(0%);
    transition: all 0.5s;
}

input[type=radio]:nth-of-type(1):checked~.pages .page:nth-of-type(1) .input:nth-child(1) {
    transition-delay: 0.2s;
}

input[type=radio]:nth-of-type(1):checked~.pages .page:nth-of-type(1) .input:nth-child(2) {
    transition-delay: 0.4s;
}

input[type=radio]:nth-of-type(1):checked~.pages .page:nth-of-type(1) .input:nth-child(3) {
    transition-delay: 0.6s;
}

input[type=radio]:nth-of-type(1):checked~.pages .page:nth-of-type(1) .input:nth-child(4) {
    transition-delay: 0.8s;
}

input[type=radio]:nth-of-type(1):checked~.pages .page:nth-of-type(1) .input:nth-child(5) {
    transition-delay: 1s;
}

input[type=radio]:nth-of-type(2):checked~.tabs .tab:nth-of-type(2) {
    box-shadow: inset 3px 2px 5px rgba(0, 0, 0, 0.25);
    color: #3f4c7f;
}

input[type=radio]:nth-of-type(2):checked~.tabs .tab:nth-of-type(2) .text {
    transform: scale(0.9);
}

input[type=radio]:nth-of-type(2):checked~.pages {
    transform: translateX(-100%);
}

input[type=radio]:nth-of-type(2):checked~.pages .page:nth-of-type(2) .input {
    opacity: 1;
    transform: translateX(0%);
    transition: all 0.5s;
}

input[type=radio]:nth-of-type(2):checked~.pages .page:nth-of-type(2) .input:nth-child(1) {
    transition-delay: 0.2s;
}

input[type=radio]:nth-of-type(2):checked~.pages .page:nth-of-type(2) .input:nth-child(2) {
    transition-delay: 0.4s;
}

input[type=radio]:nth-of-type(2):checked~.pages .page:nth-of-type(2) .input:nth-child(3) {
    transition-delay: 0.6s;
}

input[type=radio]:nth-of-type(2):checked~.pages .page:nth-of-type(2) .input:nth-child(4) {
    transition-delay: 0.8s;
}

input[type=radio]:nth-of-type(2):checked~.pages .page:nth-of-type(2) .input:nth-child(5) {
    transition-delay: 1s;
}

@keyframes hi {
    from {
        transform: translateY(50%) scale(0, 0);
        opacity: 0;
    }
}

button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
    position: absolute;
    z-index: 999;
    right: 10px;
    top: 5px;
}

.close {
    float: right;
    font-size: 35px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: 1 !important;
}

.necio {
    padding-right: 0px !important;
}
</style>

<div class="modal fade necio" id="mostrarLogin" tabindex="-1" role="dialog" aria-labelledby="basicModal"
    aria-hidden="true" style="margin-left: auto;
    margin-right: auto;
    width: 39%; margin-top: 10%; ">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    <input type="radio" name="tab1" id="signin" checked="checked" />

    <div class="pages">
        <div class="page">
            <form action="process/login.php" method="post" role="form" class=" margin-bottom-0" data-form="login">
                <div class="input">
                    <div class="title"> CORREO</div><input class="text" type="text" name="correo-login"
                        placeholder="" />
                </div>
                <div class="input">
                    <div class="title"> PASSWORD</div><input class="text" type="password" name="clave-login"
                        placeholder="" />
                </div>
                <div class="input"><input type="submit" value="INGRESAR" /></div>

            </form>
        </div>

    </div>
    <div class="tabs">
        <label class="tab" for="signin">
            <div class="text">INGRESAR</div>
        </label>
        <label class="tab" for="register">
            <div onclick="mostrarRegistro();" class="text">REGISTRO</div>
        </label>
    </div>
</div>

<div class="modal fade necio" id="mostrarRegistro" tabindex="-1" role="dialog" aria-labelledby="basicModal"
    aria-hidden="true" style="margin-left: auto;
    margin-right: auto;
    width: 39%; margin-top: 7%; ">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    <input type="radio" name="tab" id="register" checked="checked" />

    <div class="pages">
        <div class="page">

            <div class="page signup">
                <form action="process/registro.php" method="post" role="form" class=" margin-bottom-0">
                    <div class="input">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input">
                                    <div class="title"> NOMBRE COMPLETO</div><input class="text" type="text"
                                        name="nombre-reg" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="input">
                                    <div class="title"> DOCUMENTO (DNI, RUC, CE)</div><input class="text"
                                        name="doc-reg" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="input">
                                    <div class="title">RAZÓN SOCIAL </div><input class="text" name="razon-reg"
                                        type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="input">
                                    <div class="title">CORREO</div><input class="text" name="correo-reg" type="email"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="input">
                                    <div class="title"> TELEFONO </div><input class="text" name="tel-reg"
                                        type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="input">
                                    <div class="title"> PASSWORD</div><input class="text" type="password"
                                        name="clave-reg" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="input">
                                    <input class="form-check-input" style="display:inline-flex!important;" type="radio"
                                          name="tipo_radio" id="tipo_radio" value="tecnico" checked>
                                    <label class="form-check-label title" style="color:white;" for="tipo_radio">
                                        TECNICO
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="input">
                                    <input class="form-check-input" style="display:inline-flex!important;" type="radio"  
                                        id="tipo_radio" name="tipo_radio" value="empresa">
                                    <label class="form-check-label title" style="color:white;" for="tipo_radio">
                                       EMPRESA
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>






                    <div class="input"><input type="submit" value="REGISTRO" /></div>
                </form>
            </div>
        </div>

    </div>
    <div class="tabs">
        <label class="tab" for="signin">
            <div onclick="mostrarLogin();" class="text">INGRESAR</div>
        </label>
        <label class="tab" for="register">
            <div onclick="mostrarRegistro();" class="text">REGISTRO</div>
        </label>
    </div>
</div>










<style>
.iframe_cli {
    margin-left: auto;
    margin-right: auto;
    display: flex;
    margin-top: 10px;

}
</style>
<div class="modal fade necio" id="mostrar1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">


    <iframe src="registro/pdf/lista_de_precio.pdf" class="iframe_cli" width="50%" height="610px" seamless="seamless"
        scrolling="no" frameBorder="0" allowFullScreen="false"></iframe>
</div>