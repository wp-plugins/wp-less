<?php

class WPLessConfiguration extends WPPluginToolkitConfiguration
{
  /**
   * Refers to the name of the plugin
   */
  const UNIX_NAME = 'wp-less';

  /**
   * Refers to the version of the plugin
   */
  const VERSION =   '1.2-dev';


  protected function configure()
  {
    $this->configureOptions();
  }

  protected function configureOptions()
  {
    
  }
}
