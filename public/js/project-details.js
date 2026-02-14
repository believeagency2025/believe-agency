document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const projectId = urlParams.get('id');

    if (!projectId) {
        window.location.href = 'projects.html';
        return;
    }

    // Projects Data Configuration
    const projectsData = {
        "mazzawi": {
            titleKey: "webdesign_title",
            descKey: "webdesign_desc",
            categoryKey: "projects.category_web",
            clientName: "Mazzawi Contracting LLC",
            duration: "2 Months",
            websiteUrl: "https://mazzawi.ae",
            overviewTitleKey: "webdesign_overview_title",
            overviewDescKey: "webdesign_overview_desc",
            featuresTitleKey: "webdesign_features_title",
            features: [
                "webdesign_feature1",
                "webdesign_feature2",
                "webdesign_feature3",
                "webdesign_feature4",
                "webdesign_feature5"
            ],
            techStack: [
                { icon: "fab fa-html5", name: "HTML5" },
                { icon: "fab fa-css3-alt", name: "CSS3" },
                { icon: "fab fa-js", name: "JavaScript" },
                { icon: "fab fa-wordpress", name: "WordPress" }
            ],
            results: [
                { value: "100%", labelKey: "webdesign_result1" },
                { value: "+40%", labelKey: "webdesign_result3" }
            ],
            testimonial: {
                textKey: "webdesign_testimonial_text",
                nameKey: "webdesign_testimonial_name",
                roleKey: "webdesign_testimonial_role"
            },
            images: [
                "img/portfolio/Web Design & Development/Mazzawi/mazzawi-1.webp",
                "img/portfolio/Web Design & Development/Mazzawi/mazzawi-2.webp",
                "img/portfolio/Web Design & Development/Mazzawi/mazzawi-3.webp",
                "img/portfolio/Web Design & Development/Mazzawi/mazzawi-4.webp"
            ]
        },
        "noor-alsham": {
            titleKey: "pharma_title",
            descKey: "pharma_desc",
            categoryKey: "projects.category_web",
            clientName: "Noor Al Sham PHARMA",
            duration: "6 Weeks",
            websiteUrl: "https://nooralsham-pharma.com",
            overviewTitleKey: "pharma_overview_title",
            overviewDescKey: "pharma_overview_desc",
            featuresTitleKey: "pharma_features_title",
            features: [
                "pharma_feature1", "pharma_feature2", "pharma_feature3",
                "pharma_feature4", "pharma_feature5", "pharma_feature6"
            ],
            techStack: [
                { icon: "fab fa-html5", name: "HTML5" },
                { icon: "fab fa-css3-alt", name: "CSS3" },
                { icon: "fab fa-js", name: "JavaScript" },
                { icon: "fab fa-wordpress", name: "WordPress" }
            ],
            testimonial: {
                textKey: "pharma_testimonial_text",
                nameKey: "pharma_testimonial_name",
                roleKey: "pharma_testimonial_role"
            },
            images: [
                "img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-1.webp",
                "img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-2.webp",
                "img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-3.webp",
                "img/portfolio/Web Design & Development/Noor-Alsham/noor_alsham-4.webp"
            ]
        },
        "abby-physics": {
            titleKey: "app_title",
            descKey: "app_desc",
            categoryKey: "projects.category_app",
            clientName: "Abby Physics",
            duration: "3 Months",
            websiteUrl: "#", // App Store link ideally
            featuresTitleKey: "app_features_title",
            features: [
                { titleKey: "app_feature1_title", descKey: "app_feature1_desc", icon: "fas fa-chalkboard-teacher" },
                { titleKey: "app_feature2_title", descKey: "app_feature2_desc", icon: "fas fa-calculator" },
                { titleKey: "app_feature3_title", descKey: "app_feature3_desc", icon: "fas fa-atom" }
            ],
            techStack: [
                { icon: "fab fa-flutter", name: "Flutter" },
                { icon: "fas fa-database", name: "Firebase" },
                { icon: "fab fa-android", name: "Android" },
                { icon: "fab fa-apple", name: "iOS" }
            ],
            images: [
                "img/portfolio/Apps Development/Abby Physics/abby-1.webp",
                "img/portfolio/Apps Development/Abby Physics/abby-2.webp",
                "img/portfolio/Apps Development/Abby Physics/abby-3.webp",
                "img/portfolio/Apps Development/Abby Physics/abby-4.webp"
            ]
        },
        "almonasib": {
            titleKey: "almonasib_title",
            descKey: "almonasib_desc",
            categoryKey: "projects.category_app",
            clientName: "AlMonasib",
            duration: "4 Months",
            websiteUrl: "#",
            featuresTitleKey: "almonasib_features_title",
            features: [
                { titleKey: "almonasib_feature1_title", descKey: "almonasib_feature1_desc", icon: "fas fa-users" },
                { titleKey: "almonasib_feature2_title", descKey: "almonasib_feature2_desc", icon: "fas fa-chart-bar" }
            ],
            techStack: [
                { icon: "fab fa-react", name: "React Native" },
                { icon: "fas fa-server", name: "Node.js" }
            ],
            images: [
                "img/portfolio/Apps Development/Almonasib/almonasib-1.webp",
                "img/portfolio/Apps Development/Almonasib/almonasib-2.webp"
            ]
        },
        "brochure": {
            titleKey: "brochure_title",
            descKey: "brochure_desc",
            categoryKey: "projects.category_branding",
            clientName: "Noor Al Sham PHARMA",
            duration: "2 Weeks",
            websiteUrl: "#",
            images: [
                "img/portfolio/Branding & Creative Design/brochure design/1.webp",
                "img/portfolio/Branding & Creative Design/brochure design/2.webp",
                "img/portfolio/Branding & Creative Design/brochure design/3.webp",
                "img/portfolio/Branding & Creative Design/brochure design/4.webp",
                "img/portfolio/Branding & Creative Design/brochure design/5.webp"
            ]
        },
        "company-profile": {
            titleKey: "profile_title",
            descKey: "profile_intro",
            categoryKey: "projects.category_branding",
            clientName: "Kenze Capital",
            duration: "3 Weeks",
            websiteUrl: "#",
            images: [
                "img/portfolio/Branding & Creative Design/company profile/1.webp",
                "img/portfolio/Branding & Creative Design/company profile/2.webp",
                "img/portfolio/Branding & Creative Design/company profile/3.webp",
                "img/portfolio/Branding & Creative Design/company profile/4.webp"
            ]
        },
        "media-buying": {
            titleKey: "projects.project5_title",
            descKey: "projects.project5_description",
            categoryKey: "projects.category_marketing",
            clientName: "Various Clients",
            duration: "Ongoing",
            websiteUrl: "#",
            images: [
                "img/portfolio/Digital Marketing/media buying/media-1.webp",
                "img/portfolio/Digital Marketing/media buying/media-2.webp",
                "img/portfolio/Digital Marketing/media buying/media-3.webp"
            ]
        },
        "branding": {
            titleKey: "projects.project6_title",
            descKey: "projects.project6_description",
            categoryKey: "projects.category_branding",
            clientName: "AB Creates",
            duration: "1 Month",
            websiteUrl: "#",
            images: [
                "img/portfolio/Branding & Creative Design/Branding/branding1.webp",
                "img/portfolio/Branding & Creative Design/Branding/branding2.webp",
                "img/portfolio/Branding & Creative Design/Branding/branding3.webp"
            ]
        },
        "ecommerce": {
            titleKey: "projects.project9_title",
            descKey: "projects.project9_description",
            categoryKey: "projects.category_ecommerce",
            clientName: "Mas ALRiyadh",
            duration: "2 Months",
            websiteUrl: "#",
            images: [
                "img/portfolio/E-commerce/Mas App/mas1.jpg",
                "img/portfolio/E-commerce/Mas App/mas2.jpg",
                "img/portfolio/E-commerce/Mas App/mas3.jpg"
            ]
        }
    };

    const project = projectsData[projectId];
    if (!project) {
        window.location.href = 'projects.html';
        return;
    }

    // --- Render Content ---

    // 1. Text Content
    const setElementText = (id, key) => {
        const el = document.getElementById(id);
        if (el && key) el.setAttribute('data-i18n', key);
    };

    setElementText('project-title', project.titleKey);
    setElementText('project-desc', project.descKey);
    setElementText('project-category', project.categoryKey);

    // Overview
    const overviewEl = document.getElementById('project-long-desc');
    if (overviewEl) {
        const descKey = project.overviewDescKey || project.descKey;
        overviewEl.setAttribute('data-i18n', descKey);
    }

    // 2. Swiper Gallery (With Lightbox)
    const galleryWrapper = document.getElementById('gallery-wrapper');
    if (galleryWrapper && project.images) {
        galleryWrapper.innerHTML = project.images.map(img => `
            <div class="swiper-slide">
                <a href="${img}" class="glightbox" data-gallery="project-gallery">
                    <img src="${img}" alt="Project Image" loading="lazy" />
                </a>
            </div>
        `).join('');

        // Initialize Swiper
        new Swiper(".mySwiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            keyboard: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 30,
        });

        // Initialize GLightbox
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true
        });
    }

    // 3. Sidebar Info
    if (project.clientName) document.getElementById('info-client').textContent = project.clientName;
    if (project.categoryKey) document.getElementById('info-category').setAttribute('data-i18n', project.categoryKey);
    if (project.duration) document.getElementById('info-duration').textContent = project.duration;

    const websiteBtn = document.getElementById('info-website-btn');
    if (project.websiteUrl && project.websiteUrl !== "#") {
        websiteBtn.href = project.websiteUrl;
    } else {
        websiteBtn.style.display = 'none'; // Hide if no URL
    }

    // 4. Features (Sidebar or Main based on HTML)
    // In HTML step 338, features-section is in the Main Column (Left)
    const featuresSection = document.getElementById('features-section');
    const featuresGrid = document.getElementById('features-grid');

    if (project.features && project.features.length > 0) {
        featuresSection.classList.remove('hidden');
        if (project.featuresTitleKey) {
            document.getElementById('features-title').setAttribute('data-i18n', project.featuresTitleKey);
        }

        featuresGrid.innerHTML = project.features.map(feature => {
            if (typeof feature === 'string') {
                return `
                    <div class="flex items-start p-4 bg-gray-50 dark:bg-slate-700/50 rounded-xl">
                        <i class="fas fa-check-circle text-brand-500 mt-1 mr-3"></i>
                        <span class="text-gray-700 dark:text-gray-300 font-medium" data-i18n="${feature}"></span>
                    </div>
                `;
            } else {
                return `
                    <div class="flex items-start p-4 bg-gray-50 dark:bg-slate-700/50 rounded-xl">
                        <div class="text-brand-500 text-xl mr-3"><i class="${feature.icon}"></i></div>
                        <div>
                            <h4 class="font-bold dark:text-white" data-i18n="${feature.titleKey}"></h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400" data-i18n="${feature.descKey}"></p>
                        </div>
                    </div>
                `;
            }
        }).join('');
    }

    // 5. Tech Stack (Sidebar)
    const techSection = document.getElementById('tech-section-sidebar');
    const techTags = document.getElementById('tech-tags');
    if (project.techStack && project.techStack.length > 0) {
        techSection.classList.remove('hidden');
        techTags.innerHTML = project.techStack.map(tech => `
            <span class="px-3 py-1 bg-white dark:bg-slate-800 border border-gray-200 dark:border-gray-700 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-300 flex items-center gap-2">
                <i class="${tech.icon}"></i> ${tech.name}
            </span>
        `).join('');
    }

    // 6. Results (Sidebar)
    const resultsSection = document.getElementById('results-section-sidebar');
    const resultsList = document.getElementById('results-list');
    if (project.results && project.results.length > 0) {
        resultsSection.classList.remove('hidden');
        resultsList.innerHTML = project.results.map(res => `
            <div class="flex justify-between items-center border-b border-gray-200 dark:border-gray-700 pb-2 last:border-0">
                <span class="text-sm text-gray-500 dark:text-gray-400" data-i18n="${res.labelKey}"></span>
                <span class="font-bold text-brand-600 dark:text-brand-400">${res.value}</span>
            </div>
        `).join('');
    }

    // 7. Testimonial (Main Column)
    const testimonialSection = document.getElementById('testimonial-section');
    if (project.testimonial) {
        testimonialSection.classList.remove('hidden');
        setElementText('testimonial-text', project.testimonial.textKey);
        document.getElementById('testimonial-name').setAttribute('data-i18n', project.testimonial.nameKey);
        document.getElementById('testimonial-role').setAttribute('data-i18n', project.testimonial.roleKey);
    }

    // Apply translations
    const currentLang = document.documentElement.lang || 'en';
    if (window.setLanguage) {
        setLanguage(currentLang);
    }
});
