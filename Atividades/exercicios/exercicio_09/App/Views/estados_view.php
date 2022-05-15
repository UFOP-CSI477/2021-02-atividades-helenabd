<body>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Sigla</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($estados as $estado) {
                echo "<tr>";
                echo "<td>{$estado->getId()}</td>";
                echo "<td>{$estado->getNome()}</td>";
                echo "<td>{$estado->getSigla()}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>