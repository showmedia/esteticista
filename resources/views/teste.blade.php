@extends('.layouts.main')

@section('content')
<div style="width:100%;">

<div style="margin:auto; width: 200px; text-align:center;">
<canvas width="250" height="400" id="signature-pad"></canvas>
<form method="POST" action="/assinatura" id="form">
    @csrf
    <input type="hidden" name="assinatura" value="teste" id="assinatura">
    <button type="button" class="btn btn-secondary" onclick="signaturePad.clear()">Limpar</button>
    <button type="submit" class="btn btn-primary">Assinar</button>
</form>
</div>
</div>

<br><br><br>
@if(isset($assinatura))
    <div class="container2">
        <div class="overlay" style="background-image: url({{ $assinatura }}"></div>
    </div>
@endif
@endsection