<h2>User List</h2>

<p><?php echo $this->html->link('Sign Up', 'Users::signup'); ?></p>

<?php if($users->count()) { ?>
<ul>
<?php foreach($users as $user) { ?>
<li><?php echo $h($user->name); ?></li>
<?php } ?>
</ul>
<?php } ?>