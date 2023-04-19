<!-- Modal -->
<div class="modal fade" id="imgperfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Altere a Imagem do perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/cliente/image/{{$cliente->id}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      
            @csrf
            <div class="controle">
            <div class="area-upload">
                <label for="upload-file" class="label-upload">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <div class="texto">Imagem do cliente para perfil <br>Clique ou arraste o arquivo</div>
                </label>
                <input type="file" name="image" id='image' class="image" required accept="image/jpg,image/png"/>
                
                <div class="lista-uploads">
                </div>
               
            </div>

            <div class="img-curso">
                <img src="" alt="" class="img-capa-curso" id="img-user">
            </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Alterar</button>
      </div>
      </form>
    </div>
  </div>
</div>