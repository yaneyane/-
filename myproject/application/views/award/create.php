<!--<h2><?php echo $title; ?></h2>-->

<?php echo validation_errors(); ?>

<?php echo form_open('award/create'); ?>

<h3>特等奖信息</h3>
<label for="BookName11">BookName1</label>
<input type="input" name="BookName11" /><br />

<label for="BookInfo11">BookInfo1</label>
<textarea name="BookInfo11"></textarea><br />

<label for="BookPhoto11">BookPhoto1</label>
<textarea name="BookPhoto11"></textarea><br />

<label for="QRCode11">QRCode1</label>
<textarea name="QRCode11"></textarea><br />

<label for="AwardQuantity11">AwardQuantity1</label>
<textarea name="AwardQuantity11"></textarea><br />



<h3>一等奖信息</h3>
<label for="BookName22">BookName2</label>
<input type="input" name="BookName22" /><br />

<label for="BookInfo22">BookInfo2</label>
<textarea name="BookInfo22"></textarea><br />

<label for="BookPhoto22">BookPhoto2</label>
<textarea name="BookPhoto22"></textarea><br />

<label for="QRCode22">QRCode2</label>
<textarea name="QRCode22"></textarea><br />

<label for="AwardQuantity22">AwardQuantity2</label>
<textarea name="AwardQuantity22"></textarea><br />


<h3>二等奖信息</h3>
<label for="BookName33">BookName3</label>
<input type="input" name="BookName33" /><br />

<label for="BookInfo33">BookInfo3</label>
<textarea name="BookInfo33"></textarea><br />

<label for="BookPhoto33">BookPhoto3</label>
<textarea name="BookPhoto33"></textarea><br />

<label for="QRCode33">QRCode3</label>
<textarea name="QRCode33"></textarea><br />

<label for="AwardQuantity33">AwardQuantity3</label>
<textarea name="AwardQuantity33"></textarea><br />


<h3>三等奖信息</h3>
<label for="BookName44">BookName4</label>
<input type="input" name="BookName44" /><br />

<label for="BookInf4o44">BookInfo4</label>
<textarea name="BookInfo44"></textarea><br />

<label for="BookPhoto44">BookPhoto4</label>
<textarea name="BookPhoto44"></textarea><br />

<label for="QRCode44">QRCode4</label>
<textarea name="QRCode44"></textarea><br />

<label for="AwardQuantity44">AwardQuantity4</label>
<textarea name="AwardQuantity44"></textarea><br />
<input type="submit" name="submit" value="保存" />



</form>