$(document).ready(function(){
    let abrir = 0;
    $(".botao-lateral").click(function(){
        if(abrir == 0){
            $(this).toggleClass('botao-aberto');
            $('.menu-lateral').removeClass('menu-escondido');
          
            abrir = 1;
        }else{
            abrir = 0;
            fechar();
            $(this).removeClass('botao-aberto');
            $('.menu-lateral').toggleClass('menu-escondido');
   
        }
        
    });
  

    $(".tela").click(function(){
            if(abrir == 1){
                abrir = 0;
                fechar();
                $('.botao-lateral').removeClass('botao-aberto');
                $('.menu-lateral').toggleClass('menu-escondido');
          
            }
    });

    $(".menu1").click(function(){
        fechar();
        $(".sub1").slideDown('slow');
    });
    $(".menu2").click(function(){
        fechar();
        $(".sub2").slideDown('slow');
    });
    $(".menu3").click(function(){
        fechar();
        $(".sub3").slideDown('slow');
    });
    $(".menu4").click(function(){
        fechar();
        $(".sub4").slideDown('slow');
    });
    $(".menu5").click(function(){
        fechar();
        $(".sub5").slideDown('slow');
    });
    $(".menu6").click(function(){
        fechar();
        $(".sub6").slideDown('slow');
    });
    $(".menu7").click(function(){
        fechar();
        $(".sub7").slideDown('slow');
    });

    function fechar(){
        for(cont=1;cont<8;cont++){
            $('.sub'+cont).slideUp('slow');
        }
    }

    $("#telefone").mask('(99)99999-9999');
    $("#whats").mask('(99)99999-9999');
    $("#cpf").mask('999.999.999-99');
    $("#cnpj").mask('99.999.999/9999-99')
    $("#rg").mask('99.999.999-A');
    $("#cep").mask('99999-999');
    $("#valor").mask('999.999,99',{reverse: true});
    
    $("#confirm_password").keyup(function(){
        var pass = $("#password").val();
        var confirm = $("#confirm_password").val();
        if(pass == confirm){
            $("#cadastrar").prop("disabled", false);
            $("#confirm_password").addClass('input-success');
            $("#password").addClass('input-success');
        }else{
            $("#confirm_password").addClass('input-danger');
            $("#password").addClass('input-danger');
            $("#confirm_password").removeClass('input-success');
            $("#password").removeClass('input-success');
            $("#cadastrar").prop("disabled", true);
        }
    });

    $("#cep").keyup(function(){
        var cep = $(this).val();
        if(cep.length > 8){
            $.ajax({
                url: "https://cdn.apicep.com/file/apicep/"+cep+".json",
                type: "GET",
                dataType: "json",
                success: function (data) {

                    if(data.erro !== undefined){
                        alert("CEP inválido ou não encontrado");
                    }else{
                        $("#logradouro").val(data.address);
                        $("#bairro").val(data.district);
                        $("#cidade").val(data.city);
                        $("#estado").val(data.state);
                    }
                },
                error: function(data){
                    
                },
                complete: function(){
                    $("#numero").focus();
                }
            });
        }
    });
});

    const canvas = document.getElementById('signature-pad');
    const signaturePad = new SignaturePad(canvas, {
       
    });
     
 
    SignaturePad.prototype.onEnd = function (event) {
        if (this.touchend(event)) return;
      
        if (this.isEmpty()) {
          var dot = this._addPoint(this._strokeMoveUpdate(event));
          dot.pen.setLineWidth(2); // Define a largura da linha como 2 pixels
          dot.pen.draw(dot);
        }
      
        this._strokeEnd(event);
      };

      

      const form = document.getElementById('form');
      const assinaturaInput = document.getElementById('assinatura');
      function testar(){

      }
      form.addEventListener('submit', function() {
          const dataURL = signaturePad.toDataURL();
          assinaturaInput.value = dataURL;
      });


var $input    = document.getElementById('image'),
$fileName = document.getElementById('file-name');

$input.addEventListener('change', function(){
    $fileName.textContent = this.value;
});
 
setTime();
function setTime() {

const img = document.querySelector("#image");

img.addEventListener("change", function(e) {
    const tgt = e.target || window.event.srcElement;
    const files = tgt.files;
    const fr = new FileReader();

    fr.onload = function() {
        document.querySelector("#img-user").src = fr.result;
    }

    fr.readAsDataURL(files[0]);
});

  setTimeout(setTime, 1000);
}


let drop_ = document.querySelector('.area-upload #upload-file');
drop_.addEventListener('dragenter', function(){
document.querySelector('.area-upload .label-upload').classList.add('highlight');
});
drop_.addEventListener('dragleave', function(){
document.querySelector('.area-upload .label-upload').classList.remove('highlight');
});
drop_.addEventListener('drop', function(){
document.querySelector('.area-upload .label-upload').classList.remove('highlight');
});




function validarArquivo(file){
console.log(file);
// Tipos permitidos
var mime_types = [ 'image/jpeg', 'image/png' ];

// Validar os tipos
if(mime_types.indexOf(file.type) == -1) {
    return {"error" : "O arquivo " + file.name + " não permitido"};
}

// Apenas 2MB é permitido
if(file.size > 2*1024*1024) {
    return {"error" : file.name + " ultrapassou limite de 2MB"};
}

// Se der tudo certo
return {"success": "Enviando: " + file.name};
}
