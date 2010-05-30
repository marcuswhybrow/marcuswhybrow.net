<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

<div id="content-wrapper">
    <div id="content" class="container">
        <h1 id=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p>
            I am always working on at least one project, or tinkering with a bit of code. The following are my main projects that are out in the wild. (The links will take you to each respective github repository).
        </p>
        <div class="container">
            <div class="column span-5 center">
                <h3 class="no-top-margin">Django</h3>
                <ul class="no-left-padding">
                    <li><a href="http://github.com/robgolding63/myuni/">MyUni</a></li>
                    <li><a href="http://github.com/marcuswhybrow/django-user-silos/">User Silos</a></li>
                </ul>
            </div>
            <div class="column span-5">
                <h3 class="no-top-margin">Web Design</h3>
                <ul class="no-left-padding">
                    <li><a href="http://github.com/marcuswhybrow/marcuswhybrow.net/">This Website</a></li>
                </ul>
            </div>
            <div class="column span-6 last">
                <h3 class="no-top-margin">jQuery</h3>
                <ul class="no-left-padding">
                    <li><a href="http://github.com/marcuswhybrow/jquery-shadow-labels/">Shadow Labels</a></li>
                    <li><a href="http://github.com/marcuswhybrow/jquery-extendo-page/">Extendo Page</a></li>
                </ul>
            </div>
        </div>
    </div><!-- end #content -->
</div><!-- end #content-wrapper -->

<?php get_footer(); ?>