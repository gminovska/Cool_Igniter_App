<?php
$this->load->view($this->config->item('theme') . 'header');
?>
<h2>So, you wanna see some <?php echo $title; ?> photos?</h2>
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