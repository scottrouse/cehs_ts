<?php
/**
 * @file
 * Zen theme's implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   - view-mode-[mode]: The view mode, e.g. 'full', 'teaser'...
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content. Currently broken; see http://drupal.org/node/823380
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="content"<?php print $content_attributes; ?>>
  
    <fieldset>
      <?php print render($content['field_employee_name']) ?>
      <?php print render($content['field_employee_id']) ?>
      <?php print render($content['field_pay_period_ref']) ?>
    </fieldset>
    
    <fieldset>
    	<legend>Hours</legend>
    
    <?php
      
      $start_date_node = $node->field_pay_period_ref[0]['entity']->field_period_dates['und'][0]['value'];
      
      $pay_period_start3 = field_get_items('node', $node, 'field_period_dates');
      
      /* $start_date_raw = $pay_period_start3['0']['value']; */
      
      /* $start_date_raw $start_date_node; */
      $start_date_raw = '2012-10-25 00:00:00';
      
      /* $start_date = strtotime($pay_period_start3['0']['value']); */
      $start_date = strtotime($start_date_raw);
      

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
      <?php if ($content['field_grant_02_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_02_ref']); ?></td>
          <td><?php print render($content['field_grant_02_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_03_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_03_ref']); ?></td>
          <td><?php print render($content['field_grant_03_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_04_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_04_ref']); ?></td>
          <td><?php print render($content['field_grant_04_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_05_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_05_ref']); ?></td>
          <td><?php print render($content['field_grant_05_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_06_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_06_ref']); ?></td>
          <td><?php print render($content['field_grant_06_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_07_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_07_ref']); ?></td>
          <td><?php print render($content['field_grant_07_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_08_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_08_ref']); ?></td>
          <td><?php print render($content['field_grant_08_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_09_ref']): ?>
        <tr>
          <td><?php print render($content['field_grant_09_ref']); ?></td>
          <td><?php print render($content['field_grant_09_perc']); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($content['field_grant_10_ref']): ?>
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
  
  
      <fieldset>
      	<legend>Approvals</legend>
      	
      <?php print render($content['field_ts_status']) ?>	
      <?php print render($content['field_empl_approve_date']) ?>
      <?php print render($content['field_sup_approve_date']) ?>
      <?php print render($content['field_admin_approve_date']) ?>
      <?php print render($content['field_admin2_approve_date']) ?>
      </fieldset>
  
  </div>


  <?php print render($content['links']); ?>

</div><!-- /.node -->
