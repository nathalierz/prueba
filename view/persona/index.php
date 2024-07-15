<?php
	require_once("../head/head.php");
	require_once("../../controller/personaController.php");

	$obj = new personaController();
	# recibe un arreglo de todos los registros de la BD
	$rows = $obj->index();
	$temp = "";
?>

<h2 class="text-center"> Registros </h2>

<div class="container row p-4 d-flex">
	<div class="col-sm-12">
		<table class="table table-striped">
			<thead>
				<tr class="text-center">
					<th scope="col">Nombre</th>
					<th scope="col">Apellido Paterno</th>
					<th scope="col">Apellido Materno</th>
					<th scope="col">Edad</th>
					<th scope="col">Nacionalidad</th>
					<th scope="col">Ciudad de nacimiento</th>
					<th scope="col">Número telefónico</th>
					<th scope="col">RFC</th>
					<th colspan="2"> Acciones </th>
				</tr>
			</thead>
			<tbody>
				<?php if($rows): ?>
					<?php foreach ($rows as $row): ?>
						<tr>
							<?php
							$max = 8; #Es el número de columnas
							for ($i = 1; $i <= $max; $i++){
								?>
								<th><?= $row[$i]?></th>
							<?php }?>
							<th>
								<a href="edit.php?id=<?=$row[0]?>" class="btn btn-success">Modificar</a>
								<a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= $row[0]?>">Eliminar</a>

								<!-- Modal para eliminar -->
								<div class="modal fade" id="<?= $row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="exampleModalLabel">ADVERTENCIA</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												¿Desea eliminar el registro?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
												<a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
											</div>
										</div>
									</div>
								</div>
								</th>
						</tr>
					<?php endforeach;?>

				<?php else: ?>
					<tr>
						<td colspan="9" class="text-center"> No hay registros </td>
					</tr>

				<?php endif; ?>

			</tbody>
			
		</table>
	</div>
</div>


<?php
	require_once("../head/footer.php");
	
?>