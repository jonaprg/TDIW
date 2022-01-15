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
                         <input type="text" name="nombre" required placeholder="Nombre" value="<?php echo $user['nom'] ?>">
                     <h3>Email</h3>
                     <input type="email" name="email" required placeholder="Email" value="<?php echo $user['email'] ?> "> 
                     <h3>Contraseña</h3>
                     <input type="password" name="contraseña" required placeholder="Contraseña" value="<?php echo $user['contraseña'] ?> "> 
                     <h3>Dirección</h3>
                     <input type="text" name="direccion" required placeholder="Dirección" value="<?php echo $user['adreca'] ?>"> 
                     <h3>Población</h3>
                     <input type="text" name="poblacion" required placeholder="Población" value="<?php echo $user['poblacio'] ?>"> 
                     <h3>Código postal</h3>
                     <input type="text" name="CP" required placeholder="Código postal" value="<?php echo $user['codi_postal'] ?>"> 
                </div>

                <div class="photo">
                <h3>Foto de perfil</h3>
                     <input type ="file" name="userImage"> 
                <img src="uploads/<?php echo $user["photo"]; ?>" width="150px" height="auto" alt="">
                  </div>
                  <button type="submit" name="update" class="button">Actualizar</button>

                <?php endif;
        endforeach;?>
                    <?php endif;?>



    </form>
    </div>