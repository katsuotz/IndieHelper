<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
</div>

<div class="all">

    <div class="back-banner blue darken-1 white-text">
        <div class="container">
            <div class="row pt2">

                <h4 class="m0 pt3 center-align title">Explore</h4>
                <div class="card-title center-align font20">Be the first to know the newest incredible project</div>

                <!-- <div class="input-field mt2">
                    <div class="chips chips-placeholder"></div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="row">

        <div class="content">
            <div class="container" style="width: 85%">
                <div class="row">
                    <div class="section">
                        <div class="row m0 py0 pl0 pr1">
                            <div class="col s6">
                                <h5>Explore Project</h5>

                            </div>
                            <div class="col s6 pt1">
                                <a href="FormProject.php"><button type="button" class="waves-effect blue darken-1 waves-light btn right">Add Project</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="section">
                        <div class="row data">
                            <?php
                        $i = 0;
                        foreach ($data as $value):
                    ?>

                    <div class="col s12 xl4 p0 ">
                    <div class="col s12">
                        <div class="card grey lighten-5 z-depth-1"">
                                <div class="carousel carousel-slider">
                                    <?php
                                        for ($j=0; $j < count($foto[$i]); $j++) { 
                                    ?>
                                    <a class="carousel-item" href="<?=$fotohref[$j]?>"><div class="image" style="background-image: url('<?=baseurl('assets/images/project/').$foto[$i][$j]?>')"></div></a>
                                    <?php } ?>
                                </div>
                            <div class="row mb0" style="padding-left:24px; padding-right: 24px; padding-top: 8px">
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

                            <div class="row valign-wrapper mb0 custom-padding">

                                <div class="col s12">

                                    <h3 class="card-title font20"><?=money($value->income) . ' / ' . money($value->target)?></h3>
                                    <div class="progress">
                                        <div class="determinate blue darken-1" style="width: <?=percent($value->income,$value->target)?>%"></div>
                                    </div>
                                    <div class="col s12 my1">
                                        <a href="detailproject.php?id=<?=$value->id_project?>"><button type="button" class="full-width waves-effect blue darken-1 waves-light btn">Contribute</button></a>
                                    </div>
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                                <?php $i++; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
