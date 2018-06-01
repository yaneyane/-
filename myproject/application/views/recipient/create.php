<?php echo validation_errors(); ?>

<?php echo form_open('recipient/create'); ?>

<label for="UserName">UserName1</label>
<input type="input" name="UserName" /><br />

<label for="PhoneNo">PhoneNo1</label>
<textarea name="PhoneNo"></textarea><br />

<label for="Address">Address1</label>
<textarea name="Address"></textarea><br />

<input type="submit" name="submit" value="中奖人填写个人信息" />

</form>