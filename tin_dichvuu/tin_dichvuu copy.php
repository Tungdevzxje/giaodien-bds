<style>
    :root {
        --primary-color: #8B4513;
        --secondary-color: #e0d6c2;
        --good-color: #4CAF50;
        --bad-color: #F44336;
        --neutral-color: #2196F3;
    }


    h1 {
        color: var(--primary-color);
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
    }

    .tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .tab-btn {
        padding: 10px 20px;
        margin: 0 5px 10px;
        background-color: var(--secondary-color);
        border: 1px solid var(--primary-color);
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s;
    }

    .tab-btn:hover {
        background-color: var(--primary-color);
        color: white;
    }

    .tab-btn.active {
        background-color: var(--primary-color);
        color: white;
    }

    .tab-content {
        display: none;
        padding: 20px;
        border: 1px solid var(--primary-color);
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .tab-content.active {
        display: block;
    }

    .ruler-container {
        position: relative;
        height: 220px;
        margin-bottom: 30px;
        overflow: hidden;
        border: 1px solid var(--primary-color);
        background-color: #f0e6d2;
        border-radius: 3px;
    }

    .ruler {
        position: absolute;
        top: 0;
        height: 100%;
        white-space: nowrap;
        font-size: 0;
        will-change: transform;
        user-select: none;
    }

    .cm-section {
        display: inline-block;
        width: 60px;
        height: 100%;
        text-align: center;
        position: relative;
        border-right: 1px solid #ccc;
    }

    .cm-number {
        position: absolute;
        bottom: 10px;
        width: 100%;
        font-size: 12px;
        font-weight: bold;
    }

    .cm-line {
        position: absolute;
        bottom: 40px;
        width: 100%;
        height: 30px;
        border-left: 1px solid #000;
    }

    .mm-line {
        position: absolute;
        bottom: 40px;
        width: 100%;
        height: 15px;
        border-left: 1px solid #ccc;
    }

    .cung-name {
        position: absolute;
        top: 10px;
        width: 100%;
        font-size: 11px;
        font-weight: bold;
        color: var(--primary-color);
    }

    .indicator {
        position: absolute;
        top: 0;
        left: 50%;
        width: 2px;
        height: 100%;
        background-color: red;
        z-index: 10;
        transform: translateX(-50%);
        pointer-events: none;
    }

    .value-display {
        font-size: 24px;
        text-align: center;
        margin: 15px 0;
        font-weight: bold;
        color: var(--primary-color);
    }

    .result-container {
        padding: 15px;
        border: 1px solid var(--primary-color);
        border-radius: 5px;
        background-color: #fff;
        margin-top: 20px;
    }

    .result-title {
        font-size: 18px;
        margin-bottom: 10px;
        color: var(--primary-color);
    }

    .good {
        color: var(--good-color);
        font-weight: bold;
    }

    .bad {
        color: var(--bad-color);
        font-weight: bold;
    }

    .neutral {
        color: var(--neutral-color);
        font-weight: bold;
    }

    .ruler-controls {
        display: flex;
        justify-content: center;
        margin-top: 15px;
        gap: 10px;
    }

    button {
        padding: 8px 15px;
        background-color: var(--primary-color);
        /* color: white; */
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #6d3a0a;
    }

    .fengshui-key {
        margin-top: 20px;
        font-size: 14px;
        border-top: 1px dashed var(--primary-color);
        padding-top: 10px;
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .fengshui-key span {
        display: flex;
        align-items: center;
    }

    .fengshui-key span::before {
        content: "";
        display: inline-block;
        width: 12px;
        height: 12px;
        margin-right: 5px;
        border-radius: 2px;
    }

    .good::before {
        background-color: var(--good-color);
    }

    .bad::before {
        background-color: var(--bad-color);
    }

    .neutral::before {
        background-color: var(--neutral-color);
    }

    @media (max-width: 600px) {


        .cm-number {
            font-size: 10px;
            bottom: 5px;
        }

        .cung-name {
            font-size: 9px;
            top: 5px;
        }

        .cm-line {
            bottom: 30px;
            height: 25px;
        }

        .mm-line {
            bottom: 30px;
            height: 12px;
        }

        h1 {
            font-size: 24px;
        }
    }
</style>



<h1 style="padding-top: 100px;">THƯỚC LỖ BAN CHUẨN PHONG THỦY</h1>

<div class="tabs">
    <button class="tab-btn active" onclick="openTab(event, 'ruler1')">Thước 52.2cm: Thông Thủy (cửa, cửa sổ
        ...)</button>
    <button class="tab-btn" onclick="openTab(event, 'ruler2')">Thước 42.9cm: Dương Trạch (bếp , bệ , bậc...)</button>
    <button class="tab-btn" onclick="openTab(event, 'ruler3')">Thước 38.8cm: Âm Trạch (bàn thờ, tủ...)</button>
</div>

<!-- Thước Lỗ Ban 52.2cm - Thông Thủy -->
<div id="ruler1" class="tab-content active">
    <div class="ruler-container" id="rulerContainer1">
        <div class="ruler" id="ruler1Ruler"></div>
        <div class="indicator"></div>
    </div>
    <div class="value-display">
        Kích thước: <span id="value1">0</span> cm
    </div>
    <!-- <div class="ruler-controls">
        <button onclick="centerRuler(1)">Cân đối</button>
        <button onclick="resetRuler(1)">Về 0</button>
    </div> -->
    <div class="ruler-controls">
        <input type="text" id="inputValue1" placeholder="Nhập kích thước (cm)"
            style="width: 150px; padding: 5px; margin-right: 10px;">
        <button style="color: white;" onclick="setRulerValue(1)">Đặt kích thước</button>

        <button style="color: white;" onclick="centerRuler(1)">Cân đối</button>
        <button style="color: white;" onclick="resetRuler(1)">Về 0</button>
    </div>

    <div class="result-container">
        <div class="result-title">KẾT QUẢ PHONG THỦY</div>
        <div id="result1">Kéo thước để xem kết quả</div>
        <div id="detail1" style="margin-top: 10px; font-size: 14px;"></div>
    </div>
    <div class="fengshui-key">
        <span class="good">Tốt</span>
        <span class="neutral">Bình thường</span>
        <span class="bad">Xấu</span>
    </div>
</div>

<!-- Thước Lỗ Ban 42.9cm - Dương Trạch -->
<div id="ruler2" class="tab-content">
    <div class="ruler-container" id="rulerContainer2">
        <div class="ruler" id="ruler2Ruler"></div>
        <div class="indicator"></div>
    </div>
    <div class="value-display">
        Kích thước: <span id="value2">0</span> cm
    </div>
    <div class="ruler-controls">
        <input type="text" id="inputValue2" placeholder="Nhập kích thước (cm)"
            style="width: 150px; padding: 5px; margin-right: 10px;">
        <button style="color: white;" onclick="setRulerValue(2)">Đặt kích thước</button>

        <button style="color: white;" onclick="centerRuler(2)">Cân đối</button>
        <button style="color: white;" onclick="resetRuler(2)">Về 0</button>
    </div>
    <div class="result-container">
        <div class="result-title">KẾT QUẢ PHONG THỦY</div>
        <div id="result2">Kéo thước để xem kết quả</div>
        <div id="detail2" style="margin-top: 10px; font-size: 14px;"></div>
    </div>
    <div class="fengshui-key">
        <span class="good">Tốt</span>
        <span class="neutral">Bình thường</span>
        <span class="bad">Xấu</span>
    </div>
</div>

<!-- Thước Lỗ Ban 38.8cm - Âm Trạch -->
<div id="ruler3" class="tab-content">
    <div class="ruler-container" id="rulerContainer3">
        <div class="ruler" id="ruler3Ruler"></div>
        <div class="indicator"></div>
    </div>
    <div class="value-display">
        Kích thước: <span id="value3">0</span> cm
    </div>
    <div class="ruler-controls">
        <input type="text" id="inputValue3" placeholder="Nhập kích thước (cm)"
            style="width: 150px; padding: 5px; margin-right: 10px;">
        <button style="color: white;" onclick="setRulerValue(3)">Đặt kích thước</button>

        <button style="color: white;" onclick="centerRuler(3)">Cân đối</button>
        <button style="color: white;" onclick="resetRuler(3)">Về 0</button>
    </div>
    <div class="result-container">
        <div class="result-title">KẾT QUẢ PHONG THỦY</div>
        <div id="result3">Kéo thước để xem kết quả</div>
        <div id="detail3" style="margin-top: 10px; font-size: 14px;"></div>
    </div>
    <div class="fengshui-key">
        <span class="good">Tốt</span>
        <span class="neutral">Bình thường</span>
        <span class="bad">Xấu</span>
    </div>
</div>

<script>
    const rulerState = {
        1: { currentX: 0 },
        2: { currentX: 0 },
        3: { currentX: 0 }
    };
    // Dữ liệu các cung cho từng loại thước Lỗ Ban
    const rulerData = {
        ruler1: {
            length: 52.0, // 520mm
            cungSize: 6.5, // 65mm / 10 = 6.5cm
            cungs: [
                { name: "Quý Nhân", status: "good", detail: "Cung tốt: Quý nhân phù trợ." },
                { name: "Hiểm Họa", status: "bad", detail: "Cung xấu: Gặp nguy hiểm." },
                { name: "Thiên Tai", status: "bad", detail: "Cung xấu: Thiên tai, hỏa hoạn." },
                { name: "Thiên Tài", status: "good", detail: "Cung tốt: Tài lộc trời ban." },
                { name: "Nhân Lộc", status: "good", detail: "Cung tốt: Nhà có phúc, con cháu hiếu." },
                { name: "Cô Độc", status: "bad", detail: "Cung xấu: Cô đơn, sức khỏe yếu." },
                { name: "Thiên Tặc", status: "bad", detail: "Cung xấu: Trộm cướp, hao tài." },
                { name: "Tể Tướng", status: "good", detail: "Cung tốt: Danh vọng, chức lộc." }
            ]
        },
        ruler2: {
            length: 42.9,
            cungSize: 5.3625, // 53.625mm / 10
            cungs: [
                { name: "Tài", status: "good", detail: "Cung tốt: Tài lộc, phát đạt." },
                { name: "Bệnh", status: "bad", detail: "Cung xấu: Bệnh tật, ốm yếu." },
                { name: "Ly", status: "bad", detail: "Cung xấu: Ly tán, rạn nứt." },
                { name: "Nghĩa", status: "good", detail: "Cung tốt: Nghĩa khí, đoàn kết." },
                { name: "Quan", status: "good", detail: "Cung tốt: Công danh thăng tiến." },
                { name: "Nạn", status: "bad", detail: "Cung xấu: Tai họa, khó khăn." },
                { name: "Hại", status: "bad", detail: "Cung xấu: Tránh hao tổn." },
                { name: "Mạng", status: "good", detail: "Cung tốt: Gia đạo ổn định." }
            ]
        },
        ruler3: {
            length: 38.8,
            cungSize: 3.88, // 38.8cm /10
            cungs: [
                { name: "Đinh", status: "good", detail: "Cung tốt: Công danh, tài lộc." },
                { name: "Hại", status: "bad", detail: "Cung xấu: Tổn hại, bệnh tật." },
                { name: "Vượng", status: "good", detail: "Cung tốt: Phúc khí, thịnh vượng." },
                { name: "Khổ", status: "bad", detail: "Cung xấu: Khó nhọc, gian truân." },
                { name: "Nghĩa", status: "good", detail: "Cung tốt: Nghĩa khí, tốt đẹp." },
                { name: "Quan", status: "good", detail: "Cung tốt: Danh vọng, địa vị." },
                { name: "Tử", status: "bad", detail: "Cung xấu: Chết chóc, kiêng kỵ." },
                { name: "Hưng", status: "good", detail: "Cung tốt: Hưng thịnh, phát triển." },
                { name: "Thất", status: "bad", detail: "Cung xấu: Thất bại, hao hụt." },
                { name: "Tài", status: "good", detail: "Cung tốt: Tài lộc, dư dả." }
            ]
        }
    };


    function openTab(evt, tabId) {
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
        evt.currentTarget.classList.add('active');
        document.getElementById(tabId).classList.add('active');
    }

    // Tạo thước cho từng loại
    function createRuler(rulerId, rulerLength, cungSize, cungs) {
        const rulerEl = document.getElementById(`${rulerId}Ruler`);
        rulerEl.innerHTML = '';
        const totalCm = Math.ceil(rulerLength * 20); // Tạo dài hơn để kéo

        for (let i = 0; i <= totalCm; i++) {
            const section = document.createElement('div');
            section.className = 'cm-section';
            const cm = i % rulerLength;
            const cungIndex = Math.floor((cm % rulerLength) / cungSize);
            const cung = cungs[cungIndex];

            const cmLine = document.createElement('div');
            cmLine.className = 'cm-line';
            section.appendChild(cmLine);

            const cmNumber = document.createElement('div');
            cmNumber.className = 'cm-number';
            cmNumber.textContent = i;
            section.appendChild(cmNumber);

            const cungName = document.createElement('div');
            cungName.className = 'cung-name ' + cung.status;
            cungName.textContent = cung.name;
            section.appendChild(cungName);

            rulerEl.appendChild(section);
        }

        // Khởi tạo kéo
        initDrag(rulerId, rulerLength, cungSize, cungs);
    }

    function initDrag(rulerId, length, cungSize, cungs) {
        const ruler = document.getElementById(`${rulerId}Ruler`);
        const container = document.getElementById(`rulerContainer${rulerId.charAt(rulerId.length - 1)}`);
        const valueSpan = document.getElementById(`value${rulerId.charAt(rulerId.length - 1)}`);
        const result = document.getElementById(`result${rulerId.charAt(rulerId.length - 1)}`);
        const detail = document.getElementById(`detail${rulerId.charAt(rulerId.length - 1)}`);

        let isDragging = false;
        let startX = 0;
        let currentX = container.clientWidth / 2;


        function updateDisplay() {
            const centerX = container.clientWidth / 2;
            // const cm = Math.max(0, Math.round((centerX - currentX) / 60.5));
            const cm = Math.max(0, Math.max((centerX - currentX) / 60)).toFixed(1);

            valueSpan.textContent = cm;

            const mod = cm % length;
            const cungIndex = Math.floor(mod / cungSize);
            const cung = cungs[cungIndex];

            if (cung) {
                result.innerHTML = `<span class="${cung.status}">${cung.name} - ${cung.status === 'good' ? 'Tốt' : cung.status === 'bad' ? 'Xấu' : 'Bình thường'}</span>`;
                detail.textContent = cung.detail;
            } else {
                result.innerHTML = `<span class="neutral">Không xác định</span>`;
                detail.textContent = "";
            }

            ruler.style.transform = `translateX(${currentX}px)`;
        }

        container.addEventListener('mousedown', e => {
            isDragging = true;
            startX = e.clientX;
        });

        container.addEventListener('touchstart', e => {
            isDragging = true;
            startX = e.touches[0].clientX;
        });

        window.addEventListener('mousemove', e => {
            if (isDragging) {
                const dx = e.clientX - startX;
                currentX += dx;
                startX = e.clientX;
                updateDisplay();
            }
        });

        window.addEventListener('touchmove', e => {
            if (isDragging) {
                const dx = e.touches[0].clientX - startX;
                currentX += dx;
                startX = e.touches[0].clientX;
                updateDisplay();
            }
        });

        window.addEventListener('mouseup', () => isDragging = false);
        window.addEventListener('touchend', () => isDragging = false);

        updateDisplay();
    }

    function centerRuler(num) {
        const container = document.getElementById(`rulerContainer${num}`);
        const ruler = document.getElementById(`ruler${num}Ruler`);
        const centerX = container.clientWidth / 2;
        const defaultX = 0;
        ruler.style.transform = `translateX(${defaultX}px)`;
    }

    function resetRuler(num) {
        const ruler = document.getElementById(`ruler${num}Ruler`);
        ruler.style.transform = `translateX(0px)`;
        document.getElementById(`value${num}`).textContent = "0";
        document.getElementById(`result${num}`).textContent = "Kéo thước để xem kết quả";
        document.getElementById(`detail${num}`).textContent = "";
    }

    // Gọi tạo thước
    document.addEventListener("DOMContentLoaded", () => {
        createRuler("ruler1", rulerData.ruler1.length, rulerData.ruler1.cungSize, rulerData.ruler1.cungs);
        createRuler("ruler2", rulerData.ruler2.length, rulerData.ruler2.cungSize, rulerData.ruler2.cungs);
        createRuler("ruler3", rulerData.ruler3.length, rulerData.ruler3.cungSize, rulerData.ruler3.cungs);
    });
    function setRulerValue(num) {
        const input = document.getElementById(`inputValue${num}`);
        const cmValue = parseFloat(input.value);
        if (isNaN(cmValue) || cmValue < 0) {
            alert("Vui lòng nhập số cm hợp lệ (lớn hơn 0)");
            return;
        }

        const ruler = document.getElementById(`ruler${num}Ruler`);
        const container = document.getElementById(`rulerContainer${num}`);
        const valueSpan = document.getElementById(`value${num}`);
        const result = document.getElementById(`result${num}`);
        const detail = document.getElementById(`detail${num}`);

        const rulerInfo = rulerData[`ruler${num}`];
        const length = rulerInfo.length;
        const cungSize = rulerInfo.cungSize;
        const cungs = rulerInfo.cungs;

        // Khoảng cách mỗi cm hiển thị là 60px
        const cmPixel = 60;
        const containerCenter = container.clientWidth / 2;
        const targetX = -cmValue * cmPixel + containerCenter;

        // Cập nhật vị trí
        ruler.style.transform = `translateX(${targetX}px)`;

        // Cập nhật hiển thị
        valueSpan.textContent = cmValue;

        const mod = cmValue % length;
        const cungIndex = Math.floor(mod / cungSize);
        const cung = cungs[cungIndex];

        if (cung) {
            result.innerHTML = `<span class="${cung.status}">${cung.name} - ${cung.status === 'good' ? 'Tốt' : cung.status === 'bad' ? 'Xấu' : 'Bình thường'}</span>`;
            detail.textContent = cung.detail;
        } else {
            result.innerHTML = `<span class="neutral">Không xác định</span>`;
            detail.textContent = "";
        }
    }

</script>