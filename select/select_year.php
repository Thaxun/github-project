<?php foreach($show_year as $row): ?>
    <tr>
        <td><?= $number++; ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= number_format($row['price']) ?> ກີບ</td>
        <td><?= $row['date'] ?></td>
       
    </tr>
<?php endforeach;?>
<tr>
    <td colspan="3" class="text-center">ລວມເປັນເງິນ</td>
    <td colspan=""><?= number_format($sum_year[0]); ?> ກີບ</td>
</tr>