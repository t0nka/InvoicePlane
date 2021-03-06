<div class="headerbar">
	<h1><?php echo lang('invoice_aging'); ?></h1>
</div>

<div class="content">

	<?php $this->layout->load_view('layout/alerts'); ?>

	<div id="report_options" class="panel panel-default">

		<div class="panel-heading">
			<h3 class="panel-title">
                <i class="fa fa-print"></i>
                <?php echo lang('report_options'); ?>
            </h3>
		</div>

		<div class="panel-body">
			<form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">

				<div class="form-group">
                    <input type="submit" class="btn btn-success"
                           name="btn_submit" value="<?php echo lang('run_report'); ?>">
				</div>

			</form>
		</div>

	</div>

</div>

</form>