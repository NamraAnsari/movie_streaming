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
                            <li>
                                <a id="recentlyReleased" href="recent.php">Recently Released</a>
                            </li>
                            <li class="active">
                                <a id="comingSoon">Coming Soon</a>
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
        <article style="padding-bottom: 40px;">
            <div class="container">
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/satyameva-jayate.jpg" alt="satyameva-jayate">
                    </div>
                    <div class="img-desc">
                        <p>Satyameva Jayate</p>
                        <a href="sswatch.php">Watch Trailer</a>
                    </div>
                </div>
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/sui-dhaga.jpg" alt="sui-dhaga">
                    </div>
                    <div class="img-desc">
                        <p>Sui Dhaga</p>
                        <a href="frwatch.php">Watch Trailer</a>
                    </div>
                </div>
                 <div class="movie-select">
                     <div class="img-content">
                        <img src="images/stree.jpeg" alt="stree">
                     </div>
                    <div class="img-desc">
                        <p>Stree</p>
                        <a href="raid.php">Watch Trailer</a>
                    </div>
                </div>
                <div class="movie-select">
                    <div class="img-content">
                        <img src="images/batti-gul-meter-chalu.jpg" alt="batti-gul-meter-chalu">
                    </div>
                    <div class="img-desc">
                        <p>Batti Gul Meter Chalu</p>
                        <a href="hichki.php">Watch Now</a>
                    </div>
                </div>

        </article>
        </div>
</body>

</html>
