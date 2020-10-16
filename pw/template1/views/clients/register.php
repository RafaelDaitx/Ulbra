<h2>Registro de Clientes</h2>

<form action="?controller=clients&action=registerView" method="post">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Interesse</label>
        <input type="text" name="interest" class="form-control">
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <label>Escolha alguma das Opções</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="radio" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Primeira
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio" id="radio" value="option2" checked>
            <label class="form-check-label" for="exampleRadios1">
                Segunda
            </label>
        </div>
    </div>

    <div class="form-group">
        <label>Deixe uma mensagem</label>
        <input type="textarea" name="textarea" class="form-control">
    </div>

    <div class="form-group">
        <label for="sel">Select Simples</label>
        <select name="select" id="sel" class="form-control">
            <option value="Primeira">Primeira Opção</option>
            <option value="Segunda">Segunda Opção</option>
            <option value="Terceira">Terceira Opção</option>
            <option value="Quarta">Quarta Opção</option>
        </select>
    </div>

    <div class="form-group">
        <label for="sel2">Select Estendido</label>
        <select name="estendido" id="sel2" class="form-control" SIZE=4>
            <option>Primeira Opção</option>
            <option>Segunda Opção</option>
            <option>Terceira Opção</option>
            <option>Quarta Opção</option>
        </select>
    </div>

    <br>
    <input type="submit" value="Registrar" class="btn btn-primary">
    <br>
    <br>



</form>