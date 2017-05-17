    <div role="tabpanel" class="tab-pane<?php echo ($active == 'meus_dados' ? ' active' : '') ?>" id="meus_dados">
        <form method="post">

            <!-- DADOS PESSOAIS-->
            <fieldset class="">
                <legend  align="left">Dados Pessoais</legend>
                <div class="form-group" align="left">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control"  placeholder="Nome" name="nome">
                </div>
                <div class="form-group" align="left">
                    <label for="nome">Sobrenome:</label>
                    <input type="text" class="form-control"  placeholder="Sobrenome" name="sobrenome">
                </div>
                <div class="form-group" align="left">
                    <label for="nome">Nascimento:</label>
                    <input type="text" name="dia" value="dd" class="form-control"> 
                    <input type="text" name="mes" value="mm" class="form-control"> 
                    <input type="text" name="ano" value="aaaa" class="form-control">
                </div>
                <div class="form-group" align="left">
                    <label for="nome">CPF:</label>
                    <input type="text" class="form-control"  placeholder="CPF" name="cpf">
                </div>
                <div class="form-group" align="left" >
                    <label for="nome">Sexo:</label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" value="m" />Masculino 
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" value="f" />Feminino
                    </label>

                </div>
                <div class="form-group" align="left">
                    <label for="nome">Gênero:</label>
                    <label class="radio-inline">
                        <input type="radio" name="genero" value="mhete" />Heterossexual     
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="genero" value="homo" />Homossexual
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="genero" value="bi" />Bissexial
                    </label>  
                    <label class="radio-inline">
                        <input type="radio" name="genero" value="outros" />Outros
                    </label>  

                </div>
                <div class="form-group" align="left">
                    <label for="nome">Estado Civil:</label>
                    <label class="radio-inline">
                        <input type="radio" name="ec" value="solteiro" />Solteiro(a)             
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ec" value="casado" />Casado(a)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ec" value="viuvo" />Viúvo(a)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ec" value="divorciado" />Divorciado
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ec" value="outros" />Outros
                    </label>
                </div>
                <div class="form-group" align="left">
                    <label for="nome">Foto:</label>
                    <label for="imagem">Imagem de perfil:</label>
                    <input type="file" name="imagem" >
                </div>
                <div class="form-group" align="left">
                    <label for="nome">Possui veículo?:</label>
                    <label class="radio-inline">
                        <input type="radio" name="veiculo" value="s" />SIM             
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="veiculo" value="n" />NÃO
                    </label>
                </div>
                <div class="form-group" align="left">
                    <label for="nome">Possui disponibilidade para viajar?:</label>
                    <label class="radio-inline">
                        <input type="radio" name="viajar" value="s" />SIM             
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="viajar" value="n" />NÃO
                    </label>
                </div>
                <div class="form-group" align="left" >
                    <label for="nome">Possui disponibilidade para mudar de residência?:</label>
                    <label class="radio-inline">
                        <input type="radio" name="residencia" value="s" />SIM             
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="residencia" value="n" />NÃO
                    </label>
                </div>


            </fieldset>
            <br />
            <!-- ENDEREÇO -->
            <fieldset>
                <legend  align="left">Dados de Endereço</legend>

                <div class="form-group" align="left">
                    <label for="rua">Rua:</label>
                    <input type="text" class="form-control"  placeholder="Rua" name="rua">
                </div>
                <div class="form-group" align="left">
                    <label for="numero">Numero:</label>
                    <input type="text" class="form-control"  placeholder="Numero" name="numero">
                </div>
                <div class="form-group" align="left">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control"  placeholder="Bairro" name="bairro">
                </div>
                <div class="form-group" align="left">
                    <label for="numero">Numero:</label>
                    <input type="text" class="form-control"  placeholder="Numero" name="numero">
                </div>
                <div class="form-group" align="left">
                    <label for="estado">Estado:</label>
                    <select name="estado"> 
                        <option value="ac">Acre</option> 
                        <option value="al">Alagoas</option> 
                        <option value="am">Amazonas</option> 
                        <option value="ap">Amapá</option> 
                        <option value="ba">Bahia</option> 
                        <option value="ce">Ceará</option> 
                        <option value="df">Distrito Federal</option> 
                        <option value="es">Espírito Santo</option> 
                        <option value="go">Goiás</option> 
                        <option value="ma">Maranhão</option> 
                        <option value="mt">Mato Grosso</option> 
                        <option value="ms">Mato Grosso do Sul</option> 
                        <option value="mg">Minas Gerais</option> 
                        <option value="pa">Pará</option> 
                        <option value="pb">Paraíba</option> 
                        <option value="pr">Paraná</option> 
                        <option value="pe">Pernambuco</option> 
                        <option value="pi">Piauí</option> 
                        <option value="rj">Rio de Janeiro</option> 
                        <option value="rn">Rio Grande do Norte</option> 
                        <option value="ro">Rondônia</option> 
                        <option value="rs">Rio Grande do Sul</option> 
                        <option value="rr">Roraima</option> 
                        <option value="sc">Santa Catarina</option> 
                        <option value="se">Sergipe</option> 
                        <option value="sp">São Paulo</option> 
                        <option value="to">Tocantins</option> 
                    </select>
                </div>
                <div class="form-group" align="left">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control"  placeholder="Cidade" name="cidade">
                </div>
                <div class="form-group" align="left">
                    <label for="cep">Cep:</label>
                    <input type="text" class="form-control"  placeholder="Cep" name="cep">
                </div>


            </fieldset>
            <!-- Contato -->
            <fieldset>
                <legend  align="left">Dados de Contato</legend>

                <div class="form-group" align="left">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control"  placeholder="Telefone" name="telefone">
                </div>
                <div class="form-group" align="left">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control"  placeholder="E-mail" name="email">
                </div>
                <div class="form-group" align="left">
                    <label for="celular">Celular:</label>
                    <input type="text" class="form-control"  placeholder="Celular" name="celular">
                </div>

            </fieldset></br>
            <fieldset>
                <legend  align="left">Outras Informações</legend>
                <div class="form-group" align="left">
                    <textarea class="form-control" rows="3" name="outras"></textarea>
                </div>
            </fieldset></br>
        </form>
    </div>