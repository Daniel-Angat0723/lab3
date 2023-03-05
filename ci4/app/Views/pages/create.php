<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<section id="forms" class="full-height px-lg-5">
                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">MY FORMS</h6>
                        <h1>Join the army!</h1>
                    </div>
                </div>
                <div class="row pb-4" data-aos="fade-up">
                                    <form action="/~ddangat/lab3/ci4/public/create" method="get">
                                    <?= csrf_field() ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="fname">First Name</label>
                                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                            <label for="lname">Last Name</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6">
                                            <label for="tagline">Tagline</label>
                                            <input type="text" class="form-control" id="tagline" placeholder="Ride or die!">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-brand" name="join">Join the army</button>
                                    </form>
                </div>
</section>