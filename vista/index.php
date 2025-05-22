<?php require "layout/header.php" ?>
<a href="index.php?m=nuevo">NUEVO</a>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Acción</td>
    </tr>
    <?php
    forench ($dato as $key => $value)
    forench ($value as $va ):
        echo "<tr><td>".$va['id']."<tr><td>".$va['nombre']."</td><td>S./"
        echo "<td><a href='index.php?m=editar&id=".$va['id']."'>ACTUALIZAR
        echo "</tr>";
    endforeach;
    ?>
</table>
<?php require "layout/footer.php" ?>