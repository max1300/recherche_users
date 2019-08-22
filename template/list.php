<?php foreach($utilisateurs as $utilisateur){ ?>

<div class="table container">
             <div class="name btn-primary">
                 <?php echo $utilisateur["username"]; ?> 
             </div>  
     
             <div class="iden alert-success">
                 <strong>    <?php echo $utilisateur["profile_image"]; ?> </strong>
             </div>
     
             <div class="ref alert-danger">
                 <strong>    <?php echo $utilisateur["date_inscription"]; ?> </strong>
             </div>
     
             <div class="descri alert-warning">
                 <strong>    <?php echo $utilisateur["email"]; ?> </strong>
             </div>
     
     
</div>

<?php } ?>