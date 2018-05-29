<div class="container-fluid" id="searchresult">
  <?php
    foreach ($resultArray as $key => $value) {
      $word = $value->word;
      $english = $value->english;
      $meaning = $value->meaning;
      $sentence = $value->sentence;
      $category = $value->category;
  ?>
  <div class="row" class="resultRow">
    <div class="col-md-6">
      <h4>
        <?php
          echo $english. " (". $word. ") ";
        ?>
        <span>
          <button type="button" name="<?php echo 'sound/word/' .$word. '.3GPP'; ?>" class="requestPlay btn btn-primary btn-xs">Pronounce</button>
        </span>
      </h4>
      <div class="sub-category">
        <p>
          <strong>Meaning: </strong><?php echo $meaning; ?>
        </p>
        <p>
          <span>
            <button type="button" name="<?php echo 'sound/word/' .$word. '.3GPP'; ?>" class="requestPlay btn btn-primary btn-xs">Play</button>
          </span>
          <strong>Sentence: </strong><?php echo $sentence; ?>
        </p>
      </div>
    </div>
  </div>
  <hr>
  <?php } ?>
  <audio src="" controls id="play" class="hidden">

  </audio>
</div>

<script type="text/javascript">
  $('.requestPlay').click( function() {
    document.getElementById('play').src = $(this).attr('name');
    document.getElementById('play').play();
  });

</script>
