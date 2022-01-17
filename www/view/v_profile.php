<div class="container-profile">
    <form action="?action=editProfile" method="POST" enctype="multipart/form-data">
        <?php if (isset($user)) : ?>
            <h1>BIENVENIDO <?php echo $user["nom"] ?> !</h1>
            <h3>Editar datos personales</h3>
            <div class="form-group">
                <div class="photo">
                    <h3>Foto de perfil</h3>
                    <?php if ($user['foto']) : ?>
                        <img src="<?php echo FILE_RELATIVE_PATH . $user["foto"] ?>" alt="image_profile"
                             id="img_profile"><br>
                    <?php endif; ?>
                    <input type="file" name="image" id="file" accept="image/*">
                </div>
                <label>
                    Nombre
                    <input type="text" maxlength="30" name="nom" required placeholder="Nombre" value="<?php echo $user['nom'] ?>">
                </label>
                <label>
                    Email
                    <input type="email" name="email" required placeholder="Email" value="<?php echo $user['email'] ?> ">
                </label>

                <label>
                    Contraseña
                    <input type="password" name="password" placeholder="Contraseña">
                </label>
                <label>
                    Dirección
                    <input type="text" maxlength="30" name="adreca" required placeholder="Dirección"
                           value="<?php echo $user['adreca'] ?>">
                </label>
                <label>
                    Población
                    <input type="text" maxlength="30" name="poblacio" required placeholder="Población"
                           value="<?php echo $user['poblacio'] ?>">
                </label>
                <label>
                    Código postal
                    <input type="text" pattern="[0-9]{5}" name="codi_postal" required placeholder="Código postal"
                           value="<?php echo $user['codi_postal'] ?>">
                </label>
            </div>
        <?php endif; ?>

        <button type="submit" name="update" class="button">Actualizar</button>

    </form>
</div>