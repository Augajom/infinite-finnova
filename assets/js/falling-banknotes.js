/**
 * Falling Banknotes Background Effect
 * High-performance 60FPS Canvas Animation
 * Light Theme compatible with soft green/gold THB banknotes
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', initBanknoteRain);

    function initBanknoteRain() {
        const canvas = document.createElement('canvas');
        canvas.id = 'falling-banknotes-canvas';
        canvas.style.position = 'fixed';
        canvas.style.top = '0';
        canvas.style.left = '0';
        canvas.style.width = '100vw';
        canvas.style.height = '100vh';
        canvas.style.pointerEvents = 'none';
        canvas.style.zIndex = '1';
        canvas.style.opacity = '0.35';
        document.body.appendChild(canvas);

        const ctx = canvas.getContext('2d');
        let width = canvas.width = window.innerWidth;
        let height = canvas.height = window.innerHeight;

        window.addEventListener('resize', () => {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        });

        // Banknote denominations & colors
        const denominations = [
            { text: '฿1000', bg: '#475569', border: '#64748B', color: '#FFFFFF' }, // สีเทา
            { text: '฿500',  bg: '#7C3AED', border: '#8B5CF6', color: '#FFFFFF' }, // สีม่วง
            { text: '฿100',  bg: '#DC2626', border: '#EF4444', color: '#FFFFFF' }, // สีแดง
            { text: '฿50',   bg: '#0284C7', border: '#38BDF8', color: '#FFFFFF' }, // สีฟ้า
            { text: '฿20',   bg: '#16A34A', border: '#22C55E', color: '#FFFFFF' }  // สีเขียว
        ];

        const banknoteCount = width < 768 ? 15 : 30;
        const banknotes = [];

        for (let i = 0; i < banknoteCount; i++) {
            banknotes.push(createBanknote(true));
        }

        function createBanknote(isInitial) {
            const denom = denominations[Math.floor(Math.random() * denominations.length)];
            const banknoteWidth = Math.random() * 24 + 40; // 40px to 64px
            const banknoteHeight = banknoteWidth * 0.52;   // Aspect ratio ~1.9

            return {
                x: Math.random() * width,
                y: isInitial ? Math.random() * height : -60,
                width: banknoteWidth,
                height: banknoteHeight,
                denom: denom,
                speedY: Math.random() * 0.8 + 0.5,           // Fall speed
                speedX: Math.random() * 0.6 - 0.3,           // Drift speed
                swayFreq: Math.random() * 0.02 + 0.01,       // Sway frequency
                swayAmp: Math.random() * 1.5 + 0.5,          // Sway amplitude
                rotation: Math.random() * Math.PI * 2,
                rotSpeed: (Math.random() - 0.5) * 0.02,
                flip: Math.random() * Math.PI,
                flipSpeed: Math.random() * 0.03 + 0.01,
                opacity: Math.random() * 0.4 + 0.5
            };
        }

        function update() {
            ctx.clearRect(0, 0, width, height);

            for (let i = 0; i < banknotes.length; i++) {
                const b = banknotes[i];

                b.y += b.speedY;
                b.x += Math.sin(b.y * b.swayFreq) * b.swayAmp + b.speedX;
                b.rotation += b.rotSpeed;
                b.flip += b.flipSpeed;

                // Reset position when off-screen
                if (b.y > height + 60 || b.x < -60 || b.x > width + 60) {
                    banknotes[i] = createBanknote(false);
                    continue;
                }

                // Render 3D fluttering banknote
                ctx.save();
                ctx.translate(b.x, b.y);
                ctx.rotate(b.rotation);
                const scaleX = Math.cos(b.flip);
                ctx.scale(scaleX, 1);
                ctx.globalAlpha = b.opacity;

                // Banknote Background
                ctx.fillStyle = b.denom.bg;
                ctx.shadowColor = 'rgba(0, 0, 0, 0.15)';
                ctx.shadowBlur = 6;
                ctx.beginPath();
                ctx.roundRect(-b.width / 2, -b.height / 2, b.width, b.height, 4);
                ctx.fill();

                // Banknote Inner Border
                ctx.strokeStyle = b.denom.border;
                ctx.lineWidth = 1;
                ctx.strokeRect(-b.width / 2 + 3, -b.height / 2 + 3, b.width - 6, b.height - 6);

                // Banknote Text Symbol (฿)
                ctx.fillStyle = b.denom.color;
                ctx.font = 'bold ' + Math.floor(b.height * 0.48) + 'px "LINESeedSansTH", sans-serif';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(b.denom.text, 0, 1);

                ctx.restore();
            }

            requestAnimationFrame(update);
        }

        requestAnimationFrame(update);
    }
})();
