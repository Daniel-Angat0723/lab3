<section id="forms" class="full-height px-lg-5">
            <center>
                <div class="row pb-4" data-aos="fade-up">
                        <h6 class="text-brand">MY FORMS</h6>
                        <h1>Join the army!</h1>
                </div>
                <div class="row pb-4" data-aos="fade-up">
                    <?= session()->getFlashdata('error') ?>
                    <?= validation_list_errors() ?>
                        <form action="/~ddangat/lab3/ci4/public/create" method="post">
                            <?= csrf_field() ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fname" class="text-brand">First Name</label>
                                    <input class="form-group col-md-6" type="input" name="fname" value="<?= set_value('fname') ?>" required maxlength="30">
                                </div>
                                <br>
                                <div class="form-group col-md-6">
                                    <label for="lname" class="text-brand">Last Name</label>
                                    <input class="form-group col-md-6" type="input" name="lname" value="<?= set_value('lname') ?>" required maxlength="30">
                                </div>
                                <br>
                                <div class="form-group col-md-6">
                                    <label for="tagline" class="text-brand">Tagline</label>
                                    <input class="form-group col-md-6" type="input" name="tagline" value="<?= set_value('tagline') ?>" required maxlength="50">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-brand">Join the army</button>
                            </div>
                        </form>
                </div>
                <a href="profile" class="text-button" data-aos="fade-up"><p data-aos="fade-up" style="text-decoration: underline;">Go back to profile</p></a>
            </center>
</section>