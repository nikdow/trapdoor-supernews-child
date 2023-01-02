<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Acme Themes
 * @subpackage SuperNews
 */
get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <section class="error-404 not-found">
      <?php
		$page_requested = get_page_by_path($_SERVER['REQUEST_URI']);
		$page_status = get_post_status( $page_requested->ID );
        $isPrivate = $page_status == 'private' && ! is_user_logged_in();
      ?>
        <header class="page-header">
          <h1 class="page-title"><?php esc_html_e( $isPrivate ? 'This page requires a member login' : 'That page can&rsquo;t be found.', 'supernews' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
          <p><?php esc_html_e( $isPrivate ? 'Please login at left to view this page, or search for another page below' : 'It looks like nothing was found at this location. Maybe try one of the links at left or a search?', 'supernews' ); ?></p>

          <?php get_search_form(); ?>


        </div><!-- .page-content -->
      </section><!-- .error-404 -->

    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar( 'secondary' ); ?>
  <?php get_sidebar(); ?>
<?php get_footer();