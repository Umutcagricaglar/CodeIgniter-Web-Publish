<br><div class="container">
	<h3>Kayıtlı Kullanıcılar</h3>
	<div class="table-responsive">

		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
			<tr>
				<th>ID</th>
				<th>Kullanıcı Adı</th>
				<th>E-mail</th>

				<!--						<th>EDIT</th>-->
				<!--						<th>DELETE</th>-->


			</tr>
			</thead>
			<tbody>


<?php foreach ($rgstrs as $rgstrs_item): ?>

	<tr>
		<td><?php echo $rgstrs_item['id']; ?></td>
		<td><?php echo $rgstrs_item['name']; ?></td>
		<td><?php echo $rgstrs_item['email']; ?></td>

	</tr>
<?php endforeach; ?>
			</tbody>
		</table>
	</div>





		<div class="table-responsive">
			<h3>Alınan Mesajlar</h3>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				<tr>
					<th>ID</th>
					<th>Topic</th>
					<th>İsim</th>
					<th>Soyisim</th>
					<th>E-mail</th>
					<th>Gönderilen Mesaj</th>


					<!--						<th>EDIT</th>-->
					<!--						<th>DELETE</th>-->


				</tr>
				</thead>
				<tbody>

<?php foreach ($msgs as $msgs_item): ?>

	<tr>
		<td ><?php echo $msgs_item['id']; ?></td>
		<td ><?php echo $msgs_item['topic']; ?></td>
		<td><?php echo $msgs_item['first_name']; ?></td>
		<td><?php echo $msgs_item['last_name']; ?></td>
		<td><?php echo $msgs_item['email']; ?></td>
		<td><?php echo $msgs_item['msg']; ?></td>

	</tr>
<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
