@extends('layouts.master_page')

@section('conteudo')
    <section class="landing-page">
            <div class="container-land">
                <div class="container-slogan">
                    <p class="slogan">Entre agora no mundo da <highlight>energia solar</highlight> como nunca antes!</p>
                </div>
                <div class="container-box">
                    <div id="title-box">
                        Cadastre-se e realize uma solicitação quando quiser!
                    </div>
                    <form>
                        <div class="input-label">Email</div>
                        <input type="email" placeholder="exemplo@email.com" name="email">

                        <div class="input-label">Senha</div>
                        <input type="password" placeholder="•••••••••••••" name="password">

                        <div class="input-label">Confirmar Senha</div>
                        <input type="password" placeholder="•••••••••••••" name="verifpassword">
                    </form>
                </div>
            </div>   
        </figure>
    </section>
@endsection