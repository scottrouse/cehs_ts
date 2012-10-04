<?php
  
  // Retrieve the NID of the referenced Pay Period.
  $pay_period_id = $form['field_pay_period_ref']['und']['#default_value'];
  
  // Given Pay Period NID, get start date.
  $pay_period_start = $node->field_period_dates['0'];
  $node = node_load($pay_period_id[0]);
  /* $pay_period_start2 = field_view_value('node', $node, 'field_period_dates', $field[0]); */
  $pay_period_start3 = field_get_items('node', $node, 'field_period_dates');
  $start_date = strtotime($pay_period_start3['0']['value']);

?>


<?php
  // Misc variables
  /* $start_date = time(); */ // @todo replace this with pull from 
  $format_long = 'm/d/Y'; // PHP Date format for display in timesheet
  $format_medium = 'm/d'; // Month and Day. i.e. - "06/18"
  $format_day = 'l'; // Day of week. i.e.- "Wednesday"
  $day = '86400'; // Seconds in a day
  /* $employee_name = 'Scott Rouse'; */
  
  $day1 = $start_date;
  $day2 = $start_date+$day;
  $day3 = $start_date+($day*2);
  $day4 = $start_date+($day*3);
  $day5 = $start_date+($day*4);
  $day6 = $start_date+($day*5);
  $day7 = $start_date+($day*6);
  $day8 = $start_date+($day*7);
  $day9 = $start_date+($day*8);
  $day10 = $start_date+($day*9);
  $day11 = $start_date+($day*10);
  $day12 = $start_date+($day*11);
  $day13 = $start_date+($day*12);
  $day14 = $start_date+($day*13);
  $day15 = $start_date+($day*14);
  $day16 = $start_date+($day*15);
  $day17 = $start_date+($day*16);
  $day18 = $start_date+($day*17);
  $day19 = $start_date+($day*18);
  $day20 = $start_date+($day*19);
  $day21 = $start_date+($day*20);
  $day22 = $start_date+($day*21);
  $day23 = $start_date+($day*22);
  $day24 = $start_date+($day*23);
  $day25 = $start_date+($day*24);
  $day26 = $start_date+($day*25);
  $day27 = $start_date+($day*26);
  $day28 = $start_date+($day*27);
  $day29 = $start_date+($day*28);
  $day30 = $start_date+($day*29);
  $day31 = $start_date+($day*30);
?>


<!-- @todo - remove before publishing -->
<div style="border:2px dashed red; padding: 10px; margin: 10px; background-color: #ccc;">

<p>This is the "ts-bi-weekly-node-form.tpl.php" template file output.</p>

<h2>Variables Testing</h2>
<small>This content will be removed and is for testing purposes only.</small>
<p>$pay_period_id: <?php echo($pay_period_id[0])?></p>
<p>$startdate: <?php echo($start_date)?></p>
<p>Date unix: <?php echo(date('U',$start_date))?></p>
<p>Date unix2: <?php echo(strtotime($start_date))?></p>

</div>



<?php print drupal_render($form['title']); ?></p>

<div id="employee-info">
  <p><?php print drupal_render($form['field_employee_name']); ?></p>
  <p><?php print drupal_render($form['field_employee_id']); ?></p>
</div>

<?php print drupal_render($form['field_pay_period_ref']); ?>



<table summary="A spreadsheet-like form containing hours by category per day for this seven day period.">
  <caption>Week One</caption>
  <thead>
    <tr>
      <td></td>
      <th abbr="<?php print date($format_day, $day1)?>, <?php print date($format_medium, $day1)?>"><?php print date($format_day, $day1)?><br /><?php print date($format_long, $day1)?></th>
      <th abbr="<?php print date($format_day, $day2)?>, <?php print date($format_medium, $day2)?>"><?php print date($format_day, $day2)?><br /><?php print date($format_long, $day2)?></th>
      <th abbr="<?php print date($format_day, $day3)?>, <?php print date($format_medium, $day3)?>"><?php print date($format_day, $day3)?><br /><?php print date($format_long, $day3)?></th>
      <th abbr="<?php print date($format_day, $day4)?>, <?php print date($format_medium, $day4)?>"><?php print date($format_day, $day4)?><br /><?php print date($format_long, $day4)?></th>
      <th abbr="<?php print date($format_day, $day5)?>, <?php print date($format_medium, $day5)?>"><?php print date($format_day, $day5)?><br /><?php print date($format_long, $day5)?></th>
      <th abbr="<?php print date($format_day, $day6)?>, <?php print date($format_medium, $day6)?>"><?php print date($format_day, $day6)?><br /><?php print date($format_long, $day6)?></th>
      <th abbr="<?php print date($format_day, $day7)?>, <?php print date($format_medium, $day7)?>"><?php print date($format_day, $day7)?><br /><?php print date($format_long, $day7)?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th abbr="regular">Regular Hours</th>
      <td><?php print drupal_render($form['field_r01']); ?></td>
      <td><?php print drupal_render($form['field_r02']); ?></td>
      <td><?php print drupal_render($form['field_r03']); ?></td>
      <td><?php print drupal_render($form['field_r04']); ?></td>
      <td><?php print drupal_render($form['field_r05']); ?></td>
      <td><?php print drupal_render($form['field_r06']); ?></td>
      <td><?php print drupal_render($form['field_r07']); ?></td>
    </tr>
    <tr>
      <th abbr="annual">Annual Leave</th>
      <td><?php print drupal_render($form['field_a01']); ?></td>
      <td><?php print drupal_render($form['field_a02']); ?></td>
      <td><?php print drupal_render($form['field_a03']); ?></td>
      <td><?php print drupal_render($form['field_a04']); ?></td>
      <td><?php print drupal_render($form['field_a05']); ?></td>
      <td><?php print drupal_render($form['field_a06']); ?></td>
      <td><?php print drupal_render($form['field_a07']); ?></td>
    </tr>
    <tr>
      <th abbr="sick">Sick Leave</th>
      <td><?php print drupal_render($form['field_s01']); ?></td>
      <td><?php print drupal_render($form['field_s02']); ?></td>
      <td><?php print drupal_render($form['field_s03']); ?></td>
      <td><?php print drupal_render($form['field_s04']); ?></td>
      <td><?php print drupal_render($form['field_s05']); ?></td>
      <td><?php print drupal_render($form['field_s06']); ?></td>
      <td><?php print drupal_render($form['field_s07']); ?></td>
    </tr>
  <tbody>
  <tfoot>
    <tr>
      <th>Total</th>
      <td><?php print drupal_render($form['field_t01']); ?></td>
      <td><?php print drupal_render($form['field_t02']); ?></td>
      <td><?php print drupal_render($form['field_t03']); ?></td>
      <td><?php print drupal_render($form['field_t04']); ?></td>
      <td><?php print drupal_render($form['field_t05']); ?></td>
      <td><?php print drupal_render($form['field_t06']); ?></td>
      <td><?php print drupal_render($form['field_t07']); ?></td>
    </tr>
  </tfoot>
</table>

<table summary="A spreadsheet-like form containing hours by category per day for this seven day period.">
  <caption>Week Two</caption>
  <thead>
    <tr>
      <td></td>
      <th abbr="<?php print date($format_day, $day8)?>, <?php print date($format_medium, $day8)?>"><?php print date($format_day, $day8)?><br /><?php print date($format_long, $day8) ?></th>
      <th abbr="<?php print date($format_day, $day9)?>, <?php print date($format_medium, $day9)?>"><?php print date($format_day, $day9)?><br /><?php print date($format_long, $day9) ?></th>
      <th abbr="<?php print date($format_day, $day10)?>, <?php print date($format_medium, $day10)?>"><?php print date($format_day, $day10)?><br /><?php print date($format_long, $day10) ?></th>
      <th abbr="<?php print date($format_day, $day11)?>, <?php print date($format_medium, $day11)?>"><?php print date($format_day, $day11)?><br /><?php print date($format_long, $day11) ?></th>
      <th abbr="<?php print date($format_day, $day12)?>, <?php print date($format_medium, $day12)?>"><?php print date($format_day, $day12)?><br /><?php print date($format_long, $day12) ?></th>
      <th abbr="<?php print date($format_day, $day13)?>, <?php print date($format_medium, $day13)?>"><?php print date($format_day, $day13)?><br /><?php print date($format_long, $day13) ?></th>
      <th abbr="<?php print date($format_day, $day14)?>, <?php print date($format_medium, $day14)?>"><?php print date($format_day, $day14)?><br /><?php print date($format_long, $day14) ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th abbr="regular">Regular Hours</th>
      <td><?php print drupal_render($form['field_r08']); ?></td>
      <td><?php print drupal_render($form['field_r09']); ?></td>
      <td><?php print drupal_render($form['field_r10']); ?></td>
      <td><?php print drupal_render($form['field_r11']); ?></td>
      <td><?php print drupal_render($form['field_r12']); ?></td>
      <td><?php print drupal_render($form['field_r13']); ?></td>
      <td><?php print drupal_render($form['field_r14']); ?></td>
    </tr>
    <tr>
      <th abbr="annual">Annual Leave</th>
      <td><?php print drupal_render($form['field_a08']); ?></td>
      <td><?php print drupal_render($form['field_a09']); ?></td>
      <td><?php print drupal_render($form['field_a10']); ?></td>
      <td><?php print drupal_render($form['field_a11']); ?></td>
      <td><?php print drupal_render($form['field_a12']); ?></td>
      <td><?php print drupal_render($form['field_a13']); ?></td>
      <td><?php print drupal_render($form['field_a14']); ?></td>
    </tr>
    <tr>
      <th abbr="sick">Sick Leave</th>
      <td><?php print drupal_render($form['field_s08']); ?></td>
      <td><?php print drupal_render($form['field_s09']); ?></td>
      <td><?php print drupal_render($form['field_s10']); ?></td>
      <td><?php print drupal_render($form['field_s11']); ?></td>
      <td><?php print drupal_render($form['field_s12']); ?></td>
      <td><?php print drupal_render($form['field_s13']); ?></td>
      <td><?php print drupal_render($form['field_s14']); ?></td>
    </tr>
  <tbody>
  <tfoot>
    <tr>
      <th>Total</th>
      <td><?php print drupal_render($form['field_t08']); ?></td>
      <td><?php print drupal_render($form['field_t09']); ?></td>
      <td><?php print drupal_render($form['field_t10']); ?></td>
      <td><?php print drupal_render($form['field_t11']); ?></td>
      <td><?php print drupal_render($form['field_t12']); ?></td>
      <td><?php print drupal_render($form['field_t13']); ?></td>
      <td><?php print drupal_render($form['field_t14']); ?></td>
    </tr>
  </tfoot>
</table>



<?php print drupal_render_children($form); ?>