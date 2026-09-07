<?php

/** @var array $post */
?>
<p class="mb-5">
    <img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<div><?php echo $post['content']; ?></div>

<div class="tag-widget post-tag-container mb-5 mt-5">
    <div class="tagcloud">
        <a href="#" class="tag-cloud-link">Life</a>
        <a href="#" class="tag-cloud-link">Sport</a>
        <a href="#" class="tag-cloud-link">Tech</a>
        <a href="#" class="tag-cloud-link">Travel</a>
    </div>
</div>

<div class="about-author d-flex p-4 bg-light">
    <div class="bio mr-5">
        <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
    </div>
    <div class="desc">
        <h3><?php echo $post['author_id']; ?></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
    </div>
</div>


<div class="pt-5 mt-5">
    <h3 class="mb-5">3 Comments</h3>
    <ul class="comment-list">
        <li class="comment">
            <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            </div>
        </li>

        <li class="comment">
            <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            </div>
        </li>

        <li class="comment">
            <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            </div>
        </li>
    </ul>
    <!-- END comment-list -->

    <div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Leave a comment</h3>
        <form action="#" class="p-5 bg-light" method="post">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="postId" value="4" />
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
            </div>

        </form>
    </div>
</div>