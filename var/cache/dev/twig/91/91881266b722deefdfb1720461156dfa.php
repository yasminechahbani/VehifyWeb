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

/* chatbot/_diagnostic.html.twig */
class __TwigTemplate_9fee4706d00ddb41a8c4d73478b903aa extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/_diagnostic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/_diagnostic.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Vehify - Diagnostic Pré-Contrôle Technique</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        :root {
            --primary-color: #3454D1;
            --primary-light: #5A77F3;
            --primary-dark: #253AA1;
            --secondary-color: #34D1BF;
            --accent-color: #F06543;
            --success-color: #2DD36F;
            --warning-color: #FFC107;
            --danger-color: #EB445A;
            --light-bg: #F9FAFB;
            --dark-bg: #1F2937;
            --text-light: #F9FAFB;
            --text-dark: #1F2937;
            --shadow-sm: 0 2px 12px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.12);
            --shadow-lg: 0 16px 38px rgba(52, 84, 209, 0.15);
            --radius-sm: 12px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --font-main: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            font-family: var(--font-main);
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
            color: var(--text-dark);
            min-height: 100vh;
        }

        .container {
            max-width: 1100px;
            padding: 2rem 1rem;
        }

        .app-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .app-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(52, 84, 209, 0.2);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            padding: 1.5rem;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            opacity: 0;
            transform: scale(1);
            transition: transform 0.6s ease-out, opacity 0.6s ease-out;
        }

        .app-card:hover .card-header::before {
            opacity: 1;
            transform: scale(1.2);
        }

        .header-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-title .icon {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header h4 {
            margin: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .stages-progress {
            display: flex;
            justify-content: space-between;
            margin: 1rem 0;
            position: relative;
            z-index: 1;
        }

        .stage {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            flex: 1;
        }

        .stage-indicator {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 2;
            transition: all 0.3s ease;
        }

        .stage.active .stage-indicator {
            background: var(--secondary-color);
            transform: scale(1.1);
        }

        .stage.completed .stage-indicator {
            background: var(--success-color);
        }

        .stage-label {
            margin-top: 8px;
            font-size: 0.75rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.8);
            text-align: center;
        }

        .progress-line {
            position: absolute;
            top: 18px;
            left: 18%;
            right: 18%;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            z-index: 1;
        }

        .progress-completed {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: var(--secondary-color);
            transition: width 0.5s ease;
        }

        #chat-container {
            height: 380px;
            overflow-y: auto;
            padding: 1.5rem;
            position: relative;
            background: var(--light-bg);
            border-radius: var(--radius-md);
            box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.05);
            scrollbar-width: thin;
            scrollbar-color: var(--primary-light) transparent;
        }

        #chat-container::-webkit-scrollbar {
            width: 6px;
        }

        #chat-container::-webkit-scrollbar-track {
            background: transparent;
        }

        #chat-container::-webkit-scrollbar-thumb {
            background-color: var(--primary-light);
            border-radius: 10px;
        }

        .message-bubble {
            max-width: 80%;
            padding: 1rem 1.25rem;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            margin-bottom: 1rem;
            position: relative;
            animation: fadeInUp 0.3s ease forwards;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .message-user {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border-bottom-right-radius: 4px;
            align-self: flex-end;
            margin-left: auto;
        }

        .message-bot {
            background: white;
            color: var(--text-dark);
            border-bottom-left-radius: 4px;
            align-self: flex-start;
            margin-right: auto;
        }

        .message-content {
            position: relative;
            z-index: 1;
        }

        .message-time {
            font-size: 0.7rem;
            opacity: 0.7;
            position: absolute;
            bottom: 5px;
            right: 10px;
        }

        .media-preview {
            width: 100%;
            border-radius: var(--radius-sm);
            overflow: hidden;
            margin-top: 0.5rem;
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .avatar-bot {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-light));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .actions-container {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .action-button {
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            font-weight: 600;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .action-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255,255,255,0), rgba(255,255,255,0.2), rgba(255,255,255,0));
            transform: translateX(-100%);
            transition: transform 0.6s ease;
            z-index: -1;
        }

        .action-button:hover::before {
            transform: translateX(100%);
        }

        .upload-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
        }

        .upload-btn:hover {
            box-shadow: 0 5px 15px rgba(52, 84, 209, 0.3);
            transform: translateY(-2px);
        }

        .remove-btn {
            background: var(--danger-color);
            color: white;
            border: none;
        }

        .remove-btn:hover {
            box-shadow: 0 5px 15px rgba(235, 68, 90, 0.3);
            transform: translateY(-2px);
        }

        .input-container {
            position: relative;
            margin-top: 1rem;
        }

        .input-group {
            background: white;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            padding: 0.5rem;
            transition: all 0.3s ease;
        }

        .input-group:focus-within {
            box-shadow: 0 5px 20px rgba(52, 84, 209, 0.2);
        }

        #user-input {
            border: none;
            padding: 0.8rem 1rem;
            font-size: 1rem;
            background: transparent;
            width: 100%;
        }

        #user-input:focus {
            outline: none;
        }

        #send-btn {
            width: 45px;
            height: 45px;
            border-radius: var(--radius-sm);
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        #send-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 84, 209, 0.3);
        }

        #send-btn:active {
            transform: translateY(0);
        }

        .input-actions {
            position: absolute;
            bottom: 100%;
            right: 5px;
            display: flex;
            gap: 8px;
            padding: 8px;
        }

        .action-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-sm);
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--primary-color);
        }

        .action-icon:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 84, 209, 0.2);
        }

        #photoPreview {
            background: white;
            border-radius: var(--radius-md);
            padding: 1rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 1.5rem;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        #previewImage {
            border-radius: var(--radius-sm);
            max-height: 200px;
            object-fit: cover;
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .result-container {
            padding: 1.5rem;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, #ffffff, var(--light-bg));
            box-shadow: var(--shadow-md);
            margin: 1.5rem 0;
        }

        .result-progress {
            position: relative;
            height: 10px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 1rem 0;
        }

        .result-progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            border-radius: 10px;
            transition: width 1s ease;
        }

        .high-chance {
            background: linear-gradient(90deg, var(--success-color), #8BED4F);
        }

        .medium-chance {
            background: linear-gradient(90deg, var(--warning-color), #FFD93D);
        }

        .low-chance {
            background: linear-gradient(90deg, var(--danger-color), #FF884D);
        }

        .result-percentage {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .result-message {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .service-card {
            background: white;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            padding: 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .service-icon {
            width: 50px;
            height: 50px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .service-details {
            flex-grow: 1;
        }

        .service-name {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .service-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .service-action {
            padding: 8px 15px;
            border-radius: var(--radius-sm);
            background: var(--primary-light);
            color: white;
            font-weight: 500;
            font-size: 0.9rem;
            border: none;
            transition: all 0.3s ease;
        }

        .service-action:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .typing-indicator {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            width: fit-content;
        }

        .typing-bubble {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary-color);
            margin: 0 2px;
            animation: typing-bubble 1.2s infinite ease-in-out;
        }

        .typing-bubble:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-bubble:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes typing-bubble {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .app-card {
                border-radius: var(--radius-md);
            }

            .header-title .icon {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }

            .card-header h4 {
                font-size: 1.2rem;
            }

            .stages-progress {
                margin-top: 0.5rem;
            }

            .stage-indicator {
                width: 28px;
                height: 28px;
                font-size: 0.8rem;
            }

            .stage-label {
                display: none;
            }

            .progress-line {
                top: 14px;
            }

            #chat-container {
                height: 320px;
                padding: 1rem;
            }

            .message-bubble {
                padding: 0.8rem 1rem;
                max-width: 90%;
            }

            .avatar {
                width: 36px;
                height: 36px;
            }

            .actions-container {
                padding: 1rem;
                gap: 0.8rem;
            }

            .action-button {
                padding: 0.8rem 1.2rem;
                font-size: 0.9rem;
            }

            #send-btn {
                width: 40px;
                height: 40px;
            }

            #user-input {
                padding: 0.7rem 0.8rem;
                font-size: 0.9rem;
            }

            .result-percentage {
                font-size: 1.5rem;
            }

            .result-message {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"app-card\">
                    <!-- Card Header -->
                    <div class=\"card-header text-white\">
                        <div class=\"header-title\">
                            <div class=\"icon\">
                                <i class=\"fas fa-car\"></i>
                            </div>
                            <h4>Vehify - Diagnostic Pré-Contrôle Technique</h4>
                        </div>
                        
                        <!-- Progress Stages -->
                        <div class=\"stages-progress mt-4\">
                            <div class=\"progress-line\">
                                <div class=\"progress-completed\" id=\"progressBar\" style=\"width: 0%\"></div>
                            </div>
                            <div class=\"stage active\" id=\"stage1\">
                                <div class=\"stage-indicator\">1</div>
                                <div class=\"stage-label\">Début</div>
                            </div>
                            <div class=\"stage\" id=\"stage2\">
                                <div class=\"stage-indicator\">2</div>
                                <div class=\"stage-label\">Photo</div>
                            </div>
                            <div class=\"stage\" id=\"stage3\">
                                <div class=\"stage-indicator\">3</div>
                                <div class=\"stage-label\">Diagnostic</div>
                            </div>
                            <div class=\"stage\" id=\"stage4\">
                                <div class=\"stage-indicator\">4</div>
                                <div class=\"stage-label\">Résultat</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card Body -->
                    <div class=\"card-body p-4\">
                        <!-- Chat Container -->
                        <div id=\"chat-container\" class=\"d-flex flex-column\"></div>
                        
                        <!-- Photo Preview (Hidden initially) -->
                        <div id=\"photoPreview\" class=\"d-none\">
                            <h6 class=\"mb-3\"><i class=\"fas fa-image me-2\"></i>Aperçu de votre véhicule</h6>
                            <div class=\"position-relative\">
                                <img id=\"previewImage\" class=\"img-fluid\" alt=\"Vehicle preview\">
                                <button class=\"btn remove-btn position-absolute bottom-0 end-0 m-3\" id=\"removePhotoBtn\">
                                    <i class=\"fas fa-trash-alt me-2\"></i>Supprimer
                                </button>
                            </div>
                        </div>
                        
                        <!-- Input Group -->
                        <div class=\"input-container\">
                            <div class=\"input-group\">
                                <input type=\"text\" id=\"user-input\" class=\"form-control\" placeholder=\"Votre réponse...\">
                                <button class=\"btn\" id=\"send-btn\">
                                    <i class=\"fas fa-paper-plane\"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class=\"actions-container\">
                            <button type=\"button\" class=\"btn upload-btn action-button\" id=\"uploadPhotoBtn\">
                                <i class=\"fas fa-cloud-upload-alt\"></i>
                                Télécharger une photo de votre véhicule
                            </button>
                            <input type=\"file\" id=\"photoUpload\" class=\"d-none\" accept=\"image/*\">
                        </div>
                        
                        <!-- Results Container (Initially Hidden) -->
                        <div id=\"results-container\" class=\"d-none\"></div>
                        
                        <!-- Services Container (Initially Hidden) -->
                        <div id=\"services-container\" class=\"d-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // DOM Elements
        const chatContainer = document.getElementById('chat-container');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');
        const uploadPhotoBtn = document.getElementById('uploadPhotoBtn');
        const photoUpload = document.getElementById('photoUpload');
        const photoPreview = document.getElementById('photoPreview');
        const previewImage = document.getElementById('previewImage');
        const removePhotoBtn = document.getElementById('removePhotoBtn');
        const progressBar = document.getElementById('progressBar');
        const resultsContainer = document.getElementById('results-container');
        const servicesContainer = document.getElementById('services-container');
        
        // Stage Elements
        const stage1 = document.getElementById('stage1');
        const stage2 = document.getElementById('stage2');
        const stage3 = document.getElementById('stage3');
        const stage4 = document.getElementById('stage4');
        
        // State Variables
        let currentStage = 1;
        let photoUploaded = false;
        let currentQuestion = 0;
        let userResponses = {};
        let typingTimeout;
        
        // Questions for diagnostic
        const questions = [
            \"Votre témoin moteur est-il allumé ?\",
            \"Avez-vous des fuites visibles sous le véhicule ?\",
            \"Vos pneus sont-ils en bon état (profondeur des sculptures suffisante) ?\",
            \"Vos feux (phares, clignotants, feux stop) fonctionnent-ils tous correctement ?\",
            \"Avez-vous remarqué des bruits anormaux lors du freinage ?\"
        ];
        
        // Services recommended based on responses
        const services = [
            {
                name: \"Pré-diagnostic électronique\",
                description: \"Lecture complète des codes défauts et analyse des systèmes électroniques\",
                icon: \"fa-microchip\",
                color: \"#4361EE\"
            },
            {
                name: \"Contrôle des fluides\",
                description: \"Vérification et remise à niveau des liquides essentiels\",
                icon: \"fa-tint\",
                color: \"#3A86FF\"
            },
            {
                name: \"Vérification des pneumatiques\",
                description: \"Contrôle de l'état, pression et géométrie des pneus\",
                icon: \"fa-dharmachakra\",
                color: \"#4CC9F0\"
            },
            {
                name: \"Test du système d'éclairage\",
                description: \"Vérification complète de tous les feux et remplacement si nécessaire\",
                icon: \"fa-lightbulb\",
                color: \"#F72585\"
            }
        ];
        
        // Initialize chat with welcome message
        function initChat() {
            setTimeout(() => {
                addBotMessage(\"Bonjour ! Je suis l'assistant Vehify. Je vais vous aider à évaluer la préparation de votre véhicule avant le contrôle technique.\");
                
                setTimeout(() => {
                    addBotMessage(\"Pour commencer, veuillez télécharger une photo de votre véhicule en cliquant sur le bouton ci-dessous.\");
                    updateProgress(1, 25);
                }, 1000);
            }, 500);
        }
        
        // Add bot message to chat
        function addBotMessage(message, withMedia = null) {
            // Show typing indicator first
            const typingDiv = document.createElement('div');
            typingDiv.className = 'd-flex mb-3';
            typingDiv.innerHTML = `
                <div class=\"avatar avatar-bot me-2\">
                    <i class=\"fas fa-car\"></i>
                </div>
                <div class=\"typing-indicator\">
                    <div class=\"typing-bubble\"></div>
                    <div class=\"typing-bubble\"></div>
                    <div class=\"typing-bubble\"></div>
                </div>
            `;
            chatContainer.appendChild(typingDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
            
            // Remove typing indicator and show actual message after delay
            clearTimeout(typingTimeout);
            typingTimeout = setTimeout(() => {
                chatContainer.removeChild(typingDiv);
                
                const messageDiv = document.createElement('div');
                messageDiv.className = 'd-flex mb-3';
                
                let mediaHTML = '';
                if (withMedia) {
                    mediaHTML = `
                        <div class=\"media-preview\">
                            <img src=\"\${withMedia}\" class=\"img-fluid\" alt=\"Message media\">
                        </div>
                    `;
                }
                
                messageDiv.innerHTML = `
                    <div class=\"avatar avatar-bot me-2\">
                        <i class=\"fas fa-car\"></i>
                    </div>
                    <div class=\"message-bubble message-bot\">
                        <div class=\"message-content\">\${message}</div>
                        \${mediaHTML}
                        <div class=\"message-time\">\${getCurrentTime()}</div>
                    </div>
                `;
                
                chatContainer.appendChild(messageDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }, 1500);
        }
        
        // Add user message to chat
        function addUserMessage(message, withMedia = null) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'd-flex mb-3 justify-content-end';
            
            let mediaHTML = '';
            if (withMedia) {
                mediaHTML = `
                    <div class=\"media-preview\">
                        <img src=\"\${withMedia}\" class=\"img-fluid\" alt=\"User media\">
                    </div>
                `;
            }
            
            messageDiv.innerHTML = `
                <div class=\"message-bubble message-user\">
                    <div class=\"message-content\">\${message}</div>
                    \${mediaHTML}
                    <div class=\"message-time\">\${getCurrentTime()}</div>
                </div>
                <div class=\"avatar ms-2\">
                    <img src=\"https://i.pravatar.cc/150?img=68\" alt=\"User\" class=\"img-fluid\">
                </div>
            `;
            
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }
        
        // Get current time for message timestamp
        function getCurrentTime() {
            const now = new Date();
            return now.getHours().toString().padStart(2, '0') + ':' + 
                   now.getMinutes().toString().padStart(2, '0');
        }
        
        // Update progress bar and stages
        function updateProgress(stage, percent) {
            progressBar.style.width = `\${percent}%`;
            
            // Reset all stages
            [stage1, stage2, stage3, stage4].forEach(el => {
                el.classList.remove('active', 'completed');
            });
            
            // Set current stage as active
            document.getElementById(`stage\${stage}`).classList.add('active');
            
            // Set previous stages as completed
            for (let i = 1; i < stage; i++) {
                document.getElementById(`stage\${i}`).classList.add('completed');
            }
            
            currentStage = stage;
        }
        
        // Show next question in the diagnostic
       function askNextQuestion() {
            if (currentQuestion < questions.length) {
                addBotMessage(questions[currentQuestion]);
                userInput.focus();
            } else {
                calculateResults();
            }
        }
        
        // Calculate diagnostic results based on user responses
        function calculateResults() {
            updateProgress(4, 100);
            
            // Count negative responses
            let negativeCount = 0;
            let totalQuestions = questions.length;
            
            for (let i = 0; i < totalQuestions; i++) {
                const response = userResponses[i].toLowerCase();
                // Questions 0, 1, 4 - \"non\" is good
                // Questions 2, 3 - \"oui\" is good
                if ((i === 0 || i === 1 || i === 4) && response.includes('oui')) {
                    negativeCount++;
                } else if ((i === 2 || i === 3) && response.includes('non')) {
                    negativeCount++;
                }
            }
            
            // Calculate success percentage
            const successPercentage = Math.round(((totalQuestions - negativeCount) / totalQuestions) * 100);
            
            // Add results message
            addBotMessage(\"Analyse terminée ! Je compile les résultats de votre diagnostic...\");
            
            setTimeout(() => {
                // Create results UI
                let resultClass, resultMessage;
                
                if (successPercentage >= 80) {
                    resultClass = \"high-chance\";
                    resultMessage = \"Votre véhicule semble en bon état ! Vous avez de bonnes chances de passer le contrôle technique sans problème majeur.\";
                } else if (successPercentage >= 50) {
                    resultClass = \"medium-chance\";
                    resultMessage = \"Votre véhicule présente quelques problèmes qui pourraient être signalés lors du contrôle technique. Je vous recommande de les faire vérifier avant votre rendez-vous.\";
                } else {
                    resultClass = \"low-chance\";
                    resultMessage = \"Votre véhicule présente plusieurs problèmes qui risquent d'entraîner un refus lors du contrôle technique. Je vous recommande fortement de consulter un mécanicien avant votre rendez-vous.\";
                }
                
                // Display result in the chat
                const resultHTML = `
                    <div class=\"result-container\">
                        <h5 class=\"mb-3\"><i class=\"fas fa-chart-line me-2\"></i>Résultat de votre diagnostic</h5>
                        <div class=\"result-percentage text-center \${resultClass === 'high-chance' ? 'text-success' : resultClass === 'medium-chance' ? 'text-warning' : 'text-danger'}\">
                            \${successPercentage}%
                        </div>
                        <div class=\"result-progress\">
                            <div class=\"result-progress-bar \${resultClass}\" style=\"width: \${successPercentage}%\"></div>
                        </div>
                        <div class=\"result-message\">
                            \${resultMessage}
                        </div>
                    </div>
                `;
                
                addBotMessage(resultHTML);
                
                // After showing results, suggest services
                setTimeout(() => {
                    addBotMessage(\"D'après mon analyse, voici les services que je vous recommande pour préparer votre véhicule au contrôle technique :\");
                    
                    setTimeout(() => {
                        showRecommendedServices(negativeCount);
                    }, 1000);
                }, 2000);
            }, 2000);
        }
        
        // Show recommended services based on diagnostic
        function showRecommendedServices(issuesCount) {
            // Select services based on issues found
            let recommendedServices = [];
            
            if (userResponses[0].toLowerCase().includes('oui')) {
                recommendedServices.push(services[0]); // Electronic diagnostic
            }
            
            if (userResponses[1].toLowerCase().includes('oui')) {
                recommendedServices.push(services[1]); // Fluid check
            }
            
            if (userResponses[2].toLowerCase().includes('non')) {
                recommendedServices.push(services[2]); // Tire check
            }
            
            if (userResponses[3].toLowerCase().includes('non')) {
                recommendedServices.push(services[3]); // Lighting system check
            }
            
            // If no specific issues or user answered everything positively, recommend general check
            if (recommendedServices.length === 0) {
                recommendedServices.push({
                    name: \"Contrôle pré-technique complet\",
                    description: \"Vérification générale de tous les points de contrôle technique\",
                    icon: \"fa-clipboard-check\",
                    color: \"#7209B7\"
                });
            }
            
            // Build services HTML
            let servicesHTML = '<div class=\"services-list mt-3\">';
            
            recommendedServices.forEach(service => {
                servicesHTML += `
                    <div class=\"service-card\">
                        <div class=\"service-icon\" style=\"background-color: \${service.color}\">
                            <i class=\"fas \${service.icon}\"></i>
                        </div>
                        <div class=\"service-details\">
                            <div class=\"service-name\">\${service.name}</div>
                            <p class=\"service-description\">\${service.description}</p>
                        </div>
                        <button class=\"service-action\">
                            Réserver
                        </button>
                    </div>
                `;
            });
            
            servicesHTML += `
                <div class=\"mt-4 text-center\">
                    <button class=\"btn upload-btn action-button\">
                        <i class=\"fas fa-calendar-alt me-2\"></i>Prendre rendez-vous
                    </button>
                </div>
            </div>`;
            
            servicesContainer.innerHTML = servicesHTML;
            servicesContainer.classList.remove('d-none');
            
            // Hide input group when showing services
            document.querySelector('.input-container').classList.add('d-none');
        }
        
        // Handle photo upload
        uploadPhotoBtn.addEventListener('click', function() {
            photoUpload.click();
        });
        
        photoUpload.addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    photoPreview.classList.remove('d-none');
                    photoUploaded = true;
                    
                    // Update stage and progress
                    updateProgress(2, 50);
                    
                    // Add user's photo message
                    addUserMessage(\"J'ai téléchargé une photo de mon véhicule.\", e.target.result);
                    
                    // Bot response after photo upload
                    setTimeout(() => {
                        addBotMessage(\"Merci ! J'analyse votre véhicule...\");
                        
                        // Simulate analysis
                        setTimeout(() => {
                            updateProgress(3, 75);
                            addBotMessage(\"J'ai analysé la photo de votre véhicule. Pour compléter mon diagnostic, merci de répondre aux questions suivantes par <strong>Oui</strong> ou <strong>Non</strong>.\");
                            
                            setTimeout(() => {
                                currentQuestion = 0;
                                askNextQuestion();
                            }, 1000);
                        }, 3000);
                    }, 1000);
                }
                
                reader.readAsDataURL(e.target.files[0]);
            }
        });
        
        // Remove photo handler
        removePhotoBtn.addEventListener('click', function() {
            photoPreview.classList.add('d-none');
            previewImage.src = '';
            photoUploaded = false;
        });
        
        // Send message handler
        function sendMessage() {
            const message = userInput.value.trim();
            if (message === '') return;
            
            // Add user message to chat
            addUserMessage(message);
            userInput.value = '';
            
            // Process response
            if (currentQuestion < questions.length) {
                // Store response
                userResponses[currentQuestion] = message;
                
                // Move to next question
                currentQuestion++;
                
                if (currentQuestion < questions.length) {
                    setTimeout(() => {
                        askNextQuestion();
                    }, 1000);
                } else {
                    setTimeout(() => {
                        calculateResults();
                    }, 1000);
                }
            }
        }
        
        // Event listeners
        sendBtn.addEventListener('click', sendMessage);
        
        userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
        
        // Animation for chat bubbles
        function animateChatBubbles() {
            const chatBubbles = document.querySelectorAll('.message-bubble');
            chatBubbles.forEach((bubble, index) => {
                setTimeout(() => {
                    bubble.style.opacity = 1;
                    bubble.style.transform = 'translateY(0)';
                }, index * 300);
            });
        }
        
        // Add gesture support for mobile (swipe to remove photo)
        let touchStartX = 0;
        let touchEndX = 0;
        
        previewImage.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        });
        
        previewImage.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
        
        function handleSwipe() {
            if (touchStartX - touchEndX > 100) {
                // Swipe left - remove photo
                photoPreview.classList.add('d-none');
                previewImage.src = '';
                photoUploaded = false;
            }
        }
        
        // Initialize the chat
        initChat();
    });
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chatbot/_diagnostic.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Vehify - Diagnostic Pré-Contrôle Technique</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        :root {
            --primary-color: #3454D1;
            --primary-light: #5A77F3;
            --primary-dark: #253AA1;
            --secondary-color: #34D1BF;
            --accent-color: #F06543;
            --success-color: #2DD36F;
            --warning-color: #FFC107;
            --danger-color: #EB445A;
            --light-bg: #F9FAFB;
            --dark-bg: #1F2937;
            --text-light: #F9FAFB;
            --text-dark: #1F2937;
            --shadow-sm: 0 2px 12px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.12);
            --shadow-lg: 0 16px 38px rgba(52, 84, 209, 0.15);
            --radius-sm: 12px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --font-main: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            font-family: var(--font-main);
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
            color: var(--text-dark);
            min-height: 100vh;
        }

        .container {
            max-width: 1100px;
            padding: 2rem 1rem;
        }

        .app-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .app-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(52, 84, 209, 0.2);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            padding: 1.5rem;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            opacity: 0;
            transform: scale(1);
            transition: transform 0.6s ease-out, opacity 0.6s ease-out;
        }

        .app-card:hover .card-header::before {
            opacity: 1;
            transform: scale(1.2);
        }

        .header-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-title .icon {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header h4 {
            margin: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .stages-progress {
            display: flex;
            justify-content: space-between;
            margin: 1rem 0;
            position: relative;
            z-index: 1;
        }

        .stage {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            flex: 1;
        }

        .stage-indicator {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 2;
            transition: all 0.3s ease;
        }

        .stage.active .stage-indicator {
            background: var(--secondary-color);
            transform: scale(1.1);
        }

        .stage.completed .stage-indicator {
            background: var(--success-color);
        }

        .stage-label {
            margin-top: 8px;
            font-size: 0.75rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.8);
            text-align: center;
        }

        .progress-line {
            position: absolute;
            top: 18px;
            left: 18%;
            right: 18%;
            height: 4px;
            background: rgba(255, 255, 255, 0.2);
            z-index: 1;
        }

        .progress-completed {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: var(--secondary-color);
            transition: width 0.5s ease;
        }

        #chat-container {
            height: 380px;
            overflow-y: auto;
            padding: 1.5rem;
            position: relative;
            background: var(--light-bg);
            border-radius: var(--radius-md);
            box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.05);
            scrollbar-width: thin;
            scrollbar-color: var(--primary-light) transparent;
        }

        #chat-container::-webkit-scrollbar {
            width: 6px;
        }

        #chat-container::-webkit-scrollbar-track {
            background: transparent;
        }

        #chat-container::-webkit-scrollbar-thumb {
            background-color: var(--primary-light);
            border-radius: 10px;
        }

        .message-bubble {
            max-width: 80%;
            padding: 1rem 1.25rem;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            margin-bottom: 1rem;
            position: relative;
            animation: fadeInUp 0.3s ease forwards;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .message-user {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border-bottom-right-radius: 4px;
            align-self: flex-end;
            margin-left: auto;
        }

        .message-bot {
            background: white;
            color: var(--text-dark);
            border-bottom-left-radius: 4px;
            align-self: flex-start;
            margin-right: auto;
        }

        .message-content {
            position: relative;
            z-index: 1;
        }

        .message-time {
            font-size: 0.7rem;
            opacity: 0.7;
            position: absolute;
            bottom: 5px;
            right: 10px;
        }

        .media-preview {
            width: 100%;
            border-radius: var(--radius-sm);
            overflow: hidden;
            margin-top: 0.5rem;
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .avatar-bot {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-light));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .actions-container {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .action-button {
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            font-weight: 600;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .action-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255,255,255,0), rgba(255,255,255,0.2), rgba(255,255,255,0));
            transform: translateX(-100%);
            transition: transform 0.6s ease;
            z-index: -1;
        }

        .action-button:hover::before {
            transform: translateX(100%);
        }

        .upload-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
        }

        .upload-btn:hover {
            box-shadow: 0 5px 15px rgba(52, 84, 209, 0.3);
            transform: translateY(-2px);
        }

        .remove-btn {
            background: var(--danger-color);
            color: white;
            border: none;
        }

        .remove-btn:hover {
            box-shadow: 0 5px 15px rgba(235, 68, 90, 0.3);
            transform: translateY(-2px);
        }

        .input-container {
            position: relative;
            margin-top: 1rem;
        }

        .input-group {
            background: white;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            padding: 0.5rem;
            transition: all 0.3s ease;
        }

        .input-group:focus-within {
            box-shadow: 0 5px 20px rgba(52, 84, 209, 0.2);
        }

        #user-input {
            border: none;
            padding: 0.8rem 1rem;
            font-size: 1rem;
            background: transparent;
            width: 100%;
        }

        #user-input:focus {
            outline: none;
        }

        #send-btn {
            width: 45px;
            height: 45px;
            border-radius: var(--radius-sm);
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        #send-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 84, 209, 0.3);
        }

        #send-btn:active {
            transform: translateY(0);
        }

        .input-actions {
            position: absolute;
            bottom: 100%;
            right: 5px;
            display: flex;
            gap: 8px;
            padding: 8px;
        }

        .action-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-sm);
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--primary-color);
        }

        .action-icon:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 84, 209, 0.2);
        }

        #photoPreview {
            background: white;
            border-radius: var(--radius-md);
            padding: 1rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 1.5rem;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        #previewImage {
            border-radius: var(--radius-sm);
            max-height: 200px;
            object-fit: cover;
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .result-container {
            padding: 1.5rem;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, #ffffff, var(--light-bg));
            box-shadow: var(--shadow-md);
            margin: 1.5rem 0;
        }

        .result-progress {
            position: relative;
            height: 10px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin: 1rem 0;
        }

        .result-progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            border-radius: 10px;
            transition: width 1s ease;
        }

        .high-chance {
            background: linear-gradient(90deg, var(--success-color), #8BED4F);
        }

        .medium-chance {
            background: linear-gradient(90deg, var(--warning-color), #FFD93D);
        }

        .low-chance {
            background: linear-gradient(90deg, var(--danger-color), #FF884D);
        }

        .result-percentage {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .result-message {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .service-card {
            background: white;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            padding: 1.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .service-icon {
            width: 50px;
            height: 50px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .service-details {
            flex-grow: 1;
        }

        .service-name {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .service-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .service-action {
            padding: 8px 15px;
            border-radius: var(--radius-sm);
            background: var(--primary-light);
            color: white;
            font-weight: 500;
            font-size: 0.9rem;
            border: none;
            transition: all 0.3s ease;
        }

        .service-action:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .typing-indicator {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            width: fit-content;
        }

        .typing-bubble {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary-color);
            margin: 0 2px;
            animation: typing-bubble 1.2s infinite ease-in-out;
        }

        .typing-bubble:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-bubble:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes typing-bubble {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .app-card {
                border-radius: var(--radius-md);
            }

            .header-title .icon {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }

            .card-header h4 {
                font-size: 1.2rem;
            }

            .stages-progress {
                margin-top: 0.5rem;
            }

            .stage-indicator {
                width: 28px;
                height: 28px;
                font-size: 0.8rem;
            }

            .stage-label {
                display: none;
            }

            .progress-line {
                top: 14px;
            }

            #chat-container {
                height: 320px;
                padding: 1rem;
            }

            .message-bubble {
                padding: 0.8rem 1rem;
                max-width: 90%;
            }

            .avatar {
                width: 36px;
                height: 36px;
            }

            .actions-container {
                padding: 1rem;
                gap: 0.8rem;
            }

            .action-button {
                padding: 0.8rem 1.2rem;
                font-size: 0.9rem;
            }

            #send-btn {
                width: 40px;
                height: 40px;
            }

            #user-input {
                padding: 0.7rem 0.8rem;
                font-size: 0.9rem;
            }

            .result-percentage {
                font-size: 1.5rem;
            }

            .result-message {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"app-card\">
                    <!-- Card Header -->
                    <div class=\"card-header text-white\">
                        <div class=\"header-title\">
                            <div class=\"icon\">
                                <i class=\"fas fa-car\"></i>
                            </div>
                            <h4>Vehify - Diagnostic Pré-Contrôle Technique</h4>
                        </div>
                        
                        <!-- Progress Stages -->
                        <div class=\"stages-progress mt-4\">
                            <div class=\"progress-line\">
                                <div class=\"progress-completed\" id=\"progressBar\" style=\"width: 0%\"></div>
                            </div>
                            <div class=\"stage active\" id=\"stage1\">
                                <div class=\"stage-indicator\">1</div>
                                <div class=\"stage-label\">Début</div>
                            </div>
                            <div class=\"stage\" id=\"stage2\">
                                <div class=\"stage-indicator\">2</div>
                                <div class=\"stage-label\">Photo</div>
                            </div>
                            <div class=\"stage\" id=\"stage3\">
                                <div class=\"stage-indicator\">3</div>
                                <div class=\"stage-label\">Diagnostic</div>
                            </div>
                            <div class=\"stage\" id=\"stage4\">
                                <div class=\"stage-indicator\">4</div>
                                <div class=\"stage-label\">Résultat</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card Body -->
                    <div class=\"card-body p-4\">
                        <!-- Chat Container -->
                        <div id=\"chat-container\" class=\"d-flex flex-column\"></div>
                        
                        <!-- Photo Preview (Hidden initially) -->
                        <div id=\"photoPreview\" class=\"d-none\">
                            <h6 class=\"mb-3\"><i class=\"fas fa-image me-2\"></i>Aperçu de votre véhicule</h6>
                            <div class=\"position-relative\">
                                <img id=\"previewImage\" class=\"img-fluid\" alt=\"Vehicle preview\">
                                <button class=\"btn remove-btn position-absolute bottom-0 end-0 m-3\" id=\"removePhotoBtn\">
                                    <i class=\"fas fa-trash-alt me-2\"></i>Supprimer
                                </button>
                            </div>
                        </div>
                        
                        <!-- Input Group -->
                        <div class=\"input-container\">
                            <div class=\"input-group\">
                                <input type=\"text\" id=\"user-input\" class=\"form-control\" placeholder=\"Votre réponse...\">
                                <button class=\"btn\" id=\"send-btn\">
                                    <i class=\"fas fa-paper-plane\"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class=\"actions-container\">
                            <button type=\"button\" class=\"btn upload-btn action-button\" id=\"uploadPhotoBtn\">
                                <i class=\"fas fa-cloud-upload-alt\"></i>
                                Télécharger une photo de votre véhicule
                            </button>
                            <input type=\"file\" id=\"photoUpload\" class=\"d-none\" accept=\"image/*\">
                        </div>
                        
                        <!-- Results Container (Initially Hidden) -->
                        <div id=\"results-container\" class=\"d-none\"></div>
                        
                        <!-- Services Container (Initially Hidden) -->
                        <div id=\"services-container\" class=\"d-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // DOM Elements
        const chatContainer = document.getElementById('chat-container');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');
        const uploadPhotoBtn = document.getElementById('uploadPhotoBtn');
        const photoUpload = document.getElementById('photoUpload');
        const photoPreview = document.getElementById('photoPreview');
        const previewImage = document.getElementById('previewImage');
        const removePhotoBtn = document.getElementById('removePhotoBtn');
        const progressBar = document.getElementById('progressBar');
        const resultsContainer = document.getElementById('results-container');
        const servicesContainer = document.getElementById('services-container');
        
        // Stage Elements
        const stage1 = document.getElementById('stage1');
        const stage2 = document.getElementById('stage2');
        const stage3 = document.getElementById('stage3');
        const stage4 = document.getElementById('stage4');
        
        // State Variables
        let currentStage = 1;
        let photoUploaded = false;
        let currentQuestion = 0;
        let userResponses = {};
        let typingTimeout;
        
        // Questions for diagnostic
        const questions = [
            \"Votre témoin moteur est-il allumé ?\",
            \"Avez-vous des fuites visibles sous le véhicule ?\",
            \"Vos pneus sont-ils en bon état (profondeur des sculptures suffisante) ?\",
            \"Vos feux (phares, clignotants, feux stop) fonctionnent-ils tous correctement ?\",
            \"Avez-vous remarqué des bruits anormaux lors du freinage ?\"
        ];
        
        // Services recommended based on responses
        const services = [
            {
                name: \"Pré-diagnostic électronique\",
                description: \"Lecture complète des codes défauts et analyse des systèmes électroniques\",
                icon: \"fa-microchip\",
                color: \"#4361EE\"
            },
            {
                name: \"Contrôle des fluides\",
                description: \"Vérification et remise à niveau des liquides essentiels\",
                icon: \"fa-tint\",
                color: \"#3A86FF\"
            },
            {
                name: \"Vérification des pneumatiques\",
                description: \"Contrôle de l'état, pression et géométrie des pneus\",
                icon: \"fa-dharmachakra\",
                color: \"#4CC9F0\"
            },
            {
                name: \"Test du système d'éclairage\",
                description: \"Vérification complète de tous les feux et remplacement si nécessaire\",
                icon: \"fa-lightbulb\",
                color: \"#F72585\"
            }
        ];
        
        // Initialize chat with welcome message
        function initChat() {
            setTimeout(() => {
                addBotMessage(\"Bonjour ! Je suis l'assistant Vehify. Je vais vous aider à évaluer la préparation de votre véhicule avant le contrôle technique.\");
                
                setTimeout(() => {
                    addBotMessage(\"Pour commencer, veuillez télécharger une photo de votre véhicule en cliquant sur le bouton ci-dessous.\");
                    updateProgress(1, 25);
                }, 1000);
            }, 500);
        }
        
        // Add bot message to chat
        function addBotMessage(message, withMedia = null) {
            // Show typing indicator first
            const typingDiv = document.createElement('div');
            typingDiv.className = 'd-flex mb-3';
            typingDiv.innerHTML = `
                <div class=\"avatar avatar-bot me-2\">
                    <i class=\"fas fa-car\"></i>
                </div>
                <div class=\"typing-indicator\">
                    <div class=\"typing-bubble\"></div>
                    <div class=\"typing-bubble\"></div>
                    <div class=\"typing-bubble\"></div>
                </div>
            `;
            chatContainer.appendChild(typingDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
            
            // Remove typing indicator and show actual message after delay
            clearTimeout(typingTimeout);
            typingTimeout = setTimeout(() => {
                chatContainer.removeChild(typingDiv);
                
                const messageDiv = document.createElement('div');
                messageDiv.className = 'd-flex mb-3';
                
                let mediaHTML = '';
                if (withMedia) {
                    mediaHTML = `
                        <div class=\"media-preview\">
                            <img src=\"\${withMedia}\" class=\"img-fluid\" alt=\"Message media\">
                        </div>
                    `;
                }
                
                messageDiv.innerHTML = `
                    <div class=\"avatar avatar-bot me-2\">
                        <i class=\"fas fa-car\"></i>
                    </div>
                    <div class=\"message-bubble message-bot\">
                        <div class=\"message-content\">\${message}</div>
                        \${mediaHTML}
                        <div class=\"message-time\">\${getCurrentTime()}</div>
                    </div>
                `;
                
                chatContainer.appendChild(messageDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }, 1500);
        }
        
        // Add user message to chat
        function addUserMessage(message, withMedia = null) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'd-flex mb-3 justify-content-end';
            
            let mediaHTML = '';
            if (withMedia) {
                mediaHTML = `
                    <div class=\"media-preview\">
                        <img src=\"\${withMedia}\" class=\"img-fluid\" alt=\"User media\">
                    </div>
                `;
            }
            
            messageDiv.innerHTML = `
                <div class=\"message-bubble message-user\">
                    <div class=\"message-content\">\${message}</div>
                    \${mediaHTML}
                    <div class=\"message-time\">\${getCurrentTime()}</div>
                </div>
                <div class=\"avatar ms-2\">
                    <img src=\"https://i.pravatar.cc/150?img=68\" alt=\"User\" class=\"img-fluid\">
                </div>
            `;
            
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }
        
        // Get current time for message timestamp
        function getCurrentTime() {
            const now = new Date();
            return now.getHours().toString().padStart(2, '0') + ':' + 
                   now.getMinutes().toString().padStart(2, '0');
        }
        
        // Update progress bar and stages
        function updateProgress(stage, percent) {
            progressBar.style.width = `\${percent}%`;
            
            // Reset all stages
            [stage1, stage2, stage3, stage4].forEach(el => {
                el.classList.remove('active', 'completed');
            });
            
            // Set current stage as active
            document.getElementById(`stage\${stage}`).classList.add('active');
            
            // Set previous stages as completed
            for (let i = 1; i < stage; i++) {
                document.getElementById(`stage\${i}`).classList.add('completed');
            }
            
            currentStage = stage;
        }
        
        // Show next question in the diagnostic
       function askNextQuestion() {
            if (currentQuestion < questions.length) {
                addBotMessage(questions[currentQuestion]);
                userInput.focus();
            } else {
                calculateResults();
            }
        }
        
        // Calculate diagnostic results based on user responses
        function calculateResults() {
            updateProgress(4, 100);
            
            // Count negative responses
            let negativeCount = 0;
            let totalQuestions = questions.length;
            
            for (let i = 0; i < totalQuestions; i++) {
                const response = userResponses[i].toLowerCase();
                // Questions 0, 1, 4 - \"non\" is good
                // Questions 2, 3 - \"oui\" is good
                if ((i === 0 || i === 1 || i === 4) && response.includes('oui')) {
                    negativeCount++;
                } else if ((i === 2 || i === 3) && response.includes('non')) {
                    negativeCount++;
                }
            }
            
            // Calculate success percentage
            const successPercentage = Math.round(((totalQuestions - negativeCount) / totalQuestions) * 100);
            
            // Add results message
            addBotMessage(\"Analyse terminée ! Je compile les résultats de votre diagnostic...\");
            
            setTimeout(() => {
                // Create results UI
                let resultClass, resultMessage;
                
                if (successPercentage >= 80) {
                    resultClass = \"high-chance\";
                    resultMessage = \"Votre véhicule semble en bon état ! Vous avez de bonnes chances de passer le contrôle technique sans problème majeur.\";
                } else if (successPercentage >= 50) {
                    resultClass = \"medium-chance\";
                    resultMessage = \"Votre véhicule présente quelques problèmes qui pourraient être signalés lors du contrôle technique. Je vous recommande de les faire vérifier avant votre rendez-vous.\";
                } else {
                    resultClass = \"low-chance\";
                    resultMessage = \"Votre véhicule présente plusieurs problèmes qui risquent d'entraîner un refus lors du contrôle technique. Je vous recommande fortement de consulter un mécanicien avant votre rendez-vous.\";
                }
                
                // Display result in the chat
                const resultHTML = `
                    <div class=\"result-container\">
                        <h5 class=\"mb-3\"><i class=\"fas fa-chart-line me-2\"></i>Résultat de votre diagnostic</h5>
                        <div class=\"result-percentage text-center \${resultClass === 'high-chance' ? 'text-success' : resultClass === 'medium-chance' ? 'text-warning' : 'text-danger'}\">
                            \${successPercentage}%
                        </div>
                        <div class=\"result-progress\">
                            <div class=\"result-progress-bar \${resultClass}\" style=\"width: \${successPercentage}%\"></div>
                        </div>
                        <div class=\"result-message\">
                            \${resultMessage}
                        </div>
                    </div>
                `;
                
                addBotMessage(resultHTML);
                
                // After showing results, suggest services
                setTimeout(() => {
                    addBotMessage(\"D'après mon analyse, voici les services que je vous recommande pour préparer votre véhicule au contrôle technique :\");
                    
                    setTimeout(() => {
                        showRecommendedServices(negativeCount);
                    }, 1000);
                }, 2000);
            }, 2000);
        }
        
        // Show recommended services based on diagnostic
        function showRecommendedServices(issuesCount) {
            // Select services based on issues found
            let recommendedServices = [];
            
            if (userResponses[0].toLowerCase().includes('oui')) {
                recommendedServices.push(services[0]); // Electronic diagnostic
            }
            
            if (userResponses[1].toLowerCase().includes('oui')) {
                recommendedServices.push(services[1]); // Fluid check
            }
            
            if (userResponses[2].toLowerCase().includes('non')) {
                recommendedServices.push(services[2]); // Tire check
            }
            
            if (userResponses[3].toLowerCase().includes('non')) {
                recommendedServices.push(services[3]); // Lighting system check
            }
            
            // If no specific issues or user answered everything positively, recommend general check
            if (recommendedServices.length === 0) {
                recommendedServices.push({
                    name: \"Contrôle pré-technique complet\",
                    description: \"Vérification générale de tous les points de contrôle technique\",
                    icon: \"fa-clipboard-check\",
                    color: \"#7209B7\"
                });
            }
            
            // Build services HTML
            let servicesHTML = '<div class=\"services-list mt-3\">';
            
            recommendedServices.forEach(service => {
                servicesHTML += `
                    <div class=\"service-card\">
                        <div class=\"service-icon\" style=\"background-color: \${service.color}\">
                            <i class=\"fas \${service.icon}\"></i>
                        </div>
                        <div class=\"service-details\">
                            <div class=\"service-name\">\${service.name}</div>
                            <p class=\"service-description\">\${service.description}</p>
                        </div>
                        <button class=\"service-action\">
                            Réserver
                        </button>
                    </div>
                `;
            });
            
            servicesHTML += `
                <div class=\"mt-4 text-center\">
                    <button class=\"btn upload-btn action-button\">
                        <i class=\"fas fa-calendar-alt me-2\"></i>Prendre rendez-vous
                    </button>
                </div>
            </div>`;
            
            servicesContainer.innerHTML = servicesHTML;
            servicesContainer.classList.remove('d-none');
            
            // Hide input group when showing services
            document.querySelector('.input-container').classList.add('d-none');
        }
        
        // Handle photo upload
        uploadPhotoBtn.addEventListener('click', function() {
            photoUpload.click();
        });
        
        photoUpload.addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    photoPreview.classList.remove('d-none');
                    photoUploaded = true;
                    
                    // Update stage and progress
                    updateProgress(2, 50);
                    
                    // Add user's photo message
                    addUserMessage(\"J'ai téléchargé une photo de mon véhicule.\", e.target.result);
                    
                    // Bot response after photo upload
                    setTimeout(() => {
                        addBotMessage(\"Merci ! J'analyse votre véhicule...\");
                        
                        // Simulate analysis
                        setTimeout(() => {
                            updateProgress(3, 75);
                            addBotMessage(\"J'ai analysé la photo de votre véhicule. Pour compléter mon diagnostic, merci de répondre aux questions suivantes par <strong>Oui</strong> ou <strong>Non</strong>.\");
                            
                            setTimeout(() => {
                                currentQuestion = 0;
                                askNextQuestion();
                            }, 1000);
                        }, 3000);
                    }, 1000);
                }
                
                reader.readAsDataURL(e.target.files[0]);
            }
        });
        
        // Remove photo handler
        removePhotoBtn.addEventListener('click', function() {
            photoPreview.classList.add('d-none');
            previewImage.src = '';
            photoUploaded = false;
        });
        
        // Send message handler
        function sendMessage() {
            const message = userInput.value.trim();
            if (message === '') return;
            
            // Add user message to chat
            addUserMessage(message);
            userInput.value = '';
            
            // Process response
            if (currentQuestion < questions.length) {
                // Store response
                userResponses[currentQuestion] = message;
                
                // Move to next question
                currentQuestion++;
                
                if (currentQuestion < questions.length) {
                    setTimeout(() => {
                        askNextQuestion();
                    }, 1000);
                } else {
                    setTimeout(() => {
                        calculateResults();
                    }, 1000);
                }
            }
        }
        
        // Event listeners
        sendBtn.addEventListener('click', sendMessage);
        
        userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
        
        // Animation for chat bubbles
        function animateChatBubbles() {
            const chatBubbles = document.querySelectorAll('.message-bubble');
            chatBubbles.forEach((bubble, index) => {
                setTimeout(() => {
                    bubble.style.opacity = 1;
                    bubble.style.transform = 'translateY(0)';
                }, index * 300);
            });
        }
        
        // Add gesture support for mobile (swipe to remove photo)
        let touchStartX = 0;
        let touchEndX = 0;
        
        previewImage.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        });
        
        previewImage.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
        
        function handleSwipe() {
            if (touchStartX - touchEndX > 100) {
                // Swipe left - remove photo
                photoPreview.classList.add('d-none');
                previewImage.src = '';
                photoUploaded = false;
            }
        }
        
        // Initialize the chat
        initChat();
    });
    </script>
</body>
</html>", "chatbot/_diagnostic.html.twig", "C:\\Users\\motez\\OneDrive\\Bureau\\template-master - Copie\\template-master - Copie\\templates\\chatbot\\_diagnostic.html.twig");
    }
}
