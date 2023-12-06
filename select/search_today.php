<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
    <link rel="icon" href="../logo/tx.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<style>
* {
    font-family: Noto sans lao;
}
</style>

<body>
    <div class="container-fluid mt-3">
        <div class="row">
           <div class="col-md-2">
            <input type="date" id="search_today1" class="form-control">
           </div>
           <div class="col-md-2">
            <input type="date" id="search_today2" class="form-control">
           </div>
           <div class="col-md-2">
            <button type="button" id="send" class="btn btn-success"><i class="bi bi-search"></i></button>
           </div>
           <div id="show">

                <table class="table table-bordered" id="mytable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ລາຍການ</th>
                        <th>ລາຄາ</th>
                        <th>ວັນທີ່ເດືອນປີ</th>
                    </tr>
                    </thead>

                </table>
        </div>
        </div>

    </div>

   
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
        $("#send").click(function() {
            let search_id = $("#search_today1").val();
            let search_id2 = $("#search_today2").val();
            $.ajax({
                url: "search/today.php",
                type: 'post',
                data: {
                    id: search_id,
                    id2: search_id2
                },
                success: function(data) {
                    $("#show").html(data);
                }
            })
        })
    })
    </script>
</body>

</html>