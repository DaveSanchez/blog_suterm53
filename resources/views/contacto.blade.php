@extends('layouts.base')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('img/contact-bg.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contactanos</h1>
              <span class="subheading">¿Tienes algúna queja o sugerencia?.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>
                Llena el formulario y en breve nos pondremos en contacto
            </p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="contactForm" method="POST" action="{{ route('contacto.message') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Nombre" name="contact" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger">
                @if ($errors->has('contact'))
                  {{ $errors->first('contact') }}
                @endif
                </p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Correo" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger">
                @if ($errors->has('email'))
                  {{ $errors->first('email') }}
                @endif
                </p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" placeholder="Teléfono" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger">
                @if ($errors->has('phone'))
                  {{ $errors->first('phone') }}
                @endif
                </p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Mensaje</label>
                <textarea rows="5" class="form-control" placeholder="Mensaje" name="body" id="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger">
                @if ($errors->has('body'))
                  {{ $errors->first('body') }}
                @endif
                </p>
              </div>
            </div>
            <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Archivos</label>
                      <input type="file" name="documents[]" class="form-control" placeholder="(PDF, WORD, JPG)" multiple>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    @endsection
