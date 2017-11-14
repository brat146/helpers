<?php
include('../functions.php');
$year = 2017;
?>
<html>
    <body>
        <?php for($m = 1; $m <= 12; $m++) { ?>
        <h4><?php echo date("F", strtotime("{$year}-{$m}-01"));?></h4>
        <table class="table">
            <thead>
                <th>Пн</th>
                <th>Вт</th>
                <th>Ср</th>
                <th>Чт</th>
                <th>Пт</th>
                <th>Сб</th>
                <th>Вс</th>
            </thead>
            <tbody>
                <?php $arMonthDay = getCalendarForMonth($m, date("Y"));
                foreach($arMonthDay as $arWeek) { ?>
                <tr>
                    <?php foreach($arWeek as $day) { ?>
                    <td><?php echo $day;?></td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </body>
</html>