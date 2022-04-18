<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './racine.php';
        include_once RACINE . '/service/DossierService.php';

        $es = new DossierService();
        ?>
        <form method="GET" action="controller/loadDossier_1.php" >
            <select name="etat">
            <?php
            foreach ($es->findEtat() as $v) {
                if($v == 'en attente'){
                ?>
                <option value="<?php echo $v; ?>" selected="selected"><?php echo $v; ?></option>
                <?php
                }else{
                    ?>
                <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                <?php
                }
            }
            ?>
        </select>
            
            <input type="submit" value="Send" />  
        </form>
       
        
         <table border="1">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>USERNAME</th>
                    <th>PROJECT NAME</th>
                    <th>PROJECT Type</th>
                    <th>ADD At</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once RACINE . '/service/DossierService.php';
                $es = new DossierService();
                if(isset($_GET['etat']))
                foreach ($es->findDossierByEtat($_GET['etat']) as $e) {
                    ?>
                    <tr>
                        <td><?php echo $e->getId(); ?></td>
                        <td><?php echo $e->getUsername(); ?></td>
                        <td><?php echo $e->getProjectName(); ?></td>
                        <td><?php echo $e->getType(); ?></td>
                        <td><?php echo $e->getAddAt(); ?></td>
                        <td><?php echo $e->getEtat(); ?></td>
                        <td><a href="<?php echo $e->getEtat(); ?>">a</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
