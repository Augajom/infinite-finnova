<!-- Services Hero -->
<section class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container-xxl">
        <div class="text-center max-w-800 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-hand-holding-dollar text-info"></i> PICO Finance Services
            </span>
            <h1 class="display-4 text-white fw-bold mb-3"><?= $this->lang->line('srv_hero_title'); ?></h1>
            <p class="lead text-slate fs-5"><?= $this->lang->line('srv_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Loan Specs & Conditions Block -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">
        <div class="card-3d p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="badge bg-info bg-opacity-25 text-info mb-2 px-3 py-2 rounded-pill fw-bold">PICO Finance</span>
                    <h2 class="display-6 text-white fw-bold mb-3"><?= $this->lang->line('pico_title'); ?></h2>
                    <p class="text-slate fs-5 mb-4" style="line-height: 1.8;"><?= $this->lang->line('srv_main_desc'); ?></p>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?= site_root_url('apply') ?>" class="btn-primary-3d">
                            <i class="fas fa-paper-plane"></i> <?= $this->lang->line('btn_apply_loan'); ?>
                        </a>
                        <a href="<?= $this->lang->line('home_license_check_url'); ?>" target="_blank" class="btn-outline-3d">
                            <i class="fas fa-external-link-alt"></i> <?= $this->lang->line('home_license_check_btn'); ?>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 rounded-4" style="background: linear-gradient(135deg, rgba(56, 189, 248, 0.15), rgba(4, 9, 20, 0.92)); border: 1px solid rgba(56, 189, 248, 0.35);">
                        <h4 class="text-white fw-bold mb-3 border-bottom pb-2" style="border-color: rgba(255, 255, 255, 0.1) !important;">
                            <i class="fas fa-circle-info text-info me-2"></i><?= $this->lang->line('srv_specs_title'); ?>
                        </h4>
                        
                        <?php $specs = $this->lang->line('srv_specs'); ?>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-3">
                            <li class="d-flex align-items-center text-white font-weight-bold fs-5">
                                <i class="fas fa-coins text-warning me-3 fs-4"></i> <?= $specs['max_amount']; ?>
                            </li>
                            <li class="d-flex align-items-center text-white font-weight-bold fs-5">
                                <i class="fas fa-calendar-days text-info me-3 fs-4"></i> <?= $specs['term']; ?>
                            </li>
                            <li class="d-flex align-items-center text-white font-weight-bold fs-5">
                                <i class="fas fa-percent text-success me-3 fs-4"></i> <?= $specs['rate']; ?>
                            </li>
                        </ul>

                        <div class="small text-muted border-top pt-3" style="border-color: rgba(255, 255, 255, 0.1) !important;">
                            <?= $specs['rate_note']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Qualifications & Documents Grid -->
        <div class="row g-4 mb-5">
            <!-- Qualifications -->
            <div class="col-lg-6">
                <div class="card-3d h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="card-icon-wrapper mb-0" style="width: 54px; height: 54px;">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4 class="text-white fw-bold mb-0"><?= $this->lang->line('qual_title'); ?></h4>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <?php $quals = $this->lang->line('qual_items'); ?>
                        <?php if (!empty($quals)): foreach ($quals as $item): ?>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-check-circle text-info mt-1 fs-5"></i>
                                <span class="text-slate fs-5"><?= $item; ?></span>
                            </li>
                        <?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>

            <!-- Required Documents -->
            <div class="col-lg-6">
                <div class="card-3d h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="card-icon-wrapper mb-0" style="width: 54px; height: 54px;">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h4 class="text-white fw-bold mb-0"><?= $this->lang->line('doc_title'); ?></h4>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <?php $docs = $this->lang->line('doc_items'); ?>
                        <?php if (!empty($docs)): foreach ($docs as $item): ?>
                            <li class="d-flex align-items-start gap-3">
                                <i class="fas fa-check-circle text-info mt-1 fs-5"></i>
                                <span class="text-slate fs-5"><?= $item; ?></span>
                            </li>
                        <?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Fast Approval Features (5 Points) -->
        <div class="text-center mb-4">
            <h2 class="display-6 text-white fw-bold mb-2"><?= $this->lang->line('fast_approval_title'); ?></h2>
            <p class="text-muted fs-5"><?= $this->lang->line('fast_approval_subtitle'); ?></p>
        </div>

        <div class="row g-4 mb-5 justify-content-center">
            <?php $fa_items = $this->lang->line('fast_approval_list'); ?>
            <?php if (!empty($fa_items)): foreach ($fa_items as $index => $item): ?>
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
            <?php endforeach; endif; ?>
        </div>

        <!-- Repayment Calculation Example (with TH / EN Image viewer) -->
        <div class="card-3d p-4 p-md-5">
            <div class="text-center mb-4">
                <span class="badge bg-warning bg-opacity-25 text-warning mb-2 px-3 py-2 rounded-pill fw-bold">Sample Calculation</span>
                <h3 class="text-white fw-bold mb-1"><?= $this->lang->line('calc_example_title'); ?></h3>
                <p class="text-muted small"><?= $this->lang->line('calc_example_subtitle'); ?></p>
                <div class="p-3 rounded-3 d-inline-block text-white fw-bold" style="background: rgba(56, 189, 248, 0.12); border: 1px solid rgba(56, 189, 248, 0.3);">
                    <?= $this->lang->line('calc_example_detail'); ?>
                </div>
            </div>

            <!-- Image Viewer Container -->
            <?php $current_lang = $this->session->userdata('site_lang'); ?>
            <div class="text-center my-4">
                <div class="d-inline-block p-2 rounded-4" style="background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(56, 189, 248, 0.3); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);">
                    <img id="calcExampleImg" src="<?= base_url('assets/images/' . (($current_lang == 'english') ? 'image2.png' : 'image1.png')) ?>" alt="Repayment Calculation Example" class="img-fluid rounded-3" style="max-height: 500px; object-fit: contain;">
                </div>
            </div>

            <div class="alert alert-dark border-0 rounded-4 text-muted small text-center mb-0" style="background: rgba(255, 255, 255, 0.03);">
                <i class="fas fa-circle-exclamation text-warning me-1"></i>
                <?= $this->lang->line('calc_example_note'); ?>
            </div>
        </div>

    </div>
</section>