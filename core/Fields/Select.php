<?php
namespace TypeRocket\Fields;

class Select extends Field {

  function render() {
    $this->type = 'radio';
    $option = esc_attr($this->get_value());
    $field = tr_html::open_element('select', $this->attr);
    foreach($this->options as $key => $value) {

      $attr['value'] = $value;
      if($option == $value) {
        $attr['selected'] = 'selected';
      }
      else {
        unset($attr['selected']);
      }

      $field .= tr_html::element('option', $attr, (string) $key);

    }
    $field .= '</select>';
    return $field;
  }

}