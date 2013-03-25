<html>
<head>
<title><?= $template['title']?></title>
<style type="text/css">
.boy { color: blue }
.girl { color: red }
.userdata, .homelink {border-top: thin dotted }
.error { background-color: red; color: white }
</style>
</head>
<body>
<h3>
    <?= $template['title']?>
</h3>
<div class="body">
    <?= $template['body']?>
</div>
<div class="homelink">
    <?= $template['homelink']?>
</div>
<div class="userdata">
    <?= $template['userdata']?>
</div>
<div class="error">
    <b><?= $template['errors'];?></b>
</div>
</body>
</html>