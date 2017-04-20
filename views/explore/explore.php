<div class="all">

    <div class="back-banner purple white-text">
        <div class="container">
            <div class="row">

                <h4 class="m0 pt3 title">IndieHelper</h4>
                <div class="card-title">Lorem Ipsum Dolor Sit Amet</div>

                <div class="input-field mt2">
                    <div class="chips"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="section">
                <div class="row m0 py0 pl0 pr1">
                    <div class="col s6">
                        <h5>Explore Project</h5>

                    </div>
                    <div class="col s6 pt1">

                        <button type="button" class="waves-effect waves-light btn right">Add Project</button>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="section">
                <div class="row m0 py0 pl0 pr1 data">
                    <?php foreach ($data as $key => $value):?>
                    <div class="col s4 p0">
                        <div class="col s12 ">
                            <div class="card">
                                <div class="card-image"> <img src=""> </div>
                                <div class="card-content">
                                    <div class="font14 title-category">Travel</div> <span class="card-title"><?= $value->nama ?></span>
                                    <p></p>
                                </div>
                                <div class="card-action">
                                    <h3 class="card-title">RP. <?=$value->jumlah?></h3>
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
                <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
    <div class="test"></div>
