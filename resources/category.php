<div class="row" ng-controller="MainCtrl">
  <div class="col-md-12">
    <button type="button" name="all" ng-click="all()" class="btn btn-primary findOut">All</button>
    <button type="button" name="religion" ng-click="religion()" class="btn btn-primary findOut" ng-model="religion">Religion</button>
    <button type="button" name="market" ng-click="market()" class="btn btn-primary findOut">Market</button>
    <button type="button" name="family" ng-click="family()" class="btn btn-primary findOut">Family</button>
    <button type="button" name="relationship" ng-click="relationship()" class="btn btn-primary findOut">Relationship</button>
    <button type="button" name="kitchen" ng-click="kitchen()" class="btn btn-primary findOut">Kitchen</button>
    <button type="button" name="animal" ng-click="animal()" class="btn btn-primary findOut">Animal</button>
    <div class="row">
      <div class="col-md-6" ng-repeat="message in messages | orderBy: 'english'">
        <h4 class="primary">
          {{ message.english }} ({{ message.word }})
          <span>
            <button type="button" name="sound/word/{{ message.word }}.3GPP" class="requestPlay btn btn-primary btn-xs">Pronounce</button>
          </span>
        </h4>
        <script type="text/javascript">
          $('.requestPlay').click( function() {
            document.getElementById('play').src = $(this).attr('name');
            document.getElementById('play').play();
          });
        </script>
        <div class="sub-category">
          <p>
            <strong>Meaning: </strong>{{ message.meaning }}
          </p>
          <p>
            <strong>Sentence: </strong>{{ message.sentence }}
            <span>
              <button type="button" name="sound/sentence/{{ message.word }}.3GPP" class="requestPlay btn btn-primary btn-xs">Listen</button>
            </span>
          </p>
        </div>
      </div>
    </div>
    <audio src="" controls id="play" preload="none" class="hidden">

    </audio>
  </div>
</div>
