<h1><?php echo isset($car->id_carrera) ? $car->nombre_carrera : 'Nueva Carrera'; ?></h1>
<ol>
    <li><a href="?c=Carrera">Carreras</a></li>
    <li><?php echo isset($car->id_carrera) ? $car->nombre_carrera : 'Nueva Carrera'; ?></li>
</ol>

<form action="?c=Carrera&a=Guardar" method="post">
    <input type="hidden" name="id_carrera" value="<?php echo isset($car->id_carrera) ? $car->id_carrera : ''; ?>">

    <div>
        <label>Nombre de la Carrera</label>
        <input type="text" name="nombre_carrera" value="<?php echo isset($car->nombre_carrera) ? $car->nombre_carrera : ''; ?>" placeholder="Ingrese el nombre de la carrera">
    </div>

    <div>
        <label>Código de la Carrera</label>
        <input type="text" name="codigo_carrera" value="<?php echo isset($car->codigo_carrera) ? $car->codigo_carrera : ''; ?>" placeholder="Ingrese el código de la carrera">
    </div>

    <div>
        <label>Descripción</label>
        <textarea name="descripcion" placeholder="Ingrese una breve descripción"><?php echo isset($car->descripcion) ? $car->descripcion : ''; ?></textarea>
    </div>

    <div>
        <label>Duración (semestres)</label>
        <input type="number" name="duracion_semestres" value="<?php echo isset($car->duracion_semestres) ? $car->duracion_semestres : ''; ?>" placeholder="Ingrese la duración en semestres">
    </div>

    <div>
        <label>Fecha de Creación</label>
        <input type="date" name="fecha_creacion" value="<?php echo isset($car->fecha_creacion) ? $car->fecha_creacion : ''; ?>">
    </div>

    <div>
        <label>Activa</label>
        <input type="checkbox" name="activa" <?php echo isset($car->activa) && $car->activa ? 'checked' : ''; ?>>
    </div>

    <div>
        <button>Guardar</button>
    </div>
</form>
