<?php
/**
 * Sharif Judge online judge
 * @file side_bar.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */?>
<div id="side_bar">
	<ul>
		<div class="side_box"><a href="<?php echo site_url('dashboard') ?>"><li <?php echo ($selected=='dashboard'?'class="selected"':'') ?> id="l1"><i class="splashy-home_green"></i> Dashboard</li></a></div>
		<div class="side_box"><a href="<?php echo site_url('profile') ?>"><li <?php echo ($selected=='profile'?'class="selected"':'') ?> id="l2"><i class="splashy-contact_grey"></i> Profile</li></a></div>
		<div class="side_box"><a href="<?php echo site_url('assignments') ?>"><li <?php echo ($selected=='assignments'?'class="selected"':'') ?> id="l3"><i class="splashy-folder_modernist_opened"></i> Assignments</li></a></div>
		<div class="side_box"><a href="<?php echo site_url('submit') ?>"><li <?php echo ($selected=='submit'?'class="selected"':'') ?> id="l4"><i class="splashy-arrow_large_up"></i> Submit</li></a></div>
		<div class="side_box"><a href="<?php echo site_url('final_submissions') ?>"><li <?php echo ($selected=='final_submissions'?'class="selected"':'') ?> id="l5"><i class="splashy-marker_rounded_violet"></i> Final Submissions</li></a></div>
		<div class="side_box"><a href="<?php echo site_url('all_submissions') ?>"><li <?php echo ($selected=='all_submissions'?'class="selected"':'') ?> id="l6"><i class="splashy-view_list_with_thumbnail"></i> All Submissions</li></a></div>
		<div class="side_box"><a href="<?php echo site_url('scoreboard') ?>"><li <?php echo ($selected=='scoreboard'?'class="selected"':'') ?> id="l7"><i class="splashy-star_boxed_full"></i> Scoreboard</li></a></div>
	</ul>
	<div id="about">
		<p><a href="https://github.com/mjnaderi/Sharif-Judge" >Sharif Judge</a></p>
		<p>by <a href="http://mjnaderi.ir">Mohammad Javad Naderi</a></p>
	</div>
</div>
