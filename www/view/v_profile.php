<div class="container-profile">
    <?php if (isset($user)) : ?>
        <?php foreach ($user as $key => $user):
            if ($user['id']) : ?>
            <h1>WELCOME <?php echo $user["nom"] ?> !</h1>
                 <h2>DATOS PERSONALES</h2>
                 <h4> Podrás acceder y modificar tus datos personales para facilitar tus futuras compras y notificarnos cualquier cambio en tus datos de contacto.</h4>
                 <div class="form-group">
                     <h3>Nombre</h3><p> <?php echo $user['nom'] ?></p>
                     <h3>Email</h3><p> <?php echo $user['email'] ?></p> 
                     <h3>Dirección</h3><p> <?php echo $user['adreca'] ?></p>
                     <h3>Población</h3><p> <?php echo $user['poblacio'] ?></p>
                     <h3>Código postal</h3><p> <?php echo $user['codi_postal'] ?></p>
                </div>
                
             
                <?php endif;
        endforeach;?>
                    <?php endif;?>
</div>
<div class="tab">
    <a href="index.php?action=editProfile" class="button">Editar datos</a>

</div>
