@extends('.cliente.show')

@section('conteudo')
 
    
    
        <div class="container">
            @if(count($cliente->gerais) > 0)
            <div class="row">
                <div class="col-5">
                        <div style="width: 80%; margin: 0 auto; text-align:center;">
                        <ul style="display:block;">
                         
                        @foreach($cliente->gerais->reverse() as $ficha)
                           <form id="formwhats{{$ficha->id}}" target="_blanck" action="/whats/{{$ficha->id}}" method="post">@csrf
                                <li style="list-style:none; align-itens: center; margin-top:15px;">
                                @if($ficha->assinatura != null) <button  class="btn btn-sm btn-outline-success"><ion-icon name="logo-whatsapp"></ion-icon></button>  @endif 

                                     <a style="margin-left: 10px;" href="/geral/view/{{$ficha->id}}">Ficha Anamnese {{$ficha->cliente->name ?? ''}} {{date('d/m/Y', strtotime($ficha->created_at))}}  <ion-icon name="document-outline"></ion-icon></a>
</li> <br>
</form>
                            @endforeach
                        </ul>
                  
                    </div>

                    
                </div>
            </div>
             @endif
            <div class="row" style="margin-top:30px;">
                <div class="col-7 text-center">
                    <div style="margin:0 auto;  background-color:red;">
                        <a href="/geral/create/{{$cliente->id}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalcreate"><ion-icon name="reader-outline"></ion-icon> Preencher Ficha Anamnese</a> 
                        
                       

 
                    </div>
                </div>
            </div>
        </div>
   




@endsection