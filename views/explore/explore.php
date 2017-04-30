<div class="all">

    <div class="back-banner blue darken-2 white-text">
        <div class="container">
            <div class="row">

                <h4 class="m0 pt3 center-align title">IndieHelper</h4>
                <div class="card-title  center-align">Explore</div>

                <div class="input-field mt2">
                    <div class="chips chips-placeholder"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
    <div class="content">
        
    <div class="container">
        <div class="row">
            <div class="section">
                <div class="row m0 py0 pl0 pr1">
                    <div class="col s6">
                        <h5>Explore Project</h5>

                    </div>
                    <div class="col s6 pt1">
                        <a href="FormProject.php"><button type="button" class="waves-effect blue darken- waves-light btn right">Add Project</button></a>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="section">
                <div class="row m0 py0 pl0 pr1 data">
                    <?php
                        $i = 0;
                        foreach ($data as $value):
                    ?>

                    <div class="col s12 xl4 p0 ">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-image">
                                    <div class="materialboxed" style="background-image: url('<?= baseurl('assets/images/project/').$foto[$i][0]; ?>');"></div>
                                </div>
                                <div class="clicked">
                                    <div class="card-content">
                                        <div class="font14 title-category">Travel</div> <span class="card-title"><?= $value->nama ?></span>
                                        <p><?=$value->deskripsi?></p>
                                    </div>
                                    <div class="card-action">
                                        <h3 class="card-title">RP. <?=$value->target?></h3>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <div class="row m0 py0 pl0 pr1">
                                            <div class="col s4 center-align"> <span>80</span> <span>Backer</span> </div>
                                            <div class="col s4 center-align"> <span>80</span> <span>Backer</span> </div>
                                            <div class="col s4 center-align"> <span>80</span> <span>Backer</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++; endforeach; ?>
                </div>
            </div>

            </div>
    </div>
        </div>
    </div>
    <div class="test"></div>
