<?php get_header(); ?>

    <!-- PAGE TITLE Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">404 Error</h2>
                        <span class="sub-title">¡Enlace incorrecto o página incorrecta!</span>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!--  -->


    <!-- 404 Content -->
    <section class="dissapp-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center fix">
                    <h1 class="fourzerofour">404</h1>
                    <h2 class="error">Error</h2>
                    <h3 class="err-mess">¡No estamos encontrando lo que estás buscando!</h3>
                    <!-- Search Box -->
                    <div class="dissapp-search-box">
                        <label for="search">Intenta buscar aquí</label>
                        <div class="search-form fix">
                            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                                <input type="text" name="s" placeholder="Buscar">
                                <div class="input-submit">
                                    <input type="submit" value="Ir">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.End Of Search Box -->
                    <span class="gohome">o  <a href="<?php echo site_url(); ?>">Ir a Inicio</a></span>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of 404 Content -->

<?php get_footer(); ?>