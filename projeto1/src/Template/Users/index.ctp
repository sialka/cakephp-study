<h1>Usuários</h1>

<table>
    <thead>
        <trt>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Açoes</th>
        </trt>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td> <?php echo $usuario->id; ?> </td>
            <td> <?php echo $usuario->name; ?> </td>
            <td> <?php echo $usuario->email; ?> </td>
            <td></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>