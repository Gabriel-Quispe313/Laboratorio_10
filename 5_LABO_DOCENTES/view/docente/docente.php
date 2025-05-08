<h1>Docentes</h1>
<hr>
<a href="?c=Docente&a=Crud" class="btn btn-success">Nuevo Docente</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Título Académico</th>
            <th>Especialidad</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha de Contratación</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>  
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->cedula; ?></td>
                <td><?php echo $r->nombres; ?></td>
                <td><?php echo $r->apellidos; ?></td>
                <td><?php echo $r->titulo_academico; ?></td>
                <td><?php echo $r->especialidad; ?></td>
                <td><?php echo $r->telefono; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->fecha_contratacion; ?></td>
                <td><?php echo ($r->activo == 1) ? "Activo" : "Inactivo"; ?></td>
                <td>
                    <a href="?c=Docente&a=Crud&id_docente=<?php echo $r->id_docente; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="#" onclick="confirmDelete('?c=Docente&a=Eliminar&id_docente=<?php echo $r->id_docente; ?>')" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>    
    </tbody>
</table>

<script>
    function confirmDelete(url) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¡No podrás revertir esto!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
