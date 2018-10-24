<?php
include 'header.php';
session_start();
 ?>
    <div class="container">
        <div class="right-area">
            <nav class="movie">
                <ul class="group">
                            <li class="active">
                                <a id="allMovies">All Movies</a>
                            </li>
                            <li>
                                <a id="recentlyReleased" href="recent.php">Recently Released</a>
                            </li>
                            <li>
                                <a id="comingSoon" href="cs.php">Coming Soon</a>
                            </li>
                            <li>
                                <a id="highRated" href="hr.php">Highest Rated</a>
                            </li>
                </ul>
                <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">

      $(document).on('click', 'ul li', function(){
          $(this).addClass('active').siblings().removeClass('active')
      })
  </script>
            </nav>
        </div>

        <div class="left-area">
                    <select name="langPrefer" id="lang_prefer">
                    <option selected disabled>Genre</option>
                    <option value="allGenre">All Genre</option>
                    <option value="drama">Drama</option>
                    <option value="comedy">Comedy</option>
                    <option value="thrill">Thriller</option>
                    <option value="horror">Horror</option>
            </select>
                </div>
            </div>
        </div>
        <article style="padding-bottom:40px;">
            <div class="container">
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/secret-superstar.jpg" alt="secret-superstar">
                    </div>
                    <div class="img-desc">
                        <p>Secret Superstar</p>
                        <a href="sswatch.php">Watch Now</a>
                    </div>
                </div>
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/freaky-ali.jpg" alt="freaky-ali">
                    </div>
                    <div class="img-desc">
                        <p>Freaky Ali</p>
                        <a href="frwatch.php">Watch Now</a>
                    </div>
                </div>
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/raid.jpg" alt="raid">
                    </div>
                    <div class="img-desc">
                        <p>Raid</p>
                        <a href="raid.php">Watch Now</a>
                    </div>
                </div>
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/hichki.jpg" alt="hichki">
                    </div>
                    <div class="img-desc">
                        <p>Hichki</p>
                        <a href="hichki.php">Watch Now</a>
                    </div>
                </div>
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/toilet.jpg" alt="toilet">
                    </div>
                    <div class="img-desc">
                        <p>Toilet Ek Prem Katha</p>
                        <a href="toilet.php">Watch Now</a>
                    </div>
                </div>
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/lucknow-central.jpg" alt="lucknow-central">
                    </div>
                    <div class="img-desc">
                        <p>Lucknow Central</p>
                        <a href="lcwatch.php">Watch Now</a>
                    </div>
                </div>

        </article>
        </div>
</body>

</html>
