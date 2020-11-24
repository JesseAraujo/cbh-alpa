<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Visualizar</th>
            <th scope="col">Baixar</th>
        </tr>
    </thead>
    <tbody>


        <?php
        for ($i = 0; $i < count($files); $i++) {
            $num = $files[$i];

            //separando nome do arquivo para fácil remoção do nome  
            $path_parts = pathinfo($num);

            //corrigindo caracteres especiais para exibir apenas o nome do documento
            krsort($path_parts);
            $nome = $path_parts['filename'];

            echo '
                <tr>
                    <td> ' . $nome . '  </td>
                    <td><a class="icone" href="' . $num . '" target="new"></a></td>
                    <td><a class="download" href="' . $num . '" download></a></td>
                </tr>    
                   ';
        }
        ?>

    </tbody>
</table>