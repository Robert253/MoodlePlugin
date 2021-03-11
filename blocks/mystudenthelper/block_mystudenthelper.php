<?php
/**
 * Form for editing block_MyStudentHelper block instances.
 *
 * @package   block_mystudenthelper
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_mystudenthelper extends block_base {

  function init() {
      $this->title = get_string('pluginname', 'block_mystudenthelper');
  }

  function get_content() {
      if ($this->content !== NULL) {
          return $this->content;
      }

      $this->content = new stdClass;
      $this->content->text = 'this is the text';
      $this->content->footer = 'this is the footer';
      return $this->content;
  }
}
