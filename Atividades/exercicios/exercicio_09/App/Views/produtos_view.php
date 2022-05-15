<body class="m-6">

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>UM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $produto) {
                echo "<tr>";
                echo "<td>{$produto->getId()}</td>";
                echo "<td>{$produto->getNome()}</td>";
                echo "<td>{$produto->getUm()}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>