<div class="modal fade modal-xl" id="listnotes2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModalLabel">Anotações Anamnese Facial</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>



      <div class="modal-body" style="width: 100%; margin:0 auto;">

      

        <div style="width: 100%;">

        <form action="/note/2/{{$cliente->facial->id ?? ''}}" method="post">

            @csrf

        <div class="row">

            <div class="col-md-1" style="justify-content: center; display:flex; align-items: center;">

                <button class="btn btn-primary">Anotar</button>

            </div>

            <div class="col-md-11">

            <div class="form-floating">

            <textarea class="form-control" required name="note" style="height: 100px;" placeholder="Adicione uma Atonacao" id="note"></textarea>

            <label for="floatingTextarea">Adicione uma Anotação</label>

            </div>

            </div>

        </div>

        </form>

        <br>

            <h5 style="color:#C39D5E; text-align:center; font-size: 18px;"> Anotações </h5>



            @if(isset($cliente->facial))

            @foreach($cliente->facial->notes as $note)

                <div class="note">

                    <form action="/note/{{$note->id}}" method="post">

                        @csrf

                        @method('delete')

                        <button>X</button>

                    </form>

                    

                    {{$note->description}}

                </div>

            @endforeach

            @endif



         </div>



      </div>



      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

        

      </div>

  

    </div>

  </div>

</div>