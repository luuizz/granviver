<?php 
$this->load->view('header');
?>

<?php 
//Home
$this->load->view('include/sections/home/hero');
$this->load->view('include/sections/home/sobre');
$this->load->view('include/sections/home/empreendimento');
$this->load->view('include/sections/home/styles');

?>

<?php $this->load->view('footer'); ?>