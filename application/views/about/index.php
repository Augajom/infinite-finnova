<!-- About Hero -->
<section class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container-xxl">
        <div class="text-center max-w-800 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-building-columns text-info"></i> PICO Finance Regulated
            </span>
            <h1 class="display-4 text-white fw-bold mb-3"><?= $this->lang->line('about_hero_title'); ?></h1>
            <p class="lead text-slate fs-5"><?= $this->lang->line('about_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Company Details Paragraphs -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-10">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('company_fullname'); ?>
                    </h3>
                    <p class="text-slate mb-4 fs-5" style="line-height: 1.85;">
                        <?= $this->lang->line('about_p1'); ?>
                    </p>
                    <p class="text-slate mb-4 fs-5" style="line-height: 1.85;">
                        <?= $this->lang->line('about_p2'); ?>
                    </p>
                    <p class="text-slate mb-4 fs-5" style="line-height: 1.85;">
                        <?= $this->lang->line('about_p3'); ?>
                    </p>
                    <p class="text-slate mb-0 fs-5" style="line-height: 1.85;">
                        <?= $this->lang->line('about_p4'); ?>
                    </p>

                    <hr class="my-5" style="border-color: rgba(255, 255, 255, 0.1);">

                    <div class="p-3 p-md-4 rounded-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3" style="background: rgba(56, 189, 248, 0.08); border: 1px solid rgba(56, 189, 248, 0.25);">
                        <div>
                            <span class="text-muted small"><i class="fas fa-file-contract text-info me-1"></i> ใบอนุญาตกระทรวงการคลัง</span>
                            <h6 class="text-white fw-bold mb-0 fs-5 text-break"><?= $this->lang->line('home_license_no'); ?></h6>
                        </div>
                        <a href="<?= $this->lang->line('home_license_check_url'); ?>" target="_blank" class="btn btn-outline-success rounded-pill px-3 px-md-5 py-2 text-center text-wrap" style="max-width: 100%; word-break: break-word;">
                            <i class="fas fa-external-link-alt me-1"></i> <?= $this->lang->line('home_license_check_btn'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us (5 Cards) -->
<section class="py-5 position-relative" style="z-index: 2; background: rgba(0, 0, 0, 0.2);">
    <div class="container-xxl">
        <div class="text-center mb-5">
            <h2 class="display-6 text-white fw-bold mb-2"><?= $this->lang->line('why_us_title'); ?></h2>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary-blue), var(--primary-glow)); border-radius: 2px;"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php $why_cards = $this->lang->line('why_us_cards'); ?>
            <?php if (!empty($why_cards)): ?>
                <?php foreach ($why_cards as $card): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-3d">
                            <div class="card-icon-wrapper">
                                <i class="fas <?= $card['icon']; ?>"></i>
                            </div>
                            <h4 class="text-white mb-2 fw-bold fs-4"><?= $card['title']; ?></h4>
                            <p class="text-slate mb-0 small" style="line-height: 1.7;">
                                <?= $card['desc']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Why Choose Our Loan (5 Features) -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">
        <div class="text-center mb-5">
            <h2 class="display-6 text-white fw-bold mb-2"><?= $this->lang->line('why_loan_title'); ?></h2>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary-blue), var(--primary-glow)); border-radius: 2px;"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php $why_loan = $this->lang->line('why_loan_features'); ?>
            <?php if (!empty($why_loan)): ?>
                <?php foreach ($why_loan as $index => $item): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-3d p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="badge rounded-circle bg-info bg-opacity-25 text-info p-3 font-weight-bold fs-5" style="width: 42px; height: 42px; display: flex; align-items: center; justify-content: center; min-width: 42px;">
                                    <?= $index + 1; ?>
                                </div>
                                <h5 class="text-white mb-0 fw-bold"><?= $item['title']; ?></h5>
                            </div>
                            <p class="text-slate small mb-0" style="line-height: 1.65;">
                                <?= $item['desc']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>