<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $berita->judul;
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<main id="content">
  <div class="container">
    <!--row-->
    <div class="row">
      <!--col-lg-->

      <div class="col-lg-9">
        <div class="bs-blog-post">
          <div class="bs-header">
            <div class="bs-blog-category">
              <a href="https://demos.themeansar.com/blogarise/standard/category/lifestyle/"
                style="background-color:#49dfd4">
                Lifestyle </a>
              <a href="https://demos.themeansar.com/blogarise/standard/category/travel/"
                style="background-color:#7171e2">
                Travel </a>
            </div>
            <h1 class="title"> <a
                href="https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/"
                title="Permalink to: Sea Bearing From In Thing Fruit Spirit">
              <?= Html::encode($berita->judul) ?></a>
            </h1>
            <div class="bs-blog-meta mb-0">
              <span class="bs-author"><a class="auth"
                  href="https://demos.themeansar.com/blogarise/standard/author/pro_blogarise/"> <img alt=''
                    src='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=150&amp;d=mm&amp;r=g'
                    srcset='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=300&#038;d=mm&#038;r=g 2x'
                    class='avatar avatar-150 photo' height='150' width='150' loading='lazy' decoding='async' /> By
                  Admin</a></span>
              <span class="bs-blog-date">
                Jul 18, 2022 </span>
              <span class="blogarise-tags tag-links">
                <a href="https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/"><a
                    href="https://demos.themeansar.com/blogarise/standard/tag/business/" rel="tag">Business</a>, <a
                    href="https://demos.themeansar.com/blogarise/standard/tag/world/" rel="tag">world</a></a>
              </span>
            </div>
          </div>
          <a class="bs-blog-thumb"
            href="https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/"><img
              width="1200" height="600"
              src="<?= Url::to('@backend/'.$berita->gambar); ?>"
              class="img-fluid wp-post-image" alt="" decoding="async"
              srcset="<?= Url::to('@backend/'.$berita->gambar); ?> 1200w, <?= Url::to('@backend/'.$berita->gambar); ?> 300w, <?= Url::to('@backend/'.$berita->gambar); ?> 1024w, <?= Url::to('@backend/'.$berita->gambar); ?> 768w"
              sizes="(max-width: 1200px) 100vw, 1200px" /></a>
          <article class="small single">

            <?= Html::decode($berita->isi) ?>


            <script>
              function pinIt() {
                var e = document.createElement('script');
                e.setAttribute('type', 'text/javascript');
                e.setAttribute('charset', 'UTF-8');
                e.setAttribute('src', 'https://assets.pinterest.com/js/pinmarklet.js?r=' + Math.random() * 99999999);
                document.body.appendChild(e);
              }
            </script>
            <div class="post-share">
              <div class="post-share-icons cf">
                <a class="facebook"
                  href="https://www.facebook.com/sharer.php?u=https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/"
                  class="link " target="_blank">
                  <i class="fab fa-facebook"></i></a>

                <a class="twitter"
                  href="http://twitter.com/share?url=https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/&amp;text=Sea%20Bearing%20From%20In%20Thing%20Fruit%20Spirit"
                  class="link " target="_blank">
                  <i class="fab fa-twitter"></i></a>

                <a class="envelope"
                  href="mailto:?subject=Sea%20Bearing%20From%20In%20Thing%20Fruit%20Spirit&#038;body=https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/"
                  class="link " target="_blank">
                  <i class="fas fa-envelope-open"></i></a>

                <a class="linkedin"
                  href="https://www.linkedin.com/sharing/share-offsite/?url=https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/&amp;title=Sea%20Bearing%20From%20In%20Thing%20Fruit%20Spirit"
                  class="link " target="_blank">
                  <i class="fab fa-linkedin"></i></a>

                <a href="javascript:pinIt();" class="pinterest"><i class="fab fa-pinterest"></i></a>

                <a class="telegram"
                  href="https://t.me/share/url?url=https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/&amp;title=Sea%20Bearing%20From%20In%20Thing%20Fruit%20Spirit"
                  target="_blank">
                  <i class="fab fa-telegram"></i>
                </a>

                <a class="whatsapp"
                  href="https://api.whatsapp.com/send?text&amp;url=https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/&amp;title=Sea%20Bearing%20From%20In%20Thing%20Fruit%20Spirit"
                  target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>

                <a class="reddit"
                  href="https://www.reddit.com/submit?url=https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/&amp;title=Sea%20Bearing%20From%20In%20Thing%20Fruit%20Spirit"
                  target="_blank">
                  <i class="fab fa-reddit"></i>
                </a>

              </div>
            </div>


            <nav class="navigation post-navigation" aria-label="Posts">
              <h2 class="screen-reader-text">Post navigation</h2>
              <div class="nav-links">
                <div class="nav-previous"><a
                    href="https://demos.themeansar.com/blogarise/standard/seasons-in-youll-them-meat-earth-for-hath/"
                    rel="prev">
                    <div class="fa fa-angle-double-left"></div><span></span> seasons in you&#8217;ll them meat
                    earth for hath
                  </a></div>
                <div class="nav-next"><a
                    href="https://demos.themeansar.com/blogarise/standard/blessed-fowl-greater-kind-fill-him-bring/"
                    rel="next"> blessed fowl greater kind fill him bring <div class="fa fa-angle-double-right"></div>
                    <span></span></a></div>
              </div>
            </nav>
          </article>
        </div>

        <div class="bs-info-author-block py-4 px-3 mb-4 flex-column justify-content-center text-center">
          <a class="bs-author-pic mb-3"
            href="https://demos.themeansar.com/blogarise/standard/author/pro_blogarise/"><img alt=''
              src='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=150&amp;d=mm&amp;r=g'
              srcset='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=300&#038;d=mm&#038;r=g 2x'
              class='avatar avatar-150 photo' height='150' width='150' loading='lazy' decoding='async' /></a>
          <div class="flex-grow-1">
            <h4 class="title">By <a
                href="https://demos.themeansar.com/blogarise/standard/author/pro_blogarise/">Admin</a></h4>
            <p></p>
          </div>
        </div>
        <div class="py-4 px-3 mb-4 bs-card-box">
          <!--Start bs-realated-slider -->
          <div class="bs-widget-title  mb-3">
            <!-- bs-sec-title -->
            <h4 class="title">Related Post</h4>
          </div>
          <!-- // bs-sec-title -->
          <div class="row">
            <!-- featured_post -->
            <!-- blog -->
            <div class="col-md-4">
              <div class="bs-blog-post three md back-img bshre mb-md-0"
                style="background-image: url('https://demos.themeansar.com/blogarise/standard/wp-content/uploads/2022/10/blog3.webp');">
                <a class="link-div"
                  href="https://demos.themeansar.com/blogarise/standard/where-to-chill-with-an-integrated-trainer-on-running/"></a>
                <div class="inner">
                  <div class="bs-blog-category">
                    <a href="https://demos.themeansar.com/blogarise/standard/category/lifestyle/"
                      style="background-color:#49dfd4">
                      Lifestyle </a>
                    <a href="https://demos.themeansar.com/blogarise/standard/category/travel/"
                      style="background-color:#7171e2">
                      Travel </a>
                  </div>

                  <h4 class="title sm mb-0"> <a
                      href="https://demos.themeansar.com/blogarise/standard/where-to-chill-with-an-integrated-trainer-on-running/"
                      title="Permalink to: Where to chill with an integrated trainer on running">
                      Where to chill with an integrated trainer on running</a> </h4>
                  <div class="bs-blog-meta">
                    <span class="bs-author"> <a class="auth"
                        href="https://demos.themeansar.com/blogarise/standard/author/pro_blogarise/"> <img alt=''
                          src='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=150&amp;d=mm&amp;r=g'
                          srcset='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=300&#038;d=mm&#038;r=g 2x'
                          class='avatar avatar-150 photo' height='150' width='150' loading='lazy'
                          decoding='async' />Admin </a>
                    </span>
                    <span class="bs-blog-date"> <a href="https://demos.themeansar.com/blogarise/standard/2022/10/">
                        Oct 5, 2022
                      </a></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- blog -->
            <!-- blog -->
            <div class="col-md-4">
              <div class="bs-blog-post three md back-img bshre mb-md-0"
                style="background-image: url('https://demos.themeansar.com/blogarise/standard/wp-content/uploads/2022/10/blog2.webp');">
                <a class="link-div"
                  href="https://demos.themeansar.com/blogarise/standard/harbor-amid-a-slowed-down-in-singer/"></a>
                <div class="inner">
                  <div class="bs-blog-category">
                    <a href="https://demos.themeansar.com/blogarise/standard/category/fashion/"
                      style="background-color:#f9b439">
                      Fashion </a>
                    <a href="https://demos.themeansar.com/blogarise/standard/category/lifestyle/"
                      style="background-color:#49dfd4">
                      Lifestyle </a>
                    <a href="https://demos.themeansar.com/blogarise/standard/category/travel/"
                      style="background-color:#7171e2">
                      Travel </a>
                  </div>

                  <h4 class="title sm mb-0"> <a
                      href="https://demos.themeansar.com/blogarise/standard/harbor-amid-a-slowed-down-in-singer/"
                      title="Permalink to: Harbor amid a Slowed down in singer">
                      Harbor amid a Slowed down in singer</a> </h4>
                  <div class="bs-blog-meta">
                    <span class="bs-author"> <a class="auth"
                        href="https://demos.themeansar.com/blogarise/standard/author/pro_blogarise/"> <img alt=''
                          src='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=150&amp;d=mm&amp;r=g'
                          srcset='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=300&#038;d=mm&#038;r=g 2x'
                          class='avatar avatar-150 photo' height='150' width='150' loading='lazy'
                          decoding='async' />Admin </a>
                    </span>
                    <span class="bs-blog-date"> <a href="https://demos.themeansar.com/blogarise/standard/2022/09/">
                        Sep 18, 2022
                      </a></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- blog -->
            <!-- blog -->
            <div class="col-md-4">
              <div class="bs-blog-post three md back-img bshre mb-md-0"
                style="background-image: url('https://demos.themeansar.com/blogarise/standard/wp-content/uploads/2022/10/blog1.webp');">
                <a class="link-div"
                  href="https://demos.themeansar.com/blogarise/standard/blessed-fowl-greater-kind-fill-him-bring/"></a>
                <div class="inner">
                  <div class="bs-blog-category">
                    <a href="https://demos.themeansar.com/blogarise/standard/category/travel/"
                      style="background-color:#7171e2">
                      Travel </a>
                  </div>

                  <h4 class="title sm mb-0"> <a
                      href="https://demos.themeansar.com/blogarise/standard/blessed-fowl-greater-kind-fill-him-bring/"
                      title="Permalink to: blessed fowl greater kind fill him bring">
                      blessed fowl greater kind fill him bring</a> </h4>
                  <div class="bs-blog-meta">
                    <span class="bs-author"> <a class="auth"
                        href="https://demos.themeansar.com/blogarise/standard/author/pro_blogarise/"> <img alt=''
                          src='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=150&amp;d=mm&amp;r=g'
                          srcset='https://secure.gravatar.com/avatar/b6990bcfbbf51daa682cdf66bc6d0abb?s=300&#038;d=mm&#038;r=g 2x'
                          class='avatar avatar-150 photo' height='150' width='150' loading='lazy'
                          decoding='async' />Admin </a>
                    </span>
                    <span class="bs-blog-date"> <a href="https://demos.themeansar.com/blogarise/standard/2022/08/">
                        Aug 18, 2022
                      </a></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- blog -->
          </div>
        </div>

        <!--End bs-realated-slider -->
        <div id="comments" class="comments-area bs-card-box p-4">
          <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                  id="cancel-comment-reply-link"
                  href="https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/#respond"
                  style="display:none;">Cancel reply</a></small></h3>
            <form action="https://demos.themeansar.com/blogarise/standard/wp-comments-post.php" method="post"
              id="commentform" class="comment-form" novalidate>
              <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> <span
                  class="required-field-message">Required fields are marked <span class="required">*</span></span></p>
              <p class="comment-form-comment"><label for="comment">Comment <span class="required">*</span></label>
                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea></p>
              <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input
                  id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name"
                  required /></p>
              <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input
                  id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes"
                  autocomplete="email" required /></p>
              <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url"
                  value="" size="30" maxlength="200" autocomplete="url" /></p>
              <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                  name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label
                  for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I
                  comment.</label></p>
              <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                  value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='72' id='comment_post_ID' />
                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
              </p>
            </form>
          </div><!-- #respond -->
        </div><!-- #comments -->
      </div>
      <!--sidebar-->
      <!--col-lg-3-->
      <aside class="col-lg-3">

        <div id="sidebar-right" class="bs-sidebar is_sticky ">
          <div id="block-2" class="bs-widget widget_block widget_search">
            <form role="search" method="get" action="https://demos.themeansar.com/blogarise/standard/"
              class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label
                for="wp-block-search__input-1" class="wp-block-search__label">Search</label>
              <div class="wp-block-search__inside-wrapper "><input type="search" id="wp-block-search__input-1"
                  class="wp-block-search__input" name="s" value="" placeholder="" required /><button type="submit"
                  class="wp-block-search__button wp-element-button">Search</button></div>
            </form>
          </div>
          <div id="block-3" class="bs-widget widget_block">
            <div class="wp-block-group is-layout-flow">
              <div class="wp-block-group__inner-container">
                <h2 class="wp-block-heading">Recent Posts</h2>
                <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                  <li><a class="wp-block-latest-posts__post-title"
                      href="https://demos.themeansar.com/blogarise/standard/where-to-chill-with-an-integrated-trainer-on-running/">Where
                      to chill with an integrated trainer on running</a></li>
                  <li><a class="wp-block-latest-posts__post-title"
                      href="https://demos.themeansar.com/blogarise/standard/harbor-amid-a-slowed-down-in-singer/">Harbor
                      amid a Slowed down in singer</a></li>
                  <li><a class="wp-block-latest-posts__post-title"
                      href="https://demos.themeansar.com/blogarise/standard/blessed-fowl-greater-kind-fill-him-bring/">blessed
                      fowl greater kind fill him bring</a></li>
                  <li><a class="wp-block-latest-posts__post-title"
                      href="https://demos.themeansar.com/blogarise/standard/sea-bearing-from-in-thing-fruit-spirit/">Sea
                      Bearing From In Thing Fruit Spirit</a></li>
                  <li><a class="wp-block-latest-posts__post-title"
                      href="https://demos.themeansar.com/blogarise/standard/seasons-in-youll-them-meat-earth-for-hath/">seasons
                      in you&#8217;ll them meat earth for hath</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="block-4" class="bs-widget widget_block">
            <div class="wp-block-group is-layout-flow">
              <div class="wp-block-group__inner-container">
                <h2 class="wp-block-heading">Recent Comments</h2>
                <div class="no-comments wp-block-latest-comments">No comments to show.</div>
              </div>
            </div>
          </div>
          <div id="block-5" class="bs-widget widget_block">
            <div class="wp-block-group is-layout-flow">
              <div class="wp-block-group__inner-container">
                <h2 class="wp-block-heading">Archives</h2>
                <ul class="wp-block-archives-list wp-block-archives">
                  <li><a href='https://demos.themeansar.com/blogarise/standard/2022/10/'>October 2022</a></li>
                  <li><a href='https://demos.themeansar.com/blogarise/standard/2022/09/'>September 2022</a></li>
                  <li><a href='https://demos.themeansar.com/blogarise/standard/2022/08/'>August 2022</a></li>
                  <li><a href='https://demos.themeansar.com/blogarise/standard/2022/07/'>July 2022</a></li>
                  <li><a href='https://demos.themeansar.com/blogarise/standard/2021/01/'>January 2021</a></li>
                  <li><a href='https://demos.themeansar.com/blogarise/standard/2020/02/'>February 2020</a></li>
                  <li><a href='https://demos.themeansar.com/blogarise/standard/2020/01/'>January 2020</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="block-6" class="bs-widget widget_block">
            <div class="wp-block-group is-layout-flow">
              <div class="wp-block-group__inner-container">
                <h2 class="wp-block-heading">Categories</h2>
                <ul class="wp-block-categories-list wp-block-categories">
                  <li class="cat-item cat-item-2"><a
                      href="https://demos.themeansar.com/blogarise/standard/category/fashion/">Fashion</a>
                  </li>
                  <li class="cat-item cat-item-3"><a
                      href="https://demos.themeansar.com/blogarise/standard/category/food/">Food</a>
                  </li>
                  <li class="cat-item cat-item-4"><a
                      href="https://demos.themeansar.com/blogarise/standard/category/lifestyle/">Lifestyle</a>
                  </li>
                  <li class="cat-item cat-item-5"><a
                      href="https://demos.themeansar.com/blogarise/standard/category/travel/">Travel</a>
                  </li>
                  <li class="cat-item cat-item-1"><a
                      href="https://demos.themeansar.com/blogarise/standard/category/uncategorized/">Uncategorized</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <!--/col-lg-3-->
      <!--/sidebar-->

    </div>
    <!--/row-->
  </div>
  <!--/container-->
</main>