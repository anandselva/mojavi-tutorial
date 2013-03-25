<html>
<head>
<title><?= $template['title']?></title>
<style type="text/css">
.boy { color: blue }
.girl { color: red }
.userdata, .homelink {border-top: thin dotted }
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
</body>
</html>