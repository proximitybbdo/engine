<?php

namespace Fuel\Tasks;

Class Populate {
  public static function run() {
    \Cli::write("This populates the database with all the default values.", 'red');
  }
}
