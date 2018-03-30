<?php
session_start();
?>
<!DOCTYPE html>
	<html>
	<link rel="stylesheet" type="text/css" href="index.css"/>
	 <script type="text/javascript">    
function goto(){
myVar = document.getElementById('site').value;
window.open(myVar,"_blank");
}
function logOFF(){
    session_destroy();
    document.location.href="index.php";
}
</script>	
        <body>
                    <div id="news">
		<h1>Links</h1>		
                <select id="site">
                    <option select value="http://www.etf.ucg.ac.me">ETF-Novi</option>
                    <option value="http://borisvuk.github.io/borisvuk/">Me</option> 
                    <option value="http://www.softpedia.com">Softpedia</option>
                    <option value="http://www.phoronix.com">Phoronix</option>
                    <option value="http://www.distrowatch.com">DistroWatch</option>
                    <option value="http://www.codingames.com">CodingGames</option>
                    <option value="http://www.codefights.com">CodeFights</option>
                    <option value="http://fmovies.se">Fmovies</option>
                    <option value="http://9anime.to">9Anime</option>
                    <option value="http://trackerock.ru">Rus_torentGames</option>
                </select>
                <button onclick="goto()">GoToSite</button>
                    </div>
                    <div id="fun">
                <h2>Something_Dif</h2>
                
                    </div>
                    <br>
                    <button onclick="logOFF()" style="background-color:red">
                    Logout
                    </button>
		THATS ALL FOLKS FOR NOW :D
		<br>
		</body>
	</html>
