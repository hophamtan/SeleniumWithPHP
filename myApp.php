<?php
  require_once('vendor/autoload.php');
  use Facebook\WebDriver\Remote\RemoteWebDriver;
  use Facebook\WebDriver\WebDriverBy;

  // Open a chrome browser.
  $capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'chrome');
  $webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);

  # Searching for 'BrowserStack' on google.com
  $web_driver->get("http://google.com");
  $element = $web_driver->findElement(WebDriverBy::name("q"));
  if($element) {
      $element->sendKeys("Aspire");
      $element->submit();
  }
  sleep(5); # adding delay for a few seconds before script reads the browser's title.
  print $web_driver->getTitle();

  $web_driver->quit();
?> 