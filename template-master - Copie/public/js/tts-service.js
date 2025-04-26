// public/js/tts-service.js

class TextToSpeechService {
    constructor() {
        this.synth = window.speechSynthesis;
        this.voice = null;
        this.initialized = false;
        this.currentUtterance = null;
    }

    init() {
        if (this.initialized) return;
        
        // Check if browser supports speech synthesis
        if (!('speechSynthesis' in window)) {
            console.error('Text-to-Speech not supported in this browser.');
            return;
        }

        // Get voices and set a default English voice
        this.loadVoices();
        
        // If voices aren't loaded immediately, wait for them
        if (speechSynthesis.onvoiceschanged !== undefined) {
            speechSynthesis.onvoiceschanged = this.loadVoices.bind(this);
        }
        
        this.initialized = true;
    }

    loadVoices() {
        const voices = this.synth.getVoices();
        if (voices.length > 0) {
            // Try to find an English voice
            this.voice = voices.find(voice => voice.lang.includes('en')) || voices[0];
        }
    }

    speak(text) {
        if (!this.initialized) this.init();
        
        // Stop any current speech
        this.stop();
        
        // Check if it's just a single option letter
        if (text.length === 1 && "abcd".includes(text.toLowerCase())) {
            this.speakOptionTone(text);
        } else {
            this.speakFullText(text);
        }
    }

    speakFullText(text) {
        if (!this.synth) return;
        
        const utterance = new SpeechSynthesisUtterance(text);
        if (this.voice) utterance.voice = this.voice;
        utterance.rate = 1.0;
        utterance.pitch = 1.0;
        
        this.currentUtterance = utterance;
        this.synth.speak(utterance);
    }

    speakOptionTone(option) {
        // We'll play a simple beep using AudioContext for option letters
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();
        
        // Different frequencies for different options
        const frequencies = {
            'a': 440, // A4
            'b': 494, // B4
            'c': 523, // C5
            'd': 587  // D5
        };
        
        const frequency = frequencies[option.toLowerCase()] || 400;
        const oscillator = audioContext.createOscillator();
        const gainNode = audioContext.createGain();
        
        oscillator.type = 'sine';
        oscillator.frequency.value = frequency;
        oscillator.connect(gainNode);
        gainNode.connect(audioContext.destination);
        
        gainNode.gain.value = 0.5;
        oscillator.start();
        
        // Stop after 300ms
        setTimeout(() => {
            oscillator.stop();
            // Then speak the letter
            this.speakFullText(option);
        }, 300);
    }

    stop() {
        if (this.synth) {
            this.synth.cancel();
        }
    }
}

// Create a global instance
window.ttsService = new TextToSpeechService();