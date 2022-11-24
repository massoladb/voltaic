@extends('layouts.master_page')

@section('titulo', 'Cadastro')

@section('conteudo')
    <section class="sectionCad">
        <div class="cadContainer">
            <form action="#" method="_POST" class="cadForm">
                {{-- INFORMAÇÕES PRÉVIAS --}}
                <label class="cadLabel-in">Email</label><br>
                <input type="email" placeholder="voltaic@email.com" name="email" value="" required>

                <label class="cadLabel-in">Senha</label><br>
                <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="psw" value="" required>  

                {{-- CADASTRO ENDEREÇO --}}
                <label class="cadLabel-in">CEP</label><br>
                <input type="number" placeholder="00000-000" name="cep" required> 

                <label class="cadLabel-in">Endereço</label><br>
                <input type="text" placeholder="" name="endereco" value="" required>  

                <label class="cadLabel-in">Número</label><br>
                <input type="number" placeholder="" name="num-endereco" required>  

                <label class="cadLabel-in">Complemento</label><br>
                <input type="text" placeholder="" name="complemento" required>  

                <label class="cadLabel-in">Tipo do Local</label>
                <select name="tipoLocal" required>
                    <option value="Casa">Casa</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Condomínio">Condomínio</option>
                    <option value="Indústria">Indústria</option>
                    <option value="Fazenda">Fazenda</option>
                    <option value="Empresa">Empresa</option>
                </select>

                <label class="cadLabel-in">Bairro</label><br>
                <input type="text" placeholder="" name="bairro" value="" required >  

                <label class="cadLabel-in">Cidade</label><br>
                <input type="text" placeholder="" name="cidade" value="" required>  

                <label class="cadLabel-in">UF</label><br>
                <input type="text" placeholder="" name="uf" value="" required>  

                {{-- CONTATO --}}
                <label class="cadLabel-in">Telefone</label><br>
                <input type="tel" id="phone" name="phone" placeholder="(00) 12345-6789" pattern="[0-9]{2}-[1-9]{5}-[0-9]{4}-[0-9]" required>
            </form>
        </div>
    </section>
@stop