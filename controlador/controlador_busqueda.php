<?php
if (isset($_GET['palabraClave'])) {
    $palabraClave = $_GET['palabraClave'];

    $sql = $conexion->query("select S.*, C.nombre as nombre_categoria, M.nombre as nombre_marca
                from Categorias C
                inner join Suplementos S on C.id = S.categoria_id
                inner join Marcas M on M.id = S.marca_id
                where C.nombre COLLATE utf8mb4_general_ci like '%$palabraClave%' or M.nombre COLLATE utf8mb4_general_ci like '%$palabraClave%' or S.nombre COLLATE utf8mb4_general_ci like '%$palabraClave%'
                order by S.nombre ASC");

    $numRegistros = $sql->num_rows;
}
?>