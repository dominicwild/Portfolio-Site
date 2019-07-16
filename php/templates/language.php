<?php
/**
 * User: Dominic
 * Date: 14/07/2019
 * Time: 00:10
 *
 * @var array $language
 */

?>
<?php if (isset($language["description"]) && $language["description"] !== ""): ?>
    <div class="col-sm-6 col-md-4 mt-2">
        <div class="card experience d-flex flex-row h-100">
            <div class="card-body p-2 align-items-center d-flex" title="<?= $language["title"] . " icon" ?>">
                <img class="svg white-svg" src="<?= $language["icon"] ?>"/>
            </div>
            <div class="card-body p-2 d-flex flex-grow-1 w-100 justify-content-center align-items-center">
                <div>
                    <?= $language["description"] ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
