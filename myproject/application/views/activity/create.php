<!--<h2><?php echo $title; ?></h2>-->

<?php echo validation_errors(); ?>

<?php echo form_open('activity/create'); ?>
<html>
<head>
    <script src="success.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<label for="ActivityName">ActivityName1</label>
<input type="input" name="ActivityName" /><br />

<label for="EndTime">EndTime1</label>
<textarea name="EndTime"></textarea><br />

<input type="submit" name="submit" value="发起活动" )"/>


<!--此处完成之后跳转到suessss界面，但实际上需要js交互跳转到award/create-->

</form>
</body>
</html>