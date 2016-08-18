<?php

/**
 * @file
 * Contains \CkEditorSubContext.
 */

use Drupal\DrupalExtension\Context\DrupalSubContextBase;
use Drupal\DrupalExtension\Context\DrupalSubContextInterface;

/**
 * Contains form contexts.
 */
class FormsSubContext extends DrupalSubContextBase implements DrupalSubContextInterface {

  /**
   * @When /^(?:|I )select "(?P<option>\w+)" in the "(?P<name>\w+)" select$/
   */
  public function selectState($option, $name) {
    $page          = $this->getSession()->getPage();
    $selectElement = $page->find('xpath', '//select[@name = "' . $name . '"]');

    $selectElement->selectOption($option);
  }

}
