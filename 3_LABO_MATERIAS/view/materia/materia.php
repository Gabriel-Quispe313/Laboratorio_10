<h1>Materias</h1>
<hr>
<a href="?c=Materia&a=Crud">Nueva Materia</a>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Total Horas</th>
            <th>Horas Teoría</th>
            <th>Horas Práctica</th>
            <th>Descripción</th>
            <th></th>
            <th></th>
        </tr>  
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->codigo_materia; ?></td>
                <td><?php echo $r->nombre_materia; ?></td>
                <td><?php echo $r->tota_horas; ?></td>
                <td><?php echo $r->horas_teoria; ?></td>
                <td><?php echo $r->horas_practica; ?></td>
                <td><?php echo $r->descripcion; ?></td>
                <td>
                    <a href="?c=Materia&a=Crud&id_materia=<?php echo $r->id_materia; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Está seguro de eliminar?')" href="?c=Materia&a=Eliminar&id_materia=<?php echo $r->id_materia; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>    
    </tbody>
</table>