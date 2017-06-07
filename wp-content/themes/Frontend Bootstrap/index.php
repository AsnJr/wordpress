<?php require('header.php'); ?>
<main>
<?php require('aside.php'); ?>
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="http://i1.mirror.co.uk/incoming/article3425608.ece/ALTERNATES/s615b/Grim-Reaper.jpg" alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos esse ipsa labore numquam odio optio ut! Corporis, cupiditate delectus facere fuga fugiat necessitatibus rem sapiente? Ab distinctio iusto minus?</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="https://www.singularityweblog.com/wp-content/uploads/2016/02/Death.jpg" alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci beatae necessitatibus neque saepe! Architecto dolore exercitationem illo molestias odit quaerat quam tempora ullam vitae voluptatem. Eligendi impedit ipsam quas quo.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>

    </div>

</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<footer>
    ALL RIGHTS RESERVED BY © 2017 WANG
</footer>

</main>
<?php wp_footer(); ?>
</body>
</html>