@extends('layouts.master_page')

@section('titulo', 'Voltaic')

@section('conteudo')
    <section class="hero">
        <div class="leftSide" style="margin-top: 3rem;">
            <h1 class="heroText">Entre agora no mundo da <highlight>energia solar</highlight> como nunca antes!</p>
        </div>
        <div class="rightSide" style="margin-top: 3rem;">
            <div class="cad">
                <div class="cadContent">
                    <h2 class="cadTitle">Cadastre-se e <highlight>realize uma solicitação</highlight> quando quiser!</h2>
                    <form action="#" method="_POST" class="cadForm">
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
        <div class="topSide">
            <div class="leftSide abt1">
                <h2 class="title aboutUs">Sobre nós</h2>
            </div>
            <div class="rightSide abt2"></div>
        </div>
        <div class="bottomSide">
            <div class="leftSide abt1">
                <div class="aboutUs-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit ligula eget lorem commodo, et molestie eros aliquam. Aliquam elementum urna a aliquam ornare. Integer felis mauris, ultrices quis neque quis, viverra sodales orci. Aliquam aliquam nisi purus, a mattis sem rhoncus vel. Praesent feugiat, diam eu bibendum tincidunt, tellus purus molestie massa, a molestie risus sapien vitae tellus. Etiam in eros ligula. Vivamus consequat sit amet augue vitae consequat. Quisque ornare odio ut accumsan interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi quam felis, tincidunt a elit vel, posuere varius massa.</div>
            </div>
            <div class="rightSide abt2">

            </div>
        </div>
    </section>
@endsection
