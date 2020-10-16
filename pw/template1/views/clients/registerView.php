<h2>Dados do Registro</h2>
<table class="table table-striped">
    <tr>
        <th>Nome:</th>
        <td><?= $client['name'] ?></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><?= $client['email'] ?></td>
    </tr>
    <tr>
        <th>Interesse:</th>
        <td><?= $client['interest'] ?></td>
    </tr>
    <tr>
        <th>Senha:</th>
        <td><?= $client['password'] ?></td>
    </tr>
    <tr>
        <th>Escolha alguma das Opções:</th>
        <td><?= $client['radio'] ?></td>
    </tr>
    <tr>
        <th>Deixe uma mensagem:</th>
        <td><?= $client['textarea'] ?></td>
    </tr>
    <tr>
        <th>Select Simples:</th>
        <td><?= $client['select'] ?></td>
    </tr>
    <tr>
        <th>Select Estendido:</th>
        <td><?= $client['estendido'] ?></td>
    </tr>
</table>