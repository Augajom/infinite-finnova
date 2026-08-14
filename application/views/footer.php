<!-- Futuristic Footer -->
<footer class="footer-futuristic">
    <div class="container-xxl">
        <div class="row g-4 justify-content-between">
            
            <!-- Company Info & PICO License -->
            <div class="col-lg-5 col-md-6">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="INFINITE FINTECH" style="height: 48px; object-fit: contain;">
                    <h5 class="text-white fw-bold"><?= $this->lang->line('company_fullname'); ?></h5>
                </div>
                <p class="text-muted small mb-3" style="white-space: pre-line;">
                    <?= $this->lang->line('footer_desc'); ?>
                </p>
                <div class="p-3 rounded-3 mb-3" style="background: rgba(254, 255, 255, 0.06); border: 1px solid rgba(16, 185, 129, 0.2);">
                    <div class="small text-white-50 mb-2">
                        <i class="fas fa-certificate text-success me-2"></i><?= nl2br($this->lang->line('footer_lic_info')); ?>
                    </div>
                    <a href="<?= $this->lang->line('home_license_check_url'); ?>" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 text-nowrap">
                        <i class="fas fa-external-link-alt me-1"></i> <?= $this->lang->line('footer_lic_verify'); ?>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white fw-bold mb-3"><?= $this->lang->line('footer_quick_links'); ?></h5>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="<?= site_root_url() ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-chevron-right me-2 small"></i><?= $this->lang->line('nav_home'); ?></a></li>
                    <li><a href="<?= site_root_url('about') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-chevron-right me-2 small"></i><?= $this->lang->line('nav_about'); ?></a></li>
                    <li><a href="<?= site_root_url('services') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-chevron-right me-2 small"></i><?= $this->lang->line('nav_services'); ?></a></li>
                    <li><a href="<?= site_root_url('apply') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-chevron-right me-2 small"></i><?= $this->lang->line('nav_apply'); ?></a></li>
                    <li><a href="<?= site_root_url('contact') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-chevron-right me-2 small"></i><?= $this->lang->line('nav_contact'); ?></a></li>
                </ul>
            </div>

            <!-- Legal Policies -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white fw-bold mb-3"><?= $this->lang->line('footer_legal_links'); ?></h5>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="<?= site_root_url('policy/gov') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-shield-halved me-2 small"></i><?= $this->lang->line('tab_gov'); ?></a></li>
                    <li><a href="<?= site_root_url('policy/privacy') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-lock me-2 small"></i><?= $this->lang->line('tab_privacy'); ?></a></li>
                    <li><a href="<?= site_root_url('policy/terms') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-file-contract me-2 small"></i><?= $this->lang->line('tab_terms'); ?></a></li>
                    <li><a href="<?= site_root_url('policy/agreement') ?>" class="text-muted text-decoration-none hover-emerald"><i class="fas fa-file-signature me-2 small"></i><?= $this->lang->line('tab_agreement'); ?></a></li>
                </ul>
            </div>

        </div>

        <hr class="my-4" style="border-color: rgba(255, 255, 255, 0.08);">

        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center text-muted small gap-2">
            <div>
                &copy; <?= date('Y'); ?> <?= $this->lang->line('company_fullname'); ?>. <?= $this->lang->line('footer_rights'); ?>
            </div>
        </div>
    </div>
</footer>

</div> <!-- End .main-wrapper -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Falling Banknotes Effect Script -->
<script src="<?= base_url('assets/js/falling-banknotes.js') ?>"></script>

<style>
/* Scroll Reveal Fade-in Animations */
.reveal-on-scroll {
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
    will-change: opacity, transform;
}
.reveal-on-scroll.is-visible {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- Navbar Scroll Effect & IntersectionObserver Scroll Reveal Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Navbar Scrolled State
    const nav = document.getElementById('mainNavbar');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    }

    // 2. IntersectionObserver Scroll Reveal Fade-in Effect
    const revealTargets = document.querySelectorAll('.card-3d, section h1, section h2, .accordion-item, .hero-section .text-center, .reveal-on-scroll');
    
    revealTargets.forEach(el => {
        if (!el.classList.contains('reveal-on-scroll')) {
            el.classList.add('reveal-on-scroll');
        }
    });

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -40px 0px',
        threshold: 0.12
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                obs.unobserve(entry.target);
            }
        });
    }, observerOptions);

    revealTargets.forEach(el => observer.observe(el));
});
</script>

</body>
</html>