@extends('home')

@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Monitoring Kesehatan</h1>
</div>

<?php echo date('d M Y'); ?>

<form class="text-gray-900">

    <div class="card shadow-sm border-left-primary mb-3">
        <div class="form-group card-body">
            <p>1. Saat ini saya merasakan demam > 37 &#8451;</p>
            <p><input type='radio' name='1' value='pria' /> Ya</p>
            <p><input id="tidak" type='radio' name='1' value='perempuan' /> Tidak</p>
        </div>
    </div>
    
    <div class="card shadow-sm border-left-primary mb-3">
        <div class="form-group card-body">
            <p>2. Saat ini saya merasakan kesulitan bernafas</p>
            <p><input type='radio' name='2' value='pria' /> Ya</p>
            <p><input id="tidak" type='radio' name='2' value='perempuan' /> Tidak</p>
        </div>
    </div>

    <div class="card shadow-sm border-left-primary mb-3">
        <div class="form-group card-body">
            <p>3. Saat ini saya merasakan pusing</p>
            <p><input type='radio' name='3' value='pria' /> Ya</p>
            <p><input id="tidak" type='radio' name='3' value='perempuan' /> Tidak</p>
        </div>
    </div>

    <div class="card shadow-sm border-left-primary mb-3">
        <div class="form-group card-body">
            <p>4. Saat ini saya merasakan demam > 37 &#8451;</p>
            <p><input type='radio' name='4' value='pria' /> Ya</p>
            <p><input id="tidak" type='radio' name='4' value='perempuan' /> Tidak</p>
        </div>
    </div>

    <div class="form-group text-right">
        <input class="btn btn-primary" type="submit" value="Kirim">
    </div>
    
</form>

@endsection