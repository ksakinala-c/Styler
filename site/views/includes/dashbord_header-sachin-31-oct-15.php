<ul id="my-account-nav" style="margin-top:40px;">
<style>
#my-account-nav li
</style>
	<li>
		<a style="border:none;" href="<?php echo $base_url; ?>account/" >
			<span class="text">Dashboard</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
	<li>
		<a <?php if($this->uri->segment(2) == 'edit_users') {?>class="selected"<?php } ?> href="<?php echo $base_url;  ?>account/edit_users/" >
			<span class="text">Account details</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
	
	 <li>
		<a <?php if($this->uri->segment(2) == 'account_address_book') {?>class="selected"<?php } ?> href="<?php echo $base_url; ?>account/account_address_book">
			<span class="text">Address Book</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
	 <li> <a <?php if($this->uri->segment(2) == 'account_my_orders') {?>class="selected"<?php } ?>  href="<?php echo $base_url; ?>account/account_my_orders">
			<span class="text">My Orders</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
	<li> <a <?php if($this->uri->segment(2) == 'mywishlist') {?>class="selected"<?php } ?>  href="<?php echo $base_url; ?>account/mywishlist">
			<span class="text">My Wishlist</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
	<?php if($this->session->userdata('insider')=="1") { ?>
	<li> <a <?php if($this->uri->segment(2) == 'invite') {?>class="selected"<?php } ?>  href="<?php echo $base_url; ?>insider/invite">
			<span class="text">Insider</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
	<!-- li> <a <?php if($this->uri->segment(2) == 'topic') {?>class="selected"<?php } ?>  href="<?php echo $base_url; ?>insider/topic">
			<span class="text">Create Topic</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li -->
	<?php } ?>
	<?php ///if($this->session->userdata('insider')=="1") { ?>
	<!-- li> <a <?php if($this->uri->segment(2) == 'inviteduser') {?>class="selected"<?php } ?>  href="<?php echo $base_url; ?>insider/inviteduser">
			<span class="text">Invited User</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li -->
	<?php //} ?>
	<li> <a <?php if($this->uri->segment(2) == 'measure') {?>class="selected"<?php } ?>  href="<?php echo $base_url; ?>account/measure">
			<span class="text">View Measure</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
	<li> <a <?php if($this->uri->segment(2) == 'savedata') {?>class="selected"<?php } ?>  href="<?php echo $base_url; ?>account/savedata">
			<span class="text">Save Styles</span>
			<span class="arrow">&rsaquo;</span>
		</a>
	</li>
</ul>