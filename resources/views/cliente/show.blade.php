@extends('.layouts.main')



@section('content')



<div class="page-cliente">

    @if($cliente)

    <div class="menu-cliente">

        <ul>

            <li><a href="/geral/{{$cliente->id ?? ''}}">Anamnese</a></li>

            <li><a href="/anamnese/{{$cliente->id ?? ''}}">Anamnese Corporal</a></li>

            <li><a href="/facial/{{$cliente->id ?? ''}}">Facial</a></li>

            <li><a href="/endereco/{{$cliente->id ?? ''}}">Endereço</a></li>

            <li><a href="/cliente/{{$cliente->id ?? ''}}">Serviços</a></li>

        </ul>

    </div>

    @endif



    <div class="col-12 row">

        

        <div class="col-md-3 perfil text-center">

           @if($cliente)

            <img src="/img/perfil/{{$cliente->image ?? 'padrao.jpg'}}" data-bs-toggle="modal" data-bs-target="#imgperfil" class="rounded" alt="image cliente {{$cliente->name ?? ''}}">

           

            <div class="infos">

                <h4> {{$cliente->name ?? ''}} </h4>

                <span>

                    {{$cliente->telefone ?? ''}} / {{$cliente->email ?? ''}} <br>

                    CPF: {{$cliente->cpf ?? 'Não informado'}} / RG: {{$cliente->rg ?? 'Não informado'}}

                   @if($cliente->datanascimento != null)
                   @php 
                    $birthdate = date('Y/m/d', strtotime($cliente->datanascimento)); // data de nascimento
                    $today = new DateTime(); // data atual

                    $diff = $today->diff(new DateTime($birthdate));

                    echo '/ '$diff->y . ' Anos';
                    @endphp
                  
                    <br>
                   @endif


                    <div style="text-align:center;">

                @if(isset($cliente->endereco) && !$cliente->endereco->logradouro)

                    <h6>Endereço Não Cadastrado!</h6>

                @else 

                    <h6>Endereço: </h6>

                    <b>Logradouro: </b> {{$cliente->endereco->logradouro ?? ''}}, {{$cliente->endereco->numero ?? ''}} <br>

                    <b>Comp: </b> {{$cliente->endereco->complemento ?? ''}} <br>

                    <b>Cidade: </b>{{$cliente->endereco->cidade ?? ''}} - {{$cliente->endereco->estado ?? ''}} <br>

                @endif



                <b>Profissão: </b> {{$cliente->profissao ?? 'Não Informada'}} <br>

            </div>

                </span>

                

            </div>

            <br>

            <a href="/cliente/edit/{{$cliente->id}}" class="btn btn-sm btn-warning text-white">Editar Dados</a>

             @endif

        </div>

       

        <div class="col-md-9 conteudo">

                @yield('conteudo')

        </div>

    </div>

</div>



@yield('modais')





@if(isset($cliente))

@include('cliente.anamnese.model.imgperfil')

@include('cliente.geral.model.create')

 <!-- modulo perimetria -->

 @include('cliente.anamnese.model.perimetria')

            @include('cliente.anamnese.model.listpedi')

            @include('cliente.anamnese.model.editpedi')

            @include('cliente.anamnese.model.adipometria')

            @include('cliente.anamnese.model.listadi')

            @include('cliente.anamnese.model.editadi')

            @include('cliente.anamnese.model.notes')

            @include('cliente.facial.model.notes')

            

            @if(isset($agenda) && isset($itemcompras))



                <!-- Modal -->

<div class="modal fade" id="vincular" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModalLabel">Vincular a Compra</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <form action="/agenda/compra/{{$agenda->id ?? ''}}" method="post">

          @csrf

          <div class="modal-body">

          <div style="width: 80%; margin: 0 auto; ">

          <div class="mb-3">

          <label for="compra" class="form-label">Selecione a Compra</label>

          <select class="form-select" aria-label="compra" id="compra" name="compra">

                @foreach($itemcompras as $item)

                @if($item->usado < $item->quantidade)

                    <option value="{{$item->id}}"> {{$item->quantidade - $item->usado}}/{{$item->quantidade}} - {{$item->servico->description ?? ''}} {{$item->pacote->description ?? ''}} </option>

                @endif

                @endforeach

          </select>

          </div>

            </div>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

            <button onclick="this.disabled='true'; this.innerHTML='Vinculando..'; this.form.submit();" class="btn btn-primary">Vincular</button>

          </div>

      </form>

    </div>

  </div>

</div>

@endif

@else 



<div class="modal fade" id="addcliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar cliente</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <form action="/agenda/vinc/{{$agenda->id ?? ''}}" method="post">

          @csrf

          <div class="modal-body">

          <div style="width: 80%; margin: 0 auto; ">

          <div class="mb-3">

            <label for="cliente" class="form-label">*Cliente</label>

            <input type="text" list="sugestoes" name="cliente" placeholder="Pesquise o Cliente" class="form-control" id="cliente2" required>

           

        </div>

        <datalist id="sugestoes"> </datalist>

        <div style="text-align:center;">

            <span class="bg-secondary-subtle" id="resul2" style="display:none;"></span>

        </div>



        <input type="hidden" name="idcliente" id="idcliente2">

            </div>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

            <button onclick="this.disabled='true'; this.innerHTML='Vinculando..'; this.form.submit();" class="btn btn-primary">Vincular</button>

          </div>

      </form>

    </div>

  </div>

</div>



@endif





@section('script')



    <script>

    $(document).ready(function(){

   

       $("#cliente2").keyup(function(){

                        var cliente = $(this).val();

                        let msg = '';

                        if(cliente.length > 2){

                        

                            $.ajax({

                                url: "/api/clientes?search="+$(this).val(),

                                type: "GET",    

                                dataType: "json",

                                success: function (retorno) {

                                        if(retorno.erro !== undefined){

                                            msg = 'Cliente não encontrado!';

                                        }else{

                                            msg = retorno.name;

                                            $("#idcliente2").val(retorno.id);



                                            const sugestoes = document.querySelector("#sugestoes");

                                            const meuInput = document.querySelector("#cliente2");



                                            meuInput.addEventListener("input", async () => {

                                            const valorDigitado = meuInput.value;

                                            

                                            // Fazer uma busca no banco de dados aqui, por exemplo via ajax

                                            const resultado = retorno.name

                                            

                                            // Limpar sugestões anteriores

                                            sugestoes.innerHTML = "";

                                            

                                            // Adicionar novas sugestões

                                            

                                                const opcao = document.createElement("option");

                                                opcao.value = resultado;

                                                sugestoes.appendChild(opcao);

                                            

                                            });

                                        }

                                            

                                    },

                                    error: function(data){

                                        msg = 'Cliente Não encontrado!';

                                    },

                                    complete: function(){

                                        $("#resul2").text(msg);

                                        $("#resul2").fadeIn();

                                        

                                    }

                            });

                        }

       });

    });

</script>

@endsection





@endsection