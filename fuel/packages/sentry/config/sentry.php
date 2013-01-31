<?php

return array(
  /**
   * Sentry DNS
   */
  // 'dns'	=> 'https://90dcda6e8341418db9fecf474f8e26df:27c970fe615148caa71dcbbb54d36486@app.getsentry.com/4375', // live
  'dns'	=> 'https://c3dce89bdc9742cf80cf0b782c26197f:3bf262e8c4aa44c481f3cfab4f133f8c@app.getsentry.com/4702', // sandbox

  /**
   * Overwrite error handler?
   *
   * This will send all errors (including uncaught exceptions) to Sentry.
   * Note: for now, when the Fuel environment is DEVELOPMENT, this setting
   * will be ignored and default to false
   */
  'overwrite_error_handlers' => true,
);
