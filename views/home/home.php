<div class="parallax-container parallax-top white-text">
    <div class="parallax">
        <img src="<?=baseurl('assets/images/template/bg.jpg')?>">
        <div class="back-overlay"></div>
    </div>
    <div class="container-fluid">
        <div class="row pt3">
            <div class="parallax-title">
                <h2 class="center-align">IndieHelper</h2>
            </div>
        </div>
    </div>

</div>

<div class="content container" style="width: 85%">
    <div class="row pt1">
        <div class="col s12 py1">
            <span class="font-title">Lates Project</span>
            <div class="right data-colec">
                <a href="#" class="active"><span class="mr1 font15">All Category</span></a>
                <a href="#" class="p1"><span class="mr1 font15">Tech</span></a>
                <a href="#" class="p1"><span class="mr1 font15">Popular</span></a>
                <a href="#" class="p1"><span class="mr1 font15">Trending</span></a>
            </div>
        </div>
        <div class="content-card pt2">
            <div class="row">

                <?php $i = 0; foreach ($data as $key => $value){ ?>
                <div class="col s12 xl4 p0 ">
                    <div class="col s12">
                        <div class="card grey lighten-5 z-depth-1" style="padding: 6px 24px 24px 24px;">
                                <div class="carousel">
                                    <?php
                                        $ah = count($foto[1]);
                                        for ($i=0; $i < 3; $i++) { 
                                    ?>
                                    <a class="carousel-item" href="<?=$fotohref[$i]?>"><img src="http://localhost:8080/IndieHelper/assets/images/user/irvan.jpg"></a>
                                    <?php } ?>
                                </div>
                            <div class="row mb0">
                                <div class="col s12">
                                    <p class="font24"><?=$value->nama_project?></p>
                                </div>
                                <div class="col s12">
                                    <div class="row valign-wrapper">
                                        <div class="col s2">
                                            <img src="<?=baseurl('assets/images/user/').$value->foto_user?>" alt="" class="circle responsive-img">
                                        </div>
                                        <div class="col s10">
                                            <span class="black-text font17"><?= $value->nama ?></span>
                                            <p class="m0 font12"><?= $value->alamat ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row valign-wrapper mb0">

                                <div class="col s12">

                                    <h3 class="card-title">Rp. <?=$value->target?></h3>
                                    <div class="progress">
                                        <div class="determinate" style="width: 70%"></div>
                                    </div>
                                    <div class="col s2">
                                        <img src="<?=baseurl('assets/images/user/irvan.jpg')?>" alt="" class="circle responsive-img">
                                    </div>
                                    <div class="col s2">
                                        <img src="<?=baseurl('assets/images/user/irvan.jpg')?>" alt="" class="circle responsive-img">
                                    </div>
                                    <div class="col s8">
                                        <p>+ 200 People Join</p>
                                    </div>
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
        <div class="content-explore">
            <div class="row pt1">
                <div class="col s12 py1">
                    <span class="font-title">Category Explore</span>
                </div>
                <div class="col l3 pl1 pr1">
                    <div class="card">
                        <div class="card-image card-image-explore">
                            <img src="<?=baseurl('assets/images/template/bg1.jpg')?>" style="height: 100%">
                            <div class="back-overlay"></div>
                            <div class="card-title center-align pt4" style="top: 0; right: 0;">
                                <div class="title pt1">
                                    <span>Tech</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l3 pl1 pr1">
                    <div class="card">
                        <div class="card-image card-image-explore">
                            <img src="<?=baseurl('assets/images/template/bg1.jpg')?>" style="height: 100%">
                            <div class="back-overlay"></div>
                            <div class="card-title center-align pt4" style="top: 0; right: 0;">
                                <div class="title pt1">
                                    <span>Art</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l3 pl1 pr1">
                    <div class="card">
                        <div class="card-image card-image-explore">
                            <img src="<?=baseurl('assets/images/template/bg1.jpg')?>" style="height: 100%">
                            <div class="back-overlay"></div>
                            <div class="card-title center-align pt4" style="top: 0; right: 0;">
                                <div class="title pt1">
                                    <span>Tech</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l3 pl1 pr1">
                    <div class="card">
                        <div class="card-image card-image-explore">
                            <img src="<?=baseurl('assets/images/template/bg1.jpg')?>" style="height: 100%">
                            <div class="back-overlay"></div>
                            <div class="card-title center-align pt4" style="top: 0; right: 0;">
                                <div class="title pt1">
                                    <span>Fashion</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container parallax-footer">
    <div class="parallax">
        <img src="<?=baseurl('assets/images/template/bg.jpg')?>">
        <div class="back-overlay"></div>
    </div>
    <div class="parallax-content py3">
        <div class="container white-text">
            <div class="row center-align" style="margin-top: 13vh">
                <h2 class="m0">Get Started</h2>
                <p>Lorem Ipsum Dolor Sit Amet</p>
                <a class="waves-effect waves-light btn indigo darken-1">Start a project</a>
            </div>
        </div>
    </div>

</div>
