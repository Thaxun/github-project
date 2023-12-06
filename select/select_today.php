<?php foreach($show_today as $row): ?>
<tr>
    <td><?= $number++; ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= number_format($row['price']) ?> ກີບ</td>
    <td><?= $row['date'] ?></td>
</tr>
<?php endforeach;?>
<tr>
    <td colspan="3" class="text-center">ລວມເປັນເງິນ</td>
    <td><?= number_format($sum_today[0]); ?> ກີບ</td>
</tr>