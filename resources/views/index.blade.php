@extends('layouts.master_page')

@section('links')
    <script src="script/nav.js"></script>
    <style>
        #navbar {
            background-color: #ffffff00;
        }
    </style>
@stop

@section('titulo', 'Bem-vindo à Voltaic')

@section('conteudo')
    <section class="hero">
        <div class="leftSide" style="margin-top: 3rem;">
            <h1 class="heroText">Entre agora no mundo da <highlight>energia solar</highlight> como nunca antes!</p>
        </div>
        <div class="rightSide" style="margin-top: 3rem;">
            <div class="cad">
                <div class="cadContent">
                    <h2 class="cadTitle">Cadastre-se e <highlight>realize uma solicitação</highlight> quando quiser!</h2>

                    {{-- FORM CADASTRO BASE --}}
                    <form action="/cadastro" method="_POST" class="cadForm">
                        <label class="cadLabel">Email</label><br>
                        <input type="email" placeholder="voltaic@email.com" name="email" class="cadInput">
                        <label class="cadLabel">Senha</label><br>
                        <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="psw" class="cadInput">
                        <label class="cadLabel">Confirmar senha</label><br>
                        <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="pswVerif" class="cadInput">                            
                        <p class="cadLogin">Já tem uma conta? <a class="login" href="#">Faça login.</a></p>
                        <!-- Modal -->
                        <div id="modalCad" class="modal">
                            <!-- Conteúdo -->
                            <div class="modal-content">
                                <span id="closeModal" class="close">&times;</span>
                                <div class="modal-title">
                                    <h1>Como você deseja se cadastrar...</h1>
                                </div>
                                <div class="modal-card">
                                    <div class="user-card">
                                        <div class="user-card-title">Pessoa<br><highlight>Física</highlight></div>
                                        <div class="cad-card-text">Usuário contratante de serviços</div>
                                        <button type="submit" name="submitCad" class="btn card-btn">Continuar</button>
                                    </div>
                                    <div class="user-card">
                                        <div class="user-card-title">Pessoa<br><highlight>Jurídica</highlight></div>
                                        <div class="cad-card-text">Empresa contratante de serviços</div>
                                        <button type="submit" name="submitCad" class="btn card-btn">Continuar</button>
                                    </div>
                                    <div class="user-card">
                                        <div class="user-card-title">Prestador de <highlight>Serviços</highlight></div>
                                        <div class="cad-card-text">Empresa instaladora ou provedora</div>
                                        <button type="submit" name="submitCad" class="btn card-btn">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button class="btn" id="continueCad">Continuar cadastro</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cards">
        <div class="topSide">
            <h2 class="title">Por que utilizar a nossa plaforma?</h2>
        </div>
        <div class="bottomSide">
            <div class="home-card">
                <div class="cardContent">
                    <img class="card-check" src="img/check.png" alt="check">
                    <h3 class="card-title">Fácil contato</h3>
                        <p class="card-text">Usuários contratantes e provedores de serviço comunicam-se entre si de maneira intuitiva</p>
                    <figure>
                        <img class="card-image" src="img/icone-relogio.png" alt="Ícone de um relógio">
                    </figure>
                </div>
            </div>
            <div class="home-card">
                <div class="cardContent">
                <img class="card-check" src="img/check.png" alt="check">
                    <h3 class="card-title">Lorem Ipsum</h3>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <figure>
                        <img class="card-image" src="img/icone-relogio.png" alt="Ícone de um relógio">
                    </figure>
                </div>
            </div>
            <div class="home-card">
                <div class="cardContent">
                <img class="card-check" src="img/check.png" alt="check">
                    <h3 class="card-title">Lorem Ipsum</h3>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <figure>
                        <img class="card-image" src="img/icone-relogio.png" alt="Ícone de um relógio">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="section-aboutUs">
        <div class="topSide abtTopSide">
            <div class="leftSide abtLeftSide">
                <h2 class="title abtTitle">Sobre nós</h2>
                <div class="aboutUs-text">Somos uma equipe de TCC do curso técnico em Desenvolvimento de Sistemas na Etec Drª Ruth Cardoso, composta por Bruno Santana, Felipe Massola, João Gabriel, José Felipe e Kattryel Rezende orientados pelos professores Charles Barros e Daniela Uebele.</div>
            </div>
            <div class="rightSide">
                <img class="abtPic" src="img/voltaic-equipe.jpg" alt="foto da equipe criadora da plataforma Voltaic Technology">
            </div>
        </div>
    </section>
@endsection