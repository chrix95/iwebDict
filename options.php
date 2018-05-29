<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>Local WebDictionary</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/index.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

  <section id="nav">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            Ibibio Web<span>Dictionary</span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav">
            <li><a href="options.php">OPTIONS</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </section>

  <section id="group" ng-hide="tab==1 || tab==2 || tab==3 || tab==4" ng-init="tab=0">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2" id="selection">
          <div class="row">
            <div class="col-xs-6 col-md-6 text-center">
              <button type="button" name="category" class="btn btn-primary findOut" ng-click="tab=1">
                <img src="assets/img/1025.png" alt="" class="img img-responsive center-block" width="35%"/>
                <h3>
                  Category
                </h3>
              </button>
            </div>
            <div class="col-xs-6 col-md-6 text-center">
              <button type="button" name="contribute" class="btn btn-primary findOut" ng-click="tab=2">
                <img src="assets/img/90.png" alt="" class="img img-responsive center-block" width="35%"/>
                <h3>
                  Contribute
                </h3>
              </button>
            </div>
            <div class="col-xs-6 col-md-6 text-center">
              <button type="button" name="tongueTwisters" class="btn btn-primary findOut" ng-click="tab=3">
                <img src="assets/img/style.png" alt="" class="img img-responsive center-block" width="35%"/>
                <h3>
                  Tongue Twisters
                </h3>
              </button>
            </div>
            <div class="col-xs-6 col-md-6 text-center">
              <button type="button" name="sentences" class="btn btn-primary findOut" ng-click="tab=4">
                <img src="assets/img/77.png" alt="" class="img img-responsive center-block" width="35%"/>
                <h3>
                  Sentence
                </h3>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="category" ng-show="tab===1">
    <div class="container-fluid">
      <h1>
        Select Category
        <button type="button" name="catBack" class="btn btn-primary back findOut pull-right" ng-click="tab=0">
          <strong>&lt;&lt; Back</strong>
        </button>
      </h1>
      <div ng-include="'resources/category.php'">

      </div>
    </div>
  </section>

  <section id="contribute" ng-show="tab==2">
    <div class="container-fluid">
      <h1>
        Contribute
        <button type="button" name="catBack" class="btn btn-primary back findOut pull-right" ng-click="tab=0">
          <strong>&lt;&lt; Back</strong>
        </button>
      </h1>
    </div>
  </section>

  <section id="tongueTwisters" ng-show="tab==3">
    <div class="container-fluid">
      <h1>
        Tongue Twisters
        <button type="button" name="catBack" class="btn btn-primary back findOut pull-right" ng-click="tab=0">
          <strong>&lt;&lt; Back</strong>
        </button>
      </h1>
    </div>
  </section>

  <section id="sentences" ng-show="tab==4">
    <div class="container-fluid">
      <h1>
        Sentences
        <button type="button" name="catBack" class="btn btn-primary back findOut pull-right" ng-click="tab=0">
          <strong>&lt;&lt; Back</strong>
        </button>
      </h1>
    </div>
  </section>

  <script src="assets/js/jquery.min.js" charset="utf-8"></script>
  <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="assets/js/jquery.validate.min.js" charset="utf-8"></script>
  <script src="assets/js/angular.min.js" charset="utf-8"></script>
  <script src="assets/js/angular.js" charset="utf-8"></script>
  <script src="assets/js/index.js" charset="utf-8"></script>
</body>
</html>
