<div class="container mb-5">
    <div class="row">
        <div class="offset-lg-2 col-lg-8 col-sm-12 pb-3">

            <?php ?>
            <p class="mb-2 intro"><span class="font-weight-bold">Vous pouvez déposer ici un signalement afin d’informer la DGCCRF</span>
                <span class="font-italic">(Direction Générale de la Concurrence, Consommation et Répression des Fraudes).</span>
            </p>

            <p class="mb-2 intro"><span class="font-weight-bold">Vous ne serez pas contacté à la suite de votre signalement.</span>
                Il ne déclenchera pas à lui seul un contrôle de l’établissement.</p>

            <p class="mb-5 intro"><span class="font-weight-bold">Afin de corriger lui-même l’anomalie, le professionnel pourra aussi consulter votre signalement (sans votre identité).</span>
            </p>
            <?php if(isset($error)) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Erreur de base de données</strong>. Veuillez renouveler la soumission du formulaire
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <?php echo form_open_multipart(base_url()); ?>
            <div class="form-group">
                <label for="place-category">Quel type d'établissement souhaitez vous signaler ? </label>
                <select class="form-control form-control-lg chosen-single-select-nosearch is_invalid"
                        id="place-category" name="place-category" data-placeholder="Choisissez ...">
                    <option selected></option>
                    <?php
                    $previous = "";
                    for ($i = 0; isset($anomalies_array[$i]); $i++) {

                        if ($previous != $anomalies_array[$i][0]) {
                            echo '<option value="' . $anomalies_array[$i][0] . '"';
                            if ((isset($_POST['place-category'])) && ($anomalies_array[$i][0] == $_POST['place-category']))
                                echo ' selected';
                            echo '>' . $anomalies_array[$i][0] . '</option>';
                        }


                        $previous = $anomalies_array[$i][0];

                    } ?>
                </select>
                <?php echo form_error('place-category', '<div class="invalid">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label for="type">Quel type d'anomalie avez vous constaté ? </label>
                <select class="form-control form-control-lg chosen-single-select-nosearch" id="type" name="type"
                        data-placeholder="Choisissez ...">
                    <option selected></option>
                    <?php
                    if ((isset($_POST['place-category'])) && ($_POST['place-category'] != ''))
                        for ($i = 0; isset($anomalies_array[$i]); $i++) {
                            if (($previous != $anomalies_array[$i][1])&&($anomalies_array[$i][0]==$_POST['place-category'])) {
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
            <div class="form-group mb-4">
                <label for="anomalies">Précisez</label>
                <select class="form-control form-control-lg chosen-single-select" id="anomalies" name="anomalies"
                        data-placeholder="Choisissez une anomalie ...">
                    <option selected></option>
                    <?php
                    if ((isset($_POST['type'])) && ($_POST['type'] != ''))
                        for ($i = 0; isset($anomalies_array[$i]); $i++) {
                            if (($previous != $anomalies_array[$i][2])&&($anomalies_array[$i][1]==$_POST['type'])&&($anomalies_array[$i][0]==$_POST['place-category'])) {
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
            <div class="form-group">
                <label for="place">Etablissement</label>
                <input class="form-control" id="place" name="place" placeholder="Nom du commerçant ..."
                       value="<?php echo set_value('place'); ?>">
                <?php echo form_error('place', '<div class="invalid">', '</div>'); ?>
            </div>
            <div class="form-group mb-4">
                <label for="place-address">Adresse</label>
                <input class="form-control" name="place-address" id="place-address"
                       placeholder="numéro, rue et ville ..." value="<?php echo set_value('place-address'); ?>">
                <?php echo form_error('place-address', '<div class="invalid">', '</div>'); ?>
            </div>

            <div class="form-group mb-4">
                <label for="picture">Ajouter une photo</label>
                <input type="file" class="form-control-file" name="picture" id="picture"
                       value="<?php echo set_value('picture'); ?>">
            </div>
            <div class="form-grou mb-4">
                <label for="description">Précision de votre signalement</label>
                <textarea class="form-control" name="description" id="description" rows="3" maxlength="200"
                          placeholder="200 caractères maximum"> <?php echo set_value('description'); ?></textarea>
            </div>
            <p class="font-weight-bold">Votre identité ne sera pas indiquée au professionnel.</p>

            <div class="form-group">
                <label for="name">Vos prénom et nom</label>
                <input class="form-control" name="name" id="name" placeholder="Prénom Nom ..."
                       value="<?php echo set_value('name'); ?>">
                <?php echo form_error('name', '<div class="invalid">', '</div>'); ?>
            </div>
            <div class="form-group mb-5">
                <label for="email">Votre email </label>
                <input class="form-control" id="email" name="email" placeholder="votreadresse@mail.fr"
                       value="<?php echo set_value('email'); ?>">
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
