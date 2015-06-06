<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page</title>
	<link rel="shortcut icon" href="<?= HTML::asset('images/favicon.png') ?>">
	<?= HTML::stylesheet('bootstrap.css') ?>
	<?= HTML::stylesheet('style.css') ?>
	<?= HTML::stylesheet('font-awesome.css') ?>
</head>
<body>
	<header class="header-ost">
		<div class="header-image"></div>
		<div class="top">
			<h1 class="fl"><i class="fa fa-user"></i> <?= ucfirst( Session::get('usertype') ) ?></h1>
			<nav class="fr">
				<ul>
					<li title="Manage users" class="active"><i class="fa fa-home fa-2x allUsers"></i></li>
					<li title="Settings"><i class="fa fa-cogs fa-2x adminEdit"></i></li>
					<li title="Sign Out"><i class="fa fa-sign-in fa-2x" id="signOut"></i></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>
	<section class="content-ost">
		<div class="load-icon"><i class="fa fa-spinner fa-spin fa-2x"></i></div>
		<div class="index-board">
			<div class="container-ost">
				<div class="fl nav">
					<ul>
						<li class="active allUsers">Patient's details</li>
						<li class="history-presc">Prescription History</li>
						<li class="drugpresc">Prescribe Drug</li>
					</ul>
				</div>
				<? foreach($drugs as $count => $drug): ?>
					<div id="modal-<?= $count + 1 ?>">
						<div class="modal-message">
							<a href="javascript:void(0)"><i class="fa fa-times fa-2x closebtn"></i></a>
							<h4>Drug Details</h4>
							<p><strong>Drug description:</strong> <?= $drug['name'] ?></p>
							<p><strong>Manufacturer:</strong> <?= $drug['manufacturer'] ?></p>
							<p><strong>Pharmacological Class:</strong> <?= $drug['pharmacological_class'] ?></p>
							<p><strong>Legal class:</strong> <?= $drug['legal_class'] ?></p>
							<p><strong>Child Dose:</strong> <?= $drug['children'] ?></p>
							<p><strong>Indications:</strong> <?= $drug['indications'] ?></p>
							<p><strong>Adverse Effects:</strong> <?= $drug['adverse_reactions'] ?></p>
						</div>
					</div>
				<? endforeach; ?>
				<div class="fl disp">
					<div class="wrapper">
					<div class="load-icon"><i class="fa fa-spinner fa-spin fa-2x"></i></div>
						<h3>Hello <?= empty($userdata['name']) ? 
						'please tell us your name by clicking <a href="javascript:void(0)" class="adminEdit">here</a>':$userdata['name'] ?>
						</h3>
						<p>Your patients are listed below</p>
						<table class="tabular">
							<thead>
								<tr>
									<th>id</th>
									<th>Patient Name</th>
									<th>Gender</th>
									<th>Genotype</th>
									<th>Blood Group</th>
									<th>Prescription</th>
								</tr>
							</thead>
							<tbody>
								<? foreach($patients as $key => $patient): ?>
								<tr>
									<td><?= $key + 1 ?></td>
									<td><?= $patient['title']; ?> <?= DB::pluck('users', 'name', ['id' => $patient['user_id']]); ?></td>
									<td><?= DB::pluck('users', 'gender', ['id' => $patient['user_id']]); ?></td>
									<td><?= $patient['genotype'] ?></td>
									<td><?= $patient['blood_group'] ?></td>
									<td>
										<a href="javascript:void(0)" data-id="<?= $key + 1 ?>" class="spicker">prescribe drug</a>
									</td>
								</tr>
								<template class="prescriber<?= $key + 1 ?>">
									<div class="load-icon"><i class="fa fa-spinner fa-spin fa-2x"></i></div>
									<p>
										<strong>Patient Name:</strong> 
										<?= $patient['title']; ?> <?= DB::pluck('users', 'name', ['id' => $patient['user_id']]); ?>
									</p>
									<p>
										<strong>Allergies:</strong> <?= $patient['allergies'] ?>
									</p>
									<p>
										<strong>Kin:</strong> <?= $patient['kin_name'] ?>
									</p>
									<div class="form-notify ghost"></div>
									<form method="post" action="<?= url() ?>/pushprescription" id="prescribeForm">
									<input type="hidden" name="patient_id" value="<?= $patient['user_id'] ?>">
									<table class="tabular">
										<thead>
											<tr>
												<th>Disease</th>
												<th>Drug</th>
												<th>Quantity</th>
												<th>Unit</th>
												<th>Dosage</th>
												<th>Info</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<select name="disease" id="">
														<? foreach($diseases as $key => $disease): ?>
														<option value="<?= $key + 1 ?>"><?= $disease['name'] ?></option>
														<? endforeach; ?>
													</select>
												</td>
												<td>
													<select name="drug" id="feeder">
														<? foreach($drugs as $key => $drug): ?>
														<option value="<?= $key + 1 ?>"><?= $drug['name'] ?></option>
														<? endforeach; ?>
													</select>
												</td>
												<td><input name="quantity" type="number"></td>
												<td>
													<select name="units" id="">
														<option value="mg">Mg</option>
														<option value="ml">Ml</option>
														<option value="cm">cm</option>
													</select>
												</td>
												<td><input name="dosage" type="text"></td>
												<td style="text-align:center"><i role="link" class="fa fa-info-circle inf"></i></td>
											</tr>
										</tbody>
									</table>
									<button type="submit" class="btn brave">Make Prescription</button>
									</form>
								</template>
								<? endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
	<template class="presc-history">
		<div class="prescriptionHistory">
		<div class="load-icon"><i class="fa fa-spinner fa-spin fa-2x"></i></div>
			<table class="tabular">
				<thead>
					<tr>
						<th>S/N</th>
						<th>Patient name</th>
						<th>Drug</th>
						<th>Disease</th>
						<th>Prescription by Doctor</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($prescriptions as $key => $prescription): ?>
					<tr>
						<td><?= $key + 1 ?></td>
						<td><?= DB::pluck('users', 'name', ['id' => $prescription['patient_id']]); ?></td>
						<td><?= DB::pluck('drugs', 'name', ['id' => $prescription['drug_id']]); ?></td>
						<td><?= DB::pluck('diseases', 'name', ['id' => $prescription['disease_id']]); ?></td>
						<td><?= DB::pluck('users', 'name', ['id' => $prescription['prescriber_id']]); ?></td>
						<td><?= $prescription['date_created'] ?></td>
					</tr>
					<? endforeach ?>
				</tbody>
			</table>
		</div>
	</template>
	<template id="admin-edit">
		<div class="editadmin">
		<div class="load-icon"><i class="fa fa-spinner fa-spin fa-2x"></i></div>
			<h3>Edit your details</h3>
			<span role="link" class="allUsers"><i class="fa fa-mail-reply"></i> &nbsp;Back to all users</span>
			<div class="form-notify ghost"></div>
			<form method="post" action="<?= url() ?>/editadmin">
			<p>
				<label for="fname">Firstname: </label>
				<input type="text" name="fname" required="tue" placeholder="Firstname" value="<?= $firstname ?>">
			</p>
			<p>
				<label for="lname" >Lastname: </label>
				<input type="text" name="lname" required="true" placeholder="Lastname" value="<?= $lastname ?>">
			</p>
			<p>
				<label for="email">Email: </label>
				<input type="email" name="email" required="true" placeholder="john@example.com" value="<?= $userdata['email'] ?>">
			</p>
			<p>
				<label for="usertype">Account type: </label>
				<select name="usertype" require="true" id="">
					<? foreach($usertypes as $accountType): ?>
					<option value="<?= $accountType ?>" <?= $accountType == $userdata['usertype'] ? 'selected':'' ?>>
						<?= $accountType ?>
					</option>
					<? endforeach; ?>
				</select>
			</p>
			<p>
				<label for="gender">Gender: </label>
				<input type="text" name="gender" placeholder="male or female" value="<?= $userdata['gender'] ?>">
			</p>
			<p>
				<label for="password">New Password: </label>
				<input type="password" name="password" placeholder="*****">
			</p>
			<button class="btn" type="submit">Save</button>
			</form>
		</div>
	</template>
	<?= HTML::script('jquery-2.1.1.min.js'); ?>
	<?= HTML::script('script.js') ?>
</body>
</html>