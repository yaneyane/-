<h2><?php echo $title; ?></h2>

<?php foreach ($recipient as $recipient_item): ?>

    <h3><?php echo $recipient_item['UserName']; ?></h3>
    <div class="main">
        <?php echo $recipient_item['PhoneNo']; ?>
    </div>
    <p><a href="<?php echo site_url('recipient/'.$recipient_item['UserID']); ?>">查看中奖人填写的个人信息</a></p>

<?php endforeach; ?>