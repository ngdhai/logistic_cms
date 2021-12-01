<?php include THIS_TEMPLATE_DIR . "header.php"; ?>

<?php
$post = get_content_by_id(CONTENT_ID);
$picture = get_picture(CONTENT_ID);

if (!$picture) {
    $picture = '';
}

$itemData = content_data($post['id']);

?>

<div class="service-details-section">
    <div class="container">
        <div class="row">
            
            <!--  sidebar section start  -->
            <div class="col-xl-3 col-lg-3 ">
                <div class="sidebar">
                    <div class="category-sidebar">
                        <ul>
                            <li><a href="services.html">Air Freight</a></li>
                            <li><a href="services.html">Road Freight</a></li>
                            <li><a href="services.html">Ocean Freight</a></li>
                            <li><a href="services.html">Warehousing</a></li>
                            <li><a href="services.html">Storage</a></li>
                        </ul>
                    </div>
                    <div class="quote-sidebar">
                        <h3>REQUEST A QUOTE</h3>
                        <form action="#" class="quote-form">
                            <div class="form-element">
                                <input type="text" name="name" placeholder="Your name" />
                            </div>
                            <div class="form-element">
                                <input name="email" type="text" placeholder="Email" />
                            </div>
                            <div class="form-element">
                                <input name="phone" type="text" placeholder="Phone" />
                            </div>
                            <div class="form-element">
                                <button type="submit"><span>Submit</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 edit" rel="blog_inner" field="blog_inner-<?php print CONTENT_ID; ?>">
                <div class="service-details-conten" id="blog-content-<?php print CONTENT_ID; ?>">
                    <div class="img-wrapper">
                        <img src="<?php print $picture; ?>" alt="" />
                    </div>
                    <div class="service-details-desc">
                        <h2 class="title"><?php echo $post['title']; ?></h2>

                    </div>

                </div>
                <div class="article-content">
                    <?php echo $post['content']; ?>
                </div>
            </div>
            <!--  sidebar section end  -->
        </div>
    </div>
</div>

<?php include TEMPLATE_DIR . "footer.php"; ?>