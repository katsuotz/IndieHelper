
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
                            <a href="FormProject.php"><button type="button" class="waves-effect blue darken-1 waves-light btn right">Add Project</button></a>
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
                                    <div class="materialboxed" data-caption="<?= $value->nama ?>" style="background-image: url('<?= baseurl('assets/images/project/').$foto[$i][0]; ?>');"></div>
                                </div>
                                <div data-target="modal1" class="clicked">
                                    <div class="card-content"> <span class="card-title"><?= $value->nama ?></span>
                                        <p class="font12 title-category"><?=$value->deskripsi?></p>
                                    </div>
                                    <div class="card-action">
                                        <h3 class="card-title">RP. <?=$value->target?></h3>
                                        <div class="progress">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <div class="row m0 py0 pl0 pr1">
                                            <div class="col s4 center-align"> <span>80</span> <span>Donation</span> </div>
                                            <div class="col s4 center-align"> <span>70%</span> <span>Progress</span> </div>
                                            <div class="col s4 center-align"> <div>20</div> <span > Ipsum</span> </div>
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
