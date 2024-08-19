</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-gray-900 py-12 bottom-2 " role="contentinfo">
  <?php do_action('tailpress_footer'); ?>

  <div class="container mx-auto text-center text-gray-100">
    &copy; <?php echo date_i18n('Y'); ?> - <a rel="noopener" target="_blank"
      href="https://www.proagetech.com">proagetech.com</a>
  </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>
