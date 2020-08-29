<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4><?= $page_configs['modal_title'] ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php
                                if ($page_configs['lang'] == 'es') {
                                    echo ".";
                                }
                                else echo "..";
                                ?>/inc/sendmail.php?lang=<?php echo $page_configs['lang'] ?>" id="form-cta" method="POST">
                    <label for="first_name"><?= $page_configs['form_name'] ?></label>
                    <input class="form-control" id="first_name" maxlength="40" name="first_name" size="20" type="text"/><br>
                    <label for="email"><?= $page_configs['form_email'] ?></label>
                    <input required class="form-control" id="email" maxlength="80" name="email" size="20" type="text"/><br>
                    <label for="mobile"><?= $page_configs['form_tel'] ?></label>
                    <input required class="form-control" id="mobile" maxlength="40" name="mobile" size="20" type="text"/><br>
                    <label for="modelo"><?= $page_configs['form_model'] ?></label>
                    <select id="modelo" name="modelo" class="form-control" required style="cursor:pointer;" onchange="onChangeModelSelection()">
                        <option selected value="Ecosport">Ecosport</option>
                        <option value="Fiesta">Fiesta</option>
                        <option value="Focus">Focus</option>
                        <option value="Puma">Puma</option>
                        <option value="Tourneo">Tourneo</option>
                        <option value="Otro">Otro</option>
                    </select><br>
                    <label for="conditions"><input required type="checkbox" id="conditions">
                        <?= $page_configs['form_privacy_start'] ?> <a href="<?= LOPD ?>" target="_blank" rel="noopener"><?= $page_configs['form_privacy_end'] ?></a>
                    </label><br>
                    <button id="submit-form" class="btn green-box text-white" type="submit" name="submit" page-type="form-submitted" car-model="<?= $page_configs['car_model'] ?>" car-variant="none" lang="<?= $page_configs['lang'] ?>">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>