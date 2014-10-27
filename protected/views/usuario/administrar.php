

<h3>Administración de usuarios</h3>


<div>
<table class='table'>
<thead>
    <tr>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Rut</th>
      <th>Estado cuenta</th>
    </tr>
  </thead>

<tbody>
<?php foreach ($users as $user):?>
      <tr>
        <td><?php echo $user->PERNombres;?></td>
        <td><?php echo $user->PERApellidos;?></td>
        <td><?php echo $user->PERRut;?></td>
        <td><?php echo $user->ESTADOnombre;?></td>
       </tr> 
<?php endforeach; ?>
  </tbody>

 </table>
 </div>
