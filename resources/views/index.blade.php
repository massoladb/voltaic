@extends('layouts.master_page')

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
                    <form action="/cadastro" method="_POST" class="cadForm">
                        <label class="cadLabel">Email</label><br>
                        <input type="email" placeholder="voltaic@email.com" name="email" class="cadInput">
                        <label class="cadLabel">Senha</label><br>
                        <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="psw" class="cadInput">
                        <label class="cadLabel">Confirmar senha</label><br>
                        <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="pswVerif" class="cadInput">                            
                        <p class="cadLogin">Já tem uma conta? <a class="login" href="#">Faça login.</a></p>
                        <input class="btn" id="btn-cad" type="submit" value="Continuar cadastro" name="submitCad">
                    </form>
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
                <div class="abtPic">

                </div>
            </div>
        </div>
    </section>
@endsection