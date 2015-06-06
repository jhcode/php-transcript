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
			<h3>Manage users</h3>
			<span role="link" id="addUser"><i class="fa fa-plus"></i> &nbsp;Add user</span>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Fullname</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Account type</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($users as $count => $user): ?>
					<tr>
						<td><?= $count + 1 ?></td>
						<td><?= empty($user['name']) ? 'not set': $user['name'] ?></td>
						<td><?= $user['email'] ?></td>
						<td><?= empty($user['gender']) ? 'not set': $user['gender'] ?></td>
						<td><?= $user['usertype'] ?></td>
						<td><a href="javascript:void(0)" id="userDetails" data-id="<?= $user['id'] ?>">view details</a></td>
					</tr>
					<template id="userdetail<?= $user['id'] ?>">
						<div class="edituser">
							<div class="form-notify ghost"></div>
							<p><strong>Name: </strong> <span><?= $user['name'] ?></span></p>
							<p><strong>Email: </strong> <span><?= $user['email'] ?></span></p>
							<p><strong>Account type: </strong> <span><?= $user['usertype'] ?></span></p>
							<p><strong>Gender: </strong> <span><?= $user['gender'] ?></span></p>
							<p>
								<button class="btn" data-id="<?= $user['id'] ?>" id="userEdit">Edit</button>
								<button id="deleteUser" data-id="<?= $user['id'] ?>" data-url="<?= url() ?>/deleteuser" class="btn">Delete</button>
							</p>
						</div>
						<template id="useredit<?= $user['id'] ?>">
							<div class="edituser">
								<h3>Edit <?= $user['name'] ?>'s data</h3>
								<span role="link" class="allUsers"><i class="fa fa-mail-reply"></i> &nbsp;Back to all users</span>
								<div class="form-notify ghost"></div>
								<form method="post" action="<?= url() ?>/edituser">
								<input type="hidden" name="userId" value="<?= $user['id'] ?>">
								<p>
									<label for="name">Name: </label>
									<input type="text" value="<?= $user['name'] ?>" required="true" name="name">
								</p>
								<p>
									<label for="email">Email: </label>
									<input type="email" value="<?= $user['email'] ?>" required="true" name="email">
								</p>
								<p>
									<label for="usertype">Account type: </label>
									<select name="usertype" require="true" id="">
										<? foreach($usertypes as $accountType): ?>
										<option value="<?= $accountType ?>" <?= $accountType == $user['usertype'] ? 'selected':'' ?>>
											<?= $accountType ?>
										</option>
										<? endforeach; ?>
									</select>
								</p>
								<p>
									<label for="gender">Gender: </label>
									<input type="text" value="<?= $user['gender'] ?>" name="gender">
								</p>
								<p><button class="btn" type="submit">Save</button></p>
								</form>
							</div>
						</template>
					</template>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</section>
	<template id="user-add">
		<div class="adduser">
			<h3>Add user</h3>
			<span role="link" class="allUsers"><i class="fa fa-mail-reply"></i> &nbsp;Back to all users</span>
			<div class="form-notify ghost"></div>
			<form method="post" action="<?= url() ?>/adduser">
			<p>
				<label for="fname">Firstname: </label>
				<input type="text" name="fname" required="tue" placeholder="Firstname">
			</p>
			<p>
				<label for="lname" >Lastname: </label>
				<input type="text" name="lname" required="true" placeholder="Lastname">
			</p>
			<p>
				<label for="email">Email: </label>
				<input type="email" name="email" required="true" placeholder="john@example.com">
			</p>
			<p>
				<label for="usertype">Account type: </label>
				<select name="usertype" require="true" id="">
					<option value="patient">patient</option>
					<option value="pharmacist">pharmacist</option>
					<option value="admin">admin</option>
					<option value="pediatrist">pediatrist</option>
					<option value="ministry">ministry</option>
				</select>
			</p>
			<p>
				<label for="gender">Gender: </label>
				<input type="text" name="gender" placeholder="male or female">
			</p>
			<p>
				<label for="password">Password: </label>
				<input type="password" name="password" required="true" placeholder="*****">
			</p>
			<button class="btn" type="submit">Add user</button>
			</form>
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
				<input type="email" name="email" required="true" placeholder="john@example.com" value="<?= $email ?>">
			</p>
			<p>
				<label for="usertype">Account type: </label>
				<select name="usertype" require="true" id="">
					<? foreach($usertypes as $accountType): ?>
					<option value="<?= $accountType ?>" <?= $accountType == $usertype ? 'selected':'' ?>>
						<?= $accountType ?>
					</option>
					<? endforeach; ?>
				</select>
			</p>
			<p>
				<label for="gender">Gender: </label>
				<input type="text" name="gender" placeholder="male or female" value="<?= $gender ?>">
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