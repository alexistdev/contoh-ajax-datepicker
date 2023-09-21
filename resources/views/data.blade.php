<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <label for="tanggal"></label>
            <input id="tanggal" class="form-control" type="date"/>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
            <table class="table" id="myTabel">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    let tanggal = document.getElementById("tanggal");
    tanggal.addEventListener("change", function(evt){
        myScript(this.value);
    });
    function myScript(tanggal) {
        let actionUrl = '{{route('data.contoh',":tgl")}}';
        actionUrl = actionUrl.replace(':tgl', tanggal);
        $.ajax({
            url: actionUrl,
            type: 'GET',
            success: function (result) {
                var table = $("#myTabel");
                table.find('tbody').empty();
                $.each(result.data, function(idx, elem){
                    table.append("<tr><td>"+elem.id+"</td><td>"+elem.name+"</td>   </tr>");
                });
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
</script>
</body>
</html>
