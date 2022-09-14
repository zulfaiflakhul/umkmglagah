<!-- Masthead-->
        <header class="masthead">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center align-self-center">
                    <div class="">
                        <h1>UMKM </span> Desa Glagah</h2>
                        <p>
                            UMKM Desa Glagah merupakan sebuah komunitas dengan tujuan sebagai wadah berkumpulnya para pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) Desa Glagah. UMKM ini hadir dengan memberikan dukungan penuh kepada pelaku UMKM di Desa Glagah, Jatinom, Klaten, Jawa Tengah untuk maju ke arah digital.
                        </p>
                        <a type="button" class="btn btn-primary" href="<?= site_url()?>/home#about">
                            NEXT
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center align-self-center">
                    <div class="">
                    <img src="<?php echo base_url()?>assets/img/bg-umkm-1.png" width="300" padding="10px" alt=""/>
                    </div>
                </div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="produk">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kategori</h2>
                    <h3 class="section-subheading text-muted">Kategori Produk UMKM Desa Glagah</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark js-scroll-trigger">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-box fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Produk Barang</h4></a>
                        <p class="text-muted">Produk yang dihasilkan di Desa Glagah berupa barang khas maupun kerajinan yang dihasilakn atau dibuat oleh pelaku UMKM di desa setempat.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Fashion</h4></a>
                        <p class="text-muted">Pakaian maupun aksesoris yang diproduksi atau dijual oleh masyarakat Desa Glagah. Selain itu, juga menyediakan jasa yang menawarkan mengenai fashion atau pakaian.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Makanan</h4></a>
                        <p class="text-muted">Memproduksi atau menjual olahan makanan khas Desa Glagah maupun bahan makanan yang diproduksi secara mandiri maupun berkelompok.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= site_url()?>/home#kategori" class="text-dark">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Properti</h4></a>
                        <p class="text-muted">Menyediakan terkait properti atau bahan bangunan yang diproduksi atau dihasilakn serta berada di Desa Glagah.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- kategori Grid-->
        <section class="page-section bg-light" id="kategori">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Produk UMKM Desa Glagah</h2>
                    <h3 class="section-subheading text-muted">Produk UMKM Unggul dan Berkualitas</h3>
                </div>
                <div class="row">
                    <?php 
                    foreach ($join as $row) { ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="kategori-item">
                            <a class="kategori-link" href="<?php echo site_url().'/home/get_detail/'.$row->produk_id;?>#detail">
                                <div class="kategori-hover">
                                    <div class="kategori-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->produk_gambar;?>" alt="" />
                            </a>
                            <div class="kategori-caption">
                                <div class="kategori-caption-heading"><?php echo $row->produk_judul;?></div>
                                <div class="small section-subheading text-muted"><?php echo $row->produk_kategori_nama;?></div>
                                <div class="kategori-caption-subheading text-muted">RP. <?php echo $row->produk_harga;?></div>
                            </div>
                            <!-- kategori-caption-subheading text-muted -->
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>
        </section>