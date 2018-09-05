<?php
  if(empty($data)){
    $data = array();
  }
  $this->load->view('partials/header',$data);
?>

<div class="row">

  <?php
    $this->load->view('partials/left_sidebar',$data);
  ?>

  <div class="main-wrapper">

  <?php
    $this->load->view('partials/top_toolbar',$data)
  ?>
  
    <main style="min-height: 80%">
      <?php
        $this->load->view($view,$data);
      ?>
    </main>
    <!-- /Main Content -->

    <!-- Footer -->
    <footer class="bg-white w-100 pl-5 pr-5 pt-4 pb-4 mt-auto">
      <div>Effendy © 2018</div>
    </footer>
    <!-- /Footer -->

  </div>
  <!-- /Main Part -->


</div>

<?php
$this->load->view('partials/footer',$data);
?>