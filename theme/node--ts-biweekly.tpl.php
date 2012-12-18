<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="content"<?php print $content_attributes; ?>>
  
    <fieldset class="ts-employee">
      <?php print render($content['field_employee_name']) ?>
      <?php print render($content['field_employee_id']) ?>
      <?php print render($content['field_pay_period_ref']) ?>
    </fieldset>
    
    <fieldset class="ts-hours">
    	<legend>Hours</legend>
    
    <?php
      // Set the date variables for table headers
      $pay_period_id = $node->field_pay_period_ref['und'][0]['target_id']; // Get the nid of the pay period
      $pay_period_node = node_load($pay_period_id); // Load the pay period entity
      $start_date_node = $pay_period_node->field_period_dates['und'][0]['value']; // Get the first date value from pay period node      
      $start_date = strtotime($start_date_node); // Set start date for display on this node

      $format_long = 'm/d/Y'; // PHP Date format for display in timesheet
      $format_medium = 'm/d'; // Month and Day. i.e. - "06/18"
      $format_day = 'l'; // Day of week. i.e.- "Wednesday"
      $day = '86400'; // Seconds in a day
      
      $day1 = $start_date;
      $day2 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +1 day");
      $day3 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +2 days");
      $day4 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +3 days");
      $day5 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +4 days");
      $day6 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +5 days");
      $day7 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +6 days");
      $day8 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +7 days");
      $day9 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +8 days");
      $day10 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +9 days");
      $day11 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +10 days");
      $day12 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +11 days");
      $day13 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +12 days");
      $day14 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +13 days");
      $day15 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +14 days");
      $day16 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +15 days");
      $day17 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +16 days");
      $day18 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +17 days");
      $day19 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +18 days");
      $day20 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +19 days");
      $day21 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +20 days");
      $day22 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +21 days");
      $day23 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +22 days");
      $day24 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +23 days");
      $day25 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +24 days");
      $day26 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +25 days");
      $day27 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +26 days");
      $day28 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +27 days");
      $day29 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +28 days");
      $day30 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +29 days");
      $day31 = strtotime(date("Y-m-d", strtotime($start_date_node)) . " +30 days");
    ?>
    
    <table summary="Hours by category per day for this seven day period." id="week1" class="timesheet-table">
    <caption>Week One</caption>
    <thead>
      <tr class="table-center">
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
        <td><?php print render($content['field_r01']); ?></td>
        <td><?php print render($content['field_r02']); ?></td>
        <td><?php print render($content['field_r03']); ?></td>
        <td><?php print render($content['field_r04']); ?></td>
        <td><?php print render($content['field_r05']); ?></td>
        <td><?php print render($content['field_r06']); ?></td>
        <td><?php print render($content['field_r07']); ?></td>
      </tr>
      <tr>
        <th abbr="annual" id="annual1">Annual Leave</th>
        <td><?php print render($content['field_a01']); ?></td>
        <td><?php print render($content['field_a02']); ?></td>
        <td><?php print render($content['field_a03']); ?></td>
        <td><?php print render($content['field_a04']); ?></td>
        <td><?php print render($content['field_a05']); ?></td>
        <td><?php print render($content['field_a06']); ?></td>
        <td><?php print render($content['field_a07']); ?></td>
      </tr>
      <tr>
        <th abbr="sick" id="sick1">Sick Leave</th>
        <td><?php print render($content['field_s01']); ?></td>
        <td><?php print render($content['field_s02']); ?></td>
        <td><?php print render($content['field_s03']); ?></td>
        <td><?php print render($content['field_s04']); ?></td>
        <td><?php print render($content['field_s05']); ?></td>
        <td><?php print render($content['field_s06']); ?></td>
        <td><?php print render($content['field_s07']); ?></td>
      </tr>
    <tbody>
    <tfoot>
      <tr>
        <th id="total1">Total</th>
        <td><?php print render($content['field_t01']); ?></td>
        <td><?php print render($content['field_t02']); ?></td>
        <td><?php print render($content['field_t03']); ?></td>
        <td><?php print render($content['field_t04']); ?></td>
        <td><?php print render($content['field_t05']); ?></td>
        <td><?php print render($content['field_t06']); ?></td>
        <td><?php print render($content['field_t07']); ?></td>
      </tr>
    </tfoot>
  </table>
  
  <table summary="Hours by category per day for this seven day period." id="week2" class="timesheet-table">
    <caption>Week Two</caption>
    <thead>
      <tr class="table-center">
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
        <td><?php print render($content['field_r08']); ?></td>
        <td><?php print render($content['field_r09']); ?></td>
        <td><?php print render($content['field_r10']); ?></td>
        <td><?php print render($content['field_r11']); ?></td>
        <td><?php print render($content['field_r12']); ?></td>
        <td><?php print render($content['field_r13']); ?></td>
        <td><?php print render($content['field_r14']); ?></td>
      </tr>
      <tr>
        <th abbr="annual" id="annual2">Annual Leave</th>
        <td><?php print render($content['field_a08']); ?></td>
        <td><?php print render($content['field_a09']); ?></td>
        <td><?php print render($content['field_a10']); ?></td>
        <td><?php print render($content['field_a11']); ?></td>
        <td><?php print render($content['field_a12']); ?></td>
        <td><?php print render($content['field_a13']); ?></td>
        <td><?php print render($content['field_a14']); ?></td>
      </tr>
      <tr>
        <th abbr="sick" id="sick2">Sick Leave</th>
        <td><?php print render($content['field_s08']); ?></td>
        <td><?php print render($content['field_s09']); ?></td>
        <td><?php print render($content['field_s10']); ?></td>
        <td><?php print render($content['field_s11']); ?></td>
        <td><?php print render($content['field_s12']); ?></td>
        <td><?php print render($content['field_s13']); ?></td>
        <td><?php print render($content['field_s14']); ?></td>
      </tr>
    <tbody>
    <tfoot>
      <tr>
        <th id="total2">Total</th>
        <td><?php print render($content['field_t08']); ?></td>
        <td><?php print render($content['field_t09']); ?></td>
        <td><?php print render($content['field_t10']); ?></td>
        <td><?php print render($content['field_t11']); ?></td>
        <td><?php print render($content['field_t12']); ?></td>
        <td><?php print render($content['field_t13']); ?></td>
        <td><?php print render($content['field_t14']); ?></td>
      </tr>
    </tfoot>
  </table>
  
  <table summary="@todo - put in summary" id="grant-table">
    <caption>Grants</caption>
    <thead>
      <tr class="table-center">
        <th>Grant</th>
        <th>Percentage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php print render($content['field_grant_01_ref']); ?></td>
        <td><?php print render($content['field_grant_01_perc']); ?></td>
      </tr>
      <?php if (isset($content['field_grant_02_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_02_ref']); ?></td>
          <td><?php print render($content['field_grant_02_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_03_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_03_ref']); ?></td>
          <td><?php print render($content['field_grant_03_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_04_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_04_ref']); ?></td>
          <td><?php print render($content['field_grant_04_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_05_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_05_ref']); ?></td>
          <td><?php print render($content['field_grant_05_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_06_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_06_ref']); ?></td>
          <td><?php print render($content['field_grant_06_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_07_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_07_ref']); ?></td>
          <td><?php print render($content['field_grant_07_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_08_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_08_ref']); ?></td>
          <td><?php print render($content['field_grant_08_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_09_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_09_ref']); ?></td>
          <td><?php print render($content['field_grant_09_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if (isset($content['field_grant_10_ref'])): ?>
        <tr>
          <td><?php print render($content['field_grant_10_ref']); ?></td>
          <td><?php print render($content['field_grant_10_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <tr>
        <th>Total</th>
        <td><?php print render($content['field_ts_grant_total']); ?></td>
      </tr>
    </tbody>
  </table>
  
  </fieldset>

  <fieldset class="ts-approvals">
  	<legend>Approvals</legend>
    <?php print render($content['field_ts_status']) ?>	
    <?php print render($content['field_empl_approve_date']) ?>
    <fieldset class="ts-supervisor">
      <legend>Supervisor</legend>
      <?php print render($content['field_sup_approve_date']) ?>
      <?php print render($content['field_supervisor_comments']) ?>
    </fieldset>
    <fieldset class="ts-admin1">
      <legend>First Admin</legend>
      <?php print render($content['field_admin_approve_date']) ?>
      <?php print render($content['field_admin1_comments']) ?>
    </fieldset>
    <fieldset class="ts-admin2">
      <legend>Final Admin</legend>
      <?php print render($content['field_admin2_approve_date']) ?>
      <?php print render($content['field_admin2_comments']) ?>
    </fieldset>
  </fieldset>
  </div>


  <?php print render($content['links']); ?>

</div><!-- /.node -->
