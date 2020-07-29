<?php   
    include("header.php");
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-todas">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="breadcrumb-content">
                    <h2 class="title">Blog</h2>
                    <ul>
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li id="current-page">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- blog page begin -->
<div class="faq faq-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="searchBar">
                <form>
                    <input type="text" name="search_blog" id="search_blog" placeholder="Your search text">
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="blog-page">
    <div class="container">
        <div class="row">
            <!-- <div class="col-xl-4 col-lg-4 col-sm-6"> -->
                <div id="blog-result"></div>
            <!-- </div> -->
        </div>
    </div>
</div>
<!-- blog page end -->

<?php 
    include("footer.php")
?>