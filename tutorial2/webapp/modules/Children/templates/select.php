<div>Please select whether you want to display boys or girls or both</div>
<form method=POST action="<?= $template['selectAction']?>">
<input name="sex"  type="radio" value="g">Girls<br>
<input name="sex"  type="radio" value="b">Boys<br>
<input name="sex"  type="radio" value="a">Girls and Boys<br>
<input type="submit" name="submit" value="Submit" />
</form>
