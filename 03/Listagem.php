<html>
    <head>
        <title>Listagem de Senhas</title>
    </head>
    <body>
        
        <h1>Blue Senhas</h1>
        
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Mudar</th>
                <th>URL</th>
                <th>E-mail</th>
                <th>Usuário</th>
                <th>Senha</th>
            </tr>
            
        <?php
        
            try
            {
                $connection = new PDO("mysql:host=localhost;dbname=bluesenhas", "root", "123456");
                $connection->exec("set names utf8");
            }
            catch(PDOException $e)
            {
                echo "Falha: " . $e->getMessage();
                exit();
            }
            
            $rs = $connection->prepare("SELECT * FROM senhas");
            
            if( $rs->execute() )
            {
                while( $registro = $rs->fetch(PDO::FETCH_OBJ) )
                {
                    echo "<tr>";
                    echo "<td>" . $registro->id . "</td>";
                    echo "<td>" . $registro->nome . "</td>";
                    echo "<td>" . $registro->tipo . "</td>";
                    echo "<td>" . $registro->mudar . "</td>";
                    echo "<td>" . $registro->url . "</td>";
                    echo "<td>" . $registro->email . "</td>";
                    echo "<td>" . $registro->usuario . "</td>";
                    echo "<td>" . $registro->senha . "</td>";
                    echo "</tr>";
                }
            }
            else
            {
                echo "Falha na seleção de registros.<br>";
            }
            
        
        ?>

        </table>
        
    </body>
</html>