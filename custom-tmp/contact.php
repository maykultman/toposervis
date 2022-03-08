<?php /* Template Name: Contacto */ ?>
<?php get_header() ?>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<img src="<?=img_featured_url($post->ID)?>">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
			<?=$post->post_content?>
			<form id="formContact" action="" class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label>Nombres</label>
					<input type="text" class="form-control" name="names" value="" placeholder="Ingresa tu nombre">
					<span class="messages"></span>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Correo electrónico</label>
					<input type="text" class="form-control" name="email" placeholder="Correo electrónico">
					<span class="messages"></span>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Apellidos</label>
					<input type="text" class="form-control" name="lastname" placeholder="Ingresa tus apellidos">
					<span class="messages"></span>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">¿En qué servicio topográfico estás interesado?</label>
					<select name="service" id="" class="form-control" >
						<option value="">Elige una opción</option>
						<option value="option1">option1</option>
					</select>
					<span class="messages"></span>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Número telefónico</label>
					<input type="text" class="form-control" name="phone" placeholder="Número con el que desea ser contactado">
					<span class="messages"></span>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label for="">Mensaje</label>
					<input type="text" class="form-control" placeholder="Mensaje">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<button type="submit" class="rounded-2 my-3 py-2 px-4">Enviar</button>
				</div
			</form>
		</div>
	</div>
	<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<!-- <div class="toast-container position-absolute p-3 top-0 end-0" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Formulario</strong>
      <small>Datos enviados con éxito...</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
	Datos enviados con éxito...
    </div>
  </div>
</div> -->
<?php get_footer() ?>