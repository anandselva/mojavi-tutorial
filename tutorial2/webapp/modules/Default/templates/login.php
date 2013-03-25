<div>Please enter your username</div>
<form method=POST action="?module=Default&action=Login">
<input type="text" name="username" maxlength="25" value="<?= $template['username'];?>"/>
<input type="submit" name="submit" value="Submit" />
<br><b><?= $template['error'];?></b>
