// Three.js 3D WebGL Scroll-Driven & Responsive Auto-Rotation Scene
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('three-hero-container');
    if (!container || typeof THREE === 'undefined') return;

    // 1. Scene, Camera, Renderer Setup
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 15;

    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // 2. 3D Objects Group
    const mainGroup = new THREE.Group();
    scene.add(mainGroup);

    // Responsive Scale Adjustment
    function updateResponsiveScale() {
        const width = window.innerWidth;
        if (width < 576) {
            // Mobile Extra Small (50% scale)
            mainGroup.scale.set(0.48, 0.48, 0.48);
            camera.position.z = 17;
        } else if (width < 992) {
            // Tablet / Mobile Medium (70% scale)
            mainGroup.scale.set(0.68, 0.68, 0.68);
            camera.position.z = 16;
        } else {
            // Desktop (100% scale)
            mainGroup.scale.set(1.0, 1.0, 1.0);
            camera.position.z = 15;
        }
    }

    updateResponsiveScale();

    // Create 3D Central Gem (Sapphire Blue & Amethyst Purple Dual Tone)
    const geometry = new THREE.IcosahedronGeometry(3.5, 0);
    const material = new THREE.MeshPhysicalMaterial({
        color: 0x0284C7,
        emissive: 0x8B5CF6,
        emissiveIntensity: 0.35,
        roughness: 0.15,
        metalness: 0.85,
        clearcoat: 1.0,
        clearcoatRoughness: 0.1,
        transparent: true,
        opacity: 0.92
    });

    const centralMesh = new THREE.Mesh(geometry, material);
    mainGroup.add(centralMesh);

    // Outer Wireframe Ring (Glowing Sky Blue & Violet)
    const wireGeo = new THREE.IcosahedronGeometry(4.3, 1);
    const wireMat = new THREE.MeshBasicMaterial({
        color: 0x38BDF8,
        wireframe: true,
        transparent: true,
        opacity: 0.45
    });
    const wireMesh = new THREE.Mesh(wireGeo, wireMat);
    mainGroup.add(wireMesh);

    // Floating 3D Gold Accent Tokens
    const tokenGeo = new THREE.TorusGeometry(0.65, 0.22, 16, 32);
    const tokenMat = new THREE.MeshStandardMaterial({
        color: 0xF59E0B,
        metalness: 0.9,
        roughness: 0.2
    });

    const tokens = [];
    for (let i = 0; i < 8; i++) {
        const token = new THREE.Mesh(tokenGeo, tokenMat);
        const angle = (i / 8) * Math.PI * 2;
        const radius = 6.2 + Math.random() * 1.5;
        token.position.set(Math.cos(angle) * radius, Math.sin(angle) * radius, (Math.random() - 0.5) * 3);
        token.rotation.x = Math.random() * Math.PI;
        token.rotation.y = Math.random() * Math.PI;
        mainGroup.add(token);
        tokens.push({ mesh: token, speedX: (Math.random() * 0.015 + 0.005), speedY: (Math.random() * 0.015 + 0.005) });
    }

    // Floating 3D Blue & Violet Particle Cloud
    const particleCount = 220;
    const particleGeo = new THREE.BufferGeometry();
    const particlePos = new Float32Array(particleCount * 3);

    for (let i = 0; i < particleCount * 3; i += 3) {
        particlePos[i] = (Math.random() - 0.5) * 32;
        particlePos[i + 1] = (Math.random() - 0.5) * 32;
        particlePos[i + 2] = (Math.random() - 0.5) * 32;
    }

    particleGeo.setAttribute('position', new THREE.BufferAttribute(particlePos, 3));
    const particleMat = new THREE.PointsMaterial({
        color: 0xC084FC,
        size: 0.09,
        transparent: true,
        opacity: 0.75
    });
    const particles = new THREE.Points(particleGeo, particleMat);
    scene.add(particles);

    // 3. Lighting Setup (Blue & Purple Directional Lights)
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.9);
    scene.add(ambientLight);

    const dirLight1 = new THREE.DirectionalLight(0x8B5CF6, 3.2);
    dirLight1.position.set(10, 10, 10);
    scene.add(dirLight1);

    const dirLight2 = new THREE.DirectionalLight(0x38BDF8, 2.5);
    dirLight2.position.set(-10, -10, -10);
    scene.add(dirLight2);

    const pointLight = new THREE.PointLight(0x0284C7, 4.0, 25);
    pointLight.position.set(0, 0, 5);
    scene.add(pointLight);

    // 4. Scroll Tracking & Smooth Interpolation
    let targetScrollY = 0;
    let currentScrollY = 0;

    window.addEventListener('scroll', () => {
        targetScrollY = window.scrollY || window.pageYOffset;
    });

    // 5. Smooth Continuous Animation Loop with Scroll Rotation
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);

        const elapsedTime = clock.getElapsedTime();

        // Smoothly interpolate scroll value (Lerp)
        currentScrollY += (targetScrollY - currentScrollY) * 0.08;

        // Combine Scroll Rotation + Base Auto Rotation
        const scrollRotationY = currentScrollY * 0.0035;
        const scrollRotationX = currentScrollY * 0.0015;

        mainGroup.rotation.y = (elapsedTime * 0.2) + scrollRotationY;
        mainGroup.rotation.x = Math.sin(elapsedTime * 0.25) * 0.2 + scrollRotationX;
        mainGroup.position.y = Math.sin(elapsedTime * 0.8) * 0.35;

        wireMesh.rotation.y = -elapsedTime * 0.4 - (currentScrollY * 0.002);
        wireMesh.rotation.z = elapsedTime * 0.2;

        particles.rotation.y = elapsedTime * 0.05 + (currentScrollY * 0.0005);
        particles.rotation.x = elapsedTime * 0.02;

        tokens.forEach(t => {
            t.mesh.rotation.x += t.speedX;
            t.mesh.rotation.y += t.speedY;
        });

        renderer.render(scene, camera);
    }

    animate();

    // 6. Responsive Window Resize & Dynamic Scale Adjustment
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
        updateResponsiveScale();
    });
});
