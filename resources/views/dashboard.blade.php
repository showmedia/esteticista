@extends('.layouts.main')

@section('content')
<div class="col-12">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand text-secondary" href="/"> AGENDA</a>  
       
      <form class="d-flex" role="search" action="/clientes" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Pesquise Clientes" aria-label="Search">
      </form>
      <form class="d-flex" role="search" action="/servicos" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Pesquise Serviços" aria-label="Search">
      </form>
    
  </div>
</nav>

<div class="agenda">
    <div class="area bg-warning-subtle">
        <div class="reader">
            <input type="date" class="text-center" style="text-align:center;" name="data" id="data">
            <button data-bs-toggle="modal" data-bs-target="#adicionar"><ion-icon name="add" ></ion-icon>
</button>
        </div>
        <div id="loading"></div>
        <div id="sem" class="text-center" style="width:100%; font-weight: bold; height: 300px; display:none;justify-content: center;
    align-items: center;"><span>Sem Agendas para esse dia!</span></div>
        <table class="table-hover table">
            <tbody id="tabela"></tbody>
        </table>
    </div>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agendar Serviço</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/agenda" method="post">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
            <label for="cliente" class="form-label">*Cliente</label>
            <input type="text" list="sugestoes" name="cliente" placeholder="Pesquise o Cliente" class="form-control" id="cliente" required>
           
        </div>
        <datalist id="sugestoes"> </datalist>
        <div style="text-align:center;">
            <span class="bg-secondary-subtle" id="resul" style="display:none;"></span>
        </div>

        <input type="hidden" name="idcliente" id="idcliente">
   
        <div class="mb-3">
            <label for="servico" class="form-label">*Serviço</label>
            <select class="form-select" name="servico" id="servico" aria-label="Default select example">
                
                @foreach($servicos->sortBy('description') as $servico)
                    <option value="{{$servico->id}}"> {{$servico->description ?? ''}} </option>
                @endforeach
            </select>
        </div>
        
           <div class="mb-3" id="outroserv">
            <label for="servico2" class="form-label">*Outro Serviço</label>
            <select class="form-select" name="servico2" id="servico2" aria-label="Default select servico">
                    <option value="0">Selecione</option>
                @foreach($servicos->sortBy('description') as $servico)
                    <option value="{{$servico->id}}"> {{$servico->description ?? ''}} </option>
                @endforeach
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="button" id="addserv" class="btn btn-sm btn-primary">Adicionar Mais</button>
        </div>
        <div class="mb-3">
            <label for="dia" class="form-label">*Dia</label>
            <input type="date" name="dia" placeholder="Descrição do pacote" class="form-control" id="dia" required>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">*Horário</label>
            <input type="time" name="hora" value="08:00" placeholder="Horário" class="form-control" id="hora" min="08:00" max="20:00" step="900" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="this.disabled='true'; this.innerHTML='Agendando...'; this.form.submit();" class="btn btn-primary">Adicionar</button>
      </div>
      </form>
    </div>
  </div>
  <button data-bs-toggle="modal" data-bs-target="#fecharagenda" class="btn btn-danger fechar-agenda">FECHAR AGENDA</button>
</div>

<!-- Modal -->
<div class="modal fade" id="fecharagenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Fechar Agenda!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/fecharagenda" method="post">
        @csrf
      <div class="modal-body">
  
        <div class="mb-3">
            <label for="dia" class="form-label">*Dia</label>
            <input type="date" name="dia" placeholder="Descrição do pacote" class="form-control" id="dia3" required>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">*Hora Inicio</label>
            <input type="time" name="hora" value="08:00" placeholder="Horário" class="form-control" id="hora" min="08:00" max="20:00" step="900" required>
        </div>
        <div class="mb-3">
            <label for="horafim" class="form-label">*Hora Fim</label>
            <input type="time" name="horafim" value="20:00" placeholder="Horario final" class="form-control" id="horafim" min="08:00" max="20:00" step="900" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="this.disabled='true'; this.innerHTML='Agendando...'; this.form.submit();" class="btn btn-primary">Adicionar</button>
      </div>
      </form>
    </div>
  </div>
  <button class="btn btn-danger fechar-agenda">FECHAR AGENDA</button>
</div>

@endsection

@section('script')
<script>
    function carregarcliente(cliente, callback){
                        
                        $.ajax({
                                url: "/api/clientes?id="+cliente,
                                type: "GET",    
                                dataType: "json",
                                    success: function (data) {
                                        callback(data.name);
                                   
                                    },
                                    error: function(data){
                                        console.error(erro);
                                    },
                                    complete: function(){
                                        
                                    }
                            });
                            
    }
    function carregarservico(servico, callback){
                            $.ajax({
                                url: "/api/servicos?id="+servico,
                                type: "GET",    
                                dataType: "json",
                                    success: function (data) {
                                        callback(data.description);
                                    },
                                    error: function(data){
                                        console.error(erro);
                                    },
                                    complete: function(){
                                        
                                    }
                            });
    }
    function cancelaragenda(id){
        window.location.href="/cancelaragenda/"+id;
    }
    function abriragenda(id){
        window.location.href="/agenda/"+id;
    }
    function carregaragenda(dia){
            $("#tabela").hide();
            $("#sem").css('display','none');
            // Mostra o elemento de carregamento
            document.getElementById("loading").style.display = "block";

          
                            $.ajax({
                                url: "/api/agendas?dia="+dia,
                                type: "GET",    
                                dataType: "json",
                                    success: function (retorno) {
                                       console.log(retorno);
                                       let tabela = document.getElementById('tabela');
                                            $("#tabela tr").remove();
                                        
                                        for(let i=0;i < retorno.length;i++){
                                            let tr = tabela.insertRow();
                                            
                                            let td_cliente = tr.insertCell();
                                       
                                            let td_inicio = tr.insertCell();
                                            let td_fim = tr.insertCell();
                                            let td_servico = tr.insertCell();
                                            let td_acoes = tr.insertCell();
                                        
                                            let dateStr = retorno[i].inicio;
                                            let momentObj = moment(dateStr);
                                            let dateFormatted = momentObj.format('DD/MM/YYYY');
                                            let timeFormatted = momentObj.format('HH:mm');
                                            dateStr = retorno[i].fim;
                                            momentObj = moment(dateStr);
                                            let dateFim = momentObj.format('HH:mm');
                                        
                                       
                                            td_inicio.innerText = timeFormatted;
                                            td_fim.innerText = dateFim;
                                                
                                            if(retorno[i].tipo == 1){
                                                tr.classList.add('bg-secondary', 'text-white');
                                                td_cliente.innerText = 'HORÁRIO FECHADO';
                                                td_servico.innerText = 'FECHADO';
                                                td_acoes.innerHTML = "<button onclick='cancelaragenda("+retorno[i].id+")' class='btn btn-danger btn-sm'><ion-icon name='trash'></ion-icon></button>";
                                            }else{
                                                let id = retorno[i].clientes_id;
                                                carregarcliente(id, function(resultado){
                                                td_cliente.innerText = resultado;
                                                });
                                                id = retorno[i].servicos_id; 
                                                carregarservico(id, function(resultado){
                                                td_servico.innerText = resultado;
                                                td_acoes.innerHTML = "<button onclick='abriragenda("+retorno[i].id+")' class='btn btn-warning btn-sm'><ion-icon name='open'></ion-icon></button>";
                                                });
                                            }
                                         }
                                         
                                         setTimeout(() => {
                                            document.getElementById("loading").style.display = "none";
                                            if(retorno.length < 1){
                                                 $("#sem").css('display','flex');
                                            }else{
                                                $("#tabela").fadeIn();

                                            }
                                         }, 800);
                                    },
                                    error: function(data){
                                      
                                    },
                                    complete: function(){
                                        
                                    }
                            });
                 
    }

    $(document).ready(function(){
        $("#outroserv").hide();
        $("#addserv").click(function(){
            $("#outroserv").fadeIn();
            $(this).hide();
        });
        
        
        $("#data").change(function(){
            carregaragenda($(this).val());
        });

                    $("#cliente").keyup(function(){
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
                                            $("#idcliente").val(retorno.id);

                                            const sugestoes = document.querySelector("#sugestoes");
                                            const meuInput = document.querySelector("#cliente");

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
                                        $("#resul").text(msg);
                                        $("#resul").fadeIn();
                                        
                                    }
                            });
                        }
                    });



        // Obter a data atual
        const dataAtual = new Date().toISOString().split('T')[0];

        // Definir o valor do input date com a data atual
        $('#data').val(dataAtual);
        $('#dia').val(dataAtual);
        $("#dia3").val(dataAtual);
        carregaragenda(dataAtual);

        


    });
    
    let initialX = null;

$(document).on('mousedown touchstart', function(event) {
  if (event.type === 'touchstart') {
    initialX = event.touches[0].clientX;
  } else {
    initialX = event.clientX;
  }
});

$(document).on('mousemove touchmove', function(event) {
  if (initialX === null) {
    return;
  }

  let currentX;

  if (event.type === 'touchmove') {
    currentX = event.touches[0].clientX;
  } else {
    currentX = event.clientX;
  }

  const diffX = initialX - currentX;

  if (Math.abs(diffX) > 50) {
    if (diffX > 0) {
        
      // Obter o valor do input date
      const dataSelecionada = $('#data').val();
      const dataSelecionada2 = $('#dia').val();

        
        // Criar um objeto Date com a data selecionada
        const data = new Date(dataSelecionada);
        const data2 = new Date(dataSelecionada2);

        
        // Adicionar um dia à data
        data.setDate(data.getDate() + 1);
        data2.setDate(data2.getDate() + 1);

        
        // Formatar a nova data no formato ISO
        const novaData = data.toISOString().split('T')[0];
        const novaData2 = data2.toISOString().split('T')[0];

        
        // Definir o valor do input date com a nova data
        $('#data').val(novaData);
        $('#dia').val(novaData2);
        $("#dia3").val(novaData);
        carregaragenda(novaData);


    } else {
        // Obter o valor do input date
        const dataSelecionada = $('#data').val();
        const dataSelecionada2 = $('#dia').val();

            
            // Criar um objeto Date com a data selecionada
            const data = new Date(dataSelecionada);
            const data2 = new Date(dataSelecionada2);

            
            // Subtrair um dia da data
            data.setDate(data.getDate() - 1);
            data2.setDate(data2.getDate() - 1);

            
            // Formatar a nova data no formato ISO
            const novaData = data.toISOString().split('T')[0];
            const novaData2 = data2.toISOString().split('T')[0];

            
            // Definir o valor do input date com a nova data
            $('#data').val(novaData);
            $('#dia').val(novaData2);
            $("#dia3").val(novaData);

            carregaragenda(novaData);


    }

    initialX = null;
  }
});

$(document).on('mouseup touchend', function() {
  initialX = null;
});

</script>
@endsection