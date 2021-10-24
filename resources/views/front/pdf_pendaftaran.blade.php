<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link href="/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="/ckeditor/ckeditor.js"></script>
    <!-- Custom styles for this template-->
    <link href="/backend/css/sb-admin-2.min.css" rel="stylesheet">
   
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <p><b>{{date('md',strtotime($dt->created_at))}}/{{$dt->id}}</b></p>
                    </div>
                    <div class="card-body">
                       <p> Yth :</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama </th>
                                    <th>Nomor Handphone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$dt->nama_lengkap}}</td>
                                    <td>{{$dt->no_handphone}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>Silahkan Ke BKK untuk melakukan Pendaftaran Ulang. Dan Tunjukan Schreenshot Hasil Pendaftaran.</p>
                        <p><b>Trimakasiih Admin BKK</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
    <script src="/backend/vendor/jquery/jquery.min.js"></script>
    <script src="/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/js/sb-admin-2.min.js"></script>
</body>

</html>