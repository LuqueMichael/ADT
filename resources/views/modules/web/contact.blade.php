@extends('modules.web.master')
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-6">
            <div class="container">
                <div class="content-part text-center">
                    <h1 class="breadcrumbs-title white-color mb-0">Contacto</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Contact Section Start -->
        <div id="rs-contact" class="rs-contact inner pt-100 md-pt-80">
            <div class="container">
                <div class="content-info-part mb-60">
                    <div class="row gutter-16">
                        <div class="col-lg-4 md-mb-30">
                            <div class="info-item">
                                <div class="icon-part">
                                    <i class="fa fa-at"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Telefonos</h4>
                                    <a href="tel:+088589-8745">(+51)00000000</a><br/>
                                    <a href="tel:+088589-8745">(+51)00000000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="info-item">
                                <div class="icon-part">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Correos</h4>
                                    <a href="mailto:support@rstheme.com">soporte@corporacionadt.com</a>
                                    <a href="mailto:support@rstheme.com">soporte@corporacionadt.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-item">
                                <div class="icon-part">
                                    <i class="fa fa-map-o"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Direccion</h4>
                                    <p>Mz. 55 Lt. 11 Sector Buenos Milagros , San Juan de Miraflores, Lima , Perú</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form-part">
                    <div class="row md-col-padding">
                        <div class="col-md-5 custom1 pr-0">
                            <div class="img-part"></div>
                        </div>
                        <div class="col-md-7 custom2 pl-0">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post"
                                action="https://rstheme.com/products/html/reobiz/mailer.php">
                                <div class="sec-title mb-53 md-mb-42">
                                    <div class="sub-title white-color">Formulario</div>
                                    <h2 class="title white-color mb-0">Contacto</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Nombres Apellidos" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="Correo" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Celular" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Mensaje" required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="readon modify">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g-map mt-100 md-mt-80">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d555.2361037004683!2d-76.96414226527486!3d-12.143756792908517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b86201019ae9%3A0xe6fbb7fa2725bd2c!2sCENTRO%20DE%20EMPRENDIMIENTO%20VICTOR%20AYTE!5e0!3m2!1ses-419!2spe!4v1698511879702!5m2!1ses-419!2spe"></iframe>
            </div>
        </div>
        <!-- Contact Section End -->
    </div>
    <!-- Main content End -->
@endsection
