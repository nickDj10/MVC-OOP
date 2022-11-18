<?php $this->view("template/header",$data)?>

<section class="section background-white">
  <div class="s-12 m-12 l-4 center">
    <h2 class=" margin-bottom-20 text-dark text-center"><?=$data['post']->title?></h2>
    <img src="<?=ROOT . $data['post']->image?>" alt="" style="width:100%;">
    <br>
    <?=$data['post']->description?>

  </div>           
</section> 


<?php $this->view("template/footer",$data)?>