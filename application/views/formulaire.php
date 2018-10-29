<div class="container mb-5">
    <div class="row">
        <div class="offset-lg-2 col-lg-8 col-sm-12 pb-3">
            <p class="mb-2 intro"><span class="font-weight-bold">Vous ne serez pas contacté à la suite de votre signalement.
                Il ne déclenchera pas à lui seul un contrôle des autorités.</span></p>

            <p class="mb-5 intro"><span class="font-weight-bold">Afin de corriger lui-même l’anomalie, le professionnel pourra aussi consulter votre signalement anonymisé.</span>
            </p>
            <?php echo form_open_multipart(base_url()); ?>
            <div class="form-group">
                <label for="place_category">Sélectionnez d'abord le type d'établissement que vous souhaitez signaler <span>*</span></label>
                <select class="form-control form-control-lg chosen-single-select-nosearch is_invalid"
                        id="place_category" name="place_category" data-placeholder="Choisissez ...">
                    <option selected></option>
                    <?php
                    $previous = "";
                    for ($i = 0; isset($anomalies_array[$i]); $i++) {

                        if ($previous != $anomalies_array[$i][0]) {
                            echo '<option value="' . $anomalies_array[$i][0] . '"';
                            if ((isset($_POST['place_category'])) && ($anomalies_array[$i][0] == $_POST['place_category']))
                                echo ' selected';
                            echo '>' . $anomalies_array[$i][0] . '</option>';
                        }


                        $previous = $anomalies_array[$i][0];

                    } ?>
                </select>
                <?php echo form_error('place_category', '<div class="invalid">', '</div>'); ?>
            </div>
            <div class="form-group<?php echo ((!isset($_POST['place_category']))||($_POST['place_category'] == ''))? ' none': ''; ?>">
                <label for="type">Puis, indiquez le type d'anomalie que vous avez constaté <span>*</span></label>
                <select class="form-control form-control-lg chosen-single-select-nosearch" id="type" name="type"
                        data-placeholder="Choisissez ...">
                    <option selected></option>
                    <?php
                    if ((isset($_POST['place_category'])) && ($_POST['place_category'] != ''))
                        for ($i = 0; isset($anomalies_array[$i]); $i++) {
                            if (($previous != $anomalies_array[$i][1]) && ($anomalies_array[$i][0] == $_POST['place_category'])) {
                                echo '<option value="' . $anomalies_array[$i][1] . '"';
                                if ($anomalies_array[$i][1] == $_POST['type'])
                                    echo ' selected';
                                echo '>' . $anomalies_array[$i][1] . '</option>';
                            }
                            $previous = $anomalies_array[$i][1];
                        } ?>
                </select>
                <?php echo form_error('type', '<div class="invalid">', '</div>'); ?>
            </div>
            <div class="form-group<?php echo ((!isset($_POST['type']))||($_POST['type'] == ''))? ' none': ''; ?>">
                <label for="anomalies">Précisez enfin l'anomalie <span>*</span></label>
                <select class="form-control form-control-lg chosen-single-select" id="anomalies" name="anomalies"
                        data-placeholder="Choisissez une anomalie ...">
                    <option selected></option>
                    <?php
                    if ((isset($_POST['type'])) && ($_POST['type'] != ''))
                        for ($i = 0; isset($anomalies_array[$i]); $i++) {
                            if (($previous != $anomalies_array[$i][2]) && ($anomalies_array[$i][1] == $_POST['type']) && ($anomalies_array[$i][0] == $_POST['place_category'])) {
                                echo '<option value="' . $anomalies_array[$i][2] . '"';
                                if ($anomalies_array[$i][2] == $_POST['anomalies'])
                                    echo ' selected';
                                echo '>' . $anomalies_array[$i][2] . '</option>';
                            }
                            $previous = $anomalies_array[$i][2];
                        } ?>
                </select>
                <?php echo form_error('anomalies', '<div class="invalid">', '</div>'); ?>
            </div>
            <div class="form-group mt-5">
                <label for="place">Nom de l'établissement <span>*</span></label>
                <input class="form-control" id="place" name="place" value="<?php echo set_value('place'); ?>">
                <?php echo form_error('place', '<div class="invalid">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
                <label for="place_address">Adresse de l'établissement <span>*</span></label>
                <input class="form-control" name="place_address" id="place_address"
                       value="<?php echo set_value('place_address'); ?>">
                <?php echo form_error('place_address', '<div class="invalid">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
                <label for="picture">Vous pouvez ajouter une photo</label>
                <input type="file" class="form-control-file" name="picture" id="picture"
                       value="<?php echo set_value('picture'); ?>">
            </div>
            <div class="form-group mb-5">
                <label for="description">Vous pouvez préciser votre signalement</label>
                <textarea class="form-control" name="description" id="description" rows="3" maxlength="200"
                          placeholder="200 caractères maximum"> <?php echo set_value('description'); ?></textarea>
            </div>
            <p class="font-weight-bold">Votre identité ne sera pas indiquée au professionnel et vous ne serez pas
                sollicité.</p>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstname">Votre prénom <span>*</span></label>
                        <input type="text" class="form-control" name="firstname" id="firstname"
                               value="<?php echo set_value('firstname'); ?>">
                        <?php echo form_error('firstname', '<div class="invalid">', '</div>'); ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastname">Votre nom <span>*</span></label>
                        <input type="text" class="form-control" name="lastname" id="lastname"
                               value="<?php echo set_value('lastname'); ?>">
                        <?php echo form_error('lastname', '<div class="invalid">', '</div>'); ?>
                    </div>
                </div>

            </div>
            <div class="form-group mb-5">
                <label for="email">Votre email <span>*</span></label>
                <input class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email', '<div class="invalid">', '</div>'); ?>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Signaler</button>
            <p class="font-italic text-right">
                <small>Projet en cours d'expérimentation par la DGCCRF & Beta.Gouv</small>
            </p>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script language="JavaScript">window.anomalies_array = <?php echo json_encode($anomalies_array); ?></script>
