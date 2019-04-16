<?php
/*
Template Name: user profile
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <div class="container text-center">
        <h1><span>User</span>Profiles</h1>
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                ?>

                <div class="row m-top" >

                    <div class="col-md-12 col-sm-12" style="text-align: center;">

                        <div class="row m-top">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-lg-7 col-md-7 col-sm-10 col-xs-12">
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Username</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <input type="text" name="name" value=" " class="text-box">
                                    </div>
                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Password</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <input type="text" name="name" value=" " class="text-box">
                                    </div>
                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Email</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <input type="text" name="name" value=" " class="text-box">
                                    </div>
                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Location</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <input type="text" name="name" value=" " class="text-box">
                                    </div>
                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Distance</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <input type="text" name="name" value=" " class="text-box">
                                    </div>
                                </div>

                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Nature</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Animals</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">People</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Building</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Food &amp; Drink</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Healt &amp; Beauty</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Industary</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Lifestyle</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Sports &amp; Outdoors</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Transporation</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-top">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="title">Miscellaneous</div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="select-box">
                                            <select name="emailsubmits">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-center m-top">
                                    <input type="submit" value="Save" id="submitbutton" class="subbtn">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            <?php
            endwhile;
        }
        ?>

    </div><!-- /.blog-main -->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>