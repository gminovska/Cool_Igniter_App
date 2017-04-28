<?php
$this->load->view($this->config->item('theme') . 'header');
?>
<h2>So, you wanna see some <?php echo $title; ?> photos?</h2>
<div class="img_row">

<?php

foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<div class='item well'><img class='pics' title='" . $pic->title . "' src='" . $photo_url . "' /><p>". $pic->title . "</p></div>";
 
}
?>
</div>
	
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>