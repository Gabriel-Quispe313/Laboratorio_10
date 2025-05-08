<h1>Estudiante</h1>
<hr>
<a href="?c=Estudiante&a=Crud">Nuavo Estudiante</a>
<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>correo</th>
            <th>fecha Registro</th>
            <th></th>
            <th></th>
        </tr>  
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->nombres; ?></td>
                <td><?php echo $r->apellido; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->fecha_registro; ?></td>
                <td>
                    <a href="?c=Estudiante&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Esta seguro de eliminar?')"href="?c=Estudiante&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                </td>
            </tr>

        <?php endforeach; ?>    
    </tbody>
</table>