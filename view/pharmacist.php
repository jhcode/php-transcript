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
					<li title="Manage users" class="active"><i class="fa fa-sitemap fa-2x allUsers"></i></li>
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
						<li class="active allUsers">All Drugs</li>
						<li class="allDisease">All Diseases</li>
						<li class="newitem"><i class="fa fa-plus"></i> Add new</li>
					</ul>
				</div>
				<div class="fl disp">
					<table class="tabular">
						<thead>
							<tr>
								<th>Drug name</th>
								<th>Manufacturer</th>
								<th>Indications</th>
								<th>Precautions</th>
								<th>More</th>
							</tr>
						</thead>
						<tbody>
							<? foreach($drugs as $drug): ?>
							<tr>
								<td><?= $drug['name'] ?></td>
								<td><?= $drug['manufacturer'] ?></td>
								<td><?= $drug['indications'] ?></td>
								<td><?= $drug['precautions'] ?></td>
								<td>
								<a href="javascript:void(0)" id="deleteDrug" data-id="<?= $drug['id'] ?>" data-url="<?= url() ?>/drugdel">
									Delete Drug
								</a>
								</td>
							</tr>
							<? endforeach; ?>
						</tbody>
					</table>
					<br>
				</div>
			</div>
		</div>
	</section>
	<template id="newItem">
		Add New <select name="" id="formType">
			<option value="drug">Drug</option>
			<option value="disease">Disease</option>
		</select><br><br>
		<div class="form-notify ghost"></div>
		<div class="variable adduser">
			<form action="<?= url() ?>/drugadd" method="post">
				<p><label for="drug_name">Drug Name:</label> <input type="text" name="drug_name"></p>
				<p><label for="manufacturer">Manufacturer:</label> <input type="text" name="manufacturer"></p>
				<p><label for="legal_class">Legal Class:</label> <input type="text" name="legal_class"></p>
				<p><label for="ph_class">Pharmacological Class:</label> <input type="text" name="ph_class"></p>
				<p><label for="description">General Description:</label> <input type="text" name="description"></p>
				<p><label for="indications">Indications:</label> <input type="text" name="indications"></p>
				<p><label for="children">Infant dosage:</label> <input type="text" name="children"></p>
				<p><label for="contraindications">Contraindications:</label> <input type="text" name="contraindications"></p>
				<p><label for="precautions">Precautions:</label> <input type="text" name="precautions"></p>
				<p><label for="interactions">Interactions:</label> <input type="text" name="interactions"></p>
				<p><label for="adverse_rxn">Adverse effects:</label> <input type="text" name="adverse_rxn"></p>
				<p><label for="how_supplied">How Supplied:</label> <input type="text" name="how_supplied"></p>
				<button class="btn" type="submit">Add Drug</button>
			</form>
		</div>
		<template class="diseaseForm">
			<form action="<?= url() ?>/diseaseadd" method="post">
				<p><label for="disease_name">Disease Name:</label> <input type="text" name="disease_name"></p>
				<p><label for="treatment">Treatment:</label> <input type="text" name="treatment"></p>
				<button class="btn" type="submit">Add Disease</button>
			</form>
		</template>
		<br>
	</template>
	<template id="diseaseTmp">
		<table class="tabular">
			<thead>
				<tr>
					<th>Disease name</th>
					<th>Treatment</th>
					<th>More</th>
				</tr>
			</thead>
			<tbody>
				<? foreach($diseases as $disease): ?>
				<tr>
					<td><?= $disease['name'] ?></td>
					<td><?= $disease['treatment'] ?></td>
					<td>
						<a href="javascript:void(0)" id="diseaseDel" data-id="<?= $disease['id'] ?>" data-url="<?= url() ?>/diseasedel">
							Delete Disease
						</a>
					</td>
				</tr>
				<? endforeach; ?>
			</tbody>
		</table>
		<br>
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