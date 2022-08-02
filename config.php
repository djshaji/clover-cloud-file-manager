<?php
$config = array (
    "dir"=> "/var/www/clover",
    "filesdir"=> "/mnt/data/djshaji/Projects/clover-files",
    "serviceAccount"=> "/var/www/clover-keys/clover-356904-firebase-adminsdk-72w43-c9231f90ae.json",
    "database" => "mysql:host=localhost;dbname=letsgodil;charset=utf8mb4",
    "database_user" => "clover",
    "database_pass" => "iloveshajikhan",
    "codename" => "Clover Cloud File Manager",
    "description" => "Cloud File Manager for Droplets, Google Cloud Storage, AWS, et al",
    "skin" => "materia",
    "theme" => "blue_deep_orange",
    "font"=> "Maven Pro",
    "header" => true,
    "header-bg" => "primary",
    "footer" => true,
    "footer-bg" => "text-white bg-primary ",
    "privacy-policy"=> null,
    "logo" => "/logo.png",

    "drawer" => array (
      "List files"=> '?list=1',
      "Thumbnails"=> '?icons=1',
      "About"=> "/anneli/about"
    ),
    "messages" => array (
      "new"=> true
    ),
    "analytics" => false,
    "footer-floating" => '<!-- Expandable Textfield -->
          <div class="mdl-textfield pt-3 mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input onchange="searchFiles();" class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="sample-expandable">Search</label>
            </div>
          </div>'
  );
  
  
?>