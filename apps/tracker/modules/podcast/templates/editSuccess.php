<h1><?php echo link_to($podcast->getTitle(),'podcast/edit?id='.$podcast->getId()) ?></h1>

<form action="<?php echo url_for('podcast/edit') ?>" method="POST" enctype="multipart/form-data">
<div class="form-wrapper">
<table>
    <?php include_partial('podcast/podcastform', Array('form'=>$form)); ?>
    <tr class="form-field">
    <td>&nbsp;</td>
    <td>
        <div>
          <input type="submit" value="Save"/>
          <input type="submit" class="close-form" value="Cancel"/>
          <?php echo delete_form_for_object($podcast); ?>
        </div>
    </td>
    <td>

    </td>
    </tr>
</table>
</div>
</form>


<h2>Episodes</h2>
<ul>
  <?php if($episodes): ?>
      <?php foreach($episodes as $episode): ?>
        <li>
          <?php echo link_to_with_icon($episode->getCreatedAt('Y M d').
            ' - '.$episode->getTitle(),'episode', 'episode/edit?id='.$episode->getId()) ?>
        </li>
      <?php endforeach; ?>
  <?php else: ?>
    <p><i>No episodes yet.</i></p>
  <?php endif; ?>
  <?php
    if(true) // TODO add !Podcast->isFeedBased() here
    {
    echo '<li>',link_to_with_icon('Add episode…','add','episode/add?podcast_id='.$podcast->getId()),'</li>';
    }
  ?>
</ul>

<h2>Formats</h2>
<?php if($feeds): ?>
<ul>
  <?php foreach($feeds as $feed): ?>
    <li>
      <?php 
        echo $feed->getTitle(),
        button_to('Edit','podcast_feed/edit?id='.$feed->getID()),
        count($feeds)>1?delete_form_for_object($feed,'podcast_feed/delete'):'';
      ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php else: ?>
  <p><i>No feeds yet.</i></p>
<?php endif; ?>
