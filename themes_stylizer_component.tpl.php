<?php

/**
 * @file
 * Default theme implementation to display a page in the overlay.
 *
 * Available variables:
 * - $title: the (sanitized) title of the page.
 * - $page: The rendered page content.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_overlay()
 * @see template_process()
 */
?>

<div id="themes-stylizer-component" class="clearfix">
  <?php print theme('ctools_collapsible', array('handle' => t('Colorize'), 'content' => render(drupal_get_form('themes_stylizer_component_form')), 'collapsed' => TRUE)); ?>
</div>
<?php print $page; ?>
