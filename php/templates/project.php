<?php
/**
 * User: Dominic
 * Date: 15/07/2019
 * Time: 05:02
 *
 * @var array $project
 */


if((isset($project["github"]) + isset($project["liveDeployment"]) == 1)){
    $button_cols = "col-12";
} else {
    $button_cols = "col-12 col-md-6";
}

?>


<div class="col-sm-12 col-md-6 col-lg-4 px-1">
    <div class="card shadow rounded-0 border-0 p-0 m-1">
        <div class="card-img-top">
            <img class="w-100 thumbnail" src="<?= $project["image"] ?>">
            <div class="language-set">
                <?php foreach ($project["languages"] as $language): ?>
                <span title="<?= $language["title"] . " Icon" ?>">
                    <img class="svg language language-padding" src="<?= $language["icon"] ?>">
                </span>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card-body">
            <div class="card-title">
                <b><?= $project["name"] ?></b>
            </div>
            <p class="card-text">
                <?= $project["description"] ?>
            </p>

            <div class="row buttons d-flex justify-content-center">
                <?php if (isset($project["github"])): ?>
                    <div class="<?= $button_cols ?> mt-1 px-1">
                        <a href="<?= $project["github"] ?>" target="_blank">
                            <button class="btn btn-primary h-100 w-100 d-flex justify-content-center align-items-center github">
                                View on Github
                                <img class="svg white-svg"
                                     src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/github.svg">
                            </button>
                        </a>
                    </div>

                <?php endif; ?>

                <?php if (isset($project["liveDeployment"])): ?>
                    <div class="<?= $button_cols ?> mt-1 px-1">
                        <a href="<?= $project["liveDeployment"] ?>" target="_blank">
                            <button class="btn btn-primary h-100 w-100 d-flex justify-content-center align-items-center live ">
                                <div class="h-100" style="display:inline-block">
                                    Live Deployment
                                </div>
                                <img class="svg white-svg" src="/portfolioImages/live.svg">
                            </button>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-footer bg-dark text-white p-2 rounded-0 border-dark border d-flex flex-row">

            <div class="date">
                <?= "Start Date: " . date("F Y", $project["start_date"]) ?>
            </div>
            <div class="expansion-arrow flex-grow-1 justify-content-end">
                <img class="svg white-svg" src="/portfolioImages/TriangleArrow-Down.svg">
            </div>
        </div>
    </div>
</div>
