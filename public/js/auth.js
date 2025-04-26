

    // Gestion du reCAPTCHA
    var recaptchaLoaded = false;
    
    function onRecaptchaLoad() {
        recaptchaLoaded = true;
        console.log('reCAPTCHA loaded');
        
        // Render pour le formulaire d'inscription
        if (document.getElementById('recaptcha-container')) {
            grecaptcha.render('recaptcha-container', {
                sitekey: '{{ recaptcha_site_key }}',
                theme: 'light',
                size: 'normal',
                callback: function(token) {
                    console.log('Register reCAPTCHA token:', token);
                    document.getElementById('recaptcha-error').style.display = 'none';
                },
                'expired-callback': function() {
                    console.log('Register reCAPTCHA expired');
                    document.getElementById('recaptcha-error').textContent = 'reCAPTCHA expired. Please verify again.';
                    document.getElementById('recaptcha-error').style.display = 'block';
                },
                'error-callback': function() {
                    console.log('Register reCAPTCHA error');
                    showRecaptchaError('recaptcha-error', 'Error loading reCAPTCHA. Please try again.');
                }
            });
        }
        
        // Render pour le formulaire de connexion
        if (document.getElementById('login-recaptcha-container')) {
            grecaptcha.render('login-recaptcha-container', {
                sitekey: '{{ recaptcha_site_key }}',
                theme: 'light',
                size: 'normal',
                callback: function(token) {
                    console.log('Login reCAPTCHA token:', token);
                    document.getElementById('login-recaptcha-error').style.display = 'none';
                },
                'expired-callback': function() {
                    console.log('Login reCAPTCHA expired');
                    document.getElementById('login-recaptcha-error').textContent = 'reCAPTCHA expired. Please verify again.';
                    document.getElementById('login-recaptcha-error').style.display = 'block';
                },
                'error-callback': function() {
                    console.log('Login reCAPTCHA error');
                    showRecaptchaError('login-recaptcha-error', 'Error loading reCAPTCHA. Please try again.');
                }
            });
        }
    }
    
    function showRecaptchaError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.style.display = 'block';
            errorElement.classList.add('recaptcha-shake');
            setTimeout(() => errorElement.classList.remove('recaptcha-shake'), 500);
        }
    }
    
    // Fallback si reCAPTCHA ne se charge pas
    setTimeout(function() {
        if (!recaptchaLoaded) {
            console.error('reCAPTCHA failed to load');
            showRecaptchaError('recaptcha-error', 'reCAPTCHA failed to load. Please refresh the page.');
            showRecaptchaError('login-recaptcha-error', 'reCAPTCHA failed to load. Please refresh the page.');
        }
    }, 5000);
    
    // Gestion des formulaires
    document.addEventListener('DOMContentLoaded', function() {
        // Animation entre les panneaux
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');
        
        if (signUpButton && signInButton && container) {
            signUpButton.addEventListener('click', () => container.classList.add("right-panel-active"));
            signInButton.addEventListener('click', () => container.classList.remove("right-panel-active"));
        }
        
        // Validation des formulaires
        const registerForm = document.getElementById('registerForm');
        const loginForm = document.getElementById('loginForm');
        
        if (registerForm) {
            registerForm.addEventListener('submit', function(e) {
                if (!validateRecaptcha('recaptcha-container', 'recaptcha-error')) {
                    e.preventDefault();
                }
            });
        }
        
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                if (!validateRecaptcha('login-recaptcha-container', 'login-recaptcha-error')) {
                    e.preventDefault();
                }
            });
        }
    });
    
    function validateRecaptcha(containerId, errorId) {
        if (!recaptchaLoaded) {
            showRecaptchaError(errorId, 'reCAPTCHA not loaded. Please refresh the page.');
            return false;
        }
        
        const response = grecaptcha.getResponse();
        if (!response || response.length === 0) {
            showRecaptchaError(errorId, 'Please complete the reCAPTCHA verification.');
            document.getElementById(containerId).classList.add('recaptcha-shake');
            setTimeout(() => document.getElementById(containerId).classList.remove('recaptcha-shake'), 500);
            return false;
        }
        
        return true;
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Références aux éléments DOM
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        // Vérification que les éléments existent
        if (!signUpButton || !signInButton || !container) {
            console.error('Un ou plusieurs éléments requis sont manquants dans le DOM');
            return;
        }

        // Gestionnaires d'événements
        function handleSignUpClick(e) {
            e.preventDefault();
            container.classList.add("right-panel-active");
            setTimeout(() => document.querySelector('.sign-up-container input')?.focus(), 600);
        }

        function handleSignInClick(e) {
            e.preventDefault();
            container.classList.remove("right-panel-active");
            setTimeout(() => document.querySelector('.sign-in-container input')?.focus(), 600);
        }

        // Ajout des écouteurs d'événements
        signUpButton.addEventListener('click', handleSignUpClick);
        signInButton.addEventListener('click', handleSignInClick);

        // Validation en temps réel
        function setupRealTimeValidation() {
            // Validation pour le formulaire d'inscription
            const signUpForm = document.querySelector('.sign-up-container form');
            if (signUpForm) {
                setupFormValidation(signUpForm, {
                    'user_registration_form_nom': { required: true, minLength: 2 },
                    'user_registration_form_prenom': { required: true, minLength: 2 },
                    'user_registration_form_email': { required: true, email: true },
                    'user_registration_form_mot_de_passe': { required: true, minLength: 6 },
                    'user_registration_form_tel': { phone: true },
                    'user_registration_form_localisation': { required: false }
                });
            }

            // Validation pour le formulaire de connexion
            const signInForm = document.querySelector('.sign-in-container form');
            if (signInForm) {
                setupFormValidation(signInForm, {
                    'login_form_email': { required: true, email: true },
                    'login_form_mot_de_passe': { required: true }
                });
            }
        }

        // Configuration de la validation pour un formulaire
        function setupFormValidation(form, fieldsConfig) {
            Object.keys(fieldsConfig).forEach(fieldName => {
                const input = form.querySelector(`[name="${fieldName}"]`);
                if (!input) return;

                const config = fieldsConfig[fieldName];

                // Validation lors de la perte de focus
                input.addEventListener('blur', () => validateField(input, config));

                // Validation en temps réel (pour certains champs)
                if (fieldName.includes('email') || fieldName.includes('tel')) {
                    input.addEventListener('input', debounce(() => validateField(input, config), 500));
                }
            });

            // Validation globale à la soumission
            form.addEventListener('submit', function(e) {
                let isValid = true;
                Object.keys(fieldsConfig).forEach(fieldName => {
                    const input = form.querySelector(`[name="${fieldName}"]`);
                    if (input && !validateField(input, fieldsConfig[fieldName])) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    // Scroll vers le premier champ invalide
                    const firstInvalid = form.querySelector('.is-invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            });
        }

        // Valide un champ selon sa configuration
        function validateField(input, config) {
            const value = input.value.trim();
            let isValid = true;
            let errorMessage = '';

            // Vérification des règles
            if (config.required && !value) {
                isValid = false;
                errorMessage = 'Ce champ est obligatoire';
            } else if (config.minLength && value.length < config.minLength) {
                isValid = false;
                errorMessage = `Doit contenir au moins ${config.minLength} caractères`;
            } else if (config.email && !isValidEmail(value)) {
                isValid = false;
                errorMessage = 'Veuillez entrer une adresse email valide';
            } else if (config.phone && value && !isValidPhone(value)) {
                isValid = false;
                errorMessage = 'Veuillez entrer un numéro de téléphone valide';
            }

            // Mise à jour de l'UI
            updateFieldValidationState(input, isValid, errorMessage);
            return isValid;
        }

        // Met à jour l'état visuel du champ
        function updateFieldValidationState(input, isValid, errorMessage) {
            const formGroup = input.closest('.form-group');
            if (!formGroup) return;

            // Supprime les anciens messages d'erreur
            const existingError = formGroup.querySelector('.real-time-error');
            if (existingError) existingError.remove();

            // Met à jour les classes
            input.classList.toggle('is-invalid', !isValid);
            input.classList.toggle('is-valid', isValid && input.value.trim() !== '');

            // Ajoute le message d'erreur si nécessaire
            if (!isValid) {
                const errorElement = document.createElement('div');
                errorElement.className = 'real-time-error invalid-feedback';
                errorElement.textContent = errorMessage;
                formGroup.appendChild(errorElement);
            }
        }

        // Fonctions de validation
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        function isValidPhone(phone) {
            return /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/.test(phone);
        }

        // Anti-rebond pour les événements de saisie
        function debounce(func, wait) {
            let timeout;
            return function() {
                const context = this, args = arguments;
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(context, args), wait);
            };
        }

        // Initialisation
        setupRealTimeValidation();
        checkForErrors();
        highlightInvalidFields();

        // Vérifie les erreurs existantes
        function checkForErrors() {
            const signUpErrors = document.querySelectorAll('.sign-up-container .is-invalid');
            const signInErrors = document.querySelectorAll('.sign-in-container .is-invalid');

            if (signUpErrors.length > 0) {
                container.classList.add("right-panel-active");
            } else if (signInErrors.length > 0) {
                container.classList.remove("right-panel-active");
            }
        }

        // Animation pour les champs invalides
        function highlightInvalidFields() {
            document.querySelectorAll('.is-invalid').forEach(field => {
                field.addEventListener('focus', () => field.classList.add('invalid-highlight'));
                field.addEventListener('blur', () => field.classList.remove('invalid-highlight'));
            });
        }
        // Validation pour le formulaire de connexion
        const signInForm = document.querySelector('.sign-in-container form');
        if (signInForm) {
            signInForm.addEventListener('submit', function (e) {
                let isValid = true;

                // Vérification de l'email
                const emailInput = signInForm.querySelector('[name="email"]');
                const emailError = signInForm.querySelector('.email-error');
                if (!emailInput.value.trim()) {
                    emailInput.classList.add('is-invalid');
                    emailError.style.display = 'block';
                    isValid = false;
                } else {
                    emailInput.classList.remove('is-invalid');
                    emailError.style.display = 'none';
                }

                // Vérification du mot de passe
                const passwordInput = signInForm.querySelector('[name="mot_de_passe"]');
                const passwordError = signInForm.querySelector('.password-error');
                if (!passwordInput.value.trim()) {
                    passwordInput.classList.add('is-invalid');
                    passwordError.style.display = 'block';
                    isValid = false;
                } else {
                    passwordInput.classList.remove('is-invalid');
                    passwordError.style.display = 'none';
                }

                if (!isValid) {
                    e.preventDefault();
                    // Scroll vers le premier champ invalide
                    const firstInvalid = signInForm.querySelector('.is-invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({behavior: 'smooth', block: 'center'});
                    }
                }
            });

            // Optionnel: Validation en temps réel
            const emailInput = signInForm.querySelector('[name="email"]');
            const passwordInput = signInForm.querySelector('[name="mot_de_passe"]');

            if (emailInput) {
                emailInput.addEventListener('input', function () {
                    if (this.value.trim()) {
                        this.classList.remove('is-invalid');
                        signInForm.querySelector('.email-error').style.display = 'none';
                    }
                });
            }

            if (passwordInput) {
                passwordInput.addEventListener('input', function () {
                    if (this.value.trim()) {
                        this.classList.remove('is-invalid');
                        signInForm.querySelector('.password-error').style.display = 'none';
                    }
                });
            }
        }});
