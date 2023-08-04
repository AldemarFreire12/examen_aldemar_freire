<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
          <!--  <img src="<?php echo base_url(); ?>" alt="" style="width: 200px; height: 200px;">-->
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE PAISES</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('cantantes/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Cantantes
    </a>
</div>
<br>
<br>
<br>
<?php if ($capital_efaf) : ?>
    <table class="table table=striped table-bordered table-hover">
        <thead>
            <tr>
                <th>pais</th>
                <th>continente</th>
                <th>nombre</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($capital_efaf
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->pais_efaf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->continente_efaf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nombre_efaf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->latitud_efaf; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->longitud_efaf; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Jugador">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url(); ?>/cantantes/eliminar/<?php echo $filaTemporal->pais_efaf; ?>" title="Eliminar Cantante" onclick="return confirm('¿Estas seguro?');" style="color:red;">
                        <i class="mdi mdi-close">
                                Eliminar
                            </i>
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php else : ?>
    <h1> Dont have Cantanes<h1>
        <?php endif; ?>
