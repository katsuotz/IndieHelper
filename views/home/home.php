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

                <?php for ($i=0; $i < 6 ; $i++) : ?>
                <div class="col s12 xl4 p0 ">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-image image-project">
                                <div class="materialboxed" data-caption="<?= $value->nama ?>" style="background-image: url('<?= baseurl('assets/images/template/plx-bg.jpg'); ?>');"></div>
                            </div>
                            <div data-target="modal1" class="clicked">
                                <div class="card-content"> <span class="card-title">Google Project</span>
                                    <p class="font12 title-category">This Is Spartan</p>
                                </div>
                                <div class="card-action">
                                    <h3 class="card-title">RP. 900000</h3>
                                    <div class="progress">
                                        <div class="determinate" style="width: 70%"></div>
                                    </div>
                                    <div class="row m0 py0 pl0 pr1">
                                        <div class="col s4 center-align"> <span>80</span> <span>Donation</span> </div>
                                        <div class="col s4 center-align"> <span>70%</span> <span>Progress</span> </div>
                                        <div class="col s4 center-align">
                                            <div>20</div> <span> Ipsum</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
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
<div class="parallax-container">
    <div class="parallax">
        <img src="<?=baseurl('assets/images/template/bg.jpg')?>">
        <div class="back-overlay"></div>
    </div>
    <div class="parallax-content py3">
        <div class="container white-text">
            <div class="row center-align" style="margin-top: 28vh">
                <h2 class="m0">Get Started</h2>
                <p>Lorem Ipsum Dolor Sit Amet</p>
                <a class="waves-effect waves-light btn indigo darken-1">Start a project</a>
            </div>
        </div>
    </div>

</div>
