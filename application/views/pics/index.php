<?php
$this->load->view($this->config->item('theme') . 'header');
?>
<div class="row">
    <div class="col col-lg-7">
<h2>So, you wanna see some <?php echo $title; ?> photos?</h2>
</div>
<div class="col col-lg-4 img_search">
<form class="form-horizontal" action="<?= base_url()?>index.php/pics/view/">
    <div class="form-group">  
            <label for="tag" class="sr-only">Search for:</label>
        <input type="text" name="tag" value="" placeholder="Ex. pandas" id="tag" >
        <input type="submit" name="" value="Show Me" class="btn btn-default">      </div>
  </div>         
</form>
</div>
<div class="row">
    <div class="col col-lg-4">
        <a href="<?= base_url()?>index.php/pics/view/cat">
<h3>Cats</h3>
<img src="<?= base_url()?>/assets/img/cat.jpg" alt="Image of a cat" class="pics">
    </a>
    </div>
    <div class="col col-lg-4">
        <a href="<?= base_url()?>index.php/pics/view/flowers">
<h3>Flowers</h3>
<img src="<?= base_url()?>/assets/img/flower.jpg" alt="Image of a flower" class="pics">
</a>
    </div>
    <div class="col col-lg-4">
        <a href="<?= base_url()?>index.php/pics/view/dog">
<h3>Dogs</h3>
<img src="<?= base_url()?>/assets/img/bulldog.jpg" alt="Image of a dog" class="pics">
</a>
    </div>
    
</div>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>