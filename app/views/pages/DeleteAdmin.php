<?php

class DeleteAdmin extends view
{
 

  public function output()
  {

    require APPROOT . '/views/pages/adminPage.php';
    
  

?>
  <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            <div class="alert alert-danger text-center">Deleted Successfully! </div>

    </div>
    </div>
    </div>

    <?php
         require APPROOT . '/views/inc/footer.php';
    }
}
?>