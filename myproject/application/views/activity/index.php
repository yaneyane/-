

<?php foreach ($activity as $activity_item): ?>
    <?php $activity_item['ActivityID'] ?>

    <h3><?php echo $activity_item['ActivityID']; ?></h3>
    <h3><?php echo $activity_item['ActivityName']; ?></h3>
    <div class="main">
        <?php echo $activity_item['StartTime']; ?>
        <?php echo '<br>'; ?>

        <?php echo $activity_item['EndTime']; ?>
        <?php echo '<br>'; ?>
        <?php echo $activity_item['status']; ?>
    </div>
    <p><a href="<?php echo site_url('activity/'.$activity_item['ActivityID']); ?>">查看详情</a></p>
    <p><a href="<?php echo site_url('award/'.$activity_item['ActivityID']*10); ?>">特等奖信息</a></p>
    <p><a href="<?php echo site_url('award/'.($activity_item['ActivityID']*10+1)); ?>">一等奖信息</a></p>
    <p><a href="<?php echo site_url('award/'.($activity_item['ActivityID']*10+2)); ?>">二等奖信息</a></p>
    <p><a href="<?php echo site_url('award/'.($activity_item['ActivityID']*10+3)); ?>">三等奖信息</a></p>


<?php endforeach; ?>