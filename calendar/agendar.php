<?php include('includeCalendar/header.php') ?>

<body>

	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div id="general1" class="col-centered col-lg-12 text-center">
				<h1 id="title1">Agendamiento de citas</h1>

				<p id="title2" class="lead">Reserve su consulta veterinaria en los horarios</p>
			</div>
		</div>

		<div class="row" class="col-lg-12 text-center">
			<div id="general2">
				<div id="calendar" class="col-centered">
				</div>
			</div>
		</div>

		<div id="card" class="card pb-3 mt-5 mx-8 campoForm1">
			<label class=" info">Selecione una vez en el Calendario para agendar su cita , en algun dia
				disponible</label>
		</div>


		<div id="card" class="card pb-3 mt-5 mx-5 campoForm2">


			<label class="info">Seleccione dos veces la cita dentro del recuadro en el Calendario para
				modificarla</label>
		</div>

	</div>
	</div>


	<!-- /.row -->

	<!-- Modal -->
	<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="form-horizontal" method="POST" action="addEvent.php">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for="title" class="col-sm-2 control-label">Titulo</label>
							<div class="col-sm-10">
								<input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
							</div>
						</div>
						<div class="form-group">
							<label for="color" class="col-sm-2 control-label">Color</label>
							<div class="col-sm-10">
								<select name="color" class="form-control" id="color">
									<option value="">Seleccionar</option>
									<option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
									<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
									<option style="color:#008000;" value="#008000">&#9724; Verde</option>
									<option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
									<option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
									<option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
									<option style="color:#000;" value="#000">&#9724; Negro</option>

								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="start" class="col-sm-2 control-label">Hora</label>
							<div class="col-sm-10">
								<input type="text" name="start" class="form-control" id="start">
							</div>
						</div>
						<div class="form-group">
							<label for="end" class="col-sm-2 control-label">Fecha Final</label>
							<div class="col-sm-10">
								<input type="text" name="end" class="form-control" id="end">
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="form-horizontal" method="POST" action="editEventTitle.php">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for="title" class="col-sm-2 control-label">Titulo</label>
							<div class="col-sm-10">
								<input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
							</div>
						</div>
						<div class="form-group">
							<label for="color" class="col-sm-2 control-label">Color</label>
							<div class="col-sm-10">
								<select name="color" class="form-control" id="color">
									<option value="">Seleccionar</option>
									<option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
									<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
									<option style="color:#008000;" value="#008000">&#9724; Verde</option>
									<option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
									<option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
									<option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
									<option style="color:#000;" value="#000">&#9724; Negro</option>

								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label class="text-danger"><input type="checkbox" name="delete"> Eliminar
										Evento</label>
								</div>
							</div>
						</div>

						<input type="hidden" name="id" class="form-control" id="id">


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('includeCalendar/footer.php'); ?>