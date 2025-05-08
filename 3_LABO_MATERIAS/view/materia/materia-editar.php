<h1><?php echo ($mat->id_materia != null) ? $mat->nombre_materia : 'Nueva Materia'; ?></h1>

<ol>
    <li><a href="?c=Materia">Materias</a></li>
    <li><?php echo ($mat->id_materia != null) ? $mat->nombre_materia : 'Nueva Materia'; ?></li>
</ol>

<form action="?c=Materia&a=Guardar" method="post">
    <input type="hidden" name="id_materia-form" value="<?php echo $mat->id_materia; ?>">

    <div>
        <label>Nombre de la Materia</label>
        <input type="text" name="nombre_materia-form" value="<?php echo $mat->nombre_materia; ?>" placeholder="Ingrese el nombre de la materia">
    </div>

    <div>
        <label>Código de la Materia</label>
        <input type="text" name="codigo_materia-form" value="<?php echo $mat->codigo_materia; ?>" placeholder="Ingrese el código de la materia">
    </div>

    <div>
        <label>Total de Horas</label>
        <input type="number" name="tota_horas-form" value="<?php echo $mat->tota_horas; ?>" placeholder="Ingrese la cantidad total de horas">
    </div>

    <div>
        <label>Horas Teoría</label>
        <input type="number" name="horas_teoria-form" value="<?php echo $mat->horas_teoria; ?>" placeholder="Ingrese las horas de teoría">
    </div>

    <div>
        <label>Horas Práctica</label>
        <input type="number" name="horas_practica-form" value="<?php echo $mat->horas_practica; ?>" placeholder="Ingrese las horas de práctica">
    </div>

    <div>
        <label>Descripción</label>
        <textarea name="descripcion-form" placeholder="Ingrese la descripción de la materia"><?php echo $mat->descripcion; ?></textarea>
    </div>

    <div>
        <button type="submit">Guardar</button>
    </div>
</form>
