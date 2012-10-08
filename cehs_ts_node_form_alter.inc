<?php
/**
 * @file
 * @todo - add description
 */










function cehs_ts_autocalc() {
  
}


function cehs_ts_autocalc_callback($form, $form_state) {
        $form['field_t02'] = array(
          '#type' => 'container',
          '#attributes' => array(
            'class' => array(
              '0' => 'field-type-number-decimal',
              '1' => 'field-name-field-t02',
              '2' => 'field-widget-number'
            ),
          ),
          '#weight' => '',
          '#tree' => TRUE,
          '#language' => 'und',
          'und' => array(
            '0' => array(
              'value' => array(
                '#entity_type' => 'node',
                '#bundle' => 'ts_biweekly',
                '#field_name' => 'field_t02',
                '#language' => 'und',
                '#field_parents' => array(),
                '#columns' => array(
                  '0' => 'value',
                ),
                '#title' => '',
                '#description' => '',
                '#required' => FALSE,
                '#delta' => 0,
                '#weight' => 0,
                '#type' => 'textfield',
                '#default_value' => '8.88',
                '#size' => 2,
                '#maxlength' => 5,
                '#number_type' => 'decimal',
                '#element_validate' => array(
                  '0' => 'number_field_widget_validate',
                ),
              ),
            ),
            '#theme' => 'field_multiple_value_form',
            '#field_name' => 'field_t02',
            '#cardinality' => '1',
            '#title' => '',
            '#required' => 0,
            '#description' => '',
            '#prefix' => '<div id="field-t02-add-more-wrapper">',
            '#suffix' => '</div>',
            '#max_delta' => 0,
            '#after_build' => array(
              '0' => 'field_form_element_after_build',
            ),
            '#language' => 'und',
            '#field_parents' => array(),
          ),
          '#access' => TRUE,
      );
  
  return $form;
}