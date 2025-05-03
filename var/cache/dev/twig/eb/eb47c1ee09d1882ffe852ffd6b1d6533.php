<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user/face_recognition.html.twig */
class __TwigTemplate_5afceff8c073268367fe9247ab93eb0b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseFlogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/face_recognition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/face_recognition.html.twig"));

        $this->parent = $this->loadTemplate("baseFlogin.html.twig", "user/face_recognition.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Face Recognition";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        yield "\">
<style>
    /* Main Container */
    .container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 15px;
    }
    
    /* Card Styling */
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
    }
    
    .card-header {
        padding: 1.5rem;
        border-radius: 15px 15px 0 0;
    }
    
    /* Video Container */
    .video-container {
        position: relative;
        margin: 0 auto;
        width: fit-content;
        border-radius: 15px;
        overflow: hidden;
        background: #1a1a1a;
    }
    
    /* Controls Section */
    .controls-section {
        padding: 1rem;
        background: rgba(0, 0, 0, 0.03);
        border-radius: 10px;
    }
    
    .btn-group {
        gap: 0.5rem;
    }
    
    /* Auto Capture Toggle */
    .auto-capture-toggle {
        margin-top: 1rem;
    }
    
    /* Results Section */
    .results-section {
        background: rgba(0, 0, 0, 0.03);
        padding: 1.5rem;
        border-radius: 10px;
    }
    
    /* Permission Overlay */
    #permissionOverlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .permission-content {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        max-width: 500px;
    }
    #video {
        background: #1a1a1a;
        border: none;
        max-width: 100%;
        filter: contrast(1.1) brightness(1.1);
        transform: scaleX(-1); /* Add this line to flip horizontally */
    }

    .face-guide {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 400px;
        border: 2px dashed rgba(255, 255, 255, 0.3);
        border-radius: 150px;
        pointer-events: none;
    }

    .capture-zone {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
    }

    .quality-indicator {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(0, 0, 0, 0.7);
        padding: 10px 15px;
        border-radius: 20px;
        color: white;
        font-size: 0.9rem;
    }

    .capture-feedback {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.7);
        padding: 10px 20px;
        border-radius: 25px;
        color: white;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .flash {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
    }
    
    .flash-active {
        opacity: 0.8;
    }
    
    .countdown {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 5rem;
        color: white;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .countdown-active {
        opacity: 1;
    }
    
    #permissionOverlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        flex-direction: column;
        color: white;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 188
        yield "<!-- Remove manual controls section -->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-gradient-primary text-white\">
                    <h3 class=\"mb-0\">AI-Powered Face Recognition</h3>
                    <p class=\"mb-0 small\">Position your face in the frame</p>
                </div>
                <div class=\"card-body p-0\">
                    <!-- Video Container -->
                    <div class=\"video-container mb-0\">
                        <video id=\"video\" width=\"640\" height=\"480\" autoplay style=\"transform: scaleX(-1);\"></video>
                        <canvas id=\"canvas\" style=\"display:none;\"></canvas>
                        
                        <!-- Modern Overlay Elements -->
                        <div class=\"face-guide\"></div>
                        <div class=\"quality-indicator\">
                            <div class=\"quality-bar\">
                                <div class=\"quality-progress\"></div>
                            </div>
                            <span id=\"qualityScore\">Initializing...</span>
                        </div>
                        <div class=\"capture-feedback\">
                            <i class=\"fas fa-crosshairs\"></i>
                            <span id=\"positionGuide\">Searching for face...</span>
                        </div>
                        
                        <div class=\"flash\"></div>
                        <div class=\"countdown\"></div>
                        
                        <!-- Add loading animation -->
                        <div class=\"scanning-line\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Controls Section -->
<div class=\"controls-section text-center mb-4\">
    <div class=\"btn-group\" role=\"group\">
        <button style=\"display: none;\" id=\"startButton\" class=\"btn btn-primary\">
            <i class=\"fas fa-camera\"></i> Start Camera
        </button>
        <button id=\"captureButton\" class=\"btn btn-success\" disabled>
            <i class=\"fas fa-camera-retro\"></i> Capture
        </button>
    </div>
    
    <div class=\"auto-capture-toggle mt-3\">
        <div style=\"display: none;\"   class=\"form-check form-switch d-inline-block\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"autoCapture\">
            <label  class=\"form-check-label\" for=\"autoCapture\">Auto Capture</label>
            <span style=\"display: none;\"  class=\"auto-capture-indicator badge bg-success ms-2\" style=\"display: none;\">
                Auto: <span id=\"autoCaptureStatus\">Off</span>
            </span>
        </div>
    </div>
</div>

<!-- Status Indicators -->
<div id=\"loading\" class=\"text-center my-3\" style=\"display:none;\">
    <div class=\"spinner-border text-primary\" role=\"status\">
        <span class=\"visually-hidden\">Loading...</span>
    </div>
    <p>Processing image...</p>
</div>

<!-- Results Section -->
<div id=\"result\" class=\"results-section mt-4\"></div>
</div>
</div>

<!-- Permission Overlay -->
<div id=\"permissionOverlay\">
    <div class=\"permission-content\">
        <h3>Camera Permission Required</h3>
        <p>Please allow camera access to use face recognition</p>
        <button id=\"requestPermission\" class=\"btn btn-primary\">Allow Camera Access</button>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 273
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 274
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<style>
    .scanning-line {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, transparent, #00ff88, transparent);
        animation: scanning 2s linear infinite;
        opacity: 0.7;
    }

    @keyframes scanning {
        0% { transform: translateY(0); }
        100% { transform: translateY(480px); }
    }

    .quality-bar {
        width: 100px;
        height: 4px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 2px;
        margin-bottom: 5px;
    }

    .quality-progress {
        height: 100%;
        width: 0%;
        background: #00ff88;
        border-radius: 2px;
        transition: width 0.3s ease;
    }

    .face-guide {
        border: 2px dashed rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.5);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: translate(-50%, -50%) scale(0.98); }
        50% { transform: translate(-50%, -50%) scale(1.02); }
        100% { transform: translate(-50%, -50%) scale(0.98); }
    }
</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const startButton = document.getElementById('startButton');
    const captureButton = document.getElementById('captureButton');
    const result = document.getElementById('result');
    const loading = document.getElementById('loading');
    const flashElement = document.querySelector('.flash');
    const countdownElement = document.querySelector('.countdown');
    const permissionOverlay = document.getElementById('permissionOverlay');
    const requestPermissionBtn = document.getElementById('requestPermission');
    const autoCaptureToggle = document.getElementById('autoCapture');
    const autoCaptureIndicator = document.querySelector('.auto-capture-indicator');
    const autoCaptureStatus = document.getElementById('autoCaptureStatus');

    let stream = null;
    let faceDetectionInterval = null;
    let autoCapturing = false;
    let lastCaptureTime = 0;
    let faceDetected = false;
    let captureTimeout = null;

    // Overlay canvas pour les rectangles de détection
    const overlayCanvas = document.createElement('canvas');
    overlayCanvas.style.position = 'absolute';
    overlayCanvas.style.top = '0';
    overlayCanvas.style.left = '0';
    overlayCanvas.style.pointerEvents = 'none';
    document.querySelector('.video-container').appendChild(overlayCanvas);
    const overlayCtx = overlayCanvas.getContext('2d');

    let faceDetector;
    if ('FaceDetector' in window) {
        faceDetector = new FaceDetector({ fastMode: true, maxDetectedFaces: 5 });
    } else {
        console.warn('FaceDetector API non disponible sur ce navigateur.');
    }

    // Check camera permission status
    async function checkCameraPermission() {
        try {
            const permissionStatus = await navigator.permissions.query({ name: 'camera' });
            if (permissionStatus.state === 'granted') {
                permissionOverlay.style.display = 'none';
                startCamera();
            } else if (permissionStatus.state === 'prompt') {
                permissionOverlay.style.display = 'flex';
                startButton.style.display = 'none';
            } else {
                permissionOverlay.style.display = 'flex';
                requestPermissionBtn.textContent = 'Camera Permission Denied';
                requestPermissionBtn.disabled = true;
            }
        } catch (err) {
            console.error('Error checking camera permission:', err);
            permissionOverlay.style.display = 'flex';
        }
    }

    // Request camera permission directly
    requestPermissionBtn.addEventListener('click', () => {
        startCamera();
    });

    // Auto capture toggle
    autoCaptureToggle.addEventListener('change', () => {
        if (autoCaptureToggle.checked) {
            autoCaptureIndicator.style.display = 'block';
            autoCaptureStatus.textContent = 'On';
            autoCapturing = true;
        } else {
            autoCaptureIndicator.style.display = 'none';
            autoCapturing = false;
            if (captureTimeout) {
                clearTimeout(captureTimeout);
                captureTimeout = null;
            }
        }
    });

    // Update the face detection styles
    async function detectFaces() {
        if (!faceDetector) return;

        overlayCanvas.width = video.videoWidth;
        overlayCanvas.height = video.videoHeight;

        const detect = async () => {
            try {
                overlayCtx.clearRect(0, 0, overlayCanvas.width, overlayCanvas.height);
                const faces = await faceDetector.detect(video);
                
                if (faces.length > 0) {
                    const face = faces[0];
                    const { x, y, width, height } = face.boundingBox;
                    
                    // Calculate face position quality
                    const centerX = x + width / 2;
                    const centerY = y + height / 2;
                    const idealX = overlayCanvas.width / 2;
                    const idealY = overlayCanvas.height / 2;
                    
                    const distanceFromCenter = Math.sqrt(
                        Math.pow(centerX - idealX, 2) + 
                        Math.pow(centerY - idealY, 2)
                    );
                    
                    const idealSize = overlayCanvas.width * 0.4;
                    const sizeQuality = Math.min(width / idealSize, 1);
                    
                    const positionQuality = Math.max(0, 1 - (distanceFromCenter / (overlayCanvas.width * 0.2)));
                    const qualityScore = (sizeQuality + positionQuality) / 2;
                    
                    // Update UI feedback with querySelector
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    const qualityProgressElement = document.querySelector('.quality-progress');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = `Quality: \${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (qualityProgressElement) {
                        qualityProgressElement.style.width = `\${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (positionGuideElement) {
                        if (centerX < idealX - 50) {
                            positionGuideElement.textContent = \"Move right ➡️\";
                        } else if (centerX > idealX + 50) {
                            positionGuideElement.textContent = \"⬅️ Move left\";
                        } else if (centerY < idealY - 50) {
                            positionGuideElement.textContent = \"Move down ⬇️\";
                        } else if (centerY > idealY + 50) {
                            positionGuideElement.textContent = \"Move up ⬆️\";
                        } else {
                            positionGuideElement.textContent = \"Perfect position ✅\";
                        }
                    }

                    // Enable capture only when quality is good
                    captureButton.disabled = qualityScore < 0.8;
                    
                    // Draw enhanced face detection box
                    drawEnhancedFaceBox(face, qualityScore);
                    
                } else {
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = 'No face detected';
                    }
                    if (positionGuideElement) {
                        positionGuideElement.textContent = 'Searching for face...';
                    }
                    
                    captureButton.disabled = true;
                }

                requestAnimationFrame(detect);
            } catch (err) {
                console.error('Face detection error:', err);
                setTimeout(detect, 1000);
            }
        };

        detect();
    }
    
    function drawEnhancedFaceBox(face, quality) {
        const { x, y, width, height } = face.boundingBox;
        
        // Draw gradient border
        const gradient = overlayCtx.createLinearGradient(x, y, x + width, y);
        gradient.addColorStop(0, `rgba(0, 255, \${Math.round(quality * 255)}, 0.8)`);
        gradient.addColorStop(1, `rgba(0, \${Math.round(quality * 255)}, 255, 0.8)`);
        
        overlayCtx.strokeStyle = gradient;
        overlayCtx.lineWidth = 3;
        
        // Draw corners with animation
        const time = Date.now() / 1000;
        const cornerLength = 30 * (Math.sin(time * 2) * 0.2 + 0.8);
        
        // Draw enhanced corners
        drawAnimatedCorner(x, y, cornerLength, 0);
        drawAnimatedCorner(x + width, y, cornerLength, Math.PI / 2);
        drawAnimatedCorner(x + width, y + height, cornerLength, Math.PI);
        drawAnimatedCorner(x, y + height, cornerLength, -Math.PI / 2);
    }

    function drawAnimatedCorner(x, y, length, rotation) {
        overlayCtx.save();
        overlayCtx.translate(x, y);
        overlayCtx.rotate(rotation);
        
        overlayCtx.beginPath();
        overlayCtx.moveTo(0, 0);
        overlayCtx.lineTo(length, 0);
        overlayCtx.moveTo(0, 0);
        overlayCtx.lineTo(0, length);
        overlayCtx.stroke();
        
        overlayCtx.restore();
    }
    
    // Flash effect when capturing
    function triggerFlash() {
        flashElement.classList.add('flash-active');
        setTimeout(() => {
            flashElement.classList.remove('flash-active');
        }, 500);
    }
    
    // Countdown for auto-capture
    function startCountdown() {
        let count = 3;
        countdownElement.textContent = count;
        countdownElement.classList.add('countdown-active');
        
        const interval = setInterval(() => {
            count--;
            countdownElement.textContent = count;
            
            if (count <= 0) {
                clearInterval(interval);
                countdownElement.classList.remove('countdown-active');
                if (faceDetected) { // Only capture if face is still detected
                    captureImage();
                }
            }
        }, 1000);
        
        captureTimeout = interval;
    }

    async function startCamera() {
        try {
            stream = await navigator.mediaDevices.getUserMedia({ 
                video: { width: { ideal: 1280 }, height: { ideal: 720 }, facingMode: 'user' },
                audio: false
            });

            video.srcObject = stream;
            startButton.disabled = true;
            captureButton.disabled = false;  // Enable capture button immediately
            permissionOverlay.style.display = 'none';

            video.onloadedmetadata = () => {
                video.play();
                detectFaces();
            };

            // Simulate click on capture button after camera starts
            setTimeout(() => {
                captureButton.click();
            }, 2000);  // Wait 2 seconds after camera starts

        } catch (err) {
            showError(`Camera access denied: \${err.message}`);
            console.error(err);
        }
    }

    // Remove the disable logic from detectFaces
    async function detectFaces() {
        if (!faceDetector) return;

        overlayCanvas.width = video.videoWidth;
        overlayCanvas.height = video.videoHeight;

        const detect = async () => {
            try {
                overlayCtx.clearRect(0, 0, overlayCanvas.width, overlayCanvas.height);
                const faces = await faceDetector.detect(video);
                
                if (faces.length > 0) {
                    const face = faces[0];
                    const { x, y, width, height } = face.boundingBox;
                    
                    // Calculate face position quality
                    const centerX = x + width / 2;
                    const centerY = y + height / 2;
                    const idealX = overlayCanvas.width / 2;
                    const idealY = overlayCanvas.height / 2;
                    
                    const distanceFromCenter = Math.sqrt(
                        Math.pow(centerX - idealX, 2) + 
                        Math.pow(centerY - idealY, 2)
                    );
                    
                    const idealSize = overlayCanvas.width * 0.4;
                    const sizeQuality = Math.min(width / idealSize, 1);
                    
                    const positionQuality = Math.max(0, 1 - (distanceFromCenter / (overlayCanvas.width * 0.2)));
                    const qualityScore = (sizeQuality + positionQuality) / 2;
                    
                    // Update UI feedback with querySelector
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    const qualityProgressElement = document.querySelector('.quality-progress');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = `Quality: \${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (qualityProgressElement) {
                        qualityProgressElement.style.width = `\${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (positionGuideElement) {
                        if (centerX < idealX - 50) {
                            positionGuideElement.textContent = \"Move right ➡️\";
                        } else if (centerX > idealX + 50) {
                            positionGuideElement.textContent = \"⬅️ Move left\";
                        } else if (centerY < idealY - 50) {
                            positionGuideElement.textContent = \"Move down ⬇️\";
                        } else if (centerY > idealY + 50) {
                            positionGuideElement.textContent = \"Move up ⬆️\";
                        } else {
                            positionGuideElement.textContent = \"Perfect position ✅\";
                        }
                    }

                    // Enable capture only when quality is good
                    captureButton.disabled = qualityScore < 0.8;
                    
                    // Draw enhanced face detection box
                    drawEnhancedFaceBox(face, qualityScore);
                    
                } else {
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = 'No face detected';
                    }
                    if (positionGuideElement) {
                        positionGuideElement.textContent = 'Searching for face...';
                    }
                    
                    captureButton.disabled = true;
                }

                requestAnimationFrame(detect);
            } catch (err) {
                console.error('Face detection error:', err);
                setTimeout(detect, 1000);
            }
        };

        detect();
    }
    
    function showError(message) {
        result.innerHTML = `
            <div class=\"alert alert-danger alert-dismissible fade show\">
                <strong>Error:</strong> \${message}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>`;
    }

    async function captureImage() {
        try {
            // Visual feedback
            triggerFlash();
            
            // Capture image
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            const ctx = canvas.getContext('2d');
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

            const blob = await new Promise((resolve) => {
                canvas.toBlob(resolve, 'image/jpeg', 0.8);
            });

            const formData = new FormData();
            formData.append('image', blob, 'capture.jpg');

            result.innerHTML = '<div class=\"alert alert-info\">Processing...</div>';
            captureButton.disabled = true;
            loading.style.display = 'block';

            const response = await fetch('";
        // line 706
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_face_compare");
        yield "', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error(`Server error: \${response.status}`);
            }

            const data = await response.json();
            console.log('Response data:', data); // Debug log

            if (data.confidence >= 0.3) {
                window.location.href = '";
        // line 719
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Admin");
        yield "';
                return;
            }else
            {
                window.location.href = '";
        // line 723
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_face_recognition");
        yield "';
                return;
            }

            if (data.success) {
                result.innerHTML = `
                    <div class=\"alert \${data.match ? 'alert-success' : 'alert-warning'}\">
                        \${data.match ? 'Match found!' : 'No match found'}
                        <br>Confidence: \${(data.confidence * 100).toFixed(2)}%
                    </div>`;

                if (data.comparison_path) {
                    result.innerHTML += `
                        <div class=\"mt-3\">
                            <img src=\"\${data.comparison_path}?t=\${Date.now()}\" 
                                 class=\"img-fluid rounded border\">
                        </div>`;
                }
            } else {
                throw new Error(data.message || 'Unknown error');
            }

            // Update last capture time for auto-capture cooldown
            lastCaptureTime = Date.now();

        } catch (error) {
            result.innerHTML = `
                <div class=\"alert alert-danger\">
                    Failed: \${error.message}
                </div>`;
            console.error(error);
        } finally {
            captureButton.disabled = false;
            loading.style.display = 'none';
        }
    }
    
    startButton.addEventListener('click', startCamera);
    captureButton.addEventListener('click', captureImage);
    
    // Check camera permission on page load
    checkCameraPermission();
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/face_recognition.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  874 => 723,  867 => 719,  851 => 706,  416 => 274,  403 => 273,  309 => 188,  296 => 187,  107 => 8,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseFlogin.html.twig' %}

{% block title %}Face Recognition{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
<link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">
<style>
    /* Main Container */
    .container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 15px;
    }
    
    /* Card Styling */
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
    }
    
    .card-header {
        padding: 1.5rem;
        border-radius: 15px 15px 0 0;
    }
    
    /* Video Container */
    .video-container {
        position: relative;
        margin: 0 auto;
        width: fit-content;
        border-radius: 15px;
        overflow: hidden;
        background: #1a1a1a;
    }
    
    /* Controls Section */
    .controls-section {
        padding: 1rem;
        background: rgba(0, 0, 0, 0.03);
        border-radius: 10px;
    }
    
    .btn-group {
        gap: 0.5rem;
    }
    
    /* Auto Capture Toggle */
    .auto-capture-toggle {
        margin-top: 1rem;
    }
    
    /* Results Section */
    .results-section {
        background: rgba(0, 0, 0, 0.03);
        padding: 1.5rem;
        border-radius: 10px;
    }
    
    /* Permission Overlay */
    #permissionOverlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .permission-content {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        max-width: 500px;
    }
    #video {
        background: #1a1a1a;
        border: none;
        max-width: 100%;
        filter: contrast(1.1) brightness(1.1);
        transform: scaleX(-1); /* Add this line to flip horizontally */
    }

    .face-guide {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 400px;
        border: 2px dashed rgba(255, 255, 255, 0.3);
        border-radius: 150px;
        pointer-events: none;
    }

    .capture-zone {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
    }

    .quality-indicator {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(0, 0, 0, 0.7);
        padding: 10px 15px;
        border-radius: 20px;
        color: white;
        font-size: 0.9rem;
    }

    .capture-feedback {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.7);
        padding: 10px 20px;
        border-radius: 25px;
        color: white;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .flash {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
    }
    
    .flash-active {
        opacity: 0.8;
    }
    
    .countdown {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 5rem;
        color: white;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .countdown-active {
        opacity: 1;
    }
    
    #permissionOverlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        flex-direction: column;
        color: white;
    }
</style>
{% endblock %}

{% block body %}
<!-- Remove manual controls section -->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-gradient-primary text-white\">
                    <h3 class=\"mb-0\">AI-Powered Face Recognition</h3>
                    <p class=\"mb-0 small\">Position your face in the frame</p>
                </div>
                <div class=\"card-body p-0\">
                    <!-- Video Container -->
                    <div class=\"video-container mb-0\">
                        <video id=\"video\" width=\"640\" height=\"480\" autoplay style=\"transform: scaleX(-1);\"></video>
                        <canvas id=\"canvas\" style=\"display:none;\"></canvas>
                        
                        <!-- Modern Overlay Elements -->
                        <div class=\"face-guide\"></div>
                        <div class=\"quality-indicator\">
                            <div class=\"quality-bar\">
                                <div class=\"quality-progress\"></div>
                            </div>
                            <span id=\"qualityScore\">Initializing...</span>
                        </div>
                        <div class=\"capture-feedback\">
                            <i class=\"fas fa-crosshairs\"></i>
                            <span id=\"positionGuide\">Searching for face...</span>
                        </div>
                        
                        <div class=\"flash\"></div>
                        <div class=\"countdown\"></div>
                        
                        <!-- Add loading animation -->
                        <div class=\"scanning-line\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Controls Section -->
<div class=\"controls-section text-center mb-4\">
    <div class=\"btn-group\" role=\"group\">
        <button style=\"display: none;\" id=\"startButton\" class=\"btn btn-primary\">
            <i class=\"fas fa-camera\"></i> Start Camera
        </button>
        <button id=\"captureButton\" class=\"btn btn-success\" disabled>
            <i class=\"fas fa-camera-retro\"></i> Capture
        </button>
    </div>
    
    <div class=\"auto-capture-toggle mt-3\">
        <div style=\"display: none;\"   class=\"form-check form-switch d-inline-block\">
            <input class=\"form-check-input\" type=\"checkbox\" id=\"autoCapture\">
            <label  class=\"form-check-label\" for=\"autoCapture\">Auto Capture</label>
            <span style=\"display: none;\"  class=\"auto-capture-indicator badge bg-success ms-2\" style=\"display: none;\">
                Auto: <span id=\"autoCaptureStatus\">Off</span>
            </span>
        </div>
    </div>
</div>

<!-- Status Indicators -->
<div id=\"loading\" class=\"text-center my-3\" style=\"display:none;\">
    <div class=\"spinner-border text-primary\" role=\"status\">
        <span class=\"visually-hidden\">Loading...</span>
    </div>
    <p>Processing image...</p>
</div>

<!-- Results Section -->
<div id=\"result\" class=\"results-section mt-4\"></div>
</div>
</div>

<!-- Permission Overlay -->
<div id=\"permissionOverlay\">
    <div class=\"permission-content\">
        <h3>Camera Permission Required</h3>
        <p>Please allow camera access to use face recognition</p>
        <button id=\"requestPermission\" class=\"btn btn-primary\">Allow Camera Access</button>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<style>
    .scanning-line {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, transparent, #00ff88, transparent);
        animation: scanning 2s linear infinite;
        opacity: 0.7;
    }

    @keyframes scanning {
        0% { transform: translateY(0); }
        100% { transform: translateY(480px); }
    }

    .quality-bar {
        width: 100px;
        height: 4px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 2px;
        margin-bottom: 5px;
    }

    .quality-progress {
        height: 100%;
        width: 0%;
        background: #00ff88;
        border-radius: 2px;
        transition: width 0.3s ease;
    }

    .face-guide {
        border: 2px dashed rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.5);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: translate(-50%, -50%) scale(0.98); }
        50% { transform: translate(-50%, -50%) scale(1.02); }
        100% { transform: translate(-50%, -50%) scale(0.98); }
    }
</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const startButton = document.getElementById('startButton');
    const captureButton = document.getElementById('captureButton');
    const result = document.getElementById('result');
    const loading = document.getElementById('loading');
    const flashElement = document.querySelector('.flash');
    const countdownElement = document.querySelector('.countdown');
    const permissionOverlay = document.getElementById('permissionOverlay');
    const requestPermissionBtn = document.getElementById('requestPermission');
    const autoCaptureToggle = document.getElementById('autoCapture');
    const autoCaptureIndicator = document.querySelector('.auto-capture-indicator');
    const autoCaptureStatus = document.getElementById('autoCaptureStatus');

    let stream = null;
    let faceDetectionInterval = null;
    let autoCapturing = false;
    let lastCaptureTime = 0;
    let faceDetected = false;
    let captureTimeout = null;

    // Overlay canvas pour les rectangles de détection
    const overlayCanvas = document.createElement('canvas');
    overlayCanvas.style.position = 'absolute';
    overlayCanvas.style.top = '0';
    overlayCanvas.style.left = '0';
    overlayCanvas.style.pointerEvents = 'none';
    document.querySelector('.video-container').appendChild(overlayCanvas);
    const overlayCtx = overlayCanvas.getContext('2d');

    let faceDetector;
    if ('FaceDetector' in window) {
        faceDetector = new FaceDetector({ fastMode: true, maxDetectedFaces: 5 });
    } else {
        console.warn('FaceDetector API non disponible sur ce navigateur.');
    }

    // Check camera permission status
    async function checkCameraPermission() {
        try {
            const permissionStatus = await navigator.permissions.query({ name: 'camera' });
            if (permissionStatus.state === 'granted') {
                permissionOverlay.style.display = 'none';
                startCamera();
            } else if (permissionStatus.state === 'prompt') {
                permissionOverlay.style.display = 'flex';
                startButton.style.display = 'none';
            } else {
                permissionOverlay.style.display = 'flex';
                requestPermissionBtn.textContent = 'Camera Permission Denied';
                requestPermissionBtn.disabled = true;
            }
        } catch (err) {
            console.error('Error checking camera permission:', err);
            permissionOverlay.style.display = 'flex';
        }
    }

    // Request camera permission directly
    requestPermissionBtn.addEventListener('click', () => {
        startCamera();
    });

    // Auto capture toggle
    autoCaptureToggle.addEventListener('change', () => {
        if (autoCaptureToggle.checked) {
            autoCaptureIndicator.style.display = 'block';
            autoCaptureStatus.textContent = 'On';
            autoCapturing = true;
        } else {
            autoCaptureIndicator.style.display = 'none';
            autoCapturing = false;
            if (captureTimeout) {
                clearTimeout(captureTimeout);
                captureTimeout = null;
            }
        }
    });

    // Update the face detection styles
    async function detectFaces() {
        if (!faceDetector) return;

        overlayCanvas.width = video.videoWidth;
        overlayCanvas.height = video.videoHeight;

        const detect = async () => {
            try {
                overlayCtx.clearRect(0, 0, overlayCanvas.width, overlayCanvas.height);
                const faces = await faceDetector.detect(video);
                
                if (faces.length > 0) {
                    const face = faces[0];
                    const { x, y, width, height } = face.boundingBox;
                    
                    // Calculate face position quality
                    const centerX = x + width / 2;
                    const centerY = y + height / 2;
                    const idealX = overlayCanvas.width / 2;
                    const idealY = overlayCanvas.height / 2;
                    
                    const distanceFromCenter = Math.sqrt(
                        Math.pow(centerX - idealX, 2) + 
                        Math.pow(centerY - idealY, 2)
                    );
                    
                    const idealSize = overlayCanvas.width * 0.4;
                    const sizeQuality = Math.min(width / idealSize, 1);
                    
                    const positionQuality = Math.max(0, 1 - (distanceFromCenter / (overlayCanvas.width * 0.2)));
                    const qualityScore = (sizeQuality + positionQuality) / 2;
                    
                    // Update UI feedback with querySelector
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    const qualityProgressElement = document.querySelector('.quality-progress');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = `Quality: \${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (qualityProgressElement) {
                        qualityProgressElement.style.width = `\${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (positionGuideElement) {
                        if (centerX < idealX - 50) {
                            positionGuideElement.textContent = \"Move right ➡️\";
                        } else if (centerX > idealX + 50) {
                            positionGuideElement.textContent = \"⬅️ Move left\";
                        } else if (centerY < idealY - 50) {
                            positionGuideElement.textContent = \"Move down ⬇️\";
                        } else if (centerY > idealY + 50) {
                            positionGuideElement.textContent = \"Move up ⬆️\";
                        } else {
                            positionGuideElement.textContent = \"Perfect position ✅\";
                        }
                    }

                    // Enable capture only when quality is good
                    captureButton.disabled = qualityScore < 0.8;
                    
                    // Draw enhanced face detection box
                    drawEnhancedFaceBox(face, qualityScore);
                    
                } else {
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = 'No face detected';
                    }
                    if (positionGuideElement) {
                        positionGuideElement.textContent = 'Searching for face...';
                    }
                    
                    captureButton.disabled = true;
                }

                requestAnimationFrame(detect);
            } catch (err) {
                console.error('Face detection error:', err);
                setTimeout(detect, 1000);
            }
        };

        detect();
    }
    
    function drawEnhancedFaceBox(face, quality) {
        const { x, y, width, height } = face.boundingBox;
        
        // Draw gradient border
        const gradient = overlayCtx.createLinearGradient(x, y, x + width, y);
        gradient.addColorStop(0, `rgba(0, 255, \${Math.round(quality * 255)}, 0.8)`);
        gradient.addColorStop(1, `rgba(0, \${Math.round(quality * 255)}, 255, 0.8)`);
        
        overlayCtx.strokeStyle = gradient;
        overlayCtx.lineWidth = 3;
        
        // Draw corners with animation
        const time = Date.now() / 1000;
        const cornerLength = 30 * (Math.sin(time * 2) * 0.2 + 0.8);
        
        // Draw enhanced corners
        drawAnimatedCorner(x, y, cornerLength, 0);
        drawAnimatedCorner(x + width, y, cornerLength, Math.PI / 2);
        drawAnimatedCorner(x + width, y + height, cornerLength, Math.PI);
        drawAnimatedCorner(x, y + height, cornerLength, -Math.PI / 2);
    }

    function drawAnimatedCorner(x, y, length, rotation) {
        overlayCtx.save();
        overlayCtx.translate(x, y);
        overlayCtx.rotate(rotation);
        
        overlayCtx.beginPath();
        overlayCtx.moveTo(0, 0);
        overlayCtx.lineTo(length, 0);
        overlayCtx.moveTo(0, 0);
        overlayCtx.lineTo(0, length);
        overlayCtx.stroke();
        
        overlayCtx.restore();
    }
    
    // Flash effect when capturing
    function triggerFlash() {
        flashElement.classList.add('flash-active');
        setTimeout(() => {
            flashElement.classList.remove('flash-active');
        }, 500);
    }
    
    // Countdown for auto-capture
    function startCountdown() {
        let count = 3;
        countdownElement.textContent = count;
        countdownElement.classList.add('countdown-active');
        
        const interval = setInterval(() => {
            count--;
            countdownElement.textContent = count;
            
            if (count <= 0) {
                clearInterval(interval);
                countdownElement.classList.remove('countdown-active');
                if (faceDetected) { // Only capture if face is still detected
                    captureImage();
                }
            }
        }, 1000);
        
        captureTimeout = interval;
    }

    async function startCamera() {
        try {
            stream = await navigator.mediaDevices.getUserMedia({ 
                video: { width: { ideal: 1280 }, height: { ideal: 720 }, facingMode: 'user' },
                audio: false
            });

            video.srcObject = stream;
            startButton.disabled = true;
            captureButton.disabled = false;  // Enable capture button immediately
            permissionOverlay.style.display = 'none';

            video.onloadedmetadata = () => {
                video.play();
                detectFaces();
            };

            // Simulate click on capture button after camera starts
            setTimeout(() => {
                captureButton.click();
            }, 2000);  // Wait 2 seconds after camera starts

        } catch (err) {
            showError(`Camera access denied: \${err.message}`);
            console.error(err);
        }
    }

    // Remove the disable logic from detectFaces
    async function detectFaces() {
        if (!faceDetector) return;

        overlayCanvas.width = video.videoWidth;
        overlayCanvas.height = video.videoHeight;

        const detect = async () => {
            try {
                overlayCtx.clearRect(0, 0, overlayCanvas.width, overlayCanvas.height);
                const faces = await faceDetector.detect(video);
                
                if (faces.length > 0) {
                    const face = faces[0];
                    const { x, y, width, height } = face.boundingBox;
                    
                    // Calculate face position quality
                    const centerX = x + width / 2;
                    const centerY = y + height / 2;
                    const idealX = overlayCanvas.width / 2;
                    const idealY = overlayCanvas.height / 2;
                    
                    const distanceFromCenter = Math.sqrt(
                        Math.pow(centerX - idealX, 2) + 
                        Math.pow(centerY - idealY, 2)
                    );
                    
                    const idealSize = overlayCanvas.width * 0.4;
                    const sizeQuality = Math.min(width / idealSize, 1);
                    
                    const positionQuality = Math.max(0, 1 - (distanceFromCenter / (overlayCanvas.width * 0.2)));
                    const qualityScore = (sizeQuality + positionQuality) / 2;
                    
                    // Update UI feedback with querySelector
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    const qualityProgressElement = document.querySelector('.quality-progress');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = `Quality: \${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (qualityProgressElement) {
                        qualityProgressElement.style.width = `\${Math.round(qualityScore * 100)}%`;
                    }
                    
                    if (positionGuideElement) {
                        if (centerX < idealX - 50) {
                            positionGuideElement.textContent = \"Move right ➡️\";
                        } else if (centerX > idealX + 50) {
                            positionGuideElement.textContent = \"⬅️ Move left\";
                        } else if (centerY < idealY - 50) {
                            positionGuideElement.textContent = \"Move down ⬇️\";
                        } else if (centerY > idealY + 50) {
                            positionGuideElement.textContent = \"Move up ⬆️\";
                        } else {
                            positionGuideElement.textContent = \"Perfect position ✅\";
                        }
                    }

                    // Enable capture only when quality is good
                    captureButton.disabled = qualityScore < 0.8;
                    
                    // Draw enhanced face detection box
                    drawEnhancedFaceBox(face, qualityScore);
                    
                } else {
                    const qualityScoreElement = document.querySelector('#qualityScore');
                    const positionGuideElement = document.querySelector('#positionGuide');
                    
                    if (qualityScoreElement) {
                        qualityScoreElement.textContent = 'No face detected';
                    }
                    if (positionGuideElement) {
                        positionGuideElement.textContent = 'Searching for face...';
                    }
                    
                    captureButton.disabled = true;
                }

                requestAnimationFrame(detect);
            } catch (err) {
                console.error('Face detection error:', err);
                setTimeout(detect, 1000);
            }
        };

        detect();
    }
    
    function showError(message) {
        result.innerHTML = `
            <div class=\"alert alert-danger alert-dismissible fade show\">
                <strong>Error:</strong> \${message}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>`;
    }

    async function captureImage() {
        try {
            // Visual feedback
            triggerFlash();
            
            // Capture image
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            const ctx = canvas.getContext('2d');
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

            const blob = await new Promise((resolve) => {
                canvas.toBlob(resolve, 'image/jpeg', 0.8);
            });

            const formData = new FormData();
            formData.append('image', blob, 'capture.jpg');

            result.innerHTML = '<div class=\"alert alert-info\">Processing...</div>';
            captureButton.disabled = true;
            loading.style.display = 'block';

            const response = await fetch('{{ path(\"app_face_compare\") }}', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error(`Server error: \${response.status}`);
            }

            const data = await response.json();
            console.log('Response data:', data); // Debug log

            if (data.confidence >= 0.3) {
                window.location.href = '{{ path(\"app_Admin\")}}';
                return;
            }else
            {
                window.location.href = '{{ path(\"app_face_recognition\")}}';
                return;
            }

            if (data.success) {
                result.innerHTML = `
                    <div class=\"alert \${data.match ? 'alert-success' : 'alert-warning'}\">
                        \${data.match ? 'Match found!' : 'No match found'}
                        <br>Confidence: \${(data.confidence * 100).toFixed(2)}%
                    </div>`;

                if (data.comparison_path) {
                    result.innerHTML += `
                        <div class=\"mt-3\">
                            <img src=\"\${data.comparison_path}?t=\${Date.now()}\" 
                                 class=\"img-fluid rounded border\">
                        </div>`;
                }
            } else {
                throw new Error(data.message || 'Unknown error');
            }

            // Update last capture time for auto-capture cooldown
            lastCaptureTime = Date.now();

        } catch (error) {
            result.innerHTML = `
                <div class=\"alert alert-danger\">
                    Failed: \${error.message}
                </div>`;
            console.error(error);
        } finally {
            captureButton.disabled = false;
            loading.style.display = 'none';
        }
    }
    
    startButton.addEventListener('click', startCamera);
    captureButton.addEventListener('click', captureImage);
    
    // Check camera permission on page load
    checkCameraPermission();
});
</script>
{% endblock %}", "user/face_recognition.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\user\\face_recognition.html.twig");
    }
}
