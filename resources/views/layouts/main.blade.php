<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mariana Andrade - Esteticista</title>

        <!-- FONTS DO GOOGLE-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <!-- CSS DA APLICAÇÃO-->
        <link rel="stylesheet" href="/css/style.css">
        <style>
            input[type="date"] {
  text-align: center;
}

@media screen and (max-width: 1000px) {
  input[type="date"] {
    text-align: center !important;
    color: red;
  }
}
        </style>
    </head>

    <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                   
                            <img src="/img/logo2.png" class="img-navbar botao-lateral">
             

      
                        <ul class="navbar-nav">
                 
                                
                                <li class="nav-item dropdown">
                                    @if(Auth::user())
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                         {{Auth::user()->name}}
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            
                                            <li>
                                                <a class="dropdown-item" href="/user">Editar</a>
                                            </li>  
                                            <li>
                                                <a class="dropdown-item" href="/user/password">Alterar Senha</a>
                                            </li>       

                                            @if(auth()->user()->nivel == 1 && !auth()->user()->passwordmaster)
                                             <li>
                                                <a href="/user/passwordmaster" class="dropdown-item">Cad S. master</a>
                                             </li>
                                            @endif
                                             
                                            <li>
                                            <form action="/logout" method="POST">
                                                @csrf 
                                                <a href="/logout"
                                                    class="dropdown-item"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                    Sair
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                    @endif
                            </li>         
                        </ul>
                    </div>
                </nav>
            </header>

            <main>
                           <div class="row">
                           @if(session('msg'))
                                    <p class="msg-align @if(session('class'))alert alert-{{session('class')}}@else msg @endif">{{session('msg')}}</p>
                                @endif
                           </div>

                              <!-- menu lateral -->  
    @if(Auth::user())
                <div class="menu-lateral menu-escondido">

                    <ul>
                        <a href="/" style="color: #aaa"><li class="menu4"> <span> <ion-icon name="calendar-outline"></ion-icon> AGENDA </span> 
                          
                        </li></a>
                        <li class="menu1"><span><ion-icon name="cash-outline"></ion-icon> CAIXA </span>
                            <ul class="submenu sub1">
                                <a href="/caixa"><li>HOJE</li></a>
                                <li>RELATÓRIOS</li>
                            </ul>
                        </li>
                        <li class="menu2"><span><ion-icon name="person-outline"></ion-icon> CLIENTE </span>
                            <ul class="submenu sub2">
                                <a href="/cliente"><li>NOVO</li></a>
                                <a href="/clientes"><li>LISTAR</li></a>
                            </ul>
                        </li>

                        <li class="menu7"><span><ion-icon name="cog-outline"></ion-icon>CONFIG</span>
                            <ul class="submenu sub7">
                                <a href="/formas"><li>FORMAS DE PAG.</li></a>
                                <a href="/servicos"><li>SERVICOS</li></a>
                                <a href="/pacotes"> <li>PACOTES</li></a>
                            </ul>
                        </li>

                    </ul>

                </div>
        @endif

                <div class="tela">
                    @yield('content')
                </div> 
            </main>
           
            <footer>
        <p>Mariana Andrade - &copy;2023  -  Desenvolvido por <a href="http://showmedia.com.br" target="_blank" rel="noopener noreferrer">Show Media</a> </p>
    </footer>


 
    <!-- script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    @yield('script')



    <script src="/js/jquery.mask.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
      <!-- SCRIPT DA APLICAÇÃO-->
      <script src="/js/script.js"></script>
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
