<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
     <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">Resultados de la busqueda</h2>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Inicio</a></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <?php get_template_part( 'templates/posts', 'posts' ); ?>
    </div>
<?php get_footer(); ?>