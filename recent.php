<?php
include 'header.php';
 ?>
    <div class="container">
        <div class="right-area">
            <nav class="movie">
                <ul class="group">
                            <li>
                                <a id="allMovies" href="home.php">All Movies</a>
                            </li>
                            <li class="active">
                                <a id="recentlyReleased">Recently Released</a>
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

            </div>
        </article>

</body>

</html>
