<h1><?php echo isset($docente->id_docente) ? "Editar Docente: $docente->nombres" : "Nuevo Registro"; ?></h1>
<ol>
    <li><a href="?c=Docente">Docente</a></li>
    <li><?php echo isset($docente->id_docente) ? $docente->nombres : "Nuevo Registro"; ?></li>
</ol>

<form action="?c=Docente&a=Guardar" method="post">
    <input type="hidden" name="id_docente" value="<?php echo isset($docente->id_docente) ? $docente->id_docente : ''; ?>">

    <div>
        <label>Cédula</label>
        <input type="text" name="cedula" value="<?php echo isset($docente->cedula) ? $docente->cedula : ''; ?>" placeholder="Ingrese la cédula" required>
    </div>

    <div>
        <label>Nombres</label>
        <input type="text" name="nombres" value="<?php echo isset($docente->nombres) ? $docente->nombres : ''; ?>" placeholder="Ingrese los nombres" required>
    </div>

    <div>
        <label>Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo isset($docente->apellidos) ? $docente->apellidos : ''; ?>" placeholder="Ingrese los apellidos" required>
    </div>

    <div>
        <label>Título Académico</label>
        <input type="text" name="titulo_academico" value="<?php echo isset($docente->titulo_academico) ? $docente->titulo_academico : ''; ?>" placeholder="Ingrese el título académico">
    </div>

    <div>
        <label>Especialidad</label>
        <input type="text" name="especialidad" value="<?php echo isset($docente->especialidad) ? $docente->especialidad : ''; ?>" placeholder="Ingrese la especialidad">
    </div>

    <div>
        <label>Teléfono</label>
        <input type="text" name="telefono" value="<?php echo isset($docente->telefono) ? $docente->telefono : ''; ?>" placeholder="Ingrese el teléfono">
    </div>

    <div>
        <label>Correo</label>
        <input type="email" name="email" value="<?php echo isset($docente->email) ? $docente->email : ''; ?>" placeholder="Ingrese el correo electrónico" required>
    </div>

    <div>
        <label>Fecha de Contratación</label>
        <input type="date" name="fecha_contratacion" value="<?php echo isset($docente->fecha_contratacion) ? $docente->fecha_contratacion : ''; ?>" required>
    </div>

    <div>
        <label>Activo</label>
        <select name="activo">
            <option value="1" <?php echo isset($docente->activo) && $docente->activo ? 'selected' : ''; ?>>Activo</option>
            <option value="0" <?php echo isset($docente->activo) && !$docente->activo ? 'selected' : ''; ?>>Inactivo</option>
        </select>
    </div>

    <div>
        <button>Guardar</button>
    </div>
</form>
