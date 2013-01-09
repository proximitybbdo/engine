<?php

return array(
  /**
   * Sentry DNS
   */
  'dns'	=> 'https://90dcda6e8341418db9fecf474f8e26df:27c970fe615148caa71dcbbb54d36486@app.getsentry.com/4375',

  /**
   * Overwrite error handler?
   *
   * This will send all errors (including uncaught exceptions) to Sentry.
   * Note: for now, when the Fuel environment is DEVELOPMENT, this setting
   * will be ignored and default to false
   */
  'overwrite_error_handlers' => true,
);
