<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

    <script>
        function goBack() {
        window.history.back();
        }
    </script>

</head>
    <title>Surat Pemanggilan</title>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div>
        <button type="button" class="btn btn-primary" onclick="goBack()">Kembali</button>
        <button type="button" class="btn btn-success" onclick="printDiv('printableArea')">Print</button>
    </div>
</nav>
<div class="container text-gray-900" id="printableArea">
        <div class="text-center mb-5">
            <img class="img-fluid" src="{{ asset('img/kop surat.jpg')}}" >
        </div>
        <div>
            <div class="text-center mb-lg-5">
                <h2>Surat Pemanggilan</h2>
            </div>
            <p>
                Kepada   : {{ $kepada }}<br>
                Bagian   : {{ $bagian }}
            </p>
            <p>Menurut Pengamatan di lapangan ditemukan bahwa saudara pada :</p>
            <p>Tanggal   : {{ date('d, M Y', strtotime($tgl)) }}</p>
            <p>Telah melakukan pelanggaran Peraturan Umum/Prosedur Keselamatan & kesehatan Kerja.<br>Berupa :</p>
            <p><strong>{{ $pelanggaran }}</strong></p>
            <p>Deskripsi:</p>
            <p>{{ $deskripsi }}</p>
            <p>Demikian kami sampaikan dengan harap agar saudara tidak mengulangi lagi</p>
            <div class="text-center mb-5 mt-5">
                Penangung Jawab K3
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="text-right mt-5">
                (___________________________)
            </div>
        </div>

</div>
</body>
</html>