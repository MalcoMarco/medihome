<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<div class="large-6 medium-5 columns">
		<?= $this->Form->create() ?>
			<fieldset>
				<legend><?= __('Please enter your username and password') ?></legend>
				<?= $this->Form->input('tipodoc') ?>
				<?= $this->Form->input('username') ?>
				<?= $this->Form->input('password') ?>
			</fieldset>
		<?= $this->Form->button(__('Login')); ?>
		<?= $this->Form->end() ?>
	</div>
		
</div>