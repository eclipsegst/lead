<?php include './assets/template/header.php'; ?>
<h2>Welcome <?php echo $this->session->userdata('username');?></h2>
<div>
<hr>
User Functions
<hr>
<a href="<?php echo base_url();?>newspost">News Post Page</a><br />
<a href="<?php echo base_url();?>volunteer">Volunteer Page</a><br />
<a href="<?php echo base_url();?>account">Account Page</a><br />
<a href="<?php echo base_url();?>test">Test Page</a><br />
<a href="<?php echo base_url();?>request">Time Sheet Request Page</a><br />
<a href="<?php echo base_url();?>test_list">Go to this page if you want to take a quiz</a><br />

<hr>
Admin Functions
<hr>
<a href="<?php echo base_url();?>createnewspost">Create News Post</a><br />
<a href="<?php echo base_url();?>approved">Approve Sheet Request Page</a><br />
<a href="<?php echo base_url();?>quiz_list">Quiz Page for admin</a><br />
<a href="<?php echo base_url();?>systemlog">Admin View System Log</a><br />
<a href="<?php echo base_url();?>admin">Admin Page</a><br />
<a href="<?php echo base_url();?>analytic_controller">Analytics Page</a><br />

</div>
<?php include './assets/template/footer.php'; ?>
