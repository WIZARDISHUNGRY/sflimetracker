<tr>
	<th><?php echo $form['title']->renderLabel() ?></th>
	<td>
		<div class="form-field">
			<?php echo $form['title'] ?>
			<p>Becomes <span class="perm-preview">(empty)</span> in torrent filenames</p>
			<?php echo $form['title']->renderError() ?>
		</div>
		<script type="text/javascript">
		  watchForSlug($$('input#title').first(), $$('.perm-preview').first());
		</script>
		<div class="value">
			<?php echo $form['title']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr id="slug_row">
	<th><?php echo $form['slug']->renderLabel() ?></th>
	<td>
		<div class="form-field">
			<?php echo $form['slug'] ?>
			<p>Used in the episode address</p>
			<?php echo $form['slug']->renderError() ?>
		</div>
		<div class="value">
			<?php echo $form['slug']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr>
	<th><?php echo $form['length']->renderLabel() ?></th>
	<td>
		<div class="form-field">
			<?php echo $form['length'] ?>
			<p>Duration of the episode, like: 25:14 (which equals 25 minutes, 14 seconds)</p>
			<?php echo $form['length']->renderError() ?>
		</div>
		<div class="value">
			<?php echo $form->getObject()->getFormattedLength(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr>
	<th><?php echo $form['created_at']->renderLabel() ?></th>
	<td>
		<div class="form-field">
			<?php echo $form['created_at'] ?>
			<p>Creation date, like: 2008-12-25 13:34:00</p>
			<?php echo $form['created_at']->renderError() ?>
		</div>
		<div class="value">
			<?php echo $form['created_at']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr>
	<th><?php echo $form['description']->renderLabel() ?></th>
	<td>
		<div class="form-field">
			<?php echo $form['description'] ?>
			<?php echo $form['description']->renderError() ?>
		</div>
		<div class="value">
			<?php echo $form['description']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>

  <?php if ($form->hasGlobalErrors()): ?>
    <tr>
      <td colspan="">
        <ul class="error_list">
          <?php foreach ($form->getGlobalErrors() as $name => $error): ?>
            <li><?php echo $name.': '.$error ?></li>
          <?php endforeach; ?>
        </ul>
      </td>
    </tr>
  <?php endif; ?>

