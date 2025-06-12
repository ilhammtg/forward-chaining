<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosis Results | Network System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="results-card mb-4">
                    <div class="results-header text-center">
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
                            <div class="disclaimer fade-in mt-4">
                                <strong><i class="bi bi-info-circle-fill"></i> Disclaimer:</strong>
                                This diagnosis is not a substitute for professional technician advice. Please consult
                                your network service provider for proper evaluation.
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
                                <p>Please try to select one of the symptoms.</p>
                            </div>
                        @endif

                        <!-- Back Button -->
                        <div class="text-center mt-4">
                            <a href="/" class="btn btn-back">
                                <i class="bi bi-arrow-left"></i> Back to Symptom Checker
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <p>© {{ date('Y') }} Group one. All rights reserved.</p>
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
                indicator.style.left = '0%';
                indicator.style.opacity = '0';

                setTimeout(() => {
                    indicator.style.transition =
                        'left 1.2s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.6s ease';
                    indicator.style.left = '85%';
                    indicator.style.opacity = '1';
                }, 300);
            }

            // Hover effect for badges
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
