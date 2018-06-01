

<?php foreach ($award as $award_item): ?>
    <h3><?php echo $award_item['BookName']; ?></h3>
    <div class="main">
        <?php echo $award_item['ActivityID']; ?>
        <?php echo $award_item['AwardID']; ?>
        <?php echo $award_item['BookInfo']; ?>
        <?php echo $award_item['BookPhoto']; ?>
        <?php echo $award_item['QRCode']; ?>
        <?php echo $award_item['BookInfo']; ?>
        <?php echo $award_item['AwardQuantity']; ?>
    </div>
    <p><a href="<?php echo site_url('award/'.$award_item['AwardID']); ?>">View award</a></p>

<?php endforeach; ?>