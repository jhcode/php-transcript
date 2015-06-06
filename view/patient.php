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
			<h3>Hello, <?= empty($userdata['name']) ? 
				'please tell us your name by clicking <a href="javascript:void(0)" class="adminEdit">here</a>':$userdata['name'] ?>
			</h3>
			<p>Here are the prescriptions made for you:</p>
			<table class="tabular">
				<thead>
					<tr>
						<th>Drug</th>
						<th>Quantity</th>
						<th>Dosage</th>
						<th>Prescribed by</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($prescriptions as $prescription): ?>
					<tr>
						<td><?= $prescription['id'] ?></td>
						<td><?= $prescription['quantity'] ?></td>
						<td><?= $prescription['dosage'] ?></td>
						<td><?= DB::pluck('users','name',['id'=>$prescription['prescriber_id']]) ?></td>
						<td><?= $prescription['date_created'] ?></td>
					</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</section>
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