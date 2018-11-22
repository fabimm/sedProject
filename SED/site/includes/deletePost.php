<?php 

if(isset($_SESSION['login_user'])) {
   
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']=='t'){
        echo "<form action='' method='post'>";
        echo '<input type="hidden" name="delete" value="yes"></input>';
        echo '<input type="submit" class="btn btn-danger" value="Eliminar post"></input>';
        echo '</form>';
    }
}

?>