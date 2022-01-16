     <div class="container-profile">
    <form action="?action=editProfile" method="POST" enctype="multipart/form-data">    
    <?php if (isset($user)) : ?>
        <?php foreach ($user as $key => $user):
            if ($user['id']) : ?>
            <h1>WELCOME <?php echo $user["nom"] ?> !</h1>
                 <h2>Editar datos personales</h2>
                 <h4> Podrás acceder y modificar tus datos personales para facilitar tus futuras compras y notificarnos cualquier cambio en tus datos de contacto.</h4>
                 <div class="form-group">
                     <h3>Nombre</h3>
                         <input type="text" name="nom" required placeholder="Nombre" value="<?php echo $user['nom'] ?>">
                     <h3>Email</h3>
                     <input type="email" name="email" required placeholder="Email" value="<?php echo $user['email'] ?> "> 
                     <h3>Contraseña</h3>
                     <input type="password" name="contraseña" required placeholder="Contraseña" value="<?php echo $user['contraseña'] ?> "> 
                     <h3>Dirección</h3>
                     <input type="text" name="adreca" required placeholder="Dirección" value="<?php echo $user['adreca'] ?>"> 
                     <h3>Población</h3>
                     <input type="text" name="poblacio" required placeholder="Población" value="<?php echo $user['poblacio'] ?>"> 
                     <h3>Código postal</h3>
                     <input type="text" name="codi_postal" required placeholder="Código postal" value="<?php echo $user['codi_postal'] ?>"> 
                </div>

                <div class="photo">
                <h3>Foto de perfil</h3>
                     <input type ="file" name="file" id="file" accept="image/*" onchange="previewImage();" >
                     <img id="preview">
                  </div>
    
            <?php endif;
        endforeach;?>
                    <?php endif;?>

                  <button type="submit" name="update" class="button">Actualizar</button>

    </form>
    </div>
    <script type="text/javascript" src="/view/resource/js/previewImage.js"></script>

    <?php
  if(isset($_POST['update'])){
      
    $file_name=$_FILES['file']['name'];
         $file_type=$_FILES['file']['type'];
         $file_size=$_FILES['file']['size'];
         $file_tem_loc=$_FILES['file']['tmp_name'];
         $file_store="view/resource/img/profile_image/".$file_name;

         if (move_uploaded_file($file_tem_loc,$file_store)){
             echo "Has actualizado tus datos personales/tu foto de perfil correctamente";

         }else{
            echo "Has actualizado tus datos personales/tu foto de perfil incorrectamente";
         }

     }
     
?>