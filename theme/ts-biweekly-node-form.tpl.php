<?php
  
  // Retrieve the NID of the referenced Pay Period.
  $pay_period_id = $form['field_pay_period_ref']['und']['#default_value'];
  
  // Given Pay Period NID, get start date.
  $pay_period_start = $node->field_period_dates['0'];
  $node = node_load($pay_period_id[0]); // @todo - set some error handling if noderef from url isn't used (node/add/foo fails)
  /* $pay_period_start2 = field_view_value('node', $node, 'field_period_dates', $field[0]); */
  $pay_period_start3 = field_get_items('node', $node, 'field_period_dates');
  $start_date = strtotime($pay_period_start3['0']['value']);
  $start_date_raw = $pay_period_start3['0']['value'];
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
  $day2 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +1 day");
  $day3 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +2 days");
  $day4 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +3 days");
  $day5 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +4 days");
  $day6 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +5 days");
  $day7 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +6 days");
  $day8 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +7 days");
  $day9 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +8 days");
  $day10 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +9 days");
  $day11 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +10 days");
  $day12 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +11 days");
  $day13 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +12 days");
  $day14 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +13 days");
  $day15 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +14 days");
  $day16 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +15 days");
  $day17 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +16 days");
  $day18 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +17 days");
  $day19 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +18 days");
  $day20 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +19 days");
  $day21 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +20 days");
  $day22 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +21 days");
  $day23 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +22 days");
  $day24 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +23 days");
  $day25 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +24 days");
  $day26 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +25 days");
  $day27 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +26 days");
  $day28 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +27 days");
  $day29 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +28 days");
  $day30 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +29 days");
  $day31 = strtotime(date("Y-m-d", strtotime($start_date_raw)) . " +30 days");
  
  global $user;
  $uid = $user->uid;
  $account = user_load($uid);
  
  $author = $node->uid;
  
  $profile = profile2_load_by_user($account);
  
  $fname_field = field_get_items('profile2', $profile['01_main'], 'field_user_first_name');
  $lname_field = field_get_items('profile2', $profile['01_main'], 'field_user_last_name');
  
  $first_name = $fname_field[0]['value'];
  $last_name = $lname_field[0]['value'];
  $full_name = $first_name . ' ' . $last_name;
  
  $first_array = drupal_render(field_view_value('profile2', $profile['01_main'], 'field_user_first_name', $item, $display = 'default'));
  
  $first_array = render($first_name);

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

<p>$start_date_raw: <?php echo($start_date_raw)?></p>
<p>User ID: <?php echo($uid)?></p>
<p>Author: <?php echo($author)?></p>
<p>Empl Name: <?php echo($full_name)?></p>
<!-- <p>Empl id: @todo - empl id</p> -->

<!-- <p>Profile:<br><pre><?php print_r ($profile); ?></pre></p> -->

<!-- <p>User Object:<br><pre><?php print_r($account); ?></pre></p> -->

<!-- <p>Field Object:<br><pre><?php print_r($first_array); ?></pre></p> -->


</div>



<p><?php print drupal_render($form['title']); ?></p>

<div id="employee-info">
  <p><?php print drupal_render($form['field_employee_name']); ?></p>
  <p><?php print drupal_render($form['field_employee_id']); ?></p>
</div>

<?php print drupal_render($form['field_pay_period_ref']); ?>

<div id="errorMessages" style="display: none;">
  <h2>Please correct the following errors before submitting:</h2>
</div>


<table summary="A spreadsheet-like form containing hours by category per day for this seven day period." id="week1">
  <caption>Week One</caption>
  <thead>
    <tr>
      <td></td>
      <th abbr="<?php print date($format_day, $day1)?>, <?php print date($format_medium, $day1)?>" id="day01"><?php print date($format_day, $day1)?> <br /><?php print date($format_long, $day1)?></th>
      <th abbr="<?php print date($format_day, $day2)?>, <?php print date($format_medium, $day2)?>" id="day02"><?php print date($format_day, $day2)?> <br /><?php print date($format_long, $day2)?></th>
      <th abbr="<?php print date($format_day, $day3)?>, <?php print date($format_medium, $day3)?>" id="day03"><?php print date($format_day, $day3)?> <br /><?php print date($format_long, $day3)?></th>
      <th abbr="<?php print date($format_day, $day4)?>, <?php print date($format_medium, $day4)?>" id="day04"><?php print date($format_day, $day4)?> <br /><?php print date($format_long, $day4)?></th>
      <th abbr="<?php print date($format_day, $day5)?>, <?php print date($format_medium, $day5)?>" id="day05"><?php print date($format_day, $day5)?> <br /><?php print date($format_long, $day5)?></th>
      <th abbr="<?php print date($format_day, $day6)?>, <?php print date($format_medium, $day6)?>" id="day06"><?php print date($format_day, $day6)?> <br /><?php print date($format_long, $day6)?></th>
      <th abbr="<?php print date($format_day, $day7)?>, <?php print date($format_medium, $day7)?>" id="day07"><?php print date($format_day, $day7)?> <br /><?php print date($format_long, $day7)?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th abbr="regular" id="regular1">Regular Hours</th>
      <td><?php print drupal_render($form['field_r01']); ?></td>
      <td><?php print drupal_render($form['field_r02']); ?></td>
      <td><?php print drupal_render($form['field_r03']); ?></td>
      <td><?php print drupal_render($form['field_r04']); ?></td>
      <td><?php print drupal_render($form['field_r05']); ?></td>
      <td><?php print drupal_render($form['field_r06']); ?></td>
      <td><?php print drupal_render($form['field_r07']); ?></td>
    </tr>
    <tr>
      <th abbr="annual" id="annual1">Annual Leave</th>
      <td><?php print drupal_render($form['field_a01']); ?></td>
      <td><?php print drupal_render($form['field_a02']); ?></td>
      <td><?php print drupal_render($form['field_a03']); ?></td>
      <td><?php print drupal_render($form['field_a04']); ?></td>
      <td><?php print drupal_render($form['field_a05']); ?></td>
      <td><?php print drupal_render($form['field_a06']); ?></td>
      <td><?php print drupal_render($form['field_a07']); ?></td>
    </tr>
    <tr>
      <th abbr="sick" id="sick1">Sick Leave</th>
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
      <th id="total1">Total</th>
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

<table summary="A spreadsheet-like form containing hours by category per day for this seven day period." id="week2">
  <caption>Week Two</caption>
  <thead>
    <tr>
      <td></td>
      <th abbr="<?php print date($format_day, $day8)?>, <?php print date($format_medium, $day8)?>" id="day08"><?php print date($format_day, $day8)?> <br /><?php print date($format_long, $day8) ?></th>
      <th abbr="<?php print date($format_day, $day9)?>, <?php print date($format_medium, $day9)?>" id="day09"><?php print date($format_day, $day9)?> <br /><?php print date($format_long, $day9) ?></th>
      <th abbr="<?php print date($format_day, $day10)?>, <?php print date($format_medium, $day10)?>" id="day10"><?php print date($format_day, $day10)?> <br /><?php print date($format_long, $day10) ?></th>
      <th abbr="<?php print date($format_day, $day11)?>, <?php print date($format_medium, $day11)?>" id="day11"><?php print date($format_day, $day11)?> <br /><?php print date($format_long, $day11) ?></th>
      <th abbr="<?php print date($format_day, $day12)?>, <?php print date($format_medium, $day12)?>" id="day12"><?php print date($format_day, $day12)?> <br /><?php print date($format_long, $day12) ?></th>
      <th abbr="<?php print date($format_day, $day13)?>, <?php print date($format_medium, $day13)?>" id="day13"><?php print date($format_day, $day13)?> <br /><?php print date($format_long, $day13) ?></th>
      <th abbr="<?php print date($format_day, $day14)?>, <?php print date($format_medium, $day14)?>" id="day14"><?php print date($format_day, $day14)?> <br /><?php print date($format_long, $day14) ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th abbr="regular" id="regular2">Regular Hours</th>
      <td><?php print drupal_render($form['field_r08']); ?></td>
      <td><?php print drupal_render($form['field_r09']); ?></td>
      <td><?php print drupal_render($form['field_r10']); ?></td>
      <td><?php print drupal_render($form['field_r11']); ?></td>
      <td><?php print drupal_render($form['field_r12']); ?></td>
      <td><?php print drupal_render($form['field_r13']); ?></td>
      <td><?php print drupal_render($form['field_r14']); ?></td>
    </tr>
    <tr>
      <th abbr="annual" id="annual2">Annual Leave</th>
      <td><?php print drupal_render($form['field_a08']); ?></td>
      <td><?php print drupal_render($form['field_a09']); ?></td>
      <td><?php print drupal_render($form['field_a10']); ?></td>
      <td><?php print drupal_render($form['field_a11']); ?></td>
      <td><?php print drupal_render($form['field_a12']); ?></td>
      <td><?php print drupal_render($form['field_a13']); ?></td>
      <td><?php print drupal_render($form['field_a14']); ?></td>
    </tr>
    <tr>
      <th abbr="sick" id="sick2">Sick Leave</th>
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
      <th id="total2">Total</th>
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