<?php
/**
 * Sharif Judge online judge
 * @file rejudge.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->view('templates/top_bar'); ?>
<?php $this->view('templates/side_bar',array('selected'=>'assignments')); ?>
<div id="main_container">
	<div id="page_title">
		<img src="<?php echo base_url('assets/images/icons/rejudge.png') ?>"/>
		<span><?php echo $title ?></span>
	</div>
	<div id="main_content">
		<?php foreach ($msg as $message): ?>
			<p class="shj_ok"><?php echo $message ?></p>
		<?php endforeach ?>
		<p>
			Selected Assignment: <?php echo $assignment['name'] ?>
		</p>
		<p>
			By clicking on rejudge, all submissions of selected problem will go in 'PENDING' state. Then
			Sharif Judge rejudges them one by one.
		</p>
		<?php foreach ($problems as $problem): ?>
			<?php echo form_open('rejudge') ?>
				<input type="hidden" name="problem_id" value="<?php echo $problem['id'] ?>"/>
				<input type="submit" class="sharif_input" value="Rejudge Problem <?php echo $problem['id'] ?> (<?php echo $problem['name'] ?>)"/>
			</form>
		<?php endforeach ?>

	</div>
</div>