<h1>About Us</h1>
<p> Ini adalah halaman About</p>
<?php foreach ( $user_data as $user) : ?>
<p>Username : <?php echo $user->username; ?></p>
<?php endforeach; ?>