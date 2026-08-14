<!-- Hero Section (Full 100vh Height & Ultra-Bright High-Contrast Text) -->
<section class="hero-section hero-section-home section-blurred-bg position-relative d-flex align-items-center" style="min-height: 100vh; padding-top: 130px; padding-bottom: 60px; background: linear-gradient(rgba(15, 23, 42, 0.72), rgba(15, 23, 42, 0.82)), url('<?= base_url('assets/images/bg1.jpg') ?>') center center / cover no-repeat;">
    <!-- Animated Soft Aura Background Blobs -->
    <div class="hero-aura-blob-1"></div>
    <div class="hero-aura-blob-2"></div>

    <div class="container-xxl position-relative w-100" style="z-index: 2;">
        <div class="row align-items-center g-4 g-lg-5">
            
            <div class="col-lg-7">
                <div class="badge-pico mb-3" style="background: rgba(16, 185, 129, 0.22); border: 1px solid #34d399; color: #34d399; font-weight: 700;">
                    <i class="fas fa-shield-check me-1" style="color: #34d399;"></i> <?= $this->lang->line('home_hero_subtitle'); ?>
                </div>
                <h1 class="fw-bold mb-3" style="color: #FFFFFF !important; line-height: 1.25; font-size: 2.2rem !important; text-shadow: 0 4px 15px rgba(0,0,0,0.7);">
                    <?= $this->lang->line('home_hero_title'); ?>
                </h1>
                <p class="lead mb-4 fs-5" style="color: #F8FAFC !important; max-width: 680px; text-shadow: 0 2px 10px rgba(0,0,0,0.8); font-weight: 500;">
                    <?= $this->lang->line('home_hero_desc'); ?>
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="<?= site_root_url('apply') ?>" class="btn-primary-3d">
                        <i class="fas fa-file-signature"></i> <?= $this->lang->line('btn_apply_loan'); ?>
                    </a>
                    <a href="<?= site_root_url('apply') ?>" class="btn-outline-3d" style="background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.4); color: #FFFFFF !important; font-weight: 700;">
                        <i class="fas fa-route"></i> <?= $this->lang->line('btn_apply_steps'); ?>
                    </a>
                </div>
            </div>

            <!-- License Banner Glass Card -->
            <div class="col-lg-5">
                <div class="license-card p-4 p-md-5 rounded-4" style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(56, 189, 248, 0.4); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.55);">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon-wrapper mb-0" style="width: 50px; height: 50px; font-size: 1.3rem; background: rgba(56, 189, 248, 0.2); border-color: #38bdf8; color: #38bdf8;">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold" style="color: #FFFFFF !important;"><?= $this->lang->line('company_fullname'); ?></h5>
                            <span class="small fw-bold" style="color: #38BDF8 !important;">PICO Finance Provider</span>
                        </div>
                    </div>
                    <p class="small mb-3" style="color: #F1F5F9 !important; line-height: 1.7; font-weight: 500;">
                        <?= $this->lang->line('home_company_intro'); ?>
                    </p>
                    <div class="p-3 rounded-3 mb-3" style="background: rgba(56, 189, 248, 0.12); border: 1px dashed rgba(56, 189, 248, 0.45);">
                        <div class="small fw-bold mb-1" style="color: #FFFFFF !important;">
                            <i class="fas fa-file-contract me-1" style="color: #38BDF8;"></i> <?= $this->lang->line('home_license_no'); ?>
                        </div>
                    </div>
                    <a href="<?= $this->lang->line('home_license_check_url'); ?>" target="_blank" class="btn btn-sm w-100 rounded-pill py-2 font-weight-bold" style="background: linear-gradient(135deg, #1415C7, #0284C7); color: #FFFFFF !important; border: none; box-shadow: 0 4px 15px rgba(20, 21, 199, 0.4);">
                        <i class="fas fa-external-link-alt me-1"></i> <?= $this->lang->line('home_license_check_btn'); ?>
                    </a>
                </div>
            </div>

        </div>

        <!-- Floating Trust Metrics Badges (1 col 3 rows on mobile) -->
        <div class="row g-3 mt-4 pt-2">
            <div class="col-md-4 col-12">
                <div class="floating-stat-badge d-flex align-items-center gap-3 p-3 rounded-4" style="background: rgba(15, 23, 42, 0.88); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(56, 189, 248, 0.35); box-shadow: 0 12px 30px rgba(0, 0, 0, 0.45);">
                    <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem; background: rgba(56, 189, 248, 0.2); border-color: #38bdf8; color: #38bdf8;">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0 fs-6" style="color: #FFFFFF !important;"><?= $this->lang->line('stat_pico_title'); ?></h6>
                        <span class="small fw-bold" style="color: #38BDF8 !important; font-size: 0.84rem;"><?= $this->lang->line('stat_pico_sub'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="floating-stat-badge d-flex align-items-center gap-3 p-3 rounded-4" style="animation-delay: 1.2s; background: rgba(15, 23, 42, 0.88); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(56, 189, 248, 0.35); box-shadow: 0 12px 30px rgba(0, 0, 0, 0.45);">
                    <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem; background: rgba(56, 189, 248, 0.2); border-color: #38bdf8; color: #38bdf8;">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0 fs-6" style="color: #FFFFFF !important;"><?= $this->lang->line('stat_fast_title'); ?></h6>
                        <span class="small fw-bold" style="color: #38BDF8 !important; font-size: 0.84rem;"><?= $this->lang->line('stat_fast_sub'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="floating-stat-badge d-flex align-items-center gap-3 p-3 rounded-4" style="animation-delay: 2.4s; background: rgba(15, 23, 42, 0.88); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(56, 189, 248, 0.35); box-shadow: 0 12px 30px rgba(0, 0, 0, 0.45);">
                    <div class="card-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.1rem; background: rgba(56, 189, 248, 0.2); border-color: #38bdf8; color: #38bdf8;">
                        <i class="fas fa-hand-holding-dollar"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0 fs-6" style="color: #FFFFFF !important;"><?= $this->lang->line('stat_amount_title'); ?></h6>
                        <span class="small fw-bold" style="color: #38BDF8 !important; font-size: 0.84rem;"><?= $this->lang->line('stat_amount_sub'); ?></span>
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