<html>
    <head>
        <title>Cadastro de Senha</title>
    </head>
    <body>
        <h1>Blue Senhas</h1>
    
        <form method="POST" action="FormularioTratamento.php">
            
            Nome da senha: 
            <input type="TEXT" name="nome" placeholder="Informe o nome da senha" />
            <br>
            
            Tipo:
            <select name="tipo">
                <option>Selecione...</option>
                <option selected>Loja Virtual</option>
                <option>Site de Pagamento</option>
                <option>Rede Social</option>
                <option>Outro</option>
            </select>
            <br>
            
            Mudar a cada 6 meses?
            <input type="RADIO" name="mudar" value="s" checked> Sim
            <input type="RADIO" name="mudar" value="n"> Não
            <br>
            
            URL de utilização:
            <input type="TEXT" name="url" placeholder="Informe a URL onde a senha é utilizada">
            <br>
            
            E-mail:
            <input type="TEXT" name="email" placeholder="Informe o e-mail de recuperação de senha onde a senha">
            <br>
            
            Nome de usuário:
            <input type="TEXT" name="usuario" placeholder="Informe o nome de usuário">
            <br>
            
            Senha:
            <input type="PASSWORD" name="senha" placeholder="Informe a senha">
            <br>
            
            <input type="SUBMIT" value="Enviar cadastro">
            
            
            
        </form>
    </body>
</html>