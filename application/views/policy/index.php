<!-- Policy Hero -->
<section class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container-xxl">
        <div class="text-center max-w-800 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-shield-halved text-info"></i> Governance & Compliance
            </span>
            <h1 class="display-4 text-white fw-bold mb-3"><?= $this->lang->line('policy_hero_title'); ?></h1>
            <p class="lead text-slate fs-5"><?= $this->lang->line('policy_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Tab Navigation & Content Section -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">
        
        <!-- Service Area Limitation Notice -->
        <div class="alert alert-warning border-0 rounded-4 p-4 mb-5 d-flex align-items-center gap-3" style="background: rgba(245, 158, 11, 0.12); border: 1px solid rgba(245, 158, 11, 0.35) !important;">
            <div class="fs-2 text-warning"><i class="fas fa-map-location-dot"></i></div>
            <div>
                <h5 class="text-warning fw-bold mb-1"><?= $this->lang->line('area_limit_title'); ?></h5>
                <p class="text-white mb-0 fs-6"><?= $this->lang->line('area_limit_desc'); ?></p>
            </div>
        </div>

        <!-- Pills Header -->
        <div class="d-flex flex-wrap justify-content-center nav-pills-custom mb-5" id="policyPills" role="tablist">
            <button class="nav-link <?= (!isset($active_tab) || $active_tab == 'gov') ? 'active' : '' ?>" id="pills-gov-tab" data-bs-toggle="pill" data-bs-target="#pills-gov" type="button" role="tab">
                <i class="fas fa-certificate me-2"></i><?= $this->lang->line('tab_gov'); ?>
            </button>
            <button class="nav-link <?= (isset($active_tab) && $active_tab == 'privacy') ? 'active' : '' ?>" id="pills-privacy-tab" data-bs-toggle="pill" data-bs-target="#pills-privacy" type="button" role="tab">
                <i class="fas fa-lock me-2"></i><?= $this->lang->line('tab_privacy'); ?>
            </button>
            <button class="nav-link <?= (isset($active_tab) && $active_tab == 'terms') ? 'active' : '' ?>" id="pills-terms-tab" data-bs-toggle="pill" data-bs-target="#pills-terms" type="button" role="tab">
                <i class="fas fa-file-contract me-2"></i><?= $this->lang->line('tab_terms'); ?>
            </button>
            <button class="nav-link <?= (isset($active_tab) && $active_tab == 'agreement') ? 'active' : '' ?>" id="pills-agreement-tab" data-bs-toggle="pill" data-bs-target="#pills-agreement" type="button" role="tab">
                <i class="fas fa-file-signature me-2"></i><?= $this->lang->line('tab_agreement'); ?>
            </button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="policyPillsContent">
            
            <!-- 1. Governance & Licenses -->
            <div class="tab-pane fade <?= (!isset($active_tab) || $active_tab == 'gov') ? 'show active' : '' ?>" id="pills-gov" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('gov_lic_heading'); ?>
                    </h3>
                    <div class="p-3 rounded-3 mb-4" style="background: rgba(56, 189, 248, 0.12); border: 1px solid rgba(56, 189, 248, 0.3);">
                        <h5 class="text-info fw-bold mb-0"><?= $this->lang->line('gov_lic_no_label'); ?></h5>
                    </div>
                    <p class="text-slate fs-5 whitespace-pre-line mb-4" style="line-height: 1.85;">
                        <?= $this->lang->line('gov_lic_desc'); ?>
                    </p>
                    <a href="https://www.1359.go.th/picodoc/pico_public/" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 mb-5">
                        <i class="fas fa-external-link-alt me-2"></i> ตรวจสอบใบอนุญาตบนเว็บไซต์กระทรวงการคลัง (1359.go.th)
                    </a>

                    <hr class="my-5" style="border-color: rgba(255, 255, 255, 0.1);">

                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-warning ps-3">
                        <?= $this->lang->line('gov_dbd_heading'); ?>
                    </h3>
                    <p class="text-slate fs-5 whitespace-pre-line mb-0" style="line-height: 1.85;">
                        <?= $this->lang->line('gov_dbd_desc'); ?>
                    </p>
                </div>
            </div>

            <!-- 2. Privacy Policy PDPA -->
            <div class="tab-pane fade <?= (isset($active_tab) && $active_tab == 'privacy') ? 'show active' : '' ?>" id="pills-privacy" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('privacy_heading'); ?>
                    </h3>
                    <p class="text-slate fs-5 mb-4" style="line-height: 1.85;">
                        <?= $this->lang->line('privacy_intro'); ?>
                    </p>

                    <div class="row g-4 my-3">
                        <div class="col-lg-4">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass);">
                                <i class="fas fa-database text-info fs-3 mb-3"></i>
                                <h5 class="text-white fw-bold">1. การเก็บรวบรวมข้อมูล</h5>
                                <p class="text-muted small mb-0" style="line-height: 1.6;">ข้อมูลระบุตัวตน (ชื่อ-นามสกุล, บัตรประชาชน), ข้อมูลการติดต่อ (อีเมล, เบอร์โทร), ข้อมูลทางการเงินและบัญชีธนาคาร</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass);">
                                <i class="fas fa-shield-virus text-info fs-3 mb-3"></i>
                                <h5 class="text-white fw-bold">2. ความปลอดภัยข้อมูล</h5>
                                <p class="text-muted small mb-0" style="line-height: 1.6;">ปกป้องด้วยใบรับรองความปลอดภัย SSL 256-bit ส่งผ่านการเชื่อมต่อเข้ารหัส HTTPS ไปยังเซิร์ฟเวอร์ความปลอดภัยสูง</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-glass);">
                                <i class="fas fa-user-gear text-warning fs-3 mb-3"></i>
                                <h5 class="text-white fw-bold">3. สิทธิของผู้ใช้</h5>
                                <p class="text-muted small mb-0" style="line-height: 1.6;">สิทธิขอเข้าถึง แก้ไข ลบข้อมูลส่วนบุคคล (ถูกลืม) หรือถอนความยินยอมได้ตามกฎหมาย PDPA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Terms of Service -->
            <div class="tab-pane fade <?= (isset($active_tab) && $active_tab == 'terms') ? 'show active' : '' ?>" id="pills-terms" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('terms_heading'); ?>
                    </h3>
                    <p class="text-slate fs-5 mb-4" style="line-height: 1.85;">
                        <?= $this->lang->line('terms_intro'); ?>
                    </p>

                    <div class="p-4 rounded-4" style="background: rgba(0, 0, 0, 0.4); border: 1px solid var(--border-glass);">
                        <h5 class="text-white fw-bold mb-3">ผู้มีสิทธิใช้บริการ:</h5>
                        <ul class="text-slate mb-4 fs-6">
                            <li>มีอายุไม่ต่ำกว่า 20 ปีบริบูรณ์</li>
                            <li>มีรายได้หรือแหล่งรายได้ที่มั่นคง</li>
                            <li>มีบัญชีธนาคารในชื่อตนเอง</li>
                            <li>ให้ข้อมูลและเอกสารที่ถูกต้องครบถ้วน</li>
                        </ul>

                        <h5 class="text-white fw-bold mb-3">สรุปข้อตกลง 15 ข้อ:</h5>
                        <ol class="text-slate mb-0 fs-6" style="line-height: 1.85;">
                            <li class="mb-2"><strong>คำจำกัดความ:</strong> กำหนดนิยามเกี่ยวกับผู้กู้ ผู้ให้กู้ อุ่นใจแคช วันจ่ายเงินกู้ และวันครบกำหนด</li>
                            <li class="mb-2"><strong>การลงทะเบียนบัญชี:</strong> ลงทะเบียนเพียงครั้งเดียวเพื่อรับหมายเลขลูกค้า</li>
                            <li class="mb-2"><strong>การเบิกจ่ายเงินกู้:</strong> ต้องใช้ตามวัตถุประสงค์ ห้ามใช้ในกิจกรรมผิดกฎหมายหรือการพนัน</li>
                            <li class="mb-2"><strong>การโอนเงินกู้:</strong> โอนเข้าบัญชีธนาคารที่ลงทะเบียนไว้หลังอนุมัติ</li>
                            <li class="mb-2"><strong>การระงับหรือยกเลิก:</strong> หากผิดสัญญาหรือไม่สามารถชำระเงินตามกำหนด</li>
                            <li class="mb-2"><strong>วิธีการชำระคืน:</strong> ธนาคารออนไลน์ ฝากเข้าบัญชี หรือแจ้งรายละเอียดชำระ</li>
                            <li class="mb-2"><strong>ค่าธรรมเนียมและภาษี:</strong> ผู้กู้รับผิดชอบค่าใช้จ่ายตามสัญญา</li>
                            <li class="mb-2"><strong>การรับรองข้อมูล:</strong> ข้อมูลทั้งหมดที่ให้แก่ผู้ให้กู้เป็นความจริง</li>
                            <li class="mb-2"><strong>การผิดสัญญา:</strong> เรียกคืนเงินกู้ทั้งหมดทันที พร้อมดอกเบี้ยและค่าปรับ</li>
                            <li class="mb-2"><strong>การบอกเลิกสัญญา:</strong> สัญญามีผลตั้งแต่วันยอมรับเงื่อนไข</li>
                            <li class="mb-2"><strong>การปฏิบัติตามกฎหมาย:</strong> ตรวจสอบป้องกันการฟอกเงินและอาชญากรรมทางการเงิน</li>
                            <li class="mb-2"><strong>การระงับข้อพิพาท:</strong> เจรจากันก่อน หากไม่สำเร็จยื่นฟ้องต่อศาล</li>
                            <li class="mb-2"><strong>การโอนสิทธิ:</strong> ไม่สามารถโอนสิทธิให้ผู้อื่นโดยไม่ได้อนุญาต</li>
                            <li class="mb-2"><strong>การรับรองของผู้กู้:</strong> รับรองว่ามีความสามารถทางกฎหมายในการทำสัญญา</li>
                            <li class="mb-2"><strong>ช่องทางการติดต่อ:</strong> cs@infinitefintech.co.th / LINE: @-----------</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- 4. Loan Agreement Sample -->
            <div class="tab-pane fade <?= (isset($active_tab) && $active_tab == 'agreement') ? 'show active' : '' ?>" id="pills-agreement" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('agreement_heading'); ?>
                    </h3>
                    
                    <div class="p-4 rounded-4" style="background: rgba(0, 0, 0, 0.5); border: 1px solid var(--border-glass); font-family: monospace;">
                        <h4 class="text-center text-white fw-bold mb-4">สัญญาเงินกู้ (ตัวอย่าง)</h4>
                        <p class="text-muted text-center mb-4">สัญญานี้ทำขึ้น ณ วันที่ [DD/MM/YYYY]</p>

                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="p-3 rounded-3" style="background: rgba(255, 255, 255, 0.03);">
                                    <h6 class="text-info fw-bold">ผู้ให้กู้:</h6>
                                    <p class="text-slate mb-1"><strong>ชื่อบริษัท:</strong> บริษัท อินฟินิท ฟินเทค จำกัด</p>
                                    <p class="text-slate mb-1"><strong>ที่ตั้ง:</strong> 115 หมู่ที่ 2 ตำบลละหาร อำเภอบางบัวทอง จังหวัดนนทบุรี 11110</p>
                                    <p class="text-slate mb-0"><strong>อีเมล:</strong> cs@infinitefintech.co.th</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded-3" style="background: rgba(255, 255, 255, 0.03);">
                                    <h6 class="text-warning fw-bold">ผู้กู้:</h6>
                                    <p class="text-slate mb-1"><strong>ชื่อ:</strong> ________________________</p>
                                    <p class="text-slate mb-1"><strong>ที่อยู่:</strong> ________________________</p>
                                    <p class="text-slate mb-0"><strong>เลขประจำตัวประชาชน:</strong> ________________________</p>
                                </div>
                            </div>
                        </div>

                        <h5 class="text-white fw-bold mb-2">เงื่อนไขเงินกู้:</h5>
                        <ul class="text-slate mb-4 fs-6">
                            <li>จำนวนเงินกู้: ________ (บาท)</li>
                            <li>อัตราดอกเบี้ยต่อปี (APR): อัตราดอกเบี้ยคงที่ ____% ต่อปี</li>
                            <li>ระยะเวลาเงินกู้: ชำระคืนภายใน ____ วัน (ครบกำหนดวันที่ ______________)</li>
                            <li>ค่าทวงถามหนี้: 50 บาท นับตั้งแต่วันครบกำหนดชำระตามกฎหมายกำหนด</li>
                        </ul>

                        <div class="text-muted small">
                            *หมายเหตุ: ตัวอย่างสัญญาเงินกู้นี้จัดทำขึ้นเพื่อแสดงข้อตกลงและเงื่อนไขเบื้องต้น รายละเอียดสัญญาจริงจะถูกสร้างขึ้นในรูปแบบอิเล็กทรอนิกส์ผ่านแอปพลิเคชัน อุ่นใจแคช
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
