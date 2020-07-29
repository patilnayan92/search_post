<?php 
  include("includes/database.php");
  
  $output = '';
  if(isset($_POST["query"]))
  {
    $search = mysqli_real_escape_string($connection, $_POST["query"]);
    $query = "
      SELECT * FROM posts WHERE post_status='Publish' AND post_title LIKE '%".$search."%'
    ";
  }
  else
  {
    $query = "
      SELECT * FROM posts WHERE post_status='Publish' order by post_date DESC 
    ";
  }
  $result = mysqli_query($connection, $query);
  if(mysqli_num_rows($result) > 0)
  {
    while($prores = mysqli_fetch_array($result))
    {
      $sqlprocattitle ="SELECT * FROM categories WHERE cat_id='".$prores['post_category_id']."'";
      $projectcattitle =mysqli_query($connection,$sqlprocattitle);
      $projectcattitleres =mysqli_fetch_array($projectcattitle);
      
      $output .= '
        <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="single-blog">
        <div class="part-img">
            
            <img src="assets/img/blogimg/'.$prores['post_image'].'" alt="">
        </div>
        <div class="part-text">
            <ul class="statics-number">
                <li>
                    <a href="#">
                        <i class="far fa-comment"></i> '.$projectcattitleres['cat_title'].'
                    </a>
                </li>
                <li>
                    <a href="#"><i class="far fa-eye"></i> '.$prores['post_views'].' View</a>
                </li>
            </ul>
            <a href="blog/'.$prores['post_name'].'">
                <span class="title">'.$prores['post_title'].' </span>
            </a>
            '.$prores['post_content_exp'].'
            <div class="read-more-btn">
                <a href="blog/'.$prores['post_name'].'">READ MORE</a>
            </div>
        </div>
                </div>
            </div>
      ';
    }
    echo $output;
  } else {
    $output .='
      Data Not Found, Search with the Question
    ';
    // echo 'Data Not Found';
    echo $output;
  }

?>
