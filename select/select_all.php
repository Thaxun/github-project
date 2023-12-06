<?php foreach($fet as $row): ?>
    <tr>
        <td><?= $number++; ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= number_format($row['price']) ?> ກີບ</td>
        <td><?= $row['date'] ?></td>
    </tr>
<?php endforeach;?>
