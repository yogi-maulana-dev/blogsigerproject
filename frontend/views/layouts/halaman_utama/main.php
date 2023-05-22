<?php
  if (Yii::$app->user->isGuest) {
      $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
  }
?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta
                  name="viewport"
                  content="width=device-width, initial-scale=1.0"
            />
            <link
                  rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
            />
            <link rel="stylesheet" href="" />
            <title>SigerProject</title>
      </head>
      <body>
            
            <nav>
                  <div class="menu-btn">
                        <i class="fa fa-bars"></i>
                  </div>
                  <div class="wrapper">
                        <div class="logo">
                              <a href="#">SigerProject.com</a>
                        </div>

                        <div class="menu tampil">
                              <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="berita.html">Berita</a></li>
                                    <li><a href="#kontak">Kontak</a></li>
                              </ul>
                        </div>
                  </div>
            </nav>

            <!-- Showcase -->
            <header class="showcase">
                  <h2>SigerProjects</h2>
                  <p>Pemesanan Aplikasi</p>
                  <a href="#" class="btn">Show Now</a>
            </header>
            <!-- Home Cards -->
            <section class="home-cards">
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul isi</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
                  <div>
                        <img src="gambar-1.png" alt="" />
                        <h3>Judul</h3>
                        <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Expedita earum dicta eaque ab
                        </p>
                        <a href="#">Link</a>
                  </div>
            </section>

            <!-- iklan -->
            <section class="iklan">
                  <div class="content">
                        <h2>Ini adalah iklannya</h2>
                        <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Eum officiis repellendus voluptates
                              reiciendis eos, cum consequuntur est quam a amet
                              quaerat nisi labore voluptatibus quia illum
                              perspiciatis et. Blanditiis, deleniti!
                        </p>
                        <a href="" class="btn">Link</a>
                  </div>
            </section>

            <!-- Footer -->

            <footer class="footer">
                  <div class="footer-inner">
                        <div>Siger Project 2022</div>
                  </div>
            </footer>
      </body>
      <script>
            document
                  .querySelector('.menu-btn')
                  .addEventListener('click', () =>
                        document
                              .querySelector('.menu')
                              .classList.toggle('tampil')
                  );
      </script>
</html>
