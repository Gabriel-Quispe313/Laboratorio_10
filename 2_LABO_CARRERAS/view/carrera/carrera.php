<h1>Carreras</h1>
<hr>
<a href="?c=Carrera&a=Crud">Nueva Carrera</a>
<table>
    <thead>
        <tr>
            <th>Nombre de la Carrera</th>
            <th>Código</th>
            <th>Descripción</th>
            <th>Duración (semestres)</th>
            <th>Fecha de Creación</th>
            <th>Activa</th>
            <th></th>
            <th></th>
        </tr>  
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->nombre_carrera; ?></td>
                <td><?php echo $r->codigo_carrera; ?></td>
                <td><?php echo $r->descripcion; ?></td>
                <td><?php echo $r->duracion_semestres; ?></td>
                <td><?php echo $r->fecha_creacion; ?></td>
                <td><?php echo $r->activa ? 'Sí' : 'No'; ?></td>
                <td>
                    <a href="?c=Carrera&a=Crud&id_carrera=<?php echo $r->id_carrera; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Está seguro de eliminar?')" href="?c=Carrera&a=Eliminar&id_carrera=<?php echo $r->id_carrera; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>    
    </tbody>
</table>
