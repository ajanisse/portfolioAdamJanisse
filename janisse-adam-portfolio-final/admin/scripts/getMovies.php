<?php
    
    //Open connection to our database
    include('connect.php');

	if(isset($_GET['filter'])){
		//echo "Yes";
		$filter = $_GET['filter'];
		$filterQuery = "SELECT m.movies_id, m.movies_cover, m.movies_title, m.movies_year
		FROM tbl_movies m, tbl_genre g, tbl_mov_genre mg
		WHERE m.movies_id = mg.movies_id AND g.genre_id = mg.genre_id
		AND g.genre_name = '{$filter}'";
		//echo $filterQuery;
		$getMovies = mysqli_query($link,$filterQuery);
	}else if(isset($_GET['id'])){
		$id = $_GET['id'];
		//echo $id;
		$querySingle = "SELECT * FROM tbl_movies WHERE movies_id={$id}";
		//echo $querySingle;
		$getMovies = mysqli_query($link,$querySingle);
	}else if(isset($_GET['srch'])){
		$srch = $_GET['srch'];
		//echo $srch;
		$querySrch = "SELECT movies_id, movies_title, movies_year, movies_cover FROM tbl_movies WHERE movies_title LIKE '$srch%' ORDER BY movies_title ASC";
		//echo $querySrch;
		$getMovies = mysqli_query($link, $querySrch);
	}else{
		$movieQuery = "SELECT movies_id, movies_title, movies_year, movies_cover FROM tbl_movies ORDER BY movies_title ASC";
		
		$getMovies = mysqli_query($link, $movieQuery);
		//echo $getMovies;
	}

    $grpResult = "";

echo "[";

    while ($movResult = mysqli_fetch_assoc($getMovies)) {
		//echo $movResult['movies_id'];
		$jsonResult = json_encode($movResult);
		$grpResult .=$jsonResult.",";
		
	}

echo substr($grpResult,0,-1);

echo "]";

    mysqli_close($link);

?>
