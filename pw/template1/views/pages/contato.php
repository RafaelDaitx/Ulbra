<form class="needs-validation" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationTooltip01">Primeiro nome</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="Seu nome" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationTooltip02">Sobrenome</label>
            <input type="text" class="form-control" id="validationTooltip02" placeholder="Seu sobrenome" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationTooltipUsername">Nome do usuário</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                </div>
                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Nome do usuário" aria-describedby="validationTooltipUsernamePrepend" required>
                <div class="invalid-tooltip">
                    Escolha um nome de usuário único e válido.
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
        </div>
        <div>
            <button class="btn btn-primary mb-1" type="submit">Enviar</button>
        </div>
    </div>
    </div>
    </div>
    </div>
</form>