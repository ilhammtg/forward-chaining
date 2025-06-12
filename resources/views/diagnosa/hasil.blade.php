<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosis Results | Health System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #6c5ce7;
            --primary-light: #a29bfe;
            --primary-dark: #5649c0;
            --secondary: #00cec9;
            --accent: #fd79a8;
            --background: #f9f9ff;
            --card-bg: #ffffff;
            --text: #2d3436;
            --text-light: #636e72;
            --border: #dfe6e9;
            --success: #00b894;
            --warning: #fdcb6e;
            --error: #d63031;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--background);
            color: var(--text);
            background-image: radial-gradient(circle at 1px 1px, var(--border) 1px, transparent 0);
            background-size: 20px 20px;
            min-height: 100vh;
            padding: 2rem;
        }

        .results-card {
            background: var(--card-bg);
            border-radius: 24px;
            box-shadow: 0 15px 50px -10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .results-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px -10px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 2.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-bottom: none;
        }

        .card-header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -30px;
            right: -30px;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .confidence-section {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            backdrop-filter: blur(5px);
            border: 1px solid var(--border);
        }

        .confidence-title {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-light);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .confidence-meter {
            height: 10px;
            background: linear-gradient(90deg, var(--error), var(--warning), var(--success));
            border-radius: 5px;
            margin: 1rem 0;
            position: relative;
            overflow: hidden;
        }

        .confidence-indicator {
            position: absolute;
            height: 20px;
            width: 20px;
            background: white;
            border: 3px solid var(--primary);
            border-radius: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .confidence-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .section-title {
            display: flex;
            align-items: center;
            color: var(--primary);
            margin-bottom: 1.5rem;
            font-size: 1.25rem;
        }

        .section-title i {
            margin-right: 0.75rem;
            font-size: 1.5rem;
        }

        .diagnosis-alert {
            background: rgba(108, 92, 231, 0.08);
            border-left: 4px solid var(--primary);
            border-radius: 0 8px 8px 0;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .diagnosis-alert strong {
            color: var(--primary);
            font-size: 1.1rem;
        }

        .solution-card {
            background: rgba(0, 206, 201, 0.08);
            border-left: 4px solid var(--secondary);
            border-radius: 0 8px 8px 0;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .solution-card p {
            line-height: 1.7;
        }

        .symptoms-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .symptom-badge {
            background: rgba(108, 92, 231, 0.1);
            color: var(--primary);
            padding: 0.75rem 1.25rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }

        .symptom-badge i {
            margin-right: 0.5rem;
            color: var(--primary);
        }

        .symptom-badge:hover {
            background: rgba(108, 92, 231, 0.2);
            transform: translateY(-2px);
        }

        .disclaimer {
            background: rgba(253, 121, 168, 0.08);
            border-left: 4px solid var(--accent);
            border-radius: 0 8px 8px 0;
            padding: 1.5rem;
            margin: 2rem 0;
        }

        .disclaimer strong {
            color: var(--accent);
        }

        .no-results {
            text-align: center;
            padding: 3rem 2rem;
        }

        .no-results-icon {
            font-size: 5rem;
            color: var(--warning);
            margin-bottom: 1.5rem;
        }

        .btn-back {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
            padding: 1rem 2.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            margin-top: 1rem;
        }

        .btn-back i {
            margin-right: 0.75rem;
        }

        .btn-back:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.3);
        }

        .footer {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-light);
            font-size: 0.85rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-in {
            animation: slideIn 0.4s ease forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .card-header {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="results-card mb-4">
                    <div class="card-header text-center">
                        <div class="card-icon">
                            <i class="bi bi-clipboard2-pulse"></i>
                        </div>
                        <h2 class="mb-0">Diagnosis Results</h2>
                        <p class="mb-0 opacity-75">Based on your selected symptoms</p>
                    </div>

                    <div class="card-body p-4">
                        @if ($matchedRule)
                            <!-- Confidence Meter -->
                            <div class="confidence-section fade-in">
                                <div class="confidence-title">
                                    <i class="bi bi-graph-up me-2"></i> DIAGNOSIS CONFIDENCE
                                </div>
                                <div class="confidence-meter">
                                    <div class="confidence-indicator" style="left: 85%;"></div>
                                </div>
                                <div class="confidence-labels">
                                    <span>Low</span>
                                    <span>Medium</span>
                                    <span>High</span>
                                </div>
                            </div>

                            <!-- Diagnosis Result -->
                            <div class="fade-in delay-1">
                                <h3 class="section-title">
                                    <i class="bi bi-exclamation-triangle-fill"></i> Identified Problem
                                </h3>
                                <div class="diagnosis-alert">
                                    <strong>{{ $matchedRule->masalah->nama_masalah }}</strong>
                                </div>
                            </div>

                            <!-- Recommended Solution -->
                            <div class="fade-in delay-2">
                                <h3 class="section-title">
                                    <i class="bi bi-lightbulb-fill"></i> Recommended Solution
                                </h3>
                                <div class="solution-card">
                                    <p>{{ $matchedRule->masalah->solusi->isi_solusi }}</p>
                                </div>
                            </div>

                            <!-- Selected Symptoms -->
                            <div class="fade-in delay-3">
                                <h3 class="section-title">
                                    <i class="bi bi-check-circle-fill"></i> Your Selected Symptoms
                                </h3>
                                <div class="symptoms-grid">
                                    @foreach ($selectedSymptoms as $symptom)
                                        <span class="symptom-badge slide-in"
                                            style="animation-delay: {{ $loop->index * 0.1 + 0.6 }}s">
                                            <i class="bi bi-check-circle-fill"></i>{{ $symptom->nama_gejala }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Disclaimer -->
                            <div class="disclaimer fade-in">
                                <strong><i class="bi bi-info-circle-fill"></i> Disclaimer:</strong>
                                This diagnosis is not a substitute for professional medical advice.
                                Please consult a healthcare provider for proper evaluation.
                            </div>
                        @else
                            <!-- No Results Found -->
                            <div class="no-results fade-in">
                                <div class="no-results-icon">
                                    <i class="bi bi-question-circle-fill"></i>
                                </div>
                                <h3 class="mb-3">No Diagnosis Found</h3>
                                <p class="text-muted mb-4">We couldn't find a matching diagnosis based on your selected
                                    symptoms.</p>
                                <p>Please try selecting different symptoms or consult with a healthcare professional.
                                </p>
                            </div>
                        @endif

                        <div class="text-center mt-4">
                            <a href="/" class="btn btn-back">
                                <i class="bi bi-arrow-left"></i> Back to Symptom Checker
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <p>© {{ date('Y') }} Health Diagnosis System. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate confidence indicator
            const indicator = document.querySelector('.confidence-indicator');
            if (indicator) {
                // Reset to 0
                indicator.style.left = '0%';
                indicator.style.opacity = '0';

                // Animate to final position
                setTimeout(() => {
                    indicator.style.transition =
                        'left 1.2s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.6s ease';
                    indicator.style.left = '85%';
                    indicator.style.opacity = '1';
                }, 300);
            }

            // Add hover effect to symptom badges
            const badges = document.querySelectorAll('.symptom-badge');
            badges.forEach(badge => {
                badge.addEventListener('mouseenter', () => {
                    badge.style.transform = 'translateY(-3px)';
                    badge.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
                });
                badge.addEventListener('mouseleave', () => {
                    badge.style.transform = '';
                    badge.style.boxShadow = '';
                });
            });
        });
    </script>
</body>

</html>
