          <? if(!empty($entry['name'])): ?>
            <h2 class="name p-name"><?= e($entry['name']) ?></h2>
          <? endif ?>

          <? if(!empty($entry['content']['html'])): ?>
            <div class="content html">
              <span class="e-content"><?= $entry['content']['html'] ?></span>
              <div class="read-more hidden"><a href="#" class="">Read More</a></div>
            </div>
          <? elseif(!empty($entry['content']['text'])): ?>
            <div class="content text"><span class="p-content"><?= e($entry['content']['text']) ?></span> <div class="read-more hidden"><a href="#" class="">Read More</a></div></div>
          <? endif ?>

          <?
          // If no other content is available to be displayed, show the summary instead
          if(
            !isset($entry['checkin'])
            && empty($entry['name'])
            && empty($entry['content'])
            && empty($entry['audio'])
            && empty($entry['video'])
            && empty($entry['photo'])
          ):
          ?>
            <div class="content">
              <? if(!empty($entry['summary'])): ?>
                <div class="text"><span class="p-summary"><?= e($entry['summary']) ?></span></div>
              <? else: ?>
                <div class="content text"></div>
              <? endif ?>
            </div>
          <? endif ?>
