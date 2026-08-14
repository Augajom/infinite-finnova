<!-- Hero Section -->
<section class="hero-section section-blurred-bg">
    <!-- Animated Soft Aura Background Blobs -->
    <div class="hero-aura-blob-1"></div>
    <div class="hero-aura-blob-2"></div>

    <div class="container-xxl position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-7">
                <div class="badge-pico mb-3">
                    <i class="fas fa-shield-check text-success"></i> <?= $this->lang->line('home_hero_subtitle'); ?>
                </div>
                <h1 class="text-white fw-bold mb-3" style="line-height: 1.2; font-size: 2.1rem !important;">
                    <?= $this->lang->line('home_hero_title'); ?>
                </h1>
                <p class="lead text-slate mb-4 fs-5" style="max-width: 680px;">
                    <?= $this->lang->line('home_hero_desc'); ?>
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="<?= site_root_url('apply') ?>" class="btn-primary-3d">
                        <i class="fas fa-file-signature"></i> <?= $this->lang->line('btn_apply_loan'); ?>
                    </a>
                    <a href="<?= site_root_url('apply') ?>" class="btn-outline-3d">
                        <i class="fas fa-route"></i> <?= $this->lang->line('btn_apply_steps'); ?>
                    </a>
                </div>

                <!-- Service Area Pill -->
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill" style="background: rgba(245, 158, 11, 0.1); border: 1px solid rgba(245, 158, 11, 0.3); color: var(--accent-gold);">
                    <i class="fas fa-map-pin"></i> <span class="small font-weight-bold"><?= $this->lang->line('area_limit_desc'); ?></span>
                </div>
            </div>

            <!-- License Banner Glass Card -->
            <div class="col-lg-5">
                <div class="license-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon-wrapper mb-0" style="width: 50px; height: 50px; font-size: 1.3rem;">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div>
                            <h5 class="text-white mb-0 fw-bold"><?= $this->lang->line('company_fullname'); ?></h5>
                            <span class="small text-success fw-bold">PICO Finance Provider</span>
                        </div>
                    </div>
                    <p class="small text-slate mb-3">
                        <?= $this->lang->line('home_company_intro'); ?>
                    </p>
                    <div class="p-3 rounded-3 mb-3" style="background: rgba(2, 132, 199, 0.06); border: 1px dashed rgba(2, 132, 199, 0.3);">
                        <div class="small text-white fw-bold mb-1">
                            <i class="fas fa-file-contract text-emerald me-1"></i> <?= $this->lang->line('home_license_no'); ?>
                        </div>
                    </div>
                    <a href="<?= $this->lang->line('home_license_check_url'); ?>" target="_blank" class="btn btn-outline-success btn-sm w-100 rounded-pill py-2">
                        <i class="fas fa-external-link-alt me-1"></i> <?= $this->lang->line('home_license_check_btn'); ?>
                    </a>
                </div>
            </div>

        </div>

        <!-- Floating Trust Metrics Badges -->
        <div class="row g-3 mt-4 pt-2">
            <div class="col-md-4 col-6">
                <div class="floating-stat-badge d-flex align-items-center gap-3">
                    <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <div>
                        <h6 class="text-white fw-bold mb-0 fs-6"><?= $this->lang->line('stat_pico_title'); ?></h6>
                        <span class="small text-muted" style="font-size: 0.82rem;"><?= $this->lang->line('stat_pico_sub'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="floating-stat-badge d-flex align-items-center gap-3" style="animation-delay: 1.2s;">
                    <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <h6 class="text-white fw-bold mb-0 fs-6"><?= $this->lang->line('stat_fast_title'); ?></h6>
                        <span class="small text-muted" style="font-size: 0.82rem;"><?= $this->lang->line('stat_fast_sub'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="floating-stat-badge d-flex align-items-center gap-3" style="animation-delay: 2.4s;">
                    <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem;">
                        <i class="fas fa-hand-holding-dollar"></i>
                    </div>
                    <div>
                        <h6 class="text-white fw-bold mb-0 fs-6"><?= $this->lang->line('stat_amount_title'); ?></h6>
                        <span class="small text-muted" style="font-size: 0.82rem;"><?= $this->lang->line('stat_amount_sub'); ?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Key Highlights (จุดเด่นของเรา) -->
<section class="py-5 position-relative section-blurred-bg" style="z-index: 2;">
    <div class="container-xxl">
        <div class="text-center mb-5">
            <h2 class="display-6 text-white fw-bold mb-2"><?= $this->lang->line('highlights_title'); ?></h2>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary-blue), var(--primary-glow)); border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            <?php $highlights = $this->lang->line('highlights_items'); ?>
            <?php if (!empty($highlights)): ?>
                <?php foreach ($highlights as $index => $item): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-3d d-flex align-items-center gap-3 p-4">
                            <div class="card-icon-wrapper mb-0" style="width: 48px; height: 48px; min-width: 48px; font-size: 1.2rem;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h6 class="text-white mb-0 fw-bold fs-5"><?= $item; ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us (ทำไมต้องเลือกเรา - 5 Cards) -->
<section class="py-5 position-relative section-blurred-bg" style="z-index: 2;">
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
                        <div class="card-3d d-flex align-items-center gap-3 p-4">
                            <div class="card-icon-wrapper mb-0" style="width: 48px; height: 48px; min-width: 48px; font-size: 1.2rem;">
                                <i class="fas <?= $card['icon']; ?>"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-0 fw-bold fs-5"><?= $card['title']; ?></h5>
                                <?php if (!empty($card['desc'])): ?>
                                    <p class="text-slate mb-0 small mt-1" style="line-height: 1.7;"><?= $card['desc']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Interactive Loan Calculator Section -->
<section class="py-5 position-relative section-blurred-bg" style="z-index: 2;">
    <div class="container-xxl">
        <div class="card-3d p-4 p-md-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="badge bg-success bg-opacity-25 text-success mb-2 px-3 py-2 rounded-pill fw-bold">Interactive Calculator</span>
                    <h2 class="display-6 text-white fw-bold mb-3"><?= $this->lang->line('calc_title'); ?></h2>
                    <p class="text-slate mb-4">
                        <?= $this->lang->line('calc_desc'); ?>
                    </p>

                    <!-- Amount Slider -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between text-white fw-bold mb-2">
                            <span><?= $this->lang->line('calc_amount_label'); ?></span>
                            <span class="text-success fs-4" id="calcAmountVal"><?= $this->lang->line('calc_amount_min'); ?></span>
                        </div>
                        <input type="range" class="form-range" id="calcAmountRange" min="5000" max="50000" step="1000" value="10000">
                        <div class="d-flex justify-content-between text-muted small">
                            <span><?= $this->lang->line('calc_amount_min'); ?></span>
                            <span><?= $this->lang->line('calc_amount_max'); ?></span>
                        </div>
                    </div>

                    <!-- Days Slider -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between text-white fw-bold mb-2">
                            <span><?= $this->lang->line('calc_term_label'); ?></span>
                            <span class="text-success fs-5" id="calcTermVal"><?= $this->lang->line('calc_term_min'); ?></span>
                        </div>
                        <input type="range" class="form-range" id="calcTermRange" min="91" max="180" step="1" value="91">
                        <div class="d-flex justify-content-between text-muted small">
                            <span><?= $this->lang->line('calc_term_min'); ?></span>
                            <span><?= $this->lang->line('calc_term_max'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 rounded-4" style="background: linear-gradient(135deg, rgba(2, 132, 199, 0.08), rgba(124, 58, 237, 0.08)); border: 1px solid rgba(124, 58, 237, 0.22); box-shadow: 0 10px 30px rgba(2, 132, 199, 0.08);">
                        <div class="text-center mb-4">
                            <span class="text-muted small"><?= $this->lang->line('calc_max_interest_label'); ?></span>
                            <h1 class="display-5 text-success fw-bold my-2" id="calcInterestVal">892.49 <?= $this->lang->line('unit_baht'); ?></h1>
                            <span class="text-slate small"><?= $this->lang->line('calc_total_repayment_label'); ?> <strong class="text-white" id="calcTotalVal">10,892.49 <?= $this->lang->line('unit_baht'); ?></strong></span>
                        </div>

                        <hr style="border-color: rgba(124, 58, 237, 0.15);">

                        <a href="<?= site_root_url('apply') ?>" class="btn-primary-3d w-100 justify-content-center">
                            <i class="fas fa-paper-plane me-2"></i> <?= $this->lang->line('btn_apply_now'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Calculator JS -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const amountRange = document.getElementById('calcAmountRange');
    const termRange = document.getElementById('calcTermRange');
    const amountVal = document.getElementById('calcAmountVal');
    const termVal = document.getElementById('calcTermVal');
    const interestVal = document.getElementById('calcInterestVal');
    const totalVal = document.getElementById('calcTotalVal');

    const unitBaht = "<?= $this->lang->line('unit_baht'); ?>";
    const unitDays = "<?= $this->lang->line('unit_days'); ?>";

    function updateCalc() {
        if (!amountRange || !termRange) return;
        const principal = parseFloat(amountRange.value);
        const days = parseInt(termRange.value);

        amountVal.textContent = principal.toLocaleString('th-TH') + ' ' + unitBaht;
        termVal.textContent = days + ' ' + unitDays;

        // 35.80% APR calculation
        const rate = 0.358;
        const interest = (principal * rate * days) / 365;
        const total = principal + interest;

        interestVal.textContent = interest.toLocaleString('th-TH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' ' + unitBaht;
        totalVal.textContent = total.toLocaleString('th-TH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' ' + unitBaht;
    }

    if (amountRange && termRange) {
        amountRange.addEventListener('input', updateCalc);
        termRange.addEventListener('input', updateCalc);
        updateCalc();
    }
});
</script>