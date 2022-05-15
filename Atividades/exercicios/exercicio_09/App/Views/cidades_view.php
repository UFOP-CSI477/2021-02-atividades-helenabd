<div>
    <p class="text-center color-red"></p>
    <table class="table table-bordered table-hover table-striped m-6">
        <thead>
            <tr class="thead-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cidades as $cidade) {
                echo "<tr>";
                echo "<td>{$cidade->getId()}</td>";
                echo "<td>{$cidade->getNome()}</td>";
                echo "<td>{$cidade->getEstado()}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>