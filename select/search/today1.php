<?php 
    require '../../connect.php';
    $date1 = $_POST['id'];
    $sql = $conn->prepare("SELECT * FROM list WHERE date = '$date1' ");
    $sql->execute();
    $show = $sql->fetchAll(PDO::FETCH_ASSOC);
    $number = 1;
    $sum = $conn->prepare("SELECT sum(price) FROM list WHERE date = '$date1'");
    $sum->execute();
    $show_sum = $sum->fetch(PDO::FETCH_NUM);
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<button class="btn btn-primary">ລວມເປັນເງິນ <?= number_format($show_sum[0]) ?> ກີບ</button>
<table class="table table-bordered" id="mytable">
    <thead>
        <tr>
            <th>#</th>
            <th>ລາຍການ</th>
            <th>ລາຄາ</th>
            <th>ວັນທີ່ເດືອນປີ</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($show as $row): ?>
        <tr>
            <td><?= $number++; ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= number_format($row['price']) ?> ກີບ</td>
            <td><?= $row['date'] ?></td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#mytable').DataTable({
                language : {
                    "decimal":        "",
                    "emptyTable":     "ບໍ່ມີຂໍ້ມູນ",
                    "info":           "ສະແດງ _START_ - _END_ ຈາກ _TOTAL_ ລາຍການ",
                    "infoEmpty":      "ຈາກໜ້າທີ່ 0 ໄປຫາໜ້າ 0 ຂອງ 0 ໜ້າສຸດທ້າຍ",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "ສະແດງ _MENU_ ລາຍການ",
                    "loadingRecords": "Loading...",
                    "processing":     "",
                    "search":         "ຄົ້ນຫາ:",
                    "zeroRecords":    "No matching records found",
                    "paginate": {
                        "first":      "First",
                        "last":       "Last",
                        "next":       "ໜ້າຕໍ່ໄປ",
                        "previous":   "ກ່ອນໜ້າ"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
        })
    </script>