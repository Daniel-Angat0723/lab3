<section id="guest" class="full-height px-lg-5">
                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">MY GUESTS</h6>
                        <h1>The army!</h1>
                    </div>
                </div>
                <div class="row gy-4" data-aos="fade-up">
                    <?php if(!empty($guest) && is_array($guest)):?>
                        <?php foreach($guest as $guest_item): ?>
                            <div class="col-md-3" data-aos="fade-up">
                                <h3 class="text-brand"><?= esc($guest_item['fname'])?> <?= esc($guest_item['lname'])?><h5 style="color:white!important;"> - <?= esc($guest_item['tagline'])?></h5></h3>
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <h1 class="text-brand">No Guests Found!</h3>
                    <?php endif ?>
                </div>
</section>